<?php 
if(empty($this->session->userdata('login_id'))){
      $this->load->view('login');
}else {?>
  
<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>asset/img/gov.jpg'); background-position: center top;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Non-Technical</h1>
          
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
          </a>
        </div>
      </div>
    </div>
</div>
<div class="main main-raised">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <form action="<?= base_url('/home/test');?>" method="post">
          <div>
            <h3><b><u>All the Best..</u></b></h3><br>
             <?php $success_msg =$this->session->flashdata('success_msg');
                 if($success_msg){ 
                      echo $success_msg;
                                }
                 else{
                   $error_msg = $this->session->flashdata('error_msg');
                          if($error_msg){
                          echo $error_msg;
                          }   
                    }
              ?><br><br>
              <?php echo form_error('check_ans[]'); 
              
              $i =1;$n =1;
            foreach($question as $ques_detail){

             /* if(($ques_detail['question']['category']) == 'aptitude'){*/
              ?>
              <b><?php echo $i++ .".  ";?></b>
              <?php echo $ques_detail['question']['question']."<br>"."<br>";
                /*}*/ 
              $k = 1;
               foreach($ques_detail['options'] as $options){
                 
                if(($options->choice_id) >0): ?>
                  <div class="form-text">
                      <input type="hidden" name="right_choice[<?php print $n; ?>]" value="<?php echo $options->is_right_choice ?>"/>
                  </div> 
                  <div class="form-radio">
                    <label>
                      <input name="check_ans[<?php print $n; ?>]" type="radio"   value="<?php echo $options->choice_id ?>"/>
                    </label>
                    <?php echo $k++ .". "."  ".$options->choice; ?>
                  </div>
                  <?php
                endif; 
               } $n++;       
            } 
           ?>

            <div class="row">
              <div class="col-md-4 ml-auto mr-auto text-center">
                <button class="btn btn-primary btn-raised" id="submission" name="submission">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">        
        <?php  $this->load->view('sidebar');?>
      </div>
    </div>
  </div>
  <div align="center" style="padding: 10px; position: fixed; z-index: 3000000; bottom: 10px; left: 1px; width: auto; background-color: rgb(94, 172, 26); color: white;">
      Time Left: <span id="countdown" style="font-weight:bold">00:30:01</span>
  </div>
</div>

<?}?>
<script>
  (function(){
  $(document).ready(function() {
    var time = "00:30:01",
      parts = time.split(':'),
      hours = +parts[0],
      minutes = +parts[1],
      seconds = +parts[2],
      span = $('#countdown');
    
    function correctNum(num) {
      return (num<10)? ("0"+num):num;
    }
  
    var timer = setInterval(function(){
      seconds--;
        if(seconds == -1) {
          seconds = 59;
            minutes--;
          
            if(minutes == -1) {
              minutes = 59;
                hours--;
              
                if(hours==-1) {
                  alert("timer finished");
                  clearInterval(timer);
                  return;
                }
            }
        }
        span.text(correctNum(hours) + ":" + correctNum(minutes) + ":" + correctNum(seconds));
    }, 1000);
  }); 
})();
</script>
<script type="text/javascript">
   
</script>
