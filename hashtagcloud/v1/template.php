<?php
/*
 * Available variables passed from the caller script
 * - $arrTweets : the fetched tweet arrays.
 * - $arrArgs	: the passed arguments such as item count etc.'
 * - $arrOptions : the plugin options saved in the database.
 * */
 
/*
 * Set up options
 */
// Set the default template option values.
$arrDefaultTemplateValues = array(
				
	'fetch_tweets_template_hashtag_font_size' => array( 'smallest' => 8, 'largest' => 22 ),
	'fetch_tweets_template_hashtag_unit' => 'pt',
	'fetch_tweets_template_hashtag_max_count' => 0,
	'fetch_tweets_template_hashtag_format' => 'flat',
	'fetch_tweets_template_hashtag_include_retweets' => true,
	'fetch_tweets_template_hashtag_case_sensitive' => true,
	'fetch_tweets_template_hashtag_include_number_sign' => true,
	'fetch_tweets_template_hashtag_sort' => array( 'order_by' => 'name', 'sort_by' => 'RAND' ),
	'fetch_tweets_template_hashtag_width' => array( 'size' => 100, 'unit' => '%' ),
	'fetch_tweets_template_hashtag_height' => array( 'size' => 100, 'unit' => '%' ),
	'fetch_tweets_template_hashtag_background_color' => 'transparent',
	'fetch_tweets_template_hashtag_margins' => array(
		'top' => array( 'size' => '', 'unit' => 'px' ),
		'left' => array( 'size' => '', 'unit' => 'px' ),
		'bottom' => array( 'size' => '', 'unit' => 'px' ),
		'right' => array( 'size' => '', 'unit' => 'px' ),
	),
	'fetch_tweets_template_hashtag_paddings' => array(
		'top' => array( 'size' => '', 'unit' => 'px' ),
		'left' => array( 'size' => '', 'unit' => 'px' ),
		'bottom' => array( 'size' => '', 'unit' => 'px' ),
		'right' => array( 'size' => '', 'unit' => 'px' ),
	),	
	'fetch_tweets_template_hashtag_enable_title_attribute' => true,
	'fetch_tweets_template_hashtag_required_count' => 1,
	'fetch_tweets_template_hashtag_required_users' => 1,
);

// Retrieve the default template option values.
if ( ! isset( $arrOptions['fetch_tweets_templates']['fetch_tweets_template_hashtag'] ) ) {	// for the first time of calling the template.
	$arrOptions['fetch_tweets_templates']['fetch_tweets_template_hashtag'] = $arrDefaultTemplateValues;
	update_option( FetchTweets_Commons::AdminOptionKey, $arrOptions );
}

// Some new setting items are not stored in the database, so merge the saved options with the defined default values.
$arrTemplateOptions = FetchTweets_Utilities::uniteArrays( $arrOptions['fetch_tweets_templates']['fetch_tweets_template_hashtag'], $arrDefaultTemplateValues );	// unites arrays recursively.

// Finalize the template option values.
$arrArgs['smallest']				= isset( $arrArgs['smallest'] ) ? $arrArgs['smallest'] : $arrTemplateOptions['fetch_tweets_template_hashtag_font_size']['smallest'];
$arrArgs['largest']					= isset( $arrArgs['largest'] ) ? $arrArgs['largest'] : $arrTemplateOptions['fetch_tweets_template_hashtag_font_size']['largest'];
$arrArgs['unit']					= isset( $arrArgs['unit'] ) ? $arrArgs['unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_unit'];
$arrArgs['max_count']				= isset( $arrArgs['max_count'] ) ? $arrArgs['max_count'] : $arrTemplateOptions['fetch_tweets_template_hashtag_max_count'];
$arrArgs['format']					= isset( $arrArgs['format'] ) ? $arrArgs['format'] : $arrTemplateOptions['fetch_tweets_template_hashtag_format'];
$arrArgs['orderby']					= isset( $arrArgs['orderby'] ) ? $arrArgs['orderby'] : $arrTemplateOptions['fetch_tweets_template_hashtag_sort']['order_by'];
$arrArgs['order']					= isset( $arrArgs['order'] ) ? $arrArgs['order'] : $arrTemplateOptions['fetch_tweets_template_hashtag_sort']['sort_by'];
$arrArgs['include_retweets']		= isset( $arrArgs['include_retweets'] ) ? $arrArgs['include_retweets'] : $arrTemplateOptions['fetch_tweets_template_hashtag_include_retweets'];
$arrArgs['case_sensitive']			= isset( $arrArgs['case_sensitive'] ) ? $arrArgs['case_sensitive'] : $arrTemplateOptions['fetch_tweets_template_hashtag_case_sensitive'];
$arrArgs['include_number_sign']		= isset( $arrArgs['include_number_sign'] ) ? $arrArgs['include_number_sign'] : $arrTemplateOptions['fetch_tweets_template_hashtag_include_number_sign'];
$arrArgs['enable_title_attribute']	= isset( $arrArgs['enable_title_attribute'] ) ? $arrArgs['enable_title_attribute'] : $arrTemplateOptions['fetch_tweets_template_hashtag_enable_title_attribute'];
$arrArgs['required_count']			= isset( $arrArgs['required_count'] ) ? $arrArgs['required_count'] : $arrTemplateOptions['fetch_tweets_template_hashtag_required_count'];
$arrArgs['required_users']			= isset( $arrArgs['required_users'] ) ? $arrArgs['required_users'] : $arrTemplateOptions['fetch_tweets_template_hashtag_required_users'];

