<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-black">Produk / Marketplace</h6>
                </div>
                <div class="col text-right">
                    <a href="/Admin/createMarketplace" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Marketplace</a>
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
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Icon Marketplace</th>
                            <th>Nama Marketplace</th>
                            <th>Link Marketplace</th>
                            <th>Terdaftar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($id_marketplace as $row) : ?>
                            <tr>
                                <td><?= $i++; ?>.</td>
                                <td><img src="/assets/img/marketplace/<?= esc($row['image_marketplace']) ?>" class="img-fluid" alt="image" width="100px"></td>
                                <td><?= esc($row['nama_marketplace']) ?></td>
                                <td><?= esc($row['link_marketplace']) ?></td>
                                <td><?= date('l, d F Y | H:i:s', strtotime(esc($row['created_at']))) ?></td>
                                <td class="text-center">
                                    <a href="/Admin/editMarketplace/<?= esc($row['id_marketplace'], 'url') ?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Edit</a>
                                    <a href="/Admin/deleteMarketplace/<?= esc($row['id_marketplace']); ?>">
                                        <button onclick="return confirm('Apakah anda yakin menghapus data marketplace ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
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

<!-- Vertically centered modal -->
<?= $this->endSection(); ?>