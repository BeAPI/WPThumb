_**This project is a definitive fork in the road for long-term maintenance of the projects built with it.**_

<table width="100%">
	<tr>
		<td align="left" width="70%">
			<strong>WP Thumb</strong><br />
			An on-demand image generation replacement for WordPress' image resizing.
		</td>
	</tr>
	<tr>
		<td>
			A <strong><a href="https://hmn.md/">Human Made</a></strong> project.
		</td>
	</tr>
</table>

WP Thumb is a simple but powerful plugin that seamlessly intergrates with the Core WordPress image handling. You specify height, width and crop values and an image will be generated and cached for future use.

* Automatic dynamic images resizing, cropping and caching.
* Ideal for when you want to change the dimensions of default image sizes.
* Can extend using filters to make use of any of the phpThumb Library functions by manipulating the image object.
* Integrate with Imgix & S3 via the [WP Thumb Bridge](https://github.com/humanmade/wpthumb-bridge)

## Changelog

### 0.16.0 - Security Release

* **SECURITY FIX**: Deprecated wpthumb shortcode to fix SSRF vulnerability (CVE-2025-49983)
* The `[wpthumb]` shortcode has been disabled due to Server Side Request Forgery vulnerability
* Use `wp_get_attachment_image()` or native WordPress image functions instead

## Installation 

Just install like any other WordPress plugin.

## License
WP Thumb is licensed under the GPLv2 or later.

## Credits
Created by Human Made for high volume and large-scale sites, such as [Happytables](http://happytables.com/). We run WP Thumb on sites with millions of monthly page views, thousands of sites and terabytes of images.

Written and maintained by [Joe Hoyle](https://github.com/joehoyle). Thanks to all our [contributors](https://github.com/humanmade/WPThumb/graphs/contributors).

Interested in joining in on the fun? [Join us, and become human!](https://hmn.md/is/hiring/)
