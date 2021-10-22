<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ObatController extends BaseController
{
	var $ObatModel;

	public function __construct(){
		$this->ObatModel = new \App\Models\Obat();
	}
	

    public function index()
    {
    	
    	$data['obat'] = $this->ObatModel->findAll();
        $data['page'] = 'obat/index';
        return view('admin', $data);
    }

    public function delete($id){
    	$this->ObatModel->delete($id);
    }

    public function show($id){
    	$data =  $this->ObatModel->find($id);
    	return $this->response->setJSON($data);
    }
}
