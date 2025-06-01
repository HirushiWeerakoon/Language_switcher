<?php 
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
?>