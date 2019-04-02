<?php get_header(); ?>
    <!-- site-content -->
    <div class="site-content clearfix">

        <h3>Custom HTML Here!</h3>

        <?php if (have_posts()) :
            while (have_posts()) : the_post();

                the_content();

            endwhile;
        else:
            echo '<p>No content found</p>';
        endif;

        // opinion posts loop begins here
        $opinionPosts = new WP_Query('cat=5&posts_per_page=2');

        if ($opinionPosts->have_posts()) :

            while ($opinionPosts->have_posts()) :
                $opinionPosts->the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile;

        else:
            // fallback no content message here
        endif;
        wp_reset_postdata();

        // news posts loop begins here
        $newsPosts = new WP_Query('cat=18&posts_per_page=2');

        if ($newsPosts->have_posts()) :

            while ($newsPosts->have_posts()) : $newsPosts->the_post(); 
            ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile;

        else:
            // fallback no content message here
        endif;
        wp_reset_postdata();

        ?>

    </div><!-- /site-content -->

<?php get_footer();

?>