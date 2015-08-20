</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<nav class="main-navigation">
					<!-- <?php wp_nav_menu( array('menu_id' => 'footer-menu', 'theme_location' => 'footer-menu') ); ?>-->
					<div class="sponsors">
						<ul>
							<li>
								<a href="https://www.facebook.com/pages/Artistry-on-Main/1420411154838359" alt="Artistry On Main logo - click the link to visit this site" title="Visit the Artistry On Main site: https://www.facebook.com/pages/Artistry-on-Main/1420411154838359 - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/artistry_footer.png' /></a>
							</li>
							<li>
								<a href="http://www.heritagefarmmuseum.com/" alt="Heritage Farm Museum logo - click the link to visit this site" title="Visit the Heritage Farm museum site http://heritagefarmmuseum.com - link opens in a new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/heritagemuseum_footer.png' /></a>
							</li>
							<li>
								<a href="http://www.carnegiehallwv.com/" alt="Carnegie Hall logo - click the link to visit this site" title="Visit the Carnegie Hall site: http://www.carnegiehallwv.com/ - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/carnegiehall_footer.png' /></a>
							</li>
							<li>
								<a href="http://www.berkeleyspringsstudiotour.org/" alt="Berkeley Springs Studio Tour logo - click the link to visit this site" title="Visit the Berkeley Springs Studio Tour site: http://www.berkeleyspringsstudiotour.org/ - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/studiotour_footer.png' /></a>
							</li>
							<li>
								<a href="http://mountaineerwoodturners.ipower.com/test/" alt="Mountaineer Woodturners Logo - click the link to visit this site" title="Visit the Mountaineer Woodturners site: http://mountaineerwoodturners.ipower.com/test/ - link opens in new window " target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/woodturners_footer.png' /></a>
							</li>
							<li>
								<a href="http://ahajc.org/" alt="Jefferson Arts Council logo - click the link to visit this site" title="Visit the Jefferson Arts Council site: http://ahajc.org - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/jac_footer.png' /></a>
							</li>
							<li>
								<a href="http://storytellerwv.tripod.com/" alt="WV Storytellers guild logo - click the link to visit this site" title="Visit the WV Storyteller's Guild site: http://storytellerwv.tripod.com/ - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/guild_footer.png' /></a>
							</li>
							<li>
								<a href="http://www.tamarackwv.com/" alt="Tamarac logo - click the link to visit this site" title="Visit the Tamarac WV site: http://www.tamarackwv.com/ - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/tamarac_footer.png' /></a>
							</li>
						</ul>
					</div>
					<div class="main-sponsors">
						<ul>
							<li><a href="http://wvtourism.com" alt="WV Tourism logo - click the link to visit this site" title="Visit WVTourism.com - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/wvtourism_footer.png' /></a></li>
							<li><a href="http://www.tamarackfoundation.org/" alt="Tamarack Artisan Foundation logo - click the link to visit the site" title="Visit the Tamarack Artisan Foundation site: http://www.tamarackfoundation.org/ - link opens in new window" target="_blank"><img src='<?php echo get_template_directory_uri() ?>/img/artisanfoundation_footer.png' /></a></li>
						</ul>
				</nav>
					<!-- <p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p> -->
			</div><!-- End of Footer -->
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

<script>
    jQuery('#slides').superslides({
      animation: 'slide',
      play: 8000,
      inherit_height_from: '.main-bg'
    });
 </script>

<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '1390175967977085']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);

</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1390175967977085&amp;ev=PixelInitialized" /></noscript>

</body>
</html>
