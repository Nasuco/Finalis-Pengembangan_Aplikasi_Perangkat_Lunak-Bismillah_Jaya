<?php

namespace App\Controllers;

use App\Models\RekamMedisModel;

class Riwayat extends BaseController
{
    public function index()
    {
        $rekammedismodel = new RekamMedisModel();
        $all_data_rekammedis = $rekammedismodel->findAll();
        return view('riwayat/index', ['all_data_rekammedis' => $all_data_rekammedis]);
    }

    public function search()
    {
        $searchTerm = $this->request->getPost('searchTerm');
        $rekammedismodel = new RekamMedisModel();

        // Search by 'no_rm' or 'nama_pasien'
        $searchResults = $rekammedismodel
            ->like('nama_pasien', $searchTerm)
            ->findAll();

        return view('riwayat/search', ['searchResults' => $searchResults]);
    }
}
