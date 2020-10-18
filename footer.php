<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rossignol_inside
 */

?>

<!-- footer -->
<footer id="colophon" class="site-footer">
	<div class="app-footer">
		<div class="uk-container">
			<div class="uk-child-width-expand" uk-grid>
				<div>
					<span>© Copyright Madava 2020 - Tous droits réservés</span>
				</div>
				<div class="uk-text-right">
					<a href="#" class="footer-link">Politique de confidentialité</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

<style>
	.app-footer {
		padding: 20px;
	}

	.footer-link {
		text-decoration: none;
		color: #666a79;
	}

	.footer-link:hover {
		text-decoration: none;
		color: #666a79;
	}
</style>