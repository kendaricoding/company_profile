<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pages extends CI_Model {

	public function get_data_judul($cat_pages="judul_company", $cat="pages"){
		
		$this->db->where('tbl_tulisan.tulisan_judul', $cat_pages);
		$this->db->where('tbl_tulisan.tulisan_kategori_nama', $cat);
		$data = $this->db->get('tbl_tulisan');
		return $data;
	}

	public function get_data_deskripsi($cat_pages="deskripsi_company", $cat="pages"){
		
		$this->db->where('tbl_tulisan.tulisan_judul', $cat_pages);
		$this->db->where('tbl_tulisan.tulisan_kategori_nama', $cat);
		$data = $this->db->get('tbl_tulisan');
		return $data;
	}

}

/* End of file M_pages.php */
/* Location: ./application/models/M_pages.php */