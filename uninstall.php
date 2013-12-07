<?php

if (!defined ('ABSPATH') && !defined ('WP_UNINSTALL_PLUGIN')) { exit(); }

global $wp_rewrite;
$wp_rewrite->pagination_base = "page";
$wp_rewrite->flush_rules();

?>