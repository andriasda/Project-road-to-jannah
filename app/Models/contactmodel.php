<?php

namespace app\Models;

use CodeIgniter\Model;

class contactmodel extends Model
{
    protected $table = 'contactus';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'alamat', 'pesan'];

    public function getItem($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('contactus')->like('nama', $keyword)->orLike('email', $keyword)
        ->orLike('alamat', $keyword)->orLike('pesan', $keyword);
    }
}