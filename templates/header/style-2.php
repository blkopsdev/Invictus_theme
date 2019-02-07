<?php 
global $ins_opt;
	$selected_value = $ins_opt['theme-header'];

if($selected_value == 'standard'){
 	         get_template_part( 'header/header','standard'); 
}
else if($selected_value == 'hamburger'){
 	         get_template_part( 'header/hamburger','menu');
}
else if($selected_value == 'vertical'){
 	         get_template_part( 'header/vertical','menu');
}
else if($selected_value == 'top-centered-logo'){
 	         get_template_part( 'header/top-centered-logo','menu');
}else {
 	         get_template_part( 'header/header','default'); 
}
?>