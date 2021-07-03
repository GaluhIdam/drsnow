<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Data Produk</h6>
        </div>
        <form action="/Admin/updateProduct/<?= esc($id_produk['id_produk']) ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug_produk" value="<?= $id_produk['slug_produk']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $id_produk['gambar_produk']; ?>">
            <div class="card-body">
                <div class="container">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="/assets/img/produk/<?= esc($id_produk['gambar_produk']) ?>" class="img-thumbnail img-preview">
                                            <div class="form-group">
                                                <div class="btn btn-default btn-file">
                                                    <i class="fas fa-paperclip"></i><?= esc($id_produk['gambar_produk']) ?>
                                                    <input type="file" id="gambar_produk" name="gambar_produk" class="form-control <?= ($validation->hasError('gambar_produk')) ? 'is-invalid' : ''; ?>" onchange="previewImg()">
                                                    <div class=" invalid-feedback form-text">
                                                        <?= $validation->getError('gambar_produk'); ?>
                                                    </div>
                                                </div>
                                                <p class="help-block mt-2">
                                                    Support : jpg, jpeg, png |
                                                    Resolution : 720 x 720 px |
                                                    Max : 1 mb
                                                </p>
                                            </div>
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
                                                <input type="text" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>" name="nama_produk" value="<?= esc($id_produk['nama_produk']) ?>">
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('nama_produk'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Kategori Produk</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" name="nama_kategori" aria-label="Default select example">
                                                    <?php
                                                    $a = $id_produk['nama_kategori'];
                                                    if ($a = $id_produk['nama_kategori']) {
                                                        echo $b = $id_produk['nama_kategori'];
                                                        echo $c = '';
                                                    } else {
                                                        echo $b = 'Pilih Kategori';
                                                        echo $c = 'disabled';
                                                    }
                                                    ?>
                                                    <option selected <?= $c; ?> value="<?= $a; ?>"><?= $b; ?></option>
                                                    <?php if (!empty($id_kategori) && is_array($id_kategori)) : ?>
                                                        <?php foreach ($id_kategori as $r) : ?>
                                                            <option value="<?= esc($r['nama_kategori']); ?>"><?= esc($r['nama_kategori']); ?></option>
                                                        <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <option value="">Kategori Belum Tersedia</option>
                                                    <?php endif ?>
                                                </select>
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('id_kategori'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Harga Produk</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control <?= ($validation->hasError('harga_produk')) ? 'is-invalid' : ''; ?>" name="harga_produk" value="<?= esc($id_produk['harga_produk']) ?>">
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('harga_produk'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Deskripsi Produk</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea id="editor" type="text" rows="5" class="form-control <?= ($validation->hasError('desc_produk')) ? 'is-invalid' : ''; ?>" name="desc_produk"><?= esc($id_produk['desc_produk']) ?></textarea>
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('desc_produk'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Kategori Produk</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php

                                                if (!empty($id_produk['type'])) {
                                                    $y = "checked";
                                                    $a = esc($id_produk['type']);
                                                } else {
                                                    $y = "best seller";
                                                    $a = $y;
                                                }
                                                ?>
                                                <input class="form-check-input" <?= $y; ?> name="type" type="checkbox" id="flexCheckDefault" value="<?= $a; ?>">
                                                <label class="form-check-label" for="flexCheckDefault" style="font-weight: bold;">
                                                    Best Seller ?
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-4 text-right">
                            <a class="btn btn-secondary " href="/Admin/Product">Back</a>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection() ?>