<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Root extends MY_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['title'] = 'PMS solutions Root';
        
        $this->template->load('root.skeleton', 'index', $this->data);
    }
}