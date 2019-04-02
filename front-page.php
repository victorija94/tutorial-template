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

<<<<<<< HEAD
// opinion posts loop begins here
$opinionPosts = new WP_Query('cat=5');

if ($opinionPosts->have_posts()) : 
=======
            while ($opinionPosts->have_posts()) :
                $opinionPosts->the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile;

        else:
            // fallback no content message here
        endif;
>>>>>>> 874fb35f547d9a74342136ab0d1ed601e4b9bb48

        ?>

    </div><!-- /site-content -->

<?php get_footer(); ?>