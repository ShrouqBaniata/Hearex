<?php

namespace Drupal\sc_swiper\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\slider_collection\SliderCollectionViewsStyleBase;
use Drupal\views\Attribute\ViewsStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Style plugin for the Swiper.
 *
 * @ingroup views_style_plugins
 */
#[ViewsStyle(
  id: 'sc_swiper',
  title: new TranslatableMarkup('Swiper'),
  help: new TranslatableMarkup('Displays rows as Swiper.'),
  theme: 'swiper_views',
  display_types: ['normal'],
)]
class Swiper extends SliderCollectionViewsStyleBase {

  /**
   * Swiper service.
   *
   * @var \Drupal\sc_swiper\SwiperBase
   */
  protected $swiper;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->swiper = $container->get('sc_swiper.swiper');

    return $instance;
  }

  /**
   * {@inheritDoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    // Some common form settings declared in the base class, please check
    // the parent method.
    parent::buildOptionsForm($form, $form_state);
    // Navigation.
    $form['navigation'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Navigation'),
      '#default_value' => $this->options['navigation'],
      '#description' => $this->t('Controls the display and functionalities of nav components (dots). If true, display the nav and add all functionalities.'),
    ];
    // Scrollbar.
    $form['scrollbar'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Scrollbar'),
      '#default_value' => $this->options['scrollbar'],
      '#description' => $this->t('Option to display the scrollbar.'),
    ];
    // Pagination.
    $form['pagination'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pagination'),
      '#default_value' => $this->options['pagination'],
      '#description' => $this->t('Pagination and functionalities of controls components (prev/next buttons). If true, display the pagination and add all functionalities. For better accessibility, when a prev/next button is focused, user will be able to control the slider using left/right arrow keys.'),
    ];
    // Effect.
    $form['effect'] = [
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
      '#default_value' => $this->options['effect'],
      '#description' => $this->t('Option to customize slide effect.<br>You can also set the effect options by subscribing to AlterSettingsEvent.'),
    ];
    $form['clickable_pagination'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Clickable Pagination'),
      '#default_value' => $this->options['clickable_pagination'],
      '#description' => $this->t('Option to make pagination clickable.'),
    ];
    $form['pagination_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Pagination type'),
      '#default_value' => $this->options['pagination_type'],
      '#options' => [
        'progressbar' => $this->t('Progressbar'),
        'bullets' => $this->t('Bullets'),
        'fraction' => $this->t('Fraction'),
      ],
      '#description' => $this->t('Type of the pagination.'),
    ];
    // AutoplayTimeout.
    $form['delay'] = [
      '#type' => 'number',
      '#title' => $this->t('Delay'),
      '#default_value' => $this->options['delay'],
      '#description' => $this->t('Time between 2 autoplay slides change (in "ms").'),
    ];
    // Space between slides.
    $form['spaceBetween'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides'),
      '#default_value' => $this->options['spaceBetween'],
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // AutoplayHoverPause.
    $form['pauseOnMouseEnter'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pause on hover'),
      '#default_value' => $this->options['pauseOnMouseEnter'],
      '#description' => $this->t('Stops sliding on mouse enter.'),
    ];
    // MouseDrag.
    $form['allowTouchMove'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Mouse drag'),
      '#default_value' => $this->options['allowTouchMove'],
      '#description' => $this->t('Changing slides by dragging them.'),
    ];
    // Space between slides mobile.
    $form['spaceBetweenMobile'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Mobile'),
      '#default_value' => $this->options['spaceBetweenMobile'],
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // Space between slides tablet.
    $form['spaceBetweenTablet'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Tablet'),
      '#default_value' => $this->options['spaceBetweenTablet'],
      '#description' => $this->t('Space between slides in pixels.'),
    ];
    // Space between slides desktop.
    $form['spaceBetweenDesktop'] = [
      '#type' => 'number',
      '#title' => $this->t('Space between slides on Desktop'),
      '#default_value' => $this->options['spaceBetweenDesktop'],
      '#description' => $this->t('Space between slides in pixels.'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultSettings(): array {
    return $this->swiper->defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  protected function getFormattedSettings(): array {
    return $this->swiper->formattedSettings($this->getDefaultSettings());
  }

}
