<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\contactmodel;
use App\Models\materiModel;
use App\Models\UserModel;
class Admin extends BaseController
{
	public function __construct()
	{
		$this->contactModel = new contactmodel();
		$this->materiModel = new materiModel();
		$this->userModel = new userModel();
	}


	public function index()
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}
		echo view('layout/adminheader');
		echo view('admin/index');
		echo view('layout/adminfooter');
	}

	public function detail($id)
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}
		$data = [
			'materi'=> $this->materiModel->getItem($id)
		];
		echo view('layout/adminheader');
		echo view('admin/detail',$data);
		echo view('layout/adminfooter');

	}

	public function detailuser($id)
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}
		$data = [
			'user'=> $this->userModel->getItem($id)
		];
		echo view('layout/adminheader');
		echo view('admin/detailuser',$data);
		echo view('layout/adminfooter');

	}


	//--------------------------------------------------------------------

	public function pesan()
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}

		$keyword = $this->request->getVar('keyword');
		if($keyword){
			$contact = $this->contactModel->search($keyword);
		} else{
			$contact = $this->contactModel;
		}

		$contact = $this->contactModel->findAll();
		
		$data = [
			'contact'=>$contact
		];
		echo view('layout/adminheader');
		echo view('admin/pesan', $data);
		echo view('layout/adminfooter');

	}

	public function materi()
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}

		$keyword = $this->request->getVar('keyword');
		if($keyword){
			$materi = $this->materiModel->search($keyword);
		} else{
			$materi = $this->materiModel;
		}

		
		$materi = $this->materiModel->findAll();
		
		$data = [
			'materi'=>$materi
		];
		echo view('layout/adminheader');
		echo view('admin/materi', $data);
		echo view('layout/adminfooter');
	}

	public function user()
	{
		if(session()->get("username")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginadmin');
		}

		$keyword = $this->request->getVar('keyword');
		if($keyword){
			$user = $this->userModel->search($keyword);
		} else{
			$user = $this->userModel;
		}

		$user = $this->userModel->findAll();
		
		$data = [
			'user'=>$user
		];
		echo view('layout/adminheader');
		echo view('admin/user', $data);
		echo view('layout/adminfooter');
	}
	
	public function insertMateri()
	{
		// $data=[
		$nama_mapel =$this->request->getVar('nama_mapel');
		 $video =$this->request->getVar('video');
		 $deskripsi=$this->request->getVar('deskripsi');
		 $submateri=$this->request->getVar('submateri');
		//];
		$this->materiModel->query("INSERT INTO materi VALUES ('','$nama_mapel', '$video', '$deskripsi', '$submateri')");
		
		session()->setFlashdata('pesan', 'Data berhasil disimpan');
		
		return redirect()->to('/materi');
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
		
		session()->setFlashdata('pesan', 'Data berhasil disimpan');
		
		return redirect()->to('/user');
	}

	public function editmateri($id)
	{
		
		$data =[
			'materi' => $this->materiModel->getmateri($id)
		];

		return view('admin/detail', $data);
	}

	public function updatemateri($id)
	{
		$this->materiModel->save([
            'id' => $id,
            'nama_mapel' => $this->request->getVar('nama_mapel'),
            'video' => $this->request->getVar('video'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'submateri' => $this->request->getVar('submateri'),
            
		]);
		return redirect()->to('/materi');
	}


	public function deletemateri($id)
	{
		$this->materiModel->delete($id);
		return redirect()->to('/materi');
	}

	public function deletecontact($id)
	{
		$this->contactModel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil Dihapus');
		return redirect()->to('/pesan');
	}

	public function edituser($id)
	{
		
		$data =[
			'user' => $this->userModel->getuser($id)
		];

		return view('admin/detailuser', $data);
	}

	public function updateuser($id)
	{
		$this->userModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'image' => $this->request->getVar('image'),
            
		]);
		return redirect()->to('/user');
	}


	public function deleteuser($id)
	{
		$this->userModel->delete($id);
		return redirect()->to('/user');
	}


}
