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