<?php get_header(); ?>

<main id="main">
	<section class="page-content">
		<div class="wrap" style="max-width:760px;">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article style="margin-bottom:56px;">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="mono" style="font-size:.8rem;color:var(--ink-soft);"><?php echo esc_html( get_the_date() ); ?></p>
						<div><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>

				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<p>Nothing here yet.</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
