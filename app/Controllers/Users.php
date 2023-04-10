<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Users',
        ];
        echo view('pages/users',$data);
        
    }
}
