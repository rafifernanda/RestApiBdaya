<?php

class Kalimantan_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_kalimantan')->result_array();
        }
        else
        {
            return $this->db->get_where('t_kalimantan', ['id' => $id])->result_array();
        }
    }
}
