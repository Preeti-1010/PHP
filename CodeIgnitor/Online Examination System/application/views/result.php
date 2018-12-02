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
            <h3><b><u>Your Result</u></b></h3><br>
             <br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Questions </th>
                    <th>Answers</th>
                    <th>Your Answers</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $totalMarks =0; $totalWrong =0; 
                  //echo "<pre>"; print_r($result);die;
                  foreach ($result as $key => $value){?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $value['question_text'] ;?></td>
                    <td><?php echo $value['right_answer'] ?></td>
                    <td>
                      <?php foreach ($value['answer_id'] as $ans ){
                         if($ans->choice == $value['right_answer']){
                          echo "Right"."\n";
                         }else{
                          echo "Wrong";
                          $totalWrong = $totalWrong +1;
                         }?>
                      
                    </td>
                  </tr>
                  <tr><?php
                  } 
                if($ans->choice == $value['right_answer']){
                     $totalMarks = $totalMarks +1;
                    } 
                 }
                 echo "Total Right Answer: ". $totalMarks."<br>";
                 echo "Total Wrong Answer: ". $totalWrong. "<br> ";
                 echo "Total Scored: ". $totalMarks."/"."10";
                ?>
                  </tr>
                </tbody>
              </table>
          </div>
        </form>
      </div>
      <div class="col-md-4">        
        <?php  $this->load->view('sidebar');?>
      </div>
    </div>
  </div>
</div>
<? }?>