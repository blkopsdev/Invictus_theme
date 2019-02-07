<?php
/**
 * Single Event Meta (Venue) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/venue.php
 *
 * @package TribeEventsCalendar
 */

if ( ! tribe_get_venue_id() ) {
	return;
}

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();

?>

<div class="tribe-events-meta-group tribe-events-meta-group-venue">
	<h3 class="tribe-events-single-section-title pc"> <?php echo esc_html( tribe_get_venue_label_singular(), 'the-events-calendar' ) ?> </h3>
		<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>
                    
                  <div class="events-field">

				<span class="event-title-field"><?php esc_html_e( 'Venue Name:', 'invictus' ) ?></span>
			
		<span class="event-title-sub-text tribe-venue"> <?php echo tribe_get_venue() ?> </span>
                               </div>
		<?php if ( tribe_address_exists() ) : ?>
                              <div class="events-field">
			<span class="event-title-field"><?php esc_html_e( 'Address:', 'invictus' ) ?></span>
                              <span class="event-title-sub-text tribe-venue-location tribe-events-address">
					<?php echo tribe_get_full_address(); ?>

					<?php if ( tribe_show_google_map_link() ) : ?>
						<?php echo tribe_get_map_link_html(); ?>
					<?php endif; ?>
			</span>
                       </div>
		<?php endif; ?>

		<?php if ( ! empty( $phone ) ): ?>
                             <div class="events-field">
			<span class="event-title-field"> <?php esc_html_e( 'Phone:', 'invictus' ) ?> </span>
			<span class="tribe-venue-tel event-title-sub-text"> <?php echo esc_html($phone) ?> </span>
                   </div>
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
                          <div class="events-field">
			<span class="event-title-field"> <?php esc_html_e( 'Website:', 'invictus' ) ?> </span>
			<span class="url event-title-sub-text"> <?php echo wp_kses_post($website) ?> </span>
                   </div>
			
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
</div>
