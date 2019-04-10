<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div>
			<a href="index.html"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<form action="index.html">
			<input type="text" value="Search from our 10,000+ Recipes around the world" id="search">
			<input type="submit" value="" id="searchbtn">
		</form>
	</div>
	<div class="body">
		<div>
			<div class="header">
				
		<?php get_header(); ?>


   <?php if (have_posts()) :
    while (have_posts()) : the_post(); 
    get_template_part('content', get_post_format());
        
	 endwhile;
	else:
		echo "";
	endif; ?>

   </div><!-- /main-column --> 

   <?php get_sidebar(); ?>

   </div><!-- /site-content -->
	
	
	   <?php get_footer();
	     ?>
			<div class="body">
		
			
					
			<div class="footer">
					
	         </div>
	  <div class="footer">
			
	</div>
</body>
</html>