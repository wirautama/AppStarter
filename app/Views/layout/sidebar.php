<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-play"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tiket <sup>LIVE</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('komik'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Komik</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Halaman User</span></a>
    </li>


    <!-- Divider -->

    <!-- Heading -->

    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-clipboard-list"></i>
            <span>Group</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-headphones"></i>
            <span>User</span></a>
    </li> -->


    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-users"></i>
            <span>User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <?php if (has_permission('group-module')) : ?>
                    <a class="collapse-item" href="<?= base_url('group'); ?>">Permission User</a>
                <?php endif ?>
                <?php if (has_permission('user-module')) : ?>
                    <a class="collapse-item" href="<?= base_url('user'); ?>">List Users</a>
                <?php endif ?>
            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>