<?php

namespace app\Models;

use CodeIgniter\Model;

class BelajarModel extends Model
{
    protected $table = 'materi';
    protected $useTimestamps = false;

    public function getmateri($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}