<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Topcars
 *
 * @author O.Zsolt
 */
class Topcars extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['cars']=$this->topcars_model->get_posts();
       
       $this->load->view('templates/header');
       $this->load->view('topcars/topcars', $data);
       $this->load->view('templates/footer');
        
        
     
    }
    //put your code here
}
