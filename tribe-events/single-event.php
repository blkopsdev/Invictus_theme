<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


global $ins_opt;

?>

<div class="single-event-main-header-wrapper donation-banner-image">
			<div class="single-event-header">

			</div>
			<div class="single-event-banner">
			<h3 class="single-event-title"><?php echo get_the_title(); ?></h3>
			<?php
			global $ins_opt;
			$bread = $ins_opt['ins-opt-single-event-breadcrumbs'];
			if($bread == 1){
			 if (function_exists('insignia_breadcrumbs')) insignia_breadcrumbs(); } ?>
			</div>
		</div>

<?php

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single container">
              

	
	<!-- Notices -->
	<?php tribe_the_notices() ?>
           <div class="single-event-main">
         <div class="single-event-title">
	<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>
         </div>
            
	<div class="tribe-events-schedule tribe-clearfix">
		<span class="event-date pc"><?php echo esc_html_e('Date:','invictus'); ?> </span><?php echo tribe_events_event_schedule_details( $event_id, '<p>', '</p>' ); ?>
		<?php if ( tribe_get_cost() ) : ?>
		<span class="event-date pc">Cost:</span>	<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?>
	</div>
           </div>

	<!-- Event header -->
		<!-- .tribe-events-single-event-description -->
                       <div class="single-event-before-content">
                         
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
                       </div>
	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Event featured image, but exclude link -->
                       <div class="church-single-event-image">
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
                       </div>
			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
		

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>



<?php
         if( class_exists('ReduxFrameworkPlugin')){

         global $ins_opt;

	$share_btn = $ins_opt['ins-opt-post-share'];
	if($share_btn == '1'){ ?>

		<div class="blog-post-share-wrapper">
		<h5><?php echo esc_html_e('Share this event','invictus');?></h5>
		<?php insignia_socials_sharing(); ?>
		</div>

	<?php
	}
	}else{ ?>
	    <div class="blog-post-share-wrapper">
		<h5><?php echo esc_html_e('Share this event','invictus');?></h5>
		<?php insignia_socials_sharing(); ?>
		</div>
		<?php
	     }
	?>



<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'invictus' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span class="arrow-left event--main-arrow"><!--hh--></span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span class="arrow-right event--main-arrow"><!--hh--></span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-footer -->

