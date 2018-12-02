
  <!-- Main content -->
  <div class="main-content">

    <!-- Header -->
    <!-- Page content -->
    <div class="container-fluid mt--12">
      <div class="row">
        <div class="col-xl-12 order-xl-1" style="margin-top: 20px">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <!-- <a href="<?php echo base_url(); ?>admin/editquestion" class="btn btn-sm btn-primary">Edit Question</a> -->
                </div>
              </div>
            </div>
            <?php //echo validation_errors(); ?>
            <div class="card-body">
              <div class="container-fluid">
                <div class = "card-header bg-white border-0">ADD QUESTION</div><br>
                <form id="addques" class="form" method="post" action="<?= base_url('/admin/addquestion');?>">
                  <?php 
                  $success_msg =$this->session->flashdata('success_msg');
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
                  <div class="pl-lg-12">
                    <h4>Type of Question :</h4>
                     <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Technical :</label>
                          <input type="radio" name="field" id="tec" value="technical">
                           <?php echo form_error('field'); ?>
                        </div>
                      </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                          <label>Non-Technical :</label>
                          <input type="radio" name="field" id="non" value="nontechnical">
                          <?php echo form_error('field'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="display: block;">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Question :</label>
                          <textarea style="height: 10em;" class="form-control form-control-alternative" placeholder="Write a question related to category ..."  name="ques" ></textarea>
                          <?php echo form_error('ques'); ?>
                        </div>
                      </div>
                    </div>
                    <h4>Category :</h4>
                    <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-category">Technical :</label>
                          <select name="technical" id="technical" disabled >
                            <option value="9"> C Programming</option>
                            <option value="10"> C# Programming</option>
                            <option value="11">C++ Programming</option>
                            <option value="12"> Java Programming</option>
                            <option value="13"> Microbiology </option>
                            <option value="14">Biochemistry</option>
                            <option value="15">Biotechnology</option>
                            <option value="16">Biochemical Engineering  </option>
                            <option value="17"> Database </option>
                            <option value="18">Networking</option>
                            <option value="19"> Computer Science </option>
                            <option value="20">Civil Engineering </option>
                            <option value="21">Mechanical Engineering</option>
                            <option value="22">Electronics and Communication </option>
                            <option value="23"> Electronics</option>
                            <option value="24"> Digital Electronics</option>
                            <option value="25"> Electronic Devices</option>
                            <option value="26"> Electrical Engineering </option>
                            <option value="27">Technical Drawing </option>
                            <option value="28">Engineering Mechanics</option>
                            <option value="29">Chemical Engineering</option>
                          </select>
                           <?php echo form_error('technical'); ?>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-category">Non-Technical :</label>
                          <select name="nontechnical"  id="nontechnical" disabled >
                            <option value="1">Aptitude</option>
                            <option value="2">Verbal Ability</option>
                            <option value="3">Logical Reasoning</option>
                            <option value="4">Verbal Reasoning</option>
                            <option value="5">Non Verbal Reasoning </option>
                            <option value="6">Data Interpretation</option>
                            <option value="7">General Knowledge</option>
                            <option value="8">Current Affairs </option>
                          </select>
                          <?php echo form_error('nontechnical'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label></label>
                          <button type="submit" class="btn btn-sm btn-primary" name="addquesbtn" value="ADD">ADD</button> 
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
    </div>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url('asset/js/jquery.validate.min.js');?>"></script>

<script>

$(document).ready(function(){
$("input:radio[name=field]").click(function() {
var selected_choice = $(this).val();

if(selected_choice=='technical'){
$("#nontechnical").attr("disabled",true); // Two  options disabled
$("#technical").attr("disabled",false); // Two  options enabled
}

if(selected_choice=='nontechnical'){
$("#technical").attr("disabled",true); // Two  options disabled
$("#nontechnical").attr("disabled",false); // Two  options enabled
}

});
});

</script>
<script>
  jQuery(document).ready(function(){
    jQuery("#addques").validate({

      rules:{
        field:"required",
        ques:{
          required:true
        },
        technical:{
          required:true
        },
        nontechnical:{
          required:true
        }
      }
    });
  });
</script>