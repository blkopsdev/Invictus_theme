	<?php	

global $blog_out, $post_cat1, $blog_no_posts1, $blog_load_more1, $blog_gap1, $blog_style1, $post_appear_effects1;


		if($blog_out == "Grid4"){
			$inv_blog_column_classes = "inv-post-blog-item-holder inv-post-grid-one-main-wrapper aos-init  col-md-3 col-lg-3 col-sm-6 col-xs-12 inv-post_".$blog_style1;  
			$inv_blog_column_classes_2 = "inv-post-blog-item-holder blog-full-thumb-wapper no-padding aos-init col-md-3 col-lg-3 col-sm-6 col-xs-12 inv-post_".$blog_style1;  
		}
		elseif($blog_out == "Grid3")
		{
			$inv_blog_column_classes = "inv-post-blog-item-holder inv-post-grid-one-main-wrapper aos-init col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-post_".$blog_style1;
			$inv_blog_column_classes_2 = "inv-post-blog-item-holder blog-full-thumb-wapper no-padding aos-init col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-post_".$blog_style1;
		}
		else{
			$inv_blog_column_classes = "inv-post-blog-item-holder inv-post-grid-one-main-wrapper aos-init col-md-6 col-lg-6 col-sm-6 col-xs-12 inv-post_".$blog_style1;
			$inv_blog_column_classes_2 = "inv-post-blog-item-holder blog-full-thumb-wapper no-padding aos-init col-md-6 col-lg-6 col-sm-6 col-xs-12 inv-post_".$blog_style1;
		}

if (empty($blog_gap1)) {
    $blog_gap1 = "0";
}
$image_size = 'full';
	?>



	
<?php if($blog_style1 == 'layout_1' || $blog_style1 == 'layout_0'){ ?>
<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1); ?>px;" <?php post_class( $inv_blog_column_classes);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-post-grid-one-inner">

<?php if ( has_post_thumbnail($post) ) { ?>
<div class="thumbnail-image entry-thumb-wrap" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');"><!--post-image--></div>
<?php } ?> 

<div class="inv-post-grid-one-content-wrap">
<div class="title entry-post-title inv-post-grid-one-title"><a href="<?php echo esc_url(get_permalink()); ?>" class="inv-title-h3"><?php the_title(); ?></a></div>
<div class="entry-excerpt inv-post-grid-one-excerpt">
<?php the_excerpt(); ?>
</div>
<div class="inv-post-grid-one-meta">
<div class="inv-post-grid-one-date"><i class="ti-alarm-clock inv-post-grid-one-icon"><!--icon--></i> <span><?php echo get_the_date('d M Y'); ?></span></div>
<div class="inv-post-grid-one-author"><i class="ti-user inv-post-grid-one-icon"><!--icon--></i><span class="inv-post-grid-one-author-text"><?php the_author_posts_link(); ?></span></div>
</div>
</div>
</div>
</article>
<?php } elseif($blog_style1 == 'layout_2'){?>
<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1*2); ?>px;" <?php post_class( $inv_blog_column_classes);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-content-blog-inner">
<div class="inv-content-blog-meta"><span class="inv-content-blog-date"><?php echo get_the_date('d M Y'); ?></span><span class="inv-content-blog-byline"><?php echo esc_html_e('By','invictus'); ?> <span class="inv-content-blog-author-holder"> <span class="inv-content-blog-author"><?php the_author_posts_link(); ?></span></span></span></div>
<div class="inv-content-blog-title-holder">
<h4 class="inv-content-blog-title-holder"><a class="inv-content-blog-link" href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
</div>
<div class="inv-content-blog-excerpt-holder"><?php the_excerpt(); ?></div>
<div class="inv-content-blog-read-more-holder"><a class="inv-content-blog-read-more" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html_e('Read More','invictus'); ?></a></div>
</div>
</article>

