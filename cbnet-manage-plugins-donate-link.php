<?php
/*
 * Plugin Name:   cbnet Manage Plugins Donate Link
 * Plugin URI:    http://www.chipbennett.net/plugins/cbnet-manage-plugins-donate-links/
 * Description:   Add a Donate link in the plugin_row_meta for each installed plugin on the Manage Plugins page.
 * Version:       1.1
 * Author:        chipbennett
 * Author URI:    http://www.chipbennett.net/
 *
 * License:       GNU General Public License, v2 (or newer)
 * License URI:  http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * Thanks to andreasnrb for his assistance (and patience)
 * with this plugin. And thanks also to all the other fine folks at  the
 * WPTavern Forum (http://www.wptavern.com/forum) for their help.
 */
 
/**
 * Load Plugin textdomain
 */
function cbnetmpdl_load_textdomain() {
	load_plugin_textdomain( 'cbnetmpdl', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
// Load Plugin textdomain
add_action( 'plugins_loaded', 'cbnetmpdl_load_textdomain' );


/**
 * Class to add donate links
 */
class cbnetmpdl{
    function cbnetmpdl() {
        if ( is_admin() ) {
            add_filter( 'plugin_row_meta', array( &$this, 'cbnet_display_donate_link' ), 99, 2 );
        }
    }
	
	function cbnet_display_donate_link( $links, $plugin_file ){
		$donate_link_already_exists = 'false';
		$existing_links = $links;
		foreach ( $existing_links as $link ) {
			if( 'false' == $donate_link_already_exists ) {
				$other_donate_link = ( false !== strpos( strtolower( trim( $link ) ), 'donate' ) ? 'true' : 'false' );
				if( 'true' == $other_donate_link ){
					$donate_link_already_exists = 'true';
				}
			}
		}
		if( 'false' == $donate_link_already_exists ) {
			$donate_uri = false;
			$readmeFile = WP_PLUGIN_DIR . '/' . dirname( $plugin_file ) . '/readme.txt';
			if ( file_exists( $readmeFile ) ) {
				$readme = file( $readmeFile, FILE_SKIP_EMPTY_LINES );
				foreach ( $readme as $line ) { 
					$donate_link_exists = ( false !== stripos( $line , 'donate' ) ? 'true' : 'false' );
					if( 'true' == $donate_link_exists ){ 
						$donate_uri = trim( substr( $line, strpos( $line, ':' ) + 1 ) );
						$donate_link_text = __( 'Donate', 'cbnetmpdl' );
						break;
					} 
				}
			} 
			if ( false !== $donate_uri ) {
			$donate_link = '<a href="' . $donate_uri  . '" target="_blank">' . $donate_link_text . '</a>';
			$links[] = $donate_link;
			}
		}
		return $links;
    }

}
new cbnetmpdl();
?>