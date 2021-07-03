<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Tambah Data Produk</h6>
        </div>
        <form action="/Admin/saveProduct" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>" autocomplete="off" placeholder="ketikan nama produk" value="<?= old('nama_produk') ?>" autofocus>
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('nama_produk'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Kategori Produk</label>
                            <select class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" name="nama_kategori" aria-label="Default select example" value="<?= old('nama_produk') ?>">
                                <option selected disabled>Pilih kategori produk</option>
                                <?php if (!empty($id_kategori) && is_array($id_kategori)) : ?>
                                    <?php foreach ($id_kategori as $row) : ?>
                                        <option value="<?= esc($row['nama_kategori']); ?>"><?= esc($row['nama_kategori']); ?></option>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option value="">kategori belum tersedia</option>
                                <?php endif ?>
                            </select>
                            <div class="invalid-feedback form-text">
                                <?= $validation->getError('kategori_produk'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control <?= ($validation->hasError('harga_produk')) ? 'is-invalid' : ''; ?>" autocomplete="off" placeholder="ketikan harga produk" value="<?= old('harga_produk') ?>">
                            <div class="invalid-feedback form-text">
                                <?= $validation->getError('harga_produk'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control <?= ($validation->hasError('desc_produk')) ? 'is-invalid' : ''; ?>" id="editor" name="desc_produk" autocomplete="off" placeholder="ketikan deskripsi produk" rows="5"><?= old('desc_produk') ?></textarea>
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('desc_produk'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <img src="<?= base_url('assets/img/produk/default.png') ?>" width="200px" class="img-thumbnail img-preview">
                    <div class="btn btn-default btn-file">
                        <input type="file" id="gambar_produk" name="gambar_produk" class="form-control <?= ($validation->hasError('gambar_produk')) ? 'is-invalid' : ''; ?>" onchange="previewImgP()" value="<?= old('gambar_produk') ?>">
                        <div class=" invalid-feedback form-text text-left">
                            <?= $validation->getError('gambar_produk'); ?>
                        </div>
                    </div>
                    <p class="help-block mt-2">
                        Support : jpg, jpeg, png |
                        Resolution : 720 x 720 px |
                        Max : 1 mb
                    </p>
                </div>
                <div class="mb-3 mt-5" style="margin-left: 20px;">
                    <input class="form-check-input" name="type" type="checkbox" value="best seller" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="font-weight: bold;">
                        Best Seller
                    </label>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <a href="/Admin/Product" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>