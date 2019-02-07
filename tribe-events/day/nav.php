<?php
/**
 * Day View Nav
 * This file contains the day view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.2
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


 ?>

<h3 class="screen-reader-text" tabindex="0"><?php esc_html_e( 'Day Navigation', 'invictus' ) ?></h3>


<ul class="tribe-events-sub-nav events-list-main-nav">

	<!-- Previous Page Navigation -->
	<li class="tribe-events-nav-previous" aria-label="previous day link"><?php tribe_the_day_link( 'previous day' ) ?> </li>
  
	
	<!-- Next Page Navigation -->
	<li class="tribe-events-nav-next"><?php tribe_the_day_link( 'next day' ) ?></li>

</ul>

