<h2><?php echo $motorcycle['model'];?></h2>
<img src="/webprog/uploads/img/motorcycles/<?php echo $motorcycle['picture'] ?>  " width="320" style="border:5px solid gray">
<small class='post-date'>Posted on: <?php echo $motorcycle['created_at']?></small>
<div class="post-body">
<br>    <?php echo $motorcycle['description'];?>
    
</div>
 
<br>
<?php echo form_open_multipart('/motorcycles/delete/'.$motorcycle['id']);?>
<?php if($this->session->userdata('logged_in')):?>
<?php if($this->session->userdata('user_id')==$motorcycle['user_id']or $this->session->userdata('admin')==1):?>
<a class="btn btn-success" href="/webprog/motorcycles/edit/<?php echo rawurldecode($motorcycle['model'])?>">Edit</a>
<input type="submit" value="Delete" class="btn btn-danger">
<?php endif;?>
<?php endif;?>

</form>
