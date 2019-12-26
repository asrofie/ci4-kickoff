<div class="row">
    <div class="col-12">
        <?php $class='alert alert-' . $type; ?>
        <div class="<?= $class;?> alert-dismissible show fade">
            <?php if($title): ?>
                <div class="alert-title"><?= $title ?></div>
            <?php endif ?>
            <?= $message ?>
        </div>
    </div>
</div>