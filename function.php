<?php
session_start();
include 'database.php';

define('url', 'https://andrey-native.daarulquran.sch.id/');


function prosesLogin(){
    extract($_POST);
    @$email = select('users', ['email' => $email]);
    @$pass = select('users', ['password' => sha1(md5($password))]);

    if (@$email && @$pass){
        $data = [
            'status' => true,
            'nama'  => $email[0]->name,
            'email' => $email[0]->email
        ];
        $_SESSION['login'] = $data;
        redirect('admin/index.php');
    } else {
        $pesan = "Maaf Login Gagal, Silahkan Cek Username / Password Terlebih Dahulu";
        echo "<script>alert('$pesan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=" . base_url('admin/login.php') . "'>";
    }

}

function logout(){
    session_destroy();
    redirect('admin/login.php');
}

function tambahKategori(){
    $data = [
        'kategori'  => $_POST['kategori']
    ];
    insert('kategori', $data);
    redirect('admin/index.php?page=kategori');
}

function updateKategori(){
    $data = [
        'kategori'  => $_POST['kategori']
    ];
    update('kategori', $data, ['id_kategori' => $_GET['id']]);
    redirect('admin/index.php?page=kategori');
}


function tambah(){
    $nama = upload();
    $data = [
        'judul'     => $_POST['judul'],
        'thumbnail' => $nama,
        'isi'       => $_POST['isi'],
        'slug'      => strtolower(str_replace(" ", "-", $_POST['judul'])),
        'date_post' => date('Y-m-d h:i:s', time()),
        'id_user'   => 1
    ];
    insert('postingan', $data);
    $last = last_id();

    foreach ($_POST['kat'] as $key){
        $data = [
            'id_postingan' => $last,
            'id_kategori'  => $key
        ];
        insert('post_kat_detail', $data);   
    }

    redirect('admin/index.php');
}

function edit(){
    if ($_FILES['gambar']['error'] == 0){
        $nama = upload();
    } else {
        $nama = $_POST['gambarLama'];
    }

    $data = [
        'judul'     => $_POST['judul'],
        'thumbnail' => $nama,
        'isi'       => $_POST['isi'],
        'id_user'   => 1
    ];

    update('postingan', $data, ['id_postingan' => $_GET['id']]);
    delete('post_kat_detail', ['id_postingan' => $_GET['id']]);
    foreach ($_POST['kat'] as $key){
        $data = [
            'id_postingan' => $_GET['id'],
            'id_kategori'  => $key
        ];
        insert('post_kat_detail', $data);   
    }
    redirect('admin/index.php');
}

function upload(){
    if ($_FILES['gambar']['error'] == 4){
        echo "<script>alert('Silahkan Pilih Gambar Terlebih Dahulu');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?aksi=tambah'>";
    } else {
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $nama_file = str_replace(" ", "-", $_FILES['gambar']['name']);

        // filter format 
        $format = ['jpg', 'png', 'bmp', 'gif', 'jpeg', 'PNG'];
        $extensi = explode( '.', $_FILES['gambar']['name']);
        $extensi = end($extensi);

        //filter ukuran
        $size_files = $_FILES['gambar']['size'];
        $bytes = 1000000;

        if (in_array($extensi, $format)){
            if ($size_files <= $bytes * 2 ){
                $folder = "../assets/images/$nama_file";
                move_uploaded_file($lokasi_file, $folder);
                return $nama_file;
            } else {
                echo "<script>alert('Maaf, Ukuran File Tidak boleh lebih dari 2 mb');</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php?aksi=tambah'>";
            }
        } else {
            echo "<script>alert('Maaf, Format Yang Diupload Bukan Gambar');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?aksi=tambah'>";
        }


    }
}

function redirect($url){
    header('Location: '. base_url() . $url);
}


function base_url($tujuan = ''){
    if ($tujuan != ''){
        return url . $tujuan;
    } else {
        return url;
    }
}

function convertTanggal($date){
    $exp = explode('-', $date);
    $tahun = $exp[0];
    $bulan = bulan($exp[1]);
    $tanggal = explode(' ', $exp[2]);
   
    return $bulan . " " . $tanggal[0] . ", " . $tahun;
}

function label(){
    global $koneksi;
    $id = $_GET['label'];
    $string = "SELECT * FROM post_kat_detail WHERE id_kategori = '$id' GROUP BY id_postingan";

    $hasil = mysqli_query($koneksi, $string);
    while ($data = mysqli_fetch_assoc($hasil)){
        $h[] = select('postingan', ['id_postingan' => $data['id_postingan']])[0];
    }

    $h = json_encode($h);
    return json_decode($h);
}


function bulan($bulan){
    switch ($bulan){
        case '01':
            return "Januari";
            break;
        case '02':
            return "Februari";
            break;
        case '03':
            return "Maret";
            break;
        case '04':
            return "April";
            break;
        case '05':
            return "Mei";
            break;
        case '06':
            return "Juni";
            break;
        case '07':
            return "Juli";
            break;
        case '08':
            return "Agustus";
            break;
        case '09':
            return "September";
            break;
        case '10':
            return "Oktober";
            break;
        case '11':
            return "November";
            break;
        case '12':
            return "Desember";
            break;
        default:
            return "invalid";
            break;
    }

 

}


