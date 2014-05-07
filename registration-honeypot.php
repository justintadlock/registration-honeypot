<?php
/**
 * Plugin Name: Registration Honeypot
 * Plugin URI:  http://themehybrid.com
 * Description: Stops most spambots from registering on sites that have open user registration. This plugin uses a simple honeypot method of stopping registrations by creating a hidden field that real people would not see but that auto-spammers would fill out (sticking their hand in the honeypot).
 * Version:     1.0.0-beta-1
 * Author:      Justin Tadlock
 * Author URI:  http://justintadlock.com
 */

/**
 * Sets up and initializes the Registration Honeypot plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
final class Registration_Honeypot {

	/**
	 * Holds the instances of this class.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    object
	 */
	private static $instance;

	/**
	 * Sets up needed actions/filters for the plugin to initialize.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function __construct() {

		add_action( 'login_head',          array( $this, 'print_styles'   )     );
		add_action( 'register_form',       array( $this, 'register_form'  ), 99 );
		add_action( 'register_post',       array( $this, 'check_honeypot' ), 0  );
		add_action( 'login_form_register', array( $this, 'check_honeypot' ), 0  );
	}

	/**
	 * Checks if a spambot stuck his hand in the honeypot.  If so, we'll cut off the user registration 
	 * process so that the spam user account never gets registered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function check_honeypot() {

		if ( isset( $_POST['th_rh_name'] ) && !empty( $_POST['th_rh_name'] ) )
			wp_die( __( 'You filled out a form field that was created to stop spammers. Please go back and try again or contact the site administrator if you feel this was in error.', 'registration-honeypot' ) );
	}

	/**
	 * Outputs custom CSS to the login head to hide the honeypot field on the user registration form.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function print_styles() { ?>
		<style type="text/css">.th_rh_name_field { display: none; }</style>
	<?php }

	/**
	 * Adds a hidden field that spambots will fill out but normal humans won't see.  In the off-chance 
	 * that a real human has CSS disabled on their browser, the label should let them know not to fill 
	 * out this form field.  This field will be checked to see if the visitor/spambot entered text into 
	 * it.  This will let us know that they're a spambot.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register_form() { ?>

		<p class="th_rh_name_field">
			<label for="th_rh_name"><?php _e( 'Only fill in if you are not human', 'registration-honeypot' ); ?></label><br />
			<input type="text" name="th_rh_name" id="th_rh_name" class="input" value="" size="25" /></label>
		</p>
	<?php }

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		if ( !self::$instance )
			self::$instance = new self;

		return self::$instance;
	}
}

Registration_Honeypot::get_instance();
