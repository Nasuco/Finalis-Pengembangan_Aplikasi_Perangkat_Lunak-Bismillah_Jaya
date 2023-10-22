<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pasien <b><?= $all_data_rekammedis->nama_pasien ?></b></h1>
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Pasien</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-3 text-center mb-4">
                            <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-circle" alt="<?= user()->username; ?>">
                    </div>
                    <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    NIK
                                    <span class="badge bg-primary rounded-pill"><?= $all_data_rekammedis->nik  ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nama Pasien
                                    <span class="badge bg-success rounded-pill"><?= $all_data_rekammedis->nama_pasien ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Jenis Kelamin
                                    <span class="badge bg-success rounded-pill"><?= $all_data_rekammedis->jenis_kelamin ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Usia Pasien
                                    <span class="badge bg-success rounded-pill"><?= $all_data_rekammedis->usia_pasien ?></span>
                                </li>
                    </ul>
                    <a href="<?= base_url('datapasien/index') ?>" class="btn btn-primary mt-3">Kembali ke Daftar Pasien</a>

                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>
