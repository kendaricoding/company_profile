<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('tampil_mahasiswa');
	}

	public function nilai()
	{
		$data['title'] 		= "Nilai Mahasiswa semester I";
		$data['mahasiswa'] 	= "Ilham Julian Efendi"; 
		$data['nilai'] 		= "A";
		
		$this->load->view('tampil_nilai', $data);
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */