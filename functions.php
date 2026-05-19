<?php
/**
 * Twenty Twenty-Five functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * Custom setup and functions that are not directly related to the theme logic.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom hooks and registrations.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Custom post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';
