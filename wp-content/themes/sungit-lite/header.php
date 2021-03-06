<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sungit_Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="sl-header-sec">
    <div class="top-header">
            <div class="container">
                <ul class="social-nav header-top-left">
                    <?php do_action( 'sungit_lite_social_function'); ?>
                </ul>
            </div>
        </div>
         <!-- Start of Naviation -->
        <div class="nav-wrapper">
            <nav id="primary-nav" class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only"><?php echo esc_html__('Toggle navigation', 'sungit-lite'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <?php get_template_part( 'components/header/site', 'branding' ); ?>
                    </div>

		          <?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

                </div>
            </nav>
        </div>
            <!-- End of Navigation -->

	</header>
	<div id="content" class="site-content">

  <?php if(is_home() || is_page_template( 'page-templates/home-template.php' )):
          get_template_part( 'home-page/slider', 'section' );
      else:
          $header_image = get_header_image();
          $inner_banner = (!empty($header_image)?$header_image:''); ?>
        <!-- Breadcrumb -->
        <div class="inner-banner-wrap" <?php if ($inner_banner) { ?>style="background-image: url(<?php echo esc_url($inner_banner) ?>)"<?php } ?>>
        </div>
        <!-- End of breadcrumb sec -->
<?php endif; ?>