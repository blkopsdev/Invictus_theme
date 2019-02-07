<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "ins_opt";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'ins_opt/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists(  get_template_directory() . '/InsigniaThemeOptions/InsigniaCustomOptions/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( get_template_directory() . '/InsigniaThemeOptions/InsigniaCustomOptions/info-html.html');
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'invictus' ),
        'page_title'           => __( 'Theme Options', 'invictus' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,

        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'invictus' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'invictus' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'invictus' ),
    );



    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p></p>', 'invictus' ), $v );
    } else {
        $args['intro_text'] = __( '<p></p>', 'invictus' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p></p>', 'invictus' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'invictus' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'invictus' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'invictus' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'invictus' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'invictus' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

   

    // -> START Color Selection
    Redux::setSection( $opt_name, array(
        'title'      => __( 'General', 'invictus' ),
        'id'         => 'color-Color',
        'subsection' => false, 
        'fields'     => array(
            array(
                'id'       => 'ins-opt-pc',
                'type'     => 'color',
                'output'    => array(
                   'background-color' => '.pc-bg, .coach-button-holder .coach-button-inner, ul.inv-about-me-social-media-inner li a:hover, .about-me-title-separator-inner, .inv-services-process-bottom-line, .services-two-icon-box-inner .services-two-icon-box-title h5:before, .inv-title-separator, ul.inv-contact-two-social-media-inner li a:hover, .startup-title-separator, .layout-5-button-holder .layout-5-button:hover, .layout-1-pricing-plan-inner.layout-1-pricing-plan-featured.centered-box ul li:nth-child(odd), .layout-1-pricing-plan-featured .layout-1-pricing-plan-header, .layout-1-pricing-plan-inner.layout-1-pricing-plan-featured, .layout-4-button-holder .layout-4-button-bg, .layout-4-pricing-tabels-box-bg, .inv-pricing-three-wrapper-bg, .app-button-holder .app-button:hover, .layout-2-pricing-table-box:hover, .layout-2-pricing-table-bg, .layout-2-pricing-table-button,.inv-separator-line-inner, .woocommerce a.button.alt, .woocommerce-MyAccount-content .address a, .inv-team-six-job-holder:after, .pricing-border-button.pricing-bg-button, .pricing-pics-box.pricing-pics-bg-box,input[type="submit"], p.return-to-shop a.button.wc-backward,section#footer .widget h5.widget-title:after , .woocommerce-Message.woocommerce-Message--info.woocommerce-info a, input.woocommerce-Button.button, li.woocommerce-MyAccount-navigation-link.is-active, p.form-row input.button.login-btn, a.button.checkout.wc-forward:hover, p.form-row.form-row-last .button, .woocomerce-form .form-row input.button, button.checkout.wc-forward:hover, a.button.view_cart_btn.wc-forward, .woocommerce span.onsale, .about-call-to-action, .about-progress-bar .vc_bar, .apt-clients-details-box h2:after, .about-two-working-box h1:after, .apt-features-text-box h5:after, .service-btn>a:hover, .service-3-btn>a:hover, input.contactus-1-btn, input.contactus-2-btn, ul.c-2-social>li>a:hover, .ins-services-right .ins-services-text:after, .ins-choose-us-section .ins-choose-us-heading:after, .woocommerce button.button, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce #review_form #respond .form-submit input,.woocommerce div.product form.cart .button , .insignia-button, input.button.size-lg,a.checkout-button.button.icon_right.size-lg.alt.wc-forward, input#place_order, .form-row input.woocommerce-Button.button,.hc-button, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_solid_bg.active-filter-button, .banking-button-holder .banking-button-light:hover, .banking-button-holder .banking-button-small, .architect-button-holder .architect-button:hover, .inv-flip-content .inv-flip-title h4:after, .car-title-bdr-one, .car-title-bdr-two, .car-button-holder .car-button-small, .inv-blog-grid-3-category .inv-blog-grid-3-category-text, .separator-line-inner, .cns-border-button:before, .cns-title-main-wrapper .italic-font:after, .cns-button-container .cns-form-button, .ca-link-hover.inv-main-title:before, .startup-title-wrapper .startup-title-separator, .agency-title-wrapper .agency-title-separator, .inv-pricing-double-primary .inv-pricing-double-layer-lower, .da-service-box-wrapper.da-service-box-primary:hover, .da-counter-inner:hover, .event-time-table-list-item:hover .event-list-item-title, .fl-title-separator-inner, .fl-service-box-inner:hover, .fl-counter-box-inner:hover, .contact-info-main-box, .gym-button, .Gym-Contact-form-button, .fl-button-holder .fl-button, input.footer-one-submit-button, .Gym-Contact-form-button, .hotel-button-holder .hotel-button-small, .hotel-button-holder .hotel-button-medium, .app-button-holder .app-button:hover, .photography-button-holder .photography-button:hover, .photography-title-inner:before, .photography-title-inner:after, .restaurant-button-holder .restaurant-button-medium, .seo-title-separator, .seo-button-holder .seo-button, .seo-button-holder input[type=submit].seo-button:hover, .seo-icon-box-inner .seo-icon-box-title h5:before, .startup-button-holder .startup-button, .vp-contact-call-to-action .vp-styled-link:before, .hosting-main-title h3:after, .hosting-button-holder .hosting-button-secondary:hover, .domain-radio input[type=radio]:checked ~ .check::before, .coffee-left-box.coffee-icon-box h5:before, .coffee-title-wrapper h1:after, .wedding-title-wrapper h6:before, .wedding-title-wrapper h6:after, .wedding-contact-section-inner, a.inv-wedding-bottom-button, #tribe-bar-form .tribe-bar-submit input[type=submit], #tribe-bar-form .second-row #tribe-bar-views li.tribe-bar-views-option.tribe-bar-active a, #tribe-events .tribe-events-button, .tribe-events-button, .tribe-events-calendar th, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-], .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]>a, .roofing-title-wrapper .roofing-title-text:after, .Weapon-title-text:before, .Weapon-title-text:after, .scalize .item-point, .inv-border-button:hover, .lawyer-button-holder .lawyer-button-small, .lawyer-button-holder .lawyer-button-medium, .lawyer-button-holder .lawyer-button-large', 
                   'color'            => 'a, .pc,a.inv-about-us-bottom-button, .inv-faq-question-num, .services-two-icon-box-icon, .services-icon, p.inv-contact-three-col-section-btn:hover,p.inv-contact-three-col-section-btn:hover a, .inv-contact-three-col-section-wrapper h6, p.inv-contact-two-info-info, .inv-multi-address-icon, a.inv-fill-hover:hover, .layout-5-pricing-plan-price-inner .layout-5-pricing-plan-price, .layout-5-button-holder .layout-5-button, .dollar-icon ,.inv-pricing-plan-price, .app-button-holder .app-button, .layout-2-price-wrapper,.layout-2-pricing-table-box i, .woocommerce-message::before, .comment-form p.stars span a, .pricing-details-box h5,.footer-one-box ul li a:hover, .slick-dots li button:before, form.woocommerce-EditAccountForm.edit-account legend,#customer_login a.lost_password.woo-lost_password2,.lost_password a,.woocommerce-info a.showlogin,.woocommerce-info a.showcoupon,a.button.view_cart_btn.wc-forward:hover,.woocommerce a.remove, .ins_cart_content p.total, .ins_cart_content p.buttons a, span.sp-social-icon-bottom:hover, .ins-faq-num, .nav-tabs>li.active>a , .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .widget_recent_comments .recentcomments:before, .con-footer-icon>i, .con-footer-text>p, .lawyer-calltoaction-btn:hover, .sp-contact-btn a:hover, .woocommerce .widget_shopping_cart .total strong,.woocommerce.widget_shopping_cart .total strong,  ul.product-categories li a:hover, .woocommerce .star-rating span:before,span.before-after-handle:before,span.before-after-handle:after,.blog-top-box ul li a:hover,.reply.comment-reply-link.ins_comment_rpl a,.comment-form-message a,.comment-reply-title a, .post-nav-grid-wrapper .post-nav-grid-icon, .tags-single-post-icon-wrapper .tags-single-post-icon, .blog-widget-area aside ul li a:hover, .sidebar-shop-page aside ul li .product-title:hover, .sidebar-shop-page aside ul li a:hover, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_bordered.active-filter-button, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_simple.active-filter-button, .inv-port-body-field .inv-port-button-link:hover, .prev-post-wrap .post-nav__title._prev:hover, .next-post-wrap .post-nav__title._next:hover, blockquote:before, .inv-port-header-field, .inv-main-header-right ul li.sub-menu-full-width ul.menu-depth-1.sub-menu-full-width > li.has-submenu > a, .banking-button-holder .banking-button-light,  .car-list-content ul li:before, .cns-list-content>ul>li:before, ul.cns-contact-list li:before, .inv-blog-grid-6-button a, .inv-clients-text-wrapper .inv-clients-text-inner a:hover, .inv-content-blog-meta .inv-content-blog-byline, .gym-themes-color, .hotel-room-meta .hotel-room-starting, .hotel-room-meta .hotel-room-price, .kids-list-wrapper ul li:before, .lawyer-services-inner:hover .lawyer-services-numeric-text, .app-button-holder .app-button, .seo-list-content ul li:before, .startup-button-holder .startup-button:hover, .travel-services-link a:hover, .travel-services-link a:focus, .domain-radio input[type=radio]:checked ~ label, .inv-process-sub-title h6, a.inv-wedding-bottom-button:hover, .shop-one-banner-content .shop-one-button:hover, .shop-one-button-holder .shop-one-button-link:hover, .typed-cursor, .quote-text:before, .tribe-events-nav-previous a .arrow-left.event--main-arrow:before, .tribe-events-nav-next a .arrow-right.event--main-arrow:before, .roofing-servings-wrapper span.roofing-servings:hover',
                   'border-color'            => '.pc-border,a.inv-about-us-bottom-button, ul.inv-contact-two-social-media-inner li a:hover, .layout-5-button-holder .layout-5-button, .layout-4-button-holder .layout-4-button-bg, .app-button-holder .app-button:hover, .app-button-holder .app-button, .layout-2-pricing-table-box, .woocommerce-message, .pricing-border-button.pricing-bg-button,a.button.view_cart_btn.wc-forward:hover,  .border-line:before, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover, .ins-services-border, .wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok, input.hc-contact-btn.pc-bg:hover, .reply.comment-reply-link.ins_comment_rpl a, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_bordered.active-filter-button, .banking-serviceBox-inner:hover, .app-button-holder .app-button, .app-button-holder .app-button:hover, .photography-button-holder .photography-button, .photography-button-holder .photography-button:hover, .startup-button-holder .startup-button:hover, a.vp-button:before, .layout-6-pricing-inner:hover, .layout-6-pricing-tabels-box-bg .layout-6-pricing-inner, a.layout-6-button:before, .domain-radio input[type=radio]:checked ~ .check, a.inv-wedding-bottom-button, .scalize .item-point',
                 ),
                'title'    => __( 'Primary color', 'invictus' ),
                'subtitle' => __( 'Pick a Primary color for the theme.', 'invictus' ),
                'default'  => '#f7224a',
            ),
            array(
                'id'       => 'ins-opt-sc',
                'type'     => 'color',
                'output'    => array(
                   'background-color' => '.sc-bg,.woocommerce a.button.alt:hover, input.button.size-lg:hover, .woocommerce div.product form.cart .button:hover, p.form-row input.button.login-btn:hover,.woocommerce-Message.woocommerce-Message--info.woocommerce-info a:hover,.woocommerce-MyAccount-content .address a:hover,input.woocommerce-Button.button:hover,.woocomerce-form .form-row input.button:hover, p.form-row.form-row-last .button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce button.button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce a.button:hover, .woocommerce #review_form #respond .form-submit input:hover, a.checkout-button.button.icon_right.size-lg.alt.wc-forward:hover, input#place_order:hover,.form-row input.woocommerce-Button.button:hover, .hc-button:hover, nav.header-six.header-six-sticky-menu.fixed-menu,.header-six-sticky-menu.fixed-menu .header-six-right, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_solid_bg, button:hover, input[type=button]:hover, input[type=reset]:hover, input[type=submit]:hover, .insignia-button:hover, .banking-serviceBox-inner:before, .banking-serviceBox-inner:after, .banking-button-holder .banking-button-light, .banking-button-holder .banking-button-small:hover, .car-button-holder .car-button-small:hover, .inv-pricing-double-secondary .inv-pricing-double-layer-lower, .da-service-box-wrapper.da-service-box-secondary:hover, .startup-title-separator.startup-light-separator, .event-title-separator, .hospital-Contact-info-box:hover .hospital-Contact-info-icon-box i, .hospital-button-holder .hospital-button-medium:hover, .hospital-button-holder .hospital-button-small:hover, .lawyer-Contact-info-box:hover .lawyer-Contact-info-icon-box i, .restaurant-button-holder>a:after, .hosting-button-holder .hosting-button:hover, .layout-1-button:hover, #tribe-bar-form .tribe-bar-submit input[type=submit]:hover, .hotel-button-holder .hotel-button-medium:hover, .hotel-button-holder .hotel-button-small:hover, .Security-Service-top-box:hover .Security-Service-top-icon-box, span.security-story-number-text:after, .event-button-holder .event-button-bg, .event-button-holder .event-button-bg-small, .lawyer-button-holder .lawyer-button-medium:hover, .lawyer-button-holder .lawyer-button-small:hover, .lawyer-button-holder .lawyer-button-large:hover',
                   'color' => '.sc,.inv-app-button-inner .inv-app-button:hover, nav.woocommerce-MyAccount-navigation ul li a, td.product-name a, .widget_recent_comments .recentcomments a, .widget_categories a, .widget_archive ul li a, #calendar_wrap th, #wp-calendar #prev a:hover::after, #wp-calendar #next a:hover::after, .widget_recent_entries ul li a, .widget_meta ul li a, .widget_pages ul li a, .navigation li a, .navigation li a:hover, .navigation li.active a, .navigation li.disabled, ul.product_list_widget .product-title, ul.product-categories li a, inv-portfolio-filter-button-inner.inv-portfolio-filter-button_simple, .button-read-more-holder .button-read-more:hover, .inv-blog-grid-6-button a:hover, .fl-contact-social-box ul li .fl-social-icon:hover, .lawyer-right-icon-box:hover .lawyer-right-icon, .blog-widget-area ul li a, .events-list-main-nav li.tribe-events-nav-next a:before, .events-list-main-nav li.tribe-events-nav-next a:after, .roofing-servings-wrapper span.roofing-servings',
                   'border-color' => '.sc-border, .navigation li a:hover, .navigation li.active a,.comments-title,.comment-reply-title.header-six-sticky-menu.fixed-menu .header-six-right:before, .da-counter-inner:hover, .event-button-holder .event-button-bg, .event-button-holder .event-button-bg-small',
                   'border-bottom-color'  => '.button-read-more-holder .button-read-more:hover'
                 ),
                'title'    => __( 'Secondary color', 'invictus' ),
                'subtitle' => __( 'Pick a Secondary color for the theme.', 'invictus' ),
                'default'  => '#47354e',
            ),

                array(
                'id'       => 'ins-opt-body-background',
                'type'     => 'background',
                'output' => array('body, section#content'),
                'title'    => __( 'Body Background', 'invictus' ),
                'subtitle' => __( 'Pick Body background color.', 'invictus' ),
                'default'  => array(
                              'background-color' => '#fff',
                )
                    
                ),

        array(
                'id'       => 'insignia-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Main header Logo', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'invictus' ),
				 'default'  => array( 'url' => get_template_directory_uri().'/img/Invictus-Logo-1.png' ),
               
            ),

        array(
                'id'       => 'insignia-fixed-header-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Logo for fixed header', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'invictus' ),
				 'default'  => array( 'url' => get_template_directory_uri().'/img/Invictus-Logo-1.png' ),
               
            ),

        array(
                'id'       => 'insignia-mobile-header-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Logo for Mobile menu', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'invictus' ),
				 'default'  => array( 'url' => get_template_directory_uri().'/img/Invictus-Logo-1.png' ),
               
            ),

        array(
                'id'       => 'insignia-retina-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Retina Display: Main header Logo', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Uploaded Logo will be displayed in Retina Display. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger of Normal Logo.', 'invictus' ),
               
            ),
		
        array(
                'id'       => 'insignia-retina-fixed-header-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Retina Display: Logo for fixed header', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Uploaded Logo will be displayed in Retina Display. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger of Normal Logo.', 'invictus' ),
               
            ),

        array(
                'id'       => 'insignia-retina-mobile-header-logo',
                'type'     => 'media',
                'url'      => true,
		        'title'    => __( 'Retina Display: Logo for Mobile menu', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Uploaded Logo will be displayed in Retina Display. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger of Normal Logo. ', 'invictus' ),
               
            ),
	
		array(
                'id'       => 'insignia-favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Favicon', 'invictus' ),
                'compiler' => 'true',
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'invictus' ),
                'default'  => array( 'url' => get_template_directory_uri().'/img/invictus-favicon.png' ),
               
            ),
            array(
                'id'       => 'ins-opt-back-to-top',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Back to top button', 'invictus' ),
                'default'  => 'true',
            ),
        ),
    ) );




