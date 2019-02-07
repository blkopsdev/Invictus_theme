<?php 

global $event_date_color1, $event_name_color1, $event_location_color1, $event_button_text_color1, $event_button_bg_color1;
$get_posts->query($args);
if($get_posts->have_posts()) : while($get_posts->have_posts()) : $get_posts->the_post(); ?>

<div class="inv-list-element-wrapper">
<div class="inv-list-events-box vertical-align-middle clearfix">
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 inv-events-img-main">
<div class="inv-events-img-inner" style="background-image: url('<?php echo tribe_event_featured_image( null, 'full', false, false);?>');"></div>
</div>
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 inv-events-list-details">
<h4 class="inv-event-title">
				<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark" class="inv-event-link-color" style="color: <?php echo esc_html($event_name_color1); ?>"><?php the_title(); ?></a> 
			</h4>
			<div class="inv-event-date">
					<span style="color: <?php echo esc_html($event_date_color1); ?>"><?php echo tribe_events_event_schedule_details(); ?></span> 
			</div>
			<div class="inv-event-location">
					<span style="color: <?php echo esc_html($event_location_color1); ?>"><?php echo tribe_get_venue($post, false); ?></span>
			</div>
		</div>



<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 inv-events-button">
<div class="coach-button-holder"><a class="coach-button-inner" href="<?php echo esc_url( tribe_get_event_link() ); ?>" style="color: <?php echo esc_html($event_button_text_color1); ?>; background: <?php echo esc_html($event_button_bg_color1);?>;">Discover more</a></div>
</div>		

<div class="clearfix"></div>
</div>
</div>


<?php
  endwhile;
  endif;
  wp_reset_postdata();
?>