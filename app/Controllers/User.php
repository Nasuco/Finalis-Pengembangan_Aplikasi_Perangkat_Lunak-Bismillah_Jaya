<?php

namespace App\Controllers;

use App\Models\RekamMedisModel;
use App\Models\DataPasienModel;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db    = \config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $rekamMedisModel = new RekamMedisModel();
        
        // Menghitung jumlah pasien (dengan nama pasien yang tidak null atau tidak kosong)
        $jumlahNamaPasien = $rekamMedisModel->where('nama_pasien IS NOT NULL')->countAll();
        
        // Menghitung jumlah nomor rekam medis yang sudah diinputkan (dengan no_rm tidak null dan tidak 0)
        $jumlahNoRM = $rekamMedisModel->where('no_rm IS NOT NULL AND no_rm <> 0')->countAllResults();
        
        // Menghitung jumlah pemeriksaan hari ini
        $tanggalHariIni = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format Y-m-d
        $jumlahPemeriksaanHariIni = $rekamMedisModel->where('DATE(tanggal_pemeriksaan)', date('Y-m-d'))->countAllResults();

        // Kirim data ke view
        $data = [
            'jumlahNamaPasien' => $jumlahNamaPasien,
            'jumlahNoRM' => $jumlahNoRM,
            'jumlahPemeriksaanHariIni' => $jumlahPemeriksaanHariIni
        ];

        return view('dashboard/index', $data);
    }





    public function edit($id = null)
    {
        if ($id === null) {
            return redirect()->to('dashboard/index');
        }

        // Ambil data pengguna berdasarkan ID
        $this->builder->select('id, username, email, fullname, user_image');
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('dashboard/index');
        }

        // Tampilkan halaman edit profil dengan data pengguna
        return view('dashboard/edit', $data);
    }

    public function update()
    {
        // Validasi formulir di sini jika diperlukan

        // Ambil data formulir dari POST request
        $id = $this->request->getPost('id');
        $fullname = $this->request->getPost('fullname');
        // Anda dapat menambahkan field lain sesuai dengan kebutuhan

        // Perbarui data pengguna di database
        $this->builder->set('fullname', $fullname);
        // Anda dapat menambahkan pernyataan set lainnya sesuai dengan field yang ingin diupdate
        $this->builder->where('id', $id);
        $this->builder->update();

        // Redirect ke halaman profil setelah pembaruan
        return redirect()->to('dashboard/index');
    }



    // public function count()
    // {
    //     $dataPasienModel = new DataPasienModel();
    //     $rekamMedisModel = new RekamMedisModel();
    //     $jumlahPasien = $dataPasienModel->countAll(); // Menghitung jumlah pasien
    //     $jumlahRekamMedis = $rekamMedisModel->countAll(); // Menghitung jumlah rekam medis

    //     // Kirim jumlah pasien ke view
    //     $data = [
    //         'jumlahPasien' => $jumlahPasien,
    //         'jumlahRekamMedis' => $jumlahRekamMedis
    //     ];

    //     return view('dashboard/index', $data);
    // }
}
