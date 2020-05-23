<?php 
class Trains extends CI_Controller{
   public function index(){
      
       
       $data['title'] = 'Trains';
       
       $data['trains']=$this->post_model_trains->get_posts();
       
       //print_r($data['trucks']);
       
       $this->load->view('templates/header');
       $this->load->view('trains/index', $data);
       $this->load->view('templates/footer');
   } 
   public function view($model=NULL){
       $data['train']=$this->post_model_trains->get_posts(rawurldecode($model));
       if(empty($data['train'])){
           
           show_404();
       }
       
       $data['model']=$data['train']['model'];
       
       $this->load->view('templates/header');
       $this->load->view('trains/view', $data);
       $this->load->view('templates/footer');
       }
    
    public function validation($date){
        if($date>=1800 && $date<= 2020) return true;
        
        else{
            $this->form_validation->set_message('validation','Not valid manufactured year!');
        return false;
        
        }
    }   
      
     public function create(){
         if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       $data['title']='Upload train';
       
        $this->load->library('form_validation');
            // validációs szabályok beállítása 
            // a) mindhárom mező kitöltése kötelező 
            $this->form_validation->set_rules('model','Modell','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('manufactured','Manufactured','required|callback_validation');
            $model=$this->input->post('model');
            $model=str_replace(' ','',$model);
          
            if($this->form_validation->run()==FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('trains/create', $data);
                    $this->load->view('templates/footer');
                }
            
            else{
            $upload_config['allowed_types'] = 'jpg|jpeg|png';
            $upload_config['max_size'] = 3000;
            $upload_config['max_width'] = 3000;
            $upload_config['max_height'] = 3000;
             //$upload_config['min_width'] = 250; //min szélesség száz pixel
            //$upload_config['min_height'] = 250; //min magasság
            #END VALIDÁCIÓ
           
            $upload_config['file_name'] = $model;
            
            
            $upload_config['upload_path'] = './uploads/img/trains/'; 
            
            $upload_config['file_ext_tolower'] = TRUE;
            
            $upload_config['overwrite'] = TRUE;
            
            
            $this->load->library('upload',$upload_config); //ezt követően  $this->upload létrejön
       
            //$this->upload->initialize($upload_config);
            
           


           
                if(!$this->upload->do_upload('file'))
                 {
                    
                    $model='noimage.png';
                   $this->session->set_flashdata('image_invalid','You did not choose imagine, or your imagine size is invalid.');
                
                //}
                 }
                 
            
                 
                 $this->post_model_trains->create_post($model);
                $this->session->set_flashdata('post_created','You post has been created!');
                redirect('trains');
                 
            
            }  
       
    }
       public function delete($id){
           if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       
        //---------------------------------------------
       $query = "SELECT model FROM trains WHERE id='$id'";
               $link = mysqli_connect('localhost','root','','vehicles');
               if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$result= mysqli_query($link,$query) or die(mysqli_error()); 

    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $cname => $cvalue){
           $model=$cvalue;
        
    }
    }
       
       //----------------------------------------------
       if($this->session->userdata('user_id')!=$this->post_model_trains->get_posts(rawurldecode($model))['user_id']and $this->session->userdata('admin')!=1){
               redirect('trains');
           }
           $this->post_model_trains->delete_post($id);
           $this->session->set_flashdata('post_deleted','Your post has been deleted!');
           redirect('trains');
       }
       
       public function edit($model){
           if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
       
           $data['train']=$this->post_model_trains->get_posts(rawurldecode($model));
        //Check user
           if($this->session->userdata('user_id')!=$this->post_model_trains->get_posts(rawurldecode($model))['user_id']and $this->session->userdata('admin')!=1){
               redirect('trains');
           }
           
           if(empty($data['train'])){
           
           show_404();
       }
       
       $data['title']='Edit post';
       
       $this->load->view('templates/header');
       $this->load->view('trains/edit', $data);
       $this->load->view('templates/footer');
       }
       
       public function update(){
           if(!$this->session->userdata('logged_in')){
           redirect('users/login');
       }
           $this->post_model_trains->update_post();
            $this->session->set_flashdata('post_updated','Your post has been updated!');
           redirect('trains');
       }
}
