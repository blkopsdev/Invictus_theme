<?php

/***
*
*portfolio load more
*
****/
	
function insignia_column_layout_portfolio_ajax(){

global $port_out, $port_gap1, $port_cat1, $port_overlay_color1, $title_size1, $title_color1, $category_size1, $category_color1, $port_ppp, $page, $port_on_hover1;

$port_out = $_POST['port_out'];
$port_cat1 = $_POST['port_cat1'];

$port_overlay_color1 = $_POST['port_overlay_color1'];
$title_size1 = $_POST['title_size1'];
$title_color1 = $_POST['title_color1'];
$category_size1 = $_POST['category_size1'];
$category_color1 = $_POST['category_color1'];
$port_gap1 = $_POST['port_gap1'];
$port_on_hover1 = $_POST['port_on_hover1'];

    $port_ppp = (isset($_POST["port_ppp"])) ? $_POST["port_ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;


    header("Content-Type: text/html");
    
$selected_cat = explode(',', $port_cat1);
 if(empty($port_cat1)){
$args = array(
        'suppress_filters' => true,
        'post_type' => 'portfolio',
        'posts_per_page' => $port_ppp,
        'paged'    => $page,
    );
} else{
        $args = array(
        'suppress_filters' => true,
        'post_type' => 'portfolio',
        'posts_per_page' => $port_ppp,
        'paged'    => $page,
	'tax_query' => array(
		array(
			'taxonomy' => 'portfolio_category',
			'field'    => 'slug',
		 'terms' => $selected_cat
		),
	),
    );
}


     $loop = new WP_Query($args);
	  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();

   


	ob_start();
if( $port_out == 'port_grid2' || $port_out == 'port_grid3' || $port_out == 'port_grid4'){
        get_template_part( 'templates/portfolio/archive/portfolio','grid-content');
}else{
        get_template_part( 'templates/portfolio/archive/portfolio','masonry-content');
}
	$return_html .= trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));
	
	endwhile;
	endif;
	wp_reset_postdata(); 

	die($return_html);
}

add_action('wp_ajax_nopriv_insignia_column_layout_portfolio_ajax', 'insignia_column_layout_portfolio_ajax');
add_action('wp_ajax_insignia_column_layout_portfolio_ajax', 'insignia_column_layout_portfolio_ajax');




/***
*
*Blog load more
*
****/
	
function insignia_column_layout_post_ajax(){

global  $blog_out, $post_cat1, $blog_no_posts1, $blog_load_more1, $blog_gap1, $blog_style1;
$blog_out = $_POST['blog_layout'];
$post_cat1 = $_POST['cat'];
$blog_gap1 = $_POST['blog_gap1'];
$blog_style1 = $_POST['blog_style1'];

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['page_number'])) ? $_POST['page_number'] : 1;

    header("Content-Type: text/html");
    if(empty($post_cat1)){
        $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );
} else{
        $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'category_name' => $post_cat1,
        'paged'    => $page,
    );
}

    $loop = new WP_Query($args);
	  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();


	ob_start();
if( $blog_out == 'Grid2' || $blog_out == 'Grid3' || $blog_out == 'Grid4'){
	get_template_part( 'blog/archive/blog','grid-content');
} else{
	get_template_part( 'blog/archive/blog','masonry-content');
}
	$return_html .= trim(preg_replace('/\s\s+/', ' ', ob_get_clean()));

	endwhile;
	endif;
	wp_reset_postdata(); 

	die($return_html);
}

add_action('wp_ajax_nopriv_insignia_column_layout_post_ajax', 'insignia_column_layout_post_ajax');
add_action('wp_ajax_insignia_column_layout_post_ajax', 'insignia_column_layout_post_ajax');