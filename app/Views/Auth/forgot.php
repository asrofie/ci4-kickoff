<?= $this->extend('base_template'); ?>
<?= $this->section('page_content'); ?>
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <?= view_cell('\App\Widget\General::logo', array('type' => 'full'), 300) ?>
            <div class="card card-primary">
              <div class="card-header"><h4>Lupa Password</h4></div>

              <div class="card-body">
                <p class="text-muted">Sistem akan mengirimkan link untuk melakukan reset password</p>
                <form method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Submit
                    </button>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                        <a href="<?= base_url('auth/login') ?>" class="text-small">
                          Kembali ke login
                        </a>
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