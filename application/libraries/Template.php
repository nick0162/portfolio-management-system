<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        var $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }
        
        function load($tpl, $view = 'index', $data = array()) 
        {
            if(!is_dir(APPPATH.'views/templates/'.$tpl)){
                echo 'Template does not exists';exit;
            }
            
            if(!file_exists(APPPATH.'views/templates/'.$tpl.'/pages/'.$view.'.php')){
                echo 'View does not exist';exit;
            }
            $data['data']=$data;
            $data['view']=$view;
            $data['template']=$tpl;
            
            $this->ci->load->view('templates/'.$tpl.'/skeleton', $data);
        }
    }