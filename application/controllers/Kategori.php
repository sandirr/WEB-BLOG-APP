<?php 

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Index_model');
		$this->load->library('session');
		$this->load->library('pagination');
		if(isset($_GET['cari']))
		{
			$cari = $_GET['cari'];
			redirect('/blog?cari='.$_GET['cari']);
		}
	}

	
	public function webdesign($offset = 0)
	{
			$kat = 'Web Design';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/webdesign');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogs($kat, $config['per_page'], $offset);
            $artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2']=  $artikelrandom->result_array();
			$dara['blogss']=  $query->result_array();
			$this->load->view('kategori/webdesign', $dara);
	}

	public function programming($offset = 0)
	{
			$kat = 'Programming';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/programming');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogs($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss'] = $query->result_array();
			$this->load->view('kategori/programming', $dara);
	}

	public function teknonews($offset = 0)
	{
			$kat = 'Tekno News';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/teknonews');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogs($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']= $query->result_array();
			$this->load->view('kategori/teknonews', $dara);
	}

	public function tipstricks($offset = 0)
	{
			$kat = 'Tips & Tricks';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/tipstricks');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogs($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']= $query->result_array();
			$this->load->view('kategori/tipstricks', $dara);
	}

	// ini asc
	public function webdesignasc($offset = 0)
	{
			$kat = 'Web Design';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/webdesignasc');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogss($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']= $query->result_array();
			$this->load->view('kategori/webdesign', $dara);
	}

	public function programmingasc($offset = 0)
	{
			$kat = 'Programming';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/programmingasc');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogss($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']= $query->result_array();
			$this->load->view('kategori/programming', $dara);
	}

	public function teknonewsasc($offset = 0)
	{
			$kat = 'Tekno News';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/teknonewsasc');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogss($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']= $query->result_array();
			$this->load->view('kategori/teknonews', $dara);
	}

	public function tipstricksasc($offset = 0)
	{
			$kat = 'Tips & Tricks';
			$_GET['judul'] = $kat;
			$config['base_url'] = site_url('index/tipstricksasc');
			$config['total_rows'] = $this->Index_model->getTotalArtikel($kat);
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
				
			$query = $this->Index_model->getBlogss($kat, $config['per_page'], $offset);

			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			$dara['blogss']=  $query->result_array();
			$this->load->view('kategori/tipstricks', $dara);
	}




}