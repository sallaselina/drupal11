<?php

namespace Drupal\palindrome_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeForm extends FormBase {

  public function getFormId()
  {
    return 'palindrome_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['input'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Enter word here'),
      '#required' => TRUE,
    ];
 
   $form['submit'] = [
    '#type' => 'submit',
    '#value' => $this->t('Submit'),
   ];
  return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $input = $form_state->getValue('input');
    $form_state->setRedirect("palindrome_checker.show", ['input' => $input]);
  }
}
