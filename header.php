<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- header part -->
<header class="header" id="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg custom-navbar">
			<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
				<?php $custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
				?>
				<img src="<?php echo $image[0]; ?>" alt="logo">
			</a>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationMenu">
				<span class="navbar-toggler-icon">
					<span class="bar1"></span>
					<span class="bar2"></span>
					<span class="bar3"></span> 
				</span>
			</button>
			
			<!-- Navbar links -->
			<div class="collapse navbar-collapse navbar-menu " id="navigationMenu">
				<?php
					// 	top menu script

					$defaults = array(
						'theme_location'  => 'primary',
						'menu'            => 'primary-menu',
						'menu_class'      => 'dropdown-menu',
						'menu_id'         => '',
						'echo'            => true,
						'add_a_class'     => 'nav-link',
						'fallback_cb'     => 'wp_page_menu',
						'link_after'      => '<span></span>',
						'items_wrap'      => '<ul class="navbar-nav navbar-center" id="navbar-left">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu($defaults);
				?>
			</div>
		</nav>
	</div>
</header>
<!-- header part end -->
