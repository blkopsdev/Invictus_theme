<?php get_header(); ?>
<section id="content" role="main">
	
	<div class="blog-main-archive">
	<div class="container">
	<h3 class="home-header">Recent Articles</h3>	
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<article class="blog-page <?php echo esc_attr($archive_siderbar_class); ?>">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php
		if (has_post_format('gallery', $post->ID)) {
		 $main_class = 'blog-gallary-page';
		 $img_class = 'blog-gallery-box';
		}
		else{
		 $main_class = 'blog-page';
		 $img_class = 'blog-img-box';
		}
		?>

  
  
	<div <?php post_class('col-lg-12 col-md-12 col-sm-12 col-xs-12 post-list-inner-wrapper');?> style="margin-bottom: 20px;">

<?php $quote_bg = get_post_meta(get_the_ID(), "_ins_quote_background_color", true ); ?>
	<div <?php if(has_post_format('quote', $post->ID)){ ?> style='background-color:<?php echo esc_html($quote_bg);?>' <?php }?> class="<?php echo esc_attr($img_class); ?> blog-archive-inner-box-wrapper">

	<?php
	if ( ! get_post_format() ) { 
	if ( has_post_thumbnail($post) ) { ?>
        <div class=" clearfix archive-featured-image col-md-4" style="padding-top: 30px;">
            <div class="inv-default-img-hover-wrapper inv-inline-block">
<a rel="<?php echo esc_html($post->ID);?>" href="<?php echo esc_url(the_post_thumbnail_url('full'));?>" class="inv-popup-gallery">
                <?php echo the_post_thumbnail('full'); ?>
</a>
            </div>
        </div>



	<?php
	}
		get_template_part( 'blog/content/default','content');
	}
	elseif (has_post_format('video', $post->ID)) {
		get_template_part( 'blog/post','video'); 
		get_template_part( 'blog/content/default','content');
	}
	elseif (has_post_format('audio', $post->ID)) {
		get_template_part( 'blog/post','audio'); 
		get_template_part( 'blog/content/default','content');
	}
	elseif (has_post_format('quote', $post->ID)) {
		get_template_part( 'blog/post','archive_quote'); 
	}
	elseif (has_post_format('gallery', $post->ID)) {
		get_template_part( 'blog/post','gallery'); 
		get_template_part( 'blog/content/default','content');
	}
	elseif (has_post_format('image', $post->ID)) {
		get_template_part( 'blog/content/default','content');
	} ?>
	</div>


	<div class="end-of-post"></div>
	</div>


	<?php endwhile; ?>
	<?php endif; ?>
<?php
if (function_exists("insignia_pagination")) {
    insignia_pagination();
} ?>
	</article>

		


	</div>
	</div>

</section>


<?php get_footer(); ?>

