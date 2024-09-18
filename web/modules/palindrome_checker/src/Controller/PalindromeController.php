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
        $input = $request->query->get("palindrome", "");
        if ($input) {
            if (strrev($input) === $input) {
                $result = $input . " is a palindrome.";
        } else {
          $result =  $input . " is not a palindrome.";
        }
    }
    return [
        '#markup' => $this->t("Your input @result", ["@result" => $result]),];
       //\Drupal::messenger()->addMessage($this->t('@result', ['@result' =>$result]));
}

    public function result ($result) {
        return [
        '#markup' => $this->t("Here is:  @result", ["@result" => $result]),
    ];
}
}
