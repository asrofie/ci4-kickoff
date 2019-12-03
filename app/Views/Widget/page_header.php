<div class="section-header">
<h1><?= $page_title ?></h1>
<div class="section-header-breadcrumb">
    <?php foreach($breadcrum as $page => $url):?>
    <?php 
        if($url == '#') :?>
            <div class="breadcrumb-item active "><?= $page ?></div>
        <?php else: ?>
            <div class="breadcrumb-item"><a href="<?= $url; ?>"><?= $page ?></a></div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</div>