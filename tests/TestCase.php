<?php 

namespace App\Plugin\YourPluginName\Tests;

/**
 * Extend this test case for all test cases of this plugin
 */

use Tests\DBTestCase;

class SomeCaseTest extends DBTestCase
{
	public function test_demo()
	{
		$this->assertTrue(true);
	}
}