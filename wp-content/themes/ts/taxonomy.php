<?php get_header();?>
<?php /* Template Name: Example Template */ ?>
<?php get_header(); ?>

<div id="wrapper">
  <div class="row">
    <div class="container">
   
      <?php if (have_posts()): ?>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
	   <div class="col-sm-3" style="float:left; margin-right:10px; border:1px solid #9BD252;">
    	<h4 class="entry-title"><?php the_title(); ?></h4>
       	<figure><?php the_post_thumbnail();?></figure>
		<?php the_content(); ?>
</div>
	<?php endwhile; ?>
<?php else: ?>
	<h1 class="page-title">No Posts Found</h1>
<?php endif; ?>

      </div>
      </div>
      
        
</div>
<?php get_footer();?>