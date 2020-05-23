<h2><?=$title?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('cars/create')?>
<form>
  <div class="form-group">
      <label>Model</label>
    <input type="text" class="form-control" name="model"  placeholder="Add Model">
  </div>
   
  <div class="form-group">
      <label>Description</label>
    <input type="text" class="form-control" name="description"  placeholder="Add short Description">
  </div>
    
    
  <div class="form-group">
      <label>Manufactured at: </label>
      <input type="number" class="form-control" name="manufactured" placeholder="Manufactured">
  </div>
  <div class="form-group">
    <label>Image (max 3000x3000 3mb)</label>
    <input type="file" name="file">
    <!--<p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>-->
    <br>
  <button type="submit"  name="submit" class="btn btn-success">Submit</button>
</form>