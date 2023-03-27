<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h3>List Komik</h3>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        <?php foreach ($komik as $k) : ?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                    <td><?= $k['judul']; ?></td>

                    <td>
                        <a href="<?= base_url('komik'); ?>/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
    <a href="<?= base_url('komik/new'); ?>" class="btn btn-primary mb-3">Tambah Data Komik</a>
</div>
<?= $this->endSection(); ?>