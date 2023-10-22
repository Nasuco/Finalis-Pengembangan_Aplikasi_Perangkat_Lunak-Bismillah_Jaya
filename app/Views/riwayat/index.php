<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Periksa</h1>

    <!-- Riwayat Periksa Table -->
    <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
                <form action="<?= base_url('riwayat/search') ?>" method="post" class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchTerm" placeholder="Cari Nama Pasien">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Tgl. Periksa</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Diagnosa</th>
                            <th scope="col">Penatalaksanaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($all_data_rekammedis as $rm) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $rm->nama_pasien ?></td>
                                <td><?= $rm->tanggal_pemeriksaan ?></td>
                                <td><?= $rm->diagnosa_pasien ?></td>
                                <td><?= $rm->diagnosa_lanjutan ?></td>
                                <td><?= $rm->monitoring_eval ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
