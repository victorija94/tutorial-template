<?php

if (have_posts()) :
    while (have_posts()) : the post();

    <h2><?php the_title()?></h2>
<?php the_content() ?>

<?php endwhile;
else :
    echo '<p>Nocontent found</p>';
endif;

?>