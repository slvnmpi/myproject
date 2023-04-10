<?php

namespace App\Controllers;

class Transactions extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Transactions',
        ];
        echo view('pages/transactions',$data);
        
    }
}
