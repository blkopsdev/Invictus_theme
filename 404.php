<?php get_header(); ?>
<?php global $ins_opt; ?>
	<section id="content" role="main" class="error-404">
	<article id="post-0" class="post not-found">
	<div class="container">
		<header class="header">
			<?php
			/*adding span tag to the first word of the string*/
			$name = $ins_opt['ins-opt-error-subtitle'];

			$title = $ins_opt['ins-opt-error-title'];
			$errortext = $ins_opt['ins-opt-error-text'];
			?>
				<h1 class="mega-title-404">
				<?php if(isset($title) && $title != ''){
					echo esc_html($ins_opt['ins-opt-error-title']);
				}else{
					echo esc_html_e('404','invictus');
				}					?></h1>
				<h2 class="mega-title-not-found"><?php
					if(isset($name) && $name != ''){
						echo esc_html($name);
					} else{
						echo esc_html_e('Oops! That page can’t be found.','invictus');
					}
				 ?></h2>
		</header>
		
		<section class="entry-content">
			<p class="error-404-info"><?php
				if(isset($errortext) && $errortext != ''){
					echo esc_html($ins_opt['ins-opt-error-text']);
				} else{
					echo esc_html_e('It seems we could not find the page you are looking for. Please 
check to make sure you have typed the URL correctly.','invictus'); 
				}?></p>
			<div class="inv-backtohome">
				<a href="<?php echo esc_url(home_url()); ?>" class="insignia-button"> <?php echo esc_html_e('Back to home','invictus'); ?> </a>
			</div>
		</section>
	</div>

</article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>