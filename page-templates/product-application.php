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

<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>Applications</h2>
					<p>Zn Reactor products will be most suitable for applications requiring long runtime (long duration capacity), that is for more than half day to multiple days of storage capacity.</p>
					<p>It is particularly suitable for off-grid and micro-grid applications.  For off-grid and many micro grids, the electricity is typically generated with diesel generators. The replacement of diesel generators by Zn Reactor will not only cut down CO2 emission but also reduce the cost of electricity</p>
					<a href="/wp-content/uploads/2018/02/e-zn-scientific-paper.pdf" class="sq-btn" target="_blank">Read technical paper</a>
				</div>
			</div>
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/runtime-diagram.png" alt="">
					<!-- <img src="/wp-content/uploads/2018/02/inside-reactor-resize-portrait.jpg" alt=""> -->
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>The e-Zn reactor is an evolution beyond the battery.</h2>
					<p>Energy capacity does not fade with time and does not change with temperature. The e-Zn reactor is a long-life storage solution that can operate in temperatures ranging from -45°C to 70°C.</p>
					<p>More advantages over batteries:</p>
					<ul>
						<li>Lower costs to scale up storage capacity</li>
						<li>non-flammable</li>
						<li>Readily recyclable by pouring out the metal with electrolyte</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/02/powered-home.png" alt="" class="margin-img">
				<img src="/wp-content/uploads/2018/02/tesla-ev-placeholder.jpg" alt="" class="margin-img">
				<img src="/wp-content/uploads/2018/02/mountain-community.png" alt="" class="margin-img">
			</div>
		</div>

	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
