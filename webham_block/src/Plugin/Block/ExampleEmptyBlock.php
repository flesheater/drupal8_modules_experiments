<?php

namespace Drupal\webham_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "webham_empty",
 *   admin_label = @Translation("Webham empty block")
 * )
 */
class ExampleEmptyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // We return an empty array on purpose. The block will thus not be rendered
    // on the site. See BlockExampleTest::testBlockExampleBasic().
    return [
      '#type' => 'markup',
      '#markup' => '<div>' . $this->t('Hello string') . '</div>',
    ];
  }

}
