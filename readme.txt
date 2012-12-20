=== cbnet Manage Plugins Donate Link ===
Contributors: chipbennett
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QP3N9HUSYJPK6
Tags: cbnet, plugin, plugins, manage, readme, readme.txt, Donate, Donate link, Donate URI
Requires at least: 2.9
Tested up to: 3.5
Stable tag: 1.1

Add a Donate link in the plugin_row_meta for each installed plugin on the Manage Plugins page.

== Description ==

This plugin provides a quick and convenient means to access the plugin author's Donate link for all installed plugins, by adding a 'Donate' link in the plugin_row_meta for each plugin on the Manage Plugins page. The link displays the Donate link from the plugin's readme.txt header information.

This plugin is useful for WordPress users who wish to support plugin developers' work by sending donations, but who find it inconvenient and/or tedious to browse each plugin's wordpress.org Extend listing in order to find each plugin author's Donate link. Once this plugin is installed, all plugins for which the author has defined a Donate link will have that link appear in their listing on the Manage Plugins page in the Admin UI.

== Installation ==

Manual installation:

1. Upload the `cbnet-manage-plugins-donate-link` folder to the `/wp-content/plugins/` directory

Installation using "Add New Plugin"

1. From your Admin UI (Dashboard), use the menu to select Plugins -> Add New
2. Search for 'cbnet Manage Plugins Donate Link'
3. Click the 'Install' button to open the plugin's repository listing
4. Click the 'Install' button

Activiation and Use

1. Activate the plugin through the 'Plugins' menu in WordPress
2. The plugin requires no configuration.

== Frequently Asked Questions ==

= I'm a plugin author, and I display my own Donate link. =

The plugin checks to determine if a "Donate" link exists in plugin_row_meta. If such a link exists (e.g. because your plugin already filters plugin_row_meta to add your own Donate link), then this plugin doesn't add a duplicate link.

= I'm a plugin author, and I don't want my readme.txt Donate link displayed on the Manage Plugins page. =

Let me know, and I will try to filter for your plugins.

== Screenshots ==

1. **Donate** link added to the meta link list below the plugin description on the Manage Plugins page

== Changelog ==

= 1.1 =
* Made Plugin translation-ready
= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.1 =
Made Plugin translation ready
= 1.0 =
Initial Release.