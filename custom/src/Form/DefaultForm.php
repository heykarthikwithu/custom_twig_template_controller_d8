<?php

/**
 * @file
 * Contains \Drupal\custom\Form\DefaultForm.
 */

namespace Drupal\custom\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\custom\Form
 */
class DefaultForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['aa'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('aa'),
      '#maxlength' => 64,
      '#size' => 64,
    );
    $form['aaaa'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('aa'),
      '#maxlength' => 64,
      '#size' => 64,
    );


    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
