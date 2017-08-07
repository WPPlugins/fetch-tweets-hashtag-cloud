<?php

/**
 * Returns the set-up argument array.
 * 
 * @since	1.0.2
 */
if ( ! function_exists( 'getFetchTweetsTemplateArguments_HashTagColud' ) ) :
function getFetchTweetsTemplateArguments_HashTagColud( $aArgs, $aTemplateOptions ) {

	$aArgs['smallest']					= isset( $aArgs['smallest'] ) ? $aArgs['smallest'] : $aTemplateOptions['fetch_tweets_template_hashtag_font_size'][ 0 ];
	$aArgs['largest']					= isset( $aArgs['largest'] ) ? $aArgs['largest'] : $aTemplateOptions['fetch_tweets_template_hashtag_font_size'][ 1 ];
	$aArgs['unit']						= isset( $aArgs['unit'] ) ? $aArgs['unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_unit'];
	$aArgs['max_count']					= isset( $aArgs['max_count'] ) ? $aArgs['max_count'] : $aTemplateOptions['fetch_tweets_template_hashtag_max_count'];
	$aArgs['format']					= isset( $aArgs['format'] ) ? $aArgs['format'] : $aTemplateOptions['fetch_tweets_template_hashtag_format'];
	$aArgs['orderby']					= isset( $aArgs['orderby'] ) ? $aArgs['orderby'] : $aTemplateOptions['fetch_tweets_template_hashtag_sort'][ 0 ];
	$aArgs['order']						= isset( $aArgs['order'] ) ? $aArgs['order'] : $aTemplateOptions['fetch_tweets_template_hashtag_sort'][ 1 ];
	$aArgs['include_retweets']			= isset( $aArgs['include_retweets'] ) ? $aArgs['include_retweets'] : $aTemplateOptions['fetch_tweets_template_hashtag_include_retweets'];
	$aArgs['case_sensitive']			= isset( $aArgs['case_sensitive'] ) ? $aArgs['case_sensitive'] : $aTemplateOptions['fetch_tweets_template_hashtag_case_sensitive'];
	$aArgs['include_number_sign']		= isset( $aArgs['include_number_sign'] ) ? $aArgs['include_number_sign'] : $aTemplateOptions['fetch_tweets_template_hashtag_include_number_sign'];
	$aArgs['enable_title_attribute']	= isset( $aArgs['enable_title_attribute'] ) ? $aArgs['enable_title_attribute'] : $aTemplateOptions['fetch_tweets_template_hashtag_enable_title_attribute'];
	$aArgs['required_count']			= isset( $aArgs['required_count'] ) ? $aArgs['required_count'] : $aTemplateOptions['fetch_tweets_template_hashtag_required_count'];
	$aArgs['required_users']			= isset( $aArgs['required_users'] ) ? $aArgs['required_users'] : $aTemplateOptions['fetch_tweets_template_hashtag_required_users'];

	$aArgs['width']						= isset( $aArgs['width'] ) ? $aArgs['width'] : $aTemplateOptions['fetch_tweets_template_hashtag_width']['size'];
	$aArgs['width_unit']				= isset( $aArgs['width_unit'] ) ? $aArgs['width_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_width']['unit'];
	$aArgs['height']					= isset( $aArgs['height'] ) ? $aArgs['height']: $aTemplateOptions['fetch_tweets_template_hashtag_height']['size'];
	$aArgs['height_unit']				= isset( $aArgs['height_unit'] ) ? $aArgs['height_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_height']['unit'];
	$aArgs['background_color']			= isset( $aArgs['background_color'] ) ? $aArgs['background_color'] : $aTemplateOptions['fetch_tweets_template_hashtag_background_color'];
	$aArgs['margin_top']				= isset( $aArgs['margin_top'] ) ? $aArgs['margin_top'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 0 ]['size'];
	$aArgs['margin_top_unit']			= isset( $aArgs['margin_top_unit'] ) ? $aArgs['margin_top_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 0 ]['unit'];
	$aArgs['margin_right']				= isset( $aArgs['margin_right'] ) ? $aArgs['margin_right'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 1 ]['size'];
	$aArgs['margin_right_unit']			= isset( $aArgs['margin_right_unit'] ) ? $aArgs['margin_right_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 1 ]['unit'];
	$aArgs['margin_bottom']				= isset( $aArgs['margin_bottom'] ) ? $aArgs['margin_bottom'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 2 ]['size'];
	$aArgs['margin_bottom_unit']		= isset( $aArgs['margin_bottom_unit'] ) ? $aArgs['margin_bottom_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 2 ]['unit'];
	$aArgs['margin_left']				= isset( $aArgs['margin_left'] ) ? $aArgs['margin_left'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 3 ]['size'];
	$aArgs['margin_left_unit']			= isset( $aArgs['margin_left_unit'] ) ? $aArgs['margin_left_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 3 ]['unit'];
	$aArgs['padding_top']				= isset( $aArgs['padding_top'] ) ? $aArgs['padding_top'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 0 ]['size'];
	$aArgs['padding_top_unit']			= isset( $aArgs['padding_top_unit'] ) ? $aArgs['padding_top_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 0 ]['unit'];
	$aArgs['padding_right']				= isset( $aArgs['padding_right'] ) ? $aArgs['padding_right'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 1 ]['size'];
	$aArgs['padding_right_unit']		= isset( $aArgs['padding_right_unit'] ) ? $aArgs['padding_right_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 1 ]['unit'];
	$aArgs['padding_bottom']			= isset( $aArgs['padding_bottom'] ) ? $aArgs['padding_bottom'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 2 ]['size'];
	$aArgs['padding_bottom_unit']		= isset( $aArgs['padding_bottom_unit'] ) ? $aArgs['padding_bottom_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 2 ]['unit'];
	$aArgs['padding_left']				= isset( $aArgs['padding_left'] ) ? $aArgs['padding_left'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 3 ]['size'];
	$aArgs['padding_left_unit']			= isset( $aArgs['padding_left_unit'] ) ? $aArgs['padding_left_unit'] : $aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 3 ]['unit'];
	
	return $aArgs;
	
}
endif;
 
 
/**
 * Returns a set-up template option array.
 * @since	1.0.2
 */
if ( ! function_exists( 'getFetchTweetsTemplateOptions_HashTagCloud' ) ) :
function getFetchTweetsTemplateOptions_HashTagCloud( $aOptions ) {
	
	// 1-1. Set the default template option values.
	$aDefaultTemplateValues = array(
		'fetch_tweets_template_hashtag_font_size' => array( 
			0 => 8, 	// smallest
			1 => 22 	// largest
		),
		'fetch_tweets_template_hashtag_unit' => 'pt',
		'fetch_tweets_template_hashtag_max_count' => 0,
		'fetch_tweets_template_hashtag_format' => 'flat',
		'fetch_tweets_template_hashtag_include_retweets' => true,
		'fetch_tweets_template_hashtag_case_sensitive' => true,
		'fetch_tweets_template_hashtag_include_number_sign' => true,
		'fetch_tweets_template_hashtag_sort' => array( 
			0 => 'name',	// 'order_by'
			1 => 'RAND',	// 'sort_by'
		),
		'fetch_tweets_template_hashtag_width' => array( 'size' => 100, 'unit' => '%' ),
		'fetch_tweets_template_hashtag_height' => array( 'size' => 100, 'unit' => '%' ),
		'fetch_tweets_template_hashtag_background_color' => 'transparent',
		'fetch_tweets_template_hashtag_margins' => array(
			0 => array( 'size' => '', 'unit' => 'px' ),	// 'top'
			1 => array( 'size' => '', 'unit' => 'px' ),	// 'right'
			2 => array( 'size' => '', 'unit' => 'px' ), // 'bottom'
			3 => array( 'size' => '', 'unit' => 'px' ), // 'left'
		),
		'fetch_tweets_template_hashtag_paddings' => array(
			0 => array( 'size' => '', 'unit' => 'px' ),
			1 => array( 'size' => '', 'unit' => 'px' ),
			2 => array( 'size' => '', 'unit' => 'px' ),
			3 => array( 'size' => '', 'unit' => 'px' ),
		),	
		'fetch_tweets_template_hashtag_enable_title_attribute' => true,
		'fetch_tweets_template_hashtag_required_count' => 1,
		'fetch_tweets_template_hashtag_required_users' => 1,
	); 
// FetchTweets_Debug::logArray( $aOptions );	
	// 1-2. Retrieve the default template option values.
	if ( ! isset( $aOptions['fetch_tweets_template_hashtag'] ) ) {	// for the first time of calling the template.
// FetchTweets_Debug::logArray( $aOptions );
		$aOptions['fetch_tweets_template_hashtag'] = $aDefaultTemplateValues;
		update_option( FetchTweets_Commons::AdminOptionKey, $aOptions );
	} 
	
	// 1-3. Merge the stored options with the defined default values as some new setting items are not stored in the database.
	$aTemplateOptions = FetchTweets_Utilities::uniteArrays( 
		$aOptions['fetch_tweets_template_hashtag'], 
		$aDefaultTemplateValues 
	);
	
	// 1-4. Support the backward compatibility for Fetch Tweets v1.
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_font_size']['smallest'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_font_size'][ 0 ] = $aTemplateOptions['fetch_tweets_template_hashtag_font_size']['smallest'];
	}
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_font_size']['largest'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_font_size'][ 1 ] = $aTemplateOptions['fetch_tweets_template_hashtag_font_size']['largest'];
	}
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_sort']['order_by'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_sort'][ 0 ] = $aTemplateOptions['fetch_tweets_template_hashtag_sort']['order_by'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_sort']['sort_by'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_sort'][ 1 ] = $aTemplateOptions['fetch_tweets_template_hashtag_sort']['sort_by'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_margins']['top'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 0 ] = $aTemplateOptions['fetch_tweets_template_hashtag_margins']['top'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_margins']['right'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 1 ] = $aTemplateOptions['fetch_tweets_template_hashtag_margins']['right'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_margins']['bottom'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 2 ] = $aTemplateOptions['fetch_tweets_template_hashtag_margins']['bottom'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_margins']['left'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_margins'][ 3 ] = $aTemplateOptions['fetch_tweets_template_hashtag_margins']['left'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['top'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 0 ] = $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['top'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['right'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 1 ] = $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['right'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['bottom'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 2 ] = $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['bottom'];
	} 
	if ( isset( $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['left'] ) ) {
		$aTemplateOptions['fetch_tweets_template_hashtag_paddings'][ 3 ] = $aTemplateOptions['fetch_tweets_template_hashtag_paddings']['left'];
	} 
	
	return $aTemplateOptions;
	
}
endif;

/**
 * 
 * @filter			fetch_tweets_filter_template_hashtag_cloud_output
 */
if ( ! function_exists( 'getWordCloud' ) ) :
function getWordCloud( $arrTerms, $intMaxWidth = 400 ) {

	$strCloud = "<div class='wp-tag-cloud' style='max-width: {$intMaxWidth}px;'>";
	
	/* Initialize some variables */
	$fmax = 96; /* Maximum font size */
	$fmin = 8; /* Minimum font size */
	$tmin = min( $arrTerms ); /* Frequency lower-bound */
	$tmax = max( $arrTerms ); /* Frequency upper-bound */

	foreach( $arrTerms as $strTerm => $intFrequency ) {
	
		if ( $intFrequency > $tmin ) {
			$intFontSize = floor(  ( $fmax * ( $intFrequency - $tmin ) ) / ( $tmax - $tmin )  );
			/* Define a color index based on the frequency of the word */
			$r = $g = 0; $b = floor( 255 * ( $intFrequency / $tmax) );
			$strColor = '#' . sprintf('%02s', dechex($r)) . sprintf('%02s', dechex($g)) . sprintf('%02s', dechex($b));
		}
		else 
			$intFontSize = 0;
	
		
		if ( $intFontSize >= $fmin ) 
			$strCloud .= "<span style='font-size: {$intFontSize}px; color: $strColor;'>{$strTerm}</span>";
		
		
	}
	
	$strCloud .= "</div>";
	
	return $strCloud;
	
}
endif;

if ( ! class_exists( 'FetchTweetsTemplate_HashTagCloud' ) ) :
class FetchTweetsTemplate_HashTagCloud {
	
	function __construct( $arrArgs=array() ) {
		
		$this->arrArgs = $arrArgs;
		
	}
	
	protected function setUpArgs( $arrArgs ) {
		
		// Set margin and paddings for inline styles.
		$strWidth = $arrArgs['width'] . $arrArgs['width_unit'];
		$strHeight = $arrArgs['height'] . $arrArgs['height_unit'];
		$strMarginTop = empty( $arrArgs['margin_top'] ) ? 0 : $arrArgs['margin_top'] . $arrArgs['margin_top_unit'];
		$strMarginRight = empty( $arrArgs['margin_right'] ) ? 0 : $arrArgs['margin_right'] . $arrArgs['margin_right_unit'];
		$strMarginBottom = empty( $arrArgs['margin_bottom'] ) ? 0 : $arrArgs['margin_bottom'] . $arrArgs['margin_bottom_unit'];
		$strMarginLeft = empty( $arrArgs['margin_left'] ) ? 0 : $arrArgs['margin_left'] . $arrArgs['margin_left_unit'];
		$strPaddingTop = empty( $arrArgs['padding_top'] ) ? 0 : $arrArgs['padding_top'] . $arrArgs['padding_top_unit'];
		$strPaddingRight = empty( $arrArgs['padding_right'] ) ? 0 : $arrArgs['padding_right'] . $arrArgs['padding_right_unit'];
		$strPaddingBottom = empty( $arrArgs['padding_bottom'] ) ? 0 : $arrArgs['padding_bottom'] . $arrArgs['padding_bottom_unit'];
		$strPaddingLeft = empty( $arrArgs['padding_left'] ) ? 0 : $arrArgs['padding_left'] . $arrArgs['padding_left_unit'];
		$strMargins = ( $strMarginTop ? "margin-top: {$strMarginTop}; " : "" ) . ( $strMarginRight ? "margin-right: {$strMarginRight}; " : "" ) . ( $strMarginBottom ? "margin-bottom: {$strMarginBottom}; " : "" ) . ( $strMarginLeft ? "margin-left: {$strMarginLeft}; " : "" );
		$strPaddings = ( $strPaddingTop ? "padding-top: {$strPaddingTop}; " : "" ) . ( $strPaddingRight ? "padding-right: {$strPaddingRight}; " : "" ) . ( $strPaddingBottom ? "padding-bottom: {$strPaddingBottom}; " : "" ) . ( $strPaddingLeft ? "padding-left: {$strPaddingLeft}; " : "" );
		
		$arrArgs['style_margins'] = $strMargins;
		$arrArgs['style_paddings'] = $strPaddings;
		$arrArgs['style_bgcolor'] = "background-color: {$arrArgs['background_color']};";
		$arrArgs['style_max_width'] = "max-width: {$strWidth};";
		$arrArgs['style_max_height'] = "max-height: {$strHeight};";
		return $arrArgs;
		
	}
	
	public function getTagCloud( $arrTags, $arrArgs=array() ) {
		
		if ( empty( $arrTags ) ) return '';
		
		$arrArgs = empty( $arrArgs )
			? $this->arrArgs 
			: $arrArgs;
		$arrArgs = $this->setUpArgs( $arrArgs );
		
		$arrDefaults = array(
			'smallest' => 8, 
			'largest' => 22, 
			'unit' => 'px', 
			'max_count' => 0,
			'format' => 'flat', 
			'separator' => "\n", 
			'orderby' => 'name', // or occurrence
			'order' => 'ASC',
			// 'topic_count_text_callback' => 'default_topic_count_text',
			// 'topic_count_scale_callback' => 'default_topic_count_scale', 
			'filter' => 1,
			'required_count' => 1,	// since 1.0.1
			'required_users' => 1,	// since 1.0.1
		);

		$arrArgs = FetchTweets_Utilities::uniteArrays( $arrArgs, $arrDefaults );	// unites arrays recursively.
		
		// Apply some conditions. 
		$this->applyConditions( $arrTags, $arrArgs );	// passed as reference
		
		// Sort I
		if ( $arrArgs['orderby'] == 'name' )	
			uasort( $arrTags, array( $this, 'sortByName' ) );
		else	// occurrence
			uasort( $arrTags, array( $this, 'sortByOccurrence' ) );

		// Truncate
		if ( $arrArgs['max_count'] > 0 )
			$arrTags = array_slice( $arrTags, 0, $arrArgs['max_count'] );

		// Sort II
		switch( strtoupper( $arrArgs['order'] ) ) {
			
			case 'RAND':
				$arrTags = $this->shuffleAssociativeArray( $arrTags );
				break;
			case 'DESC':
				break;
			case 'ASC':
			default:
				$arrTags = array_reverse( $arrTags, true );
				// ksort( $arrTags );
				break;
			
		}
		
		// Step
		$intMinCount = $this->getMin( $arrTags ); // min( $arrTags );
		$intSpread = $this->getMax( $arrTags ) - $intMinCount;	// max( $arrTags ) - $intMinCount;
		if ( $intSpread <= 0 )
			$intSpread = 1;
		$intFontSpread = $arrArgs['largest'] - $arrArgs['smallest'];
		if ( $intFontSpread < 0 )
			$intFontSpread = 1;
		$intFontStep = $intFontSpread / $intSpread;

		// The result container array
		$arrOutput = array();
		foreach ( $arrTags as $strLowerCaseTerm => $arrTag ) 			
			$arrOutput[] = 
				"<a "
					. "href='https://twitter.com/search?q=%23{$arrTag['term']}&src=hash' "
					. "target='_blank' "
					. "rel='nofollow' "
					. "class='tag-link-" . sanitize_html_class( $arrTag['term'] ) . "' "
					. ( $arrArgs['enable_title_attribute'] ? "title='" . esc_attr( sprintf( _n( '%s ' . __( 'tweet', 'fetch-tweets' ), '%s ' . __( 'tweets', 'fetch-tweets' ), $arrTag['count'] ), number_format_i18n( $arrTag['count'] ) ) ) . "' " : "" )
					. "style='font-size: " . str_replace( ',', '.', ( $arrArgs['smallest'] + ( ( $arrTag['count'] - $intMinCount ) * $intFontStep ) ) ) . "{$arrArgs['unit']};'>"
						. ( $arrArgs['include_number_sign'] ? '#' : '' )
						. $arrTag['term']
				. "</a>";
		
		
		// Format
		switch ( $arrArgs['format'] ) :
			case 'array' :
				$strOutput = & $arrOutput;
				break;
			case 'list' :
				$strOutput = "<ul class='fetch-tweets-tag-cloud'>\n\t<li>"
					. join( "</li>\n\t<li>", $arrOutput )
					. "</li>\n</ul>\n";
				break;
			case 'flat':
			default :
				$strOutput = join( $arrArgs['separator'], $arrOutput );
				break;
		endswitch;
		
		return "<div class='fetch-tweets-hashtag-cloud' style='{$arrArgs['style_margins']} {$arrArgs['style_paddings']} {$arrArgs['style_bgcolor']} {$arrArgs['style_max_width']} {$arrArgs['style_max_height']}'>" 
				. apply_filters( 'fetch_tweets_filter_template_hashtag_cloud_output', $strOutput, $arrTags, $arrArgs )
			. "</div>";
			
	}
	
	/**
	 * Applies some conditions and drops items if they don't fit.
	 * 
	 * @since			1.0.1
	 */
	protected function applyConditions( & $arrTags, $arrArgs ) {

		foreach( $arrTags as $strIndex => $arrTag ) {
			
// var_dump( $intCount );			
// var_dump( $arrArgs['required_count'] );			

			// If it's not suffice the required number of tweets
			if ( $arrTag['count'] < $arrArgs['required_count'] )
				unset( $arrTags[ $strIndex ] );
					
			// If the number of users is not sufficient drop, 
			if ( count( $arrTag['users'] ) < $arrArgs['required_users'] )
				unset( $arrTags[ $strIndex ] );
			
		}
// var_dump( $arrTags );
	}
	
	protected function getMin( $arrTags ) {
	
		$intMin = null;	// if $arrTags is empty, the loop will be skipped thus the variable needs to be set.
		foreach( $arrTags as $arrTag ) {
			
			if ( ! isset( $intMin ) ) {
				$intMin = $arrTag['count'];
				continue;
			}
			
			if ( $arrTag['count'] < $intMin )
				$intMin = $arrTag['count'];
				
		}
		return $intMin;
		
	}
	protected function getMax( $arrTags ) {
		
		$intMax = null;	// if $arrTags is empty, the loop will be skipped thus the variable needs to be set.
		foreach( $arrTags as $arrTag ) {
		
			if ( ! isset( $intMax ) ) {
				$intMax = $arrTag['count'];
				continue;
			}
			
			if ( $arrTag['count'] > $intMax )
				$intMax = $arrTag['count'];
				
		}
		return $intMax;
				
	}
	
	
	protected function shuffleAssociativeArray( $arr ) {
		
		if ( ! is_array( $arr ) ) return $arr;

		$arrKeys = array_keys( $arr );
		shuffle( $arrKeys );
		$arrRandom = array();
		foreach ( $arrKeys as $strKey )
		$arrRandom[ $strKey ] = $arr[ $strKey ];

		return $arrRandom;
		
	} 
	
	public function sortByName( $a, $b ) {	
		return strnatcasecmp( $b['term'], $a['term'] );
		// return $a['term'] - $b['term'];
	}			
	public function sortByOccurrence( $a, $b ) {
		return $b['count'] - $a['count'];
	}
	
}
endif;
