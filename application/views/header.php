<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>asset/img/logo.png">
  <link rel="icon" type="image/png" href="asset/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Online Exam
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>asset/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->

  <link href="<?php echo base_url(); ?>asset/demo/demo.css" media="all" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>asset/js/main.js" type="text/javascript"  />
  <!-- js -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

   <!-- Compiled and minified CSS -->
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->

  <!-- Compiled and minified JavaScript -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
  
</head>

<body class="landing-page sidebar-collapse body">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url('/home'); ?>">
         <img src="<?php echo base_url();?>asset/img/logo.png" height="70px" width="70px"> Online Examination </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> ONLINE TEST
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?php echo base_url('home/technical');?>" class="dropdown-item">
                <i class="material-icons">layers</i> Technical
              </a>
              <a href="<?php echo base_url('home/nontechnical');?>" class="dropdown-item">
                <i class="material-icons">content_paste</i> Non-Technical
              </a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/about');?>">
              About Us
            </a>
          </li>
          <?php if( !empty($this->session->userdata('login_id')))
          {
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="" class="profile_img" src="<?php echo base_url(); ?>/asset/img/faces/avatar.jpg"> ME
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome! 
                  <?php 
                 $detail = $this->session->userdata('login_id'); 
                 $name = $detail[0]->username;
                 //echo "<pre>"; print_r($detail[0]);
                echo $name;?></h6>
              </div>
              <a href="<?php echo base_url(); ?>/profile" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="<?php echo base_url('home/logout');?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
          <?php }else{ ?>
          <li class="nav-item section-contacts">
            <a class="nav-link" href="<?php echo base_url('home/registration');?>" >
              Sign Up
            </a>
          </li>
          <li class="nav-item section-contacts">
            <a class="nav-link" href="<?php echo base_url('home/login');?>" >
              Login
            </a>
          </li>
          <?php } ?>
          <li class="nav-item section-contacts">
            <a class="nav-link" href="<?php echo base_url('home/contact');?>" >
              Contact
            </a>
          </li>
          <li class="nav-item">
            <form class="form-inline ml-auto">
                <div class="form-group has-white bmd-form-group">
                  <input type="text" id="search" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                    <i class="material-icons">search</i>
                </button>
            </form>
          </li>
        </ul>
      </div>

    </div>
  </nav>
