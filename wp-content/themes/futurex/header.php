<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FutureX
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--Bootstrap css-->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/bootstrap.min.css">

<!-- Font Awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Google Fonts--> <!-- Not added Adobe Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
<!--HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries-->
<!--[if lt IE 9-->
	<!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
<!--[endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'futurex' ); ?></a>

<!----------------------- Header ----------------->
<header class="site-header" role="banner">
		<!----------------------- Navbar ----------------->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<!--Container-->
			<div class="container">
					<!--logo-->
				<a class="navbar-brand " href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img2/logo1.png"></a>
					<!--Toggle Button-->
				<button type="button" class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">

				<?php 
					wp_nav_menu( array (
						'theme_location' => 'primary',
						'container' => 'ul',
    					'menu_class'=> 'navbar-nav ml-auto'
					));
				?>

				</div>
			</div><!--container-->
		</nav>
	</header>