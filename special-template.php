<?php

/*
Template Name: Special Layout
*/

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page ">
       <h2><?php the_title(); ?></h2>

       <!-- info-box -->
       <div class="info-box">
         <h4>Disclaimer Title</h4>
         <p>Skopje is Macedonia’s capital city and cultural hub – a stopover point that merits a minimum of a couple of days.</p>

       </div><!-- /info-box -->

       <?php the_content(); ?>
    </article>
    <?php endwhile;

    else:
        echo "";
    endif;


    get_footer();
?>
