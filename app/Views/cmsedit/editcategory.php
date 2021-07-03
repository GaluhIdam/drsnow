<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Data Kategori</h6>
        </div>
        <form action="/Admin/updateCategory/<?= esc($id_kategori['id_kategori']) ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_kategori" value="<?= $id_kategori['id_kategori']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $id_kategori['icon']; ?>">
            <div class="card-body">
                <div class="container">
                    <div class="main-body">
                        <div class="mb-3">
                            <label for="judul" class="mt-3">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= esc($id_kategori['nama_kategori']) ?>">
                            <div class=" invalid-feedback form-text">
                                <?= $validation->getError('nama_kategori'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <img src="/assets/img/icon/<?= esc($id_kategori['icon']) ?>" width="100px" class="img-thumbnail img-preview">
                            <div class="btn btn-default btn-file text-left">
                                <i class="fas fa-paperclip"></i> <?= esc($id_kategori['icon']) ?>
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
                        <p class="text-justify mt-5" style="font-style: italic;">Terakhir diubah :</p>
                        <p class="text-justify" style="font-style: italic;"><?= date('l, d F Y', strtotime(esc($id_kategori['created_at']))) ?></p>
                        <div class="col-sm-12 mt-4 text-right">
                            <a class="btn btn-secondary" href="/Admin/Category">Back</a>
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