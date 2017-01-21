<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewBorn</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/assets/front_end/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('/assets/front_end/css/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/jquery.bxslider.css'); ?>">
	<link href="<?php echo base_url('assets/front_end/css/style.css'); ?>" rel="stylesheet">
    <!-- =======================================================
        Theme Name: MeFamily
        Theme URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head 
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><span>NewBorn</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"  class="active"><a href="<?php echo base_url('welcome'); ?>">Home</a></li>
						<li role="presentation"><a href="<?php echo base_url('welcome/ourstory_request'); ?>">Our Story</a></li>
						<li role="presentation"><a href="<?php echo base_url('welcome/events_request'); ?>">Events</a></li>
						<li role="presentation"><a href="<?php echo base_url('welcome/gallery_request'); ?>">Gallery</a></li>
						<li role="presentation"><a href="<?php echo base_url('welcome/contact_request'); ?>">Contact</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</nav>
