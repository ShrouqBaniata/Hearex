<?php

namespace Drupal\slider_collection\Event;

/**
 * Defines events for the slider_collection system.
 *
 * @see \Drupal\slider_collection\Event\AlterViewSettingsEvent
 * @see \Drupal\slider_collection\Event\AlterEntitySettingsEvent
 */
final class SliderCollectionEvents {

  /**
   * Alter view slider options.
   *
   * @Event
   *
   * @see \Drupal\slider_collection\Event\AlterViewSettingsEvent
   *
   * @var string
   */
  const ALTER_VIEW_SETTINGS = 'slider_collection.alter_view_settings';

  /**
   * Alter entity slider options.
   *
   * @Event
   *
   * @see \Drupal\slider_collection\Event\AlterEntitySettingsEvent
   *
   * @var string
   */
  const ALTER_ENTITY_SETTINGS = 'slider_collection.alter_entity_settings';

}
