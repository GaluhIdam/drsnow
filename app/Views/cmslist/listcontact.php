<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-black">Kotak Masuk</h6>
                </div>
                <div class="col d-flex">
                    <input type="text" class="form-control" placeholder="Masukan data yang ingin dicari...">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search d-flex"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('tambah')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <h5><i class="icon fas fa-check"></i> Success</h5>
                    <?= session()->getFlashdata('tambah'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('update')) : ?>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <h5><i class="icon fas fa-check"></i> Updated</h5>
                    <?= session()->getFlashdata('update'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('delete')) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <h5><i class="icon fas fa-check"></i> Deleted</h5>
                    <?= session()->getFlashdata('delete'); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Pengirim</th>
                            <th>Subjek</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($id_kontak as $row) : ?>
                            <tr>
                                <td><?= esc($row['username']) ?></td>
                                <td><?= esc($row['subjek']) ?></td>
                                <td><?= esc($row['date']) ?></td>
                                <td class="text-center">
                                    <a href="/Admin/viewContact/<?= esc($row['id_kontak']) ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i> View</a>
                                    <a href="/Admin/deleteContact/<?= esc($row['id_kontak']); ?>">
                                        <button onclick="return confirm('Apakah anda yakin menghapus data kontak ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>