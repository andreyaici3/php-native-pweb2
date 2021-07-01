<?php
    $post = select('postingan'); 
    
    if (isset($_POST['cari'])){
        extract($_POST);
        if (isset($keyword) != '' ){
            $key = "SELECT * FROM postingan WHERE
                isi LIKE '%$keyword%' OR
                judul LIKE '%$keyword%'
            ";
            $data =mysqli_query($koneksi, $key);
            while($x = mysqli_fetch_array($data)){
                $hasil[] = $x;
            }
            $hasil = json_encode($hasil);
            $hasil = json_decode($hasil);   
        } 
        else {
            $hasil = select('postingan'); 
        }
    } else {
        $hasil = select('postingan'); 
    }

    

    if (isset($_GET['label'])){
        $hasil = label();
    }
?>
<style>
    .card-img-top {
        height: 300px !important;
        overflow: hidden;
    }
    .card-img-top1 {
        height: 400px !important;
        width: 100%;
        overflow: hidden;
    }
</style>
<div class="container mt-4">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <?php if (!isset($_GET['label'])){ ?>
            <div class="card mb-4">
                <a href="<?= base_url('index.php?page=post&&slug=') . $hasil[0]->slug ?>">
                
                <?php if (file_exists('assets/images/' . $hasil[0]->thumbnail)) { ?>
                    <img src="<?= base_url('assets/images/') . $hasil[0]->thumbnail ?>" class="card-img-top1" >
                <?php } else { ?>
                    <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                <?php } ?>
                </a>
                <div class="card-body">
                    <div class="small text-muted"><?= convertTanggal($hasil[0]->date_post); ?></div>
                    <?php $kategori = select('post_kat_detail', ['id_postingan' => $hasil[0]->id_postingan]); ?>
                    <?php foreach($kategori as $k) :?>
                        <a class="badge bg-secondary mt-2 text-decoration-none link-light" href="#!"><?= select('kategori', ['id_kategori' => $k->id_kategori])[0]->kategori ?></a>
                    <?php endforeach; ?>
                    <h2 class="card-title h4 mt-2"><?= (strlen($hasil[0]->judul) < 100 ) ? $hasil[0]->judul : substr($hasil[0]->judul, 0, 50) . "...." ?></h2>
                    <p class="card-text"><?= substr($hasil[0]->isi, 0, 180) . "....." ?></p>
                    <a class="btn btn-primary" href="<?= base_url('index.php?page=post&&slug=') . $hasil[0]->slug ?>">Read more →</a>
                </div>
            </div>
            <?php } else { ?>
                <h3 style="font-style: italic;" class="mt-3 mb-5">Showing Post By: <?= select('kategori', ['id_kategori' => $_GET['label']])[0]->kategori ?></h3>
            <?php } ?>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">

                <?php foreach ($hasil as $key) : ?>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="<?= base_url('index.php?page=post&&slug=') . $hasil[0]->slug ?>">
                        <?php if (file_exists('assets/images/' . $key->thumbnail)) { ?>
                            <img src="<?= base_url('assets/images/') . $key->thumbnail ?>" class="card-img-top" >
                        <?php } else { ?>
                            <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                        <?php } ?>
                        <div class="card-body">
                            <div class="small text-muted"><?= convertTanggal($key->date_post) ?></div>
                            <?php $kategori = select('post_kat_detail', ['id_postingan' => $key->id_postingan]); ?>
                            <?php foreach($kategori as $k) :?>
                                <a class="badge bg-secondary mt-2 text-decoration-none link-light" href="#!"><?= select('kategori', ['id_kategori' => $k->id_kategori])[0]->kategori ?></a>
                            <?php endforeach; ?>
                            <h2 class="card-title h4 mt-2"><?= (strlen($key->judul) < 50 ) ? $key->judul : substr($key->judul, 0, 50) . "...." ?></h2>
                            <p class="card-text"><?= substr($key->isi, 0, 180) . "....." ?></p>
                            <a class="btn btn-primary" href="<?= base_url('index.php?page=post&&slug=') . $key->slug ?>">Read more →</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>    
                         
            </div>
            <!-- Pagination-->
            <!-- End Pagination -->
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <?php include 'search.php'; ?>
            <!-- Categories widget-->
            <?php include 'kategori.php'; ?>
        </div>
    </div>
</div>