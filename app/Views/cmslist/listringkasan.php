<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Profil / Ringkasan</h6>
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
        <?php if (!empty($id_ringkasan) && is_array($id_ringkasan)) : ?>
            <?php foreach ($id_ringkasan as $row) : ?>
                <div class="card-body">
                    <div class="container mt-3">
                        <div class="main-body">
                            <div class="row">
                                <div class="col">
                                    <img src="/assets/img/<?= esc($row['img_ringkasan']) ?>" class="img-fluid" alt="">
                                    <p class="text-justify mt-5" style="font-style: italic;">Terakhir diubah :</p>
                                    <p class="text-justify" style="font-style: italic;"><?= date('l, d F Y', strtotime(esc($row['date']))) ?></p>
                                </div>
                                <div class="col">
                                    <h2 style="font-weight: bold; color: black;"><?= esc($row['judul']) ?></h2>
                                    <p class="text-justify"><?= esc($row['isi']) ?></p>
                                </div>
                            </div>
                            <div class="col-sm-12 text-right mt-4">
                                <a class="btn btn-secondary " href="/Admin">Back</a>
                                <a class="btn btn-primary" href="/Admin/editRingkasan/<?= esc($row['id_ringkasan'], 'url') ?>">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>

            <td>
                <p>Data belum tersedia</p>
            </td>
            </tr>
        <?php endif ?>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection() ?>