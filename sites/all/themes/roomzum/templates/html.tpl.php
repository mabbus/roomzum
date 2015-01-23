<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="notransition no-touch no-hidden <?php print $classes; ?>" <?php print $attributes;?>>

  <?php print $page; ?>

</body>

<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery-2.1.1.min.js"></script>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery-ui.min.js"></script>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery-ui-touch-punch.js"></script>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery.placeholder.js"></script>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/bootstrap.js"></script>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery.touchSwipe.min.js"></script>
<?php if (drupal_is_front_page()) { ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
<?php } ?>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/infobox.js"></script>
<?php if(drupal_is_front_page()) {
?>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/home.js" type="text/javascript"></script>
<?php } else { ?>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/roomzum.js" type="text/javascript"></script>
<?php } ?>
<script src="/<?php print drupal_get_path('theme','roomzum');?>/js/jquery.visible.js"></script>
</html>
