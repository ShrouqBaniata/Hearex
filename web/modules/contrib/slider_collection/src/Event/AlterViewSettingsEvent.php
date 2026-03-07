<?php

namespace Drupal\slider_collection\Event;

use Drupal\Component\EventDispatcher\Event;
use Drupal\views\ViewExecutable;

class AlterViewSettingsEvent extends Event {

  /**
   * Constructs a slider_collection event object.
   *
   * @param array $settings
   *   The list of settings.
   * @param \Drupal\views\ViewExecutable $view
   *   The view object.
   */
  public function __construct(
    protected array &$settings,
    protected ViewExecutable $view
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
   * Get view.
   *
   * @return \Drupal\views\ViewExecutable
   *   The view object.
   */
  public function getView(): ViewExecutable {
    return $this->view;
  }

}
