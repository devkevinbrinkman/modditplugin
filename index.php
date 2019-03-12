<?php

/*
	Plugin Name: Moddit Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: Kevin Brinkman
	Author URI: http://www.moddit.nl
*/


if( ! class_exists( 'Moddit_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Moddit_Updater( __FILE__ );
$updater->set_username( 'devkevinbrinkman' ); // USERNAME
$updater->set_repository( 'modditplugin' ); // PLUGIN NAAM
// $updater->authorize( '089670778166a6711b10c0fb416cb13df404f19b' ); // AUTH CODE PRIVACY
$updater->initialize();

?>