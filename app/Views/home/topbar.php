<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa-duotone fa-clapperboard-play"></i>Komik<sup>SHOP</sup></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house-chimney"></i> Home</a>
                </li>



                <?php if (has_permission('group-module')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= url_to('dashboard'); ?>"><i class="fa-sharp fa-solid fa-file-shield"></i> Halaman Admin</a>
                    </li>
                <?php endif ?>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
            </form>
            <?php if (logged_in()) { ?>
                <div class="dropdown">
                    <a href="" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="" style="width:30px;" class="rounded-pill">
                        <img class="img-profile rounded-circle" src="<?= base_url() ?>/img/default.svg" width="35">
                        <?= user()->username; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php if (in_groups('admin')) { ?>
                                <a href="<?= url_to('admin'); ?>" class="dropdown-item btn btn-success"><i class="fa-sharp fa-solid fa-file-shield"></i> Halaman Admin</a>
                            <?php } ?>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                            </hr>
                        </li>
                        <li><a href="" class="dropdown-item"><i class="fa-solid fa-user"></i> Profile</a></li>
                        <li><a href="" class="dropdown-item"><i class="fa-solid fa-pen-to-square"></i> Edit Picture</a></li>
                        <li>
                            <hr class="dropdown-divider">
                            </hr>
                        </li>
                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa-solid fa-right-from-bracket"></i> Logout</button></li>
                    </ul>
                </div>


            <?php } else { ?>
                <a href="<?= url_to('login'); ?>" class="btn btn-outline-light me-2">Masuk</a>
                <a href="<?= url_to('register'); ?>" class="btn btn-outline-light">Daftar</a>
            <?php } ?>

        </div>
    </div>
</nav>