<?php
global $ins_opt;
$myimage = $ins_opt['insignia-logo']['url'];

$header_posi = $ins_opt['opt_content_position']; 
if($header_posi == 2){
$posi_class = "absolute-header";
} 

?>
<div class="header-14-wrapper <?php echo esc_attr($posi_class); ?>">
<div class="header-14-topbar col-lg-12 col-md-12 col-sm-12 col-xs-12 top-header ">
<div class="header-14-top-bar-left col-lg-2 col-md-2 col-xs-12">
                                 <p><i class="fa fa-phone"></i><span><?php echo esc_html($ins_opt['ins-opt-phone']); ?></span></p>
                                    </div>

<div class="header-14-top-bar-left col-lg-3 col-md-3 col-xs-12">
                                  <p><i class="fa fa-envelope-o"></i><span><?php echo esc_html($ins_opt['ins-opt-email']); ?></span></p>
                                    </div>

<div class="header-14-top-bar-left col-lg-5 col-md-5 col-xs-12">
                                   <p><i class="fa fa-location-arrow"></i><span><?php echo esc_html($ins_opt['ins-opt-address']); ?></span></p>
                                    </div>
<div class="header-14-top-bar-right col-lg-2 col-md-2 col-xs-12">
<ul>
<li class="h12-social-list">

                 <ul class="header-14-social">
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
                        </li>
</ul>
</div>

</div>
<div class="clearfix"></div>
	<nav class="header-14 bottom-header">
	<div class="container">
	<div class="row">
<?php $logo_left = $ins_opt['opt_logo_position']; ?>
<?php if($logo_left == 2){ ?>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 header-top-menu-right header-14-right desktop-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'left-menu' , 'menu_id'=> 'primary_menu') ); ?>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 logo 14-logo" style="text-align:center;"> <?php do_action( 'insignia_branding_header' ); ?></div>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 header-top-menu-right header-14-right desktop-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'right-menu' , 'menu_id'=> 'primary_menu') ); ?>
	</div>

<?php } else{ ?>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 logo 14-logo"> <?php do_action( 'insignia_branding_header' ); ?></div>

	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 header-top-menu-right header-14-right desktop-menu" style="text-align: right;">
		<?php
	if (has_nav_menu('primary-menu')) {
	wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class'=> 'menu default-menu-list', 'menu_id'=> 'primary_menu' ) ); 
	} else{
	echo '<div class="no-menu-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
	}
?>
	</div>
<?php } ?>

 <!-- Mobile menu -->
  <div class="header-one-mobile">
<div class="demo-1">	
			
	<!-- Codrops top bar -->
	

		<div class="column">
			 <?php
if (has_nav_menu('primary-menu')){ ?>
			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger"><?php echo esc_html_e('Open Menu','invictus'); ?></button>
<?php
	
 wp_nav_menu( array( 'container'=> false,'theme_location' => 'primary-menu','menu_class'=> 'menu dl-menu' ) ); ?>
			</div><!-- /dl-menuwrapper --> <?php
} else {
echo '<div class="menu-not-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
} ?><!-- /dl-menuwrapper -->
		</div>
		</div>
</div>
<!-- End Mobile menu --> 
            
		</div>
        </div>
      </nav>
    </div>