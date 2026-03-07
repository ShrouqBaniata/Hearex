<?php

namespace Drupal\data\Plugin\views\field;

use Drupal\views\ResultRow;
use Drupal\views\Plugin\views\field\Date;

/**
 * A handler to provide proper displays for ISO dates.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("date_iso")
 */
class DateISO extends Date {

  /**
   * {@inheritdoc}
   */
  public function getValue(ResultRow $values, $field = NULL) {
    $alias = isset($field) ? $this->aliases[$field] : $this->field_alias;
    if (isset($values->{$alias})) {
      return strtotime($values->{$alias});
    }
  }
}
