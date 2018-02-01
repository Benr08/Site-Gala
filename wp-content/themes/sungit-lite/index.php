<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sungit_Lite
 */

get_header();
$sungit_lite_theme_options  = sungit_lite_theme_options();
$blog_category              = esc_attr($sungit_lite_theme_options['blog_category']);
$blog_category_obj          = get_category_by_slug($blog_category); ?>
<?php
get_footer();