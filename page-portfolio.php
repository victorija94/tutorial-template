<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page ">
    
       <?php the_content(); ?>
    </article>
    <?php endwhile;

    else:
        echo "";
    endif;


    get_footer();
?>
