<?php

class Jawa_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_jawa')->result_array();
        }
        else
        {
            return $this->db->get_where('t_jawa', ['id' => $id])->result_array();
        }
    }
}
