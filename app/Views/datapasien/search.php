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
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Usia Pasien</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($searchResults as $rm) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $rm->nik ?></td>
                                    <td><?= $rm->nama_pasien ?></td>
                                    <td><?= $rm->jenis_kelamin ?></td>
                                    <td><?= $rm->usia_pasien ?></td>
                                    <td>
                                        <a href="<?= base_url('datapasien/detail/') . '/' . $rm->id ?>" class="btn btn-success btn-sm">Detail</a>
                                        <a href="<?= base_url('datapasien/edit/') . '/' . $rm->id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
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
