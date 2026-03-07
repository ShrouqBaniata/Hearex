<?php

namespace Drupal\slider_collection;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Base class for the Slider Collection Views Style plugins.
 */
abstract class SliderCollectionViewsStyleBase extends StylePluginBase implements CacheableDependencyInterface {

  /**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */
  protected $usesRowPlugin = TRUE;

  /**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */
  protected $usesRowClass = TRUE;

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    foreach ($this->getDefaultSettings() as $key => $value) {
      $options[$key] = ['default' => $value];
    }
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    // Autoplay.
    $form['autoplay'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Autoplay'),
      '#default_value' => $this->options['autoplay'],
      '#description' => $this->t('Toggles the automatic change of slides.'),
    ];
    // Speed.
    $form['speed'] = [
      '#type' => 'number',
      '#title' => $this->t('Speed'),
      '#default_value' => $this->options['speed'],
      '#description' => $this->t('Speed of the slide animation (in "ms").'),
    ];
    // Loop.
    $form['loop'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Loop'),
      '#default_value' => $this->options['loop'],
      '#description' => $this->t('Moves throughout all the slides seamlessly.'),
    ];
    // BreakpointMobile.
    $form['breakpointMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Mobile breakpoint'),
      '#default_value' => $this->options['breakpointMobile'],
      '#description' => $this->t('Set the mobile breakpoint in px.'),
    ];
    // ItemsMobile.
    $form['itemsMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Mobile'),
      '#default_value' => $this->options['itemsMobile'],
      '#description' => $this->t('Amount of items displayed on mobile.'),
      '#step' => 0.25,
    ];
    // BreakpointTablet.
    $form['breakpointTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Tablet breakpoint'),
      '#default_value' => $this->options['breakpointTablet'],
      '#description' => $this->t('Set the tablet breakpoint in px.'),
    ];
    // ItemsTablet.
    $form['itemsTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Tablet'),
      '#default_value' => $this->options['itemsTablet'],
      '#description' => $this->t('Amount of items displayed on tablet.'),
      '#step' => 0.25,
    ];
    // BreakpointDesktop.
    $form['breakpointDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Desktop breakpoint'),
      '#default_value' => $this->options['breakpointDesktop'],
      '#description' => $this->t('Set the desktop breakpoint in px.'),
    ];
    // itemsDesktop.
    $form['itemsDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Items on Desktop'),
      '#default_value' => $this->options['itemsDesktop'],
      '#description' => $this->t('Amount of items displayed on desktop.'),
      '#step' => 0.25,
    ];

    return $form;
  }

  /**
   * {@inheritDoc}
   */
  public function getCacheTags() {
    $tags = [];

    $tags[] = 'view_id:' . $this->view->id();
    $tags[] = 'view_display_id:' . $this->view->current_display;

    return $tags;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return Cache::PERMANENT;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    $contexts = [];

    $contexts[] = 'url.query_args:' . json_encode($this->getFormattedSettings());
    $contexts[] = 'url.path';

    return $contexts;
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    $build = parent::render();
    $build['#cache'] = [
      'contexts' => $this->getCacheContexts(),
      'tags' => $this->getCacheTags(),
      'max-age' => $this->getCacheMaxAge(),
    ];

    return $build;
  }

  /**
   * Gets default slider settings.
   *
   * @return array
   *   Returns an array of the settings.
   */
  abstract protected function getDefaultSettings(): array;

  /**
   * Gets formatted slider settings.
   *
   * @return array
   *   Returns an array of the formatted settings.
   */
  abstract protected function getFormattedSettings(): array;

}
