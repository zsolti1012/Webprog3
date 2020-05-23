<h2><?php echo $truck['model'];?></h2>
<img src="/webprog/uploads/img/trucks/<?php echo $truck['picture'] ?>  " width="320" style="border:5px solid gray">
<small class='post-date'>Posted on: <?php echo $truck['created_at']?></small>
<div class="post-body">
<br>    <?php echo $truck['description'];?>
    
</div>
 
<br>
<?php echo form_open_multipart('/trucks/delete/'.$truck['id']);?>
<?php if($this->session->userdata('logged_in')):?>
<?php if($this->session->userdata('user_id')==$truck['user_id']or $this->session->userdata('admin')==1):?>
<a class="btn btn-success" href="/webprog/trucks/edit/<?php echo rawurldecode($truck['model'])?>">Edit</a>
<input type="submit" value="Delete" class="btn btn-danger">
<?php endif;?>
<?php endif;?>
</form>
