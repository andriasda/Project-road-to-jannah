<?php

namespace app\Models;

use CodeIgniter\Model;

class materiModel extends Model
{
    protected $table = 'materi';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_mapel', 'video', 'deskripsi','submateri'];

    public function getItem($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('materi')->like('nama_mapel', $keyword)->orLike('deskripsi', $keyword);
    }
}