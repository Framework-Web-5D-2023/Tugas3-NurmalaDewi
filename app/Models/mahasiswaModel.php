<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model{
    protected $table = 'mahasiswa';
    protected $primaryKey ='id';

    protected $useTimestamps = true;

    public function getAllMahasiswa(){
        return $this->findAll();
    }
}