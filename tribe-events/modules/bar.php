<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/modules/bar.php
 *
 * @package  TribeEventsCalendar
 * @version  4.3.5
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();
$current_url = tribe_events_get_current_filter_url();
?>

<div class="archive-event-main-header-wrapper donation-banner-image">
			<div class="archive-event-header">

			</div>
			<div class="archive-event-banner">
			<h3 class="archive-event-title"><?php echo esc_html('Events Archive','invictus'); ?></h3>
			<?php
			global $ins_opt;
			$bread = $ins_opt['ins-opt-archive-event-breadcrumbs'];
			if($bread == 1){
			 if (function_exists('insignia_breadcrumbs')) insignia_breadcrumbs(); } ?>
			</div>
		</div>



<?php do_action( 'tribe_events_bar_before_template' ) ?>
<div id="tribe-events-bar">

	<form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">

		<!-- Mobile Filters Toggle -->

		<div id="tribe-bar-collapse-toggle" <?php if ( count( $views ) == 1 ) { ?> class="tribe-bar-collapse-toggle-full-width"<?php } ?>>
			<?php printf( esc_html__( 'Find %s', 'invictus' ), tribe_get_event_label_plural() ); ?><span class="tribe-bar-toggle-arrow"></span>
		</div>


       
	<?php if ( ! empty( $filters ) ) { ?>
	                 <div class="first-row clearfix">
			<div class="tribe-bar-filters">
				<div class="tribe-bar-filters-inner tribe-clearfix">
					<?php foreach ( $filters as $filter ) : ?>
						<div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
							<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo esc_attr( $filter['caption'] ) ?></label>
							<?php echo $filter['html']; ?>
						</div>
					<?php endforeach; ?>
					<div class="tribe-bar-submit">
                                              <label><!--hh--></label>
						<input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="<?php printf( esc_attr__( 'Find %s', 'invictus' ), tribe_get_event_label_plural() ); ?>" />
					</div>
					<!-- .tribe-bar-submit -->
				</div>
				<!-- .tribe-bar-filters-inner -->
				</div>
			</div><!-- .tribe-bar-filters -->
		<?php } ?>



		<!-- Views -->
		<?php if ( count( $views ) > 1 ) { ?>
		   <div class="second-row">
			<div id="tribe-bar-views">
				<div class="tribe-bar-views-inner tribe-clearfix">
					<h3 class="tribe-events-visuallyhidden"><?php esc_html_e( 'Event Views Navigation', 'invictus' ) ?></h3>
					<label><?php esc_html_e( 'View As:', 'invictus' ); ?></label>
					<select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
						<?php foreach ( $views as $view ) : ?>
							<option <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo esc_attr( $view['url'] ); ?>" data-view="<?php echo esc_attr( $view['displaying'] ); ?>">
								<?php echo esc_html($view['anchor']); ?> 
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<!-- .tribe-bar-views-inner -->
				</div>
			</div><!-- .tribe-bar-views -->
		<?php }  ?>

	

	</form>
	<!-- #tribe-bar-form -->

</div><!-- #tribe-events-bar -->
<?php
do_action( 'tribe_events_bar_after_template' );
