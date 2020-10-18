<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rossignol_inside
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- header -->
		<header id="masthead" class="site-header">
			<!-- app bar -->
			<div class="uk-navbar-container" uk-sticky>
				<div class="uk-container">
					<nav uk-navbar>
						<!-- mobile menu toogle button -->
						<div class="uk-navbar-left uk-hidden@m">
							<a class="uk-navbar-toggle" href="#modal-full" uk-toggle>
								<span uk-navbar-toggle-icon></span>
								<span class="uk-margin-small-left">Menu</span>
							</a>
						</div>
						<!-- //mobile menu toogle button -->

						<!-- left -->
						<div class="uk-navbar-left uk-visible@m">
							<?php
							wp_nav_menu(
								array(
									'container' => 'ul',
									'theme_location' => 'menu-1',
									'menu_class'        => 'uk-navbar-nav',
								)
							);
							?>
						</div>
						<!-- //left -->

						<!-- logo -->
						<?php
						$logo = get_theme_mod('custom_logo');
						$logo_url = wp_get_attachment_image_src($logo, 'full')[0];
						?>
						<div class="uk-navbar-center uk-visible@m">
							<a class="uk-navbar-item uk-logo" href="<?php echo (esc_url(home_url())) ?>">
								<?php if (has_custom_logo()) : ?>
									<img data-src="<?php echo (get_template_directory_uri() . '/assets/images/logo.png') ?>" alt="" width="111" uk-img />
								<?php else : ?>
									<span><?php bloginfo('name'); ?></span>
								<?php endif; ?>
							</a>
						</div>
						<!-- //logo -->
						<div class="uk-navbar-right uk-visible@m">
							<p class="uk-text-center uk-margin-remove">
								<span uk-icon="receiver"></span> +261 33 08 169 10 / +261 34 44 385
								88 <br />
								<span uk-icon="location"></span> Escalier vers faravohitra derrière
								Pavion Analakely
							</p>
						</div>
					</nav>
				</div>
				<!-- menu modal -->
				<div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
					<div style="background-color: black" class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport uk-scrollspy="cls: uk-animation-slide-bottom; target: li; delay: 200; repeat: true">
						<button class="uk-modal-close-full uk-light" type="button" uk-close style="background-color: black"></button>
						<?php
						wp_nav_menu(
							array(
								'container' => 'ul',
								'theme_location' => 'menu-1',
								'menu_class'        => 'uk-nav uk-nav-default menu-modal-link',
							)
						);
						?>
					</div>
				</div>
				<!-- //menu modal -->
			</div>
			<!-- //app bar -->
		</header>
		<!-- //header -->

		<style>
			.uk-navbar-container {
				background-color: #fff !important;
				box-shadow: 0 2px 10px 0 rgba(5, 5, 5, 0.15);
			}

			.menu-modal-link {
				font-size: 24px;
				text-transform: uppercase;
				letter-spacing: 0.2em;
			}
		</style>