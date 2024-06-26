<?php
/*
Plugin Name: CI Number generator
Plugin URI: https://www.calculator.io/number-generator/
Description: The random number generator provides a set of random numbers according to user-specified options such as range, repeat, and sort.
Version: 1.0.0
Author: Number Generator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_number_generator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Number Generator by www.calculator.io";

function display_calcio_ci_number_generator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Number Generator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_number_generator_iframe"></iframe></div>';
}


add_shortcode( 'ci_number_generator', 'display_calcio_ci_number_generator' );