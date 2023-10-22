<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<?= form_open('dashboard/update') ?>
<input type="hidden" name="id" value="<?= $user->id ?>">
<label for="fullname">Full Name:</label>
<input type="text" id="fullname" name="fullname" value="<?= $user->fullname ?>">
<button type="submit">Update Profile</button>
<?= form_close() ?>

<?= $this->endSection(); ?>