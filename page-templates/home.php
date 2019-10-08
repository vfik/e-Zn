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

<style>
@media only screen and (min-width: 500px) {
  h1 {
    padding-left:15rem;
  }
}
</style>
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


<div class="video-intro">
	<div class="videoDiv hidden-sm-down">
		<!-- <video src="/wp-content/uploads/2018/01/video-2018-01-09.mp4" autoplay loop class="videoElement"> -->
		<video autoplay loop class="videoElement home">
			<source src="/wp-content/uploads/2018/03/herovidHQslower.mp4" type="video/mp4">
			<source src="/wp-content/uploads/2018/03/herovidHQslower.webm" type="video/webm">
		</video>
	</div>

	<div class="novaNews">
		<div class="container">
			<div class="row">
				<div class="col-md-12 titleIntro">
					<h1 style = "max-width:1100px;">Economical Energy Storage</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-content-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h2>Lowest cost energy storage technology</h2>
					<p>e-Zn's unique Zn Reactor Technology turns electricity into physically free zinc material.</p>
					<p>The metal can be flexibly and inexpensively contained for large scale storage of energy.</p>
				</div>
				<img src="/wp-content/uploads/2018/03/stored-zinc-e-zn.jpg" class="" alt style ="padding-bottom:30px;">
				<!-- <div class="operation-video">
					<video height="auto" controls="controls" preload="none" onclick="this.play()" class="videoElement" poster="/wp-content/uploads/2018/04/zinc-reactor-video-poster.jpg">
						<source src="/wp-content/uploads/2018/04/e-zn_zinc_reactor_optimized-export1.mp4" type="video/mp4">
					</video>
				</div> -->
			</div>
			<div class="col-md-6">
				<div class="metalized-electricity">
					<img src="/wp-content/uploads/2018/03/zinc-hands.jpg" alt ="">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-content-intro">
	<div class="container">
		<div class="row">

			<div class="col-md-4"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/cleantechlogo.jpg" alt style="">
					</div>
				</div>
			</div>

			<div class="col-md-8"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div>
						<p>e-Zn was chosen to be on the 2019 Cleantech 50 to watch list.</p>
						<p>Cleantech&reg; Group is an international company focused on supporting innovating clean technologies. <a href="https://www.cleantech.com/release/top-companies-delivering-high-impact-solutions-named-in-inaugural-list/">Learn more here.</a></p>
					</div>
				</div>
			</div>

			<div class="homecontent col-md-4"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/bnnlogo.png" alt style="padding-left: 10px;padding-right: 10px;">
					</div>
				</div>
			</div>
			<div class="homecontent col-md-8"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div class="content">
						<p>Listen to e-Zn explain the benifits of renewable zinc energy. <a href="https://www.bnnbloomberg.ca/commodities/video/power-shift-zinc-s-advantages-for-battery-storage-over-lithium-ion~1782308">Watch the interview here.</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-4"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/canadianisalogo.png" alt style="width:1000px;">
					</div>
				</div>
			</div>
			<div class="col-md-8"  style = "padding-top: 5rem; padding-bottom: 5rem;">
				<div class="container">
					<div>
						<p>e-Zn won the $20,000 grand prize at the <a href="https://canada-isa.org/">Canada Innovative SMEs Association</a> pitch competition.</p>
					</div>
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
