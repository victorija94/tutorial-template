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
        $opinionPosts = new WP_Query('cat=5');

        if ($opinionPosts->have_posts()) :

// opinion posts loop begins here
$opinionPosts = new WP_Query('cat=5');

if ($opinionPosts->have_posts()) : 

        ?>

    </div><!-- /site-content -->

<?php get_footer(); ?>