<?php $this->extend('admin_template');?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
          <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Profile', 'breadcrum' => array('Dashboard' => base_url(), 'Profile' => '#')))?>
          <div class="section-body">
            <h2 class="section-title">Hi, <?= view_cell('\App\Widget\ClientTemplate::getEmployeeName')?>!</h2>
            <p class="section-lead">
              Ubah profile Anda di halaman ini
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Identitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Tanggal Lahir</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Telp/HP</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>KTP</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>SIM</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Kartu Keluarga</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Passport</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Alamat</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Nama Jalan</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>RT</label>
                            <input type="text" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>RW</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Kelurahan/Desa</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Kota/Kabupaten</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">                               
                          <div class="form-group col-md-12 col-12">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
<?= $this->endSection() ?>

