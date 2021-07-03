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
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-3 card text-white bg-dark mb-3 shadow" style="max-width: 19.5rem; margin: auto;">
            <div class="card-header">Flash Sale</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 card text-white bg-dark mb-3 shadow" style="max-width: 19.5rem; margin: auto;">
            <div class="card-header">Skin Care</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 card text-white bg-dark mb-3 shadow" style="max-width: 19.5rem; margin: auto;">
            <div class="card-header">Hair Care</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 card text-white bg-dark mb-3 shadow" style="max-width: 19.5rem; margin: auto;">
            <div class="card-header">Hair Mask</div>
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                        <span>$1,999.99</span>
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
                        <span>$1,999.99</span>
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
                        <span>$1,999.99</span>
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
                        <span>$1,999.99</span>
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
                        <span>$1,999.99</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product align-items-center shadow-sm" style="margin: 20px;">
                background-color: white; <div class="text-center mt-0"><img src="/assets/img/produk/01.jpg" width="auto" style="border-radius: 30px;"> </div>
                <div class="about text-center">
                    <div class="row">
                        <h5>XRD Active Shoes</h5>
                    </div>
                    <div class="row">
                        <span>$1,999.99</span>
                    </div>
                    <button class="btn btn-primary btn-sm shadow-sm mt-3 mb-5" style=" border-radius: 50px; padding-left: 20px; padding-right: 20px;">Detail</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: black; color: white; padding: 50px; margin-top: 80px; margin-bottom: 80px;">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 align-self-center mb-5 mt-5">
                <img src="/assets/img/produk/10.png" class="img-fluid" alt="" width="100%">
            </div>
            <div class="col-md-6 align-self-center">
                <h1><img src="/assets/img/drsnow.jpg" alt="img" width="100px"></h1>
                <h1>Subur Lebat</h1>
                <p class="lead mb-5">In today's world internet is the most popular way of connecting with the people. At you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
                <p><a href="#" target="_blank" class="btn btn-light btn-lg" style="border-radius: 50px;">Get It Now</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 80px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">Our Testimoni</h4>
    <div class="owl-carousel" id="sync2">
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-sm" style="margin: 20px; border-width: 0px;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-quote-left"></i></h4>
                    <div class="template-demo">
                        <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Delbert Simonas</h4>
                                <p class="cust-profession">Store Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 80px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">Last Articles</h4>
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="card mb-3 shadow-sm" style="max-width: 100%; padding: 0px; border-width: 0px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/img/produk/default.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="card-body">
                                    <h2 class="card-title">Card title</h2>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <button class="btn btn-primary btn-sm">Read</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3 shadow-sm" style="max-width: 100%; padding: 0px; border-width: 0px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/img/produk/default.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="card-body">
                                    <h2 class="card-title">Card title</h2>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <button class="btn btn-primary btn-sm">Read</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3 shadow-sm" style="max-width: 100%; padding: 0px; border-width: 0px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/img/produk/default.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="card-body">
                                    <h2 class="card-title">Card title</h2>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <button class="btn btn-primary btn-sm">Read</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-5 mt-5">
                <h5 class="mb-3">Find Your Artciles</h5>
                <div class="input-group mb-3">
                    <input class="form-control me-2" style="width: 180px; border-radius:50px;" type="search" placeholder="Search Articles" aria-label="Search">
                    <button class="btn btn-dark" type="submit" style="border-radius: 50px;"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="mb-3">
                <h5 class="mb-3">Categories</h5>
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
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
<?= $this->endSection(); ?>