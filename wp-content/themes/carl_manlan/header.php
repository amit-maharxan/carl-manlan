<?php
/**
 * Header Template
 * 
 * @package CARL
 */
?>

<!doctype html>
<html lang="en">
	<head>
		<?php 
		/**
		 * carl_meta hook
		 *
		 * @hooked carl_add_meta
		 */
		do_action('carl_meta');

		/**
		 * carl_links hook
		 *
		 * @hooked carl_add_links
		 */
		do_action('carl_links');

		// Keep it for plugins.
		wp_head(); ?> 
	</head>

	<body class="flex flex-col min-h-screen bg-dark overflow-x-clip max-w-screen">
		<div id="loader" class="loaderOverlay">
			<div class="loader"></div>
		</div>
		
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
			<symbol
				id="icon-arrow-right"
				viewBox="0 0 10 16"
				fill="none">
				<path
				d="M0.855337 8.62432L7.97554 15.7444C8.14022 15.9092 8.36006 16 8.59446 16C8.82886 16 9.0487 15.9092 9.21338 15.7444L9.73774 15.2202C10.0789 14.8786 10.0789 14.3234 9.73774 13.9823L3.75873 8.00332L9.74437 2.01767C9.90905 1.85286 9.99998 1.63316 9.99998 1.39888C9.99998 1.16435 9.90905 0.944641 9.74437 0.779699L9.22002 0.255608C9.05521 0.0907954 8.8355 -1.01802e-07 8.6011 -1.22294e-07C8.36669 -1.42787e-07 8.14686 0.0907954 7.98217 0.255607L0.855337 7.38218C0.690265 7.54752 0.5996 7.76826 0.60012 8.00293C0.5996 8.2385 0.690265 8.45912 0.855337 8.62432Z"
				fill="currentColor" />
			</symbol>
		</svg>
		
		<?php

			/**
			 * carl_header_content hook
			 *
			 * @hooked carl_output_header_content()
			 *
			 */
			do_action( 'carl_header_content' );

		?>