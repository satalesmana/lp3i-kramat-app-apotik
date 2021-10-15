<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ObatController extends BaseController
{
    public function index()
    {
        $data['page'] = 'obat/index';
        return view('admin', $data);
    }
}
