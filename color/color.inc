<?php
$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'header' => t('Header background'),
    'headertext' => t('Header text and links'),
    'hovermenu' => t('Main menu hover background'),

    'herotext' => t('Hero text'),
    'herobg' => t('Hero background'),

    'base' => t('Main background'),
    'text' => t('Text color'),
    'link' => t('Link color'),
    'borders' => t('Borders'),
    'formfocusborder' => t('Form element borders when selected'),
    'primarytabs' => t('Primary Tabs Background'),
    'buttons' => t('Buttons background'),
    'buttonstext' => t('Buttons text'),
    'lightbg' => t('Light backgrounds'),
    'darkbg' => t('Dark backgrounds'),

    'footer' => t('Footer background'),
    'footertext' => t('Footer text'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Lateral (default)'),
      'colors' => array(
        'header' => '#20252e',
        'headertext' => '#fffffe',
        'hovermenu' => '#2c4a64',

        'herotext' => '#feffff',
        'herobg' => '#2b2f42',

        'base' => '#ffffff',
        'text' => '#333344',
        'link' => '#386e9d',
        'borders' => '#cccccc',
        'formfocusborder' => '#509bdd',
        'primarytabs' => '#e6e6e6',
        'buttons' => '#386e9e',
        'buttonstext' => '#fffffd',
        'lightbg' => '#f8f8f8',
        'darkbg' => '#e6e6e7',

        'footer' => '#20252f',
        'footertext' => '#fffdff',
      ),
    ),
  ),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),
);
