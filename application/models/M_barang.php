<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function t_barang(){
		$this->db->order_by('tulisan_id', 'desc');
		$this->db->where('tbl_tulisan.tulisan_kategori_nama', $cat_pages);
		$query = $this->db->get('tbl_tulisan');
		return $query;
	}

}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */