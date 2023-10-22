<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome, <b><?= user()->username; ?>!</b></h1>

    <div class="row">
        <!-- User Information Card -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-circle" alt="<?= user()->username; ?>">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="font-weight-bold">Username:</h5>
                                    <p><?= user()->username; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="font-weight-bold">Email:</h5>
                                    <p><?= user()->email; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="col-lg-4">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card bg-primary text-white h-100 py-2">
                        <div class="card-body text-center">
                            <h6 class="text-uppercase fw-bold">Total Pasien</h6>
                            <div class="text-white-50"><?= $jumlahNamaPasien ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card bg-success text-white h-100 py-2">
                        <div class="card-body text-center">
                            <h6 class="text-uppercase fw-bold">Total Rekam Medis</h6>
                            <div class="text-white-50"><?= $jumlahNoRM ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card bg-success text-white h-100 py-2">
                        <div class="card-body text-center">
                            <h6 class="text-uppercase fw-bold">Total Pemeriksaan Hari Ini</h6>
                            <div class="text-white-50"><?= $jumlahPemeriksaanHariIni ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
