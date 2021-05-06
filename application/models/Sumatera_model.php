<?php

class Sumatera_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_sumatra')->result_array();
        }
        else
        {
            return $this->db->get_where('t_sumatra', ['id' => $id])->result_array();
        }
    }
}
