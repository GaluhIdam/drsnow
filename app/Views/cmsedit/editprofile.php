<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Profil / Informasi</h6>
        </div>
        <form action="/Admin/updateProfile/<?= esc($id_web['id_web']) ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_web" value="<?= $id_web['id_web']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $id_web['logo_brand']; ?>">
            <div class="card-body">
                <div class="container">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="/assets/img/<?= esc($id_web['logo_brand']) ?>" width="200px;" class="img-thumbnail img-preview">
                                            <div class="form-group">
                                                <div class="btn btn-default btn-file">
                                                    <i class="fas fa-paperclip"></i><?= esc($id_web['logo_brand']) ?>
                                                    <input type="file" id="logo_brand" name="logo_brand" class="form-control <?= ($validation->hasError('logo_brand')) ? 'is-invalid' : ''; ?>" onchange=" previewImgL()" value="<?= esc($id_web['logo_brand']) ?>">
                                                    <div class=" invalid-feedback form-text">
                                                        <?= $validation->getError('logo_brand'); ?>
                                                    </div>
                                                </div>
                                                <p class="help-block mt-2">
                                                    Support : jpg, jpeg, png |
                                                    Resolution : 1000 x 1000 px |
                                                    Max : 1 mb
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                                </svg>Website</h6>
                                            <input class="form-control <?= ($validation->hasError('website')) ? 'is-invalid' : ''; ?>" type="text" name="website" id="" value="<?= esc($id_web['website']); ?>">
                                            <div class=" invalid-feedback form-text">
                                                <?= $validation->getError('website'); ?>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                </svg>Twitter</h6>
                                            <input class="form-control <?= ($validation->hasError('twitter')) ? 'is-invalid' : ''; ?>" type="text" name="twitter" value="<?= esc($id_web['twitter']); ?>">
                                            <div class=" invalid-feedback form-text">
                                                <?= $validation->getError('twitter'); ?>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>Instagram</h6>
                                            <input class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" type="text" name="instagram" value="<?= esc($id_web['instagram']); ?>">
                                            <div class=" invalid-feedback form-text">
                                                <?= $validation->getError('instagram'); ?>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>Facebook</h6>
                                            <input class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : ''; ?>" type="text" name="facebook" value="<?= esc($id_web['facebook']); ?>">
                                            <div class=" invalid-feedback form-text">
                                                <?= $validation->getError('facebook'); ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama Brand</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control <?= ($validation->hasError('nama_brand')) ? 'is-invalid' : ''; ?>" name="nama_brand" value="<?= esc($id_web['nama_brand']) ?>" autofocus>
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('nama_brand'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= esc($id_web['email']) ?>" name="email">
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">No. Telepon</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="number" class="form-control <?= ($validation->hasError('notelp')) ? 'is-invalid' : ''; ?>" value="<?= esc($id_web['notelp']) ?>" name="notelp">
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('notelp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Whatsapp</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="number" class="form-control <?= ($validation->hasError('whatsapp')) ? 'is-invalid' : ''; ?>" value="<?= esc($id_web['whatsapp']) ?>" name="whatsapp">
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('whatsapp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea name="alamat" rows="5" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"><?= esc($id_web['alamat']) ?></textarea>
                                                <div class=" invalid-feedback form-text">
                                                    <?= $validation->getError('alamat'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4 text-right">
                                    <a class="btn btn-secondary" href="/Admin/Profile">Back</a>
                                    <button class="btn btn-info" type="submit">Update</button>
                                </div>
                            </div>
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