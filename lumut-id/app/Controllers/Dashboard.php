<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
         
        $data = [ 
            'page_title' => 'Dashboard',
            'page_content' => 'dashboard/dashboard',
        ];
        return view('page-logged', $data); 
    }
}
