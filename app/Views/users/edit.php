<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/' . $users->id); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" value="<?= $users->email; ?>" name="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?= $users->username; ?>" name="description" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" value="<?= $users->password_hash; ?>" name="description" class="form-control form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>