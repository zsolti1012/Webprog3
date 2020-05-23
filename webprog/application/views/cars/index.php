<h2><?= $title?></h2>
<h3><a class="btn btn-warning" href="<?php echo base_url()?>cars/create">Upload Car</a></h3>
<br>
<?php foreach ($cars as $car): ?>
<h3>
    <img src="/webprog/uploads/img/cars/<?php echo $car['picture'] ?>  " width="100" style="border:5px solid gray"><?php echo $car['model'];?>
</h3>
<small class='post-date'>Posted on: <?php echo $car['created_at']?></small>
<p><?php echo $car['description'];?>
<br>Manufactured: <?php echo $car['age'];?>
<p><a class="btn btn-success" href="<?php echo site_url('/cars/'.$car['model']);?>">Read More!</a></p>


<?php endforeach; ?>
<br>
<a href="http://localhost/webprog/phpexcel/index/cars"><input type="button" class="btn btn-success" value="Export to excel" name="export" /></a>

<br>
<br>
<?php if($this->session->userdata('logged_in')):?>
<a href="<?php echo base_url();?>import/index/cars"><input class="btn btn-warning" type="submit" value="Import csv" name="import" /></a>
<?php endif;?>     
        

         