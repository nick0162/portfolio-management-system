<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Manage extends MY_Controller
{
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        if(!Protection::is_logged_in())
        {
            redirect(MANAGER_LOGIN_URL);
        }
        
        $this->data['title'] = 'PMS management';
        
        $this->template->load('manager.skeleton', 'index', $this->data);
    }
    
    function login()
    {
        if(Protection::is_logged_in(false))
        {
            redirect('admin/manage/');
        }
        
        $this->data['title'] = 'PMS manager login';
        
        $this->template->load('manager.login', null, $this->data);
    }
    
    function checkLogin()
    {
        $error = lang("ERR_NO_INPUT");
        
        if($this->input->get('username') !== null && $this->input->get('password') !== null)
        {
            if($user = Protection::auth($this->input->get('username'), $this->input->get('password')))
            {
                echo json_encode(array('error' => 0));exit;
            }
            
            $error = lang("ERR_BAD_LOGIN");
        }
        
        echo json_encode(array('error' => 1, 'message' => $error));
    }
}