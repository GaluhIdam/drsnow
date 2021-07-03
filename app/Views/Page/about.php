<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 100px;">
    <h4 class="text-center mb-5" style="font-weight: bold;">About Us</h4>
    <div class="row">
        <?php if (!empty($id_ringkasan) && is_array($id_ringkasan)) : ?>
            <?php foreach ($id_ringkasan as $row) : ?>
                <div class="col-md-6 mb-5">
                    <img src="/assets/img/<?= esc($row['img_ringkasan']) ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-6 mb-5">

                    <h1><?= esc($row['judul']) ?></h1>
                    <p style="text-align: justify;"><?= esc($row['isi']) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Data belum tersedia</p>
        <?php endif ?>
    </div>
</div>

<div class="container mb-5" style="margin-top: 50px;">
    <h4 class="text-center" style="font-weight: bold;">FAQ</h4>
    <p class="text-center">Frequently Asked Questions</p>
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start" style="border-width: 0px; background-color: #fcfcfc">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id iusto obcaecati impedit, ad earum quae perspiciatis rerum in animi fugiat. Nam, velit quaerat! Corporis ipsa est expedita deleniti dolores?</p>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start" style="border-width: 0px; background-color: #fcfcfc">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id iusto obcaecati impedit, ad earum quae perspiciatis rerum in animi fugiat. Nam, velit quaerat! Corporis ipsa est expedita deleniti dolores?</p>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start" style="border-width: 0px; background-color: #fcfcfc">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id iusto obcaecati impedit, ad earum quae perspiciatis rerum in animi fugiat. Nam, velit quaerat! Corporis ipsa est expedita deleniti dolores?</p>
            </div>
        </li>
    </ol>
</div>
<?= $this->endSection() ?>