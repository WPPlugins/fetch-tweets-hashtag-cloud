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
class FetchTweets_Template_Settings_Hashtag extends FetchTweets_Template_Settings {

	/*
	 * Modify these properties.
	 * */
	protected $sParentPageSlug = 'fetch_tweets_templates';	// in the url, the ... part of ?page=... 
	protected $sParentTabSlug = 'hashtag';	// in the url, the ... part of &tab=...
	protected $sTemplateName = 'Hashtag Cloud';	// the template name
	protected $sSectionID = 'fetch_tweets_template_hashtag';
	
	/*
	 * Modify these methods. 
	 * This defines form sections. Set the section ID and the description here.
	 * The array structure follows the rule of Admin Page Framework. ( https://github.com/michaeluno/admin-page-framework )
	 * */
	public function addSettingSections( $aSections ) {
			
		$aSections[ $this->sSectionID ] = array(
			'section_id'	=> $this->sSectionID,
			'page_slug'		=> $this->sParentPageSlug,
			'tab_slug'		=> $this->sParentTabSlug,
			'title'			=> $this->sTemplateName,
			'description'	=> sprintf( __( 'Options for the %1$s template.', 'fetch-tweets-hashtag-cloud' ), $this->sTemplateName ) . ' ' 
				. __( 'These will be the default values and be overridden by the arguments passed directly by the widgets, the shortcode, or the PHP function.', 'fetch-tweets-hashtag-cloud' ),
		);
		return $aSections;
	
	}
	
