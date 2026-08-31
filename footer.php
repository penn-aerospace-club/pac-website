<footer id="contact">
	<div class="wrap">
		<div class="foot-top">
			<div class="foot-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo.png' ); ?>" alt="Aerospace Club at Penn logo" style="height:38px;">
					<span class="brand-text">Aerospace Club<span>at Penn</span></span>
				</a>
				<p style="max-width:32ch;font-size:.86rem;margin-top:18px;">University of Pennsylvania School of Engineering and Applied Science.</p>
			</div>
			<div class="foot-links">
				<div class="foot-col">
					<h4>Teams</h4>
					<a href="#">Leadership</a>
					<a href="#">Aircraft</a>
					<a href="#">High-Altitude Balloon</a>
					<a href="#">High-Powered Rocketry</a>
					<a href="#">Jet Propulsion</a>
				</div>
				<div class="foot-col">
					<h4>Connect</h4>
					<a href="mailto:pac@engineering.upenn.edu">pac@engineering.upenn.edu</a>
					<a href="https://www.instagram.com/pennaerospace/">Instagram</a>
					<a href="https://twitter.com/pennaerospace">Twitter</a>
					<a href="https://www.facebook.com/pennaero/">Facebook</a>
				</div>
			</div>
		</div>
		<div class="foot-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Aerospace Club at Penn</span>
			<span>Powered by a custom WordPress theme &mdash; not a purchased template</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
