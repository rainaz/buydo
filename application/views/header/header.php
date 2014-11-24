<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  <!--<![endif]-->
  <!-- Head BEGIN -->
  <head>
    <meta charset="utf-8">
    <title>Buydo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles START -->
  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/global/plugins/slider-layer-slider/css/layerslider.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url(); ?>assets/global/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/frontend/pages/css/style-layer-slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/layout/css/themes/blue.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url(); ?>assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/buydo/buydo-style.css" rel="stylesheet">

  </head>
  <!-- Head END -->

  <?php 
    $is_login = FALSE;
    if($this->session->userdata('user_id')!=''){
      $is_login = TRUE;
    }
    if (empty($template_type)) {
      $template_type = "ecommerce";
    }

  ?>

  <!-- Body BEGIN -->
  <body class="<?php echo $template_type; ?>">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
      <div class="container">
        <div class="row">
          <!-- BEGIN TOP BAR LEFT PART -->
          <div class="col-md-6 col-sm-6 additional-shop-info">
            <ul class="list-unstyled list-inline">
              <li> 
                <?php 
                  if($is_login) echo "Hi ".$this->session->userdata('user_name')."! ";
                ?>
                Welcome to <strong>Buydo.com</strong> 
              </li>
              
              <!--                         <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
              <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
            -->                    
            </ul>
          </div>
          <!-- END TOP BAR LEFT PART -->
          <!-- BEGIN TOP BAR MENU -->
          <div class="col-md-6 col-sm-6 additional-nav">
            <ul class="list-unstyled list-inline pull-right">
              <?php if($is_login==FALSE){ ?>

              <li><a href="<?php echo site_url('user/login'); ?>">Log In</a></li>
              <li><a href="<?php echo site_url('user/register'); ?>">Registration</a></li>
              <?php }else{ ?>
              <li><a href="<?php echo site_url('user/myAccount'); ?>">My Account</a></li>
              <li><a href="<?php echo site_url('user/systemComplain'); ?>">Complain</a></li>
              <li><a href="<?php echo site_url('user/showAllUser'); ?>">View User Feedback</a></li>


              <li><a href="<?php echo site_url('user/logout'); ?>">Log Out</a></li>
              <?php } ?>
            </ul>
          </div>
          <!-- END TOP BAR MENU -->
        </div>
      </div>
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
                  <form role="form" id="search" method="get" action="<?php echo site_url('item/searchItem'); ?>"> 
      <div class="container">
        <a class="site-logo" href="/buydo/"><img src="/buydo/assets/images/logo.jpg" alt="Buydo"></a>
        <div class="input-group" style="padding:20px; padding-right:0px;">
              <input type="text" class="form-control" placeholder="Search..." name="search_string">
              <span class="input-group-btn">
                              <a href="javascript:{}" onclick="document.getElementById('search').submit();" class="btn btn-icon-only blue">
                              <i class="fa fa-search"></i>
                              </a>              </span>
            </div>
            <!-- /input-group -->
        <!-- END NAVIGATION -->
      </form>
      </div>
    </div>
    <!-- Header END -->