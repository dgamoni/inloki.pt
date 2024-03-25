<?php get_header(); ?>







    <div id="slider_container">



	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/prev-arrow.png" class="slide_prev_new" />
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/next-arrow.png" class="slide_next_new" />



          <div id="slideshow">



          



          <?php


	$slider_arr = array();
          $args = array(



                       //'category_name' => 'blog',



                       'post_type' => 'post',



                       'meta_key' => 'ex_show_in_slideshow',



                       'meta_value' => 'Yes',



                       'posts_per_page' => 10,



                       'orderby' => 'ID'



                       //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),



                       );



          $x = 0;



          query_posts($args);



          while (have_posts()) : the_post(); ?>



          



          <?php if($x == 0) { ?>



          



          <a href="<?php the_permalink(); ?>" class="active"><?php the_post_thumbnail('featured-slideshow',array('alt' => '', 'class' => 'slide_img', 'title' => '')); ?></a>



          



          <?php } else { ?>



          



          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-slideshow',array('alt' => '', 'class' => 'slide_img', 'title' => '')); ?></a>



          



          <?php } ?>



          


	<?php array_push($slider_arr,get_the_ID()); ?>
          <?php $x++; ?>



          <?php endwhile; ?>



          <?php wp_reset_query(); ?>          



<!--            <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slide-image.png" />



            <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slide-image.png" />



            <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slide-image.png" />-->



          </div>



      



    </div><!--//slider_container-->            



    



    <?php



    $args = array(



                 'category_name' => 'blog',
		 'post__not_in' => $slider_arr,



                 'post_type' => 'post',



                 'posts_per_page' => 3



                 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),



                 );



    query_posts($args);



    $x = 0;



    while (have_posts()) : the_post(); ?>



    



    <?php if($x == 2) { ?>



    <div class="home_blog_box home_blog_box_last">



    <?php } elseif($x == 1) { ?>



    <div class="home_blog_box home_second_blog_box gary_ie11">



    <?php } else { ?>



    <div class="home_blog_box gary_ie11">



    <?php } ?>



      <a href="<?php the_permalink(); ?>">
          <?php //the_post_thumbnail('featured-blog'); ?>
          <?php the_post_thumbnail( array( 306, 350, 'bfi_thumb' => true ) ); ?>
      </a>



      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>



    </div><!--//home_blog_box-->    







    <?php $x++; ?>



    <?php endwhile; ?>



    <?php wp_reset_query(); ?>



    



    <div class="clear"></div>



    



    <div class="home_port_cont">



    



    <?php
	$category_ID = get_category_id('blog');


    $args = array(



                



                 'post_type' => 'post',
		 'post__not_in' => $slider_arr,
		'cat' => '-' . $category_ID,


                 'posts_per_page' => 3


                 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),



                 );



    query_posts($args);



    $x = 0;



    while (have_posts()) : the_post(); ?>



      



      <?php if($x == 2) { ?>



      <div class="home_port_box home_port_box_last">



      <?php } elseif($x == 1) { ?>



      <div class="home_port_box home_second_port_box">      



      <?php } else { ?>



      <div class="home_port_box gary_ie11">



      <?php } ?>



        <a href="<?php the_permalink(); ?>">
          <?php //the_post_thumbnail('featured-portfolio'); ?>
          <?php the_post_thumbnail( array( 306, 350, 'bfi_thumb' => true ) ); ?>
        </a>



		 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>



      </div><!--//home_port_box-->



      



      <?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>







    <?php $x++; ?>



    <?php endwhile; ?>



    <?php wp_reset_query(); ?>    



      



      <div class="clear"></div>      



    </div><!--//home_port_cont-->


<?php get_template_part( 'templates/home', 'map' ); ?>
    



<?php get_footer(); ?>    