

<html>
    <head>
    <title>Vehicles</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style1.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    </head>
    
    <body>
        <nav class="navbar navbar-inverse">
            <div class ="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>">Vehicles ®</a>
                    
                </div>
                <div id="navbar">
                    <ul  class="nav navbar-nav">
                       
                        
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
                        <li class="nav-item active"><a class="nav-link"href="<?php echo base_url();?>about">About</a></li>
                        <li class="nav-item active"><a class="nav-link"href="<?php echo base_url();?>cars">Cars</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>trucks">Trucks</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>motorcycles">Motorcycles</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>trains">Trains</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>topcars">TopCars</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <?php if(!$this->session->userdata('logged_in') ):?>
                        <li class="nav-item active"><a class="nav-link"  href="<?php echo base_url();?>users/login">Log in</a></li>
                        <li class="nav-item active"><a class="nav-link"  href="<?php echo base_url();?>users/register">Register</a></li>
                        <?php endif;?>
                        <?php if($this->session->userdata('logged_in')):?>
                        <li ><a class="nav-link"><i>Logged in as: <?php echo$this->session->userdata('username')?></i></a></li>
                       <li ><a class="nav-link"  href="<?php echo base_url();?>users/logout">Logout</a></li>
                       <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>  

   <div class="container">
       <?php if($this->session->flashdata('user_register')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_register').'</p>';?>
           
        <?php endif;?>

       
       <?php if($this->session->flashdata('post_created')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
           
        <?php endif;?>
       
       <?php if($this->session->flashdata('image_invalid')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('image_invalid').'</p>';?>
           
        <?php endif;?>

       <?php if($this->session->flashdata('post_updated')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>
           
        <?php endif;?>

       <?php if($this->session->flashdata('post_deleted')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
           
        <?php endif;?>

       <?php if($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
           
        <?php endif;?>

       <?php if($this->session->flashdata('user_loggedin')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
           
        <?php endif;?>

        <?php if($this->session->flashdata('user_loggedout')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
           
        <?php endif;?>

       <?php if($this->session->flashdata('csv_invalid')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('csv_invalid').'</p>';?>
           
        <?php endif;?>

