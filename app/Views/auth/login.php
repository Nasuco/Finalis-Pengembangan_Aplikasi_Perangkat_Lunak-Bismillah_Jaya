<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <img class="mb-4" src="<?= base_url('img/SIPGIZI4.png'); ?>" alt="Logo" width="90">
                                    
                                    <h1 class="h4 text-gray-900">Selamat Datang!</h1>
                                    <p class="mb-4">Silakan masuk untuk melanjutkan</p>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= url_to('login') ?>" method="post" class="user">
                                    <?= csrf_field() ?>

                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user rounded-pill <?= session('errors.login') ? 'is-invalid' : '' ?>" name="login" placeholder="<?= lang('Auth.email') ?>" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user rounded-pill <?= session('errors.login') ? 'is-invalid' : '' ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" required>
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user rounded-pill <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="<?= lang('Auth.password') ?>" required>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remembering" id="customCheck" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck"><?= lang('Auth.rememberMe') ?></label>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <button type="submit" class="btn btn-success btn-user btn-block rounded-pill">Masuk</button>
                                </form>
                                <hr>
                                <?php if ($config->activeResetter) : ?>
                                    <div class="text-center">
                                        <a class="small text-decoration-none text-success" href="<?= route_to('forgot') ?>">Lupa Kata Sandi?</a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($config->allowRegistration) : ?>
                                    <div class="text-center">
                                        <a class="small text-decoration-none text-success" href="<?= route_to('register') ?>">Buat Akun Baru!</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>
