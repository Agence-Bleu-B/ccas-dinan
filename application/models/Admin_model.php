<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function isconnect(){

        $adminco = $this->session->userdata('adminco');

        if ($adminco) {
            return true ;
        }
        else{
            return false;
        }
    }
}
