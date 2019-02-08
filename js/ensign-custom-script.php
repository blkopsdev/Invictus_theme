<?php
global $ins_opt;

global $ins_opt, $blog_out, $post_cat1, $blog_no_posts1, $blog_load_more1, $blog_gap1, $blog_style1, $port_cat1, $port_out, $port_no_posts1, $port_load_more1, $port_overlay_color1, $title_size1, $title_color1, $category_size1, $category_color1, $port_on_hover1, $port_gap1;


$break_point = $ins_opt['menu-breakpoint'];

if (empty( $break_point )) {
$break_point = "900";
}
?>




jQuery(window).resize(function () {
     $menu = jQuery('.menu');
     $submenu = jQuery('.sub-menu');
     $dlsubmenu = jQuery('.dl-submenu');
     $subsubmenu = jQuery('.sub-sub-menu');


 if(window.innerWidth <= <?php echo esc_js($break_point); ?>){
       $submenu.addClass('dl-submenu');
       $subsubmenu.addClass('dl-submenu');
       $submenu.removeClass('sub-menu'); 
       jQuery('.sub-nav > ul').unwrap();
}
else{
       $dlsubmenu.removeClass('dl-submenu');
       $subsubmenu.removeClass('dl-submenu');
       $dlsubmenu.addClass('sub-menu');
       if ( jQuery( ".sub-nav" ).length ) { }
       else{
       jQuery( ".menu-depth-1" ).wrap( "<div class='sub-nav'></div>" );
       }
}
});


jQuery(document).ready(function () {
     $menu = jQuery('.menu');
     $submenu = jQuery('.sub-menu');
     $dlsubmenu = jQuery('.dl-submenu');
     $subsubmenu = jQuery('.sub-sub-menu');

 if(window.innerWidth <= <?php echo esc_js($break_point); ?>){
       $submenu.addClass('dl-submenu');
       $subsubmenu.removeClass('dl-submenu');
       $submenu.removeClass('sub-menu'); 
       jQuery('.sub-nav > ul').unwrap();
}
else{
       $dlsubmenu.removeClass('dl-submenu');
       $subsubmenu.addClass('dl-submenu');
       $dlsubmenu.addClass('sub-menu');
       if ( jQuery( ".sub-nav" ).length ) { }
       else{
       jQuery( ".menu-depth-1" ).wrap( "<div class='sub-nav'></div>" );
       }
}
});




<?php  
 
 if ( !empty ( $ins_opt['menu-breakpoint'] )  ) {?>
 
jQuery(window).scroll(function() {
        if (jQuery(window).width() >= <?php echo esc_js($break_point); ?> ) { 
if (jQuery(this).scrollTop() > 100){  
    jQuery('.inv-main-header-wrapper').hide();
    jQuery('.header-sticky-logo').show();
  }
  
  else{
    jQuery('.inv-main-header-wrapper').show();
    jQuery('.header-sticky-logo').hide();

  }
}

});


 <?php }?>



<?php

/***
*
*Portfolio load more
*
****/

if (empty( $port_no_posts1)) {
$port_no_posts1= "3";
}
?>


var port_ppp = <?php echo esc_js($port_no_posts1); ?> // Post per page

var pagenum = 1;


