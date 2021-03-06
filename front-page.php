<?php get_header(); ?>
    <!-- site-content -->
    <div class="site-content clearfix">

        <h3>Custom HTML Here!</h3>

        <?php if (have_posts()) :
            while (have_posts()) : the_post();

get_template_part('content', get_post_format());
        

            endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>

        <!--home-columns -->
        <div class="home-columns clearfix">

        <!--one-half -->
        <div class ="one-half">
        <?php // opinion posts loop begins here
        $opinionPosts = new WP_Query('cat=5&posts_per_page=2');

        if ($opinionPosts->have_posts()) :

            while ($opinionPosts->have_posts()) :
                $opinionPosts->the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <?php the_excerpt(); ?>
           
           <a href="<?php the_permalink(); ?>"><button>Read more&raquo;</button></a>
     
        
            <?php endwhile;

        else:
            // fallback no content message here
        endif;
        wp_reset_postdata(); ?>
        </div><!-- /one-half -->

        <!--one-half -->
        <div class="one-half last">
        <?php // news posts loop begins here
        $newsPosts = new WP_Query('cat=10&posts_per_page=2');

        if ($newsPosts->have_posts()) :

            while ($newsPosts->have_posts()) : $newsPosts->the_post(); 
            ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <?php the_excerpt(); ?>
            <?php endwhile;

        else:
            // fallback no content message here
        endif;
        wp_reset_postdata();

        ?>

</div><!-- /one-half -->
        </div><!--/home-columns -->


    </div><!-- /site-content -->

<?php get_footer();

?>
