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
    /********************************************/
    /****** effacement d'un employé     *********/
    /********************************************/
    public function delete_pers($id){
        //delete from news
        $this->db->where('id', $id);
        $this->db->delete('personnel');
        //verification si fichier
        return "l'entrée à été supprimée" ;
    }
    public function get_list($page){
        //init return
        $return = array();
        //calcul offset bdd
        if ($page != null) {
            $limit = $page;
            $offset= $page;
        }
        else{
            $offset = 0;
            $page = 0;
            $limit = 10;
        }
        
        # requete
        $this->db->select();
        $this->db->order_by('nom', 'DESC');
        $this->db->limit($limit,$offset);
        $query = $this->db->get('personnel');
        // mise en variable
        $i =0;
        foreach ($query->result_array() as $row)
        {
            $return[$i]['nom'] = $row['nom'];
            $return[$i]['id'] = $row['id'];
            $return[$i]['prenom'] = $row['prenom'];
            $return[$i]['statut'] = $row['statut'];
            $return[$i]['email'] = $row['email'];
            $return[$i]['tel1'] = $row['tel1'];
            $return[$i]['tel2'] = $row['tel2'];
            $i++;
        }
        return $return;
    }
    /********************************************/
    /****** fonction comptage des entrées *******/
    /********************************************/
    public function count_perso(){
        $this->db->from('personnel');
        $count = $this->db->count_all_results();
        return $count;
    }
    /********************************************/
    /****** création d'une entrée       *********/
    /********************************************/
    public function new_personnel($post){
        $array = array();
        foreach ($post as $key => $value) {
            if ($key !== 'create') {
                $array[$key] = $value;
            }
        }
        $this->db->insert('personnel', $array);
        return 'entrée ajoutée'; 
    }
}
