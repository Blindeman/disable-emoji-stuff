<?php
/**
 * Plugin Name: Disable Emoji styles and scripts
 * Plugin URI: https://www.wpfaster.org/code/how-to-remove-emoji-styles-scripts-wordpress
 * Github plugin URI: https://github.com/Blindeman/disable-emoji-stuff
 * Description: Don't load CSS and scripts for emojis if you have no intention of using them
 * Version: 0.0.1
 * Author: No one
 * License: GNU General Public License
 * License URI: https://www.gnu.org/licenses/gpl.html
 */

defined( 'ABSPATH' ) or die;


remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );