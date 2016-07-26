<?php

namespace Drupal\fieldable_menu\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\system\MenuInterface;
use Drupal\menu_link_content\Controller\MenuController;

/**
 * Override core's controller so the bundle is set on new menu link entities.
 */
class FieldableMenuController extends MenuController {

  /**
   * Provides the menu link creation form.
   *
   * @param \Drupal\system\MenuInterface $menu
   *   An entity representing a custom menu.
   *
   * @return array
   *   Returns the menu link creation form.
   */
  public function addLink(MenuInterface $menu) {
    $menu_link = $this->entityManager()->getStorage('menu_link_content')->create(array(
      'id' => '',
      'parent' => '',
      'menu_name' => $menu->id(),
      'bundle' => $menu->id(),
    ));
    return $this->entityFormBuilder()->getForm($menu_link);
  }

}
