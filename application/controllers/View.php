<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View extends MY_Controller
{
    
    function __construct() {
        parent::__construct();
        
        $this->session->set_flashdata('redirect_url', current_url());
        $this->data['title']='nick';
    }
    
    function index()
    {
        $this->template->load('default', 'index', $this->data);
    }
    
}