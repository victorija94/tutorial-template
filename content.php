      <!--./art1-->
      <article class="art1">
        <header class="art-header">
          <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span>Created by: Brad Traversy on October 3, 2013</span>
        </header>
        <!--./art-header-->
       <?php the_content(); ?>
        <a class="readmore" href="<?php the_permalink(); ?>">Read more</a>
      </article>
      <!--./art1-->