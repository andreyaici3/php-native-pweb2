<?php 
include 'header.php';

if (!isset($_GET['page'])){
    if (@$_GET['aksi'] == ''){
        include 'daftarpost.php';
    } else {
        include 'tambah.php';
    }
} else {
    if (@$_GET['aksi'] == ''){
        include 'daftarkategori.php';
    } else if ($_GET['aksi'] == 'logout') {
        logout();
    } else {
        include 'kat.php';
    }
    
}






require 'footer.php';
