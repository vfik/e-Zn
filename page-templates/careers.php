<?php
/**
 * Template Name: Careers
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
			<div class="col-md-6 appCol team-at-work">
			</div>
			<div class="col-md-6 appCol reactor-office">
			</div>
		</div>
	</div>
</div>

<div class="applications career-one">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="careers-across">
					<h2>The company is seeking enthusiastic and talented individuals to join us in the development and commercialization of products.</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="applications career-two">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>Open Job Poisitions</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h4>VP Business Development</h4>
						<a href="http://e-zn.com/wp-content/uploads/2018/12/e-Zn-Job-Description-VP-Business-Development.pdf" class="btn btn-primary btn-block">Read posting</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h4>VP Engineering</h4>
						<a href="http://e-zn.com/wp-content/uploads/2018/12/e-Zn-Job-Description-VP-Engineering.pdf" class="btn btn-primary btn-block">Read posting</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="applications career-two">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h3>e-Zn Inc</h3>
				<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
				<p>info@e-zn.com</p>
			</div>
			<div class="col-md-7">
					<h3>Job Application</h3>
					<div id="jobAppForm">
						<?php echo do_shortcode('[contact-form-7 id="16" title="Job Application Form"]'); ?>
					</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="job postings" id="positions">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-10 col-xl-8">
				<h2>Open Positions</h2>
				<div class="jobs">
					<div class="row">
						<div class="col-md-8">
							<h3>Job Title</h3>
						</div>
						<div class="col-md-4">
							<h3>Location</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-md-8">
							<p>Zinc Scientist</p>
						</div>
						<div class="col-md-4">
							<p>Toronto, Canada</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<p>Engineering Manager</p>
						</div>
						<div class="col-md-4">
							<p>Toronto, Canada</p>
						</div>
					</div>
				</div>
				<div id="submit">
					<script type="text/javascript">
						function showForm() {
							var applyBtn = document.getElementById('applyBtn');
							var applyForm = document.getElementById('applyForm');
							applyForm.classList.remove('heightZero');
						}
					</script>
					<a class="sq-btn" id="applyBtn" onclick="showForm()" href="#positions">Submit your application</a>
					<div class="heightZero" id="applyForm">

					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- End Page Content -->

<?php

get_footer();
