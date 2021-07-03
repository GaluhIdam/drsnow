<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">

    <!-- owl-carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/owl/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/owl/owl.theme.default.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/customize.css') ?>">
    <?php if (!empty($id_profile) && is_array($id_profile)) : ?>
        <?php foreach ($id_profile as $row) : ?>
            <title><?= esc($row['nama_brand']) ?></title>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Data belum tersedia</p>
    <?php endif ?>
</head>

<body style="background-color: #fcfcfc;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <?php if (!empty($id_profile) && is_array($id_profile)) : ?>
                    <?php foreach ($id_profile as $row) : ?>
                        <img src="/assets/img/<?= esc($row['logo_brand']) ?>" alt="" width="auto" height="30">
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Data belum tersedia</p>
                <?php endif ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item mt-2 mb-2" style="margin-right: 15px;">
                        <a class="nav-link <?php if ($title == "Home") echo "active"; ?>" aria-current="page" href="/Home">Home</a>
                    </li>
                    <li class="nav-item mt-2 mb-2" style="margin-right: 15px;">
                        <a class="nav-link <?php if ($title == "Product") echo "active"; ?>" href="/Product">Product</a>
                    </li>
                    <li class="nav-item mt-2 mb-2" style="margin-right: 15px;">
                        <a class="nav-link <?php if ($title == "Article") echo "active"; ?>" href="/Article">Article</a>
                    </li>
                    <li class="nav-item mt-2 mb-2" style="margin-right: 15px;">
                        <a class="nav-link <?php if ($title == "About") echo "active"; ?>" href="/About">About</a>
                    </li>
                    <li class="nav-item mt-2 mb-2" style="margin-right: 20px;">
                        <a class="nav-link <?php if ($title == "Contact") echo "active"; ?>" href="/Contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" style="width: 180px; border-radius:50px;" type="search" placeholder="Search Product" aria-label="Search">
                    <button class="btn btn-dark" type="submit" style="border-radius: 50px;"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <!-- KONTENT INI -->
    <?= $this->renderSection('content') ?>
    <!-- ENDKONTEN1 -->
    <footer class="mt-5" style="background-color: black; color: white;">
        <!-- Grid container -->
        <div class="container">
            <?php if (!empty($id_profile) && is_array($id_profile)) : ?>
                <?php foreach ($id_profile as $row) : ?>
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <h2 class="mb-4"><?= esc($row['nama_brand']) ?></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iusto neque, aut harum aliquid repellat, odit ullam quod, iure laborum voluptatum quis illo sequi. Voluptatibus aliquid architecto suscipit quaerat adipisci.</p>
                        </div>
                        <div class="col-md-2 mt-5">
                            <h5 class="mb-4">Information</h5>
                            <ul class="list-unstyled">
                                <li><a href="/About" style="text-decoration: none; color: white;">About Us</a></li>
                                <li><a href="/About" style="text-decoration: none; color: white;">FaQ</a></li>
                                <li><a href="/Contact/Temscondition" style="text-decoration: none; color: white;">Terms & Coniditions</a></li>
                                <li><a href="/Contact" style="text-decoration: none; color: white;">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mt-5">
                            <h5 class="mb-4">Customer Service</h5>
                            <p class="mb-0"><?= esc($row['alamat']) ?></p>
                            <p class="mb-0"><?= esc($row['email']) ?></p>
                            <p class="mb-3"><?= esc($row['whatsapp']) ?></p>
                            <section class="mb-2">
                                <!-- Google -->
                                <a class="btn btn-link btn-floating btn-sm text-dark m-1" style="background-color: white; border-radius: 50%;" href="<?= esc($row['alamat']) ?>" role="button" data-mdb-ripple-color="dark"><i style="padding: 2px;" class="fab fa-google"></i></a>
                                <!-- Facebook -->
                                <a class="btn btn-link btn-floating btn-sm text-dark m-1" style="background-color: white; border-radius: 50%;" href="https://www.facebook.com/<?= esc($row['facebook']) ?>" role="button" data-mdb-ripple-color="dark"><i style="padding: 2px;" class="fab fa-facebook-f"></i></a>
                                <!-- Instagram -->
                                <a class="btn btn-link btn-floating btn-sm text-dark m-1" style="background-color: white; border-radius: 50%;" href="https://www.instagram.com/<?= esc($row['instagram']) ?>" role="button" data-mdb-ripple-color="dark"><i style="padding: 2px;" class="fab fa-instagram"></i></a>
                            </section>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Data belum tersedia</p>
            <?php endif ?>
        </div>
        <hr>
        <!-- Copyright -->
        <div class="text-center text-dark p-1" style="background-color: black;">
            <p style="color: white; font-size: 15px;">Copyright © 2021 Dr. Snow. All Rights Reserved</p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('assets/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- owl -->
    <script src="<?= base_url('assets/dist/vendors/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/dist/owl.carousel.min.js') ?>"></script>
    <script>
        // var owl = $('.owl-carousel');
        // owl.owlCarousel({
        //     items: 4,
        //     loop: true,
        //     margin: 10,
        //     autoplay: false,
        //     autoplayTimeout: 1000,
        //     autoplayHoverPause: true,
        //     responsiveClass: true,
        //     responsive: {
        //         0: {
        //             items: 1,
        //             nav: true
        //         },
        //         700: {
        //             items: 2,
        //             nav: false
        //         },
        //         1100: {
        //             items: 6,
        //             nav: true,
        //             loop: true
        //         }
        //     }
        // });
        // $('.play').on('click', function() {
        //     owl.trigger('play.owl.autoplay', [1000])
        // })
        // $('.stop').on('click', function() {
        //     owl.trigger('stop.owl.autoplay')
        // })

        $(document).ready(function() {
            var sync1 = $("#sync1");
            sync1.owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
        $(document).ready(function() {
            var sync2 = $("#sync2");
            sync2.owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
        $(document).ready(function() {
            var sync2 = $("#sync3");
            sync2.owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
                nav: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>