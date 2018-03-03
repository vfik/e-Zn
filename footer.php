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
					<h4 class="dinTitle">Sitemap</h4>
					<!-- <a href="#">Home</a> -->
					<a href="/" class="footerText">Home</a>
					<a href="/company/" class="footerText">Company</a>
					<a href="/careers/" class="footerText">Careers</a>
					<a href="/technology/" class="footerText">Technology</a>
					<a href="/product-application/" class="footerText">Application</a>
					<a href="/wp-content/uploads/2018/02/e-zn-scientific-paper.pdf" class="footerText" target="_blank">Technical Paper</a>
				</div>
			<!--  -->
			</div><!--col end -->
			<div class="col-md-6 footerCol">
			<!--  -->
			<div class="links">
				<h4 class="dinTitle">Office + Laboratory</h4>
				<p class="footerText">25 Advance Rd, Toronto</p>
				<p class="footerText topLiOne">Ontario, Canada M8Z 2S6</p>
				<p class="footerText">416-518-5572</p>
				<p class="footerText">info@e-zn.com</p>
			</div>			<!--  -->
			</div><!--col end -->
		</div>

		<!-- <div class="row footerRow contactRow">

			<div class="col-md-6 footerCol">
				<div class="links">
					<h4 class="dinTitle">Contact</h4>
					<p class="footerText">416-518-5572</p>
					<p class="footerText">info@e-zn.com</p>
				</div>
			</div>

			<div class="col-md-6 footerCol">
				<div class="links">
					<h4 class="dinTitle">Office + Laboratory</h4>
					<p class="footerText">25 Advance Rd, Toronto</p>
					<p class="footerText">Ontario, Canada M8Z 2S6</p>
				</div>
			</div>

		</div> -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
