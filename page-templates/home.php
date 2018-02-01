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

<div class="slider">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Energy into Matter</h1>
			</div>
		</div>
	</div>


</div>

<!-- End Page Content -->

<?php

get_footer();
