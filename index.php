  <?php get_header() ?>

  <div id="main">
    <div id="content">
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); 
    get_template_part('content', get_post_format());
        
     endwhile;
else:
    echo "";
endif; ?>

    </div>
    <!--./content-->
    <aside id="sidebar">
      <div class="block">
        <h2>Top Sidebar</h2>
        <p>
          Donec eu diam quam sed fermentum elementum ultrices aliquam erat volutpat. In gravida nunc a metus sodales egestas. Morbi aliquet metus ultricies cursus elementum.
        </p>
      </div>
      <!--./side1-->
      <div class="block">
        <h2>Mid Sidebar</h2>
        <p>
          Vivamus arcu est quam sed fermentum elementum ultrices aliquam erat volutpat. Vestibulum dolor dolor, tincidunt vitae augue semper, semper gravida neque pellentesque eleifend.
        </p>
      </div>
      <!--./side2-->
      <div class="block">
        <h2>Bottom Sidebar</h2>
        <p>
          Lorem ipsum dolor sit amet quam sed fermentum elementum ultrices aliquam erat volutpat. Proin porta ornare libero, eu aliquet tortor vestibulum sed.
        </p>
      </div>
         <div class="block">
        <h2>Bottom Sidebar</h2>
        <p>
          Lorem ipsum dolor sit amet quam sed fermentum elementum ultrices aliquam erat volutpat. Proin porta ornare libero, eu aliquet tortor vestibulum sed.
        </p>
      </div>
      <!--./side3-->
    </aside>
  </div>

  <?php get_footer();?>
  