<?php
/*
  Template Name: Portfolio
*/
?>

<?php get_header(); ?>

    <div id="single_container">
    
      <div id="port_cont">
      <?php
      $args = array(
                   'category_name' => 'portfolio',
                   'post_type' => 'post',
                   'posts_per_page' => 6,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
      query_posts($args);
      $x = 0;
      $port_counter = 0;
      while (have_posts()) : the_post(); ?>                
              
        <?php if($x == 2) { ?>
        
            <?php if($port_counter == 1) { ?>
                <div class="port_box port_box_last port_box_right">            
            <?php } else { ?>
                <div class="port_box port_box_last">            
            <?php } ?>

        <?php } else { ?>
        
            <?php if($port_counter == 1) { ?>
                <div class="port_box port_box_right">            
            <?php } else { ?>
                <div class="port_box">            
            <?php } ?>
            
        <?php } ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-port-listing'); ?></a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div><!--//port_box-->      
        
        <?php if($x == 2) { echo '<div class="clear"></div><div class="port_box_divider"></div>'; $x = -1; }
         if($port_counter == 1) { echo '<div class="port_clear"></div>'; $port_counter = -1; } ?>
      
      <?php $x++; ?>
      <?php $port_counter++; ?>
      <?php endwhile; ?>      
      </div><!--//port_cont-->
      <div class="clear"></div>
      <div class="navigation">
        <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
        <div class="right"><?php next_posts_link('Next &raquo;') ?></div>
        <div class="clear"></div>
      </div><!--//nagivation-->        
      <?php wp_reset_query(); ?>                  
      
      <div class="clear"></div>
      
    </div><!--//single_container-->
    
<?php get_footer(); ?>    