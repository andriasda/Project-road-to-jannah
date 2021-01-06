<?php namespace App\Controllers;
use App\Models\LoginAdminModel;

class LoginAdminC extends BaseController
{
    public function __construct()
    {
        $this->LoginAdminModel = new LoginAdminModel();
    }

	public function index()
	{
        echo view('admin/loginadmin');
		echo view('layout/adminfooter');
    }
    
    public function cek_login()
    {
        $username  = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginAdminModel->cekloginadmin($username, $password);

        if(($cek['username']==$username) && ($cek['password']==$password)) {
            session()->set('username',$cek['username']);
            return redirect()->to('/admin');
        }else{
            session()->setFlashdata('gagal', 'Username Atau Password salah!!');
            return redirect()->to('/loginadmin');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/loginadmin');
    }

	//--------------------------------------------------------------------

}