/*****        ***
*Site Preloader *
******        ***/


Redux::setSection( $opt_name, array(
        'title'      => __( 'Site Preloader', 'invictus' ),
        'id'         => 'site-preloader',
        'icon'         => 'el el-time',
        'fields'     => array(
array(
    'id'       => 'disable-preloader',
    'type'     => 'checkbox',
    'title'    => __('Disable Preloader', 'invictus'), 
    'default'  => '0'// 1 = on | 0 = off
),
            array(
                'id'       => 'ins-opt-preload-bg-clr',
             'required' => array('disable-preloader','equals','0'),
                'type'     => 'color',
		'url'      => true,
                'title'    => __( 'Background Color', 'invictus' ),
		'compiler' => 'true',
            ),array(
                'id'       => 'ins-opt-preload-img',
             'required' => array('disable-preloader','equals','0'),
                'type'     => 'media',
		'url'      => true,
                'title'    => __( 'Preloader image', 'invictus' ),
		'compiler' => 'true',

            )
        )
    ) );



/**
*
*Typography
*
**/


    // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'invictus' ),
        'id'     => 'typography',
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'ins-opt-typography-body',
                'type'     => 'typography',
                'title'    => __( 'text', 'invictus' ),
                'subtitle' => __( 'Specify the body font properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('p', 'font-family'=>'body'),
		'units'       =>'px',
		'letter-spacing' => true, 
                'default'  => array(
                    'color'       => '#767676',
                    'font-size'   => '14px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '500',
		    'letter-spacing' => '0.3px',
		'google'      => true,
		'line-height' => '30px'
                ),
            ),

            array(
                'id'          => 'ins-opt-typography-title',
                'type'        => 'typography',
                'title'       => __( 'Title Font-Family', 'invictus' ),
		'subtitle' => __( 'Specify the title font family', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( '.title-font'),
                'units'       => 'px',
		'text-transform' => false,
		'letter-spacing' => false,
		'font-style' => false,
		'font-size' => false,
		'line-height' => false,
		'text-transform' => false, 
		'text-align' => false, 
		'color' => false, 
		'color' => false, 
		'subsets' => false,
		'font-weight' => false,
		'font-backup' => false, 

                'default'     => array(
                    'font-family' => 'Montserrat'
                ),
            ),

            array(
                'id'          => 'ins-opt-typography-h1',
                'type'        => 'typography',
                'title'       => __( 'h1', 'invictus' ),
		'subtitle' => __( 'Specify the h1 tag title font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h1', '.inv-title-h1' ),
                'units'       => 'px',
		'text-transform' => true,
		'letter-spacing' => true, 
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '600',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '40px',
		    'letter-spacing' => '1px',
                    'line-height' => '50px'
                    
                ),
            ),
			array(
                'id'          => 'ins-opt-typography-h2',
                'type'        => 'typography',
                'title'       => __( 'h2', 'invictus' ),
		'subtitle' => __( 'Specify the h2 tag title font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
		'text-transform' => true,
                'output'      => array( 'h2', '.inv-title-h2' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '600',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '35px',
		    'letter-spacing' => '1px',
                    'line-height' => '45px'
                ),
            ),
		array(
                'id'          => 'ins-opt-typography-h3',
                'type'        => 'typography',
                'title'       => __( 'h3', 'invictus' ),
		'subtitle' => __( 'Specify the h3 tag title font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
		'text-transform' => true,
                'output'      => array( 'h3', '.inv-title-h3' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '500',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '30px',
		    'letter-spacing' => '0px',
                    'line-height' => '35px'
                ),
            ),
			array(
                'id'          => 'ins-opt-typography-h4',
                'type'        => 'typography',
                'title'       => __( 'h4', 'invictus' ),
		'subtitle' => __( 'Specify the h4 tag font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
		'text-transform' => true,
                'output'      => array( 'h4', '.inv-title-h4' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '400',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '25px',
		    'letter-spacing' => '0px',
                    'line-height' => '30px'
                ),
            ),
			array(
                'id'          => 'ins-opt-typography-h5',
                'type'        => 'typography',
                'title'       => __( 'h5', 'invictus' ),
		'subtitle' => __( 'Specify the h5 tag font properties.', 'invictus' ),
                'font-backup' => true,
		'text-transform' => true,
                'all_styles'  => true,
                'output'      => array( 'h5', '.inv-title-h5' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '700',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '20px',
		    'letter-spacing' => '0.8px',
                    'line-height' => '30px'
                ),
            ),
		array(
                'id'          => 'ins-opt-typography-h6',
                'type'        => 'typography',
                'title'       => __( 'h6', 'invictus' ),
		'subtitle' => __( 'Specify the h6 Tag font properties.', 'invictus' ),
                'font-backup' => true,
		'text-transform' => true,
                'all_styles'  => true,
                'output'      => array( 'h6', '.inv-title-h6' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '400',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '18px',
		    'letter-spacing' => '0.5px',
                    'line-height' => '30px'
                ),
            ),
		array(
                'id'          => 'ins-opt-typography-italic',
                'type'        => 'typography',
                'title'       => __( 'Italic font', 'invictus' ),
		'subtitle' => __( 'Specify the italic font properties.', 'invictus' ),
                'font-backup' => true,
		'text-transform' => true,
                'all_styles'  => true,
                'output'      => array( '.italic-font' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-family' => "Montserrat",
                    'google'      => true,
                    'font-style'  => 'italic',
                    'font-size'   => '18px',
		    'letter-spacing' => '0.5px',
                    'line-height' => '30px'
                ),
            ),
		array(
                'id'          => 'ins-opt-typography-light',
                'type'        => 'typography',
                'title'       => __( 'light font', 'invictus' ),
		'subtitle' => __( 'Specify the light font properties.', 'invictus' ),
                'font-backup' => true,
		'text-transform' => true,
                'all_styles'  => true,
                'output'      => array( '.light-font' ),
                'units'       => 'px',
		'letter-spacing' => true, 
                
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '200',
                    'font-family' => "Montserrat",
                    'google'      => true,
                    'font-size'   => '19px',
		    'letter-spacing' => '0.5px',
                    'line-height' => '26px'
                ),
            ),
        )
    ) );


