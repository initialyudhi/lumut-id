<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
         
        $data = [ 
            'page_title' => 'Login',
            'page_content' => 'auth/login',
        ];
        return view('page-nologged', $data); 
    }

    public function login(){
		 
		$error=0;
		if ( $this->request->getPost('username')) {
			$session= session();
		   
			$message = [];
			$userModel = model('AccountModel');
 
            $data = $userModel->asObject()->where([
                'username'=>$this->request->getPost('username')
            ])->first(); 
			  

			if (isset($data->password)) {
				if (password_verify( $this->request->getPost('password'), $data->password)) {
					$data=[
						'isLoggedIn' => true,
						'username'=> $data->username,
						'name'=> $data->username, 
						'user_role'=> $data->role
					];
					$this->setSession($data);
					$message['logged']='Login berhasil, Anda sedang dialikan ke halaman pengguna';
				}else {
					$error++;
					$message['error_pass']='Password salah';
				}
			}else {
				$error++;
				$message['error_username']='Username tidak dikenal';
			} 
		}else {
			$error++;
			$message['error_username']='Username harus diisi';
		}

		if($error>0){
			session()->setFlashdata(['error'=> $message]);
			return redirect()->back()->withInput()->with('error', $message);
		}else{
			return redirect('dashboard');
		}
	}

	public function setSession($data,$where=''){
		$session= session();

		$session->set($data);
	}
	 
	public function logout()
    { 
        session()->destroy(); 
        return redirect()->to('/login');
    }
}
