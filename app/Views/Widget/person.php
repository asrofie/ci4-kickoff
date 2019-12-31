<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
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
            <label for="ktp">KTP</label>
            <input id="ktp" type="text" class="form-control <?= ($validation->hasError('ktp')?'is-invalid':''); ?>" ktp="ktp" tabindex="1" required autofocus value="<?= set_value('ktp', $data->ktp)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('ktp')):?>
                    <?= $validation->getError('ktp'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="sim">SIM</label>
            <input id="sim" type="text" class="form-control <?= ($validation->hasError('sim')?'is-invalid':''); ?>" sim="sim" tabindex="1" required autofocus value="<?= set_value('sim', $data->sim)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('sim')):?>
                    <?= $validation->getError('sim'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="kk">KK</label>
            <input id="kk" type="text" class="form-control <?= ($validation->hasError('kk')?'is-invalid':''); ?>" kk="kk" tabindex="1" required autofocus value="<?= set_value('kk', $data->kk)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('kk')):?>
                    <?= $validation->getError('kk'); ?>
                <?php else: ?>
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="phone">Telepon/HP</label>
            <input id="phone" type="text" class="form-control <?= ($validation->hasError('phone')?'is-invalid':''); ?>" phone="phone" tabindex="1" required autofocus value="<?= set_value('phone', $data->phone)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('phone')):?>
                    <?= $validation->getError('phone'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="passport">Passport</label>
            <input id="passport" type="text" class="form-control <?= ($validation->hasError('passport')?'is-invalid':''); ?>" passport="passport" tabindex="1" required autofocus value="<?= set_value('passport', $data->passport)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('passport')):?>
                    <?= $validation->getError('passport'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="nation">Kewarganegaraan</label>
            <input id="nation" type="text" class="form-control <?= ($validation->hasError('nation')?'is-invalid':''); ?>" nation="nation" tabindex="1" required autofocus value="<?= set_value('nation', $data->nation)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('nation')):?>
                    <?= $validation->getError('nation'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="birth_place">Tempat Lahir</label>
            <input id="birth_place" type="text" class="form-control <?= ($validation->hasError('birth_place')?'is-invalid':''); ?>" birth_place="birth_place" tabindex="1" required autofocus value="<?= set_value('birth_place', $data->birth_place)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('birth_place')):?>
                    <?= $validation->getError('birth_place'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="col-4 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="birth_date">Tanggal Lahir</label>
            <input id="birth_date" type="text" class="form-control <?= ($validation->hasError('birth_date')?'is-invalid':''); ?>" birth_date="birth_date" tabindex="1" required autofocus value="<?= set_value('birth_date', $data->birth_date)?>">
            <div class="invalid-feedback">
                <?php if($validation->hasError('birth_date')):?>
                    <?= $validation->getError('birth_date'); ?>
                <?php else: ?>
                    
                <?php endif;?>
            </div>
        </div>
    </div>
</div>