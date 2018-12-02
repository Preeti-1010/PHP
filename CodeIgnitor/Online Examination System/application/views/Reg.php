<div class="page-header header-filter" style="background-image: url('<?php echo base_url();?>asset/img/loginbg.jpg'); background-size: cover; background-position: top center;">

<div class="container" style="margin-top:78px;">
  <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
      <div class="card card-signup">
        <h2 class="card-title text-center">Register</h2>
			<form class="contact-form" style="padding-left: 20px;
    padding-right: 20px;" action="<?= base_url('/home/registration');?>" onSubmit="return formValidation();" method="post">

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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="text" class="form-control" name="name">
                    <?php echo form_error('name'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" name="email" class="form-control">
                    <?php echo form_error('email'); ?>
                  </div>
                </div>
              </div>
              
               <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Password</label>
                <input type="password" name="pwd" class="form-control" rows="4" id="examplePassword">
                <?php echo form_error('pwd'); ?>
              </div>

              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Phone No.</label>
                <input type="text" name="phone_no" class="form-control" rows="4" id="examplePhone">
                <?php echo form_error('phone_no'); ?>
              </div>

              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="agree" type="checkbox" value="" checked=""> <?php echo form_error('agree'); ?>
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                    I agree to the <a href="#">terms and conditions</a>.
                  </label>
              </div>

              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised" id="send" name="send">
                    Submit
                  </button>
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
    $("#send").validate({
      rules:{
        phone_no:{
          required: true,
          minlength: 10
        },
        pwd :{
          required: true,
          minlength:5
        },
        email:{
          required: true,
          email:true
        },
        name : 'required',
        
      }
    });           
  });
</script>