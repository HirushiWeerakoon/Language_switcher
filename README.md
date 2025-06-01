# Language_switcher
A responsive language switcher built with Codeigniter, enabling users to toggle between multiple languages on a website. Ideal for multilingual website, this component uses HTML, PHP, Bootstrap.

Go to the applcation / autoload and open autoload.php file
$autoload['libraries'] = array('session');

Go to the application / confige and open config.php
$config['language']	= 'English';
and
$config['enable_hooks'] = TRUE;

Open the applcation / views and added language switch dropdown 
  <li class="nav-item navbar-light dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$this->lang->line('language_title')?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>lan_switch/English">English</a>
                        <a class="dropdown-item" href="<?=base_url()?>lan_switch/Sinhala">සිංහල</a>
                        
   </li>

open the application / routes 
$route['lan_switch/(:any)'] = 'Language_switcher/switcher/$1';

open the application / controllers and create a controller as Language_switcher.php and add

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_switcher extends CI_Controller {
    public function __construct() {
       parent::__construct();
   }

public function switcher($language)
{
    
        $this->session->set_userdata('language', $language);
        redirect($_SERVER['HTTP_REFERER']);
}  
}
open  the confige / hooks
$hook['post_controller_constructor'] = array(
        'class' => 'Language_hooks',
        'function' => 'lang_loader',
        'filename' => 'Language_hooks.php',
        'filepath' => 'hooks'
);

open the application / hooks and create a file as Language_hooks

class Language_hooks{

    function lang_loader(){
        $ci =& get_instance();
        $ci->load->helper('language');
        $language = $ci->session->userdata('language');
        if($language){
            $ci->lang->load('information', $language);
        }else{
            $ci->lang->load('information', 'English');
        }
    }
}

