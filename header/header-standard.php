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
$topbar  = $ins_opt['ins-opt-topbar-switcher'];
$sticky_menu  = $ins_opt['ins-opt-sticky-switcher'];
if($sticky_menu == 0){
$sticky_menu_class = "sticky-header-disabled";
}else{
$sticky_menu_class = "sticky-header-enabled";
}
if($topbar == 0){
$topbar_class = "topbar-disabled";
}else{
$topbar_class = "topbar-enabled";
}
$header_separator = $ins_opt['ins-opt-header-separator'];
$main_menu_height = $ins_opt['ins-opt-menu-height'];
$topbar_height = $ins_opt['ins-opt-topbar-height'];
?>
<div id="header-container" class="inv-main-header-wrapper inv-standard-header absolute-header <?php echo esc_attr($topbar_class); ?> logo-position-left <?php echo esc_attr($sticky_menu_class); ?>">
<?php if($ins_opt['ins-opt-topbar-switcher'] == '1'){ ?> 
<div class="inv-main-header-topbar top-header" style="height: <?php echo esc_attr($topbar_height.'px'); ?>; line-height: <?php echo esc_attr($topbar_height.'px'); ?>;">

<div class="header-top-contacts-main-holder">
<div class="header-top-modules-holder header-top-contact-modules">
<?php 
  $header_top_phone = $ins_opt['ins-opt-topbar-phone'];
  if ($header_top_phone == 1) {  ?>
<div class="header-top-module">
<div class="header-top-info-data header-top-phone">
<span class="header-top-icon-container"><i class="ti-headphone-alt header-top-info-icon"></i></span>
<h6><?php echo esc_html($ins_opt['ins-opt-phone']); ?></h6>	
</div>
</div>
<?php } ?>

<?php 
  $header_top_email = $ins_opt['ins-opt-topbar-email'];
  if ($header_top_email == 1) {  ?>
<div class="header-top-module">
<div class="header-top-info-data header-top-email">
<span class="header-top-icon-container"><i class="ti-email header-top-info-icon"></i></span>
<h6><?php echo esc_html($ins_opt['ins-opt-email']); ?></h6>
</div>
</div>
<?php } ?>

<?php 
  $header_top_address = $ins_opt['ins-opt-topbar-address'];
  if ($header_top_address == 1) {  ?>
<div class="header-top-module">
<div class="header-top-info-data header-top-address">
<span class="header-top-icon-container"><i class="ti-location-pin header-top-info-icon"></i></span>
<h6><?php echo esc_html($ins_opt['ins-opt-address']); ?></h6>
</div>
</div>
<?php } ?>

<?php 
  $header_top_hours = $ins_opt['ins-opt-topbar-hours'];
  if ($header_top_hours == 1) {  ?>
<div class="header-top-module">
<div class="header-top-info-data header-top-hours">
<span class="header-top-icon-container"><i class="ti-time header-top-info-icon"></i></span>
<h6><?php echo esc_html($ins_opt['ins-opt-hours']); ?></h6>
</div>
</div> 
<?php } ?>

</div>
</div>

<div class="header-top-social-main-holder">
<div class="header-top-modules-holder">
<div class="header-top-module" style="border-right:none; padding-right:0;">
<ul class="header-top-social-icon clearfix">
<?php 
  $social_fb = $ins_opt['ins-opt-facebook'];
  if (isset($social_fb) && $social_fb != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-facebook']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<?php } ?>
																					<?php 
  $social_twitter = $ins_opt['ins-opt-twitter'];
  if (isset($social_twitter) && $social_twitter != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-twitter']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<?php } ?>									

<?php 
  $social_gp = $ins_opt['ins-opt-g-plus'];
  if (isset($social_gp) && $social_gp != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-g-plus']); ?>"><i class="fa fa-google-plus"></i></a></li>
<?php } ?>

<?php 
  $social_insta = $ins_opt['ins-opt-instagram'];
  if (isset($social_insta) && $social_insta != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-instagram']); ?>"><i class="fa fa-instagram"></i></a></li>
<?php } ?>

<?php 
  $social_pinterest = $ins_opt['ins-opt-pinterest'];
  if (isset($social_pinterest) && $social_pinterest != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-pinterest']); ?>"><i class="fa fa-pinterest-p"></i></a></li>
<?php } ?>
	
<?php 
  $social_linkedin = $ins_opt['ins-opt-linkedin'];
  if (isset($social_linkedin) && $social_linkedin != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-linkedin']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<?php } ?>

<?php 
  $social_skype = $ins_opt['ins-opt-skype'];
  if (isset($social_skype) && $social_skype != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-skype']); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
<?php } ?>

<?php 
  $social_youtube = $ins_opt['ins-opt-youtube'];
  if (isset($social_youtube) && $social_youtube != '') {  ?>
  <li><a target="_blank" href="<?php echo esc_html($ins_opt['ins-opt-youtube']); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
<?php } ?>
              
</ul>
</div>

<?php 
  $header_top_button = $ins_opt['ins-opt-topbar-button'];
  if ($header_top_button == 1) {  ?>
<div class="header-top-module header-top-button-module"><a href="<?php echo esc_url($ins_opt['ins-opt-button-link']); ?>" class="header-top-button"><?php echo esc_html($ins_opt['ins-opt-button-text']); ?></a>
</div>
<?php } ?>

</div>
</div>
</div>
<?php } ?>

<div class="inv-navigation-outer">
	<nav class="inv-main-header bottom-header inv-header-wrap <?php echo esc_attr($header_separator); ?>" style="height: 100%; line-height: <?php echo esc_attr($main_menu_height); ?>px;">
	<div class="container">
	<div class="row">
	<div class="inv-header-inner display-flex">

<?php if($logo_left == 2){ ?>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 header-top-menu-right inv-main-header-right desktop-menu " style="text-align: right;">
		<?php wp_nav_menu( array( 'theme_location' => 'top-left-menu' , 'menu_id'=> 'primary_menu') ); ?>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 logo 14-logo" style="text-align: center;"> <?php do_action( 'insignia_branding_header' ); ?></div>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 header-top-menu-right inv-main-header-right desktop-menu" >
		<?php wp_nav_menu( array( 'theme_location' => 'top-right-menu' , 'menu_id'=> 'primary_menu') ); ?>
	</div>

<?php } else{ ?>

	<div class="inv-header-logo-holder col-md-3 col-lg-3">
		<div class="inv-logo-wrap">
 			<?php do_action( 'insignia_branding_header' ); ?>
		</div>

</div>

	<div class="header-top-menu-right inv-main-header-right desktop-menu text-right col-md-9 col-lg-9">
		<?php
if (has_nav_menu('primary-menu')){
 wp_nav_menu( array( 'theme_location' => 'primary-menu' , 'menu_id'=> 'primary_menu') );
} else {
echo '<div class="no-menu-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
} ?>
	</div>
<?php } ?>

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
$topbar  = $ins_opt['ins-opt-topbar-switcher'];
$main_menu_height = $ins_opt['ins-opt-menu-height'];
$topbar_height = $ins_opt['ins-opt-topbar-height'];
$header_posi = $ins_opt['opt_content_position'];

if($topbar == 1){
$fixer_height = $main_menu_height + $topbar_height ;
}else{
$fixer_height = $main_menu_height;
}
 if($header_posi == 1){ ?>
<div id="menu-fixer" style="height: <?php echo esc_attr($fixer_height); ?>px; max-height: <?php echo esc_attr($fixer_height); ?>px;"></div>
<?php } ?>
