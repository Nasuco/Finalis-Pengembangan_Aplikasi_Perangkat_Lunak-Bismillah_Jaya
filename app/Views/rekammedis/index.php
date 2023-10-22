<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Rekam Medis</h1>

    <!-- Tambah Data Button -->


    <!-- Flash Message -->
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Daftar Rekam Medis Table -->
    <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
                <form action="<?= base_url('rekammedis/search') ?>" method="post" class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchTerm" placeholder="Cari No. RM atau Nama Pasien">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <?php foreach ($all_data_rekammedis as $rm) : ?>
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
</div>
<?= $this->endSection(); ?>
