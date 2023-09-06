<?php
if (!function_exists('pb_gorski_blocks_theme_support')) :
	function pb_gorski_blocks_theme_support()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __('Small', 'pb-gorski-blocks'),
					'shortName' => __('S', 'pb-gorski'),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __('Normal', 'pb-gorski-blocks'),
					'shortName' => __('M', 'pb-gorski'),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __('Large', 'pb-gorski-blocks'),
					'shortName' => __('L', 'pb-gorski'),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __('Huge', 'pb-gorski-blocks'),
					'shortName' => __('XL', 'pb-gorski'),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __('Background', 'pb-gorski-blocks'),
					'slug'  => 'background',
					'color' => '#f5efe0',
				),
				array(
					'name'  => __('Text', 'pb-gorski-blocks'),
					'slug'  => 'foreground',
					'color' => '#000',
				),
				array(
					'name'  => __('Primary', 'pb-gorski-blocks'),
					'slug'  => 'primary',
					'color' => '#cd2653',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Starter content
		add_theme_support('starter-content', [
			// Static front page set to Front
			'options' => [
				'show_on_front' => 'page',
				'page_on_front' => '{{front}}',
			],

			// Create the custom image attachments used as post thumbnails for pages.
			'attachments' => array(
				'image-opening' => array(
					'post_title' => _x('The New UMoMA Opens its Doors', 'Theme starter content', 'pb-gorski-blocks'),
					'file'       => 'assets/images/2020-landscape-1.png', // URL relative to the template directory.
				),
			),

			// Specify the core-defined pages to create and add custom thumbnails to some of them.
			'posts' => array(
				'front' => array(
					'post_type'    => 'page',
					'post_title'   => __('The New UMoMA Opens its Doors', 'pb-gorski-blocks'),
					// Use the above featured image with the predefined about page.
					'thumbnail'    => '{{image-opening}}',
					'post_content' => join(
						'',
						array(
							'<!-- wp:image {"align":"wide","sizeSlug":"large","className":"is-style-default"} -->',
							'<figure class="wp-block-image alignwide size-large is-style-default"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-1.png" alt=""/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __('The premier destination for modern art in Northern Sweden. Open from 10 AM to 6 PM every day during the summer months.', 'pb-gorski') . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:columns {"align":"wide"} -->',
							'<div class="wp-block-columns alignwide"><!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-1.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __('Works and Days', 'pb-gorski') . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __('August 1 -- December 1', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __('Read More', 'pb-gorski') . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-3.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __('Theatre of Operations', 'pb-gorski') . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __('October 1 -- December 1', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __('Read More', 'pb-gorski') . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column -->',
							'<!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-2.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __('The Life I Deserve', 'pb-gorski') . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __('August 1 -- December 1', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __('Read More', 'pb-gorski') . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-4.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __('From Signac to Matisse', 'pb-gorski') . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __('October 1 -- December 1', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __('Read More', 'pb-gorski') . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column --></div>',
							'<!-- /wp:columns -->',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-2.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","textColor":"accent"} -->',
							'<h2 class="has-accent-color has-text-align-center">' . __('”Cyborgs, as the philosopher Donna Haraway established, are not reverent. They do not remember the cosmos.”', 'pb-gorski') . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:paragraph {"dropCap":true} -->',
							'<p class="has-drop-cap">' . __('With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p>' . __('The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p></p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:group {"customBackgroundColor":"#ffffff","align":"wide"} -->',
							'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __('Become a Member and Get Exclusive Offers!', 'pb-gorski') . '</h2>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph {"align":"center"} -->',
							'<p class="has-text-align-center">' . __('Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'pb-gorski') . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"align":"center"} -->',
							'<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __('Join the Club', 'pb-gorski') . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:gallery {"ids":[39,38],"align":"wide"} -->',
							'<figure class="wp-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" alt="" data-id="39" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" data-link="assets/images/2020-square-2/" class="wp-image-39"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" alt="" data-id="38" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" data-link="' . get_theme_file_uri() . '/assets/images/2020-square-1/" class="wp-image-38"/></figure></li></ul></figure>',
							'<!-- /wp:gallery -->',
						)
					),
				),
				'about',
				'contact',
				'blog' => array(
					'post_type'    => 'page',
					'post_title'   => __('Blog', 'pb-gorski-blocks'),
					'post_content' => join(
						'',
						array(
							'<!-- wp:latest-posts {"postsToShow":100,"displayPostContent":true,"displayPostDate":true} /-->',
						)
					),
				),
			),
		]);
	}

	add_action('after_setup_theme', 'pb_gorski_blocks_theme_support');
endif;

/**
 * Register and Enqueue Styles.
 */
if (function_exists('register_block_style')) {
	function pb_gorski_blocks_register_block_styles()
	{

		/**
		 ** Register stylesheet
		 **/
		wp_register_style(
			'block-styles-stylesheet',
			get_template_directory_uri() . '/block-styles.css',
			array(),
			'1.1'
		);

		register_block_style(
			'core/heading',
			array(
				'name'					=> 'header-site-title',
				'label'					=> 'Header',
				'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/columns',
			array(
				'name'					=> 'landing-page-columns',
				'label'					=> 'Landing Page',
				'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'					=> 'featured-media-home',
				'label'					=> 'Home',
				'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'					=> 'header-nav',
				'label'					=> 'Header',
				'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/cover',
			array(
				'name'					=> 'header-cover',
				'label'					=> 'Header',
				'style_handle'	=> 'block-styles-stylesheet',
			)
		);
	}

	add_action('init', 'pb_gorski_blocks_register_block_styles');
}

function pb_gorski_blocks_register_styles()
{
	$theme_version = wp_get_theme()->get('Version');
	wp_enqueue_style('pb_gorski_blocks-style', get_stylesheet_uri(), array(), $theme_version);

	// wp_enqueue_script('tailwind', '//cdn.tailwindcss.com', '3.3.2');
	// wp_enqueue_script('tailwind-config', get_theme_file_uri('/assets/tailwind-config.js'), '1.0', array('tailwind'));

	wp_enqueue_script('swiper', '//cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', '9.4.1');
	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', '9.4.1');
	wp_enqueue_script('swiperMain', get_theme_file_uri('/assets/swiper-main.js'), '1.0', array('swiper'));

	wp_enqueue_style('custom-styles', get_theme_file_uri('/assets/styles.min.css'), '1.0', array('swiper-css'));

	wp_enqueue_style('google-fonts-api', '//fonts.googleapis.com', '1.0');
	wp_enqueue_style('google-fonts-gstatic', '//fonts.gstatic.com', '1.0');
	wp_enqueue_style('google-fonts-roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap', '1.0');

	wp_enqueue_script('customJS', get_theme_file_uri('/assets/custom-js.js'), '1.0', array('custom-js', 'tailwind-config'));
}
add_action('wp_enqueue_scripts', 'pb_gorski_blocks_register_styles');

/**
 * Register Block Patterns.
 */

if (function_exists('register_block_pattern')) {
	register_block_pattern(
		'pb-gorski-blocks/exhibitions-pattern',
		array(
			'title'   => __('Two columns of mixed content', 'pb-gorski'),
			'content' => "<!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-1.png\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading -->\n<h2>Works and Days</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\">August 1 – December 1</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-2.png\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading -->\n<h2>The Life I Deserve</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\">August 1 – December 1</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			'categories' => ['swiper', 'gallery']
		)
	);
}




function custom_post_types()
{
	register_post_type('inwestycje', array(
		'public' => true,
		'labels' => array(
			'name' => 'Inwestycje',
			'add_new_item' => 'Dodaj inwestycje',
			'edit_item' => 'Edytuj inwestycje',
			'all_items' => 'Wszystkie inwestycje',
			'singular_name' => 'inwestycje'
		),
		'menu_icon' => 'dashicons-flag',
		'show_in_rest' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'inwestycje'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies'  => array('category')
	));
	register_post_type('uslugi', array(
		'public' => true,
		'labels' => array(
			'name' => 'Usługi',
			'add_new_item' => 'Dodaj usługi',
			'edit_item' => 'Edytuj usługi',
			'all_items' => 'Wszystkie usługi',
			'singular_name' => 'Usługi'
		),
		'menu_icon' => 'dashicons-flag',
		'show_in_rest' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'uslugi'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies'  => array('category')
	));
};
add_action('init', 'custom_post_types');

function getGlobalWPObject()
{
	global $wp;
	$wpParsed = $wp->parse_request();
	return $wpParsed;
}


/**
 * Registers an FRONTEND stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles()
{
	add_editor_style('assets/styles.min.css');
}
add_action('admin_init', 'wpdocs_theme_add_editor_styles');

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles_editor()
{
	add_editor_style('assets/editor.css');
}
add_action('admin_init', 'wpdocs_theme_add_editor_styles_editor');
