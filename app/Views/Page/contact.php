<?= $this->extend('template/template') ?>

<?= $this->section('content') ?>

<div class="container mx-auto" style="margin-top: 90px;">

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
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        <div class="col-md-6 mt-5 mb-5">
            <div class="col mx-auto shadow" style="padding: 40px;">
                <h5 class="mb-4 text-center">Enquiry Form</h5>
                <form action="/Contact/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" name="username" autocomplete="off" style="border-radius: 50px;" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="Please insert username..." value="<?= old('username') ?>" autofocus>
                        <div class="invalid-feedback form-text">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Subjek</label>
                        <input type="text" name="subjek" autocomplete="off" style="border-radius: 50px;" class="form-control <?= ($validation->hasError('subjek')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="Please insert subjek..." value="<?= old('subjek') ?>">
                        <div class="invalid-feedback form-text">
                            <?= $validation->getError('subjek'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" autocomplete="off" style="border-radius: 50px;" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="Please insert email name@example.com..." value="<?= old('email') ?>">
                        <div class="invalid-feedback form-text">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea autocomplete="off" style="border-radius: 10px;" class="form-control <?= ($validation->hasError('pesan')) ? 'is-invalid' : ''; ?>" name="pesan" id="exampleFormControlTextarea1" rows="4" placeholder="Please insert message..." value="<?= old('pesan') ?>"></textarea>
                        <div class=" invalid-feedback form-text">
                            <?= $validation->getError('pesan'); ?>
                        </div>
                    </div>
                    <div class="col mx-auto text-center mt-4">
                        <button type="submit" class="btn btn-primary rounded-pill shadow-sm" style="padding-left: 15px; padding-right: 15px;"><i class="fas fa-paper-plane"></i> Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col text-center" style="padding: 20px;">
                <h5 class="mb-4">Our Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63450.187744766336!2d106.7324636!3d-6.3113615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef10f9cdb2cb%3A0x6aeb239220d2362f!2sKantor%20PT.Siap%20Kirim%20Indonesia!5e0!3m2!1sen!2sid!4v1624511335718!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<section class="shop-newsletter section mt-5">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner text-center">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <div class="row">
                                <input name="EMAIL" class="form-control text-center" placeholder="Your email address" required="" type="email" style="border-radius:50px;">
                            </div>
                            <div class="col mt-3">
                                <button class="btn btn-danger rounded-pill" style="padding-left: 20px; padding-right: 20px;"><i class="fas fa-envelope"></i> Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>