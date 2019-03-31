<footer class="site-footer">

<!-- footer-widgets --> 
div class="footer-widgets">

<?php dynamic_sidebar('footer1'); ?>

</div><!-- /footer-widgets --> 

<nav class="site-nav">
  <?php

$args = array(
  'theme_location' => 'footer');

?>

<?php wp_nav_menu($args); ?>
</nav>

<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>

</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>
