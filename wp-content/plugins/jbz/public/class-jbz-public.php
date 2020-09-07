<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://jbz-plugin.com/plugin
 * @since      1.0.0
 *
 * @package    Jbz
 * @subpackage Jbz/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Jbz
 * @subpackage Jbz/public
 * @author     JBZ <jbz@yahoo.com>
 */
class Jbz_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		//Short Code Genrate
		add_shortcode('jbz-plugin', array($this,'jbzPluginFunction'));

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jbz_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jbz_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/jbz-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap.css', plugins_url('jbz/public/css/bootstrap.css'), array(), $this->version, 'all' );
		 
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jbz_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jbz_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jbz-public.js', array( 'jquery' ), $this->version, false );
		wp_localize_script( $this->plugin_name, 'front_ajax_object',array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		wp_localize_script( $this->plugin_name, 'del_ajax_object',array( 'delurl' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_script( 'bootstrap.js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.js', array( 'jquery' ), $this->version, false );
		// wp_localize_script( 'bootstrap-js', 'data', array('ajax_url' => admin_url( 'admin-ajax.php' ), 'file_path' => plugin_dir_url( __FILE__ )));
        
	}
	//Short Code Function 
	function jbzPluginFunction(){
		$option = get_option('jbz_enable');
        if($option === 'on')
		require_once plugin_dir_path( __FILE__ ) . 'partials/front-end-form.php';
	}

}
