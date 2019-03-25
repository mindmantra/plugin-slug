<?php
/**
 * Base unit test case
 *
 * @package      Mindmantra\PluginSlug\Tests
 * @author       Dhaval Shah
 * @copyright    2019 Mindmantra
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Mindmantra\PluginSlug\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Abstract base class for all test case implementations.
 *
 * @package Mindmantra\PluginSlug\Tests
 * @since   1.0.0
 */
abstract class TestCase extends PHPUnitTestCase {
	use MockeryPHPUnitIntegration;

	/**
	 * Prepares the test environment before each test.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function setUp(): void {
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}
}
