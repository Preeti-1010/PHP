<?php 
if(empty($this->session->userdata('login_id'))){
      $this->load->view('login');
}else{?>

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
        <div class="main-left"> 
            <br>
            <div class="div-test-initiator" id="divInitiator">           
             <div class="mx-none" id="divStartTestInstruction" style="display: block;">
                <div class="div-test-instruction">
                    <p class="mx-green mx-bold mx-uline">Instruction:</p>
                    <ul class="ul-test-instruction">
                    <li>Total number of questions : <b>20</b>.</li>
                    <li>Time alloted : <b>30</b> minutes.</li>
                    <li>Each question carry 1 mark, no negative marks.</li>
                    <li>DO NOT refresh the page.</li>
                    <li>All the best :-).</li>
                    </ul>
                </div>
              <p align="center"><br>
                <?php $id = $this->uri->segment(3);?>
                <a href="<?php echo base_url('home/test'); ?>/<?php echo $id;?>"><button class="btn btn-primary">Start Test ... <div class="ripple-container"></div></button></a></p>
             </div>
            </div>
           
        </div>
      </div>
      <div class="col-md-4">        
        <?php  $this->load->view('sidebar');?>
      </div>
    </div>
  </div>
</div>
<?php }?>