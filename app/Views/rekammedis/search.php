<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Hasil Pencarian Rekam Medis</h1>

    <?php if (!empty($searchResults)) : ?>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No. RM</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">BB/TB</th>
                                <th scope="col">Tanggal Pemeriksaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($searchResults as $rm) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $rm->no_rm ?></td>
                                    <td><?= $rm->nama_pasien ?></td>
                                    <td><?= $rm->bb_tb ?></td>
                                    <td><?= $rm->tanggal_pemeriksaan ?></td>
                                    <td>
                                        <a href="<?= base_url('rekammedis/detail/') . '/' . $rm->id ?>" class="btn btn-success btn-sm">Detail</a>
                                        <a href="<?= base_url('rekammedis/edit/') . '/' . $rm->id ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('rekammedis/delete/') . '/' . $rm->id ?>" class="btn btn-danger btn-sm">Hapus</a>
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
