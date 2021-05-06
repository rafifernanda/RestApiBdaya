<?php

class Maluku_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_maluku')->result_array();
        }
        else
        {
            return $this->db->get_where('t_maluku', ['id' => $id])->result_array();
        }
    }
}
