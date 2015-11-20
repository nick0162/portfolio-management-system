<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Protection
{
    protected static  $hash = 'NickKoen0162';
    
    static function is_logged_in($set_redirect = true, $root = false){
        
        $varName = ($root === true) ? 'is_root_logged_in' : 'is_logged_in';

        //get main CodeIgniter object
        $ci =& get_instance();
        
        if($ci->session->userdata($varName) === null)
        {
            if($set_redirect)
            {
                $ci->session->set_flashdata('redirect', uri_string());
            }
            return false;
        }
        return true;
    }
    
    static function auth($username, $password, $root = false)
    {
        $ci =& get_instance();
        
        $query = $ci->db->select('*')->from('manager_users')->where('username', $username)->where('password', self::hash($password))->get();
        
        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
        
        return false;
    }
    
    static function hash($string)
    {
        return sha1($string.self::$hash);
    }
}