<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

<div class="container my-5 col-4">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col mx-auto">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('login/proses') ?>" method="POST">
                        <?= csrf_field() ?>
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection();
