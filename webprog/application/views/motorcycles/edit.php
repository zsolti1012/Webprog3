<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('motorcycles/update')?>
<input type="hidden" name="id" value="<?php echo $motorcycle['id']?>">

<form>
  <div class="form-group">
      <label>Model</label>
    <input type="text" class="form-control" name="model"  placeholder="Add Model" value="<?php echo $motorcycle['model'];?>">
  </div>
   
  <div class="form-group">
      <label>Description</label>
    <input type="text" class="form-control" name="description"value="<?php echo $motorcycle['description'];?>"  placeholder="Add short Description">
  </div>
    
    
  <div class="form-group">
      <label>Manufactured at: </label>
      <input type="number" class="form-control" name="manufactured" placeholder="Manufactured" value="<?php echo $motorcycle['age'];?>">
  </div>
  <div class="form-group">
    <label>Image</label>
   
    <!--<p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>-->
    <br>
  <button type="submit"  name="submit" class="btn btn-success">Submit</button>
</form