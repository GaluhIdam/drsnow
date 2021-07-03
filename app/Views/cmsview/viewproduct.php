<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Data Produk</h6>
        </div>
        <div class="container mt-3">
            <?php if (session()->getFlashdata('tambah')) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i>Success</h5>
                    <?= session()->getFlashdata('tambah'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('update')) : ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i>Updated</h5>
                    <?= session()->getFlashdata('update'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('delete')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i>Deleted</h5>
                    <?= session()->getFlashdata('delete'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="/assets/img/produk/<?= esc($id_produk['gambar_produk']) ?>" alt="Admin" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nama Produk</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= esc($id_produk['nama_produk']) ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Kategori</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= esc($id_produk['nama_kategori']) ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Harga Produk</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Rp. <?= number_format(esc($id_produk['harga_produk']), 0, ",", "."); ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Type Produk</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= esc($id_produk['type']) ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Deskripsi Produk</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= esc($id_produk['desc_produk']) ?>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-sm-12 text-right mt-4">
                                    <a class="btn btn-secondary " href="/Admin/Product">Back</a>
                                    <a class="btn btn-primary" href="/Admin/editProduct/<?= esc($id_produk['id_produk'], 'url') ?>">Edit</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?= $this->endSection() ?>