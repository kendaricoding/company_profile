<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_pages');
	}

	public function index()
	{
		// $this->load->view('depan/v_isi.php');
		$data = array(
					 	'title' => 'Halaman Home' 
					 );

		$data['data_judul']		= $this->M_pages->get_judul_company()->row_array();
		$data['data_deskripsi']	= $this->M_pages->get_deskripsi_company()->row_array();

		// echo "<pre>";
		// print_r($data);
		// die;
		// echo "</pre>";

		$this->template->load('template','depan/v_isi', $data);

		// var_dump($data);
		// die;
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/front/Home.php */