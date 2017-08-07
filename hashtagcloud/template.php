<?php
if ( isset( FetchTweets_Commons::$strPluginKey ) ) {	// means v1
	
	include_once( dirname( __FILE__ ) . '/v1/template.php' );
	return;
	
} 

/*
 * Available variables passed from the caller script
 * - $aTweets : the fetched tweet arrays.
 * - $aArgs	: the passed arguments such as item count etc.'
 * - $aOptions : the plugin options saved in the database.
 * */
 
/*
 * 1. Set up options
 */
$aTemplateOptions = getFetchTweetsTemplateOptions_HashTagCloud( $aOptions );

/*
 * 2. Set up arguments.
 */
$aArgs = getFetchTweetsTemplateArguments_HashTagColud( $aArgs, $aTemplateOptions );
// FetchTweets_Debug::logArray( $aArgs );

// First extract hash tags.
$aHashTags = array();
foreach ( $aTweets as $aDetail ) {
	
	if ( ! isset( $aDetail['user'] ) ) continue;
	$sUserID = $aDetail['user']['id_str'];

	// Check if it's a retweet.
	if ( isset( $aDetail['retweeted_status']['text'] ) && ! $aArgs['include_retweets'] ) continue;
	$aTweet = isset( $aDetail['retweeted_status']['text'] ) ? $aDetail['retweeted_status'] : $aDetail;
	
	// If the tweet does not have a hash tag, skip
	if ( ! isset( $aTweet['entities']['hashtags'] ) || ! is_array( $aTweet['entities']['hashtags'] ) )
		continue;
		
	foreach ( $aTweet['entities']['hashtags'] as $aHashTag ) {
		
		$sHashTag = $aArgs['case_sensitive'] ? trim( $aHashTag['text'] ) : strtolower( trim( $aHashTag['text'] ) );			
		if ( isset( $aHashTags[ $sHashTag ] ) ) {
			
			$aHashTags[ $sHashTag ]['count']++;	// increment the count
			
			// If the user is not in the users element, add it.
			if ( ! in_array( $sUserID, $aHashTags[ $sHashTag ]['users'] ) )
				$aHashTags[ $sHashTag ]['users'][] = $sUserID;
				
		} else {
			
			// Create a hashtag element
			$aHashTags[ $sHashTag ] =  array(
				'users' => array( $sUserID ),
				'term' => $aHashTag['text'],
				'count' => 1,				
			);
			
		}

	}

}
// echo "<pre>" . htmlspecialchars( print_r( $aHashTags, true ) ) . "</pre>";	 

$oHashTagCloud = new FetchTweetsTemplate_HashTagCloud;
echo $oHashTagCloud->getTagCloud( $aHashTags, $aArgs );
