<?php 



class Blog extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();

		$this->load->helper('url');

		$this->load->model('Blog_model');

		$this->load->library('session');

		$this->load->library('pagination');

	}



	public function index($offset = 0)

	{
	    $_GET['judul'] = 'Blog';

		$config['base_url'] = site_url('blog/index');

		$config['total_rows'] = $this->Blog_model->getTotalArtikel();

		$config['per_page'] = 10;

		// $config['display_pages'] = TRUE;

		$config['num_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		$config['num_tag_close'] = '</button>';



		$config['cur_tag_open'] = '<button type="button" class="btn btn-dark btn-sm">';

		$config['cur_tag_close'] = '</button>';



		$config['first_link'] = '<button type="button" class="btn btn-info btn-sm">&laquo;First</button>';



		$config['next_link'] = '<button type="button" class="btn btn-info btn-sm">Next</button>';

		// $config['next_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		// $config['next_tag_close'] = '</button>';



		$config['prev_link'] = '<button type="button" class="btn btn-info btn-sm">Previous</button>';

		// $config['prev_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		// $config['prev_tag_close'] = '</button>';





		$config['last_link'] = '<button type="button" class="btn btn-info btn-sm">Last&raquo;</button>';

		// $config['last_tag_open'] = '<div>';

		// $config['last_tag_close'] = '</div>';  



		$this->pagination->initialize($config);



		$query = $this->Blog_model->getBlogs( $config['per_page'], $offset);



		$dara['blogs'] = $query->result_array();
		$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		$dara['data2'] = $artikelrandom->result_array();





		$this->load->view('blog', $dara );

	}



	public function asc($offset = 0)

	{
	    $_GET['judul'] = 'Blog';

		$config['base_url'] = site_url('blog/asc');

		$config['total_rows'] = $this->Blog_model->getTotalArtikel();

		$config['per_page'] = 10;

		// $config['display_pages'] = TRUE;

		$config['num_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		$config['num_tag_close'] = '</button>';



		$config['cur_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		$config['cur_tag_close'] = '</button>';



		$config['first_link'] = '<button type="button" class="btn btn-info btn-sm">&laquo;First</button>';



		$config['next_link'] = '<button type="button" class="btn btn-info btn-sm">Next</button>';

		// $config['next_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		// $config['next_tag_close'] = '</button>';



		$config['prev_link'] = '<button type="button" class="btn btn-info btn-sm">Previous</button>';

		// $config['prev_tag_open'] = '<button type="button" class="btn btn-info btn-sm">';

		// $config['prev_tag_close'] = '</button>';





		$config['last_link'] = '<button type="button" class="btn btn-info btn-sm">Last&raquo;</button>';

		// $config['last_tag_open'] = '<div>';

		// $config['last_tag_close'] = '</div>';  



		$this->pagination->initialize($config);



		$query = $this->Blog_model->getBlogss( $config['per_page'], $offset);



		$dara['blogs']=  $query->result_array();
        $artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		$dara['data2']= $artikelrandom->result_array();




		$this->load->view('blog', $dara );



	}



	public function detail($url)

	{

		if(isset($_GET['cari']))

		{

			$cari = $_GET['cari'];

			redirect('/blog?cari='.$_GET['cari']);

		}

		$query = $this->Blog_model->getOne('url', $url);



		$dara['data']= $data['blog'] = $query->row_array();
        $artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		$dara['data2']= $randoms['randoms'] = $artikelrandom->result_array();


		$this->load->view('detail', $dara);

	}



	public function add()

	{

		if (isset($_SESSION['login'])) {

			if ($this->input->post())

			{

				$data['title'] = $this->input->post('title');

				$data['content'] = $this->input->post('content');
				
				$data['contents'] = $this->input->post('contents');

				$data['url'] = $this->input->post('url');

				$data['kategori'] = $this->input->post('kategori');



					$config['upload_path']          = './uploads/';

	                $config['allowed_types']        = 'gif|jpg|png|jpeg';

	                $config['max_size']             = 10240000;

	                $config['max_width']            = 10000;

	                $config['max_height']           = 7000;



	                $this->load->library('upload', $config);

	                if ( ! $this->upload->do_upload('cover'))

	                {

	                        echo $this->upload->display_errors();

	                }

	                else

	                {

	                        $data['cover'] = $this->upload->data()['file_name'];

	                }



				$id = $this->Blog_model->add($data);

				if ($id)

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Berhasil Disimpan</div>");

					redirect('/blog/index');

				}

				else

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Gagal Disimpan</div>");

					redirect('/blog/index');

				}

			}

			$this->load->view('formadd');

		}

	}



	public function edit($id)

	{

		if (isset($_SESSION['login']))

		{

			$query = $this->Blog_model->getOne('id',$id);

			$data['blog'] = $query->row_array();



			if ($this->input->post())

			{

				$update['title'] = $this->input->post('title');

				$update['content'] = $this->input->post('content');
				
				$update['contents'] = $this->input->post('contents');

				$update['url'] = $this->input->post('url');

				$update['kategori'] = $this->input->post('kategori');



					$config['upload_path']          = './uploads/';

	                $config['allowed_types']        = 'gif|jpg|png|jpeg';

	                $config['max_size']             = 10240000;

	                $config['max_width']            = 10000;

	                $config['max_height']           = 7000;



	                $this->load->library('upload', $config);

	                if (  $this->upload->do_upload('cover'))

	                {

	                        $update['cover'] = $this->upload->data()['file_name'];

	                }

	 



				$id = $this->Blog_model->update($id, $update);

				if ($id)

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Berhasil Disimpan</div>");

					redirect('/blog/index');

				}

				else

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Gagal Disimpan</div>");

					redirect('/blog/index');

				}

			}

			$this->load->view('edit', $data);

		}

	}

 

	public function delete($id)

	{

		if (isset($_SESSION['login'])) 

		{

			$result=$this->Blog_model->delete($id);

			if ($result)

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Berhasil Dihapus</div>");

					

				}

				else

				{

					$this->session->set_flashdata("message","<div class='alert alert-warning'>Data Gagal Dihapus</div>");

					

				}

			redirect('/');

		}

	}



	public function login()

	{
	    $_GET['judul'] = 'Login';

		if(isset($_GET['cari']))

		{

			$cari = $_GET['cari'];

			redirect('/blog?cari='.$_GET['cari']);

		}

		if($this->input->post())	

		{

			$username = $this->input->post('username');

			$password = $this->input->post('password');

			if ($username== 'andi.irsandi765@gmail.com' && $password=="Selamanya08011999")

			{

				$_SESSION['login']='bisa';


				redirect('/');

			}

			else

			{

				$this->session->set_flashdata("message","<div class='alert alert-warning'>Username/Password Salah</div>");

				redirect('blog/login');

			}

		}

		$this->load->view('login');

	}



	public function logout()

	{

		$this->session->sess_destroy();

		redirect('/');

	}


}