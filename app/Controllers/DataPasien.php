<?php

namespace App\Controllers;

use App\Models\DataPasienModel;
use App\Models\RekamMedisModel;

class DataPasien extends BaseController
{
    public function index()
    {
        $rekammedismodel = new RekamMedisModel();
        $all_data_rekammedis = $rekammedismodel->findAll();
        return view('datapasien/index', ['all_data_rekammedis' => $all_data_rekammedis]);
    }

    public function detail($id)
    {
        $rekammedismodel = new RekamMedisModel();
        $all_data_rekammedis = $rekammedismodel->find($id);
        return view('datapasien/detail', ['all_data_rekammedis' => $all_data_rekammedis]);
    }
    public function create()
    {
        return view('datapasien/create');
    }

    public function save()
    {
        $rekammedismodel = new RekamMedisModel();
        $rekammedismodel->insert($this->request->getPost());
        return redirect()->to(base_url('datapasien/index'));
    }

    public function edit($id = null)
    {
        $rekammedismodel = new RekamMedisModel();
        $rekam_medis = $rekammedismodel->find($id);
        return view('datapasien/edit', ['rekam_medis' => $rekam_medis, 'id' => $id]);
    }


    public function update()
    {
        $id = $this->request->getPost('id');
        
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'usia_pasien' => $this->request->getPost('usia_pasien'),
            // Tambahkan kolom-kolom lainnya di sini
        ];

        $rekammedismodel = new RekamMedisModel();
        $rekammedismodel->set($data)->where('id', $id)->update();

        return redirect()->to(base_url('datapasien/index'));
    }

    public function search()
    {
        $searchTerm = $this->request->getPost('searchTerm');
        $rekammedismodel = new RekamMedisModel();

        // Search by 'no_rm' or 'nama_pasien'
        $searchResults = $rekammedismodel
            ->like('nik', $searchTerm)
            ->orLike('nama_pasien', $searchTerm)
            ->findAll();

        return view('datapasien/search', ['searchResults' => $searchResults]);
    }

    // public function detail($nik)
    // {
    //     $datapasienmodel = new DataPasienModel();
    //     $all_data_datapasien = $datapasienmodel->find($nik);
    //     return view('datapasien/detail', ['all_data_datapasien' => $all_data_datapasien]);
    // }

    // public function create()
    // {
    //     return view('datapasien/create');
    // }

    // public function save()
    // {
    //     $datapasienmodel = new DataPasienModel();
    //     $datapasienmodel->insert($this->request->getPost());
    //     return redirect()->to(base_url('datapasien/index'));
    // }

    // public function edit($nik = false)
    // {
    //     $datapasienmodel = new DataPasienModel();
    //     $data_pasien = $datapasienmodel->find($nik);
    //     return view('datapasien/edit', ['data_pasien' => $data_pasien]);
    // }

    // public function update()
    // {
    //     $datapasienmodel = new DataPasienModel();
    //     $datapasienmodel->update($this->request->getPost('nik'), $this->request->getPost());
    //     return redirect()->to(base_url('datapasien/index'));
    // }

    // public function delete($nik = false)
    // {
    //     $datapasienmodel = new DataPasienModel();
    //     $datapasienmodel->delete($nik);
    //     return redirect()->to(base_url('datapasien/index'));
    // }
}
