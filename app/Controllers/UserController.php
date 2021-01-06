<?php namespace App\Controllers;
use App\Models\LoginUserModel;
use App\Models\Materi1Model;
use App\Models\BelajarModel;
class UserController extends BaseController
{
	public function __construct()
	{
		$this->BelajarModel = new BelajarModel();
		
	}
	
	public function index()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
        echo view('layout/headeruser');
        echo view('user/dashboard');
		echo view('layout/footer');
    }
	
	public function fiqih()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
		
		$db = db_connect();
				$model = new Materi1Model($db);
				$result = $model->fiqih();
				
		$data = [
			'materi' => $model->fiqih(),
		];
        echo view('layout/headermateri');
        echo view('user/fiqih', $data);
		echo view('layout/footer');
	}
	
	public function mengaji()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
		
		$db = db_connect();
				$model = new Materi1Model($db);
				$result = $model->mengaji();
				
		$data = [
			'materi' => $model->mengaji(),
		];
        echo view('layout/headermateri');
        echo view('user/mengaji', $data);
		echo view('layout/footer');
	}

	public function Sholat()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
		
		$db = db_connect();
				$model = new Materi1Model($db);
				$result = $model->where();
				
		$data = [
			'materi' => $model->where(),
		];
        echo view('layout/headermateri');
        echo view('user/sholat', $data);
		echo view('layout/footer');
	}

	public function Tajwid()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
		
		$db = db_connect();
				$model = new Materi1Model($db);
				$result = $model->tajwid();
				
		$data = [
			'materi' => $model->tajwid(),
		];
        echo view('layout/headermateri');
        echo view('user/tajwid', $data);
		echo view('layout/footer');
	}

	public function Aqidah()
	{
        if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}
		
		$db = db_connect();
				$model = new Materi1Model($db);
				$result = $model->Aqidah();
				
		$data = [
			'materi' => $model->Aqidah(),
		];
        echo view('layout/headermateri');
        echo view('user/Aqidah', $data);
		echo view('layout/footer');
	}
	
	public function belajar($id)
	{
		if(session()->get("nama")==''){
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to('/loginuser');
		}

		
		$data = [
			'materi' => $this->BelajarModel->getmateri($id)

		];

		echo view('layout/headermateri');
		echo view('user/belajar', $data);
		echo view('layout/footer');
	}




	//--------------------------------------------------------------------

}