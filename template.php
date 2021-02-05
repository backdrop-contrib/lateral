<?php
/**
 * @file
 * Preprocess functions and theme function overrides.
 */

/**
 * Prepares variables for page templates.
 *
 * @see page.tpl.php
 */
function lateral_preprocess_page(&$variables) {
  $path = backdrop_get_path('theme', 'lateral');
  // Font stylesheets according to theme settings.
  if (theme_get_setting('font') == 'merriweather') {
    backdrop_add_css($path . '/css/merriweather.css');
  }
  elseif (theme_get_setting('font') == 'opensans') {
    backdrop_add_library('system', 'opensans', TRUE);
    backdrop_add_css($path . '/css/use-opensans.css');
  }
  else {
    backdrop_add_css($path . '/css/nowebfont.css');
  }
  // Header on the left or right side.
  if (theme_get_setting('header_position') == 'right') {
    backdrop_add_css($path . '/css/headerright.css');
    $variables['classes'][] = 'header-right';
  }
  else {
    backdrop_add_css($path . '/css/headerleft.css');
    $variables['classes'][] = 'header-left';
  }
}

/**
 * Prepares variables for layout templates.
 *
 * @see layout.tpl.php
 */
function lateral_preprocess_layout(&$variables) {
  if (isset($variables['content']['header'])) {
    $header = '<div class="l-header-scrollable">' . $variables['content']['header'] . '</div>';
    $header .= '<div class="menu-toggle-button"><span class="menu-toggle-button-text">' . t('Menu') . '</span></div>';
    $variables['content']['header'] = $header;
  }
  if (isset($variables['layout_info']['flexible'])) {
    // Add css class to layout.
    $variables['classes'][] = 'layout-' . backdrop_clean_css_identifier($variables['layout_info']['name']);
  }
}

/**
 * Implements theme_menu_toggle().
 */
function lateral_menu_toggle() {
  return '';
}

/**
 * Implements hook_css_alter().
 *
 * Get rid of unneeded core css.
 */
function lateral_css_alter(&$css) {
  unset($css['core/modules/system/css/menu-dropdown.theme.css']);
  unset($css['core/modules/system/css/menu-toggle.theme.css']);
  unset($css['core/misc/smartmenus/css/sm-core-css.css']);
  unset($css['core/modules/system/css/menu-dropdown.theme.breakpoint.css']);
  unset($css['core/modules/system/css/menu-dropdown.theme.breakpoint-queries.css']);
}

/**
 * Implements hook_js_alter().
 *
 * Get rid of unneeded core js.
 */
function lateral_js_alter(&$javascript) {
  unset($javascript['core/modules/system/js/menus.js']);
}

/**
 * Implements hook_ckeditor_settings_alter().
 *
 * Dynamically inject content css based on theme settings.
 */
function lateral_ckeditor_settings_alter(&$settings, $format) {
  global $base_url, $base_path;
  $path = $base_path . backdrop_get_path('theme', 'lateral');
  $font_selected = theme_get_setting('font');

  if ($font_selected == 'merriweather') {
    $settings['contentsCss'][] = $path . '/css/merriweather.css';
  }
  elseif ($font_selected == 'opensans') {
    //$settings['contentsCss'][] = $base_path . 'misc/opensans/opensans.css';
    $settings['contentsCss'][] = $path . '/css/use-opensans.css';
  }
  $color_uris = theme_get_setting('color.files');
  if ($color_uris) {
    // We only have a single color css file.
    $color_uri = reset($color_uris);
    $url = file_create_url($color_uri);
    $color_css = substr($url, strlen($base_url));
    $settings['contentsCss'][] = $color_css;
  }
  else {
    // No color module setting, add the theme's default file.
    $settings['contentsCss'][] = $path . '/css/colors.css';
  }
}
