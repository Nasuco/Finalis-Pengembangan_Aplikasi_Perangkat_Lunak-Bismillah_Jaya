<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="my-3">Edit Profile</h2>
            <form action="<?= base_url('/admin/update') ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user->fullname ?>">
                </div>
                <!-- Tambahkan kolom formulir lainnya sesuai kebutuhan -->

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>