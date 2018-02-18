<?php
/**
 * Template Name: Technology
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="companyslider technology">

			</div>
		</div>
	</div>
	<div class="row tech-sub-row">
		<div class="col-md-12">
			<div class="companysub">
				<div class="content">
					<h1>The e-Zn reactor is a breakthrough energy storage solution that turns energy into matter</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/photo-office-resize.jpg" alt="">
					<!-- <img src="/wp-content/uploads/2018/02/inside-reactor-resize-portrait.jpg" alt=""> -->
				</div>
			</div>
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>The innovation</h2>
					<p>Numerous attempts have been made to store energy in zinc metal in the past siz decades based on an approach featuring multiple containers of zinc undergoing the processes of formation, storage and dissolution.</p>
					<p>e-Zn abandoned the traditional approach and placed all elements in a single container - eliminating the jamming problems and inventing the e-Zn Reactor. </p>
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
				<img src="/wp-content/uploads/2018/02/battery-reactor-comparison.jpg" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/02/tesla-ev-placeholder.jpg" alt="">
			</div>
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>Ideal solution for energy storage of EV charging stations</h2>
					<p>explain this process, using solar panels. Why is e-Zn the ideal solution here?</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container techAbout">
	<div class="row">
		<div class="col-md-6 written">
			<div class="content">
				<h2>About our company</h2>
				<p>one sentence about the vision</p>
				<p>One short paragraph about greg zhang</p>
				<a href="/company/" class="sq-btn">Learn More</a>
			</div>
		</div>
		<div class="col-md-6">
			<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
		</div>
	</div>

</div>

<!-- End Page Content -->

<?php

get_footer();
