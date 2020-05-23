
<?php echo validation_errors();?>

<?php echo form_open('users/register');?>
<div class="row">
    <div  class="col-md-4 col-md-offset-4 " style="text-align:center;">
        <!--col-md-4 col-md-offset-4-->
        <h2><?=$title;?></h2>       

        <div class="form-group">
        <label>Name</label>
        <br>
        <input type="text" class="form-group" name="name" 
           placeholder="Name">
        </div>

        <div class="form-group">
        <label>Zipcode (Not required)</label>
        <br>
        <input type="text" class="form-group" name="zipcode" 
           placeholder="Zipcode">
        </div>

        <div class="form-group">
        <label>Email</label>
        <br>
        <input type="email" class="form-group" name="email" 
           placeholder="Email">
        </div>

        <div class="form-group">
        <label>Username</label>
        <br>
        <input type="text" class="form-group" name="username" 
           placeholder="Username">
        </div>

        <div class="form-group">
        <label>Password</label>
        <br>
        <input type="password" class="form-group" name="password" 
           placeholder="Password">
        </div> 

        <div class="form-group">
        <label>Confirm password</label>
        <br>
        <input type="password" class="form-group" name="password2" 
           placeholder="Confirm password">
        </div>
      <Button type="submit" class="btn btn-success">Submit</Button>
    </div>
 </div>
    <?php echo form_close();?>

