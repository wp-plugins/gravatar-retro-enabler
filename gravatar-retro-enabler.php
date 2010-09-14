<?php
/*
Plugin Name: Gravatar Retro Enabler
Description: Enabled the retro option for your gravatar default setting
Author: Demitrious Kelly
Version: 1.0
Author URI: http://blog.apokalyptik.com/
*/

function add_retro_as_gravatar_default_option( $defaults ) {
	$defaults['retro'] = __('Retro (Generated)');
	return $defaults;
}
add_filter( 'avatar_defaults', 'add_retro_as_gravatar_default_option' );
