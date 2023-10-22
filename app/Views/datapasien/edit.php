<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Pasien <b><?= $rekam_medis->nama_pasien ?></b></h1>    
    <form action="<?= base_url('/datapasien/update') ?>" method="post">
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
                                </div>
                                <div class="mb-3 d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Edit Data</button>
                                    <a href="<?= base_url('datapasien/index') ?>" class="btn btn-danger">Batal</a>
                                </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>

