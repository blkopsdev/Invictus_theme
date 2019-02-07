<?php get_header(); ?>
<section id="content" role="main">
<?php

global $ins_opt, $entry_terms ;
?>

 <?php if ( has_post_thumbnail($post->ID) ) { 
              $single_portfolio_bg =   'style="background-image: url('.get_the_post_thumbnail_url().');"'; 

 } ?>

<div class="inv-single-portfolio-title-wrapper text-center">
<div class="inv-single-portfolio-title-bg" <?php echo wp_kses_post($single_portfolio_bg); ?>></div>
<div class="inv-single-portfolio-title-bg-overlay"></div>
<div class="inv-single-portfolio-under-header-wrapper" style="height: 80px;"></div>
	<div class="inv-single-portfolio-title-inner">
		<div class="container">
		<?php
		$terms = get_the_terms( get_the_ID() , 'portfolio_category' );
		if ( ! empty( $terms ) ) {
			echo '<div class="inv-single-portfolio-category-row"><div class="inv-single-portfolio-subtitle">';
				foreach ( $terms as $term ) { 
					 $entry_terms .= '<a href='.esc_url(get_term_link($term)).'><span>'.esc_html($term->name).'</span></a>, ';                          
				}
				$entry_terms = rtrim( $entry_terms, ', ' );
			echo wp_kses_post($entry_terms). '</div></div>';
		 }
		?>
			
			<div class="inv-single-portfolio-title-row">
				<h1 class="inv-single-portfolio-title"><?php echo get_the_title(); ?></h1>
			</div>				
		</div>
	</div>
</div>

<?php

		 get_template_part('templates/portfolio/portfolio', 'full'); 


?>


</section>
<?php get_footer(); ?>
