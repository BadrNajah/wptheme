<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/momomac.ico">  
</head>
     <?php wp_head(); ?>
<body <?php body_class(); ?> >

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri().'/img/logo.png';  ?>"  class = "logo-image img-responsive" alt="logo image">
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">

                <?php
                  $arr= array(
                      'menu'       => 'header',
                      'menu_class' => 'nav navbar-nav navbar-right',
                      'container'  => 'ul',
                    );
                    wp_nav_menu($arr);
                 ?>
    </div>
  </div>
</nav>


