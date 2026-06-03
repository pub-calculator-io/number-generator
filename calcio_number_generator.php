<?php
/*
Plugin Name: Number Generator by Calculator.iO
Plugin URI: https://www.calculator.io/number-generator/
Description: Instantly generate random numbers with our customizable Number Generator. Set specific ranges, allow or prevent duplicates, and sort your results with ease.
Version: 1.0.0
Author: www.calculator.io / Number Generator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_number_generator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Number Generator by www.calculator.io";

function calcio_number_generator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Number Generator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_number_generator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_number_generator', 'calcio_number_generator_shortcode' );