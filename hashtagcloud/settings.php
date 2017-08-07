<?php
if ( ! class_exists( 'FetchTweets_Commons' ) ) return;
$_sDirName = dirname( __FILE__ );
if ( isset( FetchTweets_Commons::$strPluginKey ) ) {	// means v1
	include_once( $_sDirName . '/v1/FetchTweets_Template_Settings_Hashtag_Base.php' );	
	include_once( $_sDirName . '/v1/FetchTweets_Template_Settings_Hashtag.php' );	
} else {

	include_once( $_sDirName . '/class/FetchTweets_Template_Settings_Hashtag.php' );
	
}
new FetchTweets_Template_Settings_Hashtag( $_sDirName );	