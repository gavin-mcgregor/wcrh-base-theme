<?php

/**
 * WCRH Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WCRH Base Theme
 * @since WCRH Base Theme 1.0
 */

/**
 * Register block styles.
 */

if (!function_exists('wcrh_base_theme_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function wcrh_base_theme_block_styles()
	{

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __('Arrow icon', 'wcrh-base-theme'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __('Pill', 'wcrh-base-theme'),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'         => 'flex-center',
				'label'        => __('Flex Center'),
				'inline_style' => '
				.is-style-flex-center {
					display: flex;
					align-items: center;
				}',
			)
		);
	}
endif;

add_action('init', 'wcrh_base_theme_block_styles');

/**
 * Enqueue block stylesheets.
 */

if (!function_exists('wcrh_base_theme_block_stylesheets')) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function wcrh_base_theme_block_stylesheets()
	{
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'wcrh-base-theme-button-style-outline',
				'src'    => get_parent_theme_file_uri('assets/css/button-outline.css'),
				'ver'    => wp_get_theme(get_template())->get('Version'),
				'path'   => get_parent_theme_file_path('assets/css/button-outline.css'),
			)
		);

		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => 'wcrh-base-theme-group',
				'src'    => get_parent_theme_file_uri('assets/css/group.css'),
				'ver'    => wp_get_theme(get_template())->get('Version'),
				'path'   => get_parent_theme_file_path('assets/css/group.css'),
			)
		);

		wp_enqueue_block_style(
			'core/columns',
			array(
				'handle' => 'wcrh-base-theme-columns',
				'src'    => get_parent_theme_file_uri('assets/css/columns.css'),
				'ver'    => wp_get_theme(get_template())->get('Version'),
				'path'   => get_parent_theme_file_path('assets/css/columns.css'),
			)
		);
	}
endif;

add_action('init', 'wcrh_base_theme_block_stylesheets');

/**
 * Register pattern categories.
 */

if (!function_exists('wcrh_base_theme_pattern_categories')) :
	/**
	 * Register pattern categories
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function wcrh_base_theme_pattern_categories()
	{

		register_block_pattern_category(
			'wcrh_base_theme_page',
			array(
				'label'       => _x('Pages', 'Block pattern category', 'wcrh-base-theme'),
				'description' => __('A collection of full page layouts.', 'wcrh-base-theme'),
			)
		);
	}
endif;

add_action('init', 'wcrh_base_theme_pattern_categories');

/**
 * Register Category
 */

if (!function_exists('register_custom_block_category')) :
	/**
	 * Register Category
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function register_custom_block_category($categories)
	{
		return array_merge(
			array(
				array(
					'slug'  => 'custom-block',
					'title' => __('Custom Blocks'),
				),
				array(
					'slug'  => 'custom-layout',
					'title' => __('Custom Layouts'),
				),
			),
			$categories
		);
	}
endif;

add_filter('block_categories_all', 'register_custom_block_category', 10, 2);

/**
 * UN-Register Certain Blocks
 */

if (!function_exists('unregister_certain_blocks')) :
	/**
	 * UN-Register certain Blocks
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function unregister_certain_blocks()
	{
		wp_enqueue_script(
			'unregister-certain-blocks',
			get_template_directory_uri() . '/assets/js/unregister-certain-blocks.js',
			array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
			null,
			true
		);
	}
endif;

add_action('enqueue_block_editor_assets', 'unregister_certain_blocks');

/**
 * Register Block Variations
 */

if (!function_exists('register_block_variations')) :
	/**
	 * Register Block Variations
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function register_block_variations()
	{
		wp_enqueue_script(
			'register-block-variations',
			get_template_directory_uri() . '/assets/js/register-block-variations.js',
			array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
			null,
			true
		);
	}
endif;

add_action('enqueue_block_editor_assets', 'register_block_variations');

/**
 * Register Editor Styles
 */

if (!function_exists('wcrh_custom_editor_styles')) :
	/**
	 * Register Editor Styles
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function wcrh_custom_editor_styles()
	{
		$editor_css = get_template_directory_uri() . '/assets/css/editor.css';
		wp_enqueue_style('wcrh-editor-styles', $editor_css);
	}
endif;

add_action('enqueue_block_editor_assets', 'wcrh_custom_editor_styles');

/**
 * Enqueue frontend js
 */

if (!function_exists('wcrh_frontend_scripts')) :
	/**
	 * Enqueue frontend js
	 *
	 * @since WCRH Base Theme 1.0
	 * @return void
	 */
	function wcrh_frontend_scripts()
	{
		$frontend_js = get_template_directory_uri() . '/assets/js/header-footer-height.js';
		wp_enqueue_script('wcrh-header-footer-height', $frontend_js, array(), true);
	}
endif;

add_action('wp_enqueue_scripts', 'wcrh_frontend_scripts');

/**
 * Remove Admin Bar
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Remove "Explore Patterns"
 */

add_action('init', function () {
	remove_theme_support('core-block-patterns');
}, 9);
