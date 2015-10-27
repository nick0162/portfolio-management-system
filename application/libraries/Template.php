<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        var $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }
        
        function load($details, $view = 'index', $data = array()) 
        {
            $tpl = explode('.', $details);
            if(!is_dir(APPPATH.'views/templates/'.$tpl[0])){
                echo 'Template does not exists';exit;
            }
            
            if(!file_exists(APPPATH.'views/templates/'.$tpl[0].'/pages/'.$view.'.php')){
                echo 'View does not exist';exit;
            }
            $data['data']=$data;
            $data['view']=$view;
            $data['template']=$tpl[0];
            
            $this->ci->load->view((isset($tpl[1])) ? 'templates/'.$tpl[0].'/'.$tpl[1] : 'templates/'.$tpl[0].'/skeleton', $data);
        }
    }