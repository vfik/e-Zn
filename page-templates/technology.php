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

<div class="kalyna-slider technology">

</div>


<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 content">
				<h2>Concept</h2>
				<p>The Zn Reactor is an electrochemical cell with a distinctive structure:</p>
				<ol>
					<li class="topLiOne">A charging section at the top where zinc metal is formed, absorbing energy.</li>
					<li class="topLiOne">A discharging section at the bottom where zinc metal is dissolved, releasing energy.</li>
					<li class="topLiOne">A section in the middle where zinc metal is stored.</li>
				</ol>
				<div class="">
					<a href="/wp-content/uploads/2018/02/e-zn-scientific-paper.pdf" id="sciPaper" target="_blank">Read our Scientific Paper <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-6 image">
				<div class="img-wrap">
					<img src="/wp-content/uploads/2018/02/e-zn-reactor-concept.png" alt="" class="padding">
					<!-- <img src="/wp-content/uploads/2018/02/inside-reactor-resize-portrait.jpg" alt=""> -->
					<p class="patentText">Global patent protection is pursued. Patents were granted in the United States and China and are pending in more countries.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="technology-spread alt">
	<div class="container">
		<div class="row">
			<div class="col-md-5 content">
				<h2>Operation</h2>
				<p>The electrochemical cell has a simple mechanical operation.</p>
				<p>During charging zinc metal is electrochemically deposited in the electrodes in the charging section and falls, when wiped off from the electrodes, into the discharge section and the storage space below.</p>
				<p>During discharging, the zinc in the discharging section is dissolved into the solution and is circulated back to the top of the charging section to be deposited back into metal again.</p>
				<p>Charging and discharging cycles are created as the operation processes repeat.</p>

			</div>
			<div class="col-md-7">
				<div class="operation-video">
					<video height="auto" controls="controls" preload="none" onclick="this.play()" class="videoElement" poster="/wp-content/uploads/2018/04/zinc-reactor-video-poster-blank.jpg">
						<source src="/wp-content/uploads/2018/04/e-zn_zinc_reactor_optimized-export1.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<!-- <div class="col-md-6 image">
				<div class="techVideo">
					<video autoplay loop class="videoElement">
						<source src="/wp-content/uploads/2018/03/e-zn-reactor-video-demonstration.m4v" type="video/mp4">
						<source src="/wp-content/uploads/2018/03/e-zn-reactor-video-demonstration.webm" type="video/webm">
					</video>
				</div>
			</div> -->
		</div>
	</div>
</div>
<div class="technology-spread" id="techdemo">
	<div class="container">
		<div class="row">
			<div class="col-md-12 content">
				<h2>Technology demonstration</h2>
				<p class="techdemo">e-Zn is currently leading an industrial consortium to conduct a project awarded by SDTC to demonstrate the storage of solar energy with a Zn Reactor system in an off-grid setting.  It consists of 5kW solar panels and 1kW/24 hours of energy storage.</p>
				<p class="techdemo">Consortium members include Canadian Solar, Broy Engineering and NewESolar.</p>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/03/e-zn-solar-panels.jpg" alt="" class="middle">
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/03/zinc-reactors-lab.jpg" alt="" class="middle">
			</div>
			<div class="col-md-12 content">
				<div class="right-content">
					<a href="https://www.sdtc.ca/en/portfolio/projects/long-duration-energy-storage-technology-solar-energy" target="_blank">
						<img src="/wp-content/uploads/2018/03/sdtc_logo_english.jpg" alt="" class="stdc-img">
					</a>
					<h3 class="stdc">About SDTC</h3>
					<p class="techdemo">Sustainable Development Technology Canada (SDTC) is an arm's-length foundation created by the Government of Canada to support innovative and entrepreneurial clean technology projects.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="technology-spread alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h2>Key Benefit</h2>
				<p>The Zn Reactor has low cost scalability for storage capacity based on three principles:</p>
				<ol>
					<li class="topLiOne">Using zinc metal, which has high energy density and is inexpensive, as the energy bearing material.</li>
					<li class="topLiOne">The zinc metal is detached from electrodes allowing the metal to be stored at a low cost unlike rechargeable batteries in which the energy bearing metal is fixed on the electrodes.</li>
					<li class="topLiOne">The storage space is located within the same electrochemical cell as the charging and discharging electrodes enabling a simple operation and flexible capacity scaling.</li>
				</ol>
			</div>
			<div class="col-md-6 image">
				<div class="img-wrap">
					<img src="/wp-content/uploads/2018/04/storage-capacity-scaling-30-kwh.png" class="padding" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h2>Advantages over batteries</h2>
				<ul>
					<li class="topLi">Storage capacity of Zn Reactor does not fade with time.</li>
					<li class="topLi">Zn Reactor can operate in a wide temperature range from - 45°C to 70°C without air conditioning.</li>
					<li class="topLi">Zn Reactor is fire resistant.</li>
				</ul>
			</div>
			<div class="col-md-6 image">
				<div class="img-wrap">
					<!-- <div class="" id="storedelectricity">
						<img src="/wp-content/uploads/2018/03/stored-zinc-e-zn.jpg" class="padding margin" alt="">
					</div> -->
					<img src="/wp-content/uploads/2018/02/battery-reactor-comparison.jpg" class="padding" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="technology-spread alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h2>The innovation</h2>
				<p>The key benefit of this technology is its low cost scalability for storage capacity.  It is based on three principles:</p>
				<p>Numerous attempts have been made to store energy in zinc metal in past six decades based on an approach where formation, storage and dissolution of zinc metal are conducted in different containers as illustrated in the figure.</p>
				<p>None of these attempts was successful due to the challenging problem has been associated with the transportation of solid metal between the different containers.  Jamming tends to occur in pipes, in pumps and in cells.</p>
				<p>e-Zn abandoned the traditional approach of having to transport the zinc metal between different containers by pacing all the elements for zinc formation, dissolution and stage within the same container therefore completely avoided the problem of jamming.</p>
				<a href="/wp-content/uploads/2018/02/e-zn-scientific-paper.pdf" class="sq-btn" id="scipub" target="_blank">Read our scientific publication</a>
			</div>
			<div class="col-md-6 image">
				<div class="img-wrap">
					<img src="http://e-zn.com/wp-content/uploads/2018/03/e-zn-innovation-design-reactor-compare.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-6 content">
				<h2>Patent Protection</h2>
				<p>e-Zn has been seeking global patent protection the innovations.</p>
				<p>We have filed 8 patent applications in US, China, Europe, Japan and Canada.  A US and Chinese patent have granted.</p>
			</div>
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/e-zn-us-patent.png" class="padding" alt="">
				</div>
			</div>
		</div>

	</div>
</div> -->

<!-- End Page Content -->

<?php

get_footer();
