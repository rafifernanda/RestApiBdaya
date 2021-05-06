<?php

class Profile_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_user')->result_array();
        }
        else
        {
            return $this->db->get_where('t_user', ['id' => $id])->result_array();
        }
    }
}
