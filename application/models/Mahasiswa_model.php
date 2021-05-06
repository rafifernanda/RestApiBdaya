<?php

/**
 * 
 */
class Mahasiswa_model extends CI_Model
{
	

	public function getTransaksi($id = null)
	{
		if($id === null){
			return $this->db->get('t_transaksi')->result_array();
		} else {
			return $this->db->get_where('t_transaksi', ['id_transaksi' => $id])->result_array();
		}
		
	}

	public function deleteTransaksi($id)
	{
	    $this->db->where('id_transaksi', $id);
		$this->db->delete('t_transaksi');
		return $this->db->affected_rows();
	}

	public function createTransaksi($data)
	{
		$this->db->insert('t_transaksi', $data);
		return $this->db->affected_rows();
	}

	public function updateTransaksi($data, $id)
	{
	    $this->db->where('id_transaksi', $id);
		$this->db->update('t_transaksi', $data);
		return $this->db->affected_rows();
	}


}