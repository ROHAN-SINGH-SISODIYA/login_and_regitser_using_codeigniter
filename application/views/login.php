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
       <h1>Login Here</h1>
       <?php if(isset($_SESSION['success']))
       { ?>
          <div class="alert alert-success">
            <?php
             echo $_SESSION['success'];
            ?>
          </div>
       <?php } 
       ?>
       <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <form action="" method="post"> 
      <div class="from-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
      </div>

      <div class="from-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="password">
      </div>
 
       <br>
       <div class="from-group">
        <button class="btn btn-primary" name="login" id="login">Login</butto>   
       </div>
        </form> 
    </div>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>