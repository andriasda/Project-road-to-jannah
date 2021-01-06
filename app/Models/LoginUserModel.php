<?php

namespace app\Models;

use CodeIgniter\Model;

class LoginUserModel extends Model
{
    protected $table = 'user';
    public function cekloginuser($email, $password)
    {
        return $this->db->table('user')
        ->where(array('email' => $email, 'password' => $password ))
        ->get()->getRowArray();
    }
}