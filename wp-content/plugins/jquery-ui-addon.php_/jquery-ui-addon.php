<?php
/**
 * @package JQuery UI AddOn
 * @version 1.0
 */
/*
Plugin Name: JQuery UI AddOn
Description: The plugin adds the JQuery UI script to your theme
Author: Eric Sherred
Version: 1.0
Author URI: https://ericsherred.com/
Text Domain: jquery-ui-addon
*/

add_action('wp_enqueue_scripts', 'jquery_ui_addon_enque_files');
function jquery_ui_addon_enque_files() {
  wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array( 'jquery' ), '1.12.1' );
}