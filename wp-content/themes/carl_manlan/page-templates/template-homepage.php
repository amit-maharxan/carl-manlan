<?php
/**
 * Template Name: Homepage Layout
 */

do_action('carl_header'); ?>

<?php 
    /**
     * carl_homepage_content hook
     *
     */
    do_action( 'carl_homepage_content' );
?>

<?php do_action('carl_footer'); ?>