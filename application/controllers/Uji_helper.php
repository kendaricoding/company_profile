<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uji_helper extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('saya');
		$this->load->library('mylibrary');

	}

	public function index()
	{

		$data['nama_saya'] 	= "Ilham J.E";
		$data['nilai1'] 	= 4;
		$data['nilai2'] 	= 8;
		$data['id_barang']	= 3;

		$data['data_lib'] = $this->mylibrary->libsaya();

		// print_r($data['data_lib']);
		// die;


		$this->load->view('form_uji', $data);
	}

}

/* End of file Uji_helper.php */
/* Location: ./application/controllers/Uji_helper.php */