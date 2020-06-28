<?php
$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'header' => t('Header background'),
    'titleslogan' => t('Site name and slogan'),
    'hovermenu' => t('Main menu hover background'),

    'herotext' => t('Hero text'),
    'herobg' => t('Hero background'),

    'base' => t('Main background'),
    'text' => t('Text color'),
    'link' => t('Link color'),
    'borders' => t('Borders'),
    'formfocusborder' => t('Form element borders when selected'),

    'primarytabs' => t('Primary Tabs Background'),
    'primarytabstext' => t('Primary Tabs Text'),
    'buttons' => t('Buttons and Breadcrumb'),

    'footer' => t('Footer background'),
    'footertext' => t('Footer text'),
    'footerborder' => t('Footer Border'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Lateral (default)'),
      'colors' => array(
        'header' => '#20252e',
        'titleslogan' => '#fffffe',
        'hovermenu' => '#114a75',

        'herotext' => '#feffff',
        'herobg' => '#393959',

        'base' => '#ffffff',
        'text' => '#333344',
        'link' => '#386e9d',
        'borders' => '#bbbbbb',
        'formfocusborder' => '#43afe4',

        'primarytabs' => '#586172',
        'primarytabstext' => '#010000',
        'buttons' => '#dee2ea',

        'footer' => '#fffeff',
        'footertext' => '#000100',
        'footerborder' => '#bbbbbc',
      ),
    ),
  ),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),
);
