<?php

function enq_fawesome_fcdn(){
	
	//Register Script
	wp_register_script('font-awesome', '//use.fontawesome.com/releases/v5.0.6/js/all.js');
//Enqueue scripts
	wp_enqueue_script(array('jquery','font-awesome'));
}
add_action('wp_enqueue_scripts', 'enq_fawesome_fcdn');