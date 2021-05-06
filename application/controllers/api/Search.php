<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Search extends CI_Controller
{
    use REST_Controller{
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('News_model');

    }

    public function index_get() //read API from table t_jawa
    {
        $id = $this->get('id');
        if ($id === null) {
            $result = $this->News_model->getAPI();
        }
        else {
            $result = $this->News_model->getAPI($id);
        }

        if ($result)
            {
                // Set the response and exit
                $this->response($result
                , 200); // OK (200) being the HTTP response code
            } else {
            	$this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], 404);
            }
    }
}
