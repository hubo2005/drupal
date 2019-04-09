<?php
/**
 * Created by IntelliJ IDEA.
 * User: hubo26603
 * Date: 2019/4/4
 * Time: 19:20
 */

namespace Drupal\bhsite\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase
{

  public function sayHello() {
    return array(
      '#markup' => bhsite_hello_world(),
    );
  }

  public function youyouSayHello() {
    return array(
      "#markup" => bhsite_youyou_sayHello(),
    );
  }
}
