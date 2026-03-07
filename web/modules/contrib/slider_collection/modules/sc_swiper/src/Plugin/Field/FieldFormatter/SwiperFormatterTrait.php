<?php

namespace Drupal\sc_swiper\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Common methods for entity swiper formatters.
 */
trait SwiperFormatterTrait {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return parent::defaultSettings() + \Drupal::service('sc_swiper.swiper')->defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = parent::settingsForm($form, $form_state);

    // Autoplay.
    $elements['autoplay'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Autoplay'),
      '#default_value' => $this->getSetting('autoplay'),
      '#description' => $this->t('Toggles the automatic change of slides.'),
    ];
    // Speed.
    $elements['speed'] = [
      '#type' => 'number',
      '#title' => $this->t('Speed'),
      '#default_value' => $this->getSetting('speed'),
      '#description' => $this->t('Speed of the slide animation (in "ms").'),
    ];
    // Loop.
    $elements['loop'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Loop'),
      '#default_value' => $this->getSetting('loop'),
      '#description' => $this->t('Moves throughout all the slides seamlessly.'),
    ];
    // BreakpointMobile.
    $elements['breakpointMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Mobile breakpoint'),
      '#default_value' => $this->getSetting('breakpointMobile'),
      '#description' => $this->t('Set the mobile breakpoint in px.'),
    ];
    // ItemsMobile.
    $elements['itemsMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Mobile'),
      '#default_value' => $this->getSetting('itemsMobile'),
      '#description' => $this->t('Amount of items displayed on mobile.'),
      '#step' => 0.25,
    ];
    // BreakpointTablet.
    $elements['breakpointTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Tablet breakpoint'),
      '#default_value' => $this->getSetting('breakpointTablet'),
      '#description' => $this->t('Set the tablet breakpoint in px.'),
    ];
    // ItemsTablet.
    $elements['itemsTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Tablet'),
      '#default_value' => $this->getSetting('itemsTablet'),
      '#description' => $this->t('Amount of items displayed on tablet.'),
      '#step' => 0.25,
    ];
    // BreakpointDesktop.
    $elements['breakpointDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Desktop breakpoint'),
      '#default_value' => $this->getSetting('breakpointDesktop'),
      '#description' => $this->t('Set the desktop breakpoint in px.'),
    ];
    // itemsDesktop.
    $elements['itemsDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Desktop'),
      '#default_value' => $this->getSetting('itemsDesktop'),
      '#description' => $this->t('Amount of items displayed on desktop.'),
      '#step' => 0.25,
    ];

    // Navigation.
    $elements['navigation'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Navigation'),
      '#default_value' => $this->getSetting('navigation'),
      '#description' => $this->t('Controls the display and functionalities of nav components (dots). If true, display the nav and add all functionalities.'),
    ];
    // Scrollbar.
    $elements['scrollbar'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Scrollbar'),
      '#default_value' => $this->getSetting('scrollbar'),
      '#description' => $this->t('Option to display the scrollbar.'),
    ];
    // Pagination.
    $elements['pagination'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pagination'),
      '#default_value' => $this->getSetting('pagination'),
      '#description' => $this->t('Pagination and functionalities of controls components (prev/next buttons). If true, display the pagination and add all functionalities. For better accessibility, when a prev/next button is focused, user will be able to control the slider using left/right arrow keys.'),
    ];
    // Effect.
    $elements['effect'] = [
      '#type' => 'select',
      '#title' => $this->t('Effect'),
      '#options' => [
        NULL => $this->t('Default'),
        'fade' => $this->t('Fade'),
        'coverflow' => $this->t('Coverflow'),
        'flip' => $this->t('Flip'),
        'cards' => $this->t('Cards'),
        'creative' => $this->t('Creative'),
      ],
      '#default_value' => $this->getSetting('effect'),
      '#description' => $this->t('Option to customize slide effect.<br>You can also set the effect options by subscribing to AlterSettingsEvent.'),
    ];
    $elements['clickable_pagination'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Clickable Pagination'),
      '#default_value' => $this->getSetting('clickable_pagination'),
      '#description' => $this->t('Option to make pagination clickable.'),
    ];
    $elements['pagination_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Pagination type'),
      '#default_value' => $this->getSetting('pagination_type'),
      '#options' => [
        'progressbar' => $this->t('Progressbar'),
        'bullets' => $this->t('Bullets'),
        'fraction' => $this->t('Fraction'),
      ],
      '#description' => $this->t('Type of the pagination.'),
    ];
    // AutoplayTimeout.
    $elements['delay'] = [
      '#type' => 'number',
      '#title' => $this->t('Delay'),
      '#default_value' => $this->getSetting('delay'),
      '#description' => $this->t('Time between 2 autoplay slides change (in "ms").'),
    ];
    // Space between slides.
    $elements['spaceBetween'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides'),
      '#default_value' => $this->getSetting('spaceBetween'),
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // AutoplayHoverPause.
    $elements['pauseOnMouseEnter'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pause on hover'),
      '#default_value' => $this->getSetting('pauseOnMouseEnter'),
      '#description' => $this->t('Stops sliding on mouse enter.'),
    ];
    // MouseDrag.
    $elements['allowTouchMove'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Mouse drag'),
      '#default_value' => $this->getSetting('allowTouchMove'),
      '#description' => $this->t('Changing slides by dragging them.'),
    ];
    // Space between slides mobile.
    $elements['spaceBetweenMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Mobile'),
      '#default_value' => $this->getSetting('spaceBetweenMobile'),
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // Space between slides tablet.
    $elements['spaceBetweenTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Tablet'),
      '#default_value' => $this->getSetting('spaceBetweenTablet'),
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // Space between slides desktop.
    $elements['spaceBetweenDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Desktop'),
      '#default_value' => $this->getSetting('spaceBetweenDesktop'),
      '#description' => $this->t('Space between slides in pixels.'),
    ];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $settings = parent::settingsSummary();

    $properties = [
      'navigation' => $this->t('Navigation'),
      'delay' => $this->t('Delay'),
      'pauseOnMouseEnter' => $this->t('Pause on hover'),
      'allowTouchMove' => $this->t('Allow touch mouse'),
      'spaceBetween' => $this->t('Space between'),
      'pagination' => $this->t('Pagination'),
      'scrollbar' => $this->t('Scrollbar'),
      'clickable_pagination' => $this->t('Clickable Pagination'),
      'pagination_type' => $this->t('Pagination type'),
      'spaceBetweenMobile' => $this->t('Space between slides on Mobile'),
      'spaceBetweenTablet' => $this->t('Space between slides on Tablet'),
      'spaceBetweenDesktop' => $this->t('Space between slides on Desktop'),
      'effect' => $this->t('Effect'),
      'loop' => $this->t('Loop'),
      'speed' => $this->t('Speed'),
      'autoplay' => $this->t('Autoplay'),
      'breakpointMobile' => $this->t('Breakpoint on Mobile'),
      'itemsMobile' => $this->t('Items on Mobile'),
      'breakpointTablet' => $this->t('Breakpoint on Tablet'),
      'itemsTablet' => $this->t('Items on Tablet'),
      'breakpointDesktop' => $this->t('Breakpoint on Desktop'),
      'itemsDesktop' => $this->t('Items on Desktop'),
    ];

    foreach ($properties as $property => $name) {
      $value = $this->getSetting($property);

      if (!$value && $property === 'effect') {
        $value = $this->t('Default');
      }

      $settings[] = "{$name->render()}: {$value}";
    }

    return $settings;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    return [
      '#theme' => 'swiper_entity_formatter',
      '#object' => $items->getEntity(),
      '#content' => parent::viewElements($items, $langcode),
      '#settings' => $this->getSettings(),
      '#attributes' => [
        'class' => [
          'swiper',
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    return parent::isApplicable($field_definition) && $field_definition->getFieldStorageDefinition()->isMultiple();
  }

}
