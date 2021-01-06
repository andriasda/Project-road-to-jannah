<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class Materi1Model
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function all()
    {
        return $this->db->table('materi')->get()->getResult();
    }

    public function where()
    {
        return $this->db->table('materi')
            ->where(['nama_mapel' => 'Kelas_Sholat'])
            ->get()
            ->getResultArray();
    }

    public function tajwid()
    {
        return $this->db->table('materi')
            ->where(['nama_mapel' => 'Tajwid'])
            ->get()
            ->getResultArray();
    }

    public function mengaji()
    {
        return $this->db->table('materi')
            ->where(['nama_mapel' => 'Mengaji'])
            ->get()
            ->getResultArray();
    }

    public function fiqih()
    {
        return $this->db->table('materi')
            ->where(['nama_mapel' => 'Fikih'])
            ->get()
            ->getResultArray();
    }

    public function aqidah()
    {
        return $this->db->table('materi')
            ->where(['nama_mapel' => 'Aqidah'])
            ->get()
            ->getResultArray();
    }
}