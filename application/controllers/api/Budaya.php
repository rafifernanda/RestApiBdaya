<?php  

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Budaya extends CI_Controller
{
	use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

	public function __construct()
	{
		parent::__construct();
        $this->__resTraitConstruct();
		$this->load->model('Mahasiswa_model');
	}
	public function index_get()

	{
		$id = $this->get('id');
		if ($id === null) {
			$transaksi = $this->Mahasiswa_model->getTransaksi();
		} else {
			$transaksi = $this->Mahasiswa_model->getTransaksi($id);
		}
		

		if ($transaksi)
            {
                // Set the response and exit
                $this->response([
                    'status' => true,
                    'data' => $transaksi
                ], 200); // OK (200) being the HTTP response code
            } else {
            	$this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], 404);
            }
	}

	public function index_delete()
	{
// 		$id = $this->delete('id');
        $id=$this->input->get('id'); 

		if ($id === null) {
			$this->response([
                    'status' => false,
                    'message' => 'provide an id!'
                ], 400);
		} else {
			if($this->Mahasiswa_model->deleteTransaksi($id) > 0) {
				//ok
				$this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], 200);
			} else {
				//id not found
				$this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], 400);
			}
		}

		
		
	}

	public function index_post()
	{
		$data = [
			'id_transaksi' => $this->post('id_transaksi'),
			'tgl_transaksi' => $this->post('tgl_transaksi'),
			'hose_transaksi' => $this->post('hose_transaksi'),
			'konf_transaksi' => $this->post('konf_transaksi'),
			'diameter' => $this->post('diameter'),
			'panjang' => $this->post('panjang'),
			'fitting1' => $this->post('fitting1'),
			'ukuran1' => $this->post('ukuran1'),
			'fitting2' => $this->post('fitting2'),
			'ukuran2' => $this->post('ukuran2'),
			'pn_unit' => $this->post('pn_unit'),
			'aplikasi' => $this->post('aplikasi'),
			'customer' => $this->post('customer'),
			'pn_assy' => $this->post('pn_assy'),
			'pn_assy' => $this->post('pn_assy'),
			'kondisi_transaksi' => $this->post('kondisi_transaksi'),
		];


		if ($this->Mahasiswa_model->createTransaksi($data) > 0) {
			$this->response([
                    'status' => true,
                    'message' => 'data has been created'
                ], 201);
		} else {
				//id not found
				$this->response([
                    'status' => false,
                    'message' => 'failed to create'
                ], 400);
			}
	}

	public function index_put()
	{
// 		$id = $this->put('id');
		$id=$this->input->get('id'); 
		
		$data = [
// 			'hose_transaksi' => $this->put('hose_transaksi'),
// 			'konf_transaksi' => $this->put('konf_transaksi'),
// 			'diameter' => $this->put('diameter'),
// 			'panjang' => $this->put('panjang'),
// 			'fitting1' => $this->put('fitting1'),
// 			'ukuran1' => $this->put('ukuran1'),
// 			'fitting2' => $this->put('fitting2'),
// 			'ukuran2' => $this->put('ukuran2'),
// 			'pn_unit' => $this->put('pn_unit'),
// 			'aplikasi' => $this->put('aplikasi'),
// 			'customer' => $this->put('customer'),
// 			'pn_assy' => $this->put('pn_assy'),
			'kondisi_transaksi' => $this->put('kondisi_transaksi'),
			'lokasi' => $this->put('lokasi')
		];
		
		if ($id === null) {
			$this->response([
			        'name' => 'Bad Request',
                    'status' => 400,
                    'message' => 'Missing required parameters: id',
                    'code' => 0
                ], 400);
		} else {
			if ($this->Mahasiswa_model->updateTransaksi($data, $id) > 0) {
			$this->response([
                    'status' => true,
                    'message' => 'data has been updated'
                ], 200);
		} else {
				//id not found
				$this->response([
                    'status' => false,
                    'message' => 'failed to update'
                ], 400);
			}
		}
		

		

	}
}
