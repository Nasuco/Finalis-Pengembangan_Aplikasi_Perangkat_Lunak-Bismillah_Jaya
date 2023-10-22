<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPasienModel extends Model
{
    protected $table = 'data_pasien';
    protected $primaryKey = 'nik';
    protected $returnType = 'object';
    protected $allowedFields = ['nik', 'nama_pasien', 'usia_pasien', 'tb_bb_pasien', 'jenis_kelamin'];


    public function getDataPasien($nik = false)
    {
        if ($nik == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['nik' => $nik]);

        }
    }
}
