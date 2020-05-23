<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of import
 *
 * @author O.Zsolt
 */
class import extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index($vehicle){
        if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
        $data['vehicle']=$vehicle;
       $this->load->view('templates/header');
       $this->load->view('import/import',$data);
       $this->load->view('templates/footer');
    }
}
