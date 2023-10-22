<?php

namespace App\Controllers;

use App\Models\RekamMedisModel;

class RekamMedis extends BaseController
{
    public function index()
    {
        $rekammedismodel = new RekamMedisModel();
        $all_data_rekammedis = $rekammedismodel->findAll();
        return view('rekammedis/index', ['all_data_rekammedis' => $all_data_rekammedis]);
    }

    public function detail($id)
    {
        $rekammedismodel = new RekamMedisModel();
        $all_data_rekammedis = $rekammedismodel->find($id);
        return view('rekammedis/detail', ['all_data_rekammedis' => $all_data_rekammedis]);
    }

    // public function create()
    // {
    //     return view('rekammedis/create');
    // }

    // public function save()
    // {
    //     $rekammedismodel = new RekamMedisModel();
    //     $rekammedismodel->insert($this->request->getPost());
    //     return redirect()->to(base_url('rekammedis/index'));
    // }

    public function edit($id = null)
    {
        $rekammedismodel = new RekamMedisModel();
        $rekam_medis = $rekammedismodel->find($id);
        return view('rekammedis/edit', ['rekam_medis' => $rekam_medis, 'id' => $id]);
    }


    public function update()
    {
        $id = $this->request->getPost('id');
        
        $data = [
            'no_rm' => $this->request->getPost('no_rm'),
            'nik' => $this->request->getPost('nik'),
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'usia_pasien' => $this->request->getPost('usia_pasien'),
            'tanggal_pemeriksaan' => $this->request->getPost('tanggal_pemeriksaan'),
            'bb_tb' => $this->request->getPost('bb_tb'),
            'indeks_masa_tubuh' => $this->request->getPost('indeks_masa_tubuh'),
            'lingkar_lengan_atas' => $this->request->getPost('lingkar_lengan_atas'),
            'diagnosa_pasien' => $this->request->getPost('diagnosa_pasien'),
            'diagnosa_lanjutan' => $this->request->getPost('diagnosa_lanjutan'),
            'monitoring_eval' => $this->request->getPost('monitoring_eval'),
            // Tambahkan kolom-kolom lainnya di sini
        ];

        $rekammedismodel = new RekamMedisModel();
        $rekammedismodel->set($data)->where('id', $id)->update();

        return redirect()->to(base_url('rekammedis/index'));
    }


    public function delete($id = false)
    {
        $rekammedismodel = new RekamMedisModel();
        $rekammedismodel->delete($id);
        return redirect()->to(base_url('rekammedis/index'));
    }

    public function search()
    {
        $searchTerm = $this->request->getPost('searchTerm');
        $rekammedismodel = new RekamMedisModel();

        // Search by 'no_rm' or 'nama_pasien'
        $searchResults = $rekammedismodel
            ->like('no_rm', $searchTerm)
            ->orLike('nama_pasien', $searchTerm)
            ->findAll();

        return view('rekammedis/search', ['searchResults' => $searchResults]);
    }
}