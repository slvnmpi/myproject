<?php

namespace App\Controllers;

class Sales extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sales',
        ];
        echo view('pages/sales',$data);
        
    }
}
