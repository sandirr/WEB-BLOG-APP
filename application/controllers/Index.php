<?php 

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Index_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('email');
		if(isset($_GET['cari']))
		{
			$cari = $_GET['cari'];
			redirect('/blog?cari='.$_GET['cari']);
		}
	}

	public function index()
	{
		$this->load->view('about');
	}

	public function contact()
	{
	    $_GET['judul'] = 'Contact';
			if ($this->input->post())
			{
                $ci = get_instance();
                $config['protocol'] = "smtp";
                $config['smtp_host'] = "irsandi.id";
                $config['smtp_port'] = "587";
                $config['smtp_user'] = "admin@irsandi.id";
                $config['smtp_pass'] = "Selamanya08011999";
                $config['charset'] = "utf-8";
                $config['mailtype'] = "html";
                $config['newline'] = "\r\n";
                $ci->email->initialize($config);
                
                $nama = htmlspecialchars($this->input->post('nama'));
				$email = htmlspecialchars($this->input->post('email'));
				$nohp = htmlspecialchars($this->input->post('nohp'));
				$pesan = htmlspecialchars($this->input->post('pesan')) ;
				
                $ci->email->from($email, $nama);
                $list = array('admin@irsandi.id');
                $ci->email->to($list);
                $ci->email->subject('Pesan dari '.$nama.' Hp: '.$nohp);
                $ci->email->message($pesan);
                if ($i = $this->email->send()) 
                {
                    $this->session->set_flashdata("message","<div class='alert alert-warning'>Pesan berhasil dikirim.</div>");
                    redirect('/index/contact');
                }
                else 
                {
                    $this->session->set_flashdata("message","<div class='alert alert-warning'>Pesan gagal dikirim</div>");
                // show_error($this->email->print_debugger());   
                }



			}
			$artikelrandom = $this->db->query('SELECT * FROM blog ORDER BY RAND() LIMIT 5');
		    $dara['data2'] = $artikelrandom->result_array();
			
			$this->load->view('contact', $dara);
	}

	

	public function pesan()
	{
	    $_GET['judul'] = 'Pesan';
		if(!isset($_SESSION['login']))
		{
			redirect('/');
		}
		$pesanss = $this->db->query('SELECT * FROM contact');
		$pesans['pesans'] = $pesanss->result_array();

		$this->load->view('pesan', $pesans);
	}

	public function delete($id)
	{
		if(!isset($_SESSION['login']))
		{
			redirect('/');
		}
		$this->db->where('id', $id);
		$this->db->delete('contact');
		redirect('/index/pesan');
		// return $this->db->affected_rows();
	}


}