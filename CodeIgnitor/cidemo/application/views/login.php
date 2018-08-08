<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Yourself</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign-In</h2>

    <?php $success_msg=$this->session->flashdata('success_msg');
         if($success_msg){ 
                echo $success_msg;
                 echo $this->session->flashdata('email_sent');
                        }
          else{
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  } 
          }
     ?>

     

  <form action="<?= base_url('user/login');?>" method="post">
    
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

    <button type="submit"  name="login" class="btn btn-primary">Login</button>
      

  </form>
</div>


  


</body>
</html>
