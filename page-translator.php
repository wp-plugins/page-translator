<?php
/*
Plugin Name: Page Translator
Plugin URI: http://www.letem.cz/page-translator/
Description: Customize WordPress pagination URL. You can change 'page' to anything else. For example, 'http://www.yourwebsite.com/page/5/' -> 'http://www.yourwebsite.com/seite/5/'. After activating plugin you can set the new value in <a href="plugin-editor.php?file=page-translator/page-translator.php">Plugin Editor</a>. After actualization of the plugin file, don't forget to run <a href="options-permalink.php">Permalink Options</a> and click on 'Save changes' button. Now you can see your new - more friendly URLs :-)
Version: 1.1.0
Author: Jiří Poláček
Author URI: http://www.letem.cz/
*/


$page_translator_new = 'page'; // here type the new value instead of 'page', for example 'seite', so your URLs will be like 'http://www.url.com/seite/5/'


add_action ('init', 'page_translator');

function page_translator () {
global $wp_rewrite, $page_translator_new;
$wp_rewrite->pagination_base = $page_translator_new;
}

?>