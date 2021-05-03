<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">User Management</h4>
                <p class="card-title-desc">Tambah User</p>

                <form action="<?=base_url('user_management/input')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="username" class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="" name="username" id="username" placeholder="Username..." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" value="" name="email" id="email" placeholder="Email..." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="full_name" class="col-md-2 col-form-label">Fullname</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="" name="full_name" id="full_name" placeholder="Nama Lengkap...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="" name="phone" id="phone" placeholder="No Telp...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" value="" name="password" id="password" placeholder="Password..." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-md-2 col-form-label">Role</label>
                        <div class="col-md-10">
                            <select id="role" class="form-control" name="role" required>
                                <option value="">-PILIH-</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-md-2 col-form-label">Photo</label>
                        <div class="col-md-10">
                            <input class="form-control-file" type="file" accept="image/*" name="photo" id="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <input type="submit" value="Input User" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
<?php
if(!empty($this->session->flashdata('error'))):
    $error = $this->session->flashdata('error')['error'];
?>

$(document).ready(function() {
    Swal.fire(
        'Failed',
        '<?= $error ?>',
        'error'
    );
});

<?php
endif;
?>
</script>
