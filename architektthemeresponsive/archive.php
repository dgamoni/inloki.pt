<?php get_header(); ?>
<h3 class="top_title">
        <?php if (is_category()) { ?>
              <?php single_cat_title(); ?>
        <?php } elseif( is_tag() ) { ?>
              <?php single_tag_title(); ?>
        <?php } elseif (is_day()) { ?>
              <?php the_time('F jS, Y'); ?>
        <?php } elseif (is_month()) { ?>
              <?php the_time('F, Y'); ?>
        <?php } elseif (is_year()) { ?>
              <?php the_time('Y'); ?>
        <?php } elseif (is_author()) { ?>
              Author Archive
        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              Blog Archives
        <?php } ?>   
    </h3>
    <div class="home_port_cont archive_cont">
    
    <?php
    global $wp_query;
        
    $args = array_merge( $wp_query->query, array( 'posts_per_page' => -1 ) );    
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>
      
      <?php if($x == 2) { ?>
      <div class="home_port_box home_port_box_last">
      <?php } elseif($x == 1) { ?>
      <div class="home_port_box home_second_port_box">      
      <?php } else { ?>
      <div class="home_port_box">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-portfolio'); ?></a>
		 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div><!--//home_port_box-->
      
      <?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>
    <?php $x++; ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>    
      
      <div class="clear"></div>      
    </div><!--//home_port_cont-->
    
<?php get_footer(); ?>    