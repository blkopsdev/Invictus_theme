<?php
global $ins_opt ;
$myimage = $ins_opt['insignia-logo']['url'];

$header_posi = $ins_opt['opt_content_position']; 
$header_posi = $ins_opt['opt_content_position']; 
if($header_posi == 2){
$posi_class = "absolute-header";
}else{
$posi_class = "";
} 
?>
<div class="header-four-main-wrapper <?php echo esc_attr($posi_class); ?>">
<div class="header-four-menu-area clearfix">
<div class="header-four-logo"> <?php do_action( 'insignia_branding_header' ); ?> </div>
<div id="nav-icon2" onclick="ddfullscreenmenu.togglemenu()">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>

</div>
</div>
<nav id="ddfullscreenmenu" class="ddfullscreenmenu">

			<div id="ulwrapper" class="fullscreen_ulwrapper">
				
                         
<?php
if (has_nav_menu('primary-menu')){
  wp_nav_menu( array( 'container'=> false,'theme_location' => 'primary-menu','items_wrap'=> '<ul id="fullscreenmenu-ul" class="fullscreenmenu-ul">%3$s</ul>' ) );

} else {
echo '<div class="no-menu-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
} ?>
	

			</div>
</nav>

