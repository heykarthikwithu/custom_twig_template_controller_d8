<?php

/**
 * @file
 * Contains \Drupal\custom\Tests\DefaultController.
 */

namespace Drupal\custom\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the custom module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "custom DefaultController's controller functionality",
      'description' => 'Test Unit for module custom and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests custom functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module custom.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
