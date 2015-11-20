<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('lang')){
   function lang($line=''){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       $lang='english';
       if($ci->session->userdata('lang') !== null)
       {
           $lang=$ci->session->userdata('lang');
       }
       
       $ci->lang->load('general', $lang);
       
       return $ci->lang->line($line);
   }
}