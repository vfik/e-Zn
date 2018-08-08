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

<!-- company video -->
<div class="video-intro">
	<div class="videoDiv hidden-sm-down">
		<!-- <video src="/wp-content/uploads/2018/01/video-2018-01-09.mp4" autoplay loop class="videoElement"> -->
		<video autoplay loop class="videoElement company">
			<source src="/wp-content/uploads/2018/03/zinc-reactor-falling-v1.mp4" type="video/mp4">
			<source src="/wp-content/uploads/2018/03/zinc-reactor-falling-v1.webm" type="video/webm">
		</video>
	</div>

</div>

<div class="company-intro-text">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-text">
					<h1 class="introH1">Founded in 2012, e-Zn is a Toronto based corporation that has developed a breakthrough electrochemical technology, the Zn Reactor, for storing energy in zinc metal.  This economical energy storage solution will make renewable energy such as solar and wind economic, competitive, and reliable.</h1>
					<p class="introP">The company is currently undertaking a <a href="/technology#techdemo" class="project">project</a> awarded by <a href="https://www.sdtc.ca/en/portfolio/projects/long-duration-energy-storage-technology-solar-energy" target="_blank" class="stdc">Sustainable Development Technology Canada (SDTC)</a> to demonstrate storage of solar energy with a Zn Reactor system.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full-alt">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="team-photo">
					<h2>The e-Zn Team</h2>
					<img src="/wp-content/uploads/2018/03/e-zn-team-photo.jpg" alt="e-Zn team" class="">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="full">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="greg">Founder and Executive Chairman</h2>
				<h3>Dr. Gregory Zhang</h3>
				<p>Dr. Zhang is a visionary and seasoned technology developer. He founded e-Zn in 2012 and has been the CEO till July 2018. As the inventor of the Zn Reactor technology Dr. Zhang led the development from conception to the successful demonstration of a fully integrated energy storage system for solar power.</p>
				<p>Prior to founding e-Zn, Dr. Zhang worked for 20 years at Teck Resources as a scientist and later as Manager of R&D leading a team to develop new zinc products for battery. Dr. Zhang is an acknowledged world-expert in zinc electrochemistry and the author of the book “Corrosion and Electrochemistry of Zinc”, which has been the most comprehensive book on the subject since its publication in 1996.</p>
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
			<div class="col-md-6">
				<h2 class="greg">Chief Executive Officer</h2>
				<h3>James Larsen</h3>
				<p>James has over 15 years of business leadership and engineering experience spanning cleantech and startups, strategy and operations, and design and engineering.</p>
				<p>Most recently, James was a Director with the Advanced Energy Centre (part of MaRS Discovery District) where he built a novel Products & Services business line. Within 2 years, he grew this business from initial concept to over $1.2MM in sales and expanded its global reach to include 5 international markets. Prior to MaRS, James was a Management Consultant with Bain & Company, a top-tier consulting firm, developing strategic solutions for market-leading companies in Canada, the U.S., and Europe. James also possesses deep experience as an engineer working in the renewable energy industry with a variety of technologies, including hydrogen fuel cells, as well as micro-hydro and geothermal generation.</p>
				<p>James holds a BSc in Mechanical Engineering (with Honours) from Queen's University and an MBA (Dean’s List) from the Ivey Business School at Western University. James is also a registered Professional Engineer.</p>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/08/James-Larsen-headshot-highres-1.jpg" alt="James Larsen">
			</div>
		</div>
	</div>
</div>

<div class="full-alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="office">Our office and laboratory facility.</h2>
				<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
				<p>info@e-zn.com</p>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/e-zn-facility.png" alt="e-Zn facility" class="margin">
				<div class="googleMap">

					<style>
						#map {
							height: 250px;
							width: 100%;
						 }
					</style>

					<div id="map"></div>
			    <script>
						var styles = {
							silver: [
                //
								{
			            elementType: 'geometry',
			            stylers: [{color: '#f5f5f5'}]
			          },
			          {
			            elementType: 'labels.icon',
			            stylers: [{visibility: 'off'}]
			          },
			          {
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#616161'}]
			          },
			          {
			            elementType: 'labels.text.stroke',
			            stylers: [{color: '#f5f5f5'}]
			          },
			          {
			            featureType: 'administrative.land_parcel',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#bdbdbd'}]
			          },
			          {
			            featureType: 'poi',
			            elementType: 'geometry',
			            stylers: [{color: '#eeeeee'}]
			          },
			          {
			            featureType: 'poi',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#757575'}]
			          },
			          {
			            featureType: 'poi.park',
			            elementType: 'geometry',
			            stylers: [{color: '#e5e5e5'}]
			          },
			          {
			            featureType: 'poi.park',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#9e9e9e'}]
			          },
			          {
			            featureType: 'road',
			            elementType: 'geometry',
			            stylers: [{color: '#ffffff'}]
			          },
			          {
			            featureType: 'road.arterial',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#757575'}]
			          },
			          {
			            featureType: 'road.highway',
			            elementType: 'geometry',
			            stylers: [{color: '#dadada'}]
			          },
			          {
			            featureType: 'road.highway',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#616161'}]
			          },
			          {
			            featureType: 'road.local',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#9e9e9e'}]
			          },
			          {
			            featureType: 'transit.line',
			            elementType: 'geometry',
			            stylers: [{color: '#e5e5e5'}]
			          },
			          {
			            featureType: 'transit.station',
			            elementType: 'geometry',
			            stylers: [{color: '#eeeeee'}]
			          },
			          {
			            featureType: 'water',
			            elementType: 'geometry',
			            stylers: [{color: '#c9c9c9'}]
			          },
			          {
			            featureType: 'water',
			            elementType: 'labels.text.fill',
			            stylers: [{color: '#9e9e9e'}]
			          }
                //
							]
						}

			      function initMap() {
			        var ezn = {lat: 43.633409, lng: -79.528817};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 12,
			          center: ezn,
								// styles : styles.silver,
								// disableDefaultUI: true
			        });
			        var marker = new google.maps.Marker({
			          position: ezn,
			          map: map
			        });
			      }
			    </script>

					<!--  -->
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL-T-9TVGiW0q-65cAq5dfIIP-_jncPY4&callback=initMap">
					</script>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="technology-spread">
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
	</div>
</div> -->

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
