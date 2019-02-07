<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
global $post;

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>




<!-- Event Image -->
<div class="inv-event-item-inner">
	<div class="inv-event-thumb">
		<a class="inv-event-img" href="<?php echo esc_url( tribe_get_event_link() ); ?>">
			<img src="<?php echo tribe_event_featured_image( null, 'full', false, false);?>" class="attachment-large size-large">
		</a>
	</div>

	<div class="inv-event-infor">
		<div class="inv-event-infor-detail">
			<h4 class="inv-event-title">
				<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark" class="inv-event-link-color"><?php the_title(); ?></a> 
			</h4>
			<div class="inv-event-location">
					<span class="inv-event-meta-title">Location:</span>
					<span><?php echo tribe_get_venue($post, false); ?></span>
			</div>
			<div class="inv-event-date">
					<span class="inv-event-meta-title">Date:</span>
					<span><?php echo tribe_events_event_schedule_details(); ?></span> 
			</div>
		</div>
		<div class="inv-flex-parent-items">
<div class="fl-button-holder"><a class="fl-button" href="<?php echo esc_url( tribe_get_event_link() ); ?>"><span class="fl-button-text">Register</span></a></div>
				
		</div>
	</div>
</div>
