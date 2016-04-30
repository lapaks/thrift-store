<?php get_header(); ?>

<div id="wrapper">
  <div class="row">
    <div class="container">
      <div id="main" class="col-sm-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="content-main">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php
// The Query
$the_query = new WP_Query( array('page_id'=>18) );
// The Loop
if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php the_post_thumbnail(); ?>
        <?php the_excerpt(); ?>
        <?php   }  
} 
wp_reset_postdata();
?>
      </div>
      <div class="col-sm-4">
        <?php
// The Query
$the_query = new WP_Query( array('page_id'=>22) );
// The Loop
if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php the_post_thumbnail(); ?>
        <?php the_excerpt(); ?>
        <?php   }  
} 
wp_reset_postdata();
?>
      </div>
      <div class="col-sm-4 category_list">
        <?php
					//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
					$orderby = 'name';
					$show_count = 1; // 1 for yes, 0 for no
					$pad_counts = 1; // 1 for yes, 0 for no
					$hierarchical = 1; // 1 for yes, 0 for no
					$taxonomy = 'cloths_categories';
					$title = '';
					
					$args = array(
					  'orderby' => $orderby,
					  'show_count' => $show_count,
					  'pad_counts' => $pad_counts,
					  'hierarchical' => $hierarchical,
					  'taxonomy' => $taxonomy,
					  'title_li' => $title
					);
					?>
        <ul class="listcategories">
          <h2	>We Have</h2>
          <?php wp_list_categories($args); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