function multi_column_load_portfolio(){

  pagenum++; 



    var str = '&pageNumber=' + pagenum + '&port_out=' + '<?php echo esc_js($port_out); ?>' + '&port_cat1=' + '<?php echo esc_js($port_cat1); ?>' + '&port_ppp=' + port_ppp + '&port_overlay_color1=' + '<?php echo esc_js($port_overlay_color1); ?>' + '&title_size1=' + '<?php echo esc_js($title_size1); ?>' + '&title_color1=' + '<?php echo esc_js($title_color1); ?>' + '&category_size1=' + '<?php echo esc_js($category_size1); ?>' + '&category_color1=' + '<?php echo esc_js($category_color1); ?>' + '&port_gap1=' + '<?php echo esc_js($port_gap1); ?>' + '&port_on_hover1=' + '<?php echo esc_js($port_on_hover1); ?>' + '&action=insignia_column_layout_portfolio_ajax';
    jQuery.ajax({
        type: "POST",
        dataType: "html",
       url: "<?php echo admin_url('admin-ajax.php'); ?>",
        data: str,
        success: function(data){

            var $data = jQuery(data);

            if($data.length){

<?php if( $port_out == 'port_masonry2' || $port_out == 'port_masonry3' || $port_out == 'port_masonry4'){ ?>
 setTimeout(function() {
		jQuery(".portfolio-article-holder").isotope( 'insert', $data);
		jQuery(".portfolio-article-holder").isotope( 'reLayout', $data);
}, 500);
<?php } else{ ?>
		jQuery(".portfolio-article-holder").append($data);

<?php } ?>
    slickCarousel();
                jQuery("#portfolio_load_more_button").attr("disabled",false);
jQuery('.loading_button').show();
jQuery('.post_loading').hide();
jQuery('#infinite_scroll_posts_archive').hide();

            } else{
                jQuery("#portfolio_load_more_button").attr("disabled",true);
jQuery('#portfolio_load_more_button').hide();
jQuery('#infinite_scroll_posts_archive').hide();
            } 


        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    
    return false;
}
<?php 
if ($port_load_more1 == 'ajax_button'){
?>
jQuery("#portfolio_load_more_button").on("click",function(){ // When btn is pressed.
    jQuery("#portfolio_load_more_button").attr("disabled",true); // Disable the button, temp.
jQuery('.loading_button').hide();
jQuery('.post_loading').show();
    multi_column_load_portfolio();
});

<?php } elseif($port_load_more1 == 'infinite'){ ?>
jQuery(window).on('scroll', function () {

    var win = jQuery(window);

    if (jQuery(window).scrollTop() + jQuery(window).height()  >= jQuery(document).height() - 400) {
        multi_column_load_portfolio();
    }
});
<?php } ?>

    
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    



<?php

/***
*
*Blog load more
*
****/

if (empty( $blog_no_posts1)) {
$blog_no_posts1= "3";
}
?>

var ppp = <?php echo esc_js($blog_no_posts1); ?> // Post per page



var page_number = 1;



function multi_column_load_posts(){
    page_number++; 

    var str = '&page_number=' + page_number + '&blog_layout=' + '<?php echo esc_js($blog_out); ?>' + '&cat=' + '<?php echo esc_js($post_cat1); ?>' + '&ppp=' + ppp + '&blog_gap1=' + '<?php echo esc_js($blog_gap1); ?>' + '&blog_style1=' + '<?php echo esc_js($blog_style1); ?>' + '&action=insignia_column_layout_post_ajax';
    jQuery.ajax({
        type: "POST",
        dataType: "html",
        url: "<?php echo admin_url('admin-ajax.php'); ?>",
        data: str,
        success: function(data){
            var $data = jQuery(data);
            if($data.length){

jQuery(".inv-blog-element-article-holder").isotope( 'insert', $data);

    slickCarousel();

                jQuery("#default_more_posts_archive").attr("disabled",false);
jQuery('.loading_button').show();
jQuery('.post_loading').hide();
jQuery('#infinite_scroll_posts_archive').hide();
            } else{
                jQuery("#default_more_posts_archive").attr("disabled",true);
jQuery('#default_more_posts_archive').hide();
jQuery('#infinite_scroll_posts_archive').hide();
            } 


        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
}

<?php 
if ($blog_load_more1 == 'ajax_button'){
?>
jQuery("#default_more_posts_archive").on("click",function(){ // When btn is pressed.

    jQuery("#default_more_posts_archive").attr("disabled",true); // Disable the button, temp.
jQuery('.loading_button').hide();
jQuery('.post_loading').show();
   
 multi_column_load_posts();

});

<?php } elseif($blog_load_more1 == 'infinite'){ ?>
jQuery(window).on('scroll', function () {

    var win = jQuery(window);
    if (jQuery(window).scrollTop() + jQuery(window).height()  >= jQuery(document).height() - 500) {
jQuery('.loading_button').show();
        multi_column_load_posts();
    }
});
<?php } ?>

jQuery(document).on('ready', function() {
jQuery('.post_loading').hide();
jQuery('#infinite_scroll_posts_archive').show();
});



