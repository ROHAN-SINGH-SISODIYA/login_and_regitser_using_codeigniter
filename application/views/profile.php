<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <title>Login Here</title>
  </head>
  <body>
   
  
    <div class="col-lg-5 col-lg-offset-2">
       <h1>Welcome</h1>
       <?php if(!empty($this->session->flashdata('success')))
       { ?>
          <div class="alert alert-success">
            <?php
             echo $this->session->flashdata('success');
            ?>
          </div>
       <?php } 
       ?>
      
       Hello <?php echo $this->session->userdata('username'); ?>
    </div>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>