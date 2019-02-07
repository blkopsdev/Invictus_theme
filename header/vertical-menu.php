<?php
global $ins_opt;
 ?>
<div id="mySidenav" class="sidenav sidenav-left">
  <div class="overlay-menu-open" id="nav-icon2" onclick="ddfullscreenmenu.togglemenu()">
</div>
<div class="left-overlay-menu-logo"> <?php do_action( 'insignia_branding_header' ); ?> </div>
<nav id="ddfullscreenmenu" class="ddoverlaymenu">
			<div id="ulwrapper">
				
<?php
if (has_nav_menu('primary-menu')){
   wp_nav_menu( array( 'container'=> false,'theme_location' => 'primary-menu','items_wrap'=> '<ul id="fullscreenmenu-ul" class="fullscreenmenu-ul">%3$s</ul>' ) ); 
} else {
echo '<div class="no-menu-assigned">' . esc_html__('Assign a menu', 'invictus') . '</div>';
} ?>
			</div>
</nav>
</div> 


	<div class="sidenav-left-mobile-menu-wrapper">
	<div class="container">
	<div class="row">
	<div class="inv-header-inner">

	<div class="inv-header-logo-holder col-md-3 col-lg-3">
		<div class="inv-logo-wrap">
 			<?php do_action( 'insignia_branding_header' ); ?>
		</div>

</div>


 <!-- Mobile menu -->
  <div class="sidenav-left-mobile-menu">
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

		</div>
		</div>
</div>
</div>