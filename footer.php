<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row footerRow">
			<div class="col-md-6 footerCol">
			<!--  -->
				<div class="links pages">
					<!-- <h4>e-Zn Reactor</h4> -->
					<!-- <a href="#">Home</a> -->
					<a href="/benefits-of-zinc/">Benefits of Zinc</a>
					<a href="/technology/">Technology</a>
					<a href="/technology/">Technical Paper</a>
				</div>
			<!--  -->
			</div><!--col end -->
			<div class="col-md-6 footerCol">
			<!--  -->
				<div class="links pages">
					<!-- <h4>About us</h4> -->
					<a href="/company/">Company</a>
					<a href="/careers/">Careers</a>
					<a href="/careers/">STDC Grant</a>
					<!-- <a href="#">Contact</a> -->
				</div>
			<!--  -->
			</div><!--col end -->
		</div>

		<div class="row footerRow contactRow">

			<div class="col-md-6 footerCol">
				<div class="links">
					<h4 class="dinTitle">Contact</h4>
					<p>416-000-0000</p>
					<p>info@e-zn.com</p>
				</div>
			</div>

			<div class="col-md-6 footerCol">
				<div class="links">
					<h4 class="dinTitle">Office + Laboratory</h4>
					<p>25 Advance Rd, Toronto</p>
					<p>Ontario, Canada M8Z 2S6</p>
				</div>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
