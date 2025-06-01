<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-pYgX+4DQMXKEMts9eY1E9r8ME2AHk8yP4XtTog3u58u7O2iGVKzQCBRSlAjV7oWW9cPqX0EZf2ZbyOYjY0HfVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title><?=$this->lang->line('page_title')?></title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 navi-bar-div">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
            <!-- <a class="navbar-brand" href="#">Pet</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url()?>"><?=$this->lang->line('home')?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>about-us"><?=$this->lang->line('about_us')?></a>
                    </li>
                    
                    <li class="nav-item navbar-light dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$this->lang->line('language_title')?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>lan_switch/English">English</a>
                        <a class="dropdown-item" href="<?=base_url()?>lan_switch/Sinhala">සිංහල</a>
                        
                    </li>
                    </ul>
                    
                </div>
                </nav>
            </div>
        </div>