<?php get_header();?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-content"><?php the_content(); ?></div>
		<figure><?php the_post_thumbnail();?></figure>
	<?php endwhile; ?>
<?php else: ?>
	<h1 class="page-title">No Posts Found</h1>
<?php endif; ?>

<?php

$prefix_posts = new WP_Query(
	array(
		'tax_query' => array(
			array(
				'taxonomy' => 'cloths_categories',
				'field'    => 'slug',
				'terms'    => array(
					'branding',
				),
			),
		),
	)
);


?>
<?php get_sidebar();?>
<?php get_footer();?>