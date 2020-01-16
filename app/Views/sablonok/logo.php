<div class="container pt-4  bg-info">
    <div class="shadow d-print-none row bg-dark text-light p-2">
        <div class="col-sm-2">
            <a href="<?php echo base_url(); ?>">
                <img width="91" height="79" id="thtlogo" alt="thtlog19"
                     src="<?php echo base_url('images/tht_logo.svg'); ?>">
            </a>
        </div>
        <div class="col-sm-10">
            <h4>
                <?= lang("Logo.logoCim", [], $nyelv); ?>
            </h4>
        </div>
    </div>
    <div class="row d-print-none">
        <ul class="nav">
            <li class="nav-item">
                <a class="btn nav-link p-0" id="hungarian" href="<?php echo base_url(); ?>/langsw/swl/hu"><img
                            alt="hunflag" width="32" height="16" src="<?php echo base_url('images/hun.png') ?>"></a>
            </li>
            <li class="nav-item">
                <a class="btn nav-link p-0" id="english" href="<?php echo base_url(); ?>/langsw/swl/en"><img
                            alt="enusflag" width="32" height="16" src="<?php echo base_url('images/ukusa.jpg') ?>"></a>
            </li>
            <li class="nav-item">
                <a class="btn nav-link p-0" id="deutsch" href="<?php echo base_url(); ?>/langsw/swl/de"><img
                            alt="germanyflag" width="32" height="16" src="<?php echo base_url('images/germany.png') ?>"></a>
            </li>
            <li class="nav-item">
                <a class="btn nav-link p-0" id="arabic" href="<?php echo base_url(); ?>/langsw/swl/ar"><img
                            alt="arabicflag" width="32" height="16"
                            src="<?php echo base_url('images/arabic.png') ?>"></a>
            </li>
        </ul>
    </div>
    <div class="row p-3">
        <div class="col-sm-12 text-center text-light">
            <h3 class="text-light">
                <?= $cim; ?>
            </h3>
        </div>
    </div>
    <?php echo $menu; ?>
