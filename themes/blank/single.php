<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

    <?php get_sidebar(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
