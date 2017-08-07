<?php
/**
 * Adds a setting tab in the Fetch Tweets admin pages. 
 * 
 * If you are modifying the template to create your own, modify this extended class.
 * The setting arrays follows the specifications of Admin Page Framework v2. 
 * 
 * @package		Fetch Tweets
 * @subpackage	Hash Tag Template
 * @see			http://wordpress.org/plugins/admin-page-framework/
 */
class FetchTweets_Template_Settings_Hashtag extends FetchTweets_Template_Settings_Hashtag_Base {

	/*
	 * Modify these properties.
	 * */
	protected $strParentPageSlug = 'fetch_tweets_templates';	// in the url, the ... part of ?page=... 
	protected $strParentTabSlug = 'hashtag';	// in the url, the ... part of &tab=...
	protected $strTemplateName = 'Hashtag Cloud';	// the template name
	
	/*
	 * Modify these methods. 
	 * This defines form sections. Set the section ID and the description here.
	 * The array structure follows the rule of Admin Page Framework. ( https://github.com/michaeluno/admin-page-framework )
	 * */
	public function addSettingSections( $arrSections ) {
			
		$arrSections[] = array(
			'strSectionID'		=> 'fetch_tweets_template_hashtag',
			'strPageSlug'		=> $this->strParentPageSlug,
			'strTabSlug'		=> $this->strParentTabSlug,
			'strTitle'			=> $this->strTemplateName,
			'strDescription'	=> sprintf( __( 'Options for the %1$s template.', 'fetch-tweets' ), $this->strTemplateName ) . ' ' 
				. __( 'These will be the default values and be overridden by the arguments passed directly by the widgets, the shortcode, or the PHP function.', 'fetch-tweets' ),
		);
		return $arrSections;
	
	}
	/*
	 * This defines form fields. Return the field arrays. 
	 * The array structure follows the rule of Admin Page Framework. ( https://github.com/michaeluno/admin-page-framework )
	 * */
	public function addSettingFields( $arrFields ) {
		
		if ( ! class_exists( 'FetchTweets_Commons' ) ) return $arrFields;	// if the main class does not exist, do nothing.
				

		$arrFields[] = array(	// font size
			'strFieldID' => 'fetch_tweets_template_hashtag_font_size',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Font Size', 'fetch-tweets' ),
			'strType' => 'number',
			'vLabel' => array(
				'smallest' => __( 'Smallest', 'fetch-tweets' ),
				'largest' => __( 'Largest', 'fetch-tweets' ),
			),
			'vMin' => 1, 
			'vDefault' => array(
				'smallest' => 8,
				'largest' => 22,
			),
			'vDelimiter' => '<br />',
		);
		$arrFields[] = array(	// font unit 
			'strFieldID' => 'fetch_tweets_template_hashtag_unit',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Font Unit', 'fetch-tweets' ),
			'strType' => 'select',
			'vDefault' => 'pt',
			'vLabel' => array(
				'px' => 'px',
				'pt' => 'pt',
				'em' => 'em',
			),
		);				
		$arrFields[] = array(	// max count
			'strFieldID' => 'fetch_tweets_template_hashtag_max_count',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Maximum Number of Hashtags', 'fetch-tweets' ),
			'strDescription' => __( 'Items can be truncated with this number if there are too many. Set 0 for no limit.', 'fetch-tweets' ),
			'strType' => 'number',
			'vMin' => 0,
			'vDefault' => 0,
		);	
		$arrFields[] = array(	// required counts
			'strFieldID' => 'fetch_tweets_template_hashtag_required_count',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Required Number of Tweets', 'fetch-tweets' ),
			'strDescription' => __( 'The minimum number of tweets containing the hashtag to display it. Hashtags that do not have the sufficient number of tweets will be omitted.', 'fetch-tweets' ),
			'strType' => 'number',
			'vMin' => 1,
			'vDefault' => 1,
		);		
		$arrFields[] = array(	// required users
			'strFieldID' => 'fetch_tweets_template_hashtag_required_users',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Required Number of Users', 'fetch-tweets' ),
			'strDescription' => __( 'The minimum number of users who mentioned the hashtag. Hashtags that do not have the sufficient number of users will be omitted.', 'fetch-tweets' ),
			'strType' => 'number',
			'vMin' => 1,
			'vDefault' => 1,
		);		
		$arrFields[] = array(	// format
			'strFieldID' => 'fetch_tweets_template_hashtag_format',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Format', 'fetch-tweets' ),
			'strType' => 'select',
			'vLabel' => array(
				'list'  => __( 'List', 'fetch-tweets' ),
				'flat'  => __( 'Word Cloud', 'fetch-tweets' ),
			),
			'vDefault' => 'flat',
		);	
		$arrFields[] = array(	// sort 
			'strFieldID' => 'fetch_tweets_template_hashtag_sort',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Sort', 'fetch-tweets' ),
			'strType' => 'select',
			'vLabel' => array(
				'order_by' => array(
					'name'  => __( 'Name', 'fetch-tweets' ),
					'occurrence'  => __( 'Frequency', 'fetch-tweets' ),
				),
				'sort_by' => array(
					'RAND'  => __( 'Random', 'fetch-tweets' ),
					'ASC'  => __( 'Ascendant', 'fetch-tweets' ),
					'DESC'  => __( 'Descendant', 'fetch-tweets' ),	
				),
			),
			'vBeforeInputTag' => array(
				'order_by' => "<span style='margin-top: 2px; vertical-align: top; display: inline-block; min-width:120px;'><label>" . __( 'Ordered By', 'fetch-tweets' ) . "</label></span>",
				'sort_by' => "<span style='margin-top: 2px; vertical-align: top; display: inline-block; min-width:120px;'><label>" . __( 'Sort By', 'fetch-tweets' ) . "</label></span>",
			),
			'vAfterInputTag' => array(
				'order_by' => "<br />",
				'sort_by' => "<br />",
			),			
			'vDefault' => array(
				'order_by' => 'name',
				'sort_by' => 'RAND',
			),
		);					
		$arrFields[] = array(	// include retweets
			'strFieldID' => 'fetch_tweets_template_hashtag_include_retweets',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Retweets', 'fetch-tweets' ),
			'strType' => 'checkbox',
			'vLabel' => __( 'Include hashtags of retweets.', 'fetch-tweets' ),
			'vDefault' => true,
		);		
		$arrFields[] = array(	// case sensitivity
			'strFieldID' => 'fetch_tweets_template_hashtag_case_sensitive',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Case Sensitivity', 'fetch-tweets' ),
			'strType' => 'checkbox',
			'vLabel' => __( 'Treat WordPress and wordpress differently.', 'fetch-tweets' ),
			'vDefault' => true,
		);
		$arrFields[] = array(	// include the number sign
			'strFieldID' => 'fetch_tweets_template_hashtag_include_number_sign',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Prefix', 'fetch-tweets' ),
			'strType' => 'checkbox',
			'vLabel' => __( 'Add the # character at the beginning of the terms.', 'fetch-tweets' ),
			'vDefault' => true,
		);		
		$arrFields[] = array(	// enable title attribute
			'strFieldID' => 'fetch_tweets_template_hashtag_enable_title_attribute',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Title Attribute', 'fetch-tweets' ),
			'strType' => 'checkbox',
			'vLabel' => __( 'Show how many tweets mentioned the hash tags when on mouse hover.', 'fetch-tweets' ),
			'vDefault' => true,
		);				
		$arrFields[] = array(	// width
			'strFieldID' => 'fetch_tweets_template_hashtag_width',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Max Width', 'fetch-tweets' ),
			'strDescription' => __( 'The maximum width of the output.', 'fetch-tweets' ) . ' ' . __( 'Default', 'fetch-tweets' ) . ': 100%',
			'strType' => 'size',
			'vSizeUnits' => array(
				'%' => '%',
				'px' => 'px',
				'em' => 'em',
			),
			'vDefault' => array(
				'size'	=> 100,
				'unit'	=> '%',
			),
			'vDelimiter' => '<br />',
		);
		$arrFields[] = array(	// height 
			'strFieldID' => 'fetch_tweets_template_hashtag_height',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Max Height', 'fetch-tweets' ),
			'strDescription' => __( 'The maximum height of the output.', 'fetch-tweets' ) . ' ' . __( 'Default', 'fetch-tweets' ) . ': 100%',
			'strType' => 'size',
			'vSizeUnits' => array(
				'%' => '%',
				'px' => 'px',
				'em' => 'em',
			),
			'vDefault' => array(
				'size'	=> 100,
				'unit'	=> '%',
			),
			'vDelimiter' => '<br />',
		);		
		$arrFields[] = array(	// margins
			'strFieldID' => 'fetch_tweets_template_hashtag_margins',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Margins', 'fetch-tweets' ),
			'strDescription' => __( 'The margins of the output element. Leave them empty not to set any margin.', 'fetch-tweets' ),
			'strType' => 'size',
			'vLabel' => array(
				'top' => __( 'Top', 'fetch-tweets' ),
				'right' => __( 'Right', 'fetch-tweets' ),
				'bottom' => __( 'Bottom', 'fetch-tweets' ),
				'left' => __( 'Left', 'fetch-tweets' ),
			),
			'vSizeUnits' => array( '%' => '%', 'px' => 'px', 'em' => 'em', ),
			'vDelimiter' => '<br />',
		);		
		$arrFields[] = array(	// paddings
			'strFieldID' => 'fetch_tweets_template_hashtag_paddings',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Paddings', 'fetch-tweets' ),
			'strDescription' => __( 'The paddings of the output element. Leave them empty not to set any padding.', 'fetch-tweets' ),
			'strType' => 'size',
			'vLabel' => array(
				'top' => __( 'Top', 'fetch-tweets' ),
				'right' => __( 'Right', 'fetch-tweets' ),
				'bottom' => __( 'Bottom', 'fetch-tweets' ),
				'left' => __( 'Left', 'fetch-tweets' ),
			),
			'vSizeUnits' => array( '%' => '%', 'px' => 'px', 'em' => 'em', ),
			'vDelimiter' => '<br />',
		);		
						
		$arrFields[] = array(	// background color
			'strFieldID' => 'fetch_tweets_template_hashtag_background_color',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strTitle' => __( 'Background Color', 'fetch-tweets' ),
			'strType' => 'color',
			'vDefault' => 'transparent',
		);		
	
		$arrFields[] = array(  // single button
			'strFieldID' => 'fetch_tweets_template_hashtag_submit',
			'strSectionID' => 'fetch_tweets_template_hashtag',
			'strType' => 'submit',
			'strBeforeField' => "<div class='right-button'>",
			'strAfterField' => "</div>",
			'vLabelMinWidth' => 0,
			'vLabel' => __( 'Save Changes', 'fetch-tweets' ),
			'vClassAttribute' => 'button button-primary',
		);
		return $arrFields;		
		
	}
	
	public function validateSettings( $arrInput, $arrOriginal ) {
		
		return $arrInput;
		
	}
	
}