<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip-link">Skip to content</a>

<header>
	<nav class="wrap">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
			<?php
			// Swap this for a Media Library logo once you upload it,
			// or better: use Appearance -> Customize -> Site Identity
			// and pull it dynamically with get_custom_logo(). Hardcoded
			// here for now so the nav works immediately.
			?>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo.png' ); ?>" alt="Aerospace Club at Penn logo">
			<span class="brand-text">Aerospace Club<span>at Penn</span></span>
		</a>

		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul id="navlinks" class="navlinks">%3$s</ul>',
			'walker'         => new PAC_Nav_Walker(),
			'fallback_cb'    => 'pac_fallback_menu',
		) );
		?>
		<button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">&#9776;</button>
	</nav>
</header>
