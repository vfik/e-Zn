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
			<div class="col-md-6 paddingZero">
				<div class="googleMap">

					<style>
						#map {
							height: 475px;
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
			          zoom: 14,
			          center: ezn,
								styles : styles.silver,
								disableDefaultUI: true
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
					<div class="content">
						<h1> Our office and laboratory facility</h1>
						<p>e-Zn Inc.</p>
						<p>25 Advance Rd<br>Toronto, Ontario<br>Canada, M8Z 2S6</p>
						<p>T - 416-000-0000</p>
						<p>E - info@e-zn.com</p>
					</div>
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
					<h2>Set up a meeting</h2>
					<?php echo do_shortcode("[contact-form-7 id="15" title="Contact form 1"]"); ?>
				</div>
			</div>
			<div class="col-md-6 paddingZero">
				<img src="/wp-content/uploads/2018/02/gf-placeholder.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
