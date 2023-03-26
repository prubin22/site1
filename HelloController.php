<?php
namespace Drupal\NumForm\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\forum\Form\NumForm;
use Drupal\Core\Render\Element;

class HelloController extends ControllerBase {
  public function content() {
    // Get an instance of the NumForm.
    $num_form = \Drupal::formBuilder()->getForm('Drupal\forum\Form\NumForm');

    // Render the form.
    $num_form_output = \Drupal::service('renderer')->render($num_form);

    // Output the form and the result.
    return [
      '#type' => 'markup',
      '#markup' => $num_form_output,
    ];
  }
}





