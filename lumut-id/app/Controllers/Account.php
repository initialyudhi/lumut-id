<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index()
    {
        $userModel = model('AccountModel');

        $data = [ 
            'page_title' => 'Account',
            'page_content' => 'account/account-list',
        ];

        $data['resultData'] = $userModel->asObject()->findAll();
        return view('page-logged', $data); 
    }

    public function create(){
         
         
        $data = [ 
            'page_title' => 'Account Add',
            'page_content' => 'account/account-form',
        ];
            $data['isAdd'] = true; 
            $data['username']= '';
            $data['name']='';
            $data['role']='admin';
            $data['passowrd']=''; 
        
            

           
            return view('page-logged', $data); 
    }

    public function save(){
        
            
            $data['username']= '';
            $data['name']='';
            $data['role']='admin';
            $data['passowrd']=''; 
        
            
 
    }


    public function edit($username){
        
          
        $data = [ 
            'page_title' => 'Account edit',
            'page_content' => 'account/account-form',
        ];
            $userModel = model('AccountModel');
            $user = $userModel->asObject()->where('username',$username)->first();
            $data['isAdd'] = false; 
            $data['username']= $user->username;
            $data['role']=$user->role; 
            $data['name']=$user->name; 
            $data['passowrd']=''; 
          
            return view('page-logged', $data); 
 
    }
}