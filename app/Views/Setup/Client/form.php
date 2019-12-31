<?= $this->extend('admin_template'); ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
          <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Client', 'breadcrum' => array('Dashboard' => base_url(), 'Client' => base_url('client/setup/client'), 'Form' => '#')))?>
            <?= view_cell('\App\Widget\FlashMessage::message')?>
            <div class="row mt-sm-6">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Client Baru</h4>
                            <div class="card-header-action">
                                <a href="<?= base_url('client/setup/client') ?>" class="btn btn-default">
                                    <span><i class='fa fa-arrow-left'></i></span> Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('client/setup/client/form/') . $id ?>" class="needs-validation" novalidate="">
                                <?php if(isset($id)): ?>
                                    <input type="hidden" name="id" value="<?= $id ?>" />
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Nama Perusahaan</label>
                                            <input id="name" type="text" class="form-control <?= ($validation->hasError('name')?'is-invalid':''); ?>" name="name" tabindex="1" required autofocus value="<?= set_value('name', $data->name)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('name')):?>
                                                    <?= $validation->getError('name'); ?>
                                                <?php else: ?>
                                                    Nama Perusahaan
                                                <?php endif;?>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label>
                                            <input id="email" type="email" class="form-control"  <?= ($validation->hasError('email')?'is-invalid':''); ?>"  name="email" tabindex="2" value="<?= set_value('email', $data->email)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('email')):?>
                                                    <?= $validation->getError('email'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="password" class="control-label">Password</label>
                                            <input id="password" type="password" class="form-control"  <?= ($validation->hasError('password')?'is-invalid':''); ?>"  name="password" tabindex="2" value="<?= set_value('password', $data->password)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('password')):?>
                                                    <?= $validation->getError('password'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="password_confirm" class="control-label">Password Konfirmasi</label>
                                            <input id="password_confirm" type="password" class="form-control"  <?= ($validation->hasError('password')?'is-invalid':''); ?>"  name="password_confirm" tabindex="2" value="">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="client_type" class="control-label">Tipe</label>
                                            <select id="client_type" type="text" class="form-control"  <?= ($validation->hasError('client_type')?'is-invalid':''); ?>"  name="client_type" tabindex="2">
                                                    <?php foreach($clientType as $type => $name): ?>
                                                        <option value="<?= $type ?>"><?= $name; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('client_type')):?>
                                                    <?= $validation->getError('client_type'); ?>
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