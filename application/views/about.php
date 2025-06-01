<?php $this->load->view('inc/header'); ?>
        
        <div class="row">
            <div class="col-md-12 home-pg-header">
                <h1><?=$this->lang->line('welcome')?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="home-img" src="<?=base_url()?>public/img/stitch.jpg" alt="stitch">
            </div>
            <div class="col-md-6">
                <p class="home-pg-text"> 
                    <?=$this->lang->line('about_para')?>
                </p>
            </div>
        </div>
        <div class="row pd-0 home-title">
            <div class="col-md-3 col-xs-12 home-title">
                <div class="home-title-a">
                    <i class="fa-solid fa-teddy-bear"></i>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 home-title">

            </div>
            <div class="col-md-3 col-xs-12 home-title">

            </div>

        </div>

    </div>
    <?php $this->load->view('inc/footer'); ?>


