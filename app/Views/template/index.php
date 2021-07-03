<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <title><?= $title; ?></title>

    <style>
        .isiTextArea {
            overflow: auto;
            width: 100%;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('template/sidebar')  ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('template/topbar') ?>
                <!-- End of Topbar -->

                <!-- KONTENT INI -->
                <?= $this->renderSection('content') ?>
                <!-- ENDKONTEN1 -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; PT. Siap Kirim Indonesia <?= date('Y') ?></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->

        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


        <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>



        <!-- Core plugin JavaScript-->
        <script src=" <?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

        <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>


        <script>
            $(document).ready(function() {
                $('#example').DataTable({

                });
            });
        </script>


        <!-- produk -->
        <script>
            function previewImgP() {
                const gambar_produk = document.querySelector('#gambar_produk');
                const gambar_produkLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                gambar_produkLabel.textContent = gambar_produk.files[0].name;

                const filegambar_produk = new FileReader();
                filegambar_produk.readAsDataURL(gambar_produk.files[0]);

                filegambar_produk.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <!-- icon -->
        <script>
            function previewImgC() {
                const icon = document.querySelector('#icon');
                const iconLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                iconLabel.textContent = icon.files[0].name;

                const fileicon = new FileReader();
                fileicon.readAsDataURL(icon.files[0]);

                fileicon.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <script>
            function previewImgX() {
                const image_marketplace = document.querySelector('#image_marketplace');
                const image_marketplaceLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                image_marketplaceLabel.textContent = image_marketplace.files[0].name;

                const fileimage_marketplace = new FileReader();
                fileimage_marketplace.readAsDataURL(image_marketplace.files[0]);

                fileimage_marketplace.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <script>
            function previewImgL() {
                const logo_brand = document.querySelector('#logo_brand');
                const logo_brandLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                logo_brandLabel.textContent = logo_brand.files[0].name;

                const filelogo_brand = new FileReader();
                filelogo_brand.readAsDataURL(logo_brand.files[0]);

                filelogo_brand.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <script>
            function previewImgR() {
                const img_ringkasan = document.querySelector('#img_ringkasan');
                const img_ringkasanLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                img_ringkasanLabel.textContent = img_ringkasan.files[0].name;

                const fileimg_ringkasan = new FileReader();
                fileimg_ringkasan.readAsDataURL(img_ringkasan.files[0]);

                fileimg_ringkasan.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>
        <script>
            function previewImgA() {
                const ImageArtikel = document.querySelector('#image_artikel');
                const ImageArtikelLabel = document.querySelector('.form-control');
                const imgPreview = document.querySelector('.img-preview');

                ImageArtikelLabel.textContent = ImageArtikel.files[0].name;

                const fileImageArtikel = new FileReader();
                fileImageArtikel.readAsDataURL(ImageArtikel.files[0]);

                fileImageArtikel.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
        </script>

</body>

</html>