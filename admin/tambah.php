<?php if (@$_GET['aksi'] == 'tambah') : ?>
<?php

    
    if (isset($_POST['tambah'])){
        tambah();
    }

?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">POSTINGAN BARU</h2>
        </div>
    </div>
    <div class="row mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul postingan</label>
                        <input type="text" name="judul" placeholder="Judul Postingan" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="thumb">Thumbnail</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" class="ckeditor" id="ckeditor"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <br>
                        <?php $k = select('kategori'); foreach ($k as $key) : ?>
                            <input type="checkbox" name="kat[]" value="<?= $key->id_kategori ?>"><?= $key->kategori ?>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mt-3 mr-3">Kembali</a>
            <button type="submit" name="tambah" class="btn btn-primary mt-3">Publish</button>
        </form>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<?php endif; ?>


<?php if (@$_GET['aksi'] == 'hapus') : ?>
    <?php
        $id = $_GET['id'];
        delete('postingan', ['id_postingan' => $id]);
        redirect('');
    ?>
<?php endif; ?>


<?php if (@$_GET['aksi'] == 'edit') : ?>
    <?php
        $id = $_GET['id'];
        $post = select('postingan', ['id_postingan' => $id])[0];

        if (isset($_POST['simpan'])){
            edit();
        }

    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EDIT POSTINGAN</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="judul">Judul postingan</label>
                        <input type="text" name="judul" placeholder="Judul Postingan" class="form-control" value="<?= $post->judul ?>">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="mb-3" for="thumb">Thumbnail</label>
                        <br>
                        <img src="<?= base_url('assets/images/') . $post->thumbnail ?>" class="img-responsive img-thumnail mb-3" alt="" width="50%">
                        <input type="hidden" value="<?= $post->thumbnail ?>" name="gambarLama">
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" class="ckeditor" id="ckeditor"><?= $post->isi ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <br>
                        <?php 
                            $kgr = select('post_kat_detail', ['id_postingan' => $post->id_postingan]);
                            for ($i = 0; $i < count($kgr); $i++){
                                $kgrFull[$i] = $kgr[$i]->id_kategori;
                            }
                        ?>
                        <?php $i=0; $k = select('kategori'); foreach ($k as $key) : ?>
                            <input type="checkbox" <?=(in_array($key->id_kategori, $kgrFull))?'checked':''?>  name="kat[]" value="<?= $key->id_kategori ?>"><?= $key->kategori ?>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mt-3 mr-3">Kembali</a>
            <button type="submit" name="simpan" class="btn btn-primary mt-3">Save Changes</button>
        </form>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<?php endif; ?>


<?php if (@$_GET['aksi'] == 'logout') : ?>
    <?php
        logout();
    ?>
<?php endif; ?>