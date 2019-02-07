   .xyz{
      display:block
       }

<?php
global $ins_opt;
?>


/*Preloader*/
.se-pre-con { 
	position: fixed;
	left: 0; top: 0; 
	z-index: 999; 
	width: 100%; 
	height: 100%; 
	overflow: visible;
	<?php if(isset($ins_opt['ins-opt-preload-bg-clr']) && !empty($ins_opt['ins-opt-preload-bg-clr'])){ ?> 
	background-color: <?php echo $ins_opt['ins-opt-preload-bg-clr']; ?>;
	<?php } ?>
	<?php if(isset($ins_opt['ins-opt-preload-img'][ 'url' ]) && !empty($ins_opt['ins-opt-preload-img'][ 'url' ])){ ?>
	background-image: url(<?php echo $ins_opt['ins-opt-preload-img'][ 'url' ]; ?>);
	<?php } ?>
	background-repeat: no-repeat;
	background-position: center center; 
}


/*Page Header css*/

.subpage-banner-wrapper{
	height:  <?php echo $ins_opt['ins-opt-header-height']; ?> ;
        opacity: <?php echo $ins_opt['ins-opt-header-opacity']; ?>;
}
.ins-breadcrumbs .current{
	color:<?php echo $ins_opt['ins-opt-header-typography']['color']; ?>;
}
.ins-breadcrumbs {
        text-align:<?php echo $ins_opt['ins-opt-header-typography']['text-align']; ?>;
}


.archive-port-header{
	height:  <?php echo $ins_opt['ins-opt-archive-port-header-height']; ?> ;
}


/*Single Product Header image css*/
.shop-page-header{
	height:  <?php echo $ins_opt['ins-opt-woo-header-height']; ?> ;
}

/*shop page Header image css*/
.shop-page-archive-header{
	height:  <?php echo $ins_opt['ins-opt-woo-shop-header-height']; ?> ;
}

/***Archive Blog***/
.archive-blog-header{
	height:  <?php echo $ins_opt['ins-opt-archive-blog-header-height']; ?> ;
}


/***Single Blog***/
.single-blog-header{
	<?php if(!empty($ins_opt['ins-opt-blog-header-image']['url']))
        { ?>
         background-image: url(' <?php echo $ins_opt['ins-opt-blog-header-image']['url']; ?> ');
	<?php } ?>
}

/*Event*/
.single-event-header{
	height:  <?php echo $ins_opt['ins-opt-single-event-header-height']; ?> ;
}
.archive-event-header{
	height:  <?php echo $ins_opt['ins-opt-archive-event-header-height']; ?> ;
}


/***** background image *****/
.sp-tabs-main li.vc_tta-tab.vc_active a{
	background-color:  <?php echo $ins_opt['ins-opt-pc']; ?> !important;
}

.inv-logo-wrap .inv-main-header-logo-img, .inv-logo-wrap .inv-mobile-header-logo-img, .retina-main-logo, .retina-mobile-logo{
    max-height: <?php echo $ins_opt['ins-opt-menu-height']; ?>px;
}

<?php
if(!empty($ins_opt['menu-breakpoint'])){
$breakpoint = $ins_opt['menu-breakpoint'];
}else{
$breakpoint = '1000';
}
?>

@media(min-width:<?php echo $breakpoint; ?>px){
.retina-mobile-logo{
    display:none !important;
}

}
@media(max-width:<?php echo $breakpoint; ?>px){
.desktop-menu{
    display:none;
}
.invert ul.sub-sub-menu{
    border-right:none;
}
#menu-fixer{
    display:none;
}
.inv-mobile-header-logo-img{
    display: block;
}
.inv-main-header-logo-img, .inv-fixed-header-logo-img, .inv-standard-header.sticky-header-enabled.fixed-menu .retina-fixed-logo{
    display:none !important;
}
.inv-header-inner{
    min-height: <?php echo $ins_opt['ins-opt-menu-height']; ?>px;
    display: flex;
}
.inv-main-header-topbar {
    display: none;
}
.absolute-header {
    position: initial;
    min-width: 100%;

}
.inv-top-center-logo-header .inv-header-logo-holder{
border:none;
}
}
@media(max-width:<?php echo $breakpoint; ?>px){
.header-one-mobile {
    display: block !important;
}
.inv-top-center-logo-header .inv-header-logo-holder{
    height:auto !important;
}
.retina-main-logo{
    display: none !important;
}
}
@media(min-width:<?php echo $ins_opt['menu-breakpoint']; ?>px){
.sub-menu-full-width ul.menu-depth-2 {
    display: block !important;
}
}


