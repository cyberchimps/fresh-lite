<?php

/**
 * Title: About
*
* Description: Displays list of all CyberChimps theme linking to it's pro and free versions.
*
* Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
* should be made in a child theme.
*
* @category CyberChimps Framework
* @package  Framework
* @since    1.0
* @author   CyberChimps
* @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
* @link     http://www.cyberchimps.com/
*/

// Add stylesheet and JS for upsell page.
function cyberchimps_about_style() {

	// Set template directory uri
	$directory_uri = get_template_directory_uri();

	wp_enqueue_style( 'about_style', get_template_directory_uri() . '/inc/css/about.css' );

}

// Add upsell page to the menu.
function cyberchimps_add_about() {
	$page = add_theme_page(
			'About Fresh Lite',
			'About Fresh Lite',
			'administrator',
			'fresh-lite-about',
			'cyberchimps_display_about'
	);

	add_action( 'admin_print_styles-' . $page, 'cyberchimps_about_style' );
}

add_action( 'admin_menu', 'cyberchimps_add_about' );

// Define markup for the upsell page.
function cyberchimps_display_about() {

	// Set template directory uri
	$theme      = wp_get_theme();
	?>
	<div class="about-container">

		<div class="about-info">
			<h1><?php echo "Fresh Lite - ".$theme['Version'] ?></h1>
			<?php
				$directory_uri = get_template_directory_uri();

			?>
			<span><img src="<?php echo $directory_uri ?>/images/logo.png"></span>
			<?php printf( '<p>Fresh Lite lets you create amazing responsive websites that you can control on any touch device including the iPad, iPhone, and Android devices. Fresh Lite – a Free Blogging WordPress Theme that also includes the power of a dozen plugins in a single theme allowing you to setup an entire creative website in minutes with touch-friendly drag-and-drop options on a per-page basis allowing you control the look and feel of every page.'
			); ?>
		</div>

		<div class="features">
			<table class="features-table">
			<thead>
			<tr>
				<th class=""></th>
				<th>Fresh Lite</th>
				<th>Fresh Pro 4</th>
			</tr>

			<tr>
			<td class="feature">Responsive layout <p>Works on every device</p></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Ability to upload custom favicon, apple touch icon</td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Include post format icons on blog page</td>
			<td class="featureyes"><span class="dashicons-before dashicons-yes"></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Drag & Drop Visual Elements for blog and pages</td>
			<td class="featureyes">3</span></td>
			<td class="featureyes">15</span></td>
			</tr>
			<tr>
			<td class="feature">Custom Sidebar Templates</td>
			<td class="featureyes">2</span></td>
			<td class="featureyes">5</span></td>
			</tr>
			<tr>
			<td class="feature">Widgetized areas</td>
			<td class="featureyes">2</span></td>
			<td class="featureyes">6</span></td>
			</tr>
			<tr>
			<td class="feature">Custom Menus</td>
			<td class="featureyes">2</span></td>
			<td class="featureyes">3</span></td>
			</tr>
			<tr>
			<td class="feature">Header Drag & Drop Options</td>
			<td class="featureyes">3</span></td>
			<td class="featureyes">8</span></td>
			</tr>

			<tr>
			<td class="feature">Ready-to-use Color Schemes (Skins)</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureyes"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Option to add Google Analytics code</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">Custom Header, Footer Scripts</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			<tr>
			<td class="feature">High Priority Support via Helpdesk</td>
			<td class="featureyes"><span class="dashicons-before dashicons-no-alt"></span></td>
			<td class="featureno"><span class='dashicons-before dashicons-yes'></span></td>
			</tr>

			</thead>
			</table>
		</div>
		<div class="buy">
		<a class="button button-primary buylink" target="_blank" href="https://cyberchimps.com/store/fresh-pro/?utm_source=about">Buy Fresh Pro</a>
		</div>
	</div>
<?php
}
