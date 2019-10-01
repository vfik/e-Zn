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


<div class="home-content-intro">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/50ToWatch_Banner_640X110.jpg" alt style="padding-top:20px; padding-bottom:20px; width:100rem;">
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="container">
					<div>
						<p style="padding-top: 10px;">e-Zn was chosen to be on the 2019 Cleantech 50 to watch list.</p>
						<p>Cleantech&reg; Group is an international company focused on supporting innovating clean technologies. <a href="https://www.cleantech.com/release/top-companies-delivering-high-impact-solutions-named-in-inaugural-list/">Learn more here.</a></p>
					</div>
				</div>
			</div>


			<div class="homecontent col-md-8">
				<div class="container">
					<div class="content">
						<p style="padding-top: 10px;"> We were interviewed by BNN Bloomberg. <a href="https://www.bnnbloomberg.ca/commodities/video/power-shift-zinc-s-advantages-for-battery-storage-over-lithium-ion~1782308">Watch the interview here.</a></p>
					</div>
				</div>
			</div>
			<div class="homecontent col-md-4">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/bnnlogo.png" alt style = "padding-top:20px; padding-bottom:20px;">
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="container">
					<div style = "padding-top: 2rem padding-bottom: 2rem">
						<p style="padding-top: 10px;">e-Zn won the $20,000 grand prize at the <a href="https://canada-isa.org/">Canada Innovative SMEs Association</a> pitch competition.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="container">
					<div class="content">
						<img src="/wp-content/uploads/2019/10/canadianisalogo.png" alt style="padding-top:20px; padding-bottom:20px;">
					</div>
				</div>
			</div>

		</div>
	</div>
</div>



<div class="homecontent col-md-12">
	<div class="container">
		<div class="content">

			<div class="video-intro">
				<div class="videoDiv hidden-sm-down" style = "height:300px;">
					<!-- keep this out <video src="/wp-content/uploads/2018/01/video-2018-01-09.mp4" autoplay loop class="videoElement"> -->
					<video  autoplay loop class="videoElement home" >
						<source src="/wp-content/uploads/2018/03/herovidHQslower.mp4" type="video/mp4">
						<source src="/wp-content/uploads/2018/03/herovidHQslower.webm" type="video/webm">
					</video>
				</div>


			</div>
			<div class="novaNews" style = "height:100px">
				<div class="container">
					<div class="row">
						<div class="col-md-12 titleIntro">
							<h1 style = "text-align: center;">Economical Energy Storage</h1>
						</div>
					</div>
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
