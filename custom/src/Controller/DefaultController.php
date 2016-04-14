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
    // $form = \Drupal::formBuilder()->getForm('Drupal\custom\Form\DefaultForm');
    $form = \Drupal::formBuilder()->getForm('Drupal\ajax_example\Form\AjaxExampleForm');
    $aa = drupal_render($form);
    $a = '';
    return array(
      '#theme' => 'custom',
      '#test_var' => $this->t('Test Value kkkkk'),
      '#test_var_1' => $aa,
    );
  }

}
