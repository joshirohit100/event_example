<?php

namespace Drupal\event_example_submodule\EventSubscriber;

use \Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

class SubModuleEventSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return ['my_event' => 'myEventHandler'];
  }

  public function myEventHandler(Event $event) {
    drupal_set_message(t('This is message from event subscriber'));
  }
}