<?= $this->extend('base_template'); ?>
<?= $this->section('page_content'); ?>
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <?= view_cell('\App\Widget\General::logo', array('type' => 'full'), 300) ?>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <?= view_cell('\App\Widget\FlashMessage::message')?>
              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/login') ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Email harus diisi
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Password harus diisi
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" value="1" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                        <a href="<?= base_url('auth/forgot') ?>" class="text-small">
                          Lupa Password
                        </a>
                      <div class="float-right">
                        <a href="<?= base_url('auth/register') ?>" class="text-small">
                          Buat Akun
                        </a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <?= view_cell('\App\Widget\General::copyright', null, 300) ?>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>