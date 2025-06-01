
        <div class="row">
            <div class="col-md-12 pd-0">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="slider-img" src="<?=base_url()?>public/img/la.jpg" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                        <img class="slider-img" src="<?=base_url()?>public/img/chicago.jpg" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                        <img class="slider-img" src="<?=base_url()?>public/img/ny.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                    </div>
            </div>
        </div>
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
 

