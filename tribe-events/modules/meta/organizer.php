<?php
/**
 * Single Event Meta (Organizer) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/organizer.php
 *
 * @package TribeEventsCalendar
 * @version 4.4
 */

$organizer_ids = tribe_get_organizer_ids();
$multiple = count( $organizer_ids ) > 1;

$phone = tribe_get_organizer_phone();
$email = tribe_get_organizer_email();
$website = tribe_get_organizer_website_link();
?>

<div class="tribe-events-meta-group tribe-events-meta-group-organizer">
	<h3 class="tribe-events-single-section-title pc"><?php echo tribe_get_organizer_label( ! $multiple ); ?></h3>
		<?php
		do_action( 'tribe_events_single_meta_organizer_section_start' );

		foreach ( $organizer_ids as $organizer ) {
			if ( ! $organizer ) {
				continue;
			}

			?>
                           <p class="events-field">

				<span class="event-title-field"><?php esc_html_e( 'Organizer Name:', 'invictus' ) ?></span>
			<span class="event-title-sub-text tribe-organizer">
				<?php echo tribe_get_organizer_link( $organizer ) ?>
			</span>
                         </p>
			<?php
		}

		if ( ! $multiple ) { // only show organizer details if there is one
			if ( ! empty( $phone ) ) {
				?>
                                <p class="events-field">

				<span class="event-title-field">
					<?php esc_html_e( 'Phone:', 'invictus' ) ?>
				</span>
				<span class="event-title-sub-text tribe-organizer-tel">
					<?php echo esc_html( $phone ); ?>
				</span>
                                 </p>
				<?php
			}//end if

			if ( ! empty( $email ) ) {
				?>
				<p class="events-field">

				<span class="event-title-field">
					<?php esc_html_e( 'Email:', 'invictus' ) ?>
				</span>
				<span class="event-title-sub-text tribe-organizer-email">
					<?php echo esc_html( $email ); ?>
				</span>
                                 </p>
				<?php
			}//end if

			if ( ! empty( $website ) ) {
				?>
				<p class="events-field">

				<span class="event-title-field">
					<?php esc_html_e( 'Website:', 'invictus' ) ?>
				</span>
				<span class="event-title-sub-text tribe-organizer-url">
					<?php echo wp_kses_post($website) ?>
				</span>    
                                 </p>
				<?php
			}//end if
		}//end if

		do_action( 'tribe_events_single_meta_organizer_section_end' );
		?>
</div>
