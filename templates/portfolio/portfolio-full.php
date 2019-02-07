<?php global $ins_opt, $entry_terms ; 

$portfolio_details = get_post_meta( $post->ID, '_ins_portfolio_details', 1 );

?>



<div class="inv-single-portfolio-parent-wrapper">

  <div class="portfolio-box-holder container">


   
<div class="inv-single-portfolio-inner col-md-12 clearfix">
<?php if($portfolio_details != 'disable'){ ?>
<div class="inv-single-portfolio-meta-box clearfix">

<div class="row inv-project-info-main">
<?php $date = get_post_meta($post->ID, "_ins_date", true);
	if (isset($date) && $date!= '') { ?>
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
		<div class="inv-port-header-field"><?php echo esc_html_e('Date','invictus'); ?></div>
		<div class="inv-port-body-field"><?php echo esc_html($date); ?></div>
	</div>
	<?php } ?>
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
		<div class="inv-port-header-field"><?php echo esc_html_e('Category','invictus'); ?></div>
		<div class="inv-port-body-field">
		<?php
		$terms = get_the_terms( get_the_ID() , 'portfolio_category' );
		if ( ! empty( $terms ) ) {
				foreach ( $terms as $term ) { 
					 $entry_terms = '<a href='.esc_url(get_term_link($term)).'><span>'.esc_html($term->name).'</span></a>, ';                          
				}
				$entry_terms = rtrim( $entry_terms, ', ' );
			echo wp_kses_post($entry_terms);
		 }
		?>
		</div>
	</div>


	<?php $client = get_post_meta($post->ID, "_ins_client", true);
	$client = get_post_meta($post->ID, "_ins_client", true);
	if (isset($client) && $client!= '') { ?>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
		<div class="inv-port-header-field"><?php echo esc_html_e('Client','invictus'); ?></div>
		<div class="inv-port-body-field"><?php echo esc_html($client); ?></div>
	</div>
		<?php } ?>
		
		<?php
	$website = get_post_meta($post->ID, '_ins_website', true);
	if (isset($website) && $website!= '') { ?>	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
		<div class="inv-port-header-field"><?php echo esc_html_e('Website','invictus'); ?></div>
		<div class="inv-port-body-field"><a class="inv-port-button-link" href="<?php echo esc_url($website); ?>"><?php echo esc_html_e('Visit site', 'invictus'); ?></a></div>
	</div>
	<?php } ?>
</div>

</div>
<?php } ?>

 
<?php
$images = get_post_meta($post->ID, '_ins_portfolio_gallery', true);

 if ( ! empty( $images) ) { ?>
 <div class="row portfolio-gallery clearfix inv-portfolio-gallery-slider slider">
<?php
foreach($images as $img) { 
      ?>
   <img src="<?php echo esc_url($img);?>" alt="">
<?php }?> </div> <?php } ?>




<?php $mypost = get_post($post->ID); ?>

<?php
$port_content = apply_filters('the_content',$mypost->post_content);



 if ( ! empty( $port_content) ) {
?>
 <div class="inv-portfolio-content"><?php echo do_shortcode( $port_content ); ?></div>
<?php
 } ?>


</div>



<?php
         if( class_exists('ReduxFrameworkPlugin') && is_plugin_active( 'invictus-vc-elements/index.php' )){

         global $ins_opt;

	$share_btn = $ins_opt['ins-opt-port-share'];
	if($share_btn == '1'){ ?>

		<div class="portfolio-share-wrapper">
		<h5><?php echo esc_html_e('Share this portfolio','invictus');?></h5>
		<?php insignia_socials_sharing(); ?>
		</div>

	<?php
	}
	}
	?>



<?php
wp_reset_query();
$prevPost = get_previous_post();
 if(!empty($prevPost )) {
$prevThumbnail = get_the_post_thumbnail( $prevPost->ID, array(150,150) );
}
$nextPost = get_next_post();
 if(!empty($nextPost)) {
$nextThumbnail = get_the_post_thumbnail( $nextPost->ID, array(150,150) );
}



                   if(!empty($prevThumbnail)) {
		$prev = get_previous_post_link(
			'<div class="prev-post-wrap">%link</div>',
			''.$prevThumbnail.' <p class="previous-post-new"><i class="fa fa-none-left"></i><span>'.esc_html__('Previous reading', 'invictus').'</span></p>
			<h3 class="post-nav__title _prev">%title</h3>'
		);
                }else{
		 $prev = get_previous_post_link(
                       '<div class="prev-post-wrap inv-no-img-post">%link</div>',
			'<p class="previous-post-new"><i class="fa fa-none-left"></i><span>'.esc_html__('Previous reading', 'invictus').'</span></p>
			<h3 class="post-nav__title _prev">%title</h3>'
			
			
		);
		
		
		}
                
                
                 if(!empty($nextThumbnail)) {
		$next = get_next_post_link(
			'<div class="next-post-wrap">%link</div>',
			''.$nextThumbnail.' <p class="next-post-new"><i class="fa fa-none-right"></i><span>'.esc_html__('Next reading', 'invictus').'</span></p>
			<h3 class="post-nav__title _next">%title</h3>'
		);
		}else{
		 $next = get_next_post_link(
			'<div class="next-post-wrap inv-no-img-post">%link</div>',
			'<p class="next-post-new"><i class="fa fa-none-right"></i><span>'.esc_html__('Next reading', 'invictus').'</span></p>
			<h3 class="post-nav__title _next">%title</h3>'
			
		);
		
		}
		

?>

<?php if(!empty($prev) || !empty($next)){ ?>
	<nav class="navigation post-nav " role="navigation">
	<ul class="post-nav-lst clearfix">
		<li class="col-md-5"><?php echo wp_kses_post($prev); ?></li>
		<li class="col-md-2 text-center post-nav-grid-wrapper"><a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>"><span class="ti-layout-grid2 post-nav-grid-icon"></span></a></li>
		<li class="col-md-5"><?php echo wp_kses_post($next); ?></li>
	</ul>
	</nav>
    <?php } ?>



  </div>


</div>
