<?php 

	/*
	Plugin Name: Image Banner Pro WPBakery
	Description: Banner simples com texto
	Plugin URI: http://aloisiosoares.com
	Author: Aloisio Soares
	Author URI: http://aloisiosoares.com
	Version: 1.0
	License: GPL2
	Text Domain: vc-image-banner
	*/
	
	/*
	
	    Copyright (C) 2020  Aloisio Soares
	*/
	if ( ! defined( 'ABSPATH' ) ) exit; 
	include 'plugin.class.php';
	if (class_exists('VC_Image_Banner_Free')) {
	    $obj_init = new VC_Image_Banner_Free;
	} 
 ?>