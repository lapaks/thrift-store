<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="/ts/stylesheets/styles.css" rel="stylesheet" />
<title>Soddy Daisy Thrift Store</title>
</head>
<body>
<?php get_header(); ?>

<div id="wrapper">
<div class="row">
<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
<?php 

//Define your custom post type name in the arguments
 
$args = array('post_type' => 'slider');
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
//Display the contents
 $count = 1;
while ( $loop->have_posts() ) : $loop->the_post();
?>
<?php if($count == 1) { ?>
	<div class="item active">
      <?php the_post_thumbnail(); ?>   
    </div>
    <?php } else { ?>
    <div class="item">
    <?php the_post_thumbnail(); ?>
    </div>
    <?php } ?>
<?php $count++; endwhile;?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
<h2><?php the_title(); ?></h2>
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
<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
<?php the_excerpt(); ?>
<?php   }  
} 
wp_reset_postdata();
?>






</div>


<?php /*$args = array('post_type'=>'acme_product','tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
    'relation' => 'AND',                      //(string) - Possible values are 'AND' or 'OR' and is the equivalent of ruuning a JOIN for each taxonomy
      array(
        'taxonomy' => 'category',                //(string) - Taxonomy.
        'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
        'terms' => array( 'kids','mens','misses'),    //(int/string/array) - Taxonomy term(s).
        'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
      ))); ?>
<?php $the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <article class="menulists">
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
  </article>
<?php endwhile;
endif;
// Reset Post Data
wp_reset_postdata();*/ ?>
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

<ul>
<h2>We Have</h2>
                        <?php wp_list_categories($args); ?>
                      </ul>

</div>
</div>
</div>
</div>

</div>



<?php get_footer(); ?>

</body>
</html>