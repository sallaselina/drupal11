<?php

namespace Drupal\palindrome_checker\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;


class PalindromeController extends ControllerBase {
    public function check(Request $request){
        $url = Url::fromRoute("palindrome_checker.form");
        $link = Link::fromTextAndUrl($this->t("Back to the palindrome checker"), $url)->toString();
        $input = $request->query->get("palindrome");
        if ($input) {
            if (strrev($input) === $input) {
                $result = $input . " is a palindrome.";
        } else {
          $result =  $input . " is not a palindrome.";
        }
    }
    return [
        '#markup' => $this->t("@result @link", ["@result" => $result, "@link" => $link])];
 /*       \Drupal::messenger()->addMessage($this->t('@palindrome', ['@palindrome' =>$palindrome])); */
}

/*    public function result (Request $request, $palindrome) {
    $input = $request->query->get("palindrome", "");
        if ($input) {
            if (strrev($input) === $input) {
                $palindrome = $input . " is a palindrome.";
        } else {
          $palindrome =  $input . " is not a palindrome.";
        }
    }
        return [
        '#markup' => $this->t("@palindrome", ["@palindrome" => $palindrome]),
    ];
} */
}
