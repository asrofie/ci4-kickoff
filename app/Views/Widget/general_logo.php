<div class="login-brand">
    <a href="<?= base_url(); ?>">
    <?php if($type =='image'): ?>
        <img src="<?= base_url() ?>assets/img/logo-siomah-home.jpeg" alt="logo" width="100">
    <?php elseif($type =='text'): ?>
        <img src="<?= base_url() ?>assets/img/logo-siomah-text.jpeg" alt="logo" width="100">
    <?php else: ?>
        <img src="<?= base_url() ?>assets/img/logo-siomah.jpeg" alt="logo" width="100">
    <?php endif; ?>
    </a>
</div>