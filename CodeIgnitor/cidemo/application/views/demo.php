<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Yourself</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>

    <?php $success_msg=$this->session->flashdata('success_msg');
         if($success_msg){ 
                echo $success_msg;
                        }
          else{

                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
               
          }
     ?>

  <form action="<?= base_url('user_reg');?>" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="uname"  value="<?php echo set_value('uname'); ?>" class="form-control" placeholder="Enter Name" >
      <?php echo form_error('uname'); ?>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email"  value="<?php echo set_value('email'); ?>" class="form-control"  placeholder="Enter email" >
      <?php echo form_error('email'); ?>
    </div>

    <div class="form-group">
      <label for="Pass">Password:</label>
      <input type="password" name="pass"  value="<?php echo set_value('pass'); ?>" class="form-control"  placeholder="Enter Password" >
      <?php echo form_error('pass'); ?>
    </div>

    <div class="form-group">
      <label for="option">Gender: </label>
      Male: <input type="radio"  name="opt" value="1">
      Female: <input type="radio" name="opt"  value="0"  >

      <?php echo form_error('opt'); ?>
    </div>

    <div class="form-group">
      <label for="Age">Age:</label>
      <input type="text" name="age"  value="<?php echo set_value('age'); ?>" class="form-control"  placeholder="Enter Age" >
      <?php echo form_error('age'); ?>
    </div>

      <div class="form-group">
      <label for="Pass">Contact No:</label>
      <input type="number" name="mobile_no"  value="<?php echo set_value('mobile_no'); ?>" class="form-control"  placeholder="Enter Contact No." >
      <?php echo form_error('mobile_no'); ?>
    </div>

    <div class="form-group">
      <label>Picture</label>
      <input class="form-control" type="file" name="picture" />
       <?php echo form_error('picture'); ?>
    </div>
 
    <button type="submit" class="btn btn-default" >Submit</button>
      <button type="button" name="login"  onClick="<?= base_url('user/go');?>" class="btn btn-default">Sign-In</button>
 
    </div>
  </form>
</div>


  


</body>
</html>
