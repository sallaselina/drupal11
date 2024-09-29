<?php

namespace Drupal\palindrome_checker\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;


class PalindromeController extends ControllerBase {

  public function result ($input) {
    $url = Url::fromRoute("palindrome_checker.form");
    $link = Link::fromTextAndUrl($this->t("Back to the palindrome checker"), $url)->toString();
        if ($input) {
            if (strrev($input) === $input) {
                $result = $input . " is a palindrome.";
        } else {
          $result =  $input . " is not a palindrome.";
        }
    }
        return [
        '#markup' => $this->t("@result @link", ["@result" => $result, "@link" => $link]),
    ];
} 
}
