<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Edit Data Komik</h2>
            <form action="<?= base_url('komik'); ?>/<?= $komik['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
                <div class="mb-3 ">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control <?= (validation_show_error('judul')) ? 'is-invalid' : ''; ?>" id="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']; ?>">
                    <div class="invalid-feedback">
                        <?= validation_show_error('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control <?= (validation_show_error('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
                    <div class="invalid-feedback">
                        <?= validation_show_error('penulis'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control <?= (validation_show_error('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                    <div class="invalid-feedback">
                        <?= validation_show_error('penerbit'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <input class="form-control <?= (validation_show_error('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= validation_show_error('sampul'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>