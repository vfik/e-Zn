<?php
/**
 * Template Name: Product Application
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

<!-- Begin Page Content -->

<div class="application-slider">
	<div class="container-fluid">
		<div class="row appRow">
			<div class="col-md-4 appCol island">
			</div>
			<div class="col-md-4 appCol solar">
			</div>
			<div class="col-md-4 appCol mountain">
			</div>
		</div>
	</div>
</div>

<div class="applications">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2>Applications</h2>
				<p>Zn Reactor products will be most suitable for applications requiring long runtime (long duration capacity), that is for more than half-a-day to multiple days of storage capacity.</p>
				<p>It is particularly suitable for off-grid and micro-grid applications. For off-grid and many micro-grids, the electricity is typically generated with diesel generators. The replacement of diesel generators by Zn Reactor will not only reduce CO2 emission but also reduce the cost of electricity.</p>
			</div>
			<div class="col-md-5">
				<div class="app-list">
					<h3>Off-grid and micro-grid situations</h3>
					<ul>
						<li>Residential houses</li>
						<li>Islands</li>
						<li>Remote communities</li>
						<li>Third world countries</li>
						<li>Military bases</li>
						<li>Mining sites</li>
						<li>Mobile communities</li>
						<li>Telecommunication sites</li>
						<li>Emergency responses</li>
						<li>Electric vehicle charging stations</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
