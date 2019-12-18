<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<h1><?php bloginfo('name');?></h1>

<div class="nav">
<a href="<?php echo get_home_url(); ?>"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>\images\logos\inhabitent-logo-tent-white.svg" alt="site logo"/></a>
<!-- <a href="<?php echo get_home_url(); ?>"><img class="header-logo-2" src="<?php echo get_stylesheet_directory_uri(); ?>\images\logos\inhabitent-logo-tent-white.svg" alt="site logo"/></a> -->

<div class='nav-manu'>
<?php  wp_nav_menu (array('theme_location' => 'primary'))  ;?>
</div>

<section class="search">


<!-- <?php echo get_search_form();?> -->
</section>

</div>
