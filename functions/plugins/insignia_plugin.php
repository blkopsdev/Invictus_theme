<?php 

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'insignia_require_plugins' );

function insignia_require_plugins() {
 
    $plugins = array( 
                          array(
                                'name'               => esc_html__('Redux Framework', 'invictus'),
                                'slug'               => 'redux-framework',
                                'required'           => true,
                                'force_activation'   => false, 
                           ),
                       array(
                                'name'               => esc_html__('Revolution Slider', 'invictus'),
                                'slug'               => 'revslider',
                                'source'             => get_template_directory() . '/functions/plugins/install/revslider.zip',  
                                'required'           => true,
                                'version'            => '4.6.5',
                                'force_activation'   => false, 
                           ),
                          array(
                                'name'               => esc_html__('WPBakery Visual Composer', 'invictus'),
                                'slug'               => 'js_composer',
                                'source'             => get_template_directory() . '/functions/plugins/install/js_composer.zip',  
                                'required'           => true,
                                'force_activation'   => false, 
                           ),
                        

                          array(
                                 'name'               => esc_html__('One click demo importer', 'invictus'),
                                'slug'               => 'one-click-demo-import',
                                'source'             => get_template_directory() . '/functions/plugins/install/one-click-demo-import.zip',  
                                'required'           => true,
                                'version'            => '2.3.0',
                                'force_activation'   => false, 
                           ),
                          array(
                                'name'               => esc_html__('Contact Form 7', 'invictus'),
                                'slug'               => 'contact-form-7',
                                'required'           => true,
                                'force_activation'   => false, 
                           ),
                          array(
                                'name'               => esc_html__('Invictus MetaBox', 'invictus'),
                                'slug'               => 'invictus-meta-box',
                                'source'             => get_template_directory() . '/functions/plugins/install/invictus-meta-box.zip',  
                                'required'           => true,
                                'version'            => '1.0',
                                'force_activation'   => false, 
                           ) ,
                          array(
                                'name'               => esc_html__('Invictus Elements', 'invictus'),
                                'slug'               => 'invictus-vc-elements',
                                'source'             => get_template_directory() . '/functions/plugins/install/invictus-vc-elements.zip',  
                                'required'           => true,
                                'version'            => '1.0',
                                'force_activation'   => false, 
                           ) ,
						   array(
                                'name'               => esc_html__('Booked', 'invictus'),
                                'slug'               => 'booked',
                                'source'             => get_template_directory() . '/functions/plugins/install/booked.zip',  
                                'required'           => true,
                                'version'            => '2.0.5',
                                'force_activation'   => false, 
                           ) ,
                          array(
                                'name'               => esc_html__('Woocommerce', 'invictus'),
                                'slug'               => 'woocommerce',
                                'required'           => true,
                                'force_activation'   => false, 
                           ),
						  array(
                                'name'               => esc_html__('The Events Calendar', 'invictus'),
                                'slug'               => 'the-events-calendar',
                                'required'           => true,
                                'force_activation'   => false, 
                           )
	   
                 );
                $config = array(
                     'id'           => 'insignia-plugin',  
                       //'default_path' => esc_url('http://insignia-themes.website/premium_ensign_plugins/'),
                       'menu'         => 'tgmpa-install-plugins', 
                        'has_notices'  => true, 
                       'dismissable'  => false,
                       'dismiss_msg'  => '',
                       'is_automatic' => true, 
                       'message'      => '', 
                       'strings'      => array()
                 );
 
    tgmpa( $plugins, $config );
 
}