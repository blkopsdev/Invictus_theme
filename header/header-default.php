<?php
global $ins_opt;
$myimage = $ins_opt['insignia-logo']['url'];
$header_posi = $ins_opt['opt_content_position']; 

?>
<div class="header-nine-wrapper">

      <nav class="header-default bottom-header">
        <div class="container">
          <div class="row">
          <div class="inv-header-inner display-flex">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 nine-logo"> <?php do_action( 'insignia_branding_header' ); ?> </div>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 clearfix">
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
} ?>


		</div>
		</div>
</div>
<!-- End Mobile menu --> 
			<div class="header-top-menu-right inv-main-header-right desktop-menu">
	<?php
	if (has_nav_menu('primary-menu')) {
	wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class'=> 'menu default-menu-list', 'menu_id'=> 'primary_menu' ) ); 
	} else{
	echo '<div class="no-menu-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
	}
?>
</div>

            </div>
 </div>
 </div>
        </div>
      </nav>
    </div>