<?php

class Users extends CI_Controller{
    //Register
    public function passwordvalidation($password){
        if(strlen($password)<6){
            $this->form_validation->set_message('passwordvalidation','Password must be longest than 6.');
            return false;
        }
        else{
            return true;
        }
        
    }
    
    public function register(){
        $data['title']="Sign Up!";
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
        $this->form_validation->set_rules('password','Password','required|callback_passwordvalidation');
        $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');
        }
        else{
            //Encrypt password
            $enc_password=md5($this->input->post('password'));
            
            $this->user_model->register($enc_password);
            
            $this->session->set_flashdata('user_register','You are now registered, and can log in!');
            redirect('home');
        }
    }
    public function csa($username)
        {
                $this->db->select('admin')->from('users')->where('username',$username);
        
                $query = $this->db->get();

                return $query->result();        
        } 
    
    //Login user
     public function login(){
        $data['title']="Sign In!";
        
   
        $this->form_validation->set_rules('username','Username','required');

        $this->form_validation->set_rules('password','Password','required');
  
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/login',$data);
            $this->load->view('templates/footer');
        }
        else{
            
            //Get username
            $username=$this->input->post('username');
            //get and encrypt password
            $password=md5($this->input->post('password'));
            
            //Login user
            $user_id=$this->user_model->login($username,$password);
            
           // $valami= $this->db->select('admin')->from('users')->where('username',$username);
            
            $query = "SELECT admin FROM users WHERE username='$username'";
               $link = mysqli_connect('localhost','root','','vehicles');
               if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$result= mysqli_query($link,$query) or die(mysqli_error()); 

    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $cname => $cvalue){
           $admin=$cvalue;
        
    }
    } 
    
    $query = "SELECT banned FROM users WHERE username='$username'";
               $link = mysqli_connect('localhost','root','','vehicles');
               if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$result= mysqli_query($link,$query) or die(mysqli_error()); 

    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $cname => $cvalue){
           $banned=$cvalue;
        
    }
   
    
    
}
     
     

            if($banned==1){
                $this->session->set_flashdata('login_failed','You are banned!');
            redirect('users/login');
            }
            else{
         
            if($user_id!=false){
              
                $user_data=array(
                    'user_id' =>$user_id,
                    'username' =>$username,
                    'logged_in' =>true,
                    'admin'=>$admin
                    
                    
                );
                
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('user_loggedin','You are now logged in!');
            redirect('home');
            

            }
            else{
              
                $this->session->set_flashdata('login_failed','Login is invalid!');
            redirect('users/login');
            }
                        //
            //$this->session->set_flashdata('login_failed','Login is invalid!');
            //redirect('users/login');
        }
    }
        }
    
       
    
    //Log user out
    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        
        $this->session->set_flashdata('user_loggedout','You are now logged out!');
        redirect('users/login');
    }
    
    //check if username exist
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists','That username is taken. Please choose a different one.');
        if($this->user_model->check_username_exists($username)){
            return true;
        }
        
        else{
            return false;
        }
    }
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','That email is taken. Please choose a different one.');
        if($this->user_model->check_email_exists($email)){
            return true;
        }
        
        else{
            return false;
        }
    }
}

