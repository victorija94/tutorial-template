<?php

get_header();

if(have_posts()) : 

?>

<h2><?php 

if ( is_category()) {
    echo 'This is a category';
} elseif (is_tag() ) {
    echo 'Tag';
} elseif (is_author() ) {
    echo 'Author';
} elseif ( is_day() ) {
    echo 'Day archive';
} elseif (is_month() ) {
    echo 'Month';
} elseif ( is_year() ) {
    echo 'Year';
} else {
    echo 'Archives:';
}

 ?></h2>

<?php

    while (have_posts()) : the_post(); ?>

    <article class="post">
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); 
?> "><?php the_author(); ?></a> | Posted in 

<?php

$categories = get_the_category();
$separator = ", ";
$output = '';

if ($categories) {

foreach ($categories as $category) {

$output .= '<a href="' . get_category_link($category->term_id) . '">' . 
$category->cat_name . '</a>'  . $separator;

}

echo trim($output, $separator);

}

?>

 </p>

       <?php the_content(); ?>
    </article>
    <?php endwhile;

    else:
        echo "";
    endif;


    get_footer();
?>
