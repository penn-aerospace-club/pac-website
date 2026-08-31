<?php get_header(); ?>

<main id="main">
	<?php while ( have_posts() ) : the_post(); ?>

		<section class="page-hero">
			<div class="wrap">
				<span class="eyebrow mono" style="color:var(--pac-blue);"><span class="dot" style="display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--pac-blue);"></span> <?php echo esc_html( get_the_date() ); ?></span>
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

		<section class="page-content">
			<div class="wrap" style="max-width:760px;">
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
