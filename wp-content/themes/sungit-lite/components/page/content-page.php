<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sungit_Lite
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-content-wrap'); ?>>
	
	<div class="post-content">
		<h2><a href="<?php the_permalink(); ?>">
			<div align="center"><?php the_title();?></div></a></h2>
				<div class="post-desc">
				<div>
					<br>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
<div>