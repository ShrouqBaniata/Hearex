<?php

namespace Drupal\slider_collection;

/**
 * Base class for the slider implementations.
 */
abstract class SliderCollectionSliderBase {

  /**
   * Gets the general slider settings.
   *
   * @return array
   *   Returns an array of the common slider settings.
   */
  protected function getSliderGeneralSettings() {
    return [
      'loop' => FALSE,
      'speed' => 1500,
      'autoplay' => FALSE,
      'breakpointMobile' => 1,
      'itemsMobile' => 1,
      'breakpointTablet' => 768,
      'itemsTablet' => 1,
      'breakpointDesktop' => 1200,
      'itemsDesktop' => 1,
    ];
  }

  /**
   * Provide default slider settings.
   *
   * @return mixed
   *   Returns the slider settings.
   */
  abstract protected function defaultSettings(): mixed;

  /**
   * JS formatted slider settings.
   *
   * @param array $settings
   *   An array of the settings to format.
   *
   * @return array
   *   Return an array of the JS formatted settings.
   */
  abstract protected function formattedSettings(array $settings): array;

}
