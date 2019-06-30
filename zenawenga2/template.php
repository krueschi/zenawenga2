<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

/**
 * hook_preprocess_node(&$vars)
 * Adding a custom template suggestion for teaser view modes.
 * @see https://drupal.stackexchange.com/questions/27974/what-is-the-template-suggestion-for-node-teaser-view-mode
 */
function zenawenga2_preprocess_node(&$vars) {
 if($vars['view_mode'] == 'teaser') {
   array_unshift($vars['theme_hook_suggestions'], 'node__' . $vars['node']->type . '__teaser');
   array_unshift($vars['theme_hook_suggestions'], 'node__' . $vars['node']->nid . '__teaser');
 }
}
