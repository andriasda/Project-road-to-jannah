<?php namespace App\Controllers;
use App\Models\LoginUserModel;

class LoginUserC extends BaseController
{
    public function __construct()
    {
        $this->LoginUserModel = new LoginUserModel();
    }

    
    public function cek_login()
    {
        $email  = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $this->LoginUserModel->cekloginuser($email, $password);

        if(($cek['email']==$email) && ($cek['password']==$password)) {
            session()->set('nama',$cek['nama']);
            return redirect()->to('/dashboard');
        }else{
            session()->setFlashdata('gagal', 'Username Atau Password salah!!');
            return redirect()->to('/loginuser');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

	//--------------------------------------------------------------------

}