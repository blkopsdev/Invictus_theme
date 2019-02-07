	<?php	

global $blog_out, $blog_style1, $blog_gap1, $post_appear_effects1;
$image_size = 'full';

		if($blog_out == "Masonry4"){
			$inv_blog_column_classes = "inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-3 col-lg-3 col-sm-6 col-xs-12 aos-init";  
			$inv_blog_column_classes_2 = "inv-post-masonry-item-holder blog-full-thumb-wapper no-padding col-md-3 col-lg-3 col-sm-6 col-xs-12 aos-init inv-post_".$blog_style1;  
		}
		elseif($blog_out == "Masonry3")
		{
			$inv_blog_column_classes = "inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-4 col-lg-4 col-sm-6 col-xs-12 aos-init";
			$inv_blog_column_classes_2 = "inv-post-masonry-item-holder blog-full-thumb-wapper no-padding col-md-4 col-lg-4 col-sm-6 col-xs-12 aos-init inv-post_".$blog_style1;
		}
		else{
			$inv_blog_column_classes = "inv-post-masonry-item-holder inv-post-masonry-one-main-wrapper col-md-6 col-lg-6 col-sm-6 col-xs-12 aos-init";
			$inv_blog_column_classes_2 = "inv-post-masonry-item-holder blog-full-thumb-wapper no-padding col-md-6 col-lg-6 col-sm-6 col-xs-12 aos-init inv-post_".$blog_style1;
		}
	?>



	

<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1); ?>px;" <?php post_class( $inv_blog_column_classes);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-post-grid-one-inner">

<?php if ( has_post_thumbnail($post) ) { ?>
<div class="thumbnail-image entry-masonry-thumb-wrap"><img src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>"><!--post-image--></div>
<?php } ?> 

<div class="inv-post-grid-one-content-wrap">
<div class="title entry-post-title inv-post-grid-one-title"><a href="<?php echo esc_url(get_permalink()); ?>" class="inv-title-h3"><?php the_title(); ?></a></div>
<div class="entry-excerpt inv-post-grid-one-excerpt">
<?php the_excerpt(); ?>
</div>
<div class="inv-post-masonry-one-meta">
<div class="inv-post-masonry-one-date"><i class="ti-alarm-clock inv-post-masonry-one-icon"><!--icon--></i> <span><?php echo get_the_date('d M Y'); ?></span></div>
<div class="inv-post-masonry-one-author"><i class="ti-user inv-post-masonry-one-icon"><!--icon--></i><span class="inv-post-masonry-one-author-text"><?php the_author_posts_link(); ?></span></div>
</div>
</div>
</div>
</article>
