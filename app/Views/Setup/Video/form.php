<?= $this->extend('admin_template'); ?>

<?= $this->section('page_content_body') ?>
    <div class="main-content">
        <section class="section">
          <?= view_cell('\App\Widget\ClientTemplate::pageHeader', array('title' => 'Video', 'breadcrum' => array('Dashboard' => base_url(), 'Video' => base_url('client/setup/video'), 'Form' => '#')))?>
            <?= view_cell('\App\Widget\FlashMessage::message')?>
            <div class="row mt-sm-6">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Video Baru</h4>
                            <div class="card-header-action">
                                <a href="<?= base_url('client/setup/video') ?>" class="btn btn-default">
                                    <span><i class='fa fa-arrow-left'></i></span> Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('client/setup/video/form/') . $id ?>" class="needs-validation" novalidate="">
                                <?php if(isset($id)): ?>
                                    <input type="hidden" name="category_id" value="<?= $id ?>" />
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Judul</label>
                                            <input id="name" type="text" class="form-control <?= ($validation->hasError('name')?'is-invalid':''); ?>" name="name" tabindex="1" required autofocus value="<?= set_value('name', $data->name)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('name')):?>
                                                    <?= $validation->getError('name'); ?>
                                                <?php else: ?>
                                                    Judul harus diisi
                                                <?php endif;?>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="desc" class="control-label">Deskripsi Video</label>
                                            <input id="desc" type="text" class="form-control"  <?= ($validation->hasError('desc')?'is-invalid':''); ?>"  name="desc" tabindex="2" value="<?= set_value('desc', $data->desc)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('desc')):?>
                                                    <?= $validation->getError('desc'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="link" class="control-label">Link</label>
                                            <input id="link" type="text" class="form-control"  <?= ($validation->hasError('link')?'is-invalid':''); ?>"  name="link" tabindex="2" value="<?= set_value('link', $data->link)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('link')):?>
                                                    <?= $validation->getError('link'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="author" class="control-label">Pemilik</label>
                                            <input id="author" type="text" class="form-control"  <?= ($validation->hasError('author')?'is-invalid':''); ?>"  name="author" tabindex="2" value="<?= set_value('author', $data->author)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('author')):?>
                                                    <?= $validation->getError('author'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="tag" class="control-label">Tag</label>
                                            <input id="tag" type="text" class="form-control"  <?= ($validation->hasError('tag')?'is-invalid':''); ?>"  name="tag" tabindex="2" value="<?= set_value('tag', $data->tag)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('tag')):?>
                                                    <?= $validation->getError('tag'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="category_id" class="control-label">Kategori</label>
                                            <select id="category_id" type="text" class="form-control"  <?= ($validation->hasError('category_id')?'is-invalid':''); ?>"  name="category_id" tabindex="2">
                                                    <?php foreach($categories as $category): ?>
                                                        <option value="<?= $category->category_id ?>"><?= $category->name; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('category_id')):?>
                                                    <?= $validation->getError('category_id'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="channel" class="control-label">Channel</label>
                                            <input id="channel" type="text" class="form-control"  <?= ($validation->hasError('channel')?'is-invalid':''); ?>"  name="channel" tabindex="2" value="<?= set_value('channel', $data->channel)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('channel')):?>
                                                    <?= $validation->getError('channel'); ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="channel_link" class="control-label">Channel Link</label>
                                            <input id="channel_link" type="text" class="form-control"  <?= ($validation->hasError('channel_link')?'is-invalid':''); ?>"  name="channel_link" tabindex="2" value="<?= set_value('channel_link', $data->channel_link)?>">
                                            <div class="invalid-feedback">
                                                <?php if($validation->hasError('channel_link')):?>
                                                    <?= $validation->getError('channel_link'); ?>
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