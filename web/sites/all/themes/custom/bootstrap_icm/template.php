<?php

function bootstrap_icm_preprocess_node(&$variables){
$site_base_color = theme_get_setting('site_base_color');
$site_accent_color = theme_get_setting('site_accent_color');
drupal_add_css(
      'a {color:'. $site_base_color .';}
      h1 {background:'. $site_base_color .';}
      h2 {background:'. $site_base_color .';}
      #block-views-calendar-block-2 h3,
      #block-views-calendar-block-3 h3 {background:'. $site_base_color .';}
      .pagination li a {color:'. $site_base_color .';}
      div.text-center > ul > li.active > span {background:'. $site_base_color .';}
      #navbar {background:'. $site_base_color .'}
      #navbar li a {color:'. $site_base_color .';}
      #navbar .active  {background:'. $site_accent_color .';}',
      array(
        'group' => CSS_THEME,
        'type' => 'inline',
        'media' => 'screen',
        'preprocess' => FALSE,
        'weight' => '9999',
      )
    );
    
}
