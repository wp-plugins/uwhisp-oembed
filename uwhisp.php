<?php
/*
Plugin Name: uWhisp oEmbed
Description: Enables the uWhisp oEmbed provider to show the Whisp embeds wherever there is a Whisp link.
Version: 1.0
Author: iuri aranda
*/


function add_oembed_uwhisp(){
    wp_oembed_add_provider( 'https://uwhisp.com/*', 'https://api.uwhisp.com/2/oembed' );
}
add_action('init','add_oembed_uwhisp');
