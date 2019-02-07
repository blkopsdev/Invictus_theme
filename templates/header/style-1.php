<?php 

	$selected_value = get_post_meta( $post->ID, '_ins_header', 1 );

if($selected_value == 'standard'){
 	         get_template_part( 'header/header','standard'); 
}
else if($selected_value == 'hamburger'){
 	         get_template_part( 'header/hamburger','menu');
}
else if($selected_value == 'top-centered-logo'){
 	         get_template_part( 'header/top-centered-logo','menu');
} else {
 	         get_template_part( 'header/header','default'); 
}

?>