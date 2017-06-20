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
    public function get_list($cible,$page){
        switch ($cible) {
            case 2:
                # requete publique only
                break;
            case 1:
                # requete perso only
                break;
            case 0:
                # requete all
                break;
            default:
                # requete publique only
                break;
        }
    }
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
}