<?php
$main_menu_height = $ins_opt['ins-opt-menu-height'];
$topbar_height = $ins_opt['ins-opt-topbar-height'];
$main_menu_line_height = $main_menu_height - 1;
?>


.cd-nav .cd-contact-info a, .cd-nav .cd-contact-info li, .header_one_socials a i, li.header-one-button a, .header_two_socials a i, .top_bar_info-seven li i, li.h5-btn i,.header_nine_socials a i{
color: <?php echo $ins_opt['ins-opt-typography-menu']['color']; ?>;
}
.top-header ul li, .header7-btn a, .top_bar_info_wr_eight .top_bar_info_eight li span, .header-twelve-top-bar-left p, .top_bar_info_wr_five .top_bar_info_five li span, li.h5-btn a, li.h3-btn a{
font-family: <?php echo $ins_opt['ins-opt-typography-menu']['font-family']; ?>;
}
.current-menu-item{
color: <?php echo $ins_opt['ins-opt-menu-hover']; ?> !important;
}
.topbar-enabled.sticky-header-enabled.fixed-menu {
    -webkit-transform: translateY(-<?php echo $ins_opt['ins-opt-topbar-height']; ?>px);
    -moz-transform: translateY(-<?php echo $ins_opt['ins-opt-topbar-height']; ?>px);
    -o-transform: translateY(-<?php echo $ins_opt['ins-opt-topbar-height']; ?>px);
    transform: translateY(-<?php echo $ins_opt['ins-opt-topbar-height']; ?>px);
}

.inv-top-center-logo-header.sticky-header-enabled.fixed-menu{
    -webkit-transform: translateY(-<?php echo $ins_opt['ins-opt-logo-wrapper-height']; ?>px);
    -moz-transform: translateY(-<?php echo $ins_opt['ins-opt-logo-wrapper-height']; ?>px);
    -o-transform: translateY(-<?php echo $ins_opt['ins-opt-logo-wrapper-height']; ?>px);
    transform: translateY(-<?php echo $ins_opt['ins-opt-logo-wrapper-height']; ?>px);
}
.header-four-logo img{
    max-height: <?php echo $ins_opt['ins-opt-hb-logo-height']; ?>px;
}



<?php if(isset($ins_opt['insignia-retina-mobile-header-logo'][ 'url' ]) && !empty($ins_opt['insignia-retina-mobile-header-logo'][ 'url' ])){ ?>
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (min-resolution: 1.5dppx), (max-width:<?php echo $breakpoint; ?>px) {
.retina-mobile-logo {display: block;}
.inv-mobile-header-logo-img, .retina-main-logo {display: none;}
}
<?php } ?>


<?php if(isset($ins_opt['insignia-retina-fixed-header-logo'][ 'url' ]) && !empty($ins_opt['insignia-retina-fixed-header-logo'][ 'url' ])){ ?>
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (min-resolution: 1.5dppx) {
.inv-standard-header.sticky-header-enabled.fixed-menu .retina-fixed-logo {display: block !important;}
.inv-standard-header.sticky-header-enabled.fixed-menu .inv-fixed-header-logo-img {display: none;}
}
<?php } ?>

<?php if(isset($ins_opt['insignia-retina-logo'][ 'url' ]) && !empty($ins_opt['insignia-retina-logo'][ 'url' ])){ ?>
@media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi), (min-resolution: 1.5dppx) {
.retina-main-logo {display: block;}
.inv-main-header-logo-img {display: none !important;}
}
<?php } ?>