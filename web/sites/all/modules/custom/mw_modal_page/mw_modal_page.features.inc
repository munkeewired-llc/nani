<?php
/**
 * @file
 * mw_modal_page.features.inc
 */

/**
 * Implements hook_node_info().
 */
function mw_modal_page_node_info() {
  $items = array(
    'modal_page' => array(
      'name' => t('Modal Page'),
      'base' => 'node_content',
      'description' => t('Modal pages contain field collections that allow distinct subtitles and blocks of text to be added, and the titles become anchor links that can be displayed in teasers and in a floating sidebar. Generally they will be referenced from a parent basic page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
