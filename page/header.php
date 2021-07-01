
<?php 
    require 'function.php'; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Web Ini Merupakan sebuah project dari matakuliah Praktikum permrograman web 2" />
        <meta name="author" content="Andrey Andriansyah" />
        <title>ANDREY DOT ID</title>
        <link rel="icon" type="image/x-icon" href="assets/icon/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><b>ANDREY DOT ID</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/login.php') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>