<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$file='';

define('INVICTUS_EXTENSIONS_PLUGIN_URL',plugin_dir_url($file) . 'invictus-vc-elements/');


class Invictus_Core {
	
	private static $_instance;
	

	public static function getInstance() {
		if ( ! ( self::$_instance instanceof self ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}
	
	
	public function __construct() {
		$theme = wp_get_theme()->get( 'Name' );
		if(substr_count($theme, 'Invictus') > 0) {
			add_action( 'after_setup_theme', array( $this, 'load_invictus_core_text_domain' ) );
			
			add_action('after_setup_theme', array($this, 'addVcCustomElements'));
			add_action('init', array($this, 'init'), 10);			
			
			
		} else {
			add_action('admin_notices', array($this, '_admin_notice__error'));
		}
	}
	
	
	
	public function init() {
		
		
		if ( class_exists( 'Vc_Manager' ) && class_exists( 'WPBakeryShortCode' ) ) {
			
			$this->vc_rella_templates();
		}
		
	}
	
	public function vc_rella_templates() {

		$invictus_templates = new Invictus_Vc_Templates_Panel_Editor();
		return $invictus_templates->init();

	}
	
	
	public function load_invictus_core_text_domain() {
		load_plugin_textdomain( 'invictus', false, INVICTUS_EXTENSIONS_PLUGIN_URL . '/languages' );
	}
	/*
	 * Add custom VC elements
	 */
	public function addVcCustomElements() {
		if ( class_exists( 'Vc_Manager' ) && class_exists( 'WPBakeryShortCode' ) ) {						
			add_action('admin_enqueue_scripts', 'invictus_vc_styles');
			add_action( 'admin_print_scripts-post.php', 'enqueue', 99 );
			add_action( 'admin_print_scripts-post-new.php', 'enqueue', 99 );
			function invictus_vc_styles() {
				// Template Import Css
				



wp_enqueue_style('invictus_vc', get_template_directory_uri() .'/functions/vc_uiblocks/vc-custom.css', array(), time(), 'all');
			}
			function enqueue() {
				wp_enqueue_script('invictus_vc_script', get_template_directory_uri() .'/functions/vc_uiblocks/vc-script.js', array('jquery'), '1.0.0', true  );
			}
			
		}
	}
}
$Invictus_Core = new Invictus_Core();