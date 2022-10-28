<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' ); 
$contact = get_field('contact_info_tabs', 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80039396-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-80039396-2');
</script>
<!-- ZoomInfo Tracking Code -->
<script>
  (function () {
    var zi = document.createElement('script');
    zi.type = 'text/javascript';
    zi.async = true;
    zi.referrerPolicy = 'unsafe-url';
    zi.src = 'https://ws.zoominfo.com/pixel/6283aa298f43f50012ae4d82';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(zi, s);
  })();
</script>
<!-- End ZoomInfo Tracking Code -->
<!-- LeadForensics -->
<script type="text/javascript" src="https://secure.ripe8book.com/js/192427.js" ></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preload" href="/wp-content/themes/givens/fonts/DroidSans.woff2" as="font" />
	<link rel="preload" href="/wp-content/themes/givens/fonts/DroidSans-Bold.woff2" as="font" />
	<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NN2WWR');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN2WWR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- LeadForensics (noscript) -->
<noscript><img alt="" src="https://secure.ripe8book.com/192427.png" style="display:none;" /></noscript>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<?php if(get_field('enable_top_bar', 'option') != 0): ?>
	<div class="top-alert-bar text-center bg-primary text-light text-sm py-2 sticky-top">
		<div class="mb-2 mb-lg-0 top-alert-message d-block d-lg-inline text-sm"><?php the_field('bar_message', 'option'); ?> </div>
		<?php if(get_field('bar_button_text', 'option')): ?><a href="<?php the_field('bar_button_link', 'option'); ?>" class="mx-3 px-3 btn btn-sm btn-light d-lg-inline text-primary"><?php the_field('bar_button_text', 'option'); ?></a><?php endif; ?>
	</div>
	<?php endif; ?>
	
	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<div class="container-xxl logo-area">
			<div class="row mx-0 py-3 align-items-center">
				<div class="col-6 col-lg-3">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img width="280" height="82" src="/wp-content/themes/givens/images/gei-logo.png" alt="Givens Engineering Logo"></a>
				</div>
				<div class="col-lg-6 d-none d-lg-block">
					<p class="mb-0 text-center"><?php the_field('headline', 'option'); ?></p>
				</div>
				<div class="col-6 col-lg-3">
					<div class="contact-info text-end">
						<p class="d-none d-lg-block mb-0 text-sm"><small>Located in the US? Visit our <a href="https://www.givensliftingsystems.com/" target="_blank">US branch</a>.</small></p>
						<hr class="d-none d-lg-block my-1">
						<span class="d-none d-lg-block">Givens Engineering Inc, London, ON</span><!-- <a class="mx-1 linkedin" href="https://www.linkedin.com/company/givens-engineering-inc-/" target="_blank"><i class="fa fa-linkedin"></i></a> --><i class="fa fa-phone mx-1"></i><a href="tel:<?php echo $contact['phone_number']; ?>" class="d-block d-lg-inline"><?php echo $contact['phone_number']; ?></a><span class="d-none d-lg-inline"> | </span><i class="fa fa-envelope mx-1"></i><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
					</div>
				</div>
			</div>
		</div>

		<?php if(get_field('hide_menu') != 1): ?>
			<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>
		<?php else: ?>
			<div class="pb-1 bg-dark"></div>
		<?php endif; ?>

	</header><!-- #wrapper-navbar end -->
