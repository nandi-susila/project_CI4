<?= $this->extend("layouts/template-siswa"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="card my-3">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Email</th>

                </tr>
                <?php foreach ($siswa as $s) : ?>
                    <tr>
                        <td><?= $s['name'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['email'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>