<?php
/**
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insignia Themes
 * @subpackage Insignia 
 * @since Insignia 0.1
 */

get_header();
global $ins_opt;

?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
if (has_post_format('gallery', $post->ID)) {
  $main_class = 'blog-gallary-page';
  $img_class = 'blog-gallery-box';
}
elseif (has_post_format('video', $post->ID) || has_post_format('audio', $post->ID) || has_post_format('quote', $post->ID)){
  $main_class = 'blog-page';
  $img_class = 'blog-img-box';
}else{
  $main_class = 'blog-page';
  $img_class = '';
}
?>

<?php 
$archive_year  = get_the_time('Y'); 
$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 
?>


<?php if ( has_post_thumbnail($post->ID) ) { 
              $single_blog_bg =   'style="background-image: url('.get_the_post_thumbnail_url().');"'; 

 }else{
              $single_blog_bg =   ''; 
}  ?>

<div class="inv-single-blog-title-wrapper text-center">
    <div class="inv-single-blog-title-bg" <?php echo wp_kses_post($single_blog_bg); ?>></div>
    <div class="inv-single-blog-title-bg-overlay"></div>
    <div class="inv-single-blog-under-header-wrapper" style="height: 80px;"></div>
    <div class="inv-single-blog-title-inner">
        <div class="container custom-blog-title">
            <div class="inv-single-blog-category-row">
                <div class="inv-single-blog-subtitle">
                    <?php the_category(', '); ?>
                </div>
            </div>

            <div class="inv-single-blog-title-row">
                <h1 class="inv-single-blog-title">
                    <?php the_title(); ?>
                </h1>
            </div>

            <div class="inv-single-blog-meta-row">
                <div class="inv-single-blog-meta-text">
                    <div class="inv-single-blog-author">
                        <?php the_author_posts_link(); ?>
                    </div>
                </div>
                <div class="inv-single-blog-date inv-single-blog-meta-text">
                    <time datetime="2016-11-07T16:24:47+00:00"><a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>">
                            On <?php the_date('F d, Y'); ?></a></time>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="inv-single-post-main-wrapper clearfix">
        <article class="<?php echo esc_attr($main_class); ?> blog-full-width">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="<?php echo esc_attr($img_class); ?>">
                    <?php
  if (has_post_format('video', $post->ID)) {
    get_template_part( 'blog/post','video'); 
}
elseif (has_post_format('audio', $post->ID)) {
    get_template_part( 'blog/post','audio'); 
}
elseif (has_post_format('quote', $post->ID)) {
    get_template_part( 'blog/post','quote'); 
}
elseif (has_post_format('gallery', $post->ID)) {
    get_template_part( 'blog/post','gallery'); 
}
?>

                </div>

                <div class="blog-text-box">
                    <?php the_content(); ?>
                    <div class="after_content">
                        <?php wp_link_pages(); ?>
                    </div>
                    <?php
$posttags = get_the_tags();
if ($posttags) { ?>
                    <ul class="tags-single-post clearfix">
                        <?php foreach($posttags as $tag) { ?>
                        <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                <?php echo esc_html($tag->name); ?></a></li>
                        <?php }
echo '</ul>';
}
?>
                </div>
            </div>
            <?php
         if( class_exists('ReduxFrameworkPlugin') && is_plugin_active( 'invictus-vc-elements/index.php' )){

         global $ins_opt,$post;

  $share_btn = $ins_opt['ins-opt-post-share'];
  if($share_btn == '1'){ ?>

           

            <?php
  }
  }
  ?>

            <?php 
$authordesc = get_the_author_meta( 'description' );
if ( ! empty ( $authordesc ) )
{
?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 admin-box single-post-admin-box-wrapper">
                <div class="admin-img-box">
                    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                </div>
                <div class="admin-text-box">

                    <span class="admin-top-text"><i>
                            <?php esc_html_e('Author','invictus'); ?></i></span>
                    <h2>
                        <?php the_author_posts_link(); ?>
                    </h2>
                    <p class="admin-sub-text">
                        <?php echo get_the_author_meta('description'); ?>
                    </p>

                </div>
            </div>
            <?php } ?>
            <?php
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


      <div class="multi-lines">
        <div class="multi-lines_lines">&nbsp;</div>
        <div class="multi-lines_lines">&nbsp;</div>
        <div class="multi-lines_lines">&nbsp;</div>
      </div>

            <?php

$tags = wp_get_post_tags($post->ID);

if ($tags) { 
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'ignore_sticky_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) { ?>
<section class="related">
  <h3 class="home-header">Recent Articles</h3>
  <div class="row">
    <div class="col-md-12">
      <?php echo wp_kses_post($prev); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php echo wp_kses_post($next); ?>
    </div>
  </div>
</section>
            <div class="blog-related-post-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="inv-related-post-title-wrapper">
                    <h3 class="inv-related-post-title">
                        <?php echo esc_html_e('Related Posts','invictus'); ?>
                    </h3>
                </div>
                <div class="inv-blog-element-grid-wrapper inv-blog-element-article-holder" style="margin: 0 -15px;">
                    <div class="grid-sizer"></div>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <article style="padding: 0 15px; margin-bottom:15px;" class="inv-post-grid-one-main-wrapper col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-post_layout_1 inv-post-blog-item-holder">
                        <div class="inv-post-grid-one-inner" <?php post_class();?>>

                            <?php if ( has_post_thumbnail($post) ) { ?>
                            <div class="thumbnail-image entry-thumb-wrap" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID)); ?>');">
                                <!--post-image-->
                            </div>
                            <?php } ?>

                            <div class="inv-post-grid-one-content-wrap">
                                <div class="title entry-post-title inv-post-grid-one-title"><a href="<?php echo esc_url(get_permalink()); ?>"
                                        class="inv-title-h5">
                                        <?php the_title(); ?></a></div>
                                <div class="entry-excerpt inv-post-grid-one-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="inv-post-grid-one-meta">
                                    <div class="inv-post-grid-one-date"><i class="ti-alarm-clock inv-post-grid-one-icon">
                                            <!--icon--></i> <span>
                                            <?php echo get_the_date('d M Y'); ?></span></div>
                                    <div class="inv-post-grid-one-author"><i class="ti-user inv-post-grid-one-icon">
                                            <!--icon--></i><span class="inv-post-grid-one-author-text">
                                            <?php the_author_posts_link(); ?></span></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <?php
endwhile; ?>
                </div>
            </div>
            <?php }
wp_reset_query(); 
} ?>



            <?php 
if(!empty($prev) || !empty($next)){ ?>
            <nav class="navigation post-nav " role="navigation">
                <ul class="post-nav-lst clearfix">
                    <li class="col-md-5">
                        <?php echo wp_kses_post($prev); ?>
                    </li>
                    
                    <li class="col-md-5">
                        <?php echo wp_kses_post($next); ?>
                    </li>
                </ul>
            </nav>
            <?php } ?>

        </article>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>