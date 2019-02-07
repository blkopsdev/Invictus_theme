<?php
global $ins_opt;
 $footer_id =  $ins_opt['ins-opt-footer-page']; 
?>
<div class="inv-footer-wrapper">
<footer>
<div class="footer-bg">

<?php

$post = get_post($footer_id); 

$content = $post->post_content;
echo do_shortcode( $content );
?>

</div>

</footer>
</div>