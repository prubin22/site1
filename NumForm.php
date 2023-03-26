<?php

namespace Drupal\forum\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class NumForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'forum_numform';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['num1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Num1'),
      '#required' => TRUE,
    ];

    $form['num2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Num2'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    if ($form_state->getValue('num1') && $form_state->getValue('num2')) {
      $num1 = $form_state->getValue('num1');
      $num2 = $form_state->getValue('num2');
      $sum = $num1 + $num2;
      $form['result'] = [
        '#type' => 'markup',
        '#markup' => $this->t('The sum of num1 and num2 is @sum', [
          '@sum' => $sum,
        ]),
      ];
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $form_state->setRebuild(TRUE);
  }
}
