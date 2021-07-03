<?php if (@$_GET['aksi'] == 'tambah') : ?>
<?php

    
    if (isset($_POST['tambah'])){
        tambahKategori();
    }

?>
<div class="container" style="min-height: 500px;">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">KATEGORI BARU</h2>
        </div>
    </div>
    <div class="row mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori">Kategori postingan</label>
                        <input type="text" name="kategori" placeholder="Nama Kategori Baru" class="form-control">
                    </div>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mt-3 mr-3">Kembali</a>
            <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah</button>
        </form>
    </div>
</div>
<?php endif; ?>


<?php if (@$_GET['aksi'] == 'edit') : ?>
<?php

    $hasil = select('kategori', ['id_kategori' => $_GET['id']])[0];
    if (isset($_POST['simpan'])){
        updateKategori();
    }

?>
<div class="container" style="min-height: 500px;">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">KATEGORI BARU</h2>
        </div>
    </div>
    <div class="row mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori">Kategori postingan</label>
                        <input type="text" name="kategori" class="form-control" value="<?= $hasil->kategori ?>">
                    </div>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mt-3 mr-3">Kembali</a>
            <button type="submit" name="simpan" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>
<?php endif; ?>

<?php if (@$_GET['aksi'] == 'hapus') : ?>
    <?php
        delete('kategori', ['id_kategori' => $_GET['id']]);
        redirect('index.php?page=kategori');
    ?>
<?php endif; ?>

