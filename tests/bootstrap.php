<?php
/**
 * PHPUnit bootstrap
 *
 * @package      Mindmantra\PluginSlug\Tests
 * @author       Dhaval Shah
 * @copyright    2019 Mindmantra
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Mindmantra\PluginSlug\Tests;

// Check for a `--testsuite integration` arg when calling phpunit, and use it to conditionally load up WordPress.
$plugin_slug_argv = $GLOBALS['argv'];
$plugin_slug_key  = (int) array_search( '--testsuite', $plugin_slug_argv, true );

if ( $plugin_slug_key && 'integration' === $plugin_slug_argv[ $plugin_slug_key + 1 ] ) {
	$plugin_slug_tests_dir = getenv( 'WP_TESTS_DIR' );

	if ( ! $plugin_slug_tests_dir ) {
		$plugin_slug_tests_dir = '/tmp/wordpress-tests-lib';
	}

	// Give access to tests_add_filter() function.
	require_once $plugin_slug_tests_dir . '/includes/functions.php';

	/**
	 * Manually load the plugin being tested.
	 */
	\tests_add_filter(
		'muplugins_loaded',
		function () {
			require dirname( __DIR__ ) . '/plugin-slug.php';
		}
	);

	// Start up the WP testing environment.
	require $plugin_slug_tests_dir . '/includes/bootstrap.php';
}
