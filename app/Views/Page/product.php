<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>
<div id="carouselExampleIndicators" style="margin-top: 59px;" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/img/banner/bannerFB.jpg" class="d-block w-100" alt="/assets/img/banner/bannerFB.jpg">
        </div>
        <div class="carousel-item">
            <img src="/assets/img/banner/bannerFB.jpg" class="d-block w-100" alt="/assets/img/banner/bannerFB.jpg">
        </div>
        <div class="carousel-item">
            <img src="/assets/img/banner/bannerFB.jpg" class="d-block w-100" alt="/assets/img/banner/bannerFB.jpg">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container" style="margin-top: 50px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">Product Category</h4>
    <div class="row" style="margin: auto;">
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/skincare.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Skin Care</p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/hair.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Hair Care</p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/serum.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Serum</p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/toner.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Toner</p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/cream.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Cream</p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="square mx-auto" style="width:5rem;">
                <img src="/assets/img/icon/shampoo.svg" class="img-thumbnail" alt="..." style="border-width: 0px;">
                <p class="text-center" style="font-weight: bold;">Shampoo</p>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 80px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">Best Seller</h4>
    <div class="owl-carousel owl-theme" id="sync1">
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px; border-radius: 30px; background-color: white;">
                <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>Skin Care</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px; border-radius: 30px; background-color: white;">
                <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>Skin Care</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px; border-radius: 30px; background-color: white;">
                <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>Skin Care</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px; border-radius: 30px; background-color: white;">
                <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>Skin Care</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px; border-radius: 30px; background-color: white;">
                <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>Skin Care</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px;">
                <d background-color: white;iv class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;">
            </div>
            <div class="about text-center">
                <div class="row">
                    <h5>XRD Active Shoes</h5>
                </div>
                <div class="row">
                    <span>Skin Care</span>
                </div>
                <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <h4 class="text-center mb-5" style="font-weight: bold; margin-top: 80px;">All Product</h4>
    <div class="row" style="margin: auto;">
        <?php if (!empty($id_produk) && is_array($id_produk)) : ?>
            <?php foreach ($id_produk as $row) : ?>
                <div class="col-6 col-sm-6 mb-4 mx-auto" style="max-width: 12rem; padding: 5px;">
                    <div class="card text-center shadow-sm" style="border-radius: 20px; border-width: 0px;">
                        <div class="card-header" style="padding: 0px; border-width: 0px; border-radius: 20px;" style="border-radius: 0px;"><img src="/assets/img/produk/<?= esc($row['gambar_produk']) ?>" class="img-fluid" style="border-radius: 20px;" alt="img"></div>
                        <div class="card-body">
                            <a class="card-title h6" style="text-decoration: none; color: black; font-weight:bold;" href="#"><?= esc($row['nama_produk']) ?></a>
                            <p class="disabled mt-2" style="font-size: 14px;"><?= esc($row['nama_kategori']) ?></p>
                            <button class="btn btn-sm btn-primary rounded-pill">Detail</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Data belum tersedia</p>
        <?php endif ?>
    </div>
</div>

<div class="container">
    <h4 class="text-center mb-5" style="font-weight: bold; margin-top: 80px;">Get It On</h4>
    <div class="owl-carousel owl-theme" id="sync2">
        <?php if (!empty($id_marketplace) && is_array($id_marketplace)) : ?>
            <?php foreach ($id_marketplace as $row) : ?>
                <div class="item">
                    <div class="col" style="padding-left: 100px; padding-right: 100px;">
                        <a href="<?= esc($row['link_marketplace']) ?>">
                            <img src="/assets/img/marketplace/<?= esc($row['image_marketplace']) ?>" class="img-fluid" alt="img">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Data belum tersedia</p>
        <?php endif ?>
    </div>
</div>
<?= $this->endSection() ?>/assets/img/produk/01.jpg