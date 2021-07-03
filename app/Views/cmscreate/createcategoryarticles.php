<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Artikel / Tambah Data Kategori</h6>
        </div>
        <form action="/Admin/saveCategoryArticles" method="post">
            <?= csrf_field(); ?>
            <div class=" card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" placeholder="ketikan nama kategori" value="<?= old('nama_kategori') ?>" autocomplete="off" autofocus>
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('nama_kategori'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <a href="/Admin/CategoryArticles" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>