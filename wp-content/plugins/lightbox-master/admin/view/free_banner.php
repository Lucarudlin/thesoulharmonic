<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$path_site2 = plugins_url( "../../images", __FILE__ );
?>

<div class="free_version_banner" <?php if ( isset( $_COOKIE['hgSliderFreeBannerShow'] ) && isset( $_COOKIE['hgSliderFreeBannerShow'] ) == "no" ) { echo 'style="display:none"';} ?>>
	<a class="close_free_banner">+</a>
	<img class="manual_icon" src="<?php echo $path_site2; ?>/icon-user-manual.png" alt="user manual"/>
	<p class="usermanual_text"><?php _e( 'If you have any difficulties in using the options, Follow the link to ','lightbox' ); ?><a
			href="https://goo.gl/8Lvigb" target="_blank"><?php _e( 'User Manual','lightbox' ); ?></a></p>
	<a class="get_full_version" href="https://goo.gl/3mO1hS" target="_blank"><?php _e( 'GET THE FULL VERSION','lightbox' ); ?></a>
	<a href="http://huge-it.com" target="_blank"><img class="huge_it_logo" src="<?php echo $path_site2; ?>/Huge-It-logo.png"/></a>
	<div style="clear: both;"></div>
	<div class="hg_social_link_buttons">
		<a target="_blank" class="fb" href="https://www.facebook.com/hugeit/"></a>
		<a target="_blank" class="twitter" href="https://twitter.com/HugeITcom"></a>
		<a target="_blank" class="gplus" href="https://plus.google.com/111845940220835549549"></a>
		<a target="_blank" class="yt" href="https://www.youtube.com/channel/UCueCH_ulkgQZhSuc0L5rS5Q"></a>
	</div>
	<div class="hg_view_plugins_block">
		<a target="_blank" href="https://wordpress.org/support/plugin/lightbox/reviews/"><?php _e( 'Rate Us','lightbox' ); ?></a>
		<a target="_blank" href="https://goo.gl/4Zm1GL"><?php _e( 'Full Demo','lightbox' ); ?></a>
		<a target="_blank" href="https://goo.gl/PscxCd"><?php _e( 'FAQ','lightbox' ); ?></a>
		<a target="_blank" href="https://wordpress.org/support/plugin/lightbox"><?php _e( 'Contact Us','lightbox' ); ?></a>
	</div>
	<div class="description_text"><p><?php _e( 'This is the LITE version of the plugin. Click "GET THE FULL VERSION" for more advanced options. We appreciate every customer.','lightbox' ); ?></p></div>
	<div style="clear: both;"></div>
</div>