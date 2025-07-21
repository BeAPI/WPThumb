=== WPThumb ===
Contributors: humanmade, joehoyle, mattheu, tcrsavage, willmot
Tags: image, resize, thumbnail, crop, phpthumb
Requires at least: 3.5
Tested up to: 6.5
Stable tag: 0.15

An on-demand image generation replacement for WordPress' image resizing.

== Description ==

WP Thumb is a simple plugin that seamlessly integrates with the WordPress image functions. You can specify height, width and crop values, and an image will be generated, which is then cached for future use.

= Features =

* Automatic images resizing, cropping and caching.
* Ideal for when you want to change the dimensions of default image sizes.

== Changelog ==

#### 0.15

* Handle the case where the media is not an image (i.e : a svg)

#### 0.14

* Fix PHP warning

#### 0.13

* Change priority, prefer Imagick to GD

#### 0.12

* Fix some PHP notices/warning with PHP 8.2

#### 0.11

* Fix PHP warning

#### 0.10

* `wpthumb` shortcode
* bugfixes + tests

#### 0.9

* Removed dependancy on PHP Thumb GD Library, much smaller now!
* Use the new WordPress 3.5 Image classes
* Will now use Image Magick if available (though not for watermarking and background_fill currently)

#### 0.8

* Don't activate on less than PHP 5.2.4

#### 0.7

* Fix some issues with resizing gifs
* Unit tests for cropping gifs
* Improved code formatting and commenting
* Pipe `STDERR` to `dev/null` in phpthumb `exec` so that error_log isn't polluted with checks for ImageMagick
* Fix some readme layout issues
* Don't resize if image is already correct dimensions, + unit test

#### 0.5

* Added more tests
* Fix minor bugs

#### 0.4

* Rewrote core functionality to use a Class
* Added 22 Unit Tests (can be run using WP Unit)

#### 0.3

* Ability to extend functionality using filters to manipulate image object.

#### 0.2

* Add some error messages and try to prevent some conflicts with our other plugins.
* Swap Joe Hoyles helper for HM Core.

#### 0.1

* Add Joe Hoyles helper.

== Installation ==

1. Upload the 'WPThumb' folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

= The plugin doesn't work, what do I do? =

Visit the Issues page of the plugin homepage at: https://github.com/humanmade/WPThumb

## Contribution guidelines ##

see https://github.com/humanmade/WPThumb/blob/master/CONTRIBUTING.md

