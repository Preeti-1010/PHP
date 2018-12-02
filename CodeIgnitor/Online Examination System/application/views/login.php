
<div class="page-header header-filter" style="background-image: url('<?php echo base_url();?>asset/img/loginbg.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
    <br><br><br>
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
        
        
            <form class="form" method="post" action="<?= base_url('/home/login');?>" onSubmit="return formValidation();">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Log in</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              <p class="description text-center">Or Be Classical</p>
          <div class="card-body">
               <?php $success_msg =$this->session->flashdata('success_msg');
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
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="text" class="form-control" name="uname">
                    <?php echo form_error('uname'); ?>
                  </div>
                
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" name="uemail" class="form-control">
                    <?php echo form_error('uemail'); ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleMessage" class="bmd-label-floating">Your Password</label>
                    <input type="password" name="upwd" class="form-control" rows="4" id="examplePassword">
                    <?php echo form_error('upwd'); ?>
                  </div>

                  <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised" id="loginsend" name="loginsend">
                    Sign In
                  </button><!-- <a href="<?php echo base_url('home/registration');  ?>">Register Now</a> -->
                  </div>
              </div>
            </div>      
          </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
  $().ready(function(){
    $("#loginsend").validate({

      rules:{
        uname:"required",
        uemail:{
          required:true,
          email: true
        },
        upwd:{
          required:true,
          minlength:6
        },
      }
    });
  });
</script>