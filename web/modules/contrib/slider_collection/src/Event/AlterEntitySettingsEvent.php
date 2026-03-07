<?php

namespace Drupal\slider_collection\Event;

use Drupal\Component\EventDispatcher\Event;
use Drupal\Core\Entity\EntityInterface;

class AlterEntitySettingsEvent extends Event {

  /**
   * Constructs a slider_collection event object.
   *
   * @param array $settings
   *   The list of settings.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   */
  public function __construct(
    protected array &$settings,
    protected EntityInterface $entity
  ) {}

  /**
   * Set settings.
   *
   * @return array
   *   The list of settings.
   */
  public function getSettings(): array {
    return $this->settings;
  }

  /**
   * Get settings.
   *
   * @param array $settings
   *   The list of settings.
   */
  public function setSettings(array $settings) {
    $this->settings = $settings;
  }

  /**
   * Get entity.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The entity.
   */
  public function getEntity(): EntityInterface {
    return $this->entity;
  }

}
