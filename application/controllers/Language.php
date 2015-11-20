<?php

class Language extends MY_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function change($lang)
    {
        $this->sessions->set_userdata('lang', $lang);
        
        if($this->session->flashdata('redirect') !== null)
        {
            redirect($this->session->flashdata('redirect'));
        }
        
        redirect('view/');
    }
}