<?php

if (!class_exists('insignia_Mega_menu')) {
	class insignia_Mega_menu {
		var $_options;

		public function __construct() {
			$this->_options = self::insignia_options();
			$this->insignia_add_filters();
		}
		
		public static function insignia_options() {
			return array(
				
				'_insignia_mega_menu_subtitle'	=> array(
						'type' => 'text',
						'label' => __('Subtitle', 'invictus'),
						'default' => '',
						'size' => 'wide',
						'depth' => '1',
						'class' => 'insignia-hide-only-depth-0',
					),
					
				'_insignia_mega_menu_image'	=> array(
						'type' => 'upload',
						'label' => __('Image', 'invictus'),
						'default' => '',
						'size' => 'wide',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0',
					),
				
				'_insignia_mega_menu_bg_position'	=> array(
						'type' => 'select',
						'label' => __( 'Background position', 'invictus' ),
						'default' => 0,
						'options' => array(
								'left top' => __('Left top', 'invictus'),
								'left center' => __('Left center', 'invictus'),
								'left bottom' => __('Left bottom', 'invictus'),
								'right top' => __('Right top', 'invictus'),
								'right center' => __('Right center', 'invictus'),
								'right bottom' => __('Right bottom', 'invictus'),
								'center top' => __('Center top', 'invictus'),
								'center center' => __('Center center', 'invictus'),
								'center bottom' => __('Center bottom', 'invictus')
							),
						'size' => 'thin',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0',
					),
				'_insignia_mega_menu_bg_repeat'	=> array(
						'type' => 'select',
						'label' => __( 'Background repeat', 'invictus' ),
						'default' => 'no-repeat',
						'options' => array(
								'no-repeat' =>__( 'No-repeat', 'invictus' ),
								'repeat' =>__( 'Repeat', 'invictus' ),
								'repeat-x' =>__( 'Repeat-x', 'invictus' ),
								'repeat-y' =>__( 'Repeat-y', 'invictus' ),
							),
						'size' => 'thin',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0',
					),
				'_insignia_mega_menu_enabled'	=> array(
						'type' => 'select',
						'label' => __( 'Enable mega menu', 'invictus' ),
						'default' => 0,
						'options' => array(1=>__( 'Yes', 'invictus' ), 0=>__( 'No', 'invictus' )),
						'size' => 'thin',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0 insignia-mega-menu',
					),
				'_insignia_full_width_menu_enabled'	=> array(
						'type' => 'select',
						'label' => __( 'Enable full-width menu', 'invictus' ),
						'default' => 0,
						'options' => array(1=>__( 'Yes', 'invictus' ), 0=>__( 'No', 'invictus' )),
						'size' => 'thin',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0',
					),
				'_insignia_mega_menu_limit_columns'	=> array(
						'type' => 'select',
						'label' => __( 'Limit Max columns number', 'invictus' ),
						'default' => 0,
						'options' => array(
							    2	=>	__( 'Two', 'invictus' ),
								3	=>	__( 'Three', 'invictus' ),
								4	=>	__( 'Four', 'invictus' ),
								5	=>	__( 'Five', 'invictus' ),
								6	=>	__( 'Six', 'invictus' ),
							),
						'size' => 'thin',
						'depth' => '0',
						'class' => 'insignia-show-only-depth-0 insignia-columns-limit',
					),
			);
		}

		private function insignia_add_filters() {
			# Add custom options to menu
			add_filter('wp_setup_nav_menu_item', array($this, 'insignia_add_custom_options'));

			# Update custom menu options
			add_action('wp_update_nav_menu_item', array($this, 'insignia_update_custom_options'), 10, 3);

			# Set edit menu walker
			add_filter('wp_edit_nav_menu_walker', array($this, 'insignia_apply_edit_walker_class'), 10, 2);
			
						add_action('admin_enqueue_scripts', array( $this, 'insignia_mega_menu_admin_scripts' ), 80);
		}
		
		
 
		function insignia_mega_menu_admin_scripts() {
			wp_enqueue_media();

			wp_register_script('insignia-menu-admin-js', get_template_directory_uri().'/functions/menu/js/image-upload.js');
			wp_enqueue_script('insignia-menu-admin-js');
		}
		

		/**
		 * Register custom options and load options values
		 * 
		 * @param obj $item Menu Item
		 * @return obj Menu Item
		 */
		public function insignia_add_custom_options($item) {

			foreach($this->_options as $option => $params) {
				$item->$option = get_post_meta($item->ID, $option, true);
				if ($item->$option===false) {
					$item->$option = $params['default'];
				}
			}

			return $item;
		}

		public function insignia_update_custom_options($menu_id, $menu_item_id, $args) {
			foreach($this->_options as $option => $params) {
				$key = 'menu-item-'. $option;
				
				$option_value = '';
				
				if (isset($_REQUEST[$key], $_REQUEST[$key][$menu_item_id])) {
					$option_value = $_REQUEST[$key][$menu_item_id];
				}
				
				update_post_meta($menu_item_id, $option, $option_value );
			}
		}

		public function insignia_apply_edit_walker_class( $walker, $menu_id ) {
			return INSIGNIA_EDIT_MENU_WALKER_CLASS;
		}
		
		public function insignia_add_menu_css() {
			$css = "
				.menu-item .insignia-show-only-depth-0 { display: none; }
				.menu-item.menu-item-depth-0 .insignia-show-only-depth-0 { display: block; }
				.menu-item .insignia-show-only-depth-1 { display: none; }
				.menu-item.menu-item-depth-1 .insignia-show-only-depth-1 { display: block; }
				.menu-item .insignia-hide-only-depth-0 { display: block; }
				.menu-item.menu-item-depth-0 .insignia-hide-only-depth-0 { display: none; }
			";
			wp_add_inline_style('wp-admin', $css);
		}
		
		public function insignia_add_menu_js() {
	
			$js =	'<script type="text/javascript">
						(function($) {
							"use strict";
							$(document).ready(function() {

								var menu_icon = $("input.edit-menu-item-_insignia_mega_menu_icon");

								if (0 == menu_icon.siblings("a").length && false == menu_icon.hasClass("iconname")) {
									menu_icon.addClass("iconname").after("<a href=\"#\" class=\"button crum-icon-add\">'.esc_html__('Add icon', 'invictus').'</a>");
								}

								$(".menu-item").each(function() {
									var	mega_menu = $(".insignia-mega-menu", $(this)).find("select"),
										columns_limit = $(".insignia-columns-limit");
									if(mega_menu.length > 0) {
										var showHideOption = function() {
											if(mega_menu.val() != "0")
												columns_limit.show();
											else
												columns_limit.hide();
										};

										showHideOption();

										mega_menu.on("change", showHideOption);
									}
								});
							});
						})(jQuery);
					</script>';
			
			echo esc_js($js);
		}
	}
}
