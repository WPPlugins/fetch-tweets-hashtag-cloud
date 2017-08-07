<?php
/* 
	Plugin Name: Fetch Tweets - Hashtag Cloud Template
	Plugin URI: http://en.michaeluno.jp/fetch-tweets
	Description: Extracts and displays only hastags from the result of Fetch Tweets.
	Author: Michael Uno
	Author URI: http://michaeluno.jp
	Version: 1.0.2.1
	Requirements: PHP 5.2.4 or above, WordPress 3.3 or above.
*/ 

/**
 * Adds the template directory to the passed array.
 * 
 * @remark			use DIRECTORY_SEPARATOR instead of backslash to support various OSes.
 */
function FetchTweets_AddHashtagTemplateDirPath( $aDirPaths ) {
	
	$aDirPaths[] = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'hashtagcloud';
	return $aDirPaths;
	
}
add_filter( 'fetch_tweets_filter_template_directories', 'FetchTweets_AddHashtagTemplateDirPath' );