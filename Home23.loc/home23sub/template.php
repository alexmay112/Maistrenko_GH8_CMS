<?php
/**
 * @file
 * Theme functions
 */

// Include all files from the includes directory.
$includes_path = dirname(__FILE__) . '/includes/*.inc';
foreach (glob($includes_path) as $filename) {
  require_once dirname(__FILE__) . '/includes/' . basename($filename);
}

/**
 * Implements template_preprocess_page().
 */
function home23sub_preprocess_page(&$variables) {
  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }
}

function home23sub_preprocess_block(&$variables) {
    $variables['theme_hook_suggestions'][] = 'block__' . $variables['block']->region;
    $variables['theme_hook_suggestions'][] = 'block__' . $variables['block']->module;
    $variables['theme_hook_suggestions'][] = 'block__' . $variables['block']->delta;

    // Add block description as template suggestion
    $block = block_custom_block_get($variables['block']->delta);

    // Transform block description to a valid machine name
    if (!empty($block['info'])) {
        setlocale(LC_ALL, 'en_US');

        // required for iconv()
        $variables['theme_hook_suggestions'][] = 'block__' . str_replace(' ', '_', strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $block['info'])));
    }
}
