<?php

namespace app\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'user';
    // protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'password', 'email', 'image'];
    

    public function getItem($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('user')->like('nama', $keyword)->orLike('email', $keyword);
    }
}