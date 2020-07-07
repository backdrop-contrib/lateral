<?php

/**
 * @file
 *
 * Theme settings.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function lateral_form_system_theme_settings_alter(&$form, &$form_state) {
  // Settings for color module.
  if (module_exists('color')) {
    $form['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header Settings'),
      '#collapsible' => TRUE,
    );
    $fields = array(
      'header',
      'headertext',
      'hovermenu',
    );
    foreach ($fields as $field) {
      $form['header'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }
    $form['hero'] = array(
      '#type' => 'fieldset',
      '#title' => t('Hero Settings'),
      '#collapsible' => TRUE,
      '#description' => t('You might want to change the hero image prior to changing the colors.'),
    );
    $fields = array(
      'herotext',
      'herobg',
    );
    foreach ($fields as $field) {
      $form['hero'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }
    $form['general'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
    );
    $fields = array(
      'base',
      'text',
      'link',
      'borders',
      'formfocusborder',
      'primarytabs',
      'buttons',
      'buttonstext',
      'lightbg',
      'darkbg',
    );
    foreach ($fields as $field) {
      $form['general'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }
    $form['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer Settings'),
      '#collapsible' => TRUE,
    );
    $fields = array(
      'footer',
      'footertext',
    );
    foreach ($fields as $field) {
      $form['footer'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }
  }
  else {
    $form['color'] = array(
      '#markup' => '<p>' . t('This theme supports custom color palettes if the Color module is enabled on the <a href="!url">modules page</a>. Enable the Color module to customize this theme.', array('!url' => url('admin/modules'))) . '</p>',
    );
  }
  // General settings.
  $form['settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('General Settings'),
    '#collapsible' => TRUE,
    '#description' => t('Note: you need to save settings to see changes take effect in the preview.'),
  );
  $form['settings']['header_position'] = array(
    '#type' => 'select',
    '#title' => t('Header position'),
    '#default_value' => theme_get_setting('header_position', 'lateral'),
    '#options' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );
  $form['settings']['font'] = array(
    '#type' => 'select',
    '#title' => t('Font'),
    '#default_value' => theme_get_setting('font', 'lateral'),
    '#options' => array(
      'opensans' => t('Open Sans'),
      'merriweather' => t('Merriweather'),
      'nowebfont' => t('No webfont'),
    ),
    '#description' => t('Use Open Sans for all text, or Merriweather for some (like headings), or only use a local system font (Arial)'),
  );
}
