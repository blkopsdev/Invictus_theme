<?php
global $ins_opt,$posi_class;
$myimage = $ins_opt['insignia-logo']['url'];
$fixed_header_logo  = $ins_opt['insignia-fixed-header-logo']['url'];
$mobile_header_logo  = $ins_opt['insignia-mobile-header-logo']['url'];
$header_posi = $ins_opt['opt_content_position']; 
if($header_posi == 2){
$posi_class = "absolute-header";
} 
$logo_left = $ins_opt['opt_logo_position'];

$sticky_menu  = $ins_opt['ins-opt-sticky-switcher'];
if($sticky_menu == 0){
$sticky_menu_class = "sticky-header-disabled";
}else{
$sticky_menu_class = "sticky-header-enabled";
}

$header_separator = $ins_opt['ins-opt-header-separator'];
$bottom_menu_height = $ins_opt['ins-opt-menu-wrapper-height'];
$top_menu_height = $ins_opt['ins-opt-logo-wrapper-height'];
$fixer_height = $bottom_menu_height + $top_menu_height ;

?>
<div id="header-container" class="inv-main-header-wrapper inv-top-center-logo-header absolute-header logo-position-top-center <?php echo esc_attr($sticky_menu_class); ?>">

<div class="inv-navigation-outer">
	<nav class="inv-main-header bottom-header inv-header-wrap <?php echo esc_attr($header_separator); ?>" style="height: 100%; line-height: <?php echo esc_attr($fixer_height); ?>px;">
	<div class="container">
	<div class="row">
	<div class="inv-header-inner">

	<div class="inv-header-logo-holder text-center col-md-12 col-lg-12" style="height: 70px; line-height: <?php echo esc_attr($top_menu_height); ?>px;">
		<div class="inv-logo-wrap">
 			<?php do_action( 'insignia_branding_header' ); ?>
		</div>

</div>

	<div class="header-top-menu-right header-sticky-logo inv-main-header-right desktop-menu text-center col-md-12 col-lg-12" style="height:70px; line-height: 60px; padding: 5px 0; display: none;">
		<img src="http://159.65.162.144/wp-content/uploads/2019/02/LogoMakr_8RTMJq-2.png" alt="Logo" class="inv-header-logo-img" style="height: 50px;">
	</div>


 <!-- Mobile menu -->
  <div class="header-one-mobile">
<div class="demo-1 vsd">	
			
	<!-- Codrops top bar -->

		<div class="column">
	 <?php
if (has_nav_menu('primary-menu') || has_nav_menu('mobile-menu')){ ?>
			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger"><?php echo esc_html_e('Open Menu','invictus'); ?></button>
<?php
	if($logo_left == 2){ 
	wp_nav_menu( array( 'container'=> false,'theme_location' => 'mobile-menu','menu_class'=> 'menu dl-menu' ) ); 
	}else{
	wp_nav_menu( array( 'container'=> false,'theme_location' => 'primary-menu','menu_class'=> 'menu dl-menu' ) ); } ?>
			</div><!-- /dl-menuwrapper --> <?php
} else {
echo '<div class="menu-not-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
} ?>

		</div>
		</div>
</div>
<!-- End Mobile menu --> 
            
		</div>
		</div>
        </div></nav></div></div>
<?php


$header_posi = $ins_opt['opt_content_position'];

 if($header_posi == 1){ ?>
<div id="menu-fixer" style="height: <?php echo esc_attr($fixer_height); ?>px; max-height: <?php echo esc_attr($fixer_height); ?>px;"></div>
<?php } ?>
