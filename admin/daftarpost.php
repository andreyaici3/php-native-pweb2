<?php
    $post = select('postingan');
?>
<div class="container" style="min-height: 500px;">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">DAFTAR POSTINGAN</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Postingan</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($post as $key) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $key->judul ?></td>
                                <td width="120px">
                                    <?php if (file_exists('../assets/images/' . $key->thumbnail)) { ?>
                                        <img src="<?= base_url('assets/images/') . $key->thumbnail ?>" class="img-responsive img-thumbnail" >
                                    <?php } ?>
                                </td>
                                <td>
                                <a href="index.php?aksi=hapus&&id=<?= $key->id_postingan ?>" onclick="return confirm('Yakin Ingin Mengahapus Data')" class="btn btn-danger btn-sm">Delete</a> | <a href="index.php?aksi=edit&&id=<?= $key->id_postingan ?>" class="btn btn-sm btn-success">Ubah</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
        <a href="index.php?aksi=tambah" class="btn btn-primary btn-sm mr-4">TAMBAH POSTINGAN</a>
        <a href="index.php?page=kategori" class="btn btn-primary btn-sm">DAFTAR KATEGORI</a>
    </div>