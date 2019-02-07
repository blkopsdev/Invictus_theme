<div class="blog-main-box">
<div class="blog-img-box">
<?php if ( has_post_thumbnail($post) ) { 
echo the_post_thumbnail('large',array('class' => 'img-responsive')); 
} ?> 
</div>


<div class="blog-details-box">
<a href="<?php echo esc_url(get_permalink()); ?>"><h4><?php the_title(); ?></h4></a>
<h6><?php echo esc_html_e('by ','invictus'); ?> <?php the_author_posts_link(); ?> <?php echo esc_html_e('| ','invictus'); ?> <span><?php echo get_the_date('d M Y'); ?></span></h6>
</div>
</div>





