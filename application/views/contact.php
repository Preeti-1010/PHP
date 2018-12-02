<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>asset/img/contact.png')">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h1 class="title" style="text-align: right; margin-bottom: 200px">We are here <br> to <br> Answer your Questions..</h1>
        </div>
      </div>
    </div>
  </div>

  <iframe src="http://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="100%" height="400" frameborder="0" style="border:0"></iframe>    

  <div class="main main-raised">
    <div class="contact-content">
        <div class="container">
            <h2 class="title">Send us a message</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
                    </p>
                    <form role="form" id="contact-form" method="post" action="<?= base_url('/home/contact');?>">
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
                        <div class="form-group bmd-form-group">
                            <label for="name" class="bmd-label-floating">Your name</label>
                            <input type="text" name="c_name" class="form-control" id="name">
                            <?php echo form_error('c_name'); ?>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                            <input type="email" name="c_email" class="form-control" id="exampleInputEmails">
                            <?php echo form_error('c_email'); ?>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="phone" class="bmd-label-floating">Phone</label>
                            <input type="text" class="form-control" name="c_phone" id="phone">
                             <?php echo form_error('c_phone'); ?>
                        </div>
                        <div class="form-group label-floating bmd-form-group">
                            <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                            <textarea class="form-control" rows="6" name="c_msg" id="message"></textarea>
                             <?php echo form_error('c_msg'); ?>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" class="btn btn-primary btn-raised btn-round" name="contact" value="Contact Us">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 ml-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Find us at the office</h4>
                            <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                7652 Bucharest,<br>
                                Romania
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Give us a ring</h4>
                            <p> Michael Jordan<br>
                                +40 762 321 762<br>
                                Mon - Fri, 8:00-22:00
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Legal Information</h4>
                            <p> Creative Tim Ltd.<br>
                                VAT · EN2341241<br>
                                IBAN · EN8732ENGB2300099123<br>
                                Bank · Great Britain Bank
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>