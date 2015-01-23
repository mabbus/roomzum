<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
 if (drupal_is_front_page()) {
     require_once 'homepage.tpl.php';
 } else {
     require_once 'secondary-page.tpl.php';
 } ?>
