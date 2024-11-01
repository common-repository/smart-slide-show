=== Smart Slideshow ===
Contributors: xmlswf
Donate link: http://vm.xmlswf.com/wordpress-plugins/smart-slide-show
Tags: slideshow, wp slider, image slider, image slideshow
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: 1.1

== Description ==

Smart Slide Show is a plugin that allows you to display images in a flash slideshow.It is also possible to use it as a widget. You can also enable this slide show on your wordpress site by placing code snippet in your template php file.

**Features**

1. Image display options: Scale image, No scale, show all, exact fit options
2. Adjustable button distance
3. Highly customizable button, font, title bg colors
4. Show/Hide buttons
5. See more in parameters
6. provide widget feature

** Available Effects **

* blur
* alpha
* left
* right
* top
* bottom
* breath
* breath blur
* barsConverge
* blindsUp
* barsFlip
* blindsOpen
* stripes
* iris
* blindsMovingDown
* barsRight
* squaresFlip
* barsWavy
* blendHardLight
* blendMultiply
* blendDifference
* barsIntersect
* squaresLight
* blindsWave
* blendAddative
* squaresScale
* barsLeft
* barsOpen
* blindsDown
* blindsMovingUp
* philoAlpha
* philoBlurSquare
* philoClouds
* philoDisc
* philoFlipHorizontal
* More effects coming soon

For a working demo, visit http://vm.xmlswf.com/wordpress-plugins/smart-slide-show
Installation Video: http://www.youtube.com/watch?v=oxVYqy5VVNw
== Installation ==

1. Install automatically through the `Plugins`, `Add New` menu in WordPress, or upload the `smart-slide-show` folder to the `/wp-content/plugins/` directory. 

2. Click on plugin "Activate" to Activate the plugin or Activate the plugin through the `Plugins` menu in WordPress.

3. You can find "Settings" under "Smart SlideShow" link  on left side menu to configure the Options. 

= short codes for content =
* <code>[smart]</code> - Use this short code in the content / post to display all images under all categories which are not disabled.

* <code>[smart cats=2,3]</code> - Use this short code in the content / post to display all images under the categories with ID's 2,3.

* <code>[smart imgs=1,2,3]</code> - Use this short code in the content / post to display images which has ID's 1,2,3.

= short codes for templates =

* <code><?php echo do_shortcode('[smart]');?></code> - Use this short code in the template (php file) to display all images under all categories which are not disabled.

* <code><?php echo do_shortcode('[smart cats=2,3]');?></code> - Use this short code in the template (php file) to display all images under the categories with ID's 2,3.

* <code><?php echo do_shortcode('[smart imgs=1,2,3]');?></code> - Use this short code in the template (php file) to display images which has ID's 1,2,3.

Configure Settings if required to change the width, height, font sizes, colors, background colors etc...

For a working demo, visit http://vm.xmlswf.com/wordpress-plugins/smart-slide-show

Installation Video: http://www.youtube.com/watch?v=oxVYqy5VVNw

Still if you have problems in using this plugin please open a support ticket at http://support.xmlswf.com

== Screenshots ==

1. screenshot-1.jpg - Slideshow front end. 

2. screenshot-2.gif - Add new album / category.

3. screenshot-3.gif - Edit image.

4. screenshot-4.gif - bulk upload.

5. screenshot-5.gif - edit album / category.

6. screenshot-6.gif - short code to be placed in the content.


For a working demo, visit http://vm.xmlswf.com/wordpress-plugins/smart-slide-show
Installation Video: http://www.youtube.com/watch?v=oxVYqy5VVNw

== Changelog ==

*	**1.1** - plugin used in pages/posts,in widget area, and any any place in template.
*	**1.0** - if there is no image found in mentioned images list it is simply include no_image.png in place of original image.
*	**2.0** - This is entirely new built. Not works if you update from 1.x version. You must uninstall old version and install this version. This version supports categories and multiple image uploading. Also you can use the slideshows multiple instances.
*	**2.1** - Where ever you place the short code, there only the slider shows. Previously it use to show on top of content.
*	**2.3** - Fixed security bugs