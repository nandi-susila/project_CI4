<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

<h3>Data Siswa</h3>
<table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td>Andi Saputra</td>
        <td>101</td>
        <td>2003-12-22</td>
    </tr>
    <tr>
        <td>Mochamad Nandi Susila</td>
        <td>102</td>
        <td>2000-02-02</td>
    </tr>
</table>

<?= $this->endSection(); ?>