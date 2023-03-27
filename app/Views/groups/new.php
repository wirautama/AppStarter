<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create New Group</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('group'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="customCheckbox1">Permissions</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check_all" onclick="toggle(this)">
                                <label for="check_all" class="custom-control-label">-- check semua --</label>
                            </div>
                            <?php foreach ($permissions as $permission) : ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?= $permission->name; ?>" name="permission[]" value="<?= $permission->id; ?>">
                                    <label for="<?= $permission->name; ?>" class="custom-control-label"><?= $permission->name; ?></label>
                                </div>
                            <?php endforeach ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>