<link href="/ts/stylesheets/styles.css" rel="stylesheet" />
<div class="container">
<div class="row">
<div class="col-sm-8 oneline">
   <?php
// The Query
$the_query = new WP_Query( array('page_id'=>71) );
// The Loop
if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

      <?php the_content(); ?>
<?php   }  
} 
wp_reset_postdata();
?>
</div>
<div class="col-sm-4">

</div>

<div class="col-sm-12 copyright">
Copyright © 2010-<?php echo date("Y");?> Soddy Daisy Thrift Store. All rights reserved.
</div>

</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

</footer>