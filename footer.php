<?php
global $ins_opt;
$footer_style_option = isset($ins_opt['footer-variant']) ? $ins_opt['footer-variant'] : '';
$footer_style = !empty($footer_style_option) ? $footer_style_option : '1';
$footer_class = 'footer-style-'.$footer_style;
$subfooter_disable = $ins_opt['disable-footer'];
?>

<?php

global $post;    
  if( !is_object($post) ){ ?>
	  <section id="footer" class="<?php echo esc_attr($footer_class); ?>">

		<?php get_template_part('templates/footer/style', $footer_style); ?>

	</section>
 <?php } 
else{
$template = get_page_template_slug( $post->ID );
if($template !== "no-header-footer.php"){
 if($footer_style != '3') { ?>
	<section id="footer" class="<?php echo esc_attr($footer_class); ?>">

		<?php get_template_part('templates/footer/style', $footer_style); ?>

	</section>
<?php } } }?>
<?php
 if(is_plugin_active('redux-framework/redux-framework.php')){
 if($subfooter_disable != '1') { ?>
<div class="footer-copyright"><div class="footer-copyright-text-inner"> <?php echo wp_kses_post($ins_opt['ins-opt-editor']); ?> </div></div>
<?php } 
}
 else{ ?>
         
                 <div class="footer-copyright"> <div class="footer-copyright-text-inner"><?php echo esc_html_e('Powered by Insignia themes. ', 'invictus'); ?> </div> </div>

         
      <?php   }
         
         ?>

<?php  $xyz="false"; ?>

<?php $back_to_top = $ins_opt['ins-opt-back-to-top'];
if($back_to_top == '1'){
?>
<a href="#top" id="smoothup" title="<?php echo esc_html_e('Back to top','invictus'); ?>"></a>
<?php } ?>

</div>



<?php wp_footer(); ?>

</body>
</html>