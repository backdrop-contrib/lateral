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
  // General settings.
  $form['settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('General Settings'),
    '#collapsible' => TRUE,
    '#weight' => -1,
  );
  $form['settings']['header_position'] = array(
    '#type' => 'select',
    '#title' => t('Header position'),
    '#default_value' => theme_get_setting('header_position', 'lateral'),
    '#description' => t('Positon of the header'),
    '#options' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );
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
}
