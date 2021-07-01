<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            <?php $i = 1; foreach (select('kategori') as $key) : ?>
            <?php if ($i%2 == 0) { ?>
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="<?= base_url('index.php?label=') . $key->id_kategori ?>"><?= $key->kategori ?></a></li>
                </ul>
            </div>
            <?php } else { ?>
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="<?= base_url('index.php?label=') . $key->id_kategori ?>"><?= $key->kategori ?></a></li>
                </ul>
            </div> 
            <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>  