/**
*
*Navigation
*
**/


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Navigation Menu', 'invictus' ),
        'id'         => 'page-header',
        'icon'       => 'el el-circle-arrow-up', 
        'fields'     => array(
array(
    'id'       => 'opt_content_position',
    'type'     => 'radio',
    'title'    => __('Select Content Position', 'invictus'),  
    'options'  => array(
        '1' => 'Below the navigation',
        '2' => 'From Top (this will make header position absolute) '
    ),
'default' => '1'
 ),


		array(
                'id'       => 'theme-header',
                'type'     => 'select',
                'title'    => __( 'Header Menu Layout', 'invictus' ),
                
                'options'  => array(
                    'standard'   => 'Standard Menu',
                    'hamburger' => 'Hamburger Menu',
                    'vertical' => 'vertical Menu',
                    'top-centered-logo' => 'Top Centered Logo Menu'
                ),
		'default' => 'standard'
            ),

            array(
                'id' => 'ins-opt-hb-logo-height',
                'type' => 'slider',
                'title' => __('Logo Height', 'invictus'),
                'required' => array('theme-header','equals','hamburger'),
                "default" => 50,
                "min" => 0,
                "step" => 1,
                "max" => 200,
                'display_value' => 'text'
            ),

            array(
                'id' => 'ins-opt-menu-height',
                'type' => 'slider',
                'title' => __('Main menu Height', 'invictus'),
                'required' => array('theme-header','equals','standard'),
                "default" => 80,
                "min" => 0,
                "step" => 1,
                "max" => 200,
                'display_value' => 'text'
            ),


            array(
                'id' => 'ins-opt-logo-wrapper-height',
                'type' => 'slider',
                'title' => __('Top Logo Wrapper Height', 'invictus'),
                'required' => array('theme-header','equals','top-centered-logo'),
                "default" => 60,
                "min" => 20,
                "step" => 1,
                "max" => 200,
                'display_value' => 'text'
            ),

            array(
                'id' => 'ins-opt-menu-wrapper-height',
                'type' => 'slider',
                'title' => __('Bottom Menu Wrapper Height', 'invictus'),
                'required' => array('theme-header','equals','top-centered-logo'),
                "default" => 60,
                "min" => 20,
                "step" => 1,
                "max" => 100,
                'display_value' => 'text'
            ),

		array(
		'id'       => 'opt_logo_position',
		'type'     => 'select',
		'title'    => __('Logo Position', 'invictus'),  
                'required' => array('theme-header','equals','standard'),
		'options'  => array(
		'1' => 'left',
		'2' => 'center'
		),
		'default' => '1'
 		),

		array(
		    'id'       => 'ins-opt-header-separator',
		    'type'     => 'button_set',
		    'title'    => __('Header Separator', 'invictus'),
		    'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
		    'subtitle'     => __('Choose a default header Separator i.e. Shadow below header', 'invictus'),
		    'options' => array(
		        'inv-header-wrap-box-shadow' => 'Box Shadow', 
		        'inv-header-wrap-border' => 'Border', 
 		       'inv-header-wrap-none' => 'None'
 		    ), 
		    'default' => 'inv-header-wrap-box-shadow'
		),

		array( 
			'id'       => 'ins-opt-header-separator-border',
			'type'     => 'border',
			'title'    => __('Header Border Bottom Option', 'invictus'),
			'output'   => array('.inv-header-wrap-border'),
			'required' => array('ins-opt-header-separator','equals','inv-header-wrap-border'),
			'left' => false,
			'right' => false,
			'top' => false,
			'bottom' => true,
			'default'  => array(
				'border-color'  => '#cccccc', 
				'border-style'  => 'solid',  
				'border-bottom' => '1px'
			)
		),

            array(
                'id'       => 'ins-opt-typography-menu',
                'type'     => 'typography',
                'title'    => __( 'Menu titles Typography', 'invictus' ),
                'subtitle' => __( 'Specify the Menu titles font properties.', 'invictus' ),
                'google'   => true,
		'output'      => array('.menu>li>a, .cd-nav .cd-primary-nav a, li.h5-btn a, .dl-menuwrapper li a, .dl-menuwrapper .dl-submenu  ul.menu-depth-2.sub-sub-menu li a'),
		'units'       =>'px',
		'letter-spacing' => true, 
		'text-transform' => true,
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
                'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '17px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '400',
                    'text-align'  => 'left',
		    'google'      => true,
		    'font-size'   => '15px', 
		    'line-height' => '25px',
		    'letter-spacing' => '1px',
		    'text-transform' => 'none'
                ),
            ),

            array(
                'id'       => 'ins-opt-typography-submenu',
                'type'     => 'typography',
                'title'    => __( 'Submenu Typography', 'invictus' ),
                'subtitle' => __( 'Specify the Menu dropdowns font properties.', 'invictus' ),
                'google'   => true,
		'output'      => array('ul.sub-menu li a, .sub-menu-full-width ul.menu-depth-2.sub-sub-menu li a'),
		'units'       =>'px',
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
		'letter-spacing' => true, 
		'text-transform' => true,
                'default'  => array(
                    'color'       => '#47354e',
                    'font-size'   => '16px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '500',
                    'text-align'  => 'left',
                    'google'      => true,
		    'font-size'   => '14px', 
		    'line-height' => '20px',
		    'letter-spacing' => '1px',
		    'text-transform' => 'none'
                ),
            ),

            array(
                'id'       => 'ins-opt-typography-hamburger',
                'type'     => 'typography',
                'title'    => __( 'Menu Typography', 'invictus' ),
                'subtitle' => __( 'Specify the Hamburger Menu font properties.', 'invictus' ),
                'google'   => true,
		'output'      => array('nav#ddfullscreenmenu ul li a, .sidenav-left-mobile-menu .dl-menuwrapper li a'),
		'units'       =>'px',

                'required' => array('theme-header','equals',array('hamburger','vertical' )),
		'letter-spacing' => true, 
		'text-transform' => true,
                'default'  => array(
                    'color'       => '#f5f5f5',
                    
                    'font-family' => 'Poppins',
                    'font-weight'  => '500',
		    'google'      => true,
		    'font-size'   => '17px', 
		    'line-height' => '30px',
		    'letter-spacing' => '3px',
		    'text-transform' => 'uppercase'
                ),
            ),
               array(
                'id'       => 'ins-opt-search-icon',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Search Icon Box', 'invictus' ),
                'default'  => '1',
                'desc' => __('Enable/Disable the search icon in the Header section.', 'invictus')
            ),
               array(
                'id'       => 'ins-opt-cart-icon',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Shopping Cart Icon', 'invictus' ),
                'default'  => '1',
                'desc' => __('Enable/Disable the WooCommerce icon in the Header section.', 'invictus')

            ),

            array(
                'id'       => 'ins-opt-topbar-switcher',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('theme-header','equals','standard'),
                'title'    => __( 'Topbar', 'invictus' ),
                'default'  => 'false',
            ),
            array(
                'id' => 'ins-opt-topbar-height',
                'type' => 'slider',
                'title' => __('Topbar Height', 'invictus'),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                "default" => 40,
                "min" => 30,
                "step" => 1,
                "max" => 100,
                'display_value' => 'text'
            ),
                array(
                'id'       => 'ins-opt-topbar-bg',
                'type'     => 'color_rgba',
                'output' => array('background-color' => '.inv-main-header-topbar.top-header'),
                'title'    => __( 'Topbar Background color', 'invictus' ),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'   => array(
                         'color'     => '#fff',
                          'alpha'     => 1
                    ),
                ),

                array(
                'id'       => 'ins-opt-topbar-border',
                'type'     => 'color_rgba',
                'output' => array('border-color' => '.inv-main-header-topbar.top-header, .header-top-module, .header-top-module .header-top-social-icon li'),
                'title'    => __( 'Topbar Border color', 'invictus' ),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'   => array(
                         'color'     => '#fff',
                          'alpha'     => 1
                    ),
                ),
            array(
                'id'       => 'ins-opt-topbar-phone',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'title'    => __( 'Phone No.', 'invictus' ),
                'default'  => 'true',
            ),
			array(
                'id'       => 'ins-opt-phone',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Phone No.', 'invictus' ),
                'required' => array('ins-opt-topbar-phone','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),


            array(
                'id'       => 'ins-opt-topbar-email',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'title'    => __( 'Email', 'invictus' ),
                'default'  => 'true',
            ),
			array(
                'id'       => 'ins-opt-email',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Email', 'invictus' ),
                'required' => array('ins-opt-topbar-email','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),

            array(
                'id'       => 'ins-opt-topbar-address',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'title'    => __( 'Address', 'invictus' ),
                'default'  => 'true',
            ),
			array(
                'id'       => 'ins-opt-address',
                'type'     => 'editor',
                'url'      => true,		
                'title'    => __( 'Address', 'invictus' ),
                'required' => array('ins-opt-topbar-address','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),

            array(
                'id'       => 'ins-opt-topbar-hours',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'title'    => __( 'Opening hours', 'invictus' ),
                'default'  => 'true',
            ),
			array(
                'id'       => 'ins-opt-hours',
                'type'     => 'editor',
                'url'      => true,		
                'title'    => __( 'Opening Hours', 'invictus' ),
                'required' => array('ins-opt-topbar-hours','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),

            array(
                'id'       => 'ins-opt-topbar-button',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'title'    => __( 'Button', 'invictus' ),
                'default'  => 'true',
            ),
			array(
                'id'       => 'ins-opt-button-text',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Button Text', 'invictus' ),
                'required' => array('ins-opt-topbar-button','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),
			array(
                'id'       => 'ins-opt-button-link',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Button Link', 'invictus' ),
                'required' => array('ins-opt-topbar-button','equals','1'),
                'compiler' => 'true',
                'default'  => ''
            ),
                array(
                'id'       => 'ins-opt-button-bg',
                'type'     => 'color_rgba',
                'output' => array('background-color' => '.header-top-module.header-top-button-module .header-top-button'),
                'title'    => __( 'Button background color', 'invictus' ),
                'required' => array('ins-opt-topbar-button','equals','1'),
                'default'   => array(
                         'color'     => '#000',
                          'alpha'     => 1
                    ),
                ),

                array(
                'id'       => 'ins-opt-button-text-color',
                'type'     => 'color_rgba',
                'output' => array('color' => '.header-top-module.header-top-button-module .header-top-button'),
                'title'    => __( 'Button text color', 'invictus' ),
                'required' => array('ins-opt-topbar-button','equals','1'),
                'default'   => array(
                         'color'     => '#fff',
                          'alpha'     => 1
                    ),
                ),

			array(
                'id'       => 'ins-opt-facebook',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Facebook', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#'             
            ),

			array(
                'id'       => 'ins-opt-twitter',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Twitter', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#'             
            ),
			array(
                'id'       => 'ins-opt-instagram',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Instagram', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#'
                
            ),
			array(
                'id'       => 'ins-opt-g-plus',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Google plus', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => ''
            ),
			array(
                'id'       => 'ins-opt-pinterest',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Pinterest', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => ''
            ),
			array(
                'id'       => 'ins-opt-linkedin',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'LinkedIn', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => ''
            ),
			array(
                'id'       => 'ins-opt-skype',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Skype', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => ''
            ),
			array(
                'id'       => 'ins-opt-youtube',
                'type'     => 'text',
                'url'      => true,		
                'title'    => __( 'Youtube', 'invictus' ),
                'compiler' => 'true',
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => ''
            ),



                array(
                'id'       => 'ins-opt-topbar-font-color',
                'type'     => 'color',
                'output' => array('.header-top-info-data>h6'),
                'title'    => __( 'Topbar Font color', 'invictus' ),
                'subtitle' => __( 'Pick a Header Topbar Font color', 'invictus' ),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#fff',
                ),

                array(
                'id'       => 'ins-opt-topbar-icon-color',
                'type'     => 'color',
                'output' => array('.header-top-info-data .header-top-info-icon'),
                'title'    => __( 'Topbar icon color', 'invictus' ),
                'subtitle' => __( 'Pick a Header Topbar icon color', 'invictus' ),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#fff',
                ),

                array(
                'id'       => 'ins-opt-topbar-social-icon-color',
                'type'     => 'color',
                'output' => array('.header-top-module .header-top-social-icon>li>a>i'),
                'title'    => __( 'Topbar social Media icon color', 'invictus' ),
                'subtitle' => __( 'Pick a Header Topbar social Media icon color', 'invictus' ),
                'required' => array('ins-opt-topbar-switcher','equals','1'),
                'default'  => '#fff',
                ),

                array(
                'id'       => 'ins-opt-fullscreen-icon-color',
                'type'     => 'color',
                'required' => array('theme-header','equals',array('hamburger','vertical')),
                'output' => array('background-color' => 'div#navtoggler::before, #nav-icon2 span', 'border-color' => 'div#navtoggler'),
                'title'    => __( 'full screen menu icon color', 'invictus' ),
                'subtitle' => __( 'Pick a Menu icon color.', 'invictus' ),
                'default'   => '#fff',
                    
                ),

                array(
                'id'       => 'ins-opt-fullscreen-menu-bg-color',
                'type'     => 'background',
                'required' => array('theme-header','equals',array('hamburger','vertical')),
                'output' => array('nav#ddfullscreenmenu, .sidenav'),
                'title'    => __( 'Menu Background', 'invictus' ),
                'subtitle' => __( 'Pick full screen Menu background color.', 'invictus' ),
                'default'   => '#f7224a',
                    
                ),


                array(
                'id'       => 'ins-opt-menu-bg',
                'type'     => 'color_rgba',
                'output' => array('background-color' => '.bottom-header, .overlay-top, .overlay-left, .cd-nav, .header-four-main-wrapper', 'color' => '.header_nine_socials a:hover i'),
                'title'    => __( 'Main menu background color', 'invictus' ),
                'subtitle' => __( 'Pick a Menu background color.', 'invictus' ),
                'default'   => array(
                         'color'     => '#f7224a',
                          'alpha'     => 1
                    ),
                ),

                array(
                'id'       => 'ins-opt-submenu-bg',
                'type'     => 'color_rgba',
                'output' => array(
                    'background-color' => '.header-top-menu-right .menu>li ul.sub-menu, .header-top-menu-right .menu>li ul.sub-menu .sub-sub-menu'),
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
                'title'    => __( 'Menu dropdown background color', 'invictus' ),
                'subtitle' => __( 'Pick a Menu dropdown background color.', 'invictus' ),
                'default'   => array(
                         'color'     => '#fff',
                          'alpha'     => 1
                    ),
                ),

                array(
                'id'       => 'ins-opt-menu-hover',
                'type'     => 'color',
                'output' => array(
                    'color'            => '.menu-aaa-container .menu>li:hover >a, .menu>li>a:hover, .fixed-menu .inv-header-wrap .inv-header-inner .menu>li>a:hover, ul.inv-main-header-social li a:hover i, .menu>li>a.mPS2id-highlight, .fixed-menu .inv-header-wrap .inv-header-inner .menu>li>a.mPS2id-highlight, .menu>li.nav-item.active>a, .fixed-menu .inv-header-wrap .inv-header-inner .menu>li.nav-item.active>a', 
                    'border-color' => '.no-touch .cd-nav .cd-primary-nav a:hover, .cd-nav .cd-contact-info a:hover'
                ),
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
                'title'    => __( 'Menu Titles hover color', 'invictus' ),
                'subtitle' => __( 'Pick a Menu titles hover color.', 'invictus' ),
                'default'  => '#e0e0e0',
                ),

                array(
                'id'       => 'ins-opt-submenu-hover',
                'type'     => 'color',
                'output'   => array( 'background-color' => 'ul.sub-menu>li>a:hover, .sub-menu ul.menu-depth-2.sub-sub-menu li a:hover' ),
                'title'    => __( 'Menu dropdown hover Background-color', 'invictus' ),
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
                'subtitle' => __( 'Pick a Menu dropdown hover Background-color.', 'invictus' ),
                'default'  => '#efefef',
                ),


            array(
                'id'       => 'ins-opt-sticky-switcher',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'required' => array('theme-header','equals',array( 'standard','top-centered-logo' )),
                'title'    => __( 'Sticky Menu', 'invictus' ),
                'default'  => 'false',
            ),

                array(
                'id'       => 'ins-opt-sticky-menu-bg',
                'type'     => 'color_rgba',
                'output' => array('background-color' => '.fixed-menu .inv-header-wrap'),
                'title'    => __( 'Sticky menu background color', 'invictus' ),
                'subtitle' => __( 'Pick a Sticky Menu background color.', 'invictus' ),
                'required' => array('ins-opt-sticky-switcher','equals','1'),
                'default'   => array(
                         'color'     => '#fff',
                          'alpha'     => 1
                    ),
                ),

                array(
                'id'       => 'ins-opt-sticky-menu-title',
                'type'     => 'color',
                'output' => array('color' => '.fixed-menu .inv-header-wrap .inv-header-inner .menu>li>a'),
                'title'    => __( 'Sticky Menu titles color', 'invictus' ),
                'subtitle' => __( 'Pick a Sticky Menu titles color.', 'invictus' ),
                'required' => array('ins-opt-sticky-switcher','equals','1'),
                'default'  => '#000000',
                ),


   ) 
   ));



/**
*
*Mobile menu
*
**/
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Mobile Menu options', 'invictus' ),
        'id'         => 'mobile-menu-options',
        'icon'             => 'el el-lines',
        'fields'     => array(	
            array(
                'id'       => 'mobile-menu-main-background',
                'type'     => 'color',
                'output' => array('background-color' => '.demo-1 .dl-menuwrapper button'), 
                'title'    => __( 'Icon Background Color', 'invictus' ),
                'default'  => '#47354e',
            ),
            array(
                'id'       => 'mobile-menu-secondary-background',
                'type'     => 'color',
                'output' => array('background-color' => '.dl-menuwrapper ul, .dl-menuwrapper ul .sub-sub-menu'), 
                'title'    => __( 'Menu Background Color', 'invictus' ),
                'default'  => '#47354e',
            ),
           array(
                'id'       => 'mobile-menu-font-color',
                'type'     => 'color',
                'output' => array('color' => '.dl-menuwrapper li a, .dl-menuwrapper li.dl-back:after, .dl-menuwrapper li > a:not(:only-child):after, .no-touch .dl-menuwrapper li a:hover'), 
                'title'    => __( 'Menu Font Color', 'invictus' ),
                'default'  => '#fff',
            ),
            array(
                'id'       => 'menu-breakpoint',
                'type'     => 'slider',
                'default'   => 1000,
                'min'       => 500,
                'step'      => 1,
                'max'       => 1300,
                'title'    => __( 'Menu Breakpoint', 'invictus' ),
            ),
        )
    ) );
/**
*
* Banner options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Page Banner Options', 'invictus' ),
        'id'         => 'homepage-header',
        'icon'       => 'el el-picture',
        'fields'     => array(

		array(
                'id'       => 'ins-opt-header-image',
                'type'     => 'media',
                'url'      => true,
	        'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                'compiler' => 'true'
                
            ),
		array(
                'id'       => 'ins-opt-header-bg-position',
                'type'     => 'select',
                'title'    => __( 'Background position', 'invictus' ),
                
                'options'  => array(
                    'left top'  => 'left top',
                    'left center'  => 'left center',
                    'left bottom'    => 'left bottom',
                    'right top'    => 'right top',
                    'right center'    => 'right center',
                    'right bottom'    => 'right bottom',
                    'center top'    => 'center top',
                    'center center'    => 'center center',
                    'center bottom'    => 'center bottom'
                ),
                'default' => 'center center'
            ),
		array(
                'id'       => 'ins-opt-header-bg-size',
                'type'     => 'select',
                'title'    => __( 'Background size', 'invictus' ),
                
                'options'  => array(
                    'initial'  => 'Initial',
                    'inherit'  => 'Inherit',
                    'contain'    => 'Contain',
                    'cover'    => 'Cover'
                ),
                'default' => 'cover'
            ),
		array(
                'id'       => 'ins-opt-header-opacity',
                'type'     => 'text',
		'title'    => __( 'Image Opacity', 'invictus' ),
                'compiler' => 'true',
                'default' => '1'
            ),
            array(
                'id'       => 'ins-opt-header-clr',
                'type'     => 'color',
                'title'    => __( 'Background color', 'invictus' ),
                'subtitle' => __( 'Select color for header background', 'invictus' ),
                'default'  => '#969696',
            ),
		array(
                'id'       => 'ins-opt-breadcrumbs',
                'type'     => 'select',
                'title'    => __( 'Enable breadcrumbs', 'invictus' ),
                
                'options'  => array(
                    '1'  => 'On',
                    '2'  => 'Off'
                ),
                'default'  => '1',
            ),
		array(
                'id'       => 'ins-opt-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '300px'
            ),
            array(
                'id'       => 'ins-opt-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('h3.subpage-title'),
		'letter-spacing' => true, 
		'text-transform' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f5f5f5',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),
   ) 
   ));




/**
*
*Blog layout options
*
**/


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Blog Options', 'invictus' ),
        'id'         => 'blog',
        'icon'       => 'el el-list-alt', 
        'fields'     => array(
		array(
                'id'       => 'blog-layout',
                'type'     => 'select',
                'title'    => __( 'Single Blog Layout', 'invictus' ),
                
                'options'  => array(
                    '1'  => 'Full Width',
                    '2'  => 'Sidebar-left',
                    '3'  => 'Sidebar-right',
                ),
		'default' => '1' 
            ),

            array(
                'id'       => 'ins-opt-post-share',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Social media sharing', 'invictus' ),
                'default'  => '1',
            ),

		array(
			'id'             => 'blog-archive-spacing',
			'type'           => 'spacing',
			'output'         => array('.blog-main-archive'),
			'mode'           => 'padding',
			'units'          => 'px',
			'left'			 => 'false',	
			'right'			 => 'false',	
			'units_extended' => 'false',
			'title'          => __('Archive page spacing Option', 'invictus'),
			'subtitle'       => __('Values are in px', 'invictus'),
			'default'            => array(
				'padding-top'     => '80px', 
				'padding-bottom'  => '20px', 
				'units'          => 'px', 
			)
		),

		array(
			'id'   => 'info_archive_blog_single',
			'type' => 'info',
			'desc' => __('Archive Blog Banner Options', 'invictus')
		),

            array(
                'id'       => 'ins-opt-archive-banner',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Blog Header Banner', 'invictus' ),
                'default'  => '1',
            ),

		array(
		'id'       => 'ins-opt-archive-blog-header-image',
		'type'     => 'background',
		'output' => array('.archive-blog-header'),
		'required' => array('ins-opt-archive-banner','equals','1'),
		'title'    => __( 'Background image', 'invictus' ),
		'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
		'default'  => array(
					'background-color' => '#4c4a4a',
				)
		),

		array(
                'id'       => 'ins-opt-archive-blog-breadcrumbs',
                'type'     => 'select',
                'title'    => __( 'Enable breadcrumbs', 'invictus' ),
		'required' => array('ins-opt-archive-banner','equals','1'),
                'options'  => array(
                    '1'  => 'On',
                    '2'  => 'Off'
                ),
                'default'  => '1',
            ),
		array(
                'id'       => 'ins-opt-archive-blog-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
		'required' => array('ins-opt-archive-banner','equals','1'),
                'compiler' => 'true',
                'default' => '350px'
            ),
            array(
                'id'       => 'ins-opt-archive-blog-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
		'required' => array('ins-opt-archive-banner','equals','1'),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('.archive-blog-title'),
		'units'       =>'px',
		'letter-spacing' => true,
                'default'  => array(
                    'color'       => '#f5f5f5',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		    'line-height' => '50px',
		    'text-transform' => 'uppercase',
		    'text-align' => 'center'
                ),
            ),

)
));

/**
*
*end Blog Layout
*
**/ 




/**
*
* Team options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Team Options', 'invictus' ),
        'id'         => 'team--header',
        'icon'       => 'el el-picture',
        'fields'     => array(

		array(
			'id'   => 'info_team_element',
			'type' => 'info',
			'desc' => __('Team Element Options', 'invictus')
		),

            array(
                'id'          => 'ins-opt-team-member-name',
                'type'        => 'typography',
                'title'       => __( 'Team Member Name', 'invictus' ),
		'subtitle' => __( 'Specify the team member name font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( '.inv-team-member-name' ),
                'units'       => 'px',
		'text-transform' => true,
		'letter-spacing' => true, 
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '500',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '18px',
		    'letter-spacing' => '1px',
                    'line-height' => '25px'
                    
                ),
            ),

            array(
                'id'          => 'ins-opt-team-member-position',
                'type'        => 'typography',
                'title'       => __( 'Team Member Position', 'invictus' ),
		'subtitle' => __( 'Specify the team member position font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( '.inv-team-member-position' ),
                'units'       => 'px',
		'text-transform' => true,
		'letter-spacing' => true, 
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '400',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '15px',
		    'letter-spacing' => '1px',
                    'line-height' => '25px'
                    
                ),
            ),

            array(
                'id'          => 'ins-opt-team-member-phone',
                'type'        => 'typography',
                'title'       => __( 'Team Member Phone', 'invictus' ),
		'subtitle' => __( 'Specify the team member phone font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( '.inv-team-member-phone' ),
                'units'       => 'px',
		'text-transform' => true,
		'letter-spacing' => true, 
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '500',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '15px',
		    'letter-spacing' => '1px',
                    'line-height' => '25px'
                    
                ),
            ),

            array(
                'id'          => 'ins-opt-team-member-email',
                'type'        => 'typography',
                'title'       => __( 'Team Member Email', 'invictus' ),
		'subtitle' => __( 'Specify the team member email font properties.', 'invictus' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( '.inv-team-member-email' ),
                'units'       => 'px',
		'text-transform' => true,
		'letter-spacing' => true, 
                'default'     => array(
                    'color'       => '#343434',
                    'font-weight'  => '500',
                    'font-family' => 'Montserrat',
                    'google'      => true,
                    'font-size'   => '15px',
		    'letter-spacing' => '1px',
                    'line-height' => '25px'
                    
                ),
            ),

                array(
                'id'       => 'ins-opt-team-member-icon',
                'type'     => 'color',
                'output' => array('color' => '.inv-team-member-meta-icon'),
                'title'    => __( 'Team Member icon color', 'invictus' ),
                'subtitle' => __( 'Specify the team member icon color for email and phone icon.', 'invictus' ),
                'default'  => '#000',
                ),

                array(
                'id'       => 'ins-opt-team-member-social-icon',
                'type'     => 'color',
                'output' => array('color' => '.inv-team-member-social-icon'),
                'title'    => __( 'Team Member social media icon color', 'invictus' ),
                'subtitle' => __( 'Specify the team member social media icon color.', 'invictus' ),
                'default'  => '#000',
                ),

                array(
                'id'       => 'ins-opt-team-member-bg',
                'type'     => 'color_rgba',
                'output' => array('background-color' => '.inv-team-member-section-bg'),
                'title'    => __( 'Team member section Background color', 'invictus' ),
                'subtitle' => __( 'Specify the team member background color.', 'invictus' ),
                'default'   => array(
                         'color'     => '#f5f5f5',
                          'alpha'     => 1
                    ),
                ),
   ) 
   ));


/**
*
* Event options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Event Options', 'invictus' ),
        'id'         => 'event_header',
        'icon'       => 'el el-picture',
        'fields'     => array(

		array(
			'id'   => 'info_single_event',
			'type' => 'info',
			'desc' => __('Single event Banner Options', 'invictus')
		),

		array(
                'id'       => 'ins-opt-single-event-image',
                'type'     => 'background',
                'output' => array('.single-event-header'),
	        'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                 'default'  => array(
                              'background-color' => '#4c4a4a',
                )
                
            ),
		array(
                'id'       => 'ins-opt-single-event-breadcrumbs',
                'type'     => 'select',
                'title'    => __( 'Enable breadcrumbs', 'invictus' ),
                
                'options'  => array(
                    '1'  => 'On',
                    '2'  => 'Off'
                ),
                'default'  => '1',
            ),
		array(
                'id'       => 'ins-opt-single-event-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '350px'
            ),
            array(
                'id'       => 'ins-opt-single-event-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('h3.single-event-title'),
		'letter-spacing' => true, 
		'text-transform' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '600',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),

		array(
			'id'   => 'info_archive_event',
			'type' => 'info',
			'desc' => __('Archive event Banner Options', 'invictus')
		),

		array(
                'id'       => 'ins-opt-archive-event-image',
                'type'     => 'background',
                'output' => array('.archive-event-header'),
	        'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                 'default'  => array(
                              'background-color' => '#4c4a4a',
                )
                
            ),
		array(
                'id'       => 'ins-opt-archive-event-breadcrumbs',
                'type'     => 'select',
                'title'    => __( 'Enable breadcrumbs', 'invictus' ),
                
                'options'  => array(
                    '1'  => 'On',
                    '2'  => 'Off'
                ),
                'default'  => '1',
            ),
		array(
                'id'       => 'ins-opt-archive-event-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '300px'
            ),
            array(
                'id'       => 'ins-opt-archive-event-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('h3.archive-event-title'),
		'letter-spacing' => true, 
		'text-transform' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '600',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),
   ) 
   ));




/**
*
*Woo-commerce options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'WooCommerce', 'invictus' ),
        'id'         => 'woo-options',
        'icon'       => 'el el-shopping-cart',
        'fields'     => array(

                  array(
                'id'       => 'ins-opt-product-title-typography',
                'type'     => 'typography',
                'title'    => __( 'Product title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Product title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('.product_title,.woocommerce ul.products li.product h3'),
		'letter-spacing' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f7224a',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '600',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'left'
                ),
             
                
                 ),


                array(
                'id'       => 'ins-opt-shop-widget',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Shop-widget', 'invictus' ),
                'options'  => array(
                    '1'  => 'On',
                    '2'  => 'Off'
                ),
                'default'  => '1',
            ),

		array(
			'id'   => 'info_woo_shop_info',
			'type' => 'info',
			'desc' => __('Shop Page Banner Options', 'invictus')
		),
		array(
                'id'       => 'ins-opt-woo-shop-header-image',
                'type'     => 'background',
                'output' => array('.shop-page-archive-header'),
	        'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                 'default'  => array(
                              'background-color' => '#969696',
                )
                
            ),

		array(
                'id'       => 'ins-opt-woo-shop-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '350px'
            ),
            array(
                'id'       => 'ins-opt-woo-shop-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('.product-archive-banner .product-archive-title'),
		'letter-spacing' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f5f5f5',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),
		array(
			'id'   => 'info_woo_single_product',
			'type' => 'info',
			'desc' => __('Single Product Page Banner Options', 'invictus')
		),
		array(
                'id'       => 'ins-opt-woo-header-image',
                'type'     => 'background',
                'output' => array('.shop-page-header'),
	        'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                'default'  => array(
                              'background-color' => '#969696',
                )
                
            ),

		array(
                'id'       => 'ins-opt-woo-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '180px'
            ),
            array(
                'id'       => 'ins-opt-woo-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('.inv-product-breadcrumb .woocommerce-breadcrumb a, .inv-product-breadcrumb .woocommerce-breadcrumb'),
		'letter-spacing' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#dcd7d7',
                    'font-size'   => '30px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '600',
		    'google'      => true,
		    'line-height' => '40px',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),

   ) 
   ));


/**
*
*Portfolio options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Portfolio', 'invictus' ),
        'id'         => 'portfolio-options',
        'icon'         => 'el el-folder-open',
        'fields'     => array(

            array(
                'id'       => 'ins-opt-port-share',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Social media sharing', 'invictus' ),
                'default'  => '1',
            ),

           array(
                'id'       => 'ins-opt-archive-port-post-per-page',
                'type'     => 'text',
		'title'    => __( 'Archive Portfolio post per Page', 'invictus' ),
                'validate' => 'numeric',
                'default' => '20'
            ),

		array(
			'id'   => 'info_archive_portfolio',
			'type' => 'info',
			'desc' => __('Archive Portfolio Page Banner Options', 'invictus')
		),
		array(
                'id'       => 'ins-opt-archive-port-header-image',
                'type'     => 'background',
                'output' => array('.archive-port-header'),
		'title'    => __( 'Background image', 'invictus' ),
                'subtitle' => __( 'Select image pattern for page header background', 'invictus' ),
                'default'  => array(
                              'background-color' => '#4c4a4a',
                )
                
            ),
	
		array(
                'id'       => 'ins-opt-archive-port-header-height',
                'type'     => 'text',
		'title'    => __( 'Page header height', 'invictus' ),
                'compiler' => 'true',
                'default' => '350px'
            ),
            array(
                'id'       => 'ins-opt-archive-port-header-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'letter-spacing' => true,
		'text-transform' => true,
		'output'      => array('.archive-port-title'),
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f7224a',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		    'line-height' => '50px',
		    'text-transform' => 'uppercase',
		    'letter-spacing' => '1px',
		    'text-align' => 'center'
                ),
            ),

   ) 
   ));

/**
*
*footer-copyright
*
**/


    // -> START Editors

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer section options', 'invictus' ),
        'id'         => 'footer-editor',
        //'subsection' => true,
        'icon'             => 'el el-circle-arrow-down',
        'fields'     => array(

	array(
           'id'       => 'footer-variant',
           'type'     => 'select',
           'title'    => __( 'Footer variants', 'invictus' ),
           'options'  => array(
           '1'        => 'Standard footer with widgets inside',
           '2'        => 'Standard footer with Visual Composer modules inside',
           '3'        => 'Disable Footer',
                ),
		'default' => '1'
            ),

          array(
             'id'       => 'ins-opt-footer-page',
             'type'     => 'select',
             'multi'    => false,
             'required' => array('footer-variant','equals','2'),
             'data'     => 'posts',
             'args'     => array( 'post_type' =>  array( 'page' ), 'numberposts' => -1 ),
             'title'    => __( 'Footer Section Page', 'invictus'),
             'subtitle' => __( 'Selected page will be displayed as footer', 'invictus'),
            ),

            array(
                'id'       => 'ins-opt-widget-title-typography',
                'type'     => 'typography',
                'title'    => __( 'Footer Widget title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Widget title properties.', 'invictus' ),
                'required' => array('footer-variant','equals','1'),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('#footer .widget-title'),
		'letter-spacing' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f7224a',
                    'font-size'   => '20px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		    'line-height' => '50px',
		    'letter-spacing' => '1px',
		    'text-align' => 'left'
                ),
            ),
 
            array(
                'id'       => 'footer-widget-text-color',
                'type'     => 'color',
                'required' => array('footer-variant','equals','1'),
                'title'    => __( 'Footer Widget text Color', 'invictus' ),
                'output' => array('#footer .textwidget, #footer  .textwidget p, #footer .social-widget-inner a, #footer .widget_list_tweet_text, #footer .widget_list_tweet_date, #footer .widget li, #footer .widget ul, #footer .widget a, #footer .widget p, #footer strong, #footer .calendar_wrap tbody tr td, #footer .calendar_wrap thead tr th'), 
                'default'  => '#fff',
            ), 

            array(
                'id'       => 'footer-bg-color',
                'type'     => 'background',
                'required' => array('footer-variant','!=','3'),
                'output' => array('#footer'), 
                'title'    => __( 'Footer Background', 'invictus' ),
                'default'  => array('background-color' => '#47354e'),
            ),    

 

array(
    'id'   => 'info_normal',
    'type' => 'info',
    'desc' => __('Sub footer styling options', 'invictus')
),

            array(
    'id'       => 'disable-footer',
    'type'     => 'checkbox',
    'title'    => __('Disable subfooter', 'invictus'), 
    'default'  => '0'
           ),

                array(
                'id'       => 'ins-opt-editor',
                'type'     => 'editor',
                'title'    => __( 'Copyright message', 'invictus' ),
                'required' => array('disable-footer','!=','1'),                 
                'default'  => 'Powered by Insignia themes.',
            ),
            array(
                'id'       => 'sub-footer-bg-color',
                'type'     => 'background',
                'title'    => __( 'Sub Footer Background Color', 'invictus' ),
                'required' => array('disable-footer','!=','1'),   
                'output' => array('.footer-copyright'),             
                'default'  => array('background-color' => '#f7224a'),
            ),    
            array(
                'id'       => 'sub-footer-typography',
                'type'     => 'typography',
                'title'    => __( 'Copyright Text Typography', 'invictus' ),
                'google'   => true,
                'required' => array('disable-footer','!=','1'), 
		'output'      => array('.footer-copyright .footer-copyright-text-inner'),
		'units'       =>'px',
		'letter-spacing' => true, 
		'text-transform' => true,
                'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '17px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '500',
		    'google'      => true,
		    'font-size'   => '15px', 
		    'line-height' => '20px',
		    'letter-spacing' => '1px',
		    'text-transform' => 'none'
                ),
            ),


        ),
    ) );
