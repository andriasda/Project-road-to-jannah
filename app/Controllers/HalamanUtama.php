<?php namespace App\Controllers;
use \App\Models\contactmodel;
use App\Models\UserModel;
class HalamanUtama extends BaseController
{
	public function __construct()
	{
		$this->contactModel = new contactmodel();
		$this->userModel = new userModel();
	
	}
	public function index()
	{
        echo view('layout/header');
        echo view('main/beranda');
        echo view('layout/footer');
	}
	//--------------------------------------------------------------------
	public function about()
	{
        echo view('layout/header');
        echo view('main/about');
        echo view('layout/footer');
	}
	//---------------------------------------------------------------------
	public function contact()
	{
        echo view('layout/header');
        echo view('main/contact');
        echo view('layout/footer');
	}

	public function loginuser()
	{
        echo view('layout/header1');
        echo view('main/loginuser');
        echo view('layout/footer');
	}

	public function insertContact()
	{
		// $data=[
		$nama =$this->request->getVar('nama');
		 $alamat =$this->request->getVar('alamat');
		 $email=$this->request->getVar('email');
		 $pesan=$this->request->getVar('pesan');
		//];
		$this->contactModel->query("INSERT INTO contactus VALUES ('','$nama','$email','$alamat','$pesan')");
		
		session()->setFlashdata('pesan', 'pesan telah disampaikan ke admin');
		return redirect()->to('/contact');
	}

	public function insertUser()
	{
		// $data=[
		$nama =$this->request->getVar('nama');
		 $password =$this->request->getVar('password');
		 $password = password_hash($password, PASSWORD_DEFAULT);
		 $email=$this->request->getVar('email');
		 $image=$this->request->getVar('image');
		//];
		$this->userModel->query("INSERT INTO user VALUES ('','$nama', '$password', '$email','$image')");
		
		return redirect()->to('/loginuser');
		
	}
	

}
