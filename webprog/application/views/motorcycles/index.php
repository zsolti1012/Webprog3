<h2><?= $title?></h2>
<h3><a class="btn btn-warning" href="<?php echo base_url()?>motorcycles/create">Upload Motorcycle</a></h3>
<br>
<?php foreach ($motorcycles as $motorcycle): ?>
<h3>
    <img src="/webprog/uploads/img/motorcycles/<?php echo $motorcycle['picture'] ?>  " width="100" style="border:5px solid gray"><?php echo $motorcycle['model'];?>
</h3>
<small class='post-date'>Posted on: <?php echo $motorcycle['created_at']?></small>
<p><?php echo $motorcycle['description'];?>
<br>Manufactured: <?php echo $motorcycle['age'];?>
<p><a class="btn btn-success" href="<?php echo site_url('/motorcycles/'.$motorcycle['model']);?>">Read More!</a></p>
<?php endforeach; ?>

<br>
<a href="http://localhost/webprog/phpexcel/index/motorcycles"><input type="button" class="btn btn-success" value="Export to excel" name="export" /></a>


<br>
<br>
<?php if($this->session->userdata('logged_in')):?>
<a href="<?php echo base_url();?>import/index/motorcycles"><input class="btn btn-warning" type="submit" value="Import csv" name="import" /></a>
<?php endif;?>     