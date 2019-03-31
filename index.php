<?php

get_header(); ?>

<!-- main-column --> 
<div class="main-column">

<?php if (have_posts()) :
    while (have_posts()) : the_post(); 

    get_template_part('content', get_post_format());

        
     endwhile;

else:
    echo "";
endif; ?>

</div><!-- /main-column --> 

<!-- secondary-column -->
<div class="secondary-column">
     <p>This is the sidebar. </p>
</div><!--/secondary-column --> 



<?php get_footer();
?>
