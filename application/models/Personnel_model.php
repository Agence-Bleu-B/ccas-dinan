<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Personnel_model extends CI_Model
{
    //verification de session
    public function isconnect(){

        $personnelco = $this->session->userdata('personnelco');

        if ($personnelco) {
            return true ;
        }
        else{
            return false;
        }
    }
    //connection et mise en session
    public function connection($login,$mdp){

        if ($login == "personnelccas" && $mdp == "ccas2017PERSONNEL") {
            $this->session->personnelco = true;
        }

    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('personnelco');
    }
}
