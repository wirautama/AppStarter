<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h3>List User</h3>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Username</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->active == 1 ? '<a class="badge badge-success">Active</a>' : 'Nonactive' ?></td>

                    <td>
                        <a href="<?= base_url('user/' . $user->id . '/edit'); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('user/' . $user->id); ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</div>
<?= $this->endSection(); ?>