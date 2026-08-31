<?php get_header(); ?>

<main id="main">

	<!-- HERO -->
	<section class="hero" id="top">
		<div class="hero-bg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/hero-bg.jpg' ); ?>');"></div>
		<div class="hero-grid"></div>

		<div class="rocket-track"></div>
		<svg id="rocket" viewBox="0 0 64 140" xmlns="http://www.w3.org/2000/svg">
			<path d="M32 2c10 14 15 34 15 56v34l-15 10-15-10V58C17 36 22 16 32 2z" fill="#EAEDF5"/>
			<path d="M32 2c10 14 15 34 15 56v34l-15 10V2z" fill="#C3CBDD"/>
			<circle cx="32" cy="46" r="9" fill="#5EC8E8" stroke="#011F5B" stroke-width="2"/>
			<path d="M17 70c-10 2-14 12-14 26l14-8z" fill="#990000"/>
			<path d="M47 70c10 2 14 12 14 26l-14-8z" fill="#990000"/>
			<path d="M25 102h14l-3 14a4 4 0 0 1-8 0z" fill="#8B95AE"/>
			<ellipse id="flame" cx="32" cy="122" rx="7" ry="16" fill="#FFB84D" opacity="0.95"/>
		</svg>

		<div class="wrap hero-content">
			<span class="eyebrow mono"><span class="dot"></span>SEAS STUDENT ORG &middot; EST. REINSTATED 2023</span>
			<h1>Building the next generation of <em>aerospace</em> engineers.</h1>
			<p class="lede">The University of Pennsylvania's student community of aerospace engineers, researchers, and enthusiasts — across rocketry, high-altitude balloons, jet propulsion, and aircraft design.</p>
			<div class="hero-ctas">
				<a href="#" class="btn btn-primary">Join the Club &rarr;</a>
				<a href="#teams" class="btn btn-ghost">See Our Teams</a>
			</div>

			<div class="hero-stats">
				<div><div class="num">150+</div><div class="lbl">Active members</div></div>
				<div><div class="num">4</div><div class="lbl">Sub-teams</div></div>
				<div><div class="num">12,489 ft</div><div class="lbl">2024 rocket apogee</div></div>
				<div><div class="num">#4 / 150</div><div class="lbl">AIAA DBF ranking</div></div>
			</div>
		</div>
	</section>

	<!--
		MISSION LOG
		Static for now — see the commented-out pac_register_mission_log_cpt()
		in functions.php for how to turn this into a WP_Query loop so
		future officers can add entries from wp-admin instead of editing this file.
	-->
	<section class="log" id="teams">
		<div class="wrap">
			<div class="section-head" style="color:#fff;">
				<span class="eyebrow-line" style="color:var(--pac-blue);">Mission Log</span>
				<h2>Our teams fly high.</h2>
				<p style="color:#B7BFD3;">We're divided into four sub-teams — High-Powered Rocketry, High-Altitude Balloon, Jet Propulsion, and Aircraft — each running real hardware programs, not simulations.</p>
			</div>

			<div class="log-entry">
				<div class="log-meta">
					<div class="tag">High-Powered Rocketry</div>
					<div class="stat">12,489 ft</div>
					<div class="date">SPACEPORT AMERICA CUP — JUN 2024</div>
				</div>
				<div class="log-body">
					<h3>First competitive launch since the club's reinstatement</h3>
					<p>12 of 20 team members traveled to compete. As a rookie team, they landed with no damage and outperformed roughly 25 schools — connecting with students and professionals from 10+ programs along the way.</p>
				</div>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/mission-rocketry.jpg' ); ?>" alt="High-Powered Rocketry team">
			</div>

			<div class="log-entry">
				<div class="log-meta">
					<div class="tag">High-Altitude Balloon</div>
					<div class="stat">5 payloads</div>
					<div class="date">POTTSTOWN, PA — NOV 2024</div>
				</div>
				<div class="log-body">
					<h3>First flight of five new engineering projects</h3>
					<p>A custom-built payload, two solar panels, a team-developed weather-prediction ML model, a sample drawer of plant seeds, and an expanded suite of weather sensors — all launched from Warwick County Park.</p>
				</div>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/mission-balloon.jpg' ); ?>" alt="High-Altitude Balloon team">
			</div>

			<div class="log-entry">
				<div class="log-meta">
					<div class="tag">Jet Propulsion</div>
					<div class="stat">3.5 T/W</div>
					<div class="date">COMPLETED — APR 2025</div>
				</div>
				<div class="log-body">
					<h3>Fully custom axial micro-turbojet engine</h3>
					<p>The first of its kind entirely developed by undergraduates — every major component designed in house, most parts manufactured internally, and final assembly conducted entirely by the student team.</p>
				</div>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/mission-jet.jpg' ); ?>" alt="Jet Propulsion micro-turbojet">
			</div>

			<div class="log-entry">
				<div class="log-meta">
					<div class="tag">Aircraft</div>
					<div class="stat">Rank #4</div>
					<div class="date">AIAA DESIGN BUILD FLY — PRELIM</div>
				</div>
				<div class="log-body">
					<h3>Fourth place worldwide, first year competing</h3>
					<p>Our newest team designed and built multiple R/C aircraft, ranking 4th of over 150 teams on their preliminary report ahead of the coming fly-off.</p>
				</div>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/mission-aircraft.jpg' ); ?>" alt="Aircraft team">
			</div>
		</div>
	</section>

	<!-- SUB-TEAMS GRID -->
	<section>
		<div class="wrap">
			<div class="section-head">
				<span class="eyebrow-line">Get Involved</span>
				<h2>Four teams, one club.</h2>
				<p>As the primary aerospace-focused group on campus, PAC brings together the best aerospace talent Penn has to offer — and keeps growing every semester.</p>
			</div>
			<div class="teams-grid">
				<div class="team-card">
					<div><span class="idx">01</span><h3>High-Powered Rocketry</h3><p>Design, build, and launch competition-class rockets — culminating each year at the Spaceport America Cup.</p></div>
					<span class="go">View team &rarr;</span>
				</div>
				<div class="team-card">
					<div><span class="idx">02</span><h3>High-Altitude Balloon</h3><p>Near-space payloads: custom sensor suites, solar power, and onboard ML — recovered and re-flown.</p></div>
					<span class="go">View team &rarr;</span>
				</div>
				<div class="team-card">
					<div><span class="idx">03</span><h3>Jet Propulsion</h3><p>In-house designed and machined micro-turbojet engines, built from the ground up by students.</p></div>
					<span class="go">View team &rarr;</span>
				</div>
				<div class="team-card">
					<div><span class="idx">04</span><h3>Aircraft</h3><p>R/C aircraft design and fabrication, competing in the AIAA Design Build Fly competition.</p></div>
					<span class="go">View team &rarr;</span>
				</div>
			</div>
		</div>
	</section>

	<!-- WHAT WE OFFER -->
	<section class="offer">
		<div class="wrap">
			<div class="section-head" style="color:#fff;">
				<span class="eyebrow-line" style="color:var(--pac-blue);">Why Join</span>
				<h2>What we offer</h2>
			</div>
			<div class="offer-grid">
				<div class="offer-card"><div class="n mono">EXPERIENCE</div><h3>Real hardware, real deadlines</h3><p>Real-world engineering skills and project management experience — not simulations.</p></div>
				<div class="offer-card"><div class="n mono">COMMUNITY</div><h3>150+ member network</h3><p>Full access to our alumni network, industry connections, and professional development events.</p></div>
				<div class="offer-card"><div class="n mono">OPPORTUNITIES</div><h3>Sponsors &amp; mentorship</h3><p>Corporate sponsorship relationships and alumni mentorship opportunities across the aerospace industry.</p></div>
			</div>
		</div>
	</section>

	<!-- SPONSORS -->
	<section id="sponsors">
		<div class="wrap">
			<div class="section-head">
				<span class="eyebrow-line">Our Sponsors</span>
				<h2>Interested in partnering with us?</h2>
				<p>Visit our sponsorship page for tiers, benefits, and past partners.</p>
			</div>
			<div class="sponsors-row">
				<div class="sponsor-slot">SPONSOR LOGO</div>
				<div class="sponsor-slot">SPONSOR LOGO</div>
				<div class="sponsor-slot">SPONSOR LOGO</div>
				<div class="sponsor-slot">SPONSOR LOGO</div>
				<div class="sponsor-slot">SPONSOR LOGO</div>
			</div>
		</div>
	</section>

	<!-- TESTIMONIALS -->
	<section style="padding-top:0;">
		<div class="wrap">
			<div class="section-head">
				<span class="eyebrow-line">Alumni &amp; Members</span>
				<h2>Passionate alumni and students</h2>
			</div>
		</div>
		<div class="quotes">
			<div class="quote">
				<p class="q">"PAC has far-and-away been my best opportunity to garner real-world engineering experience at Penn."</p>
				<div class="who">Jacob Platin — Former Director</div>
			</div>
			<div class="quote">
				<p class="q">"As a lifelong aviation enthusiast, PAC has given me an incredible opportunity to work with and lead alongside some of the most inspiring students, faculty, and industry leaders I have ever met."</p>
				<div class="who">Benjamin Chan — Former Director</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
