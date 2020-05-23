<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of topcars_model
 *
 * @author O.Zsolt
 */
class topcars_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
     public function get_posts($model=FALSE){
        if($model==FALSE){
            $this->db->order_by('price','DESC');
            $query =$this->db->get('topcars');
            return $query->result_array();
        }
        
       $query =$this->db->get_where('topcars',array('model'=>$model));
        return $query->row_array();
    }
}
