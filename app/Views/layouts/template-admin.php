<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp 404 - Mochamad Nandi Susila</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand bg-secondary">
        <ul class="nav">
            <li>
                <a href="<?= base_url('admin') ?>" class="nav-link">Home</a>
            </li>
            <li>
                <a href="<?= base_url('siswa') ?>" class="nav-link">Data Siswa</a>
            </li>
        </ul>

        <!-- tombol loginregister -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-link">
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-primary">Logout</a>
            </li>
        </ul>

    </nav>
    <?= $this->renderSection("content") ?>

    <footer class="fixed-bottom bg-secondary text-white">
        <div class="text-center">
            SMA 404
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>