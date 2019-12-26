<?= $this->extend('admin_template'); ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
          <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Satuan', 'breadcrum' => array('Dashboard' => base_url(), 'Unit' => base_url('client/setup/unit'), 'Form' => '#')))?>
            <?= view_cell('\App\Widget\FlashMessage::message')?>
            <div class="row mt-sm-6">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Satuan Baru</h4>
                            <div class="card-header-action">
                                <a href="<?= base_url('client/setup/unit') ?>" class="btn btn-default">
                                    <span><i class='fa fa-arrow-left'></i></span> Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('client/setup/unit/form') ?>" class="needs-validation" novalidate="">
                                <?php if(isset($id)): ?>
                                    <input type="hidden" name="unit_id" value="<?= $id ?>" />
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Nama satuan</label>
                                            <input id="name" type="text" class="form-control <?= ($validation->hasError('name')?'is-invalid':''); ?>" name="name" tabindex="1" required autofocus value="<?= set_value('name', $data->name)?>">
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
                                            <label for="desc" class="control-label">Deskripsi satuan</label>
                                            <input id="desc" type="text" class="form-control"  <?= ($validation->hasError('desc')?'is-invalid':''); ?>"  name="desc" tabindex="2" value="<?= set_value('desc', $data->desc)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('desc')):?>
                                                    <?= $validation->getError('desc'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row empty-state" data-height="100">
                                    <div class="col-12 col-md-12 col-lg-12 mt-4">
                                        <button type="submit" name="submit" value="1" class="btn btn-primary" tabindex="3">
                                            Simpan
                                        </button>
                                        <button type="submit" name="submit" value="2" class="btn btn-primary" tabindex="4">
                                            Simpan dan Tambahkan lagi
                                        </button>
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