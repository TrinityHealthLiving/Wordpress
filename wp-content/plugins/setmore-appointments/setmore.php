<?php

/*
Plugin Name: SetMore Appointments
Plugin URI: http://setmore.com/
Description: SetMore Appointments ��� Take customer appointments online for free
Version: 2.0
Author: Anand Thiyagarasu of SetMore Appointments
Author URI: http://setmore.com/
License: GPL
*/

/*===========================================
	Setup the basic hooks for installing and
	removing the SetMore plug-in
 ===========================================*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'setmore_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'setmore_remove' );



/*===========================================
	Do the work, create a database field
 ===========================================*/

function setmore_install() {
	/* Creates new database field */
	add_option("setmore_booking_page_url", 'SetMore Booking Page URL', '', 'yes');
}

function setmore_remove() {
	/* Deletes the database field */
	delete_option('setmore_booking_page_url');
}



/*===========================================
	Create an admin menu to me loaded 
 ===========================================*/

if ( is_admin() ){
	/* Call the html code */
	add_action('admin_menu', 'setmore_admin_menu');

	function setmore_admin_menu() {
		add_options_page('SetMore Appointments Options', 'SetMore', 'administrator', 'setmore', 'setmore_html_page');
	}
}



/*===========================================
	Add all the necessary dependencies
 ===========================================*/

add_action('init','initialize_setmore');
add_action("plugins_loaded", "setmore_widget_init");

function initialize_setmore() {
	
	// Javascripts
	// wp_deregister_script('jquery');
	wp_register_script('jquery',	'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_register_script('setmore',	'/wp-content/plugins/setmore-appointments/script/setmoreFancyBox.js');
	wp_enqueue_script('setmore');
}

function setmore_widget_init() {
	register_sidebar_widget(__('SetMore'), 'setmore_html');
}



/*===========================================
	Add HTML for the button
 ===========================================*/

function setmore_html() {
?>
	<p>
		<img border="none" src="http://my.setmore.com/images/bookappt/SetMore-book-button.png" alt="Book an appointment" onclick="javascript:setmorePopup('<?php echo get_option('setmore_booking_page_url'); ?>');"/>
	</p>

<?php
}



/*===========================================
	SetMore HTML page
 ===========================================*/

function setmore_html_page() { ?>
	<div>
		<h2>SetMore Appointments Options</h2>

		<form method="post" action="options.php">
			<?php wp_nonce_field('update-options'); ?>

			<table>
				<tr valign="top" align="left">
					<th width="190" scope="row">Your SetMore WordPress URL</th>

					<td width="480">				
						<input 
							type="text"  
							id="setmore_booking_page_url"
							name="setmore_booking_page_url" 
							style="width: 310px;"
							value="<?php echo get_option('setmore_booking_page_url'); ?>" />
					</td>
				</tr>
			</table>

			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="setmore_booking_page_url" />

			<p class="submit" style="padding-top: 0;"><input type="submit" id="submit" name="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
		</form>
		
		<br />
		
		<h3>Where can I find my Booking Page URL?</h3>

		<p>
			<a href="http://my.setmore.com" target="_blank">Sign into SetMore</a> and click the on the Settings tab.  You can use the default Booking Page URL or you can customize your URL.
		</p>
		
		<br />
		
		<h3>Don't have a SetMore account? No problem!</h3>

		<p>
			Signing up with SetMore is simple and you can even 
			<a href="http://www.setmore.com" target="_blank">get started with a completely free account</a>.			
		</p>
	</div>
<?php } ?>