<?php

global $css1, $portfolio_extra_class1, $port_load_more1, $port_on_hover1, $port_filter1, $port_cat1, $filter_layout1;

		if($port_on_hover1 == "layout_2"){
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-2-wrapper";  
		}
		elseif($port_on_hover1 == "layout_3")
		{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-3-wrapper";
		}
		elseif($port_on_hover1 == "layout_4")
		{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-4-wrapper";
		}
		elseif($port_on_hover1 == "layout_5")
		{
			$inv_port_wrapper_class = "inv-portfolio-tilt-wapper inv-portfolio-hover-5-wrapper";
		}
		else{
			$inv_port_wrapper_class = "inv-portfolio-wapper inv-portfolio-hover-1-wrapper";
		}

		if($port_out == "port_masonry4"){
			$inv_port_column_main = "portfolio-col-4";  
		}
		elseif($port_out == "port_masonry3")
		{
			$inv_port_column_main = "portfolio-col-3";
		}
		else{
			$inv_port_column_main = "portfolio-col-2";
		}

?>


<div class="portfolio-masonry-main-wrapper clearfix <?php echo esc_attr($css1);?> <?php echo esc_attr($portfolio_extra_class1);?>" style="margin: 0 -<?php echo esc_html($port_gap1/2); ?>px;">

<?php if($port_filter1 == 'filter_on'){ 

$filter_class = 'inv-portfolio-filter-enabled';

?>
<div class="inv-portfolio-filter-button-holder">
<button class="active-filter-button inv-portfolio-filter-button-inner inv-portfolio-filter-button<?php echo esc_attr($filter_layout1); ?>" data-filter="*"><?php echo esc_html_e('show all','invictus'); ?></button>
<?php $port_cat1 = explode(",",$port_cat1);
foreach ($port_cat1 as $str) {
    echo "<button class='inv-portfolio-filter-button-inner inv-portfolio-filter-button$filter_layout1' data-filter=.$str>$str</button> ";
} ?>
</div>
<?php }else{$filter_class = 'inv-portfolio-filter-disabled';} ?>
<div class="portfolio-masonry-inner-holder portfolio-article-holder <?php echo esc_attr($inv_port_wrapper_class); ?>  inv-portfolio-element-holder <?php echo esc_attr($filter_class); ?> <?php echo esc_attr($inv_port_column_main); ?>">
<div class="grid-sizer"></div>
<?php	if ( $posts -> have_posts() ) : ?>

<?php	while($posts->have_posts()) {
	$posts->the_post(); 
?>

	<?php	get_template_part( 'templates/portfolio/archive/portfolio','masonry-content'); ?>


	<?php } ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>


</div>

<div class="invictus-pagination-wrapper col-md-12 clearfix">
<?php  
if($port_filter1 != "filter_on" ){
	if($port_load_more1 == "ajax_button"){ ?> 
		<div id="portfolio_load_more_button" class="port-load-more-button-hodler"><span class="inv_portfolio_load_more"><span class="loading_button"><?php echo esc_html_e('Load More','invictus'); ?></span><span class="post_loading"><?php echo esc_html_e('Loading...','invictus'); ?></span></span></div>
 	<?php }  
	elseif($port_load_more1 == "pagination"){
		if (function_exists("insignia_pagination")) {
    insignia_pagination($posts->max_num_pages);
	}  
	} 
	elseif($port_load_more1 == "infinite"){ ?>
		<div id="infinite_scroll_posts_archive" class="port-load-more-button-hodler"><span class="inv_portfolio_load_more"><?php echo esc_html_e('Loading...','invictus'); ?></span></div>
	<?php } 
}
?>

</div>
</div>