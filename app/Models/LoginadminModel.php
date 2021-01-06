<?php

namespace app\Models;

use CodeIgniter\Model;

class LoginAdminModel extends Model
{
    protected $table = 'admin';
    public function cekloginadmin($username, $password)
    {
        return $this->db->table('admin')
        ->where(array('username' => $username, 'password' => $password ))
        ->get()->getRowArray();
    }
}