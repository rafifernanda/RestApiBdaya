<?php

class Comment_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_comment')->result_array();
        }
        else
        {
            return $this->db->get_where('t_comment', ['id' => $id])->result_array();
        }
    }
}
