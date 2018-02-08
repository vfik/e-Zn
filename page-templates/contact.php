<?php
/**
 * Template Name: Contact
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

<div class="contactIntro">
	<div class="container">
		<div class="row mapRow">
			<div class="col-md-6">
				<div class="googleMap">

					<div id="map"></div>
			    <script>
			      function initMap() {
			        var ezn = {lat: 43.633409, lng: -79.528817};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 4,
			          center: ezn
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
			<div class="col-md-6 info">
				<div class="details">
					<h2>office and labratory facility</h2>
					<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
					<p>T - 416-000-0000</p>
					<p>E - info@e-zn.com</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contactForm">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cForm">
					<h2>Get in touch</h2>
					<p>we are a company that will get back to you</p>
					<p>[form fields]</p>
				</div>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
