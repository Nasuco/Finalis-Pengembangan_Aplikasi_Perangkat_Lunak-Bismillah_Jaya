<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Hasil Pencarian Data Pasien</h1>

    <?php if (!empty($searchResults)) : ?>
        <div class="card shadow mb-4">
            <div class="card-body">
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
                            <?php foreach ($searchResults as $rm) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $rm->nama_pasien ?></td>
                                    <td><?= date('d-m-Y', strtotime($rm->tanggal_pemeriksaan)) ?></td>
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
    <?php else : ?>
        <p>Tidak ada hasil yang ditemukan.</p>
    <?php endif; ?>

</div>
<?= $this->endSection(); ?>
