<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Produk / Tambah Marketplace</h6>
        </div>
        <form action="/Admin/updateMarketplace/<?= esc($id_marketplace['id_marketplace']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_marketplace" value="<?= esc($id_marketplace['id_marketplace']); ?>">
            <input type="hidden" name="gambarLama" value="<?= esc($id_marketplace['image_marketplace']); ?>">
            <div class="card-body">
                <div class="mb-3">
                    <img src="/assets/img/marketplace/<?= esc($id_marketplace['image_marketplace']) ?>" width="200px" class="img-thumbnail img-preview">
                    <div class="btn btn-default btn-file">
                        <input type="file" id="image_marketplace" name="image_marketplace" class="form-control <?= ($validation->hasError('image_marketplace')) ? 'is-invalid' : ''; ?>" onchange="previewImgX()">
                        <div class=" invalid-feedback form-text text-left">
                            <?= $validation->getError('image_marketplace'); ?>
                        </div>
                    </div>
                    <p class="help-block mt-2">
                        Support : jpg, jpeg, png |
                        Resolution : 720 x 720 px |
                        Max : 1 mb
                    </p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Marketplace</label>
                    <input type="text" name="nama_marketplace" class="form-control <?= ($validation->hasError('nama_marketplace')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="ketikan nama marketplace" required value="<?= esc($id_marketplace['nama_marketplace']) ?>" autocomplete="off">
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('nama_marketplace'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link Marketplace</label>
                    <input type="text" name="link_marketplace" class="form-control <?= ($validation->hasError('link_marketplace')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="ketikan link marketplace" required value="<?= esc($id_marketplace['link_marketplace']) ?>" autocomplete="off">
                    <div class="invalid-feedback form-text">
                        <?= $validation->getError('link_marketplace'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <a href="/Admin/Marketplace" class="btn btn-secondary">Back</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>