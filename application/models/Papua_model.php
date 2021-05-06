<?php

class Papua_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_papua')->result_array();
        }
        else
        {
            return $this->db->get_where('t_papua', ['id' => $id])->result_array();
        }
    }
}