/**
*
*end footer
*
**/    

/**
*
*Contact options
*
**/


    // -> START Editors

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact options', 'invictus' ),
        'id'         => 'contact-option',
        //'subsection' => true,
        'icon'             => 'el el-headphones',
        'fields'     => array(
		array(
                'id'       => 'ins-opt-google-api',
                'type'     => 'text',
		'title'    => __( 'Google Maps API Key', 'invictus' ),
                'subtitle' => __( 'Paste your Google Maps Api Key. This is necessary for the Google Map to work on your website.', 'invictus' ),
                'compiler' => 'true',
                'default' => 'AIzaSyAEfOLxxRo5-snBah6rrsducv3V-Pf8y78'
            )


        ),
    ) );

/**
*
* End Google Map
*
**/


/**
*
* 404 Error Page Options 
*
**/
Redux::setSection( $opt_name, array(
        'title'      => __( '404 Error page', 'invictus' ),
        'id'         => '404-error',
        'icon'  => 'el el-warning-sign',
        'fields'     => array(

                array(
                'id'       => 'ins-opt-404-background',
                'type'     => 'background',
                'output' => array('.error-404'),
                'title'    => __( 'Error page Background', 'invictus' ),
                'default'  => array(
                              'background-color' => '#fff',
                )
                ),

		array(
                'id'       => 'ins-opt-error-title',
                'type'     => 'text',
		'title'    => __( 'Main title', 'invictus' ),
                'compiler' => 'true',
                'default' => '404'
            ),
		array(
                'id'       => 'ins-opt-error-subtitle',
                'type'     => 'text',
		'title'    => __( 'Sub title', 'invictus' ),
                'compiler' => 'true',
                'default' => 'Oops! That page can’t be found.'
            ),
            	array(
                'id'       => 'ins-opt-error-text',
                'type'     => 'textarea',
		'title'    => __( 'Error Text', 'invictus' ),
                'compiler' => 'true',
                'default' => 'It seems we could not find the page you are looking for. Please 
check to make sure you have typed the URL correctly.'
            ),
            array(
                'id'       => 'ins-opt-error-title-typography',
                'type'     => 'typography',
                'title'    => __( 'Page title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'text-transform' => true,
		'output'      => array('h1.mega-title-404'),
		'letter-spacing' => true,
		'units'       =>'px',
                'default'  => array(
                    'color'       => '#f7224a',
                    'font-size'   => '200px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '700',
		    'google'      => true,
		'letter-spacing' => '0',
		    'line-height' => '170px',
		    'text-align' => 'center'
                ),
            ),
            array(
                'id'       => 'ins-opt-error-subtitle-typography',
                'type'     => 'typography',
                'title'    => __( 'Page sub-title typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page sub title properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('h2.mega-title-not-found'),
		'units'       =>'px',
		'text-transform' => true,
		'letter-spacing' => true,
                'default'  => array(
                    'color'       => '#47354e',
                    'font-size'   => '40px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '800',
		    'google'      => true,
		    'line-height' => '54px',
		    'letter-spacing' => '0',
		    'text-align' => 'center'
                ),
            ),
            array(
                'id'       => 'ins-opt-error-text-typography',
                'type'     => 'typography',
                'title'    => __( 'Page text typography', 'invictus' ),
                'subtitle' => __( 'Specify the Page text properties.', 'invictus' ),
                'google'   => true,
		'font-backup' => true,
		'output'      => array('h2.site-description'),
		'units'       =>'px',
		'text-transform' => true,
		'letter-spacing' => true,
                'default'  => array(
                    'color'       => '#f7224a',
                    'font-size'   => '20px',
                    'font-family' => 'Montserrat',
                    'font-weight'  => '400',
		    'google'      => true,
		    'letter-spacing' => '0',
		    'line-height' => '25px',
		    'text-align' => 'center'
                )
            )
   ) 
   ));

     

   

    /*
       End sections
    */

    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */


    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'invictus' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'invictus' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }
