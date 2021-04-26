<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

<div class="container my-5 col-4">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Form Registrasi</h3>
        </div>
        <div class="card-body">
            <!-- Slot Flash Message -->



            <div class="row">
                <div class="col mx-auto">



                    <form action="<?= base_url('registrasi/simpan') ?>" method="POST">
                        <?= csrf_field() ?>
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="konfirm_pass" required>
                        <br>
                        <input type="submit" class="btn btn-success" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection();
