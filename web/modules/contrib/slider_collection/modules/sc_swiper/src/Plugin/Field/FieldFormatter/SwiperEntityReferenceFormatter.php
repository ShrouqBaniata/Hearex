<?php

namespace Drupal\sc_swiper\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Plugin\Field\FieldFormatter\EntityReferenceEntityFormatter;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin implementation of the 'entity reference rendered entity' formatter.
 *
 * @FieldFormatter(
 *   id = "swiper_entity_reference",
 *   label = @Translation("Swiper rendered entity"),
 *   description = @Translation("Display the referenced entities rendered by entity_view()."),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class SwiperEntityReferenceFormatter extends EntityReferenceEntityFormatter {

  use SwiperFormatterTrait;

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

}
