<?php

$info = array();

$info['fields'] = array(
  'bg' => t('Background'),
  'link' => t('Link color'),
  'text' => t('Text'),
  'titles' => t('Titles'),
  'menu_item_a_color' => t('Menu active item link color'),
);

$info['schemes'] = array(
  'default' => array(
    'title' => t('Default'),
    'colors' => array(
      'bg' => '#ffffff',
      'link' => '#989933',
      'text' => '#000000',
      'titles' => '#989933',
      'menu_item_a_color' => '#B7B872',
    ),
  ),
  'orange' => array(
    'title' => t('Orange'),
    'colors' => array(
      'bg' => '#ffffff',
      'link' => '#E06325',
      'text' => '#333333',
      'titles' => '#E06325',
      'menu_item_a_color' => '#F6D0BD',
    ),
  ),
);

$info['css'] = array(
  'css/colors.css',
);