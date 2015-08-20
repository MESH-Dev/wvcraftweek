<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {
		$imageArray = get_field('background_image');
		$imageURL = $imageArray['sizes']['background-fullscreen'];
	}

?>

<html <?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageURL; ?>') no-repeat center center fixed;" class="background-fullscreen" <?php } ?>>

<head>


<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS (* with Edge Inspect Fix)
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<style>
	/*body, html{width:100%; height:100%;}*/

	</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'>

		<header>
			<div class="container">

				<div class="twelve columns">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/img/craftweek_logo.png" alt="Welcome to Craftweek" />

						<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
					</div>
					<div class="user-gateway">
						<div class="gateway participants"><a href="http://americancraftweek.com/participants" title="See who's participating this year, visit http://americancraftweek.com/participants" target="_blank">Find Participating<br> Artists</a></div>
						<div class="gateway studios"><a href="http://www.tamarackfoundation.org/open-studio-week-2.php" title="Sign up to be a participating artist. Visit http://www.tamarackfoundation.org/hgm/findartisan.php" target="_blank">Sign Up to be a<br> Participating Artist</a></div>
						<div class="gateway social">
							<a href="https://twitter.com/TamarackFound" alt="Click here to visit the Tamarack Foundation's Twitter feed" title="Follow the Tamarack Foundation on Twitter:  https://twitter.com/TamarackFound - link opens in new window" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/twitter_header.png"></a>
							<a href="https://instagram.com/tamarackfoundation" alt="Click here to visit the Tamarack Foundation's Instagram feed" title="Get social with the Tamarack Foundation by visiting their Instagram feed:  https://instagram.com/tamarackfoundation - link opens in a new window" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/instagram_header.png"></a>
							<a href="https://www.facebook.com/pages/West-Virginia-Craft-Week/850660421682136?fref=ts" alt="Click here to visit the CraftWeek Facebook page" title="Connect with the Tamarack Foundation on Facebook: https://www.facebook.com/TamarackFoundation - link opens in new window" target="blank" ><img src="<?php echo get_template_directory_uri() ?>/img/fb_header.png"></a>
							<a href="https://www.youtube.com/channel/UCPhlI2hj0AfqevTBmomMFag" alt="Click here to visit the Tamarack Foundation's YouTube channel" title="Watch the Tamarack Foundation's YouTube channel: https://www.youtube.com/channel/UCPhlI2hj0AfqevTBmomMFag - link opens in a new window" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/youtube_header.png"></a>
						</div>
					</div>
					<!--Commmented out b/c we don't need it here -->
					<!--<nav class="main-navigation">
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>-->
				</div>

			</div>
		</header>
