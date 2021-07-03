<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" style="color: black;">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Ringkasan Brand</h6>
        </div>
        <div class="container mt-3">
            <div class="card-body">
                <div class="container mt-3">
                    <div class="main-body">
                        <div class="col">
                            <p class="mb-0">Nama Pengirim :</p>
                            <h2 style="font-weight: bold; color: black;"><?= esc($id_kontak['username']) ?></h2>
                            <p class="text-justify mt-4 mb-0">Subjek :</p>
                            <p style="font-weight: bold;"><?= esc($id_kontak['subjek']) ?></p>
                            <p class="mt-5 mb-0">Pesan :</p>
                            <p class="text-justify"><?= esc($id_kontak['pesan']) ?></p>
                            <p class="text-justify mt-5 mb-0" style="font-style: italic; font-size: 10px;">Pada Tanggal :</p>
                            <p class="text-justify" style="font-style: italic;"><?= date('l, d F Y', strtotime(esc($id_kontak['date']))) ?></p>
                            <div class="col-sm-12 text-right mt-4">
                                <a class="btn btn-secondary " href="/Admin/Contact">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection() ?>