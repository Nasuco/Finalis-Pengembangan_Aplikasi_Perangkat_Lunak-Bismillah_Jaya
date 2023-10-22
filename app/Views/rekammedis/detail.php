<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Rekam Medis <b><?= $all_data_rekammedis->nama_pasien ?></b></h1>
    <div class="row">
        <!-- Kolom Kiri -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-3 text-center mb-4">
                            <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-circle" alt="<?= user()->username; ?>">
                    </div>
                    <ul class="list-group mb-3">
                        <!-- Isi Kolom Kiri -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    No. Rm
                                    <span class="badge bg-primary rounded-pill"><?= $all_data_rekammedis->no_rm  ?></span>
                                </li>
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
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tanggal Pemeriksaan
                                    <span class="badge bg-success rounded-pill"><?= $all_data_rekammedis->tanggal_pemeriksaan ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    TB/BB Pasien
                                    <span class="badge bg-info rounded-pill"><?= $all_data_rekammedis->bb_tb ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    IMT
                                    <span class="badge bg-warning rounded-pill"><?= $all_data_rekammedis->indeks_masa_tubuh  ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Lingkar Lengan Atas
                                    <span class="badge bg-warning rounded-pill"><?= $all_data_rekammedis->lingkar_lengan_atas  ?></span>
                                </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Diagnosa dan Evaluasi</h6>
                </div>
                <div class="card-body">
                    <div id="accordion">
                        <div class="card mb-3">
                            <div class="card-header" id="keluhanHeading" data-toggle="collapse" data-target="#keluhanCollapse" aria-expanded="false" aria-controls="keluhanCollapse">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                        Keluhan
                                    </button>
                                </h5>
                            </div>
                            <div id="keluhanCollapse" class="collapse" aria-labelledby="keluhanHeading"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <?= $all_data_rekammedis->diagnosa_pasien ?>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="diagnosaHeading" data-toggle="collapse" data-target="#diagnosaCollapse" aria-expanded="false" aria-controls="diagnosaCollapse">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                        Diagnosa
                                    </button>
                                </h5>
                            </div>
                            <div id="diagnosaCollapse" class="collapse" aria-labelledby="diagnosaHeading"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <?= $all_data_rekammedis->diagnosa_lanjutan ?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="monitoringHeading" data-toggle="collapse" data-target="#monitoringCollapse" aria-expanded="false" aria-controls="monitoringCollapse">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed">
                                        Monitoring dan Evaluasi
                                    </button>
                                </h5>
                            </div>
                            <div id="monitoringCollapse" class="collapse" aria-labelledby="monitoringHeading" data-parent="#accordion">
                                <div class="card-body">
                                    <?= $all_data_rekammedis->monitoring_eval ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="<?= base_url('rekammedis/index') ?>" class="btn btn-primary mt-3">Kembali ke Daftar Rekam Medis</a>
                </div>
            </div>
</div>

    </div>
</div>
<?= $this->endSection(); ?>
