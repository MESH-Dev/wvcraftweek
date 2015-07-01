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
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<style>
	/*body, html{width:100%; height:100%;}*/
	a{cursor:pointer;}
	a img{opacity:1; transition:all .2s ease-in-out;}
	a img:hover{opacity:.5;}
	header{position:absolute; width:100%;}
	header a{color:white;}
	header a:hover{text-decoration:underline;}
	header .container{width:100%;}
	header .container .twelve.columns, footer .container .twelve.columns{width:100%;}
	.main-bg{width:100%; /*height:100%;*/ position:absolute; z-index:-1; height:85%;}
	.main-bg img{width:100%; height:auto;}
	.main-bg .panel-1{height:100%;background:url('http://localhost:8888/wv-craft-week/wp-content/themes/mesh/img/craftweek_bg_1.jpg'); background-position:center;background-repeat:no-repeat; background-size:cover;}
	.user-gateway{/*width:45%;*/ z-index:25; float:right; position:absolute; top:0; right:0;}
	.user-gateway .gateway{display:inline-block; padding:.5em 1em; /*text-align:center;*/ margin-right:.5em; text-transform: uppercase; color:white; font-size:12px; width:auto; vertical-align:top; font-family: 'montserratregular';}
	.user-gateway .participants{background: #c23287;}
	.user-gateway .studios{background: #f4a933;}
	.logo{width:25%;}
	.logo img{max-width:100%; height:auto;}
	.content-fullscreen{height:85%}
	footer{position:absolute; width:100%; background:white; /*height:15%;*/ /*padding:1em 0;*/ bottom:0;}
	footer .container{width:100%;}
	footer .row{margin:0 !important;}
	footer img {max-width:100%; height:auto;}
	footer li{padding-top:.5em;}
	.main-sponsors{float:right;}
	.full-bg{background-size:cover; background-repeat:no-repeat; background-position:center center; width:100%; height:100%;}
	.slides-navigation{position:absolute; top:50%; right:1em; z-index:5000; width:3%;}
	.slides-navigation img{width:100%; height:auto;}
	.callout-container{width:80%; /*top:50%;*/ /*left:50%;*/ position:relative; margin:0 auto; display: table; height:100%;}
	.circle{position:absolute; width:500px; height:500px; border-radius:50%; background:rgba(248, 192, 113, .4); z-index: -1; top:50%; left:50%; margin-left:-250px; margin-top:-250px;}
	.callout-text{font-family:"montserratultra_light"; color:white; text-align:center; display: table-cell; vertical-align:middle; width:60%; position:relative; right:20%;}
	.callout-text h2{font-size: 3.25em; text-transform: uppercase; margin:0 !important; font-weight:100; line-height: 1; }
	.callout-text h4{font-size:2.25em; margin:0 !important; text-transform:none;}
	.callout-text a{color:white;}
	.callout-text a:hover{text-decoration:underline;}
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
						<div class="gateway participants"><a href="http://americancraftweek.com/participants" title="See who's participating this year, visit http://americancraftweek.com/participants" target="_blank">See this years<br> participants</a></div>
						<div class="gateway studios"><a href="http://www.tamarackfoundation.org/hgm/findartisan.php" title="Create your own trail, visit http://www.tamarackfoundation.org/hgm/findartisan.php" target="_blank">Create your own custom<br> trail to artists studios</a></div>
						<div class="gateway social">
							<a href=""><img src="<?php echo get_template_directory_uri() ?>/img/twitter_header.png"></a>
							<a href=""><img src="<?php echo get_template_directory_uri() ?>/img/instagram_header.png"></a>
							<a href=""><img src="<?php echo get_template_directory_uri() ?>/img/fb_header.png"></a>
							<a href=""><img src="<?php echo get_template_directory_uri() ?>/img/youtube_header.png"></a>
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
