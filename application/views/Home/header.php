<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MACE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?= base_url(); ?>resources/home/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="<?= base_url(); ?>resources/home/assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="<?= base_url(); ?>resources/home/assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?= base_url(); ?>resources/home/assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	
	
	

	
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?= base_url(); ?>resources/home/assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="<?php  echo base_url()?>">Home</a></li>
                     <li><a href="<?php  echo base_url('Home/digital_text')?>">Digital Text</a></li>
                    <li><a href="<?php  echo base_url('Home/login')?>">Sign In</a></li>
                     <li><a href="<?php  echo base_url('Home/about')?>">About Us</a></li>
                     <li><a href="<?php  echo base_url('Home/contact')?>">Contact Us</a></li>
                </ul>
            </div>
           
        </div>
    </div>