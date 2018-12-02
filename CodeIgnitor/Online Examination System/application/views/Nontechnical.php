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
            <hr>
            <div class="row">             
            <div class="col-md-12 div-topics-index">  
             <h3 class="topic-heading">General Online Tests</h3>
                
                <ul>
                  <?php foreach($type as $category ) { ?>
                <li><a href="<?php echo base_url('home/testinfo'); ?>/<?php echo $category->id;?>" value ="<?php echo $category->id;?>">Online <?php echo $category->name;?>  Test</a></li>
                <?php }  ?>
                </ul>  
                
            </div>         
            </div> 
            <br>
        </div>
      </div>
      <div class="col-md-4">        
        <?php  $this->load->view('sidebar');?>
      </div>
    </div>
  </div>

</div>