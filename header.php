<html>
    <head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    </head>
<body>
<div id="output_width">
</div>
<!--Widow width inserted here-->
<div id="container">

  <header class="main-header">
    <img id="logo" src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo3.png" alt="Responsive Design" />
    <nav class="main-nav">
<?php
    $args = array('theme_location' => 'primary');
?>
     <?php wp_nav_menu($args); ?>

    </nav>
    <!--./main-nav-->
  </header>
  <!--./main-header-->

  <nav class="site-nav">

  </header><!-- /site-header --> 