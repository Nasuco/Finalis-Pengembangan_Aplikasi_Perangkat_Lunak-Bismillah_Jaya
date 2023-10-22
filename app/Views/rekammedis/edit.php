<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Rekam Medis <b><?= $rekam_medis->nama_pasien ?></b></h1>    
    <form action="<?= base_url('/rekammedis/update') ?>" method="post">
        <?= csrf_field(); ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Bagian Form Data Rekam Medis -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Rekam Medis</h6>
                    </div>
                    <div class="card-body">
                        <!-- Form Input -->
				<input type="hidden" name="id" value="<?= $id ?>">
                        <div class="mb-3">
                                    <label for="no_rm" class="form-label">No. Rm</label>
                                    <input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= $rekam_medis->no_rm ?>">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $rekam_medis->nik ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $rekam_medis->nama_pasien ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="usia_pasien" class="form-label">Usia Pasien</label>
                                    <input type="text" class="form-control" id="usia_pasien" name="usia_pasien" value="<?= $rekam_medis->usia_pasien ?>">
                                </div> -->
                                <div class="mb-3">
                                    <label for="tanggal_pemeriksaan" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="<?= $rekam_medis->tanggal_pemeriksaan ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="bb_tb" class="form-label">BB/TB Pasien</label>
                                    <input type="text" class="form-control" id="bb_tb" name="bb_tb" value="<?= $rekam_medis->bb_tb ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="indeks_masa_tubuh" class="form-label">IMT</label>
                                    <input type="text" class="form-control" id="indeks_masa_tubuh" name="indeks_masa_tubuh" value="<?= $rekam_medis->indeks_masa_tubuh ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="lingkar_lengan_atas" class="form-label">Lingkar Lengan Atas</label>
                                    <input type="text" class="form-control" id="lingkar_lengan_atas" name="lingkar_lengan_atas" value="<?= $rekam_medis->lingkar_lengan_atas ?>">
                                </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Bagian Form Catatan Medis -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Catatan Medis</h6>
                    </div>
                    <div class="card-body">
                        <!-- Form Textarea -->
                            <div class="mb-3">
                                <label for="diagnosa_pasien" class="form-label">Keluhan</label>
                                <textarea class="form-control" id="diagnosa_pasien" name="diagnosa_pasien"><?= $rekam_medis->diagnosa_pasien ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="diagnosa_lanjutan" class="form-label">Diagnosa</label>
                                <textarea class="form-control" id="diagnosa_lanjutan" name="diagnosa_lanjutan"><?= $rekam_medis->diagnosa_lanjutan ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="monitoring_eval" class="form-label">Monitoring dan Evaluasi</label>
                                <textarea class="form-control" id="monitoring_eval" name="monitoring_eval"><?= $rekam_medis->monitoring_eval ?></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Edit Data</button>
                                <a href="<?= base_url('rekammedis/index') ?>" class="btn btn-danger">Batal</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>