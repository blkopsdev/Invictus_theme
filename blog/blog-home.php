<?php
/*
Template Name: No Header footer
*/
?>

<?php get_header();
global $ins_opt;
 ?>
<section id="content" role="main">
<?php 
if ( has_post_thumbnail($post->ID) ) { 
	echo get_the_post_thumbnail_url() . "<br>";
  	$single_blog_bg =   'style="background-image: url('.get_the_post_thumbnail_url().');"'; 

}else{
	$single_blog_bg =   ''; 
}
    $args = array( 'numberposts' => '1', 'category' => CAT_ID );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
    	$post_id = $recent->ID;
    	$category = get_the_category($post_id);
    	echo $post_id . "<br>";
    	print_r($category);

?>
<!-- <div class="inv-single-blog-title-wrapper text-center">
    <div class="inv-single-blog-title-bg" <?php // echo wp_kses_post($single_blog_bg); ?>></div>
    <div class="inv-single-blog-title-bg-overlay"></div>
    <div class="inv-single-blog-under-header-wrapper" style="height: 80px;"></div>
    <div class="inv-single-blog-title-inner">
        <div class="container custom-blog-title">
            <div class="inv-single-blog-category-row">
                <div class="inv-single-blog-subtitle">
                    <?php // the_category(', '); ?>
                </div>
            </div>

            <div class="inv-single-blog-title-row">
                <h1 class="inv-single-blog-title">
                    <?php // the_title(); ?>
                </h1>
            </div>

            <div class="inv-single-blog-meta-row">
                <div class="inv-single-blog-meta-text">
                    <div class="inv-single-blog-author">
                        <?php // the_author_posts_link(); ?>
                    </div>
                </div>
                <div class="inv-single-blog-date inv-single-blog-meta-text">
                    <time datetime="2016-11-07T16:24:47+00:00"><a href="<?php // echo get_day_link( $archive_year, $archive_month, $archive_day); ?>">
                            On <?php // the_date('F d, Y'); ?></a></time>
                </div>


            </div>
        </div>
    </div>
</div> -->
<?php

    }
?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
<div class="row">
<div class="page-content-wrapper <?php echo esc_html($content_class); ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">

<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>

</section>
</article>
</div>
</div>
</div>
<?php comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php
get_footer();
?>