=== Sub Page Navigation Widget ===
Contributors: dhoppe
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=1220480
Tags: widget, sidebar, page, pages, cms, menu
Requires at least: 3.0
Tested up to: 3.3
Stable tag: trunk

This Widget displays a navigation structure to all sub pages of the current one in your sidebar.

== Description ==

This Widget displays a navigation structure to all sub pages of the current one in your sidebar. You can add this widget to sidebars on pages to show all sub pages of the current one.

= Handling =
The handling is very easy. After activating the plug-in you will find a new widget in your admin panel. Add it to a sidebar and check all options you need. That's it.

= Customizing the appearance =
TO customized the appreance of the widget copy the *widget.php* file (from the plug-in folder) to your theme directory and rename it to *sub-page-navigation.php*. Now you can start customize the style of your widget until it fits your needs. The file is well documented and easy to understand.

= For developers =
If you want to use a customized template file outside the theme directory you can use the *sub_page_navigation_template* filter. Just write a path to a file in the filter to bypass the template. Here is an example that shows how you could write a plugin which changes the template path to a file in its own directory.

<code>
Function bypass_template($template_file){
  /* the $template_file is the file which is currently set as template so
     you can also use the filter to read the current template file. 
  */
  return DirName(__FILE__) . '/my-template.php';
}
Add_Filter('sub_page_navigation_template', 'bypass_template');
</code>


= Language =
* This plug-in is available in English.
* Dieses Plugin ist in Deutsch verfügbar. ([Dennis Hoppe](http://dennishoppe.de/))
* Acest plugin este disponibil în limba Română. ([Anunturi Jibo](http://www.jibo.ro/))
* Bu eklentinin Türkçe desteği bulunmaktadır. ([Ramerta Grup](http://ramerta.com/))


== Installation ==

Installation as usual.

1. Unzip and Upload all files to a sub directory in "/wp-content/plugins/".
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to your widget admin page and choose a place for your new Widget.
1. You like what you see?

== Changelog ==

= 1.1.3 =
* The Widget works on the blog page too now.
* Added label elements to the widget form.

= 1.1.2 =
* Added template support.

= 1.1.1 =
* Added Turkish translation by [Ramerta Grup](http://ramerta.com/).

= 1.1 =
* Complete rewritten
* Added Romanian translation by [Anunturi Jibo](http://www.jibo.ro/).

= 1.0.4 =
* Fixed a small bug (Widget did not show sub pages if were loaded before the page content).


= 1.0.3 =
* Updated donation widget ;)
* Added 'plugin_locale' filter

= 1.0.2 =
* Added option to hide the widget on top level pages.

= 1.0.1 =
* New you can choose if the widget title should be replaced with the title of the parent page.

= 1.0 =
* Everything works fine.
