<?php
function bootstrap_icm_form_system_theme_settings_alter(&$form, $form_state) {
  $form['site_base_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Base Color'),
    '#default_value' => theme_get_setting('site_base_color'),
    '#description'   => t("This is the darker base color used in various site elements. Please enter a hex value (e.g. #989933)"),
  );
  $form['site_accent_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Accent Color'),
    '#default_value' => theme_get_setting('site_accent_color'),
    '#description'   => t("This is the half-tone color used in various accents. Please enter a hex value (e.g. #B7B872)"),
  );
}