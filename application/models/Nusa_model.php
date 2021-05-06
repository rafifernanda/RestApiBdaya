<?php

class Nusa_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_nusa')->result_array();
        }
        else
        {
            return $this->db->get_where('t_nusa', ['id' => $id])->result_array();
        }
    }
}
