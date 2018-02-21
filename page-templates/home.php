<?php
/**
 * Template Name: Home
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

<!-- <div class="home-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-6 introCol">
				<div class="content">
					<h1>Our zinc reactors transform energy into matter</h1>
					<p>e-Zn has developed a breakthrough technology which enables you to store electrical energy in zinc metal.</p>
					<a href="/technology/" class="sq-btn">Explore our technology</a>
				</div>
			</div>
			<div class="col-md-6 introCol">
				<img src="/wp-content/uploads/2018/02/inside-reactor-resize-recolor-landscape.jpg" alt="">
			</div>
		</div>
	</div>
</div> -->

<div class="zinc-video">
</div>

<div class="home-content-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-center">
				<div class="intro-title">
					<h2>Lowest cost energy storage technology</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/uploads/2018/02/solar-panels.jpg" alt="">
			</div>
			<div class="col-md-4 align-center">
				<p>Storing renewable energy</p>
				<p>Solid free standing zinc metal</p>
				<i class="fal fa-long-arrow-right"></i>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/uploads/2018/02/zinc-storage.jpg" alt="">
			</div>
		</div>
		<div class="row align-center">
			<div class="col-md-12">
				<div class="technology-div">
					<h1>Zn Reactor Technology</h1>					
					<img src="/wp-content/uploads/2018/02/zinc-video.png" alt="">
				</div>
			</div>
		</div>
	</div>

</div>

<!-- <div class="container home-con">
	<div class="row">
		<div class="col-md-6 image">
			<img src="/wp-content/uploads/2018/02/photo-office-resize.jpg" alt="" class="one">
		</div>
		<div class="col-md-6 homeCopy">
			<div class="content">
				<h2>Benefits of using Zinc for energy storage</h2>
				<p>short explanation just to say what zinc is, make it very obvious and how it is so useful. Benefits include:</p>
				<ul>
					<li>Abundant</li>
					<li>Non-toxic</li>
					<li>Low cost</li>
					<li>High energy density</li>
				</ul>
				<a href="/benefits-of-zinc/" class="sq-btn">Explore Benefits</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 homeCopy">
			<div class="content">
				<h2>A world leading zinc scientist's discovery sparked an innovation in metal energy storage.</h2>
				<p>short copy paragraphs go here to describe e-Zn inc. short copy paragraphs go here to describe e-Zn inc. short copy paragraphs go here to describe e-Zn inc. Talk about greg shortly and list his accomplishments.</p>
				<p>short copy paragraphs go here to describe e-Zn inc.</p>
				<a href="/company/" class="sq-btn">About Us</a>
				<a href="/careers/" class="sq-btn">Careers</a>
			</div>
		</div>
		<div class="col-md-6 homeCompanyImgs">
			<img src="/wp-content/uploads/2018/02/e-zn-20-reactor-cells.jpg" alt="" class="one">
			<img src="/wp-content/uploads/2018/02/photo-office-resize.jpg" alt="" class="two">
		</div>
	</div>

</div> -->
<!-- End Page Content -->

<?php

get_footer();
