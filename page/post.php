<?php @$post = select('postingan', ['slug' => $_GET['slug']])[0]; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bolder mb-1"><?= $post->judul ?></h1>
                    <div class="text-muted fst-italic mb-2">Posted on <?= convertTanggal($post->date_post); ?> by <?= select('users', ['id_user' =>$post->id_user])[0]->name ?></div>
                    <?php $kategori = select('post_kat_detail', ['id_postingan' => $post->id_postingan]); ?>
                    <?php foreach($kategori as $k) :?>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= select('kategori', ['id_kategori' => $k->id_kategori])[0]->kategori ?></a>
                    <?php endforeach; ?>
                </header>
                <figure class="mb-4">
                        <?php if (file_exists('assets/images/' . $post->thumbnail)) { ?>
                            <img src="<?= base_url('assets/images/') . $post->thumbnail ?>" class="img-fluid rounded" >
                        <?php } else { ?>
                            <img class="img-fluid rounded" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                        <?php } ?>
                </figure>
                <section class="mb-5">
                    <?= $post->isi ?>
                </section>
            </article>
        </div>
        <div class="col-lg-4">
            <?php include 'search.php'; ?>
            <?php include 'kategori.php'; ?>
        </div>
    </div>
</div>