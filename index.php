<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

 

    <?php endwhile;

    else:
        echo "";
    endif;


    get_footer();
?>