	/*
	 * This defines form fields. Return the field arrays. 
	 * The array structure follows the rule of Admin Page Framework. ( https://github.com/michaeluno/admin-page-framework )
	 * */
	public function addSettingFields( $aFields ) {
		
		if ( ! class_exists( 'FetchTweets_Commons' ) ) return $aFields;	// if the main class does not exist, do nothing.
				
		$aFields[ $this->sSectionID ] = array();
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_font_size' ] = array(	// font size
			'field_id' => 'fetch_tweets_template_hashtag_font_size',
			'section_id' => $this->sSectionID,
			'title' => __( 'Font Size', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'number',
			'label'	=>	__( 'Smallest', 'fetch-tweets-hashtag-cloud' ),
			'default'	=>	8,
			'attributes'	=>	array(
				'min'	=>	1,
			),
			'delimiter' => '<br />',
			array(
				'default'	=>	 22,
				'label'	=>	__( 'Largest', 'fetch-tweets-hashtag-cloud' ),
			)
		);
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_unit' ] = array(	// font unit 
			'field_id' => 'fetch_tweets_template_hashtag_unit',
			'section_id' => $this->sSectionID,
			'title' => __( 'Font Unit', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'select',
			'default' => 'pt',
			'label' => array(
				'px' => 'px',
				'pt' => 'pt',
				'em' => 'em',
			),
		);				
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_max_count' ] = array(	// max count
			'field_id' => 'fetch_tweets_template_hashtag_max_count',
			'section_id' => $this->sSectionID,
			'title' => __( 'Maximum Number of Hashtags', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'Items can be truncated with this number if there are too many. Set 0 for no limit.', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'number',
			'default' => 0,
			'attributes'	=>	array(
				'min'	=>	0,
			),			
		);	
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_required_count' ] = array(	// required counts
			'field_id' => 'fetch_tweets_template_hashtag_required_count',
			'section_id' => $this->sSectionID,
			'title' => __( 'Required Number of Tweets', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The minimum number of tweets containing the hashtag to display it. Hashtags that do not have the sufficient number of tweets will be omitted.', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'number',
			'default' => 1,
			'attributes'	=>	array(
				'min'	=>	1,
			),			
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_required_users' ] = array(	// required users
			'field_id' => 'fetch_tweets_template_hashtag_required_users',
			'section_id' => $this->sSectionID,
			'title' => __( 'Required Number of Users', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The minimum number of users who mentioned the hashtag. Hashtags that do not have the sufficient number of users will be omitted.', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'number',
			'default' => 1,
			'attributes'	=>	array(
				'min'	=>	1,
			),			
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_format' ] = array(	// format
			'field_id' => 'fetch_tweets_template_hashtag_format',
			'section_id' => $this->sSectionID,
			'title' => __( 'Format', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'select',
			'label' => array(
				'list'  => __( 'List', 'fetch-tweets-hashtag-cloud' ),
				'flat'  => __( 'Word Cloud', 'fetch-tweets-hashtag-cloud' ),
			),
			'default' => 'flat',
		);	
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_sort' ] = array(	// sort 
			'field_id' => 'fetch_tweets_template_hashtag_sort',
			'section_id' => $this->sSectionID,
			'title' => __( 'Sort', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'select',
			'label'	=>	array(
				'name'  => __( 'Name', 'fetch-tweets-hashtag-cloud' ),
				'occurrence'  => __( 'Frequency', 'fetch-tweets-hashtag-cloud' ),			
			),
			'before_input'	=>	"<span style='margin-top: 2px; vertical-align: top; display: inline-block; min-width:120px;'><label>" 
					. __( 'Ordered By', 'fetch-tweets-hashtag-cloud' ) 
				. "</label></span>",
			'after_input'	=>	'<br />',
			'default'	=>	'name',
			array(
				'label'	=>	array(
					'RAND'  => __( 'Random', 'fetch-tweets-hashtag-cloud' ),
					'ASC'  => __( 'Ascendant', 'fetch-tweets-hashtag-cloud' ),
					'DESC'  => __( 'Descendant', 'fetch-tweets-hashtag-cloud' ),					
				),
				'before_input'	=>	"<span style='margin-top: 2px; vertical-align: top; display: inline-block; min-width:120px;'><label>" 
						. __( 'Sort By', 'fetch-tweets-hashtag-cloud' ) 
					. "</label></span>",
				'default'	=>	'RAND',
			),
		);					
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_include_retweets' ] = array(	// include retweets
			'field_id' => 'fetch_tweets_template_hashtag_include_retweets',
			'section_id' => $this->sSectionID,
			'title' => __( 'Retweets', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'checkbox',
			'label' => __( 'Include hashtags of retweets.', 'fetch-tweets-hashtag-cloud' ),
			'default' => true,
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_case_sensitive' ] = array(	// case sensitivity
			'field_id' => 'fetch_tweets_template_hashtag_case_sensitive',
			'section_id' => $this->sSectionID,
			'title' => __( 'Case Sensitivity', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'checkbox',
			'label' => __( 'Treat WordPress and wordpress differently.', 'fetch-tweets-hashtag-cloud' ),
			'default' => true,
		);
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_include_number_sign' ] = array(	// include the number sign
			'field_id' => 'fetch_tweets_template_hashtag_include_number_sign',
			'section_id' => $this->sSectionID,
			'title' => __( 'Prefix', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'checkbox',
			'label' => __( 'Add the # character at the beginning of the terms.', 'fetch-tweets-hashtag-cloud' ),
			'default' => true,
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_enable_title_attribute' ] = array(	// enable title attribute
			'field_id' => 'fetch_tweets_template_hashtag_enable_title_attribute',
			'section_id' => $this->sSectionID,
			'title' => __( 'Title Attribute', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'checkbox',
			'label' => __( 'Show how many tweets mentioned the hash tags when on mouse hover.', 'fetch-tweets-hashtag-cloud' ),
			'default' => true,
		);				
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_width' ] = array(	// width
			'field_id' => 'fetch_tweets_template_hashtag_width',
			'section_id' => $this->sSectionID,
			'title' => __( 'Max Width', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The maximum width of the output.', 'fetch-tweets-hashtag-cloud' ) . ' ' . __( 'Default', 'fetch-tweets-hashtag-cloud' ) . ': 100%',
			'type' => 'size',
			'units' => array(
				'%' => '%',
				'px' => 'px',
				'em' => 'em',
			),
			'default' => array(
				'size'	=> 100,
				'unit'	=> '%',
			),
			'delimiter' => '<br />',
		);
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_height' ] = array(	// height 
			'field_id' => 'fetch_tweets_template_hashtag_height',
			'section_id' => $this->sSectionID,
			'title' => __( 'Max Height', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The maximum height of the output.', 'fetch-tweets-hashtag-cloud' ) . ' ' . __( 'Default', 'fetch-tweets-hashtag-cloud' ) . ': 100%',
			'type' => 'size',
			'units' => array(
				'%' => '%',
				'px' => 'px',
				'em' => 'em',
			),
			'default' => array(
				'size'	=> 100,
				'unit'	=> '%',
			),
			'delimiter' => '<br />',
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_margins' ] = array(	// margins
			'field_id' => 'fetch_tweets_template_hashtag_margins',
			'section_id' => $this->sSectionID,
			'title' => __( 'Margins', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The margins of the output element. Leave them empty not to set any margin.', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'size',
			'units' => array( '%' => '%', 'px' => 'px', 'em' => 'em', ),
			'delimiter' => '<br />',
			'label'	=>	__( 'Top', 'fetch-tweets-hashtag-cloud' ),
			array(
				'label'	=>	__( 'Right', 'fetch-tweets-hashtag-cloud' ),
			),
			array(
				'label'	=>	__( 'Bottom', 'fetch-tweets-hashtag-cloud' ),
			),			
			array(
				'label'	=>	__( 'Left', 'fetch-tweets-hashtag-cloud' ),
			),			
		);		
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_paddings' ] = array(	// paddings
			'field_id' => 'fetch_tweets_template_hashtag_paddings',
			'section_id' => $this->sSectionID,
			'title' => __( 'Paddings', 'fetch-tweets-hashtag-cloud' ),
			'description' => __( 'The paddings of the output element. Leave them empty not to set any padding.', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'size',
			'units' => array( '%' => '%', 'px' => 'px', 'em' => 'em', ),
			'delimiter' => '<br />',
			'label'	=>	__( 'Top', 'fetch-tweets-hashtag-cloud' ),
			array(
				'label'	=>	__( 'Right', 'fetch-tweets-hashtag-cloud' ),
			),
			array(
				'label'	=>	__( 'Bottom', 'fetch-tweets-hashtag-cloud' ),
			),			
			array(
				'label'	=>	__( 'Left', 'fetch-tweets-hashtag-cloud' ),
			),						
		);		
						
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_background_color' ] = array(	// background color
			'field_id' => 'fetch_tweets_template_hashtag_background_color',
			'section_id' => $this->sSectionID,
			'title' => __( 'Background Color', 'fetch-tweets-hashtag-cloud' ),
			'type' => 'color',
			'default' => 'transparent',
		);		
	
		$aFields[ $this->sSectionID ][ 'fetch_tweets_template_hashtag_submit' ] = array(  // single button
			'field_id' => 'fetch_tweets_template_hashtag_submit',
			'section_id' => $this->sSectionID,
			'type' => 'submit',
			'before_field' => "<div class='right-button'>",
			'after_field' => "</div>",
			'label_min_width' => 0,
			'label' => __( 'Save Changes', 'fetch-tweets-hashtag-cloud' ),
			'attributes'	=>	array(
				'class'	=>	'button button-primary',
			)
		);
		return $aFields;		
		
	}
	
	public function validateSettings( $aInput, $aOriginal ) {

		return $aInput;
		
	}
	
}