$arrArgs['width']					= isset( $arrArgs['width'] ) ? $arrArgs['width'] : $arrTemplateOptions['fetch_tweets_template_hashtag_width']['size'];
$arrArgs['width_unit']				= isset( $arrArgs['width_unit'] ) ? $arrArgs['width_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_width']['unit'];
$arrArgs['height']					= isset( $arrArgs['height'] ) ? $arrArgs['height']: $arrTemplateOptions['fetch_tweets_template_hashtag_height']['size'];
$arrArgs['height_unit']				= isset( $arrArgs['height_unit'] ) ? $arrArgs['height_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_height']['unit'];
$arrArgs['background_color']		= isset( $arrArgs['background_color'] ) ? $arrArgs['background_color'] : $arrTemplateOptions['fetch_tweets_template_hashtag_background_color'];
$arrArgs['margin_top']				= isset( $arrArgs['margin_top'] ) ? $arrArgs['margin_top'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['top']['size'];
$arrArgs['margin_top_unit']			= isset( $arrArgs['margin_top_unit'] ) ? $arrArgs['margin_top_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['top']['unit'];
$arrArgs['margin_right']			= isset( $arrArgs['margin_right'] ) ? $arrArgs['margin_right'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['right']['size'];
$arrArgs['margin_right_unit']		= isset( $arrArgs['margin_right_unit'] ) ? $arrArgs['margin_right_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['right']['unit'];
$arrArgs['margin_bottom']			= isset( $arrArgs['margin_bottom'] ) ? $arrArgs['margin_bottom'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['bottom']['size'];
$arrArgs['margin_bottom_unit']		= isset( $arrArgs['margin_bottom_unit'] ) ? $arrArgs['margin_bottom_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['bottom']['unit'];
$arrArgs['margin_left']				= isset( $arrArgs['margin_left'] ) ? $arrArgs['margin_left'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['left']['size'];
$arrArgs['margin_left_unit']		= isset( $arrArgs['margin_left_unit'] ) ? $arrArgs['margin_left_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_margins']['left']['unit'];
$arrArgs['padding_top']				= isset( $arrArgs['padding_top'] ) ? $arrArgs['padding_top'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['top']['size'];
$arrArgs['padding_top_unit']		= isset( $arrArgs['padding_top_unit'] ) ? $arrArgs['padding_top_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['top']['unit'];
$arrArgs['padding_right']			= isset( $arrArgs['padding_right'] ) ? $arrArgs['padding_right'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['right']['size'];
$arrArgs['padding_right_unit']		= isset( $arrArgs['padding_right_unit'] ) ? $arrArgs['padding_right_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['right']['unit'];
$arrArgs['padding_bottom']			= isset( $arrArgs['padding_bottom'] ) ? $arrArgs['padding_bottom'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['bottom']['size'];
$arrArgs['padding_bottom_unit']		= isset( $arrArgs['padding_bottom_unit'] ) ? $arrArgs['padding_bottom_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['bottom']['unit'];
$arrArgs['padding_left']			= isset( $arrArgs['padding_left'] ) ? $arrArgs['padding_left'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['left']['size'];
$arrArgs['padding_left_unit']		= isset( $arrArgs['padding_left_unit'] ) ? $arrArgs['padding_left_unit'] : $arrTemplateOptions['fetch_tweets_template_hashtag_paddings']['left']['unit'];


/*
 * For debug - uncomment the following line to see the contents of the arrays.
 */ 
// echo "<pre>" . htmlspecialchars( print_r( $arrTweets, true ) ) . "</pre>";	 
// echo "<pre>" . htmlspecialchars( print_r( $arrArgs, true ) ) . "</pre>";	 
// return;


// First extract hash tags.
$arrHashTags = array();
foreach ( $arrTweets as $arrDetail ) {
	
	if ( ! isset( $arrDetail['user'] ) ) continue;
	$strUserID = $arrDetail['user']['id_str'];

	// Check if it's a retweet.
	if ( isset( $arrDetail['retweeted_status']['text'] ) && ! $arrArgs['include_retweets'] ) continue;
	$arrTweet = isset( $arrDetail['retweeted_status']['text'] ) ? $arrDetail['retweeted_status'] : $arrDetail;
	
	// If the tweet does not have a hash tag, skip
	if ( ! isset( $arrTweet['entities']['hashtags'] ) || ! is_array( $arrTweet['entities']['hashtags'] ) )
		continue;
		
	foreach ( $arrTweet['entities']['hashtags'] as $arrHashTag ) {
		
		$strHashTag = $arrArgs['case_sensitive'] ? trim( $arrHashTag['text'] ) : strtolower( trim( $arrHashTag['text'] ) );			
		if ( isset( $arrHashTags[ $strHashTag ] ) ) {
			
			$arrHashTags[ $strHashTag ]['count']++;	// increment the count
			
			// If the user is not in the users element, add it.
			if ( ! in_array( $strUserID, $arrHashTags[ $strHashTag ]['users'] ) )
				$arrHashTags[ $strHashTag ]['users'][] = $strUserID;
				
		} else {
			
			// Create a hashtag element
			$arrHashTags[ $strHashTag ] =  array(
				'users' => array( $strUserID ),
				'term' => $arrHashTag['text'],
				'count' => 1,				
			);
			
		}

	}

}
// echo "<pre>" . htmlspecialchars( print_r( $arrHashTags, true ) ) . "</pre>";	 

$oHashTagCloud = new FetchTweetsTemplate_HashTagCloud;
echo $oHashTagCloud->getTagCloud( $arrHashTags, $arrArgs );
	 