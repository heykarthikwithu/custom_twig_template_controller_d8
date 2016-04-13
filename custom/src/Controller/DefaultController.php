<?php

/**
 * @file
 * Contains \Drupal\custom\Controller\DefaultController.
 */

namespace Drupal\custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\custom\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

  public function content() {
    return array(
      '#theme' => 'custom',
      '#test_var' => $this->t('Test Value kkkkk'),
    );
  }

}
