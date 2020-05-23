<?php

class post_model_motorcycles extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_posts($model=FALSE){
        if($model==FALSE){
            $query =$this->db->get('motorcycles');
            return $query->result_array();
        }
         $this->db->order_by('model');
       $query =$this->db->get_where('motorcycles',array('model'=>$model));
        return $query->row_array();
    }
    
    public function create_post($picture){
        $model= url_title($this->input->post('title'));
        
        $data=array(
            'model' => $this->input->post('model'),
            'picture' => $picture,
            'description' =>$this->input->post('description'),
            'user_id' => $this->session->userdata('user_id'),
            'age' =>$this->input->post('manufactured')
                
            
        );
        return $this->db->insert('motorcycles',$data);
    }
    
    public function delete_post($id){
        $this->db->where('id',$id);
        $this->db->delete('motorcycles');
        return true;
    }
     public function selectfield($string){
         $query = strval($string);
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
     return $model;  
    }
    public function update_post(){
        $id=$this->input->post('id');
        $model= url_title($this->input->post('title'));
       $data=array(
            'model' => $this->input->post('model'),
            'picture' => strval($this->selectfield("SELECT picture FROM motorcycles WHERE id='$id'")),
            'description' =>$this->input->post('description'),
            'age' =>$this->input->post('manufactured')
                
            
        );
        $this->db->where('id',$this->input->post('id'));
       return $this->db->update('motorcycles',$data);
    }
}
