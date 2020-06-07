<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('saya'))
{
	function tampilkan($nama){
		return "Selamat datang <b>$nama</b> di kendari coding";
	}

	function penjumlahan ($nilai1, $nilai2){
		return $nilai1 + $nilai2;
	}

	function get_data_barang($id_barang){

		$CI =& get_instance();
		$data_barang = $CI->db->get_where('tbl_barang', array('id_barang' => $id_barang))->row_array();
		return $data_barang['nama_barang'];
	}
}