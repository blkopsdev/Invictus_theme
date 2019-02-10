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
    $args = array( 'numberposts' => '1', 'category' => CAT_ID );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
    	print_r($recent);
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