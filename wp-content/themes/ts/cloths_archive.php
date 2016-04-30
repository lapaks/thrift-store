<?php if (have_posts()): ?>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry-content"><?php the_content(); ?></div>
	<?php endwhile; ?>
<?php else: ?>
	<h1 class="page-title">No Posts Found</h1>
<?php endif; ?>

test