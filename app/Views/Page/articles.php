<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 80px;">
    <header class="blog-header py-3 text-center">
        <div class="row justify-content-between align-items-center">
            <p class="blog-header-logo text-dark" href="#" style="font-size: 60px; font-weight:bold;">Articles</p>
            <p style="margin-top: -25px;">By Dr. Snow</p>
            <hr>
            <div class=" owl-carousel" id="sync3">
                <?php foreach ($nama_kategori as $row) : ?>
                    <div class="item">
                        <div class="col">
                            <a href="#" style="text-decoration: none; color: black;"><?= esc($row['nama_kategori']) ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1">
    </div>
</div>

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-image: url(https://p0.pikist.com/photos/312/264/bhutan-nature-lake-natural-beauty-landscape-mountains-serene-calm.jpg); background-position: center; background-repeat:no-repeat; background-size:cover;">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>
</main>

<div class="container" style="margin-top: 80px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">Last Articles</h4>
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <?php if (!empty($id_artikel) && is_array($id_artikel)) : ?>
                        <?php foreach ($id_artikel as $row) : ?>
                            <div class="card mx-auto mb-3 shadow-sm" style="width: 16.5rem; margin: 20px; padding: 0px; border-width: 0px; border-radius: 20px;">
                                <div class="row g-0">
                                    <img src="/assets/img/artikel/<?= esc($row['image_artikel']); ?>" class="card-img-top" alt="..." style="border-radius: 20px;">
                                    <div class="card-body">
                                        <p class="card-text"><?= esc($row['nama_kategori']); ?></p>
                                        <a href="/Article/viewArticles/<?= esc($row['slug_artikel']); ?>" style="text-decoration: none; color:black;">
                                            <h5 class="card-title"><?= esc($row['judul_artikel']); ?></h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted"><?= esc($row['penulis_artikel']); ?>, <?= date('l, d F Y', strtotime(esc($row['created_at']))); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Artikel Belum Tersedia</p>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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

<section class="shop-newsletter section" style="margin-top: 80px;">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner text-center">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <div class="row">
                                <input name="EMAIL" class="form-control text-center" placeholder="Your email address" required="" type="email" style="border-radius:50px;">
                            </div>
                            <div class="col mt-3">
                                <button class="btn btn-danger rounded-pill" style="padding-left: 20px; padding-right: 20px;"><i class="fas fa-envelope"></i> Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>