<?php

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends ControllerBase {
    public function first() {
        // return new Response('hello, this is my first module');
        return [
            '#markup' => $this->t('Hello Salla! I am using a render array!'),
        ];
    }
}