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
				<p>Zn Reactor technology is based on a uniquely structured electrochemical cell, which has three distinct sections:</p>
				<ol>
					<li>a charging section at the top section of the cell for receiving energy through zinc deposition;</li>
					<li>a discharging section at the bottom section for delivering energy through zinc dissolution;</li>
					<li>a section in the middle for storage of zinc metal deposit.</li>
				</ol>
			</div>
			<div class="col-md-6 image">
				<div class="left-content">
					<img src="/wp-content/uploads/2018/02/e-zn-reactor-concept.png" alt="" class="padding">
					<!-- <img src="/wp-content/uploads/2018/02/inside-reactor-resize-portrait.jpg" alt=""> -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="technology-spread alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6 content">
					<h2>Operation</h2>
					<p>The electrochemical cell is a simple mechanical operation.</p>
					<p>During charging zinc metal is electrochemically deposited in the electrodes in the charging section and falls, when wiped off from the electrodes, into the storage space below.</p>
					<p>During discharging, the zinc is dissolved into the solution and circulated back to the top of the charging section to be deposited again back into metal.</p>
					<p>Charge and discharge cycles are created as the operation processes repeat.</p>
			</div>
			<div class="col-md-6 image">

			</div>
		</div>
	</div>
</div>
<div class="technology-spread">
	<div class="container">
		<div class="row">
			<div class="col-md-12 content">
				<h2 class="fulltext">e-Zn is currently conduct a project awarded by SDTC to demonstrate the storage of solar energy with a Zn Reactor system.</h2>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/03/e-zn-solar-panels.jpg" alt="" class="middle">
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/03/zn-reactor-zinc-technology-e-zn.jpg" alt="" class="middle">
			</div>
			<div class="col-md-12 content">
				<div class="right-content">
					<a href="https://www.sdtc.ca/en/portfolio/projects/long-duration-energy-storage-technology-solar-energy" target="_blank">
						<img src="/wp-content/uploads/2018/03/sdtc_logo_english.jpg" alt="" class="stdc-img">
					</a>
					<h3 class="stdc">About STDC</h3>
					<p>Sustainable Development Technology Canada (SDTC) is an arm's-length foundation created by the Government of Canada to support innovative and entrepreneurial clean technology projects. Our portfolio of companies develop and demonstrate new technologies that address issues related to climate change, air quality, clean water and soil.</p>
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
				<p>The key benefit of this technology is its low cost scalability for storage capacity.  It is based on three principles:</p>
				<ol>
					<li>using zinc metal, which has high energy density and is inexpensive, as the energy bearing material</li>
					<li>the zinc metal is detached from electrodes that allows the metal to be stored at a low cost unlike rechargeable batteries in which the energy bearing metal is fixed on the electrodes</li>
					<li>the storage space is located within the same electrochemical cell as the charging and discharging electrodes that enables a simple operation and flexible capacity scaling. </li>
				</ol>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/02/battery-reactor-comparison.jpg" class="padding" alt="">
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
					<li>Zn Reactor is lowest cost technology for usable storage capacity
						<ul>
							<li>The cost of usable storage capacity for a multiple day Zn Reactor system can be as low as $60/kWh.  It is more than $300/kWh for batteries.</li>
						</ul>
					</li>
					<li>Storage capacity of Zn Reactor does not fade with time; it remains the same at the end of product life.  The capacity of batteries decays with time</li>
					<li>Zn Reactor has a wide range of operation temperature, from - 45 0C to 70 0C, and does require air conditioning in field environments
						<ul>
							<li>Lithium batteries needs to be air conditioned for performance and longevity</li>
							<li>Life of lead acid batteries halves for every ten degree increase in temperature above 25C</li>
						</ul>
					</li>
					<li>Zn Reactor uses aqueous electrolyte which does not catch fire; Lithium battery may catch fire in the events of thermal runaway.</li>
					<li>Zn Reactor is readily recyclable while recycling lithium batteries is costly</li>
				</ul>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/02/e-zn-reactor-runtime.png" class="padding" alt="">
			</div>
		</div>
	</div>
</div>

<div class="technology-spread alt">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h2>The innovation</h2>
				<p>The key benefit of this technology is its low cost scalability for storage capacity.  It is based on three principles:</p>
				<p>Numerous attempts have been made to store energy in zinc metal in past six decades based on an approach where formation, storage and dissolution of zinc metal are conducted in different containers as illustrated in the figure.</p>
				<p>None of these attempts was successful due to the challenging problem has been associated with the transportation of solid metal between the different containers.  Jamming tends to occur in pipes, in pumps and in cells.</p>
				<p>e-Zn abandoned the traditional approach of having to transport the zinc metal between different containers by pacing all the elements for zinc formation, dissolution and stage within the same container therefore completely avoided the problem of jamming.</p>
				<a href="/wp-content/uploads/2018/02/e-zn-scientific-paper.pdf" class="sq-btn" target="_blank">Read our scientific publication</a>
			</div>
			<div class="col-md-6 image">
				<img src="/wp-content/uploads/2018/02/traditional-vs-e-zn-design.png" class="padding" alt="">
			</div>
		</div>
	</div>
</div>

<div class="technology-spread">
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
</div>

<!-- End Page Content -->

<?php

get_footer();
