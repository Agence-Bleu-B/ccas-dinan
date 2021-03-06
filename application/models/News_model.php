<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model
{
    /********************************************/
    /****** création d'une news         *********/
    /********************************************/
    public function new_news($post){
        $array = array();
        foreach ($post as $key => $value){
            $$key = $value;
        }
        $array['cible'] = $cible;
        $array['date'] = time();
        //verifications

        if (!isset($titre)|| $titre == "") {
            $array['titre'] = 'actualité du '.date('d/m/Y',time());
        }
        else{
            $array['titre'] = $titre;
        }
        if (!isset($couverture)|| $couverture == "") {
            $array['couverture'] = 'elements/newsbanner.png';
        }
        else{
            //decoupage couverture
            $exp = explode('images/', $couverture);
            $array['couverture'] = $exp[1];
        }
        if (!isset($text)) {
            $array['text'] = ' ';
        }
        else {
            $array['text'] = $text;
        }
        return $this->db->insert('news', $array);
        
    }
    /********************************************/
    /****** effacement d'une news       *********/
    /********************************************/
    public function delete_news($id){
        //delete from news
        $this->db->where('id', $id);
        $this->db->delete('news');
        //verification si fichier
        return "l'actualité à été supprimée" ;
    }
    /********************************************/
    /****** modification d'une news     *********/
    /********************************************/
    public function modif_news($post,$id){
        $array = array();
        foreach ($post as $key => $value){
            $$key = $value;
        }
        $array['cible'] = $cible;
        $array['date'] = time();
        //verifications

        if (!isset($titre)|| $titre == "") {
            $array['titre'] = 'actualité du '.date('d/m/Y',time());
        }
        else{
            $array['titre'] = $titre;
        }
        if (!isset($couverture)|| $couverture == "") {
            $array['couverture'] = 'elements/newsbanner.png';
        }
        else{
            $finder = stripos($couverture, 'images/');
            //decoupage couverture si besoin
            if ($finder) {
                $exp = explode('images/', $couverture);
                $array['couverture'] = $exp[1];
            }
            else{
                $array['couverture'] = $couverture;
            }
            
        }
        if (!isset($text)) {
            $array['text'] = ' ';
        }
        else {
            $array['text'] = $text;
        }
        $this->db->where('id',$id);
        return $this->db->update('news', $array);
    }
    /********************************************/
    /****** chargement d'une news (detail) ******/
    /********************************************/
    public function load_news($id){
        $this->db->select("*");
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        $result = $query->result_array();
        return $result[0];
    }
    /********************************************/
    /****** recuperation liste des news *********/
    /********************************************/
    public function get_list($cible,$page){
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
        switch ($cible) {
            case 2:
                # requete publique only
                $this->db->select();
                $this->db->where('cible', 2);
                $this->db->order_by('date', 'DESC');
                $this->db->limit($limit,$offset);
                $query = $this->db->get('news');
                break;
            case 1:
                # requete perso only
                $this->db->select();
                $this->db->where('cible', 1);
                $this->db->order_by('date', 'DESC');
                $this->db->limit($limit,$offset);
                $query = $this->db->get('news');
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
                $this->db->select();
                $this->db->where('cible', 2);
                $this->db->order_by('date', 'DESC');
                $this->db->limit($limit,$offset);
                $query = $this->db->get('news');
                break;
        }
        // mise en variable
        $i =0;
        foreach ($query->result_array() as $row)
        {
            $return[$i]['titre'] = $row['titre'];
            $return[$i]['id'] = $row['id'];
            $return[$i]['date'] = date('d/m/Y',$row['date']);
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
