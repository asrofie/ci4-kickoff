<?= $this->extend('admin_template'); ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
          <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Satuan', 'breadcrum' => array('Dashboard' => base_url(), 'Unit' => base_url('client/setup/unit'), 'Form' => '#')))?>
            <div class="row mt-sm-6">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Satuan Baru</h4>
                            <?= view_cell('\App\Widget\FlashMessage::message')?>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('client/setup/unit/form') ?>" class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Nama satuan</label>
                                            <input id="name" type="text" class="form-control <?= ($validation->hasError('name')?'is-invalid':''); ?>" name="name" tabindex="1" required autofocus>
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('name')):?>
                                                    <?= $validation->getError('name'); ?>
                                                <?php else: ?>
                                                    Nama satuan harus diisi
                                                <?php endif;?>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="password" class="control-label">Deskripsi satuan</label>
                                            <input id="desc" type="text" class="form-control" name="desc" tabindex="2">
                                            <div class="invalid-feedback">
                                                Deskripsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 col-md-2 col-lg-1">
                                        <button type="submit" name="submit" value="1" class="btn btn-primary" tabindex="3">
                                            Simpan
                                        </button>
                                    </div>
                                    <div class="col-3 col-md-3 col-lg-3">
                                        <button type="submit" name="submit" value="2" class="btn btn-primary" tabindex="4">
                                            Simpan dan Tambahkan lagi
                                        </button>
                                    </div>
                                    <div class="col-2 col-md-2 col-lg-2 text-right">
                                        <a href="<?= base_url('client/setup/unit') ?>" class="btn btn-default">
                                            Kembali
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection(); ?>