<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamMedisModel extends Model
{
    protected $table = 'rekam_medis';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'no_rm', 'nik', 'nama_pasien', 'jenis_kelamin', 'usia_pasien', 'tanggal_pemeriksaan', 'bb_tb', 'indeks_masa_tubuh', 'lingkar_lengan_atas', 'diagnosa_pasien', 'diagnosa_lanjutan', 'monitoring_eval'];


    public function getRekamMedis($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);

        }
    }
}
