=== Plugin Name ===
Contributors: Jiří Poláček
Donate link: http://www.letem.cz/page-translator/
Tags: paging, pagination, translate, url, seo, permalinks, change
Requires at least: 3.0.0
Tested up to: 3.7.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple plugin which allows you to set your pagination name in URL.

== Description ==

Customize WordPress pagination URL. You can change 'page' to anything else. For example, 'http://www.yourwebsite.com/page/5/' -> 'http://www.yourwebsite.com/seite/5/'. After activating plugin you can set the new value in <a href="plugin-editor.php?file=page-translator/page-translator.php">Plugin Editor</a>. After actualization of the plugin file, don't forget to run <a href="options-permalink.php">Permalink Options</a> and click on 'Save changes' button. Now you can see your new - more friendly URLs :-)

== Installation ==

How to install:

1. Upload 'page-translator' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Set the new value instead of 'page' in 'wp-admin/plugin-editor.php?file=page-translator/page-translator.php'
4. Run 'wp-admin/options-permalink.php' and click on 'Save changes' button.
5. Now you can see your new - more friendly URLs :-)

Possible interactions with some plugins:

1. If you are using plugins like 'WP Super Cache' which saves the pages on server, maybe it will be necessary to delete the cache so the changes can take affect immediately.
2. Some plugins which changes URL, like 'WP No Category Base' or 'WP-No-Tag-Base', can operate with 'page' in their code. So it will be necessary to change the word 'page' to your new word manually in the code of this plugin via <a href="plugin-editor.php">Plugin Editor</a>.

== Changelog ==

= 1.1 =
* Changed default value to 'page' so the plugin won't change your URLs until you write your new word instead of 'page'.

== Upgrade Notice ==

= 1.1 =
We improved this plugin a bit.