<h2><?php echo $car['model'];?></h2>





<img src="/webprog/uploads/img/cars/<?php echo $car['picture'] ?>  " width="320" style="border:5px solid gray">
<small class='post-date'>Posted on: <?php echo $car['created_at']?> </small>
<div class="post-body">
<br>    <?php echo $car['description'];?>
    
</div>
 
<br>

<?php echo form_open_multipart('/cars/delete/'.$car['id']);?>
<?php if($this->session->userdata('logged_in')):?>
<?php if($this->session->userdata('user_id')==$car['user_id'] or $this->session->userdata('admin')==1 ):?>
<a class="btn btn-success" href="/webprog/cars/edit/<?php echo rawurldecode($car['model'])?>">Edit</a>
<input type="submit" value="Delete" class="btn btn-danger">
<?php endif;?>

<?php endif?>
</form>
