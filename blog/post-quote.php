      <?php
         
          $post_custom_author_name = get_post_meta(get_the_ID(), "_ins_quote_author", true );
	  $post_custom_quote_text = get_post_meta(get_the_ID(), "_ins_quote_text", true ); 
          
        $post_quote_bg = get_post_meta(get_the_ID(), "_ins_quote_background_color", true );
	$post_quote_color = get_post_meta(get_the_ID(), "_ins_quote_text_color", true ); 
        ?>

	<?php if (!empty($post_custom_quote_text)): ?>
<div class = "quotes-text-wrapper" style= background-color:<?php echo esc_html($post_quote_bg);?>>


			<div class="quote-text" style= color:<?php echo esc_html($post_quote_color); ?>;><?php echo wp_kses_post($post_custom_quote_text); ?></div>

	<?php if (!empty($post_custom_author_name)): ?>
			<h5 class="quote-author" style= color:<?php echo esc_html($post_quote_color); ?>;><?php echo esc_html($post_custom_author_name); ?></h5>
	<?php endif; ?>
</div>
	<?php endif; ?>
