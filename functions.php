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
	wp_enqueue_script('countup2', '//cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.0/countUp.min.js', '2.0.0');
	wp_enqueue_script('countup', '//inorganik.github.io/countUp.js/dist/countUp.umd.js', '2.0.1');
	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', '9.4.1');
	wp_enqueue_script('swiperMain', get_theme_file_uri('/assets/swiper-main.js'), '1.0', array('swiper'));
	wp_enqueue_script('aos', '//unpkg.com/aos@2.3.1/dist/aos.js', '2.3');


	wp_enqueue_style('custom-styles', get_theme_file_uri('/assets/styles.min.css'), '1.0', array('swiper-css'));
	wp_enqueue_style('google-fonts-api', '//fonts.googleapis.com', '1.0');
	wp_enqueue_style('google-fonts-gstatic', '//fonts.gstatic.com', '1.0');
	wp_enqueue_style('google-fonts-roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap', '1.0');
	wp_enqueue_style('aos-styles', '//unpkg.com/aos@2.3.1/dist/aos.css', '1.0');
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
			'name' => 'Inwestycje (Osiedla)',
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
		'taxonomies'  => array('category', 'osiedla')
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





function cptui_register_my_cpts_mieszkania()
{

	/**
	 * Post Type: Mieszkanie.
	 */

	$labels = [
		"name" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"singular_name" => esc_html__("Mieszkania", "mutiny-blocks"),
		"menu_name" => esc_html__("Mieszkania", "mutiny-blocks"),
		"all_items" => esc_html__("Mieszkania", "mutiny-blocks"),
		"add_new" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"add_new_item" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"edit_item" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"new_item" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"view_item" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"view_items" => esc_html__("Mieszkania", "mutiny-blocks"),
		"search_items" => esc_html__("Mieszkanie", "mutiny-blocks"),
	];

	$args = [
		"label" => esc_html__("Mieszkanie", "mutiny-blocks"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "mieszkania", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
		"taxonomies" => ["osiedla", "miasto", "budynek", "nr", "pokoje"],
		"show_in_graphql" => false,
	];

	register_post_type("mieszkania", $args);
}

add_action('init', 'cptui_register_my_cpts_mieszkania', -1);


function modify_filter_button($string)
{
	return '
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="injected-svg inject-svg icon-search">
		<defs>
			<style></style>
		</defs>
		<g id="icon_search" fill="none" stroke="#fff" stroke-width="2">
			<circle cx="6.5" cy="6.5" r="5.5"></circle>
			<path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-4-4"></path>
		</g>
	</svg>
	Szukaj
	';
}
add_filter('beautiful_filters_apply_button', 'modify_filter_button', 10, 1);

function cptui_register_my_cpts_lokale()
{

	/**
	 * Post Type: Lokale.
	 */

	$labels = [
		"name" => esc_html__("Lokale", "mutiny-blocks"),
		"singular_name" => esc_html__("Lokal", "mutiny-blocks"),
		"menu_name" => esc_html__("Lokale", "mutiny-blocks"),
		"all_items" => esc_html__("Lokale", "mutiny-blocks"),
		"add_new" => esc_html__("Lokal", "mutiny-blocks"),
		"add_new_item" => esc_html__("Lokal", "mutiny-blocks"),
		"edit_item" => esc_html__("Lokal", "mutiny-blocks"),
		"new_item" => esc_html__("Lokal", "mutiny-blocks"),
		"view_item" => esc_html__("Lokal", "mutiny-blocks"),
		"view_items" => esc_html__("Lokale", "mutiny-blocks"),
		"search_items" => esc_html__("Lokal", "mutiny-blocks"),
	];

	$args = [
		"label" => esc_html__("Lokale", "mutiny-blocks"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "lokale", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
		"taxonomies" => ["area"],
		"show_in_graphql" => false,
	];

	register_post_type("lokale", $args);
}

add_action('init', 'cptui_register_my_cpts_lokale', -1);


function my_custom_filter_layout($layout, $terms, $taxonomy, $multiple, $target, $options)
{ ?>
	<script>
		window.addEventListener('DOMContentLoaded', () => {
			let _target = "<?php echo $target; ?>";
			document.querySelectorAll(_target + ' .filter-custom-layout [data-termid]').forEach((el) => {
				el.addEventListener('click', function(e) {
					e.preventDefault();
					let ymc = YMCTools({
						target: _target,
						self: this
					});
					ymc.updateParams();
					ymc.getFilterPosts();
				});
			});
		});
	</script>

<?php
	if (count($terms)) {
		$multiple = ($multiple) ? 'multiple' : '';
		$terms_list = implode(",", $terms);
		$layout = '<ul>';
		$layout .= '<li><a class="all active" href="#" data-selected="all" data-termid="' . esc_attr($terms_list) . '">' . esc_html__('ALL', 'theme') . '</a></li>';

		foreach ($taxonomy as $tax) {
			$layout .= '<li>';
			$layout .= '<header>' . get_taxonomy($tax)->label . '</header>';
			$layout .= '<ul>';
			foreach ($terms as $term) {
				if ($tax === get_term($term)->taxonomy) {
					$class_icon = '';
					$color_icon = '';
					foreach ($options as $obj) {
						if ($obj->termid === $term) {
							$class_icon = $obj->classicon;
							$color_icon = $obj->coloricon;
							break;
						}
					}
					$layout .= '<li><a class="' . $multiple . '" href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '">' .
						'<i class="' . esc_attr($class_icon) . '" style="color:' . esc_attr($color_icon) . '"></i>' . esc_html(get_term($term)->name) . '</a></li>';
				}
			}
			$layout .= '</ul></li>';
		}
		$layout .= '</ul>';
		$layout .= '<div class="posts-found"></div>';
	}
	return $layout;
}

add_filter('ymc_filter_custom_layout_148_1', 'my_custom_filter_layout', 10, 6);

function my_custom_post_layout($layout, $post_id, $filter_id, $increment_post, $arrOptions)
{
	$layout  = '<h2>' . get_the_title($post_id) . '</h2>';
	$layout .= '<p>' . wp_trim_words(get_the_content($post_id), 30) . '</p>';
	$layout .= '<a href="' . get_the_permalink($post_id) . '">-></a>';
	// $layout .= '<a class="' . esc_attr($arrOptions['class_popup']) . '" data-postid="' . esc_attr($post_id) . '" href="#">Open Popup</a>';
	$term_list = get_the_terms($post_id);
	$list_categories = '';
	foreach ($term_list as $term_single) {
		$list_categories .= '<span class="cat-inner">' . esc_html($term_single->name) . '</span>';
	}
	return $layout;
}
add_filter('ymc_post_custom_layout_148_1', 'my_custom_post_layout', 10, 5);