<?php } elseif($blog_style1 == 'layout_3'){ ?>
<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1+20); ?>px;" <?php post_class( $inv_blog_column_classes);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-blog-grid-3-wrapper">
<div class="inv-blog-grid-3-inner">
<div class="inv-blog-grid-3-thumb" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');">
<div class="inv-blog-grid-3-category"><span class="inv-blog-grid-3-category-text"><?php the_category(', '); ?></span></div>
</div>
<div class="inv-blog-grid-3-content">
<h5 class="inv-blog-grid-3-title"><a href="<?php echo esc_url(get_permalink()); ?>" class="inv-title-h3"><?php the_title(); ?></a></h5>
<div class="inv-blog-grid-3-bottom-wrapper">
<div class="separator-line-holder">
<div class="separator-line-inner"><!--line--></div>
</div>
<div class="inv-blog-grid-3-meta clearfix"><span class="inv-blog-grid-3-author-meta"><?php echo esc_html_e('By','invictus'); ?> <span class="inv-blog-grid-3-author-name"><?php the_author_posts_link(); ?></span></span><span class="inv-blog-grid-3-date"><?php echo get_the_date('d M Y'); ?></span></div>
</div>
</div>
</div>
</div>
</article>

<?php } elseif($blog_style1 == 'layout_4'){ ?>
<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1); ?>px;" <?php post_class( $inv_blog_column_classes_2);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');" class="blog-full-thumb-wapper">
<div class="blog-full-thumb-inner clearfix">
<div class="blog-full-thumb-thumb">
<div class="blog-full-thumb-content">
<div class="blog-full-thumb-cat-holder"><span class="blog-full-thumb-cat"><?php the_category(', '); ?></span></div>
<p><a class="blog-full-thumb-link" href="<?php echo esc_url(get_permalink()); ?>"><i class="ti-arrow-right" aria-hidden="true"><!--icon--></i></a></p>
<div class="blog-full-thumb-meta"><span class="blog-full-thumb-date white-text"><?php echo get_the_date('d M Y'); ?></span></div>
<h3 class="blog-full-thumb-title"><a class="white-text" href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
</div>
</div>
</div>
</div>
</article>
<?php } elseif($blog_style1 == 'layout_5'){ ?>

<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1); ?>px;" <?php post_class( $inv_blog_column_classes_2);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-blog-grid-5-wrapper">
<div class="inv-blog-grid-5-post">
<div class="inv-blog-grid-5-thumb" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');">
<div class="inv-blog-grid-5-detail white-color">
<?php the_category(', '); ?>
<h4 class="inv-blog-grid-5-title"><a href="<?php echo esc_url(get_permalink()); ?>" title="" class="white-color"><?php the_title(); ?></a></h4>
<span class="italic-font"><i class="fa fa-calendar-o"></i> <?php echo get_the_date('d F Y'); ?></span>
<p><?php $excerpt = get_the_excerpt();
$excerpt = substr( $excerpt , 0, 49); 
echo esc_html($excerpt); ?></p>
</div>
</div>
</div>
</div>
</article>
<?php } else{ ?>
<article style="padding: 0 <?php echo esc_html($blog_gap1/2); ?>px; margin-bottom:<?php echo esc_html($blog_gap1); ?>px;" <?php post_class( $inv_blog_column_classes_2);?> data-aos-once="true" data-aos="<?php echo esc_html($post_appear_effects1); ?>" data-aos-delay="0">
<div class="inv-blog-grid-6-wrapper">
<div class="inv-blog-grid-6-inner">
<div class="inv-blog-grid-6-featured">
<div class="inv-blog-grid-6-post-thumb"><a class="inv-blog-grid-6-link" href="<?php echo esc_url(get_permalink()); ?>"><?php if ( has_post_thumbnail($post) ) { 
echo the_post_thumbnail('large',array('class' => 'img-responsive')); } ?></a></div>
</div>
<div class="inv-blog-grid-6-content">
<h4 class="inv-blog-grid-6-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
<div class="inv-blog-grid-6-meta"><span class="inv-blog-grid-6-meta-posted"><?php echo esc_html_e('Posted On','invictus'); ?> <?php echo get_the_date('d F Y'); ?></span></div>
<div class="inv-blog-grid-6-button"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html_e('Read More','invictus'); ?></a></div>
</div>
</div>
</div>
</article>
<?php } ?>