<?php

global $css1, $portfolio_extra_class1, $port_load_more1, $port_on_hover1, $port_filter1, $port_cat1, $filter_layout1, $ins_opt;

$main_menu_height = $ins_opt['ins-opt-menu-height'].'px';

		if($port_on_hover1 == "layout_2"){
			$inv_port_wrapper_class = "inv-portfolio-hover-2-wrapper";  
		}
		elseif($port_on_hover1 == "layout_3")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-3-wrapper";
		}
		elseif($port_on_hover1 == "layout_4")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-4-wrapper";
		}
		elseif($port_on_hover1 == "layout_5")
		{
			$inv_port_wrapper_class = "inv-portfolio-hover-5-wrapper";
		}
		else{
			$inv_port_wrapper_class = "inv-portfolio-hover-1-wrapper";
		}



if($full_height1 == 'full_height_on'){ 
$port_height = "calc(100vh - $main_menu_height)";
$port_height_class = "port-full-height";
}
else{
$port_height = " ";
$port_height_class = "";
}
?>


<div class="clearfix inv-portfolio-element-main-wrapper <?php echo esc_attr($inv_port_wrapper_class); ?> <?php echo esc_attr($css1);?> <?php echo esc_attr($portfolio_extra_class1);?> <?php echo esc_attr($port_height_class);?>" style="height: <?php echo esc_attr($port_height);?>">
<div class="clearfix portfolio-multi-column inv-portfolio-carousel-slider slider">
<?php
	if ( $posts -> have_posts() ) :
	while($posts->have_posts()) {
	$posts->the_post(); 
?>

	<?php	get_template_part( 'templates/portfolio/archive/portfolio','grid-content'); ?>


	<?php } ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
</div>