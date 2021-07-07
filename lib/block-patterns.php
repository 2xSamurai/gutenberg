<?php
/**
 * Block patterns registration.
 *
 * @package gutenberg
 */

/**
 * Register Gutenberg bundled patterns.
 */
function register_gutenberg_patterns() {
	// Register categories used for block patterns.
	if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( 'query' ) ) {
		register_block_pattern_category( 'query', array( 'label' => __( 'Query', 'gutenberg' ) ) );
		register_block_pattern_category( 'page-header', array( 'label' => __( 'Page Header', 'gutenberg' ) ) );
		register_block_pattern_category( 'page-footer', array( 'label' => __( 'Page Footer', 'gutenberg' ) ) );
	}

	$patterns = array(
		'query-standard-posts'                 => array(
			'title'      => __( 'Standard', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
							<div class="wp-block-query">
							<!-- wp:post-template -->
							<!-- wp:post-title {"isLink":true} /-->
							<!-- wp:post-featured-image  {"isLink":true,"align":"wide"} /-->
							<!-- wp:post-excerpt /-->
							<!-- wp:separator -->
							<hr class="wp-block-separator"/>
							<!-- /wp:separator -->
							<!-- wp:post-date /-->
							<!-- /wp:post-template -->
							</div>
							<!-- /wp:query -->',
		),
		'query-medium-posts'                   => array(
			'title'      => __( 'Image at left', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
							<div class="wp-block-query">
							<!-- wp:post-template -->
							<!-- wp:columns {"align":"wide"} -->
							<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
							<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"isLink":true} /--></div>
							<!-- /wp:column -->
							<!-- wp:column {"width":"33.33%"} -->
							<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title {"isLink":true} /-->
							<!-- wp:post-excerpt /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->
							<!-- /wp:post-template -->
							</div>
							<!-- /wp:query -->',
		),
		'query-small-posts'                    => array(
			'title'      => __( 'Small image and title', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
							<div class="wp-block-query">
							<!-- wp:post-template -->
							<!-- wp:columns {"verticalAlignment":"center"} -->
							<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true} /--></div>
							<!-- /wp:column -->
							<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"isLink":true} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->
							<!-- /wp:post-template -->
							</div>
							<!-- /wp:query -->',
		),
		'query-grid-posts'                     => array(
			'title'      => __( 'Grid', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
							<div class="wp-block-query">
							<!-- wp:post-template -->
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
							<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /-->
							<!-- wp:post-excerpt {"wordCount":20} /-->
							<!-- wp:post-date /--></div>
							<!-- /wp:group -->
							<!-- /wp:post-template -->
							</div>
							<!-- /wp:query -->',
		),
		'query-large-title-posts'              => array(
			'title'      => __( 'Large title', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}},"color":{"text":"#ffffff","background":"#000000"}}} -->
							<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#000000;color:#ffffff;padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
							<div class="wp-block-query"><!-- wp:post-template -->
							<!-- wp:separator {"customColor":"#ffffff","align":"wide","className":"is-style-wide"} -->
							<hr class="wp-block-separator alignwide has-text-color has-background is-style-wide" style="background-color:#ffffff;color:#ffffff"/>
							<!-- /wp:separator -->

							<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
							<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-date {"style":{"color":{"text":"#ffffff"}},"fontSize":"extra-small"} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"72px","lineHeight":"1.1"},"color":{"text":"#ffffff","link":"#ffffff"}}} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->
							<!-- /wp:post-template --></div>
							<!-- /wp:query --></div>
							<!-- /wp:group -->',
		),
		'query-offset-posts'                   => array(
			'title'      => __( 'Offset', 'gutenberg' ),
			'blockTypes' => array( 'core/query' ),
			'categories' => array( 'query' ),
			'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
							<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:columns -->
							<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
							<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
							<div class="wp-block-query"><!-- wp:post-template -->
							<!-- wp:post-featured-image /-->
							<!-- wp:post-title /-->
							<!-- wp:post-date /-->
							<!-- wp:spacer {"height":200} -->
							<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->
							<!-- /wp:post-template --></div>
							<!-- /wp:query --></div>
							<!-- /wp:column -->
							<!-- wp:column {"width":"50%"} -->
							<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"query":{"perPage":2,"pages":0,"offset":2,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
							<div class="wp-block-query"><!-- wp:post-template -->
							<!-- wp:spacer {"height":200} -->
							<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->
							<!-- wp:post-featured-image /-->
							<!-- wp:post-title /-->
							<!-- wp:post-date /-->
							<!-- /wp:post-template --></div>
							<!-- /wp:query --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns --></div>
							<!-- /wp:group -->',
		),
		// Initial block pattern to be used with block transformations with patterns.
		'social-links-shared-background-color' => array(
			'title'         => __( 'Social links with a shared background color', 'gutenberg' ),
			'categories'    => array( 'buttons' ),
			'blockTypes'    => array( 'core/social-links' ),
			'viewportWidth' => 500,
			'content'       => '<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#3962e3","iconBackgroundColorValue":"#3962e3","className":"has-icon-color"} -->
								<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
								<!-- wp:social-link {"url":"#","service":"chain"} /-->
								<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
								<!-- /wp:social-links -->',
		),
		'template-part/header-site-title-navigation' => array(
			'title'      => __( 'Header with title and navigation', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:columns {"isStackedOnMobile":false,"align":"full","className":"alignfull are-vertically-aligned-center"} -->
							<div class="wp-block-columns alignfull is-not-stacked-on-mobile are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:33.33%"><!-- wp:site-title {"fontSize":"normal"} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:66.66%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'template-part/header-logo-site-title-navigation' => array(
			'title'      => __( 'Header with logo, title and navigation', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:columns {"isStackedOnMobile":false,"align":"full","className":"are-vertically-aligned-center"} -->
							<div class="wp-block-columns alignfull is-not-stacked-on-mobile are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"32px","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:32px"><!-- wp:site-logo {"width":32} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"width":""} -->
							<div class="wp-block-column"><!-- wp:site-title {"fontSize":"normal"} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'template-part/header-site-logo-navigation' => array(
			'title'      => __( 'Header with logo and navigation', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:columns {"isStackedOnMobile":false,"align":"full","className":"alignfull are-vertically-aligned-center"} -->
							<div class="wp-block-columns alignfull is-not-stacked-on-mobile are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"32px","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:32px"><!-- wp:site-logo {"width":32} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'template-part/header-with-social-links' => array(
			'title'      => __( 'Header with social links', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:columns {"isStackedOnMobile":false,"verticalAlignment":"center","align":"full"} -->
							<div class="wp-block-columns alignfull is-not-stacked-on-mobile are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"left","isResponsive":true} /--></div>
							<!-- /wp:column -->
							<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-title {"textAlign":"center"} /--></div>
							<!-- /wp:column -->
							<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
							<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:social-links {"className":"items-justified-right is-style-logos-only"} -->
							<ul class="wp-block-social-links items-justified-right is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
							<!-- wp:social-link {"url":"#","service":"instagram"} /-->
							<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
							<!-- /wp:social-links --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'template-part/centered-header' => array(
			'title'      => __( 'Centered page header', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
							<div class="wp-block-group alignfull" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em">

							<!-- wp:site-logo {"align":"center"} /-->

							<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontSize":"48px","textTransform":"capitalize","lineHeight":"1.1"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

							<!-- wp:site-tagline {"textAlign":"center"} /-->

							<!-- wp:spacer {"height":40} -->
							<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:navigation {"orientation":"horizontal","itemsJustification":"center","isResponsive":true} /--></div>
							<!-- /wp:group -->',
		),
		'template-part/header-large-image' => array(
			'title'      => __( 'Header with large image', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:cover {"url":"https://s.w.org/images/core/5.8/forest.jpg","id":2613,"minHeight":600,"contentPosition":"center center","align":"full"} -->
							<div class="wp-block-cover alignfull has-background-dim" style="min-height:600px"><img class="wp-block-cover__image-background wp-image-2613" alt="" src="https://s.w.org/images/core/5.8/forest.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
							<div class="wp-block-columns is-not-stacked-on-mobile alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
							<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"#FFFFFF"}}}}} /--></div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","fontSize":"normal","isResponsive":true} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->

							<!-- wp:spacer {"height":400} -->
							<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:columns {"align":"wide"} -->
							<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
							<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
							<h2 style="font-size:48px">' . esc_html__( 'Our natural environment provides endless opportunities for adventure.', 'default' ) . '</h2>
							<!-- /wp:heading -->

							<!-- wp:button {"style":{"color":{"text":"#000000","background":"#ffffff"},"border":{"radius":0}}} -->
							<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background no-border-radius" href="#" style="background-color:#ffffff;color:#000000">' . esc_html__( 'Learn more.', 'default' ) . '</a></div>
							<!-- /wp:button --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->

							<!-- wp:column -->
							<div class="wp-block-column"></div>
							<!-- /wp:column --></div></div>
							<!-- /wp:cover -->',
		),
		'template-part/modern-header-with-image-on-the-right' => array(
			'title'      => __( 'Modern header with image on the right', 'gutenberg' ),
			'categories'    => array( 'page-header' ),
			'blockTypes' => array( 'core/template-part/header' ),
			'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":2589,"mediaLink":"https://s.w.org/images/core/5.8/nature-above-02.jpg","mediaType":"image","imageFill":true,"style":{"color":{"background":"#d7e4d9","text":"#000000"},"elements":{"link":{"color":{"text":"#000000"}}}}} -->
							<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-text-color has-background has-link-color" style="background-color:#d7e4d9;color:#000000"><figure class="wp-block-media-text__media" style="background-image:url(https://s.w.org/images/core/5.8/nature-above-02.jpg);background-position:50% 50%"><img src="https://s.w.org/images/core/5.8/nature-above-02.jpg" alt="" class="wp-image-2589 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":50} -->
							<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:site-logo {"className":"is-style-default"} /-->

							<!-- wp:spacer {"height":400} -->
							<div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:site-title {"style":{"typography":{"textTransform":"capitalize","fontSize":"48px","lineHeight":"1.0"}}} /-->

							<!-- wp:navigation {"orientation":"horizontal","color":{"text":"#161616"}},"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"normal"} /-->

							<!-- wp:spacer {"height":50} -->
							<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer --></div></div>
							<!-- /wp:media-text -->',
		),
		'template-part/footer-navigation-credit' => array(
			'title'      => __( 'Footer with navigation and credit line', 'gutenberg' ),
			'categories'    => array( 'page-footer' ),
			'blockTypes' => array( 'core/template-part/footer' ),
			'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
							<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:navigation {"orientation":"horizontal","fontSize":"normal"} /--></div>
							<!-- /wp:column -->

							<!-- wp:column {"style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
							<div class="wp-block-column" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:paragraph {"align":"right","fontSize":"normal"} -->
							<p class="has-text-align-right has-normal-font-size">' . esc_html__( 'Proudly powered by WordPress', 'default' ) . '</p>
							<!-- /wp:paragraph --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'template-part/footer-centered-social' => array(
			'title'      => __( 'Centered footer with social links', 'gutenberg' ),
			'categories'    => array( 'page-footer' ),
			'blockTypes' => array( 'core/template-part/footer' ),
			'content'    => '<!-- wp:spacer {"height":30} --><div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:social-links {"className":"items-justified-center is-style-logos-only"} --> <ul class="wp-block-social-links items-justified-center is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /--> <!-- wp:social-link {"url":"#","service":"instagram"} /--> <!-- wp:social-link {"url":"#","service":"mail"} /--></ul> <!-- /wp:social-links --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} --><p class="has-text-align-center" style="font-size:16px">' . esc_html__( 'Powered by WordPress', 'default' ) . '</p><!-- /wp:paragraph -->', ),
		'template-part/footer-latest-posts' => array(
			'title'      => __( 'Footer with latest posts', 'gutenberg' ),
			'categories'    => array( 'page-footer' ),
			'blockTypes' => array( 'core/template-part/footer' ),
			'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#121212","text":"#f1f1f1"},"elements":{"link":{"color":{"text":"#f1f1f1"}}}}} -->
							<div class="wp-block-group alignfull has-text-color has-background has-link-color" style="background-color:#121212;color:#f1f1f1"><!-- wp:spacer {"height":10} -->
							<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->
							<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":12,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"large","addLinkToFeaturedImage":true} /-->
							<!-- wp:spacer {"height":20} -->
							<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->
							<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
							<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
							<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:site-title {"fontSize":"large"} /--></div>
							<!-- /wp:column -->
							<!-- wp:column {"verticalAlignment":"bottom","width":"66.67%"} -->
							<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.67%"><!-- wp:paragraph {"align":"right","fontSize":"extra-small"} -->
							<p class="has-text-align-right has-extra-small-font-size">' . esc_html__( '© 2021 The Earth', 'default' ) . '</p>
							<!-- /wp:paragraph --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->
							<!-- wp:spacer {"height":10} -->
							<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer --></div>
							<!-- /wp:group -->',
		),
		'template-part/footer-modern' => array(
			'title'      => __( 'Modern footer with description and logo', 'gutenberg' ),
			'categories'    => array( 'page-footer' ),
			'blockTypes' => array( 'core/template-part/footer' ),
			'content'    => '<!-- wp:columns {"align":"full","style":{"color":{"background":"#d7e4d9"}}} -->
							<div class="wp-block-columns alignfull has-background" style="background-color:#d7e4d9"><!-- wp:column {"width":"33%"} -->
							<div class="wp-block-column" style="flex-basis:33%"><!-- wp:paragraph -->
							<p><strong>' . esc_html__( 'ABOUT US', 'default' ) . '</strong></p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph -->
							<p>' . esc_html__( 'This website has been around since 2003. Its current iteration includes a photography blog, an art gallery dedicated to found geometric shapes, and a store that sells t-shirts.', 'default' ) . '</p>
							<!-- /wp:paragraph -->
							<!-- wp:spacer {"height":200} -->
							<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->
							<!-- wp:paragraph {"fontSize":"extra-small"} -->
							<p class="has-extra-small-font-size">' . esc_html__( '© The Earth', 'default' ) . '</p>
							<!-- /wp:paragraph --></div>
							<!-- /wp:column -->
							<!-- wp:column {"width":"33.33%"} -->
							<div class="wp-block-column" style="flex-basis:33.33%"></div>
							<!-- /wp:column -->
							<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
							<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:site-logo {"align":"right","width":40} /--></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
		),
		'social-links/shared-background-color' => array(
			'title'         => __( 'Social links with a shared background color', 'gutenberg' ),
			'categories'    => array( 'buttons' ),
			'blockTypes'    => array( 'core/social-links' ),
			'viewportWidth' => 500,
			'content'       => '<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#3962e3","iconBackgroundColorValue":"#3962e3","className":"has-icon-color"} -->
								<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
								<!-- wp:social-link {"url":"#","service":"chain"} /-->
								<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
								<!-- /wp:social-links -->',
		)
	);

	foreach ( $patterns as $name => $pattern ) {
		$pattern_name = 'core/' . $name;
		if ( ! WP_Block_Patterns_Registry::get_instance()->is_registered( $pattern_name ) ) {
			register_block_pattern( $pattern_name, $pattern );
		}
	}
}

/**
 * Deactivate the legacy patterns bundled with WordPress.
 */
function remove_core_patterns() {
	$core_block_patterns = array(
		'text-two-columns',
		'two-buttons',
		'two-images',
		'text-two-columns-with-images',
		'text-three-columns-buttons',
		'large-header',
		'large-header-button',
		'three-buttons',
		'heading-paragraph',
		'quote',
		'query-standard-posts',
		'query-medium-posts',
		'query-small-posts',
		'query-grid-posts',
		'query-large-title-posts',
		'query-offset-posts',
		'social-links-shared-background-color',
	);

	foreach ( $core_block_patterns as $core_block_pattern ) {
		$name = 'core/' . $core_block_pattern;
		if ( WP_Block_Patterns_Registry::get_instance()->is_registered( $name ) ) {
			unregister_block_pattern( $name );
		}
	}
}

/**
 * Import patterns from wordpress.org/patterns.
 */
function load_remote_patterns() {
	// This is the core function that provides the same feature.
	if ( function_exists( '_load_remote_block_patterns' ) ) {
		return;
	}
	$patterns = get_transient( 'gutenberg_remote_block_patterns' );
	if ( ! $patterns ) {
		$request         = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' );
		$core_keyword_id = 11; // 11 is the ID for "core".
		$request->set_param( 'keyword', $core_keyword_id );
		$response = rest_do_request( $request );
		if ( $response->is_error() ) {
			return;
		}
		$patterns = $response->get_data();
		set_transient( 'gutenberg_remote_block_patterns', $patterns, HOUR_IN_SECONDS );
	}

	foreach ( $patterns as $settings ) {
		$pattern_name = 'core/' . sanitize_title( $settings['title'] );
		register_block_pattern( $pattern_name, (array) $settings );
	}
}

add_action(
	'init',
	function() {
		if ( ! get_theme_support( 'core-block-patterns' ) || ! function_exists( 'unregister_block_pattern' ) ) {
			return;
		}
		remove_core_patterns();
		register_gutenberg_patterns();
	}
);

add_action(
	'current_screen',
	function( $current_screen ) {
		if ( ! get_theme_support( 'core-block-patterns' ) ) {
			return;
		}

		$is_site_editor = ( function_exists( 'gutenberg_is_edit_site_page' ) && gutenberg_is_edit_site_page( $current_screen->id ) );
		if ( $current_screen->is_block_editor || $is_site_editor ) {
			load_remote_patterns();
		}
	}
);
