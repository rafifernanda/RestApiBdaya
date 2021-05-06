<?php

class Bali_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_bali')->result_array();
        }
        else
        {
            return $this->db->get_where('t_bali', ['id' => $id])->result_array();
        }
    }
}
