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
		$data = array(
						'title' => 'Halaman Home'  
					 );

		$data['data_judul'] 	= $this->M_pages->get_data_judul()->row_array();
		$data['data_deskripsi'] = $this->M_pages->get_data_deskripsi()->row_array();

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die;

		$this->template->load('depan/template','depan/v_isi', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/front/Home.php */