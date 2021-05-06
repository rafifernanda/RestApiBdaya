<?php

class News_model extends CI_Model
{
    public function getAPI($id = null)
    {
        if ($id == null) {
            return $this->db->get('t_news')->result_array();
        }
        else
        {
            return $this->db->get_where('t_news', ['id' => $id])->result_array();
        }
    }
}
