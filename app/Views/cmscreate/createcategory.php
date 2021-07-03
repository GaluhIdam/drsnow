<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Tambah Data Kategori</h6>
        </div>
        <form action="/Admin/saveCategory" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" placeholder="ketikan nama kategori" value="<?= old('nama_kategori') ?>" autocomplete="off" autofocus>
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('nama_kategori'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <img src="<?= base_url('assets/img/icon/default.jpg') ?>" width="100px" class="img-thumbnail img-preview">
                    <div class="btn btn-default btn-file text-left">
                        <i class="fas fa-paperclip"></i> Icon Kategori
                        <input type="file" id="icon" name="icon" class="form-control <?= ($validation->hasError('icon')) ? 'is-invalid' : ''; ?>" onchange="previewImgC()">
                        <div class=" invalid-feedback form-text">
                            <?= $validation->getError('icon'); ?>
                        </div>
                    </div>
                    <p class="help-block mt-2 fs-6 fst-italic text-muted">
                        Only Support : jpg, jpeg, png |
                        Resolution : 720 x 720 px |
                        Max : 1 mb
                    </p>
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