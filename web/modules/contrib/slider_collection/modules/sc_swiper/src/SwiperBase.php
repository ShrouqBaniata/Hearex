<?php

namespace Drupal\sc_swiper;

use Drupal\slider_collection\SliderCollectionSliderBase;

/**
 * Global TinySlider class.
 */
class SwiperBase extends SliderCollectionSliderBase {

  /**
   * {@inheritdoc}
   */
  public function defaultSettings($key = NULL): mixed {
    $settings = [
      'navigation' => TRUE,
      'delay' => 3000,
      'pauseOnMouseEnter' => TRUE,
      'allowTouchMove' => FALSE,
      'spaceBetween' => 24,
      'pagination' => TRUE,
      'scrollbar' => TRUE,
      'clickable_pagination' => TRUE,
      'pagination_type' => 'bullets',
      'spaceBetweenMobile' => 24,
      'spaceBetweenTablet' => 24,
      'spaceBetweenDesktop' => 24,
      'effect' => NULL,
      'fadeEffect' => [
        'crossFade' => TRUE,
      ],
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
    $settings['navigation'] = (bool) $settings['navigation'];
    $settings['autoplay'] = (bool) $settings['autoplay'];
    $settings['delay'] = (int) $settings['delay'];
    $settings['speed'] = (int) $settings['speed'];
    $settings['pauseOnMouseEnter'] = (bool) $settings['pauseOnMouseEnter'];
    $settings['allowTouchMove'] = (bool) $settings['allowTouchMove'];
    $settings['spaceBetween'] = (int) $settings['spaceBetween'];

    // Add classes to the navigation elements.
    if (!empty($settings['navigation'])) {
      $settings['navigation'] = [
        'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',
      ];
    }

    // Adds class to the scrollbar element.
    if (!empty($settings['scrollbar'])) {
      $settings['scrollbar'] = [
        'el' => '.swiper-scrollbar',
      ];
    }

    // Prepares pagination parameters.
    if (!empty($settings['pagination'])) {
      $settings['pagination'] = [];
      $settings['pagination']['type'] = (string) $settings['pagination_type'];
      $settings['pagination']['clickable'] = (bool) $settings['clickable_pagination'];
      $settings['pagination']['el'] = '.swiper-pagination';
    }
    else {
      $settings['pagination'] = FALSE;
    }
    unset($settings['pagination_type']);
    unset($settings['clickable_pagination']);

    if (isset($settings['itemsMobile']) && isset($settings['breakpointMobile'])) {
      $breakpointMobile = (int) $settings['breakpointMobile'];
      $mobileConfiguration['slidesPerView'] = $settings['itemsMobile'];
      $mobileConfiguration['spaceBetween'] = (int) $settings['spaceBetweenMobile'];
      $settings['breakpoints'][$breakpointMobile] = $mobileConfiguration;
      unset($settings['itemsMobile']);
      unset($settings['breakpointMobile']);
      unset($settings['spaceBetweenMobile']);
    }

    if (isset($settings['itemsTablet']) && isset($settings['breakpointTablet'])) {
      $breakpointTablet = (int) $settings['breakpointTablet'];
      $tabletConfiguration['slidesPerView'] = $settings['itemsTablet'];
      $tabletConfiguration['spaceBetween'] = (int) $settings['spaceBetweenTablet'];
      $settings['breakpoints'][$breakpointTablet] = $tabletConfiguration;
      unset($settings['itemsTablet']);
      unset($settings['breakpointTablet']);
      unset($settings['spaceBetweenTablet']);
    }

    if (isset($settings['itemsDesktop']) && isset($settings['breakpointDesktop'])) {
      $breakpointDesktop = (int) $settings['breakpointDesktop'];
      $desktopConfiguration['slidesPerView'] = $settings['itemsDesktop'];
      $desktopConfiguration['spaceBetween'] = (int) $settings['spaceBetweenDesktop'];
      $settings['breakpoints'][$breakpointDesktop] = $desktopConfiguration;
      unset($settings['itemsDesktop']);
      unset($settings['breakpointDesktop']);
      unset($settings['spaceBetweenDesktop']);
    }

    return $settings;
  }

}
