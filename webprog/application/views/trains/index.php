<h2><?= $title?></h2>

<h3><a class="btn btn-warning" href="<?php echo base_url()?>trains/create">Upload Train</a></h3>
<br>
<?php foreach ($trains as $train): ?>
<h3>
    <img src="/webprog/uploads/img/trains/<?php echo $train['picture'] ?>  " width="100" style="border:5px solid gray"><?php echo $train['model'];?>
</h3>
<small class='post-date'>Posted on: <?php echo $train['created_at']?></small>
<p><?php echo $train['description'];?>
<br>Manufactured: <?php echo $train['age'];?>
<p><a class="btn btn-success" href="<?php echo site_url('/trains/'.$train['model']);?>">Read More!</a></p>
<?php endforeach; ?>
<br>
<a href="http://localhost/webprog/phpexcel/index/trains"><input type="button" class="btn btn-success" value="Export to excel" name="export" /></a>
<br>
<br>
<?php if($this->session->userdata('logged_in')):?>
<a href="<?php echo base_url();?>import/index/trains"><input class="btn btn-warning" type="submit" value="Import csv" name="import" /></a>
<?php endif;?>     