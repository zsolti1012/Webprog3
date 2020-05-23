<h2><?php echo $train['model'];?></h2>
<img src="/webprog/uploads/img/trains/<?php echo $train['picture'] ?>  " width="320" style="border:5px solid gray">
<small class='post-date'>Posted on: <?php echo $train['created_at']?></small>
<div class="post-body">
<br>    <?php echo $train['description'];?>
    
</div>
 
<br>
<?php echo form_open_multipart('/trains/delete/'.$train['id']);?>
<?php if($this->session->userdata('logged_in')):?>
<?php if($this->session->userdata('user_id')==$train['user_id']or $this->session->userdata('admin')==1):?>
<a class="btn btn-success" href="/webprog/trains/edit/<?php echo rawurldecode($train['model'])?>">Edit</a>
<input type="submit" value="Delete" class="btn btn-danger">
<?php endif;?>
<?php endif;?>
</form>
