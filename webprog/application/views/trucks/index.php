<h2><?= $title?></h2>
<h3><a class="btn btn-warning" href="<?php echo base_url()?>trucks/create">Upload Truck</a></h3>
<?php foreach ($trucks as $truck): ?>
<h3>
    <img src="/webprog/uploads/img/trucks/<?php echo $truck['picture'] ?>  " width="100" style="border:5px solid gray"><?php echo $truck['model'];?>
</h3>
<small class='post-date'>Posted on: <?php echo $truck['created_at']?></small>
<p><?php echo $truck['description'];?>
<br>Manufactured: <?php echo $truck['age'];?>
<p><a class="btn btn-success" href="<?php echo site_url('/trucks/'.$truck['model']);?>">Read More!</a></p>
<?php endforeach; ?>
<br>
<a href="http://localhost/webprog/phpexcel/index/trucks"><input type="button" class="btn btn-success" value="Export to excel" name="export" /></a>
<br>
<br>
<?php if($this->session->userdata('logged_in')):?>
<a href="<?php echo base_url();?>import/index/trucks"><input class="btn btn-warning" type="submit" value="Import csv" name="import" /></a>
<?php endif;?>     