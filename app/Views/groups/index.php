<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h3>Permission User</h3>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        <?php foreach ($groups as $group) : ?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $group->name; ?></td>
                    <td><?= $group->description; ?></td>

                    <td>
                        <a href="<?= base_url('group/' . $group->id . '/edit'); ?>" class="btn btn-warning">Edit</a>

                        <!-- <a href="<?= base_url('group/' . $group->id); ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hapus</span>
                        </a> -->
                        <form action="<?= base_url('group/' . $group->id); ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
    <a href="<?= base_url('group/new'); ?>" class="btn btn-primary mt-3">Create</a>
</div>
<?= $this->endSection(); ?>