<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Ringkasan Brand</h6>
        </div>
        <form action="/Admin/updateRingkasan/<?= esc($id_ringkasan['id_ringkasan']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_ringkasan" value="<?= $id_ringkasan['id_ringkasan']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $id_ringkasan['img_ringkasan']; ?>">
            <div class="card-body">
                <div class="container">
                    <div class="main-body">
                        <label for="judul" class="mt-3">Judul Brand</label>
                        <input type="text" name="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= esc($id_ringkasan['judul']) ?>">
                        <div class=" invalid-feedback form-text">
                            <?= $validation->getError('judul'); ?>
                        </div>
                        <label for="isi" class="mt-3">Ringkasan Brand</label>
                        <textarea name="isi" id="textJudulArea" class="isiTextArea form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" cols="30" rows="10"><?= esc($id_ringkasan['isi']) ?></textarea>
                        <div class=" invalid-feedback form-text">
                            <?= $validation->getError('isi'); ?>
                        </div>
                        <img src="/assets/img/<?= esc($id_ringkasan['img_ringkasan']) ?>" width="200px" class="img-thumbnail img-preview">
                        <div class="btn btn-default btn-file">
                            <input type="file" id="img_ringkasan" name="img_ringkasan" class="form-control <?= ($validation->hasError('img_ringkasan')) ? 'is-invalid' : ''; ?>" onchange="previewImgR()">
                            <div class=" invalid-feedback form-text text-left">
                                <?= $validation->getError('img_ringkasan'); ?>
                            </div>
                        </div>
                        <p class="help-block mt-2">
                            Support : jpg, jpeg, png |
                            Resolution : 720 x 720 px |
                            Max : 1 mb
                        </p>
                        <div class="col-sm-12 mt-4 text-right">
                            <a class="btn btn-secondary" href="/Admin/Ringkasan">Back</a>
                            <button class="btn btn-info" type="submit">Update</button>
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