<?= $this->extend("Layouts/template"); ?>


<?= $this->section("content") ?>
<div class="jumbotron text-center">
    <h1>Portal Informasi Siswa</h1>
    <p>Selamat Datang di Portal Informasi Siswa SMA 404!</p>
    <a href="<?= base_url('info-kegiatan') ?>" class="btn btn-dark">Info Kegiatan</a>
    <a href="<?= base_url('data-siswa') ?>" class="btn btn-primary">Data Siswa</a>
</div>

<?= $this->endSection(); ?>