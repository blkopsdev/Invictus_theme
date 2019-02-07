<?php
function insignia_import_files() {
  return array(
      array(
      'import_file_name'             => 'Classic-Agency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/classic-agency/classic-agency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/classic-agency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/classic-agency/redux_options_classic-agency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/classic-agency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

          array(
      'import_file_name'             => 'Design-Studio',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/design-studio/design-studio.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/design-studio/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/design-studio/redux_options_design-studio.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/design-studio.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

      array(
      'import_file_name'             => 'Interactive-Agency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/interactive-agency/interactive-agency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/interactive-agency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/interactive-agency/redux_options_interactive-agency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/interactive-agency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),  

     array(
      'import_file_name'             => 'Marketing-Agency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/marketing-agency/marketing-agency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/marketing-agency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/marketing-agency/redux_options_marketing-agency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/marketing-agency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),           

    array(
      'import_file_name'             => 'Architecture',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/architecture/architecture.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/architecture/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/architecture/redux_options_architecture.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/architecture.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
       array(
      'import_file_name'             => 'Banking',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/banking/banking.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/banking/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/banking/redux_options_banking.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/banking.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Car-service',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/car-service/car-service.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/car-service/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/car-service/redux_options_car-service.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/car-service.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Coach',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/coach/coach.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/coach/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/coach/redux_options_coach.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/coach.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Construction',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/construction/construction.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/construction/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/construction/redux_options_construction.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/construction.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Creative-Agency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/creative-agency/creative-agency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/creative-agency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/creative-agency/redux_options_creative-agency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/creative-agency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Cryptocurrency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/cryptocurrency/cryptocurrency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/cryptocurrency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/cryptocurrency/redux_options_cryptocurrency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/cryptocurrency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Creative-Agency-2',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/creative-agency-2/creative-agency-2.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/creative-agency-2/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/creative-agency-2/redux_options_creative-agency-2.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/creative-agency-2.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Digital-Agency',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/digital-agency/digital-agency.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/digital-agency/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/digital-agency/redux_options_digital-agency.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/digital-agency.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Event',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/event/event.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/event/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/event/redux_options_event.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/event.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Freelancer',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/freelancer/freelancer.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/freelancer/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/freelancer/redux_options_freelancer.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/freelancer.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
 array(
      'import_file_name'             => 'Gym',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/Gym/Gym.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/Gym/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/Gym/redux_options_Gym.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Gym.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Coffee-Shop',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/coffee-shop/coffee-shop.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/coffee-shop/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/coffee-shop/redux_options_coffee-shop.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/coffee.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Hospital',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/hospital/hospital.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/hospital/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/hospital/redux_options_hospital.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/hospital.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Hotel',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/hotel/hotel.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/hotel/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/hotel/redux_options_hotel.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/hotel.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Kids',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/kids/kids.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/kids/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/kids/redux_options_kids.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/kids.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Lawyer',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/lawyer/lawyer.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/lawyer/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/lawyer/redux_options_lawyer.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/lawyer.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Mobile-App',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/mobile-app/mobile-app.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/mobile-app/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/mobile-app/redux_options_mobile-app.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/mobile-app.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Photography',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/photography/photography.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/photography/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/photography/redux_options_photography.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/photography.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Restaurant',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/restaurant/restaurant.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/restaurant/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/restaurant/redux_options_restaurant.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/restaurant.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'SEO',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/seo/seo.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/seo/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/seo/redux_options_seo.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/seo.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Startup',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/startup/startup.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/startup/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/startup/redux_options_startup.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/startup.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Travel',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/travel/travel.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/travel/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/travel/redux_options_travel.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/travel.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Video-Production',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/video-production/video-production.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/video-production/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/video-production/redux_options_video-production.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/video-production.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Web-Hosting',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/web-hosting/web-hosting.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/web-hosting/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/web-hosting/redux_options_web-hosting.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/web-hosting.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Wedding',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/wedding/wedding.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/wedding/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/wedding/redux_options_wedding.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Wedding.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Web-Studio',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/web-studio/web-studio.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/web-studio/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/web-studio/redux_options_web-studio.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/web-studio.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Logistic',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/logistic/logistic.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/logistic/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/logistic/redux_options_logistic.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Logistic.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Roofing',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/roofing/roofing.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/roofing/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/roofing/redux_options_roofing.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Roofing.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),


array(
      'import_file_name'             => 'Resume',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/resume/resume.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/resume/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/resume/redux_options_resume.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Resume.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Charity',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/charity/charity.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/charity/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/charity/redux_options_charity.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/charity.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Security',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/security/security.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/security/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/security/redux_options_security.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/security.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Weapon',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/weapon/weapon.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/weapon/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/weapon/redux_options_weapon.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/weapon.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Foodtruck',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/foodtruck/foodtruck.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/foodtruck/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/foodtruck/redux_options_foodtruck.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/foodtruck.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'River-Rafting',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/river-rafting/river-rafting.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/river-rafting/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/river-rafting/redux_options_river-rafting.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/river-rafting.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Product-Showcase',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/product-showcase/product-showcase.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/product-showcase/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/product-showcase/redux_options_product-showcase.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/product-showcase.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),



array(
      'import_file_name'             => 'Agency-Dark',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/agency-dark/agency-dark.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/agency-dark/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/agency-dark/redux_options_agency-dark.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/agency-dark.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Creative-Startup',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/creative-startup/creative-startup.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/creative-startup/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/creative-startup/redux_options_creative-startup.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/creative-startup.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Modern-Business',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/modern-business/modern-business.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/modern-business/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/modern-business/redux_options_modern-business.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/modern-business.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Personal-Blog',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/personal-blog/personal-blog.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/personal-blog/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/personal-blog/redux_options_personal-blog.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/personal-blog.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Creative-Blog',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/creative-blog/creative-blog.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/creative-blog/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/creative-blog/redux_options_creative-blog.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/creative-blog.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Modern-Blog',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/modern-blog/modern-blog.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/modern-blog/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/modern-blog/redux_options_modern-blog.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/modern-blog.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Personal-Portfolio',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/personal-portfolio/personal-portfolio.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/personal-portfolio/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/personal-portfolio/redux_options_personal-portfolio.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/personal-portfolio.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Pinterest-Gallery',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/pinterest-gallery/pinterest-gallery.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/pinterest-gallery/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/pinterest-gallery/redux_options_pinterest-gallery.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/pinterest-gallery.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Portfolio-Classic',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/portfolio-classic/portfolio-classic.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/portfolio-classic/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/portfolio-classic/redux_options_portfolio-classic.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/portfolio-classic.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Portfolio-Masonry',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/portfolio-masonry/portfolio-masonry.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/portfolio-masonry/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/portfolio-masonry/redux_options_portfolio-masonry.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/portfolio-masonry.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Portfolio-Reel',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/portfolio-reel/portfolio-reel.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/portfolio-reel/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/portfolio-reel/redux_options_portfolio-reel.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/portfolio-reel.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

array(
      'import_file_name'             => 'Portfolio-Spotlight',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/portfolio-spotlight/portfolio-spotlight.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/portfolio-spotlight/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/portfolio-spotlight/redux_options_portfolio-spotlight.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/portfolio-spotlight.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Shop-One',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/shop-one/shop-one.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/shop-one/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/shop-one/redux_options_shop-one.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/shop-one.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Shop-Two',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/shop-two/shop-two.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/shop-two/widgets.wie',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demos/shop-two/redux_options_shop-two.json',
          'option_name' => 'ins_opt',
        ),
      ),
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/Shop-Two.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
array(
      'import_file_name'             => 'Sub-Pages',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/sub-pages/sub-pages.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/sub-pages/widgets.wie',
     
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/sub-pages-img.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
	
	array(
      'import_file_name'             => 'Blog-Pages',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/blog-pages/blog-pages.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/blog-pages/widgets.wie',
     
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/blog-pages-img.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),
	array(
      'import_file_name'             => 'Portfolio-Pages',
          'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/portfolio-pages/portfolio-pages.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/portfolio-pages/widgets.wie',
    
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'img/portfolio-pages-img.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'invictus' ),
    ),

 
  );
}
add_filter( 'pt-ocdi/import_files', 'insignia_import_files' );

     

?>
