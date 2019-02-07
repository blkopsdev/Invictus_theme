<div class="blog-content-box-wrapper">	
<div class="blog-meta-info">
		<div class="blog-meta-info-inner">
			<span><?php echo esc_html_e('Posted on','invictus'); ?></span> 
			<span class="blog-meta-date"><?php echo get_the_date(); ?></span>
			<span><?php echo esc_html_e('In','invictus'); ?> <?php the_category(', '); ?></span>
		</div>
	</div>	
<div class="blog-title-box">
	<a href="<?php echo esc_url(get_permalink()); ?>"><h3><?php the_title(); ?></h3></a>
	</div>	
		<div class="blog-text-box">
		<?php the_excerpt(); ?> <div class="inv-border-button-wrapper"><a href="<?php echo esc_url(get_permalink()); ?>" class="inv-border-button pc pc-border inv-archive-post-read-more"><?php echo esc_html_e('Read More','invictus'); ?></a></div>

<div class="blog-author-box">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 50); ?> <?php echo esc_html_e('by','invictus'); ?> <?php the_author_posts_link(); ?>
      </div>
		</div>
</div>