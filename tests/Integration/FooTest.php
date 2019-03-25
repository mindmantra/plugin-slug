<?php
/**
 * Integration tests for Foo
 *
 * @package      Mindmantra\PluginSlug\Tests\Integration
 * @author       Dhaval Shah
 * @copyright    2019 Mindmantra
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Mindmantra\PluginSlug\Tests\Integration;

use Mindmantra\PluginSlug\Foo as Testee;
use WP_UnitTestCase;

/**
 * Foo test case.
 */
class FooTest extends WP_UnitTestCase {
	/**
	 * A single example test.
	 */
	public function test_foo() {
		// Replace this with some actual integration testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}
}
