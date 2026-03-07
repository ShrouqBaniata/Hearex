<?php

namespace Drupal\sc_tinyslider;

use Drupal\slider_collection\SliderCollectionSliderBase;

/**
 * Global TinySlider class.
 */
class TinySliderBase extends SliderCollectionSliderBase {

  /**
   * {@inheritdoc}
   */
  public function defaultSettings($key = NULL): mixed {
    $settings = [
      'nav' => TRUE,
      'navPosition' => 'bottom',
      'autoplayTimeout' => 5000,
      'autoplayHoverPause' => TRUE,
      'autoplayButtonOutput' => FALSE,
      'mouseDrag' => FALSE,
      'controls' => TRUE,
      'edgePadding' => 0,
      'gutter' => 24,
      'items' => 1,
    ] + $this->getSliderGeneralSettings();

    return $settings[$key] ?? $settings;
  }

  /**
   * {@inheritdoc}
   */
  public function formattedSettings($settings): array {
    $defaultSettings = $this->defaultSettings();

    foreach ($settings as $key => $value) {
      // If the key is not in the default settings, remove it.
      if (!array_key_exists($key, $defaultSettings)) {
        unset($settings[$key]);
      }
    }

    $settings['loop'] = (bool) $settings['loop'];
    $settings['nav'] = (bool) $settings['nav'];
    $settings['navPosition'] = (string) $settings['navPosition'];
    $settings['autoplay'] = (bool) $settings['autoplay'];
    $settings['autoplayTimeout'] = (int) $settings['autoplayTimeout'];
    $settings['speed'] = (int) $settings['speed'];
    $settings['autoplayHoverPause'] = (bool) $settings['autoplayHoverPause'];
    $settings['autoplayButtonOutput'] = (bool) $settings['autoplayButtonOutput'];
    $settings['mouseDrag'] = (bool) $settings['mouseDrag'];
    $settings['controls'] = (bool) $settings['controls'];
    $settings['edgePadding'] = (int) $settings['edgePadding'];
    $settings['gutter'] = (int) $settings['gutter'];
    $settings['items'] = (int) $settings['items'];

    if (isset($settings['itemsMobile']) && isset($settings['breakpointMobile'])) {
      $breakpointMobile = (int) $settings['breakpointMobile'];
      $itemsMobile['items'] = (int) $settings['itemsMobile'];
      $settings['responsive'][$breakpointMobile] = $itemsMobile;
      unset($settings['itemsMobile']);
      unset($settings['breakpointMobile']);
    }

    if (isset($settings['itemsTablet']) && isset($settings['breakpointTablet'])) {
      $breakpointTablet = (int) $settings['breakpointTablet'];
      $itemsTablet['items'] = (int) $settings['itemsTablet'];
      $settings['responsive'][$breakpointTablet] = $itemsTablet;
      unset($settings['itemsTablet']);
      unset($settings['breakpointTablet']);
    }

    if (isset($settings['itemsDesktop']) && isset($settings['breakpointDesktop'])) {
      $breakpointDesktop = (int) $settings['breakpointDesktop'];
      $itemsDesktop['items'] = (int) $settings['itemsDesktop'];
      $settings['responsive'][$breakpointDesktop] = $itemsDesktop;
      unset($settings['itemsDesktop']);
      unset($settings['breakpointDesktop']);
    }

    return $settings;
  }

}
