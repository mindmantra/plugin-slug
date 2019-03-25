<?php
/**
 * Unit tests for Foo
 *
 * @package      Mindmantra\PluginSlug\Tests\Unit
 * @author       Dhaval Shah
 * @copyright    2019 Mindmantra
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Mindmantra\PluginSlug\Tests\Unit;

use Mindmantra\PluginSlug\Foo as Testee;
use Mindmantra\PluginSlug\Tests\TestCase;

/**
 * Foo test case.
 */
class FooTest extends TestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.
		static::assertTrue( ( new Testee() )->is_true() );
	}

	/**
	 * A single example test.
	 */
	public function test_foo() {
		// Replace this with some actual testing code.
		static::assertFalse( false );
	}

	/**
	 * A single example test.
	 */
	public function test_bar() {
		// Replace this with some actual testing code.
		static::assertEquals( 'Foo::bar()', ( new Testee() )->bar() );
	}
}
