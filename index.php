<?php

get_header(); ?>

<body>
<a href="http://www./auto.viesa.tech.com"><button>Buttons aren't toys!</button></a>
</body>

<!-- side-content --> 
<div class="site-content clearfix">

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

<?php get_sidebar(); ?>

</div><!-- /site-content --> 



<?php get_footer();
?>
