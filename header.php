<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.typekit.net/ind6pcp.css">
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->


</head>

<body <?php body_class(); ?>>

<script type="text/javascript">
	function openMenu() {
		var menuBtn = document.getElementById('menuBtn');
		var mobileMenu = document.getElementById('mobileMenu');
		var closeMenu = document.getElementById('closeMenu');

		mobileMenu.classList.remove('displayNone');
		console.log('openMenu');
	}
	function closeMenu() {
		var menuBtn = document.getElementById('menuBtn');
		var mobileMenu = document.getElementById('mobileMenu');
		var closeMenu = document.getElementById('closeMenu');

		mobileMenu.classList.add('displayNone')
		console.log('closeMenu');
	}
</script>

<div class="hfeed site" id="page">

	<div id="mobileMenu" class="displayNone">
		<div class="row">
			<div class="col-md-12">
				<div class="x">
					<i class="fa fa-times" id="closeMenu" onclick="closeMenu()"></i>
				</div>
			</div>
			<div class="col-md-12">
				<a href="/" class="mobileMenuItem">Home</a>
			</div>
			<div class="col-md-12">
				<a href="/company/" class="mobileMenuItem">Company</a>
			</div>
			<div class="col-md-12">
				<a href="/technology/" class="mobileMenuItem">Technology</a>
			</div>
			<div class="col-md-12">
				<a href="/product-application/" class="mobileMenuItem">Applications</a>
			</div>
			<div class="col-md-12">
				<a href="/careers/" class="mobileMenuItem">Careers</a>
			</div>
			<div class="contactDetails">
				<div class="col-md-12">
					<a href="tel:416-518-5572" class="mobileContact">416-518-5572</a>
				</div>
				<div class="col-md-12">
					<a href="mailto:info@e-zn.com" class="mobileContact">info@e-zn.com</a>
				</div>
				<div class="col-md-12">
					<p class="address">25 Advance Rd, Toronto<br>Ontario, Canada M8Z 2S6</p>
				</div>
			</div>
		</div>
	</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<div class="container header">
			<div class="row">
				<div class="col-md-3 col-6 logoCol">
					<a href="/" class="logoA">
						<img src="/wp-content/uploads/2018/03/e-zn-logo.png" alt="">
						<!-- <span class="logoText">Metalizing electricity for storage</span> -->
					</a>
				</div>
				<div class="col-md-9 col-6 linksCol">
					<div class="links">
						<!-- <a href="/benefits-of-zinc/">Benefits of Zinc</a> -->
						<a href="/">Home</a>
						<a href="/company/">Company</a>
						<a href="/technology/">Technology</a>
						<a href="/product-application/">Application</a>
						<a href="/careers/">Careers</a>
						<!-- <a href="/contact/">Contact</a> -->
					</div>
					<div class="mobileMenuLinks">
						<div class="button" id="menuBtn" onclick="openMenu()">
							<span class="label">Menu</span>
							<i class="fa fa-bars"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- .wrapper-navbar end -->
