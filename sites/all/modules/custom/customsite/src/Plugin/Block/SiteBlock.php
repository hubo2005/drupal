<?php

namespace Drupal\customsite\Plugin\Block;
use Drupal\Core\Block\BlockBase;

class SiteBlock extends BlockBase {

  /**
   * @Block(
   *     id="bohuNamed_block",
   *     admin_label = @Translation("HelloBOHU!")
   *     )
   */
  public function build(){
    // TODO: Implement build() method.
    return array(
      '#markup' => $this->t("Hello BOHU world!"),
    );
  }
}
