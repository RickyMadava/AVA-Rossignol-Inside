<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rossignol_inside
 */

?>

<article class="uk-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="uk-width-2-3@m uk-margin-auto white-background uk-margin-small-top uk-padding">
		<!-- header -->
		<header class="uk-section">
			<?php the_title('<h1 class="uk-text-center">', '</h1>'); ?>
		</header>
		<!-- //header -->

		<!-- main content -->
		<div>
			<?php the_content(); ?>
		</div>
		<!-- //main content -->
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

<style>
	.white-background {
		background-color: white;
	}
</style>