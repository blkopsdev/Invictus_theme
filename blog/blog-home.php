<?php
/*
Template Name: No Header footer
*/
?>

<?php get_header();
global $ins_opt;
 
$archive_year  = get_the_time('Y'); 
$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 

 ?>
<section id="content" role="main">
<?php 
    $args = array( 'numberposts' => '1', 'category' => CAT_ID );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
    	$post_id = $recent['ID'];
        
    	$category = get_the_category($post_id);
        $category_name = $category[0]->name;
        if ( has_post_thumbnail($post_id) ) { 
            $single_blog_bg =   'style="background-image: url('.get_the_post_thumbnail_url($post_id).');"'; 

        }else{
            $single_blog_bg =   ''; 
        }

?>
<div class="inv-single-blog-title-wrapper text-center">
    <div class="inv-single-blog-title-bg" <?php  echo wp_kses_post($single_blog_bg); ?>></div>
    <div class="inv-single-blog-title-bg-overlay"></div>
    <div class="inv-single-blog-under-header-wrapper" style="height: 80px;"></div>
    <div class="inv-single-blog-title-inner">
        <div class="container custom-blog-title">
            <div class="inv-single-blog-category-row">
                <div class="inv-single-blog-subtitle" style="color: #aaaaaa; font-weight: bold; font-size: 14px; line-height: 28px; letter-spacing: 1px; display: inline-block; margin: 0 14px; text-transform: uppercase;">
                    <?php echo $category_name; ?>
                </div>
            </div>

            <div class="inv-single-blog-title-row">
                <a href="<?php echo $recent['guid'] ?>"><h1 class="inv-single-blog-title">
                    <?php echo $recent['post_title']; ?>
                </h1></a>
            </div>

            <div class="inv-single-blog-meta-row">
                <div class="inv-single-blog-meta-text">
                    <div class="inv-single-blog-author" style="color: #aaaaaa; font-weight: bold; font-size: 14px; line-height: 28px; letter-spacing: 1px; display: inline-block; margin: 0 14px; text-transform: uppercase;">
                        <?php echo esc_html_e('by ','invictus'); ?>
                        <?php
                            echo get_the_author_meta( 'display_name' , $recent['post_author'] );
                        ?>
                    </div>
                </div>
                


            </div>
        </div>
    </div>
</div>
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