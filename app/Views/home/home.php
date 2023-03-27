<?= $this->extend('home/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">

    <!-- Page Heading -->

    <div class="row mt-5">
        <!-- kategori -->
        <div class="col-lg-3">
            <p>Filter</p>
            <ul>
                <li style="list-style-type:none;">
                    <button class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#ketersediaan" aria-expanded="false" aria-controls="ketersediaan">Ketersediaan Komik</button>
                    <div class="collapse" id="ketersediaan">
                        <div class="card card-body">
                            <ul style="list-style-type:none;">
                                <li>Hari ini
                                    <input class="form-check-input mt-0" type="checkbox">
                                </li>
                                <li>Besok</li>
                                <li>Tanggal</li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li style="list-style-type:none;">
                    <button class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#lokasi" aria-expanded="false" aria-controls="lokasi">Genre</button>
                    <div class="collapse" id="lokasi">
                        <div class="card card-body">
                            <ul style="list-style-type:none;">
                                <li>Adventure
                                    <input class="form-check-input mt-0" type="checkbox">
                                </li>
                                <li>Action</li>
                                <li>Sci-Fi</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <?php foreach ($komik as $k) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card" style="width: 13rem;">
                    <img src="/img/<?= $k['sampul']; ?>" class="card-img-top sampul">
                    <div class="card-body">
                        <p><?= $k['judul']; ?></p>
                        <p><small><?= $k['penulis']; ?></small></p>
                        <h5><b>Rp.150.000</b></h5>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</div>


<!-- Login Modal -->


<!-- modal logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ready to leave ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= url_to('logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>