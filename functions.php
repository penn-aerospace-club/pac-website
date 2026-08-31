<?php
/**
 * Aerospace Club at Penn — theme functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Basic theme support + nav menu registration
 */
function pac_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pac-theme' ),
	) );
}
add_action( 'after_setup_theme', 'pac_setup' );

/**
 * Styles + scripts
 */
function pac_assets() {
	// Google Fonts
	wp_enqueue_style(
		'pac-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	// Main theme stylesheet
	wp_enqueue_style( 'pac-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// GSAP + ScrollTrigger (for the scroll-driven rocket)
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
	wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array( 'gsap' ), '3.12.5', true );

	// Our rocket animation + mobile nav toggle
	wp_enqueue_script( 'pac-main', get_template_directory_uri() . '/js/rocket.js', array( 'gsap', 'gsap-scrolltrigger' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'pac_assets' );

/**
 * Fallback menu markup if no menu has been set yet in
 * Appearance -> Menus. Keeps the nav from breaking on first install.
 */
function pac_fallback_menu() {
	echo '<ul id="navlinks" class="navlinks">
		<li><a class="top-link" href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>
		<li><a class="top-link" href="#">Set up your menu in Appearance &rarr; Menus</a></li>
	</ul>';
}

/**
 * Custom walker: renders wp_nav_menu() output with the exact
 * markup/classes the theme CSS expects (top-link, caret, dropdown).
 *
 * To use: in Appearance -> Menus, add "Our Teams" as a top-level
 * item, then drag Leadership / Aircraft / Balloon / Rocketry /
 * Jet Propulsion underneath it as sub-items. Any top-level item
 * with children automatically gets the dropdown + caret.
 */
class PAC_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="dropdown">';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes     = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );

		$output .= '<li>';

		$link_class = ( 0 === $depth ) ? 'top-link' : '';
		$url        = ! empty( $item->url ) ? esc_url( $item->url ) : '#';

		$output .= '<a class="' . esc_attr( $link_class ) . '" href="' . $url . '">';
		$output .= esc_html( $item->title );
		if ( $has_children && 0 === $depth ) {
			$output .= ' <span class="caret"></span>';
		}
		$output .= '</a>';
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

/**
 * Optional: register a "Mission Log" custom post type.
 *
 * Not wired into front-page.php yet — the homepage currently
 * ships with the four achievements written directly into the
 * template so the site works immediately after install. Flip
 * this on (and update front-page.php to query it) once you're
 * ready to let non-coders add new mission log entries from
 * wp-admin instead of editing PHP. Same pattern works for an
 * "Officers" or "Sponsors" CPT.
 */
/*
function pac_register_mission_log_cpt() {
	register_post_type( 'mission_log', array(
		'labels' => array(
			'name'          => 'Mission Log',
			'singular_name' => 'Mission Log Entry',
		),
		'public'       => true,
		'has_archive'  => false,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-airplane',
		'supports'     => array( 'title', 'editor', 'thumbnail' ),
	) );
}
add_action( 'init', 'pac_register_mission_log_cpt' );
*/
