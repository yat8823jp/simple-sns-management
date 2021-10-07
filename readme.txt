=== Sinmple SNS Account Management ===
Contributors: yat8823jp
Tags: SNS
Requires at least: 5.8
Tested up to: 5.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Registration of SNS account from the management screen.
Account ID and URL can be obtained on the front side.

== Installation ==

1. Upload the the `simple-sns-management` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Enter your SNS account and save.
4. Describe the following in the template file of the theme you want to display.
 - ssam_account(); : You can call each SNS account in an array.
 - ssam_view(); : You can call the URL of each SNS in an array.

== Changelog ==

= 1.1.0 =
* 2021-10-07 add ssam_account_arrangement()

= 1.0.1 =
* 2021-10-02 Typing error correction

= 1.0.0 =
* 2021-09-29 First release
