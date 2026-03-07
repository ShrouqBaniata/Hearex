<?php

namespace Drupal\data\Plugin\views\wizard;

use Drupal\views\Plugin\views\wizard\WizardPluginBase;

/**
 * Standard Views wizard plugin.
 *
 * @ingroup views_wizard_plugins
 *
 * @ViewsWizard(
 *   id = "data_table",
 *   deriver = "Drupal\data\Plugin\Derivative\DataDeriver",
 *   title = @Translation("Data")
 * )
 */
class DataTable extends WizardPluginBase {
  function defaultDisplayOptions() {
    $parent = parent::defaultDisplayOptions();
    $parent['base_table'] = $this->getDerivativeId();
    if (empty($parent['base_field']) && !empty($this->derivativeDefinition['base_field'])) {
      $parent['base_field'] = $this->derivativeDefinition['base_field'];
    }
    // Ensure default handlers exist to avoid empty handler ids in Views UI.
    $base_table = $parent['base_table'];
    $base_field = !empty($parent['base_field']) ? $parent['base_field'] : NULL;
    if ($base_field) {
      // Default field handler.
      if (empty($parent['fields'][$base_field])) {
        $parent['fields'][$base_field] = [
          'id' => 'standard',
          'table' => $base_table,
          'field' => $base_field,
        ];
      }
      // Default sort handler.
      if (empty($parent['sorts'])) {
        $parent['sorts'][$base_field] = [
          'id' => 'standard',
          'table' => $base_table,
          'field' => $base_field,
          'order' => 'ASC',
        ];
      }
    }
    return $parent;
  }

}
