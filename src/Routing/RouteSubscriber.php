<?php

namespace Drupal\fieldable_menu\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * TODO: class docs.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('entity.menu.add_link_form')) {
      $route->setDefault('_controller', '\Drupal\fieldable_menu\Controller\FieldableMenuController::addLink');
    }
  }

}
