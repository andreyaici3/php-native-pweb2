<?php
    $post = select('kategori');
?>
<div class="container"  style="min-height: 500px;">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">DAFTAR KATEGORI</h2>
            </div>
        </div>
        <div class="row mt-4">
            
                <form method="POST" action="index.php?page=produk">
                    
            
          
            </form>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($post as $key) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $key->kategori ?></td>
                                <td>
                                <a href="index.php?page=kategori&&aksi=hapus&&id=<?= $key->id_kategori ?>" onclick="return confirm('Yakin Ingin Mengahapus Data')" class="btn btn-danger btn-sm">Delete</a> | <a href="index.php?page=kategori&&aksi=edit&&id=<?= $key->id_kategori ?>" class="btn btn-sm btn-success">Ubah</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
        <a href="index.php" class="btn btn-primary btn-sm mr-4">KEMBALI KE DAFTAR POSTINGAN</a>
        <a href="index.php?page=kategori&&aksi=tambah" class="btn btn-primary btn-sm">TAMBAH KATEGORI</a>
    </div>