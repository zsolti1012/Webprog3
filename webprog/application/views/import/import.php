<?php      
        
            $id=$this->session->userdata('user_id');

         $conn = mysqli_connect("localhost:3306","root","","vehicles");
         mysqli_set_charset($conn, "utf8mb4_hungarian_ci");
         if(isset($_POST["import"]))
         {
             
             $filename = $_FILES["file"]["tmp_name"];
             if($_FILES["file"]["size"] > 0)
             {
                 $file = fopen($filename,"r");
                 fseek($file,0);
                             
                 while (($column = fgetcsv($file,1000,";")) !== false)
                 {                    
                   
                     /*if ($column[4] > 2)
                     {
                         $column[4] = 2;
                     }  */
                     //'" .$column[0] ."'
                     $sqlInsert = "Insert INTO ".$vehicle." (model,picture,user_id,description,age) values ('" .$column[0] ."','noimage.png',$id, '" .$column[1] ."'," .$column[2] .")";
                     $result = mysqli_query($conn, $sqlInsert);                                        
                 }
                 
                 
              $this->session->set_flashdata('post_updated','Your posts has been imported!');
           redirect($vehicle);
             }
            
           else{
              $this->session->set_flashdata('csv_invalid','Your csv file is invalid!');
           redirect($vehicle); 
           }
         }
         
         
        ?>
<html>
<form class="well" align="center"  action="" method="post" name="uploadCsv" enctype="multipart/form-data">
    <h2 align="center"><?php echo $vehicle?> Import</h2>
     <label> Choose CSV File </label>
     
   <input type="file" name="file" accept=".csv">
    <br >
    <input type="submit" name="import" class="btn btn-success btn-xs" value="Import" />
   </form>
