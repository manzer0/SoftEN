<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/blog.css" type="text/css" />


        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.min.js"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
                <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<style type="text/css">
        body {
             background-image: url("<?php echo base_url(); ?>/images/bg-thai.jpg");
             background-attachment: fixed;
        }
        </style>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js" type="text/javascript"></script>
        <script src="js/respond.min.js" type="text/javascript"></script>
        <![endif]-->
        <title><?php echo $title; ?></title>


    </head>

    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                  <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/images/thekeeper.png" alt=""/></a>
                    <a class="blog-nav-item active" href="<?php echo base_url(); ?>">หน้าหลัก</a>
                    <a class="blog-nav-item active" href="<?php echo base_url(); ?>/product">สินค้า</a>
                    <a class="blog-nav-item active" href="<?php echo base_url(); ?>/cart">ตะกร้าสินค้า<span class='badge badge-success icon icon-octoface'>test</span></a>

                </nav>
            </div>
        </div>
