<?php

namespace Drupal\sc_tinyslider\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\slider_collection\SliderCollectionViewsStyleBase;
use Drupal\views\Attribute\ViewsStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Style plugin for the Tiny Slider.
 *
 * @ingroup views_style_plugins
 */
#[ViewsStyle(
  id: 'sc_tinyslider',
  title: new TranslatableMarkup('Tiny Slider 2'),
  help: new TranslatableMarkup('Displays rows as Tiny Slider 2.'),
  theme: 'tinyslider_views',
  display_types: ['normal'],
)]
class TinySlider extends SliderCollectionViewsStyleBase {

  /**
   * Swiper service.
   *
   * @var \Drupal\sc_tinyslider\TinySliderBase
   */
  protected $tinyslider;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->tinyslider = $container->get('sc_tinyslider.tinyslider');

    return $instance;
  }

  /**
   * Render the given style.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    // Some common form settings declared in the base class, please check
    // the parent method.
    parent::buildOptionsForm($form, $form_state);
    // Navigation.
    $form['nav'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Navigation'),
      '#default_value' => $this->options['nav'],
      '#description' => $this->t('Controls the display and functionalities of nav components (dots). If true, display the nav and add all functionalities.'),
    ];
    // NavPosition.
    $form['navPosition'] = [
      '#type' => 'select',
      '#title' => $this->t('Nav position'),
      '#default_value' => $this->options['navPosition'],
      '#options' => [
        'top' => $this->t('Top'),
        'bottom' => $this->t('Bottom'),
      ],
      '#description' => $this->t('Controls nav position.'),
    ];
    // Controls.
    $form['controls'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Controls'),
      '#default_value' => $this->options['controls'],
      '#description' => $this->t('Contro
      ls the display and functionalities of controls components (prev/next buttons). If true, display the controls and add all functionalities. For better accessibility, when a prev/next button is focused, user will be able to control the slider using left/right arrow keys.'),
    ];
    // EdgePadding.
    $form['edgePadding'] = [
      '#type' => 'number',
      '#title' => $this->t('Edge padding'),
      '#default_value' => $this->options['edgePadding'],
      '#description' => $this->t('Space on the outside (in "px").'),
    ];
    // AutoplayTimeout.
    $form['autoplayTimeout'] = [
      '#type' => 'number',
      '#title' => $this->t('Autoplay Timeout'),
      '#default_value' => $this->options['autoplayTimeout'],
      '#description' => $this->t('Time between 2 autoplay slides change (in "ms").'),
    ];
    // AutoplayHoverPause.
    $form['autoplayHoverPause'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pause on hover'),
      '#default_value' => $this->options['autoplayHoverPause'],
      '#description' => $this->t('Stops sliding on mouseover.'),
    ];
    // AutoplayButtonOutput.
    $form['autoplayButtonOutput'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Autoplay button output'),
      '#default_value' => $this->options['autoplayButtonOutput'],
      '#description' => $this->t('Output autoplayButton markup when autoplay is true but a customized autoplayButton is not provided.'),
    ];
    // MouseDrag.
    $form['mouseDrag'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Mouse drag'),
      '#default_value' => $this->options['mouseDrag'],
      '#description' => $this->t('Changing slides by dragging them.'),
    ];
    // Items.
    $form['items'] = [
      '#type' => 'number',
      '#title' => $this->t('Items'),
      '#default_value' => $this->options['items'],
      '#description' => $this->t("Number of slides being displayed in the viewport. If slides less or equal than items, the slider won't be initialized."),
    ];
    // Gutter.
    $form['gutter'] = [
      '#type' => 'number',
      '#title' => $this->t('Gutter'),
      '#default_value' => $this->options['gutter'],
      '#description' => $this->t('Space between slides (in "px").'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultSettings(): array {
    return $this->tinyslider->defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  protected function getFormattedSettings(): array {
    return $this->tinyslider->formattedSettings($this->getDefaultSettings());
  }

}
