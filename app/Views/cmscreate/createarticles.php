<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Artikel / Tambah Data Kategori</h6>
        </div>
        <form action="/Admin/saveArticles" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Artikel</label>
                    <input type="text" name="judul_artikel" class="form-control <?= ($validation->hasError('judul_artikel')) ? 'is-invalid' : ''; ?>" placeholder="ketikan judul artikel" value="<?= old('judul_artikel') ?>" autocomplete="off">
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('judul_artikel'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Meta Tag</label>
                            <input type="text" name="meta_tag" class="form-control <?= ($validation->hasError('meta_tag')) ? 'is-invalid' : ''; ?>" placeholder="ketikan meta tag" value="<?= old('meta_tag') ?>" autocomplete="off">
                            <div class="invalid-feedback form-text">
                                <?= $validation->getError('meta_tag'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Kategori Artikel</label>
                            <select class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" name="nama_kategori" aria-label="Default select example">
                                <?php
                                $a = old('nama_kategori');
                                if ($a = old('nama_kategori')) {
                                    echo $b = old('nama_kategori');
                                    echo $c = '';
                                } else {
                                    echo $b = 'Pilih Kategori';
                                    echo $c = 'disabled';
                                }
                                ?>
                                <option selected <?= $c; ?> value="<?= $a; ?>"><?= $b; ?></option>
                                <?php if (!empty($nama_kategori) && is_array($nama_kategori)) : ?>
                                    <?php foreach ($nama_kategori as $row) : ?>
                                        <option value="<?= esc($row['nama_kategori']); ?>"><?= esc($row['nama_kategori']); ?></option>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option value="">kategori belum tersedia</option>
                                <?php endif ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
                            <input type="text" name="penulis_artikel" class="form-control <?= ($validation->hasError('penulis_artikel')) ? 'is-invalid' : ''; ?>" placeholder="ketikan penulis artikel" value="<?= old('penulis_artikel') ?>" autocomplete="off">
                            <div class="invalid-feedback form-text">
                                <?= $validation->getError('penulis_artikel'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Status Artikel</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" type="radio" name="status" id="flexRadioDefault1" value="draft">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Draft
                                        </label>
                                        <div class="invalid-feedback form-text">
                                            <?= $validation->getError('status'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" type="radio" name="status" id="flexRadioDefault2" value="publish">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Publish
                                        </label>
                                        <div class="invalid-feedback form-text">
                                            <?= $validation->getError('status'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-5">
                    <textarea name="isi_artikel" id="editor">
                    <?= old('isi_artikel') ?>
                    </textarea>
                    <div class="invalid-feedback form-text <?= ($validation->hasError('isi_artikel')) ? 'is-invalid' : ''; ?>">
                        <?= $validation->getError('isi_artikel'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <img src="<?= base_url('assets/img/artikel/default.jpg') ?>" width="500px" class="img-thumbnail img-preview">
                    <div class="btn btn-default btn-file text-left">
                        <i class="fas fa-paperclip"></i> Banner Artikel
                        <input type="file" id="image_artikel" name="image_artikel" class="form-control <?= ($validation->hasError('image_artikel')) ? 'is-invalid' : ''; ?>" onchange="previewImgA()">
                        <div class=" invalid-feedback form-text">
                            <?= $validation->getError('image_artikel'); ?>
                        </div>
                    </div>
                    <p class="help-block mt-2 fs-6 fst-italic text-muted">
                        Only Support : jpg, jpeg, png |
                        Resolution : 1920 x 720 px |
                        Max : 1 mb
                    </p>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <a href="/Admin/Articles" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>