	<?php	

global $port_out, $port_gap1, $port_overlay_color1, $title_size1, $title_color1, $category_size1, $category_color1, $port_ppp, $page, $port_cat1, $appear_effects1;

		if($port_out == "port_masonry4"){
			$inv_port_column_classes = "col-md-3 col-lg-3 col-sm-6 col-xs-12";  
		}
		elseif($port_out == "port_masonry3")
		{
			$inv_port_column_classes = "col-md-4 col-lg-4 col-sm-6 col-xs-12";
		}
		else{
			$inv_port_column_classes = "col-md-6 col-lg-6 col-sm-6 col-xs-12";
		}
	?>

<?php

 global $post, $port_on_hover1;

 $terms = get_the_terms( $post->ID, 'portfolio_category' );
if ( !empty( $terms ) ){
$output = array();
    foreach ( $terms as $term ) { $output[] = $term->slug; } } 

if ( !empty( $port_overlay_color1 ) ){
$overlay_color = $port_overlay_color1;
}
else{
$overlay_color = '#fff';
}

       if(empty($title_size1)){
        $title_size1='25'; }

       if(empty($category_size1)){
        $category_size1='14'; }

       if(empty($title_color1)){
        $title_color1='#343434'; }

       if(empty($category_color1)){
        $category_color1='#343434'; }
?>


<?php 
$image_size = 'large';
if (empty($port_gap1)) {
    $port_gap1 = "0";
}
 ?>

<?php if($port_on_hover1 == 'layout_1'){ ?>
<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;" class="inv-portfolio-hover-1 item item--width2 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0">
	<div class="inv-portfolio-hover-1-content"> 
		<span class="inv-portfolio-hover-1-overlay"></span> 
		
		<div class="inv-portfolio-hover-1-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="portfolio-thumb"></div>
		
		<div class="inv-portfolio-hover-1-entry-header" style="background-color:<?php echo esc_html($overlay_color); ?>">
			<span class="inv-portfolio-hover-1-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
			<h4 class="inv-portfolio-hover-1-title"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h4> 
		</div>
	</div>
</article>

<?php } elseif($port_on_hover1 == 'layout_2'){ ?>

<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;"  class="inv-portfolio-hover-2 item item--width2 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0"> 
	<div class="inv-portfolio-hover-2-content">
		<div class="inv-portfolio-hover-2-detail">
		
		<div class="inv-portfolio-hover-2-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="portfolio-thumb"></div>
			<div class="inv-portfolio-hover-2-entry-header" style="background-color:<?php echo esc_html($overlay_color); ?>">
				<div class="inv-portfolio-hover-2-centrize">
					<div class="inv-portfolio-hover-2-v-center">
					<h4 class="inv-portfolio-hover-2-title"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h4>
					<span class="inv-portfolio-hover-2-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span></div>
				</div>
			</div>
		</div>
	</div>
</article>

<?php } elseif($port_on_hover1 == 'layout_3'){ ?>
<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;"  class="inv-portfolio-hover-3 item item--width2 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0">
	<div class="inv-portfolio-hover-3-content">
		
		<div class="inv-portfolio-hover-3-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="portfolio-thumb"></div>
		
	<div class="inv-portfolio-hover-3-overlay-wrapper"  style="background-color:<?php echo esc_html($overlay_color); ?>">
		<div class="inv-portfolio-hover-3-overlay-inner">
			<div class="inv-portfolio-hover-3-entry-header">
				<span class="inv-portfolio-hover-3-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
				<h4 class="inv-portfolio-hover-3-title"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h4>
			</div>
		</div>
	</div>
	</div>
</article>
<?php } elseif($port_on_hover1 == 'layout_4'){ ?>

<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;"  class="inv-portfolio-hover-3 item item--width2 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0">
	<div class="inv-portfolio-hover-3-content">
		<div class="inv-portfolio-hover-3-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="portfolio-thumb"></div>
		
	<div class="inv-portfolio-hover-4-overlay-wrapper"  style="background-color:<?php echo esc_html($overlay_color); ?>">
		<div class="inv-portfolio-hover-3-overlay-inner">
			<div class="inv-portfolio-hover-3-entry-header">
				<span class="inv-portfolio-hover-3-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
				<h4 class="inv-portfolio-hover-3-title"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h4>
			</div>
		</div>
	</div>
	</div>
</article>
<?php } elseif($port_on_hover1 == 'layout_5'){ ?>
<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;"  class="inv-portfolio-hover-5 item item--width2 js-tilt ms-item inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> <?php echo esc_attr($inv_port_column_classes); ?> aos-init" data-tilt-glare="false" data-tilt-maxglare=".6" data-tilt-speed="400" data-tilt-scale="1.04" data-tilt-maxtilt="50" data-tilt-perspective="2500" data-tilt-easing="cubic-bezier(.03,.98,.52,.99)" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0">
	<div class="inv-portfolio-hover-5-content">
		
		<div class="inv-portfolio-hover-5-thumb"><img alt="" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>"></div>	
	<div class="inv-portfolio-hover-5-overlay-wrapper">
		<div class="inv-portfolio-hover-5-overlay-inner">
			<div class="inv-portfolio-hover-5-entry-header">
				<span class="inv-portfolio-hover-5-cats white-color"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
				<h4 class="inv-portfolio-hover-5-title white-color"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h4>
			</div>
		</div>
	</div>
	</div>
</article>
<?php } elseif($port_on_hover1 == 'layout_6'){ ?>
<article style="padding: 0 <?php echo esc_html($port_gap1/2); ?>px; margin-bottom:<?php echo esc_html($port_gap1); ?>px;" class="<?php echo esc_attr($inv_port_column_classes); ?> item item--width2 inv-portfolio-hover-6 inv-portfolio-item-holder <?php echo esc_attr(implode(' ', $output)); ?> aos-init" data-aos-once="true" data-aos="<?php echo esc_html($appear_effects1); ?>" data-aos-delay="0">
	<div class="inv-portfolio-hover-6-content"> 	
		<div class="inv-portfolio-hover-1-thumb-masonry"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>" alt="portfolio-thumb"></div>
		
		<div class="inv-portfolio-hover-6-entry-header">
			<span class="inv-portfolio-hover-6-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?> style="font-size: <?php echo esc_html($category_size1);?>px; color: <?php echo esc_html($category_color1); ?>"><?php echo esc_html($term->name) ?></a>
				<?php  }
				} ?></span>
			<h5 class="inv-portfolio-hover-6-title"><a href="<?php echo esc_url(get_permalink()); ?>" style="font-size: <?php echo esc_html($title_size1);?>px; color: <?php echo esc_html($title_color1); ?>"><?php the_title(); ?></a></h5> 
		</div>
	</div>
</article>
<?php } ?>