<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("user"); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('img/SIPGIZIijo.png'); ?>" alt="Logo" width="40">
        </div>
        <img class="sidebar-brand-text mx-2" src="<?= base_url('img/SIPGIZItulisan.png'); ?>" alt="SIPGIZI" width="100">
        <!-- <div class="sidebar-brand-text mx-2 text-white">SIPGIZI</div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("user"); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span class="text-white">Beranda</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Manajemen Data Pasien
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("datapasien"); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span class="text-white">Data Pasien</span>
        </a>
    </li>

    <!-- Nav Item - Rekam Medis -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("rekammedis") ?>">
            <i class="fas fa-fw fa-file-medical"></i>
            <span class="text-white">Rekam Medis</span>
        </a>
    </li>

    <!-- Nav Item - Riwayat -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("riwayat"); ?>">
            <i class="fas fa-fw fa-history"></i>
            <span class="text-white">Riwayat</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span class="text-white">Keluar</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
