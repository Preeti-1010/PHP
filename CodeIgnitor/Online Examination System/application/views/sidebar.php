<div class="main-right">
     <p id="msg" style="display: none;"><?php $success_msg =$this->session->flashdata('success_msg');
         if($success_msg){ 
                echo $success_msg;
                        }
         else{
           $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }   
            }
        ?></p>
            <div class="col-md-12 ml-auto mr-auto">
                                <div class="text-center">
                                    <h3 class="title">Subscribe to our Newsletter</h3>
                                    <p class="description">
                                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                                    </p>
                                </div>
                                <div class="card card-raised card-form-horizontal">
                                    <div class="card-body ">
                                        <form method="post"  action="<?= base_url('home/news_letter');?>">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 ">
                                                    <span class="bmd-form-group"><div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">mail</i>
                                                            </span>
                                                        </div>
                                                
                                                        <input type="email"  name ="email" value="" placeholder="Your Email..." class="form-control">
                                                        <?php echo form_error('email'); ?>
                                                    </div></span>
                                                </div>
                                                <div class="col-lg-12 col-md-6 ">
                                                    <button type="submit" class="btn btn-primary btn-block" name ="side" onclick="showDiv();">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
            </div>
</div>

<script>
    $().ready(function){
        $("#side").validate(){
            rules:{
                email: "required",
            }
        }

    }

    function showDiv() {
        document.getElementById('msg').style.display = "block";
    }
</script>