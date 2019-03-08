<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <title>Registration</title>
  </head>
  <body>
   
  
    <div class="col-lg-5 col-lg-offset-2">
       <h1>Registration Form</h1>
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
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
      </div>

      <div class="from-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="password">
      </div>

       <div class="from-group">
        <label for="confirm-password">confirm-password:</label>
        <input type="password" name="con-password" id="con-password" class="form-control" placeholder="confirm-password">
      </div>

      <div class="from-group">
        <label for="gender">Gender:</label>   
        <select class="form-control" id="gender" name="gender">
           <option value="male">Male</option>
           <option value="female">Female</option>
        </select>
      </div>
       
      <div class="from-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
      </div>
       <br>
       <div class="from-group">
         <button class="btn btn-primary" name="register" id="Submit">Submit</button>   
       </div>
        </form> 
    </div>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>