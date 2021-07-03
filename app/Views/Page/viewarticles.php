<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 100px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Article" style="text-decoration: none; color:black; font-weight:bold;">Article</a></li>
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color:black; font-weight:bold;"><?= esc($slug_artikel['nama_kategori']) ?></a></li>
        </ol>
    </nav>
    <h1 class="h1 mt-4" style="font-weight: bold;"><?= esc($slug_artikel['judul_artikel']) ?></h1>
    <p style="margin-bottom: 0px;"><?= esc($slug_artikel['penulis_artikel']) ?></p>
    <p class="text-muted"><?= date('l, d F Y h:i', strtotime(esc($slug_artikel['created_at']))); ?> WIB</p>
    <!-- <p class="text-muted" style="margin-top: -10px;">tags: judul, kategori, tanggal</p> -->

    <img src="/assets/img/artikel/<?= esc($slug_artikel['image_artikel']) ?>" class="img-fluid mt-3" width="100%" alt="...">
    <div class="row">
        <div class="col-md-8">
            <div class="row mt-5">
                <?= htmlspecialchars_decode(esc($slug_artikel['isi_artikel'])) ?>
                <p class="mt-5">Tags : <?= esc($slug_artikel['meta_tag']) ?></p>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">Space Iklan</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>
            <div class="mb-5 mt-5">
                <h5 class="mb-3">Find Your Articles</h5>
                <div class="input-group mb-3">
                    <input class="form-control me-2" style="width: 180px; border-radius:50px;" type="search" placeholder="Search Articles" aria-label="Search">
                    <button class="btn btn-dark" type="submit" style="border-radius: 50px;"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="mb-3">
                <h5 class="mb-3">Categories</h5>
                <ul class="list-group shadow-sm">
                    <?php if (!empty($nama_kategori) && is_array($nama_kategori)) : ?>
                        <?php foreach ($nama_kategori as $row) : ?>
                            <li class="list-group-item"><a href=" #" style="text-decoration: none; color:black;"><?= esc($row['nama_kategori']); ?></a></li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li class="list-group-item">Kategori Artikel Belum Tersedia</li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>