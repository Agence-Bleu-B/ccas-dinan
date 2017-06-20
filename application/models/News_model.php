<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model
{
    public function new_news(){

    }
    public function delete_news(){

    }
    public function modif_news(){
        # code...
    }
    public function load_news(){

    }
    /********************************************/
    /****** recuperation liste des news *********/
    /********************************************/
    public function get_list($cible,$page){
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
        switch ($cible) {
            case 2:
                # requete publique only
                break;
            case 1:
                # requete perso only
                break;
            case 0:
                # requete all
                $this->db->select();
                $this->db->order_by('date', 'DESC');
                $this->db->limit($limit,$offset);
                $query = $this->db->get('news');
                break;
            default:
                # requete publique only
                break;
        }
        // mise en variable
        $i =0;
        foreach ($query->result_array() as $row)
        {
            $return[$i]['titre'] = $row['titre'];
            $return[$i]['id'] = $row['id'];
            $return[$i]['date'] = $row['date'];
            $return[$i]['couverture'] = $row['couverture'];
            $return[$i]['cible'] = $this->cible($row['cible']);
            $return[$i]['text'] = $row['text'];
            $i++;
        }
        return $return;
    }
    /********************************************/
    /****** fonction comptage des news **********/
    /********************************************/
    public function count_news($cible){
        switch ($cible) {
            case 2:
                $this->db->like('cible', '2');
                $this->db->from('news');
                $count = $this->db->count_all_results();
                break;
            case 1:
                # requete perso only
                $this->db->like('cible', '1');
                $this->db->from('news');
                $count = $this->db->count_all_results();
                break;
            case 0:
                $count = $this->db->count_all('news');
                break;
            default:
                # requete publique only
                $this->db->like('cible', '2');
                $this->db->from('news');
                $count = $this->db->count_all_results();
                break;
        }
        return $count;
    }
    /********************************************/
    /****** fonction calcul cible      **********/
    /********************************************/
    public function cible($number){
        switch ($number) {
            case 1:
                $return = 'personnel';
                break;
            case 2:
                $return = 'publique';
                break;
            
            default:
                $return = 'publique';
                break;
        }
        return $return;
    }
}
