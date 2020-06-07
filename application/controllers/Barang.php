<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('Dateindo');
		$this->load->helper('Kosong');
	}
	
	
	public function index()
	{
		$this->load->model('M_barang');
		
		$data['data_barang'] = $this->M_barang->t_barang();
		
		// var_dump($data);
		// die;
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/barang/tampil_barang', $data);
		$this->load->view('admin/footer');
	}

	public function form_barang(){
		$data['title'] = "Tambah Barang";

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/barang/form_barang', $data);
		$this->load->view('admin/footer');
	}

	function qrcode($kodenya = 'kendaricoding.id') {
		// Qr code akan kita render menjadi file format PNG
		qrcode::png(
			$kodenya,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 6,
			$margin = 1
		); 
	}

	
}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */