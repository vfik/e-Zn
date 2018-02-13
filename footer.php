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

			<div class="col-md-6">
				<p class="logoWhite">e-Zn</p>
			</div>

			<div class="col-md-3">
			<!--  -->
				<div class="links">
					<a href="#">Home</a>
					<a href="#">Benefits of Zinc</a>
					<a href="#">Technology</a>
				</div>
			<!--  -->
			</div><!--col end -->
			<div class="col-md-3">
			<!--  -->
				<div class="links">
					<a href="#">Company</a>
					<a href="#">Careers</a>
					<a href="#">Contact</a>
				</div>
			<!--  -->
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
