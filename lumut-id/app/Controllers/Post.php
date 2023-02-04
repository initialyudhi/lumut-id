<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index()
    {
         
        $data = [ 
            'page_title' => 'Post',
            'page_content' => 'post/post-list',
        ];
        return view('page-logged', $data); 
    }

}