=== Material Design Icons ===
Contributors: braginteractive, chrisanben
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=54JCLD3GUCY68
Tags: icons, material design, font icon, UI, icon font, material
Requires at least: 3.0.1
Tested up to: 6.3
Stable tag: 0.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Insert Material Design Icons into your WordPress post and pages. 

== Description ==

Enables 1000+ Material Design icons within WordPress pages and posts. Icons can be inserted with a shortcode or HTML markup. 

= Features =

* **Shortcode generator** - includes an easy-to-use TinyMCE pop-up shortcode generator.

= Usage =
Material Design Icons can be used in 3 different ways: shortcode, HTML, and TinyMCE

= 1. Shortcode =
`[mdi-icon name="material-ul" size="2x" color="red"]`

You can also use hex values for color:
`[mdi-icon name="material-ul" size="2x" color="#000000"]`

You can read more about shortcode usage on [Github](https://github.com/braginteractive/Material-Design-Icons-WordPress-Plugin)

= 2. TinyMCE =
Material Design Icons also provides you with a pop-up window when editing in TinyMCE's visual mode. Check out our [Screenshots](https://wordpress.org/plugins/material-design-icons/screenshots/ "Screenshots") to see what it looks like.

= 3. HTML =
Note that prefixes are required for HTML usage. For this reason, shortcode usage is encouraged over HTML. A HTML version would look like:
`<i class="mdi mdi-material-ui mdi-10x" style="color:red;"></i>`


== Installation ==

To use any of the Material Design icons on your WordPress site follow the steps below:

1. Upload `material-design-icons` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the HTML markup or shortcode to your WordPress post or page. 


A full list of the 1000+ Material Design icons is available: [materialdesignicons.com/](http://materialdesignicons.com/)

To use any of the Material Design icons on your WordPress site you have two options:

__HTML__

**Examples**

Bell icon

`<i class="mdi mdi-bell"></i>`


__Shortcode__

Don't want to worry about HTML tags?  You can use a shortcode in your posts, pages and even widgets to display a Material Design icon.

The shortcode to use is `[mdi-icon name=X]`, where name=X is the class of the icon you would like to use.

**Examples**

Amazon icon

`[mdi-icon name="amazon"]`

Since v0.0.3 you can now add size and color.

`[mdi-icon name="amazon" color="red" size="2x"]`

Hex values will work for the color option and the include size values are: lg, 2x, 3x, 4x, 5x, 6x, 7x, 8x, 9x, 10x

__Author__

*   [Brad Williams](http://braginteractive.com)
*   [Christoffer Cabello] (https://chrisanben.com)

== Frequently Asked Questions ==

= Can I use this in any WordPress theme? =

Yes

= Can I use the icons within widget areas? =

Yes

== Screenshots ==

1. When you click the Material Design Icon in the post editor a pop-up window will appear to help build your icon shortcode. 
2. Example of the HTML markup and the shortcode markup to display Material Design icons

== Upgrade Notice ==

= 0.0.6 =

* tested on 6.3
* replaced bower
* update MDI to v7.2.96

= 0.0.5 =

* tested on 4.3

= 0.0.4 =

* update MDI to 1.1.70
* fix icon font sizes

= 0.0.3.2 =

* minor bugfix

== Changelog ==

= 0.0.5 =

* tested on 4.3

= 0.0.4 =

* update MDI to 1.1.70
* fix icon font sizes

= 0.0.3 =

* Add TinyMCE button
* Add size and color options

= 0.0.2 =

* Update to Material Design Icons 1.0.62

= 0.0.1 =

* Initial release