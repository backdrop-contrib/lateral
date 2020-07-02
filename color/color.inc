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
    'frostypastel' => array(
      'title' => t('Frosty pastel'),
      'colors' => array(
        'header' => '#EFF0F2',
        'headertext' => '#5B6881',
        'hovermenu' => '#F9FAFF',

        'herotext' => '#3C4664',
        'herobg' => '#CED6FF',

        'base' => '#ffffff',
        'text' => '#585C66',
        'link' => '#c86eaf',
        'borders' => '#cccccc',
        'formfocusborder' => '#509bdd',
        'primarytabs' => '#e6e6e6',
        'buttons' => '#F3C4E6',
        'buttonstext' => '#585C55',
        'lightbg' => '#f8f8f8',
        'darkbg' => '#e6e6e7',

        'footer' => '#CDCFD3',
        'footertext' => '#606060',
      ),
    ),
    'night' => array(
      'title' => t('Night'),
      'colors' => array(
        'header' => '#32383f',
        'headertext' => '#eeeeee',
        'hovermenu' => '#4b5660',

        'herotext' => '#feffa2',
        'herobg' => '#222222',

        'base' => '#1f2126',
        'text' => '#efefef',
        'link' => '#d7cf00',
        'borders' => '#ebe238',
        'formfocusborder' => '#70ec46',
        'primarytabs' => '#525252',
        'buttons' => '#dfce20',
        'buttonstext' => '#363617',
        'lightbg' => '#565656',
        'darkbg' => '#222223',

        'footer' => '#161616',
        'footertext' => '#c1c1c1',
      ),
    ),
    'nature' => array(
      'title' => t('Nature'),
      'colors' => array(
        'header' => '#65734f',
        'headertext' => '#fffffe',
        'hovermenu' => '#748957',

        'herotext' => '#feffff',
        'herobg' => '#8b9477',

        'base' => '#fcfbea',
        'text' => '#373129',
        'link' => '#4f7f00',
        'borders' => '#868874',
        'formfocusborder' => '#21cb00',
        'primarytabs' => '#e6e6e6',
        'buttons' => '#7C993A',
        'buttonstext' => '#fffffd',
        'lightbg' => '#f6f7e3',
        'darkbg' => '#d4d5c0',

        'footer' => '#666553',
        'footertext' => '#fffdff',
      ),
    ),
  ),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),
);
