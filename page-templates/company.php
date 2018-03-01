<?php
/**
 * Template Name: Company
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

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="companyslider company">

			</div>
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-12">
			<div class="companysub">
				<div class="content">
					<h1>A world leading zinc scientist's discovery sparked an innovation in metal energy storage.</h1>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- company slider -->
<div class="kalyna-slider">

</div>

<div class="company-intro-text">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-text">
					<h1>e-Zn is a Toronto, Canada, based corporation that was founded in 2012.</h1>
					<p>The mission of the company is to commercialize energy storage solutions that will make renewable energy such as solar and wind economic, competitive and reliable.</p>
					<p>Toward that, we have successfully developed a breakthrough electrochemical reactor (Zn Reactor) technology for storing energy in zinc metal.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full-alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Dr. Gregory Zhang</h2>
				<h3>Founder/CEO</h3>
				<p>Dr. Zhang is a visionary and seasoned technology developer.  Prior to founding e-Zn, Dr. Zhang worked for 20 years in Teck Resources as a scientist and later as manager of R&D leading a team to develop new zinc products for battery.</p>
				<p>Dr. Zhang is an acknowledged world-expert in zinc electrochemistry and the author of the book <strong>“Corrosion and Electrochemistry of Zinc”</strong>, which has been the most comprehensive book on the subject since its publication in 1996.</p>
				<p>Dr. Zhang received his PhD in Electrochemistry and Materials Science from the Free University of Brussels and held post-doctoral positions at MIT and Columbia University.</p>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/03/gregory-zhang-e-zn.jpg" alt="Dr Gregory Zhang">
			</div>
		</div>
	</div>
</div>

<div class="full">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="team-photo">
					<img src="/wp-content/uploads/2018/03/e-zn-team-photo.jpg" alt="e-Zn team" class="">					
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
					<div class="history-images">
						<div class="row">
							<div class="col-md-12">
								<img src="/wp-content/uploads/2018/02/e-zn-founded.jpg" alt="">
							</div>
							<div class="col-md-6">
								<img src="/wp-content/uploads/2018/02/e-zn-prototype-reactor-two-2.jpg" alt="" class="p-r-zero">
							</div>
							<div class="col-md-6">
								<img src="/wp-content/uploads/2018/02/e-zn-prototype-reactor.png" alt="" class="p-l-zero">
							</div>
							<div class="col-md-12">
								<img src="/wp-content/uploads/2018/02/e-zn-solar-panels-1.jpg" alt="">
							</div>
							<div class="col-md-12">
								<img src="/wp-content/uploads/2018/02/e-zn-20-reactor-cells.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 content">
				<div class="right-content">
					<div class="company-history">
						<h2>Company history</h2>
						<h3>October 2012</h3>
						<p>e-Zn is founded by Dr. Greg Zhang with three investors</p>
						<h3>June 2013</h3>
						<p>Principle demonstrated on a 20W prototype cell</p>
						<h3>May 2016</h3>
						<p>Scaled up to 50W cell after 8 generations of prototypes</p>
						<h3>September 2016</h3>
						<p>Awarded by STDC a project to demonstrate the technology for solar energy storage</p>
						<h3>February 2017</h3>
						<p>US patent granted</p>
						<h3>January 2018</h3>
						<p>Integration of first 1kW system of 20 50W cells demonstrated</p>
						<h3>February 2018</h3>
						<p>Chinese patent granted</p>
					</div>
				</div>
			</div>
		</div>
		<!--  -->
	</div>
</div>

<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>Founder &amp; CEO</h2>
					<p>Dr. Zhang is a visionary and seasoned technology developer.  Prior to founding e-Zn, Dr. Zhang worked for 20 years in Teck Resources as a scientist and later as manager of R&amp;D leading a team to develop new zinc products for battery.</p>
					<p>Dr. Zhang is an acknowledged world-expert in zinc electrochemistry and the author of the book “Corrosion and Electrochemistry of Zinc”, which has been the most comprehensive book on the subject since its publication in 1996.</p>
					<p>Dr. Zhang has over 50 peer-reviewed publications and holds several patents in the field. Dr. Zhang received his PhD in Electrochemistry and Materials Science from the Free University of Brussels and held post-doctoral positions at MIT and Columbia University.</p>
				</div>
			</div>
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/gregory-zhang-e-zn.png" alt="">
				</div>
			</div>
		</div>
		<!--  -->
		<div class="row">
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/e-zn-facility.png" alt="">
				</div>
			</div>
			<div class="col-md-6 content">
				<div class="right-content">
					<h2>Facility</h2>
					<p>Our office and laboratory facility.</p>
					<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
					<p>416-000-0000</p>
					<p>info@e-zn.com</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="about-intro-greg">
	<div class="container">
		<div class="row">

			<div class="col-md-6 bioHalf">
				<div class="gregBio">
					<h3>Gregory X. Zhang</h3>
					<h4>Founder, CEO, Ph.D.</h4>
					<p>Bio about greg, in here wil will tell a short story and make note of the books he authored and his career. Now its time for a zinc energy storagy.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gregImgContainer">
					<img src="/wp-content/uploads/2018/02/gregory-zhang-mountain.jpg" alt="Gregory Zhang" class="gregimg">
				</div>
			</div>

		</div>
	</div>
</div> -->

<!-- Timeline -->
<!-- <div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-founded.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">October 2012</h3>
						<h2 class="eventTitle">Company founded</h2>
						<p>Demonstration of the application feasibility of solar energy storage in zinc metal with Zn-Reactor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/inside-reactor-resize-recolor-landscape.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">2013 - 2016</h3>
						<h2 class="eventTitle">Prototype Reactors</h2>
						<p>extensive development with 8 iterations in design. The first lab was set up and we went to work. The system was developed to be fully automated with electronic boards.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/photo-office-resize.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">2017</h3>
						<h2 class="eventTitle">New facility; USA and Chinese patents</h2>
						<p>e-Zn upgraded to current office. US and chinese patents have been issued.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-solar-panels-1.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">December 2017</h3>
						<h2 class="eventTitle">SDTC Solar Project Installation</h2>
						<p>e-Zn was awarded grant by Sustainable Devlopment Technology Canada to install solar panels to work directly with the reactors.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="project">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-20-reactor-cells.jpg" alt="">
			</div>
			<div class="col-md-6 btf">
				<div class="bg-three-four">
					<div class="content">
						<h3 class="dateTitle">January 2018</h3>
						<h2 class="eventTitle">20 cell system integrated</h2>
						<p>the zinc reactors are up and running.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->



<!-- End Page Content -->

<?php

get_footer();
