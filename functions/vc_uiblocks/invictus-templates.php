<?php

add_filter( 'vc_load_default_templates', 'invictus_reset_default_templates' ); // Hook in
function invictus_reset_default_templates( $data ) {
	// This will remove all default templates. Basically you should use native PHP functions to modify existing array and then return it.
    return array(); 
}

function invictus_add_default_templates() {

	$templates = invictus_vc_templates();
	return array_map( 'vc_add_default_templates', $templates );
}
invictus_add_default_templates();

function invictus_vc_templates(){
	
	$templates = array();
	
	//Construction
	//About 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'About-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about1.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][vc_column_text]
<div class="cns-title-main-wrapper">

<span class="italic-font">About Invictus Builders</span>
<h2>Specializing in the construction of all types of eatery establishments</h2>
</div>
Invictus Builders Construction has been serving the for over 20 years. We take pride in our attention to detail and high level of customer service. Our goal is to make the building process as seamless and stress free as possible for our clients.[/vc_column_text][vc_column_text css=".vc_custom_1500623704072{margin-bottom: 20px !important;}"]
<div class="cns-list-box">
<div class="cns-list-title">
<h4>All Kinds of Construction Work</h4>
Lorem ipsum dolor sit amet, alubique dictas in semei tanta argu mentum. Mundi eu sea, liber option. Lorem ipsum dolor sit amet, alubique dictas in semei tanta argu mentum.

</div>
</div>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="Brick Work,Brick Pointing,Sidewalk Cement,Steam Cleaning" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" extra_class="icon-list-font-weight" icon_color="#fdad00" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="Brick Work,Brick Pointing,Sidewalk Cement,Steam Cleaning" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" extra_class="icon-list-font-weight" icon_color="#fdad00" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="Brick Work,Brick Pointing,Sidewalk Cement,Steam Cleaning" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" extra_class="icon-list-font-weight" icon_color="#fdad00" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_single_image image="198" img_size="full" alignment="center"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service1.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1514527284507{background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/07/bg-img-compressed.jpg?id=515) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper cns-white-title centered-box">

<span class="italic-font">History of Invictus Builders</span>
<h2>We have 20 Years of Experience</h2>
</div>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<div class="centered-box">
<p class="white-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>

</div>
[/vc_column_text][insignia_button button_style="seven" btn_text="Watch Intro Video" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#2b2b2b" bg_color="#fdad00" border_color="#fdad00" arrow_color="#ffffff" arrow_bg_color="#2b2b2b"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][vc_empty_space height="100px"][/vc_column][/vc_row][vc_row el_class="cns-overlay-section"][vc_column][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1500641457797{padding-right: 21px !important;padding-left: 21px !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="201" image_title="GENERAL CONSTRUCTION" image_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor.

" enable_button="1" btn_text="Read more" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-400" title_color="#343434" text_color="#767676" btn_color="#fdad00" ins_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1500641464894{padding-right: 21px !important;padding-left: 21px !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="77" image_title="RENOVATION PROJECTS" image_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor.

" enable_button="1" btn_text="Read more" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-400" title_color="#343434" text_color="#767676" btn_color="#fdad00" ins_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1500641470187{padding-right: 21px !important;padding-left: 21px !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="200" image_title="ELECTRICAL SYSTEM" image_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor.

" enable_button="1" btn_text="Read more" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-400" title_color="#343434" text_color="#767676" btn_color="#fdad00" ins_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio1.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1508151804599{background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/07/OI8AC90-2.jpg?id=56) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper cns-white-title centered-box">

<span class="italic-font">my projects</span>
<h2>Our Latest Works</h2>
</div>
[/vc_column_text][vc_empty_space height="30px"][vc_row_inner][vc_column_inner][portfolio port_layout="port_grid4" port_on_hover="layout_2" port_cat="" port_filter="" port_no_posts="8" port_overlay_color="#f4f4f4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Blog 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog1.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1500729760854{background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/07/cns-blog-bg.jpg?id=184) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper centered-box">

<span class="italic-font">Our Blog</span>
<h2>Recent News and Blog</h2>
</div>
[/vc_column_text][vc_empty_space height="30px"][vc_row_inner][vc_column_inner][blog_news blog_layout="Grid2" blog_style="layout_6" post_cat="work" blog_no_posts="4" blog_gap="40"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter1.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504872020374{background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/09/construction-img-7.png?id=224) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper cns-white-title centered-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">

<span class="italic-font">Invictus Builders</span>
<h2>Have a Look at numbers</h2>
</div>
[/vc_column_text][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][milestone title="Projects" number="375" add_icon="1" icon_layout="ins-count-icon" count_layout="ins-counter-icon-align-left" icon_type="themify" icon_themify="ti-brush-alt" align="text-left" text_transform="text-transform-none" icon_size="50" num_size="33" title_size="21" number_font_weight="default" title_font_weight="font-weight-500" icon_color="#fdad00" num_color="#f5f5f5" title_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][milestone title="Employees" number="50" add_icon="1" icon_layout="ins-count-icon" count_layout="ins-counter-icon-align-left" icon_type="themify" icon_themify="ti-hummer" align="text-left" text_transform="text-transform-none" icon_size="50" num_size="33" title_size="21" number_font_weight="default" title_font_weight="font-weight-500" icon_color="#fdad00" num_color="#f5f5f5" title_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][milestone title="Employees" number="15" add_icon="1" icon_layout="ins-count-icon" count_layout="ins-counter-icon-align-left" icon_type="themify" icon_themify="ti-cup" align="text-left" text_transform="text-transform-none" icon_size="50" num_size="33" title_size="21" number_font_weight="default" title_font_weight="font-weight-500" icon_color="#fdad00" num_color="#f5f5f5" title_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][milestone title="Customers" number="700" add_icon="1" icon_layout="ins-count-icon" count_layout="ins-counter-icon-align-left" icon_type="themify" icon_themify="ti-user" align="text-left" text_transform="text-transform-none" icon_size="50" num_size="33" title_size="21" number_font_weight="default" title_font_weight="font-weight-500" icon_color="#fdad00" num_color="#f5f5f5" title_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][insignia_button button_style="seven" btn_text="View all Services" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#2b2b2b" bg_color="#fdad00" border_color="#fdad00" arrow_color="#ffffff" arrow_bg_color="#2b2b2b"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team1.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper centered-box">

<span class="italic-font">Invictus Builders</span>
<h2>Our Creative Team</h2>
</div>
[/vc_column_text][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="John Doe"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Daniel Robert"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Alex Anderson"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Robert Reed"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Testimonials 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial1.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504870281875{background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/07/con-tm-bg.jpg?id=186) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="70px"][testimonial testimonial_layout="Second Option" autoplay="true" slidetoshow="3" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" title_font_color="#343434"][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients1.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="70px"][vc_column_text]
<div class="cns-title-main-wrapper">

<span class="italic-font">awards received 1995-2017</span>
<h2>Achievement of Invictus Builders</h2>
</div>
[/vc_column_text][vc_column_text]
<p class="">Invictus Builders Construction has been serving the for over 20 years. We take pride in our attention to detail and high level of customer service. Our goal is to make the building process as seamless and stress free as possible for our clients. We take pride in our attention to detail and high level of customer service. Our goal is to make the building process as seamless and stress free as possible for our clients.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTEtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTEtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTQtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTQtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTMtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTMtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTItMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjExJTJGaW52LWNsaWVudHMtaW1nLTItMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact1.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="15" css=".vc_custom_1513064191108{padding-right: 10% !important;padding-left: 10% !important;background-image: url(http://invictus.insigniats.in/construction/wp-content/uploads/2017/07/con-bg.jpg?id=182) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner equal_height="yes" gap="30"][vc_column_inner el_class="inv-construction-contact-section-inner" width="1/3" css=".vc_custom_1513064368056{padding-right: 30px !important;padding-left: 30px !important;background-color: #101010 !important;}"][vc_column_text]
<div class="cns-title-main-wrapper cns-white-title"><span class="italic-font">Get In Touch</span></div>
[/vc_column_text][vc_column_text]
<p class="white-text">Invictus Builders Construction has been serving the for over 20 years. We take pride in our attention to detail and high level of customer service.</p>
[/vc_column_text][insignia_simple_icon_list list_items="Insignia Technolabs India" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" icon_color="#fdad00" text_color="#f5f5f5" icon_fontawesome="fa fa-map-marker" css=".vc_custom_1522664637352{margin-bottom: 0px !important;}"][insignia_simple_icon_list list_items="example@yourdomain.com" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" icon_color="#fdad00" text_color="#f5f5f5" icon_fontawesome="fa fa-envelope-o" css=".vc_custom_1522664658098{margin-bottom: 0px !important;}"][insignia_simple_icon_list list_items="+91-999-888-7777" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="list-icon-border-none" icon_color="#fdad00" text_color="#f5f5f5" icon_fontawesome="fa fa-headphones"][insignia_social_icons color="colorful" border_radius="square" icon_size="regular" icon_align="left" twitter="#" facebook="#" linkedin="#" google-plus="#" youtube="#"][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner el_class="inv-construction-contact-section-inner" width="2/3" css=".vc_custom_1513064359975{padding-right: 25px !important;padding-left: 40px !important;background-color: #101010 !important;}"][vc_column_text]
<div class="cns-title-main-wrapper cns-white-title"><span class="italic-font">Leave a Comment</span></div>
[/vc_column_text][contact-form-7 id="4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

//coffee shop


$templates[] = $data;

	//Icon Boxes 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box1.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501758990248{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee-pattern-bg.png?id=42) !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="We use design to help businesses launch products, brands, and ideas." subtitle="Lorem ipsum dollar shit" align="text-center" separator="disable" heading_tag="h1" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#c7a17a"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="648" icon_align="text-left" icon_title="Macchiato" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#343434" separator_color="#c7a17a"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="647" icon_align="text-left" icon_title="Ristretto" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#343434" separator_color="#c7a17a"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="646" icon_align="text-left" icon_title="Capuccino" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#343434" separator_color="#c7a17a"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="645" icon_align="text-left" icon_title="Espresso" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#343434" separator_color="#c7a17a"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections1.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501760981261{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee3.jpg?id=10) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/3" css=".vc_custom_1501760305524{margin-bottom: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1511853210850{margin-bottom: 0px !important;}"]
<div class="coffee-hours-wrapper sc-bg" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="600" data-aos-delay="200">
<div class="coffee-hours-inner">
<div class="coffee-hours-title">
<h3>opening hours</h3>
</div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Monday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">11:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Tuesday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">wednesday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">thursday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Friday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Saturday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 24:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Sunday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 24:00</span></span></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra1.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our delicious menu" subtitle="Lorem ipsum dollar shit" align="text-center" heading_tag="h1" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#c7a17a" separator_color="#c7a17a"][vc_empty_space height="45px"][vc_tta_tabs shape="square" color="black" spacing="" gap="35" alignment="center" active_section="1" el_class="coffee-menu-tab-holder"][vc_tta_section title="Coffee" tab_id="1501765363867-82bb43b9-e436"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508850214879{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">White chocolate mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Vanilla Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.35</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$1.50</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508850363112{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caramel Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caramel Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$5.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508850408688{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Espresso Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.30</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Steamed milk / White Chocolate</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caffe Mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / Smoothed Layer of Foam</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Sliders" tab_id="1501765363880-81ed5b97-04c4"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851072862{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caramel Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caramel Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$5.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851101327{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Smoked Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Espresso Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.30</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Steamed milk / White Chocolate</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caffe Mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / Smoothed Layer of Foam</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851137375{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">White chocolate mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Vanilla Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.35</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$1.50</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Entrees" tab_id="1501765473972-fa2707ae-8ec1"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851173991{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Smoked Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Espresso Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.30</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Steamed milk / White Chocolate</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caffe Mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / Smoothed Layer of Foam</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851205124{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">White chocolate mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Vanilla Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.35</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$1.50</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851243934{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caramel Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caramel Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$5.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Desserts" tab_id="1501765488681-a7a93ea0-f958"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851308999{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">White chocolate mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Vanilla Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.35</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$1.50</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851337705{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Smoked Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Espresso Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.30</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Steamed milk / White Chocolate</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caffe Mocha</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / Smoothed Layer of Foam</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508851372228{margin-bottom: 0px !important;}"]
<div class="coffee-shop-tabs-wrapper">
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Caramel Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.39</span>

</div>
<div class="salon-tabs-content italic-font">Whipped Cream / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caramel Macchiato</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$5.69</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Espresso / Milk / butterscotch</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Iced Gingerbread Latte</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$2.65</span>

</div>
<div class="coffee-shop-tabs-content italic-font">Milk / Ice / Gingerbread Flavor</div>
</div>
<div class="coffee-shop-tabs-main">
<div class="coffee-shop-tabs-inner">
<h6 class="coffee-shop-tabs-title">Caffe Americano</h6>
<span class="coffee-shop-menu-dots"><!--hh--></span><span class="coffee-shop-tabs-price">$3.40</span>

</div>
<div class="coffee-shop-tabs-content italic-font">White Chocolate / butterscotch</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;




$templates[] = $data;

	//Image Gallery 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery1.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" gap="20" css=".vc_custom_1501848354575{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee-pattern-bg.png?id=42) !important;}"][vc_column][vc_empty_space][insignia_image_gallery design_style="masonry_4x" attach_images="168,128,130,165,129,131" hover_text="" gallery_gap="20" carousel_dots="true" carousel_arrows="true" carousel_infinite="true"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial2.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501832960782{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee-pattern-bg.png?id=42) !important;}"][vc_column][vc_empty_space height="40px"][insignia_section_heading title="Testimonials" subtitle="people say" align="text-center" heading_tag="h1" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#c7a17a" separator_color="#c7a17a"][vc_empty_space height="25px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][testimonial testimonial_layout="First Option" autoplay="false" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections2.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1501764475938{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee-bg4.jpg?id=63) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner width="2/3" css=".vc_custom_1501760305524{margin-bottom: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1511857669284{margin-bottom: 0px !important;}"]
<div class="coffee-offer-wrapper" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
<div class="coffee-offer-inner">
<div class="coffee-offer-big">
<h2 class="pc">Special Promotion For This Month!</h2>
</div>
<div class="coffee-offer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
<div class="coffee-offer-footnote-holder">
<h4 class="coffee-offer-footnote pc">call: + 91 123 456 7890</h4>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Blog 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog2.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501827247549{background-image: url(http://insignia-themes.website/coffee-shop/wp-content/uploads/2017/08/coffee-pattern-bg.png?id=42) !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Read our latest news" subtitle="lorem ipsum dollar" align="text-center" heading_tag="h1" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#c7a17a" separator_color="#c7a17a"][vc_empty_space height="35px"][vc_column_text]
<div class="centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][blog_news blog_layout="Grid2" blog_style="layout_5" post_cat="education" blog_no_posts="2" blog_gap="30"][vc_row_inner][vc_column_inner][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact2.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501842175054{background-color: #eae7de !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Book Your Table" subtitle="Reservation form" align="text-center" heading_tag="h1" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#c7a17a" separator_color="#c7a17a"][vc_empty_space height="35px"][vc_column_text]
<div class="centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][contact-form-7 id="4"][vc_row_inner][vc_column_inner][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

//Travel 

$templates[] = $data;

	//Extra 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra2.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_column_text]
<div class="travel-title-wrapper centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-sub-title"><span class="italic-font">invictus travel</span></div>
<div class="travel-main-title">
<h2>About Invictus</h2>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row][vc_column width="1/4" css=".vc_custom_1501939747530{padding-right: 15px !important;padding-left: 10px !important;}"][vc_column_text css=".vc_custom_1513079417005{margin-bottom: 0px !important;}"]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-23.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>France</h3>
</div>
</div>
[/vc_column_text][/vc_column][vc_column width="3/4" css=".vc_custom_1501939488457{padding-right: 10px !important;padding-left: 10px !important;}"][vc_row_inner css=".vc_custom_1501939642697{margin-bottom: 0px !important;}"][vc_column_inner width="3/4" css=".vc_custom_1501939493504{padding-right: 10px !important;padding-left: 10px !important;}"][vc_column_text css=".vc_custom_1513079427941{margin-bottom: 0px !important;}"]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-1.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>singapore</h3>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501939498129{padding-right: 10px !important;padding-left: 10px !important;}"][vc_column_text css=".vc_custom_1513079442875{margin-bottom: 25px !important;}"]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-343.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>Bhutan</h3>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1501939624697{padding-top: 0px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1501939505059{padding-right: 10px !important;padding-left: 10px !important;}"][vc_column_text]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-4.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>Dubai</h3>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1501939509696{padding-right: 10px !important;padding-left: 10px !important;}"][vc_column_text]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-5.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>Hongkong</h3>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1501939514577{padding-right: 10px !important;padding-left: 10px !important;}"][vc_column_text]
<div class="travel-service-box">
<div class="travel-service-img-box">
<figure><img src="./wp-content/uploads/2017/08/travel-sv-img-6.jpg" alt="travel-img" /></figure>
</div>
<div class="travel-service-text-box">
<h3>Japan</h3>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service2.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501933375808{background-image: url(http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/travel-bg.jpg?id=90) !important;}" el_class="fix-background"][vc_column][vc_empty_space height="60px"][vc_column_text]
<div class="travel-title-wrapper travel-white-title centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-sub-title"><span class="italic-font">invictus travel</span></div>
<div class="travel-main-title">
<h2 class="white-text">Tour types</h2>
</div>
</div>
[/vc_column_text][vc_empty_space height="25px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/4" css=".vc_custom_1501915649855{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="45" img_size="full" css=".vc_custom_1501915485054{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915614923{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_column_text css=".vc_custom_1501925525263{margin-bottom: 0px !important;}"]
<div class="travel-Packages-box travel-Packages-arrow-left">
<h4>Adventure places</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
<div class="travel-services-link"><a href="#">Explore More</a></div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915654143{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="46" img_size="full" css=".vc_custom_1501915495791{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915620636{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_column_text css=".vc_custom_1501916626809{margin-bottom: 0px !important;}"]
<div class="travel-Packages-box travel-Packages-arrow-left">
<h4>Honeymoon</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
<div class="travel-services-link"><a href="#">Explore More</a></div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner width="1/4" css=".vc_custom_1501915629969{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_column_text css=".vc_custom_1501916640952{margin-bottom: 0px !important;}"]
<div class="travel-Packages-box travel-Packages-arrow-right">
<h4>Wildlife Package</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
<div class="travel-services-link"><a href="#">Explore More</a></div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915658243{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_single_image image="47" img_size="full" css=".vc_custom_1501915521323{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915827312{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_column_text css=".vc_custom_1501916653552{margin-bottom: 0px !important;}"]
<div class="travel-Packages-box travel-Packages-arrow-right">
<h4>Family Tour</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
<div class="travel-services-link"><a href="#">Explore More</a></div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1501915662202{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_single_image image="44" img_size="full" css=".vc_custom_1501915530452{margin-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Icon Boxes 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box2.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501913733292{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="80px"][vc_column_text]
<div class="travel-title-wrapper centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-sub-title"><span class="italic-font">invictus travel</span></div>
<div class="travel-main-title">
<h2>Our services</h2>
</div>
</div>
[/vc_column_text][vc_empty_space height="25px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">HOTEL BOOKING</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">Airline Booking</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">Cars Reservation</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">Expert Guidance</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">Itinerary Planning</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="travel-services-box-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-services-box-inner">
<h5 class="travel-services-title">Travel Insurance</h5>
<p class="travel-services-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>

<div class="travel-services-link"><a href="#">Explore More</a></div>
<div class="travel-services-icon"><img src="http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/sunbed.png" alt="icon" /></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;



$templates[] = $data;

	//Testimonials 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial3.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_column_text]
<div class="travel-title-wrapper centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-sub-title"><span class="italic-font">people say</span></div>
<div class="travel-main-title">
<h2>Customer Reviews</h2>
</div>
</div>
[/vc_column_text][vc_empty_space height="40px"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Fifth Option" autoplay="false" slidetoshow="3" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="false" position_font_color="#3a3a3a"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra3.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" equal_height="yes" css=".vc_custom_1501931059611{background-color: #f5f5f5 !important;}"][vc_column width="1/2" css=".vc_custom_1501934891114{padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background-image: url(http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/travel-slider-1.jpg?id=121) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2" css=".vc_custom_1501931503991{padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background-image: url(http://invictus.insigniats.in/travel/wp-content/uploads/2017/08/travel-bg.jpg?id=90) !important;}"][vc_tta_accordion shape="square" color="white" gap="20" active_section="1" no_fill="true" el_class="invictus-travel-accordion invictus-travel-accordion-dark-bg"][vc_tta_section title="Visa requirements" tab_id="1501918975463-439236a6-8c2e"][vc_column_text]
<p class="white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][/vc_tta_section][vc_tta_section title="Travel insurance" tab_id="1501918975515-6559011e-39b4"][vc_column_text]
<p class="white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][/vc_tta_section][vc_tta_section title="Travel money and currency" tab_id="1501919490415-8ee64378-5251"][vc_column_text]
<p class="white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][/vc_tta_section][vc_tta_section title="When will my travel voucher be paid?" tab_id="1501931607781-9b174ca3-d33c"][vc_column_text]
<p class="white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra4.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1501934633520{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<div class="travel-title-wrapper centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="travel-sub-title"><span class="italic-font">invictus travel</span></div>
<div class="travel-main-title">
<h2>Latest offer</h2>
</div>
</div>
[/vc_column_text][vc_column_text]
<div class="centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_column_text]
<div class="travel-offer-wrapper travel-offer clearfix">
<div class="travel-offer-slider">
<div class="travel-offer-thumb"><img src="./wp-content/uploads/2017/08/travel-slider.jpg" alt="offer" /><span class="travel-special-off white-text pc-bg">30% Off</span></div>
<div class="travel-offer-content">
<div class="italic-font travel-offer">8 Days / $200</div>
<h4 class="travel-offer-title">singapore + malaysia</h4>
<p class="travel-offer-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in odio vitae diam</p>

<div class="travel-services-link"><a href="#">Book Now</a></div>
</div>
</div>
<div class="travel-offer-slider">
<div class="travel-offer-thumb"><img src="./wp-content/uploads/2017/08/travel-slider.jpg" alt="offer" /><span class="travel-special-off white-text pc-bg">30% Off</span></div>
<div class="travel-offer-content">
<div class="italic-font travel-offer">8 Days / $200</div>
<h4 class="travel-offer-title">singapore + malaysia</h4>
<p class="travel-offer-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in odio vitae diam</p>

<div class="travel-services-link"><a href="#">Book Now</a></div>
</div>
</div>
<div class="travel-offer-slider">
<div class="travel-offer-thumb"><img src="./wp-content/uploads/2017/08/travel-slider.jpg" alt="offer" /><span class="travel-special-off white-text pc-bg">30% Off</span></div>
<div class="travel-offer-content">
<div class="italic-font travel-offer">8 Days / $200</div>
<h4 class="travel-offer-title">singapore + malaysia</h4>
<p class="travel-offer-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in odio vitae diam</p>

<div class="travel-services-link"><a href="#">Book Now</a></div>
</div>
</div>
<div class="travel-offer-slider">
<div class="travel-offer-thumb"><img src="./wp-content/uploads/2017/08/travel-slider.jpg" alt="offer" /><span class="travel-special-off white-text pc-bg">30% Off</span></div>
<div class="travel-offer-content">
<div class="italic-font travel-offer">8 Days / $200</div>
<h4 class="travel-offer-title">singapore + malaysia</h4>
<p class="travel-offer-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in odio vitae diam</p>

<div class="travel-services-link"><a href="#">Book Now</a></div>
</div>
</div>
<div class="travel-offer-slider">
<div class="travel-offer-thumb"><img src="./wp-content/uploads/2017/08/travel-slider.jpg" alt="offer" /><span class="travel-special-off white-text pc-bg">30% Off</span></div>
<div class="travel-offer-content">
<div class="italic-font travel-offer">8 Days / $200</div>
<h4 class="travel-offer-title">singapore + malaysia</h4>
<p class="travel-offer-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in odio vitae diam</p>

<div class="travel-services-link"><a href="#">Book Now</a></div>
</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact3.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" parallax="content-moving" parallax_image="154" parallax_speed_bg="2.5" css=".vc_custom_1502176894345{background-position: center;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1502174349259{padding-right: 0px !important;}"][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwJTIwaGVpZ2h0JTNEJTIyNDAwJTIyJTIwc3R5bGUlM0QlMjJib3JkZXIlM0EwJTIyJTIwYWxsb3dmdWxsc2NyZWVuJTNFJTNDJTJGaWZyYW1lJTNF" el_class="google-map-column" css=".vc_custom_1513079560194{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1502174232634{padding-top: 0px !important;background-color: #fe5f55 !important;}"][vc_column_text css=".vc_custom_1502174843118{margin-bottom: 0px !important;}"]
<div class="travel-contact-info-box">
<h4 class="white-color">join us now</h4>
<p class="white-color">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

<h6 class="white-color"><i class="icon-call-out icons"><!-- icon --></i>1-698-123-55456</h6>
<h6 class="white-color"><i class="icon-envelope-open icons"><!-- icon --></i>invictus@business.com</h6>
<h6 class="white-color"><i class="icon-location-pin icons"><!-- icon --></i>invictus business</h6>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

//coach

$templates[] = $data;

	//About 2 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about2.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="50px"][vc_row_inner equal_height="yes"][vc_column_inner width="2/3"][vc_empty_space height="20px"][insignia_section_heading title="Your business coach" subtitle="01. Introduction" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522664635758{margin-bottom: 25px !important;}"][vc_column_text]
<div class="col-md-6 no-padding" style="padding-right: 15px;">
<p class="medium-text">Lorem ipsum dolor sit amet, consec adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis. Lorem ipsum dolor sit amet.</p>
<p class="medium-text">Mauris mollis tempus dui, nec bibendum augue faucibus quis. Lorem ipsum dolor sit amet.</p>

</div>
<div class="col-md-6 inv-coach-body-text-wrapper">
<p class="medium-text">Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis. Lorem ipsum dolor sit amet.</p>

<div class="coach-sign-thumb"><img src="http://invictus.insigniats.in/coach/wp-content/uploads/2017/08/coach-sign.png" alt="sign" /></div>
</div>
[/vc_column_text][vc_column_text][/vc_column_text][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner el_class="inv-coach-inner-img-row" width="1/3" css=".vc_custom_1510751584570{background-image: url(http://invictus.insigniats.in/coach/wp-content/uploads/2017/09/coach-img-3-1.jpg?id=169) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="350px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service3.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1510751589960{background-image: url(http://invictus.insigniats.in/coach/wp-content/uploads/2017/09/coach-img-4.jpg?id=165) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="inv-coach-inner-img-row"][/vc_column][vc_column width="1/2" css=".vc_custom_1503138212562{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #f5f5f5 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="50px"][insignia_section_heading title="Why choose our coaching?" subtitle="02. Invictus benefits" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522664718092{margin-bottom: 25px !important;padding-right: 15% !important;}"][vc_column_text]
<p class="medium-text coach-bottom-border">Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis. Lorem ipsum dolor sit amet.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-agenda" icon_title="OUR VISSION" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis adipis cingelit. Mauris mollis tempus dui, nec." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-2" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-pencil-alt" icon_title="OUR MISSION" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis adipis cingelit. Mauris mollis tempus dui, nec." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-2" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px" el_class="remove-empty-space"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box3.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Services we offer" subtitle="03. Invictus benefits" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522665482125{margin-bottom: 25px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-stats-up" icon_size="icon-large" icon_title="Establish work and life balance" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis." btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="disable" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-link" icon_size="icon-large" icon_title="Establish work and life balance" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis." btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="disable" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-reload" icon_size="icon-large" icon_title="Establish work and life balance" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis." btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="disable" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-flag-alt" icon_size="icon-large" icon_title="Establish work and life balance" icon_text="Lorem ipsum dolor sit amet, consectetur tur adipis cingelit. Mauris mollis tempus dui, nec bibendum augue faucibus quis." btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="disable" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#343434"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_empty_space height="20px"][vc_column_text]
<p class="centered-box">Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui, nec bibendum <mark>augue faucibus</mark> quis. Lorem ipsum dolor sit amet.</p>
[/vc_column_text][insignia_button button_style="three" btn_text="Discover more" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f9f9f9" bg_color="#46dfb4" hover_bg_color="#343434" border_color="#46dfb4" hover_border_color="#343434"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Extra 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra5.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Frequently Asked Questions" subtitle="04. Before Working with us" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522665743165{margin-bottom: 25px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/2"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="01." num_title="What is your personal Coach-Consultant style?" num_text="I tend to ask a lot of insightful questions, both to help me understand who you are and where you are at in your life, and also so that you can hear your own answers." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="02." num_title="Do you service a particular geographic area?" num_text="We are located between Philadelphia and New York City. However, our clients are from all across the USA, Canada, Europe, Australia and the Caribbean." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="03." num_title="How Do I Know This Will Work For Me?" num_text="This program will only work for about 20% of the owners that request information to learn more about what we do. 100% of the clients that have been successful have had the DESIRE TO GROW AND THE WILLINGNESS TO CHANGE." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/2"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="04." num_title="What Can I Expect to Get From Our Time Together?" num_text="A business owner can expect to see improvement in their business and to achieve the realistic goals they’ve set. These goals generally fall into the categories of more Time, Team or Money." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="05." num_title="Do you discuss the sessions with the executive’s boss?" num_text="All sessions with a client are confidential. Trust is extremely important in the coaching relationship; therefore, the coach does not divulge any information from the coaching sessions to a third party." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="06." num_title="How much does a coaching engagement cost?" num_text="Prices vary by coaching concentration (Career Coaching, Executive Coaching, Leadership Coaching, and Life Coaching) because of level of expertise needed to offer effective service." btn_check="" title_font="text-large" number_font_weight="font-weight-500" title_font_weight="font-weight-500" num_color="#46dfb4" title_color="#343434"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;


$templates[] = $data;

	//Call to Action 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action1.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1503139435202{background-image: url(http://invictus.insigniats.in/coach/wp-content/uploads/2017/08/coach-bg1.png?id=141) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="subscribe for our newsletter" subtitle="07. newsletter" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522666314517{margin-bottom: 25px !important;}"][vc_empty_space height="20px"][vc_column_text]
<p class="centered-box white-text" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][vc_empty_space height="20px"][vc_column_text]
<div class="invictus-newsletter-wrapper clearfix centered-box" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="invictus-newsletter-form clearfix"><input name="email" type="email" placeholder="email" /><button class="invictus-newsletter-button"><i class="ti-arrow-right"><!--icon--></i></button></div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Blog 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog3.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502884827979{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Offical Blog Updates" subtitle="08. Latest News" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522666346717{margin-bottom: 25px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][blog_news blog_layout="Grid3" blog_style="layout_4" post_cat="technology" blog_no_posts="3" blog_gap="30"][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact4.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="What are you waiting for.?" subtitle="09. contact us" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#46dfb4" css=".vc_custom_1522666381490{margin-bottom: 25px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="2/3"][contact-form-7 id="4"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522666928858{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 8% !important;padding-left: 10% !important;border-left-color: #b5b5b5 !important;border-left-style: solid !important;border-right-color: #b5b5b5 !important;border-right-style: solid !important;border-top-color: #b5b5b5 !important;border-top-style: solid !important;border-bottom-color: #b5b5b5 !important;border-bottom-style: solid !important;}"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-mobile" icon_title="Phone" icon_text="+385 1 482 0044" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#343434" title_color="#3c3852"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-printer" icon_title="Fax" icon_text="+385 1 482 0044" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#343434" title_color="#3c3852"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-email" icon_title="Email" icon_text="admin@invictus.com" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#343434" title_color="#3c3852"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-location-pin" icon_title="Address" icon_text="135 W 46nd Street New York" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#343434" title_color="#3c3852"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// Restaurant


$templates[] = $data;

	//About 3 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about3.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/3" css=".vc_custom_1505220720287{padding-top: 40px !important;padding-right: 30px !important;padding-bottom: 20px !important;padding-left: 30px !important;background-color: #343434 !important;}"][insignia_section_heading title="Invictus Restaurant" subtitle="Our history" align="text-left" separator="disable" heading_tag="h5" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e" extra_class="custom-sub-title-font"][vc_column_text css=".vc_custom_1522655580948{margin-bottom: 0px !important;}"]
<div class="restaurant-about">
<p class="white-color">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>

<div class="restaurant-button-holder"><a class="restaurant-button-medium pc-bg" href="#"><span class="restaurant-button-text">Learn More</span></a></div>
</div>
[/vc_column_text][vc_empty_space height="50px"][/vc_column_inner][vc_column_inner width="2/3"][vc_raw_html css=".vc_custom_1508766559019{margin-bottom: 0px !important;}"]JTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWNhcm91c2VsJTIyJTNFJTBBJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWNhcm91c2VsLWJveCUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1pbWctY2Fyb3VzZWwlMjIlM0UlMEElM0NmaWd1cmUlM0UlM0NpbWclMjBzcmMlM0QlMjIuJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE3JTJGMDklMkZyZXN0YXVyYW50LWltZy0yLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUzRSUzQyUyRmZpZ3VyZSUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1kZXRhaWxzLWNhcm91c2VsJTIyJTNFJTBBJTNDaDUlM0VzYWxhZHMlM0MlMkZoNSUzRSUwQSUzQ3AlM0VJdCUyMGlzJTIwYSUyMGxvbmclMjBlc3RhYmxpc2hlZCUyMGZhY3QlMjB0aGF0JTIwYSUyMHJlYWRlciUyMHdpbGwlMjBiZSUyMGRpc3RyYWN0ZWQlMjBieSUyMHRoZSUyMHJlYWRhYmxlJTNDJTJGcCUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1jYXJvdXNlbC1ib3glMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMnJlc3RhdXJhbnQtYWJvdXQtaW1nLWNhcm91c2VsJTIyJTNFJTBBJTNDZmlndXJlJTNFJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA5JTJGcmVzdGF1cmFudC1pbWctMS0xLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUzRSUzQyUyRmZpZ3VyZSUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1kZXRhaWxzLWNhcm91c2VsJTIyJTNFJTBBJTNDaDUlM0VwaXp6YSUzQyUyRmg1JTNFJTBBJTNDcCUzRUl0JTIwaXMlMjBhJTIwbG9uZyUyMGVzdGFibGlzaGVkJTIwZmFjdCUyMHRoYXQlMjBhJTIwcmVhZGVyJTIwd2lsbCUyMGJlJTIwZGlzdHJhY3RlZCUyMGJ5JTIwdGhlJTIwcmVhZGFibGUlM0MlMkZwJTNFJTBBJTNDJTJGZGl2JTNFJTBBJTNDJTJGZGl2JTNFJTBBJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWNhcm91c2VsLWJveCUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1pbWctY2Fyb3VzZWwlMjIlM0UlMEElM0NmaWd1cmUlM0UlM0NpbWclMjBzcmMlM0QlMjIuJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE3JTJGMDklMkZyZXN0YXVyYW50LWltZy0zLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUzRSUzQyUyRmZpZ3VyZSUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1kZXRhaWxzLWNhcm91c2VsJTIyJTNFJTBBJTNDaDUlM0VkZXNzZXJ0cyUzQyUyRmg1JTNFJTBBJTNDcCUzRUl0JTIwaXMlMjBhJTIwbG9uZyUyMGVzdGFibGlzaGVkJTIwZmFjdCUyMHRoYXQlMjBhJTIwcmVhZGVyJTIwd2lsbCUyMGJlJTIwZGlzdHJhY3RlZCUyMGJ5JTIwdGhlJTIwcmVhZGFibGUlM0MlMkZwJTNFJTBBJTNDJTJGZGl2JTNFJTBBJTNDJTJGZGl2JTNFJTBBJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWNhcm91c2VsLWJveCUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1pbWctY2Fyb3VzZWwlMjIlM0UlMEElM0NmaWd1cmUlM0UlM0NpbWclMjBzcmMlM0QlMjIuJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE3JTJGMDklMkZyZXN0YXVyYW50LWltZy0yLmpwZyUyMiUyMGFsdCUzRCUyMiUyMiUzRSUzQyUyRmZpZ3VyZSUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1kZXRhaWxzLWNhcm91c2VsJTIyJTNFJTBBJTNDaDUlM0Vzb3VwcyUzQyUyRmg1JTNFJTBBJTNDcCUzRUl0JTIwaXMlMjBhJTIwbG9uZyUyMGVzdGFibGlzaGVkJTIwZmFjdCUyMHRoYXQlMjBhJTIwcmVhZGVyJTIwd2lsbCUyMGJlJTIwZGlzdHJhY3RlZCUyMGJ5JTIwdGhlJTIwcmVhZGFibGUlM0MlMkZwJTNFJTBBJTNDJTJGZGl2JTNFJTBBJTNDJTJGZGl2JTNFJTBBJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWNhcm91c2VsLWJveCUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIycmVzdGF1cmFudC1hYm91dC1pbWctY2Fyb3VzZWwlMjIlM0UlMEElM0NmaWd1cmUlM0UlM0NpbWclMjBzcmMlM0QlMjIuJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE3JTJGMDklMkZyZXN0YXVyYW50LWltZy0xLTEuanBnJTIyJTIwYWx0JTNEJTIyJTIyJTNFJTNDJTJGZmlndXJlJTNFJTBBJTNDJTJGZGl2JTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJyZXN0YXVyYW50LWFib3V0LWRldGFpbHMtY2Fyb3VzZWwlMjIlM0UlMEElM0NoNSUzRWRyaW5rcyUzQyUyRmg1JTNFJTBBJTNDcCUzRUl0JTIwaXMlMjBhJTIwbG9uZyUyMGVzdGFibGlzaGVkJTIwZmFjdCUyMHRoYXQlMjBhJTIwcmVhZGVyJTIwd2lsbCUyMGJlJTIwZGlzdHJhY3RlZCUyMGJ5JTIwdGhlJTIwcmVhZGFibGUlM0MlMkZwJTNFJTBBJTNDJTJGZGl2JTNFJTBBJTNDJTJGZGl2JTNFJTBBJTBBJTNDJTJGZGl2JTNF[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action2.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502963860164{background-image: url(http://invictus.insigniats.in/restaurant/wp-content/uploads/2017/08/restaurant-bg.png?id=60) !important;}"][vc_column][vc_empty_space height="80px"][vc_single_image image="88" img_size="75x47" alignment="center"][insignia_section_heading title="Planning an event?" subtitle="" align="text-center" separator="disable" heading_tag="h1" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="restaurant-event-cta-wrapper">
<div class="restaurant-event-cta-inner centered-box">
<div class="restaurant-button-holder" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">Get in touch</span></a></div>
<div class="restaurant-event-cta-content" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<p class="white-text restaurant-event-cta-main-text">Invictus is a perfect venue for your all type of events.</p>

<div class="restaurant-event-cta-sub-text">(book your event now and get 15% off)</div>
</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra6.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="80px"][insignia_section_heading title="Dinner Menu" subtitle="welcome" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e"][vc_empty_space height="30px"][vc_row_inner css=".vc_custom_1505223564991{padding-right: 3% !important;padding-left: 3% !important;}"][vc_column_inner width="1/3"][vc_empty_space height="30px"][vc_column_text]
<div class="restaurant-menu-list" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>LEMON-ROSEMARY CHICKEN</h5>
<h6>$11.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>FRESH TRADITIONAL COD &amp; CHIPS</h5>
<h6>$13.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>TUNA ROAST SOURCE</h5>
<h6>$10.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/3"][vc_empty_space height="30px"][vc_column_text]
<div class="restaurant-menu-list" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>LEMON-ROSEMARY CHICKEN</h5>
<h6>$11.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>FRESH TRADITIONAL COD &amp; CHIPS</h5>
<h6>$13.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>TUNA ROAST SOURCE</h5>
<h6>$10.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/3"][vc_empty_space height="30px"][vc_column_text]
<div class="restaurant-menu-list" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>LEMON-ROSEMARY CHICKEN</h5>
<h6>$11.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>FRESH TRADITIONAL COD &amp; CHIPS</h5>
<h6>$13.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="restaurant-menu-details">
<h5>TUNA ROAST SOURCE</h5>
<h6>$10.95</h6>
There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra7.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502968904996{background-image: url(http://invictus.insigniats.in/restaurant/wp-content/uploads/2017/08/restaurant-2.jpg?id=83) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][vc_row_inner css=".vc_custom_1505216780202{background-color: #ffffff !important;}"][vc_column_inner][insignia_section_heading title="Lunch Menu" subtitle="welcome" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e"][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1502964665817{background-color: #ffffff !important;}"][vc_column_inner width="1/2"][vc_column_text]
<div class="restaurant-menu-list" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-1.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>LEMON-ROSEMARY CHICKEN</h5>
<h6>$11.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-2.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>FRESH TRADITIONAL COD &amp; CHIPS</h5>
<h6>$13.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-3.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>TUNA ROAST SOURCE</h5>
<h6>$10.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="restaurant-menu-list" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-1.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>LEMON-ROSEMARY CHICKEN</h5>
<h6>$11.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-2.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>FRESH TRADITIONAL COD &amp; CHIPS</h5>
<h6>$13.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
<div class="restaurant-menu-main">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 restaurant-menu-img">
<figure><img src="./wp-content/uploads/2017/08/restaurant-menu-img-3.jpg" alt="" /></figure></div>
<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 restaurant-menu-details">
<h5>TUNA ROAST SOURCE</h5>
<h6>$10.95</h6>
Battered to order fillet of cod served with homemade tartar sauce, served with mushy peas or side</div>
<div class="clearfix"></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Teams 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team2.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Meet The Team" subtitle="Our team" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e"][vc_empty_space height="30px"][vc_row_inner gap="30"][vc_column_inner width="1/4"][team_member team_layout="First Option" logo_team="Lori Pratt"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="First Option" logo_team="Milton Glaser"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="First Option" logo_team="Robert Reed"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="First Option" logo_team="John Doe"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1505217175195{padding-top: 0px !important;}"][vc_row_inner css=".vc_custom_1505217129532{padding-top: 0px !important;}"][vc_column_inner css=".vc_custom_1505217180195{padding-top: 0px !important;}"][blog_news blog_layout="Grid4" blog_style="layout_4" post_cat="pizza" blog_no_posts="4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial4.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="10k+ Happy Customers" subtitle="Testimonial" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Third Option" autoplay="false" slidetoshow="2" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_empty_space height="30px"][vc_column_text]
<div class="restaurant-button-holder centered-box" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">View all Reviews</span></a></div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Image Gallery 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery2.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_empty_space height="30px"][insignia_section_heading title="Food Gallery" subtitle="welcome" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#bd945e"][vc_empty_space height="40px"][insignia_image_gallery design_style="grid_4x" attach_images="52,53,54,55,56,34,119,118" hover_text="1" gallery_gap="0" carousel_infinite="true" carousel_dots="true" carousel_arrows="true"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter2.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1505222660864{padding-top: 10px !important;}"][milestone title="HAPPY CUSTOMERS" number="950" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221708393{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="Hours cooking" number="840" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221740338{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="FOOD RECIPES" number="450" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221750066{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="TABLE BOOKING" number="285" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1505222660864{padding-top: 10px !important;}"][milestone title="HAPPY CUSTOMERS" number="950" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221708393{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="Hours cooking" number="840" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221740338{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="FOOD RECIPES" number="450" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1505221750066{border-left-width: 1px !important;padding-top: 10px !important;border-left-color: #d6d6d6 !important;border-left-style: solid !important;}"][milestone title="TABLE BOOKING" number="285" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#767676" title_color="#767676" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

//Lawyer

$templates[] = $data;

	//Icon Boxes 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box4.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1502701613505{background-color: #f5f5f5 !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="754" icon_align="text-left" icon_title="30 YEARS OF EXPERIENCE" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

" btn_check="1" btn_text="Read More" btn_link="#" title_font="26" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#3b3e79" text_color="#797979" btn_color="#828282" css=".vc_custom_1522489977004{padding-top: 15% !important;padding-right: 15% !important;padding-bottom: 15% !important;padding-left: 15% !important;}"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1502701635719{background-color: #ffffff !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="755" icon_align="text-left" icon_title="OUR AWARDS AND CERTIFICATES" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

" btn_check="1" btn_text="Read More" btn_link="#" title_font="26" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#3b3e79" text_color="#797979" btn_color="#828282" css=".vc_custom_1522490057483{padding-top: 15% !important;padding-right: 15% !important;padding-bottom: 15% !important;padding-left: 15% !important;}"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1502701622811{background-color: #f5f5f5 !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="756" icon_align="text-left" icon_title="WELL QUALIFIED ATTORNEYS" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

" btn_check="1" btn_text="Read More" btn_link="#" title_font="26" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#3b3e79" text_color="#797979" btn_color="#828282" css=".vc_custom_1522490072995{padding-top: 15% !important;padding-right: 15% !important;padding-bottom: 15% !important;padding-left: 15% !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter3.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502706631388{background-image: url(http://invictus.insigniats.in/lawyer/wp-content/uploads/2017/08/lawyer-bg2.jpg?id=39) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][milestone title="QUALIFIED LAWYER" number="135" add_icon="1" icon_layout="ins-count-custom-icon" custom_icon="92" count_layout="ins-counter-icon-align-left" align="select" text_transform="text-uppercase" num_size="39" title_size="15" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#f5f5f5" title_color="#f5f5f5" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="CASES COMPLETED" number="2458" add_icon="1" icon_layout="ins-count-custom-icon" custom_icon="91" count_layout="ins-counter-icon-align-left" align="select" text_transform="text-uppercase" num_size="39" title_size="15" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#f5f5f5" title_color="#f5f5f5" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="SATISFIED CUSTOMERS" number="1455" add_icon="1" icon_layout="ins-count-custom-icon" custom_icon="90" count_layout="ins-counter-icon-align-left" align="select" text_transform="text-uppercase" num_size="39" title_size="15" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#f5f5f5" title_color="#f5f5f5" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service4.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502866450087{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our Practice Areas" subtitle="EXCLUSIVE SERVICE" align="text-center" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#3b3e79" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#797979" separator_color="#f2784b"][vc_empty_space height="45px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="01." num_title="SEXUAL OFFENCES" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522494967359{background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="02." num_title="FAMILY LAW" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522848406959{background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="03." num_title="CONSUMER LAW" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522848413489{background-color: #ffffff !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="04." num_title="PROFESSIONAL LIABILITY" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522848418425{background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="05." num_title="EMPLOYMENT LITIGATION" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522848433832{background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="06." num_title="FAMILY LAW" num_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="1" btn_text="Read More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" extra_class="on-hover-theme-color" number_size="40" title_size="19" number_font_weight="font-weight-600" title_font_weight="font-weight-700" num_color="#e2e2e2" title_color="#3b3e79" btn_color="#828282" css=".vc_custom_1522848467530{background-color: #ffffff !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][insignia_section_heading title="" subtitle="We have total 30+ services for you" align="text-center" separator="disable" font_weight="default" subtitle_fs="text-extra-large" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#797979"][insignia_button button_style="first" btn_text="view all services" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="#f2784b" hover_bg_color="#3b3e79" border_color="#f2784b" hover_border_color="#3b3e79" border_radius="6px"][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 4 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about4.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/3" css=".vc_custom_1502877211192{background-image: url(http://invictus.insigniats.in/lawyer/wp-content/uploads/2017/08/lawyer-img2.jpg?id=123) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="400px"][/vc_column][vc_column width="2/3" css=".vc_custom_1502870262484{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 7% !important;}"][insignia_section_heading title="Why Choose us" subtitle="EXCLUSIVE SERVICE" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#3b3e79" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#797979" separator_color="#f2784b"][vc_empty_space height="20px"][vc_column_text css=".vc_custom_1508750162133{margin-bottom: 20px !important;}"]
<div class="lawyer-right-content-wrapper">
<div class="lawyer-right-content-inner">
<p class="lawyer-intro-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</blockquote>
</div>
</div>
[/vc_column_text][vc_empty_space height="40px"][vc_row_inner el_class="lawyer-right-content-bottom-inner"][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-bookmark-alt" icon_title="Professional lawyers" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-0.5" icon_color="#f2784b" title_color="#4c4c4c" text_color="#797979"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-timer" icon_title="24/7 Support" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-0.5" icon_color="#f2784b" title_color="#4c4c4c" text_color="#797979"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team3.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502435868230{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Expert legal advice" subtitle="Introduction" align="text-center" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#3b3e79" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#797979" separator_color="#f2784b"][vc_empty_space height="45px"][vc_column_text]
<div class="centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<p class="lawyer-after-title-content light-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner gap="20"][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Alex Anderson"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Elsa Minor"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Robert Reed"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action3.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502870002522{background-image: url(http://invictus.insigniats.in/lawyer/wp-content/uploads/2017/08/lawyer-bg33.jpg?id=94) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][insignia_section_heading title="WE ARE READY TO FIGHT FOR OUR CLIENTS" subtitle="" align="text-center" separator="disable" heading_tag="h3" heading_font_size="26" font_weight="font-weight-200" text_transform="text-uppercase" heading_color="#ffffff" subtitle_font_weight=""][insignia_section_heading title="We are here to help" subtitle="" align="text-center" separator="disable" heading_tag="h1" heading_font_size="55" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#ffffff" subtitle_font_weight=""][vc_empty_space height="40px"][insignia_button button_style="first" btn_text="Get free consultation" btn_link="url:%23|||" button_size="large" button_align="text-center" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="#f2784b" hover_bg_color="#3b3e79" border_color="#f2784b" hover_border_color="#3b3e79" border_radius="6px"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients2.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="10k+ happy clients" subtitle="TESTIMONIAL" align="text-center" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#3b3e79" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#797979" separator_color="#f2784b"][vc_empty_space height="45px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Third Option" autoplay="false" slidetoshow="2" testimonial_navigation_dots="true" testimonial_navigation_arrows="false" infinite="true"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Blog 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog4.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502884827979{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="News and articles" subtitle="BLOG" align="text-center" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#3b3e79" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#797979" separator_color="#f2784b"][vc_empty_space height="45px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner][blog_news blog_layout="Grid3" blog_style="layout_1" post_cat="technology" blog_no_posts="3" blog_gap="30"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact5.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502885701014{background-color: #f5f5f5 !important;}" el_class="lawyer-contact-info-holder"][vc_column][vc_row_inner el_class="lawyer-Contact-info-row-box"][vc_column_inner width="1/4"][vc_column_text css=".vc_custom_1508750616906{margin-bottom: 0px !important;}"]
<div class="lawyer-Contact-info-box">
<div class="lawyer-Contact-info-icon-box"><i class="icon-location-pin icons pc-bg"><!--icon --></i></div>
<div class="lawyer-Contact-info-text-box">
<h6>Address</h6>
120 Dental Street</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text css=".vc_custom_1508750654122{margin-bottom: 0px !important;}"]
<div class="lawyer-Contact-info-box">
<div class="lawyer-Contact-info-icon-box"><i class="fa fa-envelope-o pc-bg" aria-hidden="true"><!--icon --></i></div>
<div class="lawyer-Contact-info-text-box">
<h6>Email</h6>
admin@insignia.com</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text css=".vc_custom_1508750646523{margin-bottom: 0px !important;}"]
<div class="lawyer-Contact-info-box">
<div class="lawyer-Contact-info-icon-box"><i class="fa fa-mobile pc-bg" aria-hidden="true"><!--icon --></i></div>
<div class="lawyer-Contact-info-text-box">
<h6>Phone</h6>
+91 999 8564 987</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text css=".vc_custom_1508750686420{margin-bottom: 0px !important;}"]
<div class="lawyer-Contact-info-box">
<div class="lawyer-Contact-info-icon-box"><i class="icon-printer icons pc-bg"><!--icon --></i></div>
<div class="lawyer-Contact-info-text-box">
<h6>Fax</h6>
+385 1 482 0044</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1502870094533{background-image: url(http://invictus.insigniats.in/lawyer/wp-content/uploads/2017/08/con-bg.jpg?id=96) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][insignia_section_heading title="Free consultation form" subtitle="CONTACT FORM" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#f5f5f5" separator_color="#f2784b"][vc_empty_space height="45px"][contact-form-7 id="4"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

// Video Production

$templates[] = $data;

	//About 5 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about5.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="vp-title-wrapper" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="vp-title-inner">
<div class="vp-subtitle italic-font">Lorem ipum dollar</div>
<h3>From script to screen</h3>
</div>
</div>
[/vc_column_text][vc_column_text]
<p data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

[/vc_column_text][vc_column_text]
<p class="vp-blockquotes" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>

<div class="vp-button-wrapper" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="vp-button" href="#"><span class="vp-button-text pc-border pc-bg">Read More</span></a></div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="106" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service5.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-music" icon_title="Music Videos" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-image" icon_title="Animation Effects" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-pin-alt" icon_title="Commercials Videos" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-pencil-alt" icon_title="Documentary Videos" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-gallery" icon_title="Advertising Videos" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-circle-outline" icon_type="themify" icon_themify="ti-eye" icon_title="Eye-Catching Visuals" icon_text="Lorem Ipsum is simply dummy text of the printing" btn_check="" border_radius="1px" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#d4ccc4" title_color="#cdab8a" text_color="#d4ccc4" icon_outline_color="rgba(194,204,196,0.15)"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_single_image image="54" img_size="full"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial5.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1508843244295{background-image: url(http://invictus.insigniats.in/video-production/wp-content/uploads/2017/07/photo-1484799948160-c41b81b66c07.jpg?id=42) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][testimonial testimonial_layout="First Option" autoplay="true" testimonial_navigation_dots="true" testimonial_navigation_arrows="true" infinite="true"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-01', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing1.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="six" package_name="Freelancer" price_value="$" package_price="39.99" price_sub_heading="Great for large businesses with more than 5 employees" button_text="Choose Plan" button_link="#" bg_color="" extra_class="vp-pricing-inner-section"]
<ul>
 	<li>Support forum</li>
 	<li>Free hosting</li>
 	<li>40MB of storage space</li>
 	<li><del>Social media integration</del></li>
 	<li><del>Anaylitcs integration</del></li>
 	<li><del>Unlimited storage space</del></li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="six" package_name="Freelancer" price_value="$" package_price="39.99" price_sub_heading="Great for large businesses with more than 5 employees" button_text="Choose Plan" button_link="#" bg_color="1" extra_class="vp-pricing-inner-section"]
<ul>
 	<li>Support forum</li>
 	<li>Free hosting</li>
 	<li>40MB of storage space</li>
 	<li><del>Social media integration</del></li>
 	<li><del>Anaylitcs integration</del></li>
 	<li><del>Unlimited storage space</del></li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="six" package_name="Freelancer" price_value="$" package_price="39.99" price_sub_heading="Great for large businesses with more than 5 employees" button_text="Choose Plan" button_link="#" bg_color="" extra_class="vp-pricing-inner-section"]
<ul>
 	<li>Support forum</li>
 	<li>Free hosting</li>
 	<li>40MB of storage space</li>
 	<li><del>Social media integration</del></li>
 	<li><del>Anaylitcs integration</del></li>
 	<li><del>Unlimited storage space</del></li>
</ul>
[/insignia_pricing_table][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra8.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_row_inner][vc_column_inner][vc_column_text]
<div class="vp-behind-scene-wrapper clearfix">
<div class="vp-behind-scene-inner vp-behind-scene-left clearfix">
<div class="vp-behind-scene-content col-md-4">
<div class="vp-behind-scene-content-inner">
<h3>Check out our behind the scene videos</h3>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.
<div class="vp-button-wrapper vp-pricing-button" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="vp-button" href="#"><span class="vp-button-text pc-border pc-bg">Watch Video</span></a></div>
</div>
</div>
<div class="vp-image-carousel col-md-8 col-md-offset-4"><img src="./wp-content/uploads/2017/10/video-production-image-1.jpg" alt="#" /></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="70px"][vc_column_text]
<div class="vp-behind-scene-wrapper clearfix">
<div class="vp-behind-scene-inner vp-behind-scene-right clearfix">
<div class="vp-image-carousel col-md-8"><img src="./wp-content/uploads/2017/10/video-production-image.jpg" alt="#" /></div>
<div class="vp-behind-scene-content col-md-4">
<div class="vp-behind-scene-content-inner">
<h3>Check out our behind the scene videos</h3>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.
<div class="vp-button-wrapper vp-pricing-button" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="vp-button" href="#"><span class="vp-button-text pc-border pc-bg">Watch Video</span></a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][vc_empty_space height="70px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Blog 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog5.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_column_text]
<div class="vp-title-wrapper" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="vp-title-inner">
<div class="vp-subtitle italic-font">News &amp; Blog</div>
<h3>Get Updated with our Latest News</h3>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][blog_news blog_layout="Grid3" blog_style="layout_2" post_cat="" blog_no_posts="3" blog_gap="40"][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact6.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

	[vc_row full_width="stretch_row" css=".vc_custom_1500903994600{background-image: url(http://invictus.insigniats.in/video-production/wp-content/uploads/2017/07/photo-1484799948160-c41b81b66c07.jpg?id=42) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="120px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<div class="vp-contact-call-to-action centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h2>Do You Need help finding your way in today's world.? <a class="vp-styled-link" href="mailto:test@gmail.com">Send an email</a> And we would love to continue the conversion.</h2>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="120px"][/vc_column][/vc_row]
	
CONTENT;

// Hospital

$templates[] = $data;

	//Services 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service6.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our Services" subtitle="Introduction" align="text-left" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#555f69" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][vc_empty_space height="35px"][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="24" icon_align="text-left" icon_title="QUALIFIED DOCTORS" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="22" icon_align="text-left" icon_title="FRIENDLY STAFF" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="23" icon_align="text-left" icon_title="EMERGENCY HELP" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="21" icon_align="text-left" icon_title="EMERGENCY CARE" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="coffee-hours-wrapper pc-bg" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="coffee-hours-inner">
<div class="coffee-hours-title">
<h3>opening hours</h3>
</div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Monday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">11:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Tuesday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">wednesday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">thursday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Friday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 20:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Saturday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 24:00</span></span></div>
<div class="coffee-hours-item clearfix"><span class="coffee-hours-day">Sunday</span><span class="coffee-hours-line"><span class="coffee-hours-line-inner"><!--span_inner--></span></span><span class="coffee-hours-hours"><span class="coffee-hours-closed">9:00 - 24:00</span></span></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box5.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502454338589{background-image: url(http://invictus.insigniats.in/hospital/wp-content/uploads/2017/08/hospital-bg2.png?id=111) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="OUR DEPARTMENTS" subtitle="LOREM IPSUM" align="text-center" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#f5f5f5"][vc_empty_space height="35px"][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="28" icon_align="text-left" icon_title="Health &amp; Medical Care" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500241858{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="34" icon_align="text-left" icon_title="Cardiac Clinic" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500249807{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="31" icon_align="text-left" icon_title="Psychological Consulting" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500378128{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="33" icon_align="text-left" icon_title="Ophthalmology Clinic" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500458671{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="30" icon_align="text-left" icon_title="Gynaecological Clinic" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500491942{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="32" icon_align="text-left" icon_title="Eye care" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" extra_class="custom-icon-box-hover" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522500520553{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team4.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502435868230{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner gap="20"][vc_column_inner width="1/3"][insignia_section_heading title="Our Doctors" subtitle="" align="text-left" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#555f69" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][insignia_section_heading title="LOREM IPSUM DOLOR SIT AMET, SED DO MEET AND ELIT, SED." subtitle="" align="text-left" separator="disable" heading_tag="h6" heading_font_size="19" font_weight="font-weight-200" text_transform="text-uppercase" heading_color="#5e5e5e" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan.[/vc_column_text][insignia_button button_style="first" btn_text="View all Doctors" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="#3892e7" hover_bg_color="#f55161" border_color="#3892e7" hover_border_color="#f55161"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="JONE CONNOR"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Mark Smith"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner gap="20"][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Alex Anderson"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="David Parker"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fourth Option" logo_team="Mark Smith"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 6 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about6.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1502456247335{padding-right: 10% !important;padding-left: 10% !important;background-image: url(http://invictus.insigniats.in/hospital/wp-content/uploads/2017/08/hospital-bg-4.png?id=133) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_empty_space height="60px"][insignia_section_heading title="Why choose us?" subtitle="LOREM IPUSM" align="text-left" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#555f69" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][vc_empty_space height="30px"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1522652019924{margin-bottom: 10px !important;}"]
<div class="hospital-counters-box">
<h6 class="hospital-counters-title">Doctors</h6>
</div>
[/vc_column_text][milestone title="" number="67" add_icon="" align="text-left" num_size="40" number_font_weight="font-weight-600" title_font_weight="default" num_color="#3892e7"][vc_column_text]
<div class="hospital-counters-box">Fugit, sed quia consequuntur dolores os qui ratione</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1522652026237{margin-bottom: 10px !important;}"]
<div class="hospital-counters-box">
<h6 class="hospital-counters">departments</h6>
</div>
[/vc_column_text][milestone title="" number="25" add_icon="" align="text-left" num_size="40" number_font_weight="font-weight-600" title_font_weight="default" num_color="#3892e7"][vc_column_text]
<div class="hospital-counters-box">Fugit, sed quia consequuntur dolores os qui ratione</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1522652033111{margin-bottom: 10px !important;}"]
<div class="hospital-counters-box">
<h6 class="hospital-counters">Rooms</h6>
</div>
[/vc_column_text][milestone title="" add_icon="" align="text-left" num_size="40" number_font_weight="font-weight-600" title_font_weight="default" num_color="#3892e7"][vc_column_text]
<div class="hospital-counters-box">Fugit, sed quia consequuntur dolores os qui ratione</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1502454349391{padding-top: 0px !important;}"][vc_row_inner equal_height="yes"][vc_column_inner width="1/2"][vc_single_image image="36" img_size="full" alignment="center" css=".vc_custom_1502450256650{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1502449738707{background-color: #3892e7 !important;}"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="28" icon_align="text-center" icon_title="Health &amp; Medical Care" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522501455585{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1502449759953{background-color: #3892e7 !important;}"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="28" icon_align="text-center" icon_title="Health &amp; Medical Care" icon_text="Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta.

" btn_check="" separator="disable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522501455585{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="46" img_size="full" alignment="center" css=".vc_custom_1502451996017{margin-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Blog 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog6.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="LATEST EVENTS" subtitle="NEWS AND BLOG" align="text-center" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#555f69" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][vc_column_text]
<p class="centered-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner][vc_column_inner][blog_news blog_layout="Grid3" blog_style="layout_3" post_cat="Technology" blog_no_posts="3" blog_gap="30"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact7.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row css=".vc_custom_1522653238736{padding-top: 60px !important;padding-bottom: 80px !important;}"][vc_column width="2/3"][insignia_section_heading title="BOOK AN APPOINTMENT" subtitle="CONTACT US" align="text-left" separator="disable" heading_tag="h2" heading_font_size="36" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#555f69" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-200" subtitle_color="#5e5e5e"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan.[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="21" icon_align="text-left" icon_title="INVICTUS BLOOD BANK" icon_text="" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][vc_column_text]
<div class="hospital-contact-address"><i class="fa fa-map-marker" aria-hidden="true"><!--icon--></i><span class="hospital-contact-address-text">125, Suitland Street, california, USA </span></div>
<div class="hospital-contact-address"><i class="fa fa-phone" aria-hidden="true"></i><span class="hospital-contact-address-text">(+01) 888 777 6547 Or (+01) 888 777 6547 </span></div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="22" icon_align="text-left" icon_title="INVICTUS CHEMICAL LAB" icon_text="" btn_check="" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#555f69" text_color="#5e5e5e" separator_color="#3892e7"][vc_column_text]
<div class="hospital-contact-address"><i class="fa fa-map-marker" aria-hidden="true"><!--icon--></i><span class="hospital-contact-address-text">125, Suitland Street, california, USA </span></div>
<div class="hospital-contact-address"><i class="fa fa-phone" aria-hidden="true"></i><span class="hospital-contact-address-text">(+01) 888 777 6547 Or (+01) 888 777 6547 </span></div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][contact-form-7 id="4"][/vc_column][/vc_row]
	
CONTENT;

// Creative Agency 2

$templates[] = $data;

	//Services 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service7.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][insignia_section_heading title="We Discover Design & Build digital products to help companies become more efficient & engaging." subtitle="Introduction" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a"][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" num_title="Best Marketing Agency" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" number_size="80" title_size="25" title_font_weight="font-weight-500" num_color="#f7224a"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="02" num_title="Publishing Media Giants" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" number_size="80" title_size="25" title_font_weight="font-weight-500" num_color="#f7224a"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="03" num_title="Copywriting For Websites" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" number_size="80" title_size="25" title_font_weight="font-weight-500" num_color="#f7224a"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 7 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about7.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content"][vc_column][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1504850268142{background-image: url(http://invictus.insigniats.in/creative-agency-2/wp-content/uploads/2017/09/agency-img-4.jpg?id=107) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504781050707{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #f6f8fb !important;}"][vc_empty_space height="70px"][insignia_section_heading title="We provide range of business services" subtitle="Introduction" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482247468{margin-bottom: 35px !important;}"][vc_column_text]
<p class="medium-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

[/vc_column_text][insignia_button button_style="second" btn_text="View Our Work" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#f7224a" border_color="#f7224a"][vc_empty_space height="70px"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1504781442187{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #f6f8fb !important;}"][vc_empty_space height="70px"][insignia_section_heading title="We provide range of business services" subtitle="Introduction" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482247468{margin-bottom: 35px !important;}"][vc_column_text]
<p class="medium-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

[/vc_column_text][insignia_button button_style="second" btn_text="Watch Intro Video" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#f7224a" border_color="#f7224a"][vc_empty_space height="70px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504863130732{background-image: url(http://invictus.insigniats.in/creative-agency-2/wp-content/uploads/2017/09/agency-6.jpg?id=139) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]	
CONTENT;

$templates[] = $data;

	//Icon Boxes 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box6.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/2"][insignia_section_heading title="We provide range of business services" subtitle="Our Services" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482292490{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-user" icon_title="User Experience" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][vc_empty_space height="35px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-light-bulb" icon_title="Product Design" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][vc_empty_space height="35px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-timer" icon_title="Digital Marketing" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-star" icon_title="Best Marketing Agency" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][vc_empty_space height="35px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-desktop" icon_title="media planning" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][vc_empty_space height="35px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-camera" icon_title="Photography" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-extra-large" text_font="text-medium" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#f7224a" title_color="#47354e"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team5.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="ELSA MINOR"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Milton Glaser"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Mark Anthony"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Robert Reed"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="John Doe"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Robert Reed"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="ELSA MINOR"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Milton Glaser"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing2.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504854550191{background-color: #f6f8fb !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/2"][insignia_section_heading title="Our latest Pricing plans" subtitle="Pricing plans" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482318009{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-pricing-double-layer-wrapper">
<div class="inv-pricing-double-layer-inner inv-pricing-double-secondary">
<div class="inv-pricing-double-layer-upper centered-box">
<div class="inv-pricing-double-layer-content">
<div class="inv-pricing-double-layer-title-holder">
<h1 class="inv-pricing-double-layer-title">STANDARD</h1>
</div>
<div class="inv-pricing-double-layer-price-holder">
<h2 class="inv-pricing-double-layer-title-holder">$99</h2>
</div>
<div class="inv-pricing-double-layer-title-desc">
<ul>
	<li>Unlimited Support</li>
	<li>10GB Space</li>
	<li>1 Free Domain</li>
</ul>
</div>
</div>
</div>
<div class="inv-pricing-double-layer-lower">
<div class="inv-pricing-double-layer-button"><a class="inv-pricing-double-layer-link" href="#">upgrade</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-pricing-double-layer-wrapper">
<div class="inv-pricing-double-layer-inner inv-pricing-double-primary">
<div class="inv-pricing-double-layer-upper centered-box">
<div class="inv-pricing-double-layer-content">
<div class="inv-pricing-double-layer-title-holder">
<h1 class="inv-pricing-double-layer-title">PREMIUM</h1>
</div>
<div class="inv-pricing-double-layer-price-holder">
<h2 class="inv-pricing-double-layer-title-holder">$149</h2>
</div>
<div class="inv-pricing-double-layer-title-desc">
<ul>
	<li>Unlimited Support</li>
	<li>10GB Space</li>
	<li>1 Free Domain</li>
</ul>
</div>
</div>
</div>
<div class="inv-pricing-double-layer-lower">
<div class="inv-pricing-double-layer-button"><a class="inv-pricing-double-layer-link" href="#">Get Started</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-pricing-double-layer-wrapper">
<div class="inv-pricing-double-layer-inner inv-pricing-double-secondary">
<div class="inv-pricing-double-layer-upper centered-box">
<div class="inv-pricing-double-layer-content">
<div class="inv-pricing-double-layer-title-holder">
<h1 class="inv-pricing-double-layer-title">BUSINESS</h1>
</div>
<div class="inv-pricing-double-layer-price-holder">
<h2 class="inv-pricing-double-layer-title-holder">$49</h2>
</div>
<div class="inv-pricing-double-layer-title-desc">
<ul>
	<li>Unlimited Support</li>
	<li>10GB Space</li>
	<li>1 Free Domain</li>
</ul>
</div>
</div>
</div>
<div class="inv-pricing-double-layer-lower">
<div class="inv-pricing-double-layer-button"><a class="inv-pricing-double-layer-link" href="#">upgrade</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action4.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504788870874{background-image: url(http://invictus.insigniats.in/creative-agency-2/wp-content/uploads/2017/09/startup-bg1.png?id=75) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="90px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="An Awesome Team For Your Next Project." subtitle="Creative minds" align="text-center" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482465677{margin-bottom: 35px !important;padding-right: 20% !important;padding-left: 20% !important;}"][vc_empty_space height="40px"][insignia_button button_style="second" btn_text="Get in touch" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#ffffff" bg_color="#f7224a" border_color="#f7224a"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra9.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/2"][insignia_section_heading title="We provide wide range of business services" subtitle="Our Locations" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482636258{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner gap="15"][vc_column_inner width="1/2"][vc_column_text]
<div class="inv-multi-address-wrapper">
<div class="inv-multi-address-inner">
<div class="inv-multi-address-thumb-holder">
<div class="inv-multi-address-thumb"><img src="./wp-content/uploads/2017/09/agency-img.jpg" alt="city" /></div>
<div class="inv-multi-address-city-info-holder" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h2 class="inv-multi-address-city white-color">London</h2>
</div>
<div class="inv-multi-address-overlay"><!--address--></div>
</div>
<div class="inv-multi-address-meta-holder clearfix">
<div class="inv-multi-address-column col-md-6 no-padding" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h5><span class="ti-location-pin inv-multi-address-icon pc"><!--icon--></span> Address</h5>
<p class="inv-multi-address-meta inv-multi-address-address">125, Suitland Street, c.g square road, california, BR1 1AA, USA</p>

</div>
<div class="inv-multi-address-column col-md-6" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h5><span class="ti-headphone-alt inv-multi-address-icon pc"><!--icon--></span> Phone/Email</h5>
<p class="inv-multi-address-meta inv-multi-address-phone">685-8575-896, 325-6584-965
admin@invictus.com</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="inv-multi-address-wrapper">
<div class="inv-multi-address-inner">
<div class="inv-multi-address-thumb-holder">
<div class="inv-multi-address-thumb"><img src="./wp-content/uploads/2017/09/agency-img-3.jpg" alt="city" /></div>
<div class="inv-multi-address-city-info-holder" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h2 class="inv-multi-address-city white-color">New York</h2>
</div>
<div class="inv-multi-address-overlay"><!--address--></div>
</div>
<div class="inv-multi-address-meta-holder clearfix">
<div class="inv-multi-address-column col-md-6 no-padding" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h5><span class="ti-location-pin inv-multi-address-icon pc"><!--icon--></span> Address</h5>
<p class="inv-multi-address-meta inv-multi-address-address">125, Suitland Street, c.g square road, BR1 1AA, california, USA</p>

</div>
<div class="inv-multi-address-column col-md-6" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h5><span class="ti-headphone-alt inv-multi-address-icon pc"><!--icon--></span> Phone/Email</h5>
<p class="inv-multi-address-meta inv-multi-address-phone">685-8575-896, 325-6584-965
admin@invictus.com</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact8.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1504850815581{background-image: url(http://invictus.insigniats.in/creative-agency-2/wp-content/uploads/2017/09/startup-bg2.png?id=74) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="90px"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1504851631454{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #ffffff !important;}"][insignia_section_heading title="Sign up to our newsletter" subtitle="Newsletter" align="text-left" heading_tag="h2" font_weight="default" heading_color="#47354e" subtitle_fs="text-large" subtitle_font_weight="font-weight-700" subtitle_color="#f7224a" separator_color="#f7224a" css=".vc_custom_1522482726250{margin-bottom: 35px !important;padding-right: 20% !important;}"][vc_column_text]
<p class="medium-text" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">There are many variations of passages of Lorem Ipsum available There are many variations of passages of Lorem Ipsum available.</p>

[/vc_column_text][vc_column_text]
<div class="invictus-newsletter-form-dark clearfix" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><input name="email" type="email" placeholder="email" /><button class="invictus-newsletter-button-dark"><i class="ti-arrow-right"><!--icon--></i></button></div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504865490613{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-image: url(http://invictus.insigniats.in/creative-agency-2/wp-content/uploads/2017/09/agency-8.jpg?id=141) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row]
	
CONTENT;

// Digital Agency

$templates[] = $data;

	//Services 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service8.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row gap="20"][vc_column width="1/2"][insignia_section_heading title="Creating outcomes, not outputs" subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522492549913{margin-bottom: 35px !important;padding-right: 20% !important;}"][vc_column_text]here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.

[/vc_column_text][insignia_button button_style="three" btn_text="View Works" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#181d81" border_color="#181d81" border_radius="50px"][/vc_column][vc_column width="1/2"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-agenda" icon_size="icon-extra-medium" icon_title="BRANDING" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#46dfb4" title_color="#181d81"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-link" icon_size="icon-extra-medium" icon_title="STRATEGY" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#46dfb4" title_color="#181d81"][/vc_column_inner][/vc_row_inner][vc_empty_space height="35px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-bookmark-alt" icon_size="icon-extra-medium" icon_title="MARKETING" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#46dfb4" title_color="#181d81"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-shield" icon_size="icon-extra-medium" icon_title="DEVELOPMENT" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#46dfb4" title_color="#181d81"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra10.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1504685368293{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-image: url(http://invictus.insigniats.in/digital-agency/wp-content/uploads/2017/09/digital-agency-1.png?id=29) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="50px"][vc_column_text]
<div class="large-font centered-box">
<h1 class="white-color">We specialise in bridging the gap between <span class="sc">business</span> and <span class="sc">design</span>.</h1>
</div>
[/vc_column_text][vc_empty_space height="50px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504685224325{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #f2f3f5 !important;}"][vc_empty_space height="50px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22Strategy%22%2C%22value%22%3A%2293%22%7D%5D" bgcolor="custom" options="animated" custombgcolor="#181d81" customtxtcolor="#343434" el_class="inv-strong-skills-wrapper" units="%"][vc_empty_space height="50px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service9.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][insignia_section_heading title="What we stand for" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522492512331{margin-bottom: 35px !important;}"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-primary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">Discovery</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-secondary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">e-Commerce</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-primary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">Photography</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-secondary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">Webhosting</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-primary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">Digital Strategy</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="da-service-box-wrapper da-service-box-secondary">
<div class="da-service-box-inner">
<div class="da-service-box-content">
<h4 class="da-service-box-title">Mobile App</h4>
<p class="da-service-box-desc">Planning / Strategy</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service10.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" full_height="yes" columns_placement="stretch" content_placement="middle"][vc_column width="1/2" css=".vc_custom_1504692442683{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #f2f3f5 !important;}"][insignia_section_heading title="Creating outcomes, not outputs" subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522492549913{margin-bottom: 35px !important;padding-right: 20% !important;}"][vc_column_text]

here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.

[/vc_column_text][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-mobile" icon_title=" Cros-devices ability" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#181d81"][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-check-box" icon_title="Be on the top of Google" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#46dfb4" title_color="#181d81"][/vc_column][vc_column width="1/2" css=".vc_custom_1504701994672{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-image: url(http://invictus.insigniats.in/digital-agency/wp-content/uploads/2017/09/da-3.jpg?id=83) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="80px"][vc_column_text]
<div class="inv-video-play-icon-two centered-box"><a class="inv-video-popup-two" href="https://vimeo.com/221152916"><!--icon--></a></div>
[/vc_column_text][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial6.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504768504577{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="Customer reviews" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522492955191{margin-bottom: 35px !important;}"][vc_empty_space height="30px"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Fourth Option" autoplay="true" slidetoshow="3" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" test_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter4.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504702410319{background-image: url(http://invictus.insigniats.in/digital-agency/wp-content/uploads/2017/09/digital-agency-1.png?id=29) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="da-counter-wrapper" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="da-counter-inner">
<div class="da-counter-icon"><span class="ti-ruler-pencil counter-icon"><!--icon--></span></div>
<div class="da-counter-info">
<div class="da-counter-number sc insignia-up-counter">105</div>
<div class="da-counter-text">Projects Finished</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="da-counter-wrapper" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="da-counter-inner">
<div class="da-counter-icon"><span class="ti-user counter-icon"><!--icon--></span></div>
<div class="da-counter-info">
<div class="da-counter-number sc insignia-up-counter">240</div>
<div class="da-counter-text">Creative Members</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="da-counter-wrapper" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="da-counter-inner">
<div class="da-counter-icon"><span class="ti-world counter-icon"><!--icon--></span></div>
<div class="da-counter-info">
<div class="da-counter-number sc insignia-up-counter">3250</div>
<div class="da-counter-text">Buyers Worldwide</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="da-counter-wrapper" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="da-counter-inner">
<div class="da-counter-icon"><span class="ti-cup counter-icon"><!--icon--></span></div>
<div class="da-counter-info">
<div class="da-counter-number sc insignia-up-counter">530</div>
<div class="da-counter-text">satisfied customers</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients3.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][insignia_section_heading title="A selection of the clients that trust us" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522492983736{margin-bottom: 35px !important;}"][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]
<div class="inv-clients-wrapper clearfix">
<div class="inv-clients-inner clearfix">
<div class="inv-clients-item col-md-3"><a class="inv-clients-link" href="#" target="_self"><img class="inv-clients-image" src="./wp-content/uploads/2017/11/inv-brand_02.jpg" alt="clients-image" /></a></div>
<div class="inv-clients-item col-md-3"><a class="inv-clients-link" href="#" target="_self"><img class="inv-clients-image" src="./wp-content/uploads/2017/11/inv-brand_03.jpg" alt="clients-image" /></a></div>
<div class="inv-clients-item col-md-3"><a class="inv-clients-link" href="#" target="_self"><img class="inv-clients-image" src="./wp-content/uploads/2017/11/inv-brand_04.jpg" alt="clients-image" /></a></div>
<div class="inv-clients-item col-md-3"><a class="inv-clients-link" href="#" target="_self"><img class="inv-clients-image" src="./wp-content/uploads/2017/11/inv-brand_05.jpg" alt="clients-image" /></a></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="80px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact9.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1504766741491{background-color: #181d81 !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner el_class="inv-agency-contact-inner-row" width="1/3" css=".vc_custom_1510766630454{padding-top: 15% !important;}"][insignia_section_heading title="Contact" subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#46dfb4" css=".vc_custom_1522493366353{margin-bottom: 35px !important;}"][vc_column_text css=".vc_custom_1522493982564{padding-bottom: 10px !important;}"]
<h5 class="white-color font-weight-700 margin-5px-bottom">Email</h5>
<p class="white-color">example@invictus.com</p>
[/vc_column_text][vc_column_text css=".vc_custom_1522493989040{padding-bottom: 10px !important;}"]
<h5 class="white-color font-weight-700 margin-5px-bottom">Phone</h5>
<p class="white-color">+01 325 658 9874</p>
[/vc_column_text][vc_column_text css=".vc_custom_1522493994892{padding-bottom: 10px !important;}"]
<h5 class="white-color font-weight-700 margin-5px-bottom">Address</h5>
<p class="white-color">654, happy street, New York.</p>
[/vc_column_text][insignia_social_icons color="colorful" border_radius="round" icon_size="regular" hover_effect="slideup" icon_align="left" twitter="#" facebook="#" linkedin="#" behance="#"][/vc_column_inner][vc_column_inner el_class="fl-form-section-holder" width="2/3"][insignia_section_heading title="Get in Touch" subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#181d81" subtitle_font_weight="" separator_color="#181d81" css=".vc_custom_1522493373774{margin-bottom: 35px !important;}"][contact-form-7 id="4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
	
CONTENT;

// Creative Agency

$templates[] = $data;

	//Call to Action 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action5.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][vc_column_text css=".vc_custom_1511863632417{padding-right: 30px !important;padding-left: 30px !important;}"]
<div class="centered-box" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<h1>We create <span class="pc">websites</span>, <span class="pc">technology</span> and <span class="pc">strategies</span> for innovative marketing to help brands excel in digital culture.</h1>
</div>
[/vc_column_text][vc_empty_space height="30px"][insignia_button button_style="three" btn_text="View Works" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f9f9f9" bg_color="#ff5454" border_color="#ff5454" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service11.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC13cmFwcGVyJTIyJTIwc3R5bGUlM0QlMjJiYWNrZ3JvdW5kLWltYWdlJTNBJTIwdXJsJTI4JTI3LiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA5JTJGY3JlYXRpdmUtYWdlbmN5LTEuanBnJTI3JTI5JTNCJTIyJTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1pbm5lciUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtb3ZlcmxheS1ob2xkZXIlMjIlM0UlM0NkaXYlMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLW92ZXJsYXklMjIlMjBzdHlsZSUzRCUyMmJhY2tncm91bmQtY29sb3IlM0ElMjAlMjMzNTNiNTQlM0IlMjIlM0UlM0MlMjEtLW92ZXJsYXktLSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1saW5rJTIyJTIwZGF0YS1hb3MlM0QlMjJmYWRlLWluJTIyJTIwZGF0YS1hb3MtYW5jaG9yLXBsYWNlbWVudCUzRCUyMmJvdHRvbS1ib3R0b20lMjIlMjBkYXRhLWFvcy1kdXJhdGlvbiUzRCUyMjUwMCUyMiUzRSUzQ3NlY3Rpb24lMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLWluZm8lMjIlM0UlM0NoMyUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtdGl0bGUlMjB3aGl0ZS1jb2xvciUyMiUzRVNpbXBsaWNpdHklMjBCZXN0JTIwUmVjaXBlJTIwZm9yJTIwTW9uYWNvJTIwUm9hZCUyMFRyYXZlbGVycyUzQyUyRmgzJTNFJTNDJTJGc2VjdGlvbiUzRSUzQyUyRmElM0UlM0MlMkZkaXYlM0UlM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC13cmFwcGVyJTIyJTIwc3R5bGUlM0QlMjJiYWNrZ3JvdW5kLWltYWdlJTNBJTIwdXJsJTI4JTI3LiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA5JTJGY3JlYXRpdmUtYWdlbmN5LTIuanBnJTI3JTI5JTNCJTIyJTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1pbm5lciUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtb3ZlcmxheS1ob2xkZXIlMjIlM0UlM0NkaXYlMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLW92ZXJsYXklMjIlMjBzdHlsZSUzRCUyMmJhY2tncm91bmQtY29sb3IlM0ElMjAlMjMzNTNiNTQlM0IlMjIlM0UlM0MlMjEtLW92ZXJsYXktLSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1saW5rJTIyJTIwZGF0YS1hb3MlM0QlMjJmYWRlLWluJTIyJTIwZGF0YS1hb3MtYW5jaG9yLXBsYWNlbWVudCUzRCUyMmJvdHRvbS1ib3R0b20lMjIlMjBkYXRhLWFvcy1kdXJhdGlvbiUzRCUyMjUwMCUyMiUzRSUzQ3NlY3Rpb24lMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLWluZm8lMjIlM0UlM0NoMyUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtdGl0bGUlMjB3aGl0ZS1jb2xvciUyMiUzRTclMjBJY2VsYW5kaWMlMjBJbnRlcmlvciUyMERlc2lnbiUyMEhpZ2hsaWdodHMlMjBPZiUyMEFwcmlsJTIwMjAxNyUzQyUyRmgzJTNFJTNDJTJGc2VjdGlvbiUzRSUzQyUyRmElM0UlM0MlMkZkaXYlM0UlM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC13cmFwcGVyJTIyJTIwc3R5bGUlM0QlMjJiYWNrZ3JvdW5kLWltYWdlJTNBJTIwdXJsJTI4JTI3LiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEwJTJGY3JlYXRpdmUtYWdlbmN5LTMuanBnJTI3JTI5JTNCJTIyJTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1pbm5lciUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtb3ZlcmxheS1ob2xkZXIlMjIlM0UlM0NkaXYlMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLW92ZXJsYXklMjIlMjBzdHlsZSUzRCUyMmJhY2tncm91bmQtY29sb3IlM0ElMjAlMjMzNTNiNTQlM0IlMjIlM0UlM0MlMjEtLW92ZXJsYXktLSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ2ElMjBocmVmJTNEJTIyJTIzJTIyJTIwY2xhc3MlM0QlMjJpbnYtaW1hZ2UtQ2FyZC1saW5rJTIyJTIwZGF0YS1hb3MlM0QlMjJmYWRlLWluJTIyJTIwZGF0YS1hb3MtYW5jaG9yLXBsYWNlbWVudCUzRCUyMmJvdHRvbS1ib3R0b20lMjIlMjBkYXRhLWFvcy1kdXJhdGlvbiUzRCUyMjUwMCUyMiUzRSUzQ3NlY3Rpb24lMjBjbGFzcyUzRCUyMmludi1pbWFnZS1DYXJkLWluZm8lMjIlM0UlM0NoMyUyMGNsYXNzJTNEJTIyaW52LWltYWdlLUNhcmQtdGl0bGUlMjB3aGl0ZS1jb2xvciUyMiUzRVNpbXBsaWNpdHklMjBCZXN0JTIwUmVjaXBlJTIwZm9yJTIwTW9uYWNvJTIwUm9hZCUyMFRyYXZlbGVycyUzQyUyRmgzJTNFJTNDJTJGc2VjdGlvbiUzRSUzQyUyRmElM0UlM0MlMkZkaXYlM0UlM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections3.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504611810381{background-image: url(http://invictus.insigniats.in/creative-agency/wp-content/uploads/2017/09/ca-bg-1.png?id=50) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][insignia_section_heading title="We are best in" subtitle="" align="text-center" separator="disable" heading_tag="h1" heading_font_size="50" font_weight="default" heading_color="#f4f4f4" subtitle_font_weight=""][vc_column_text css=".vc_custom_1511863697421{padding-right: 30px !important;padding-left: 30px !important;}"]
<div class="large-font centered-box ca-link-holder" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500"><a class="ca-link-hover inv-main-title white-color" href="#">Digital</a> <a class="ca-link-hover inv-main-title white-color" href="#">Marketing</a> <a class="ca-link-hover inv-main-title white-color" href="#">Branding</a></div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_empty_space height="30px"][vc_column_text]
<p class="centered-box white-color medium-text" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">Invictus sets the trend in creative promotional sites and web services. Digital and mobile expertise powers our award-winning designs and innovative high-end products.</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box7.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Services We offer" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#353b54" subtitle_font_weight="" separator_color="#ff5454" css=".vc_custom_1522495107191{margin-bottom: 30px !important;}"][vc_column_text]
<p class="centered-box medium-text">Invictus sets the trend in creative promotional sites and web services. Digital and mobile expertise powers our award-winning designs and innovative high-end products.</p>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15" css=".vc_custom_1504609959676{padding-bottom: 20px !important;}"][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-brush-alt shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Creativity</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-ruler-pencil shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Illustration</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-paragraph shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Typography</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15"][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-camera shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Photography</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-printer shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Print Media</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="ca-icon-box icon-box-shadow-circle" data-aos="fade-in" data-aos-anchor-placement="bottom-bottom" data-aos-duration="500">
<div class="ca-icon-box-inner">
<div class="ca-icon-box-icon"><span class="ti-stats-up shadow-box-icon pc"><!--icon--></span></div>
<div class="ca-icon-box-info">
<h3 class="ca-icon-box-title">Promotions</h3>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action6.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504616276398{background-color: #353b54 !important;}"][vc_column][vc_empty_space height="35px"][vc_row_inner content_placement="middle"][vc_column_inner width="2/3"][vc_column_text css=".vc_custom_1508137006091{margin-bottom: 0px !important;}"]
<div class="inv-cta-wrapper">
<h3 class="white-color inv-cta-text">We Discover Design &amp; Build digital services &amp; products to help companies become more efficient &amp; engaging</h3>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_button button_style="first" btn_text="Purchase Now for $39" btn_link="url:%23||target:%20_blank|" button_size="medium" button_align="text-center" extra_class="inv-upper-space" text_color="#ffffff" hover_text_color="#ff5454" bg_color="#ff5454" hover_bg_color="rgba(0,0,0,0.01)" border_color="#ff5454" hover_border_color="#ff5454" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="65px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra11.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Invictus is an ideas and innovation company. We exist to create the future with our clients." subtitle="" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#353b54" subtitle_font_weight="" css=".vc_custom_1522495172974{margin-bottom: 35px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="30"][vc_column_inner width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Graphic%20Design%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%5D" bgcolor="custom" options="animated" el_class="fl-skills-wrapper-thin" units="%" custombgcolor="#ff5454" customtxtcolor="#353b54"][/vc_column_inner][vc_column_inner width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Adobe%20Photoshop%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22Content%20Creating%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Adobe%20Photoshop%22%2C%22value%22%3A%2293%22%7D%5D" bgcolor="custom" el_class="fl-skills-wrapper-thin" units="%" custombgcolor="#ff5454" customtxtcolor="#353b54"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Clients 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients4.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504678159502{background-color: #f2f2f2 !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Clients that trust us" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#353b54" subtitle_font_weight="" separator_color="#ff5454" css=".vc_custom_1522495575896{margin-bottom: 30px !important;}"][vc_column_text]
<p class="centered-box medium-text">Invictus sets the trend in creative promotional sites and web services. Digital and mobile expertise powers our award-winning designs and innovative high-end products.</p>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]
<div class="inv-clients-text-wrapper">
<div class="inv-clients-text-inner centered-box"><a class="text sc" href="#">ICBC</a> <a class="text sc" href="#">Shell</a> <a class="text sc" href="#">Apple</a> <a class="text sc" href="#">PetroChina</a> <a class="text sc" href="#">Wells Fargo</a> <a class="text sc" href="#">Chevron</a> <a class="text sc" href="#">Volkswagen</a> <a class="text sc" href="#"> WalMart</a> <a class="text sc" href="#">AT&amp;T</a></div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial7.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1508135090320{background-image: url(http://invictus.insigniats.in/creative-agency/wp-content/uploads/2017/10/agency-workers.jpg?id=127) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Sixth Option" autoplay="true" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" font_color="#ffffff" title_font_color="#ffffff" position_font_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact10.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1504617738508{background-color: #353b54 !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Don’t be shy. Say hi!" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ff5454" css=".vc_custom_1522495650391{margin-bottom: 30px !important;}"][vc_column_text]
<p class="centered-box medium-text white-color">Enter your details &amp; we’ll be in touch to discuss your project</p>
[/vc_column_text][vc_empty_space height="30px"][contact-form-7 id="4"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

// Startup

$templates[] = $data;

	//About 8 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about8.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="startup-image-box-wrapper">
<div class="startup-image-box-inner startup-intro-image-box-featured">
<div class="startup-intro-image-box-featured-content">
<div class="startup-image-box-title">
<h4>Design and Developing</h4>
</div>
<div class="startup-title-separator"><!--separator--></div>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
<div class="startup-button-holder"><a class="startup-button" href="#">Read More</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="86" image_title="Creative team" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem Ipsum available, but the majority." enable_button="" box_align="text-left" title_font="text-extra-large" title_font_weight="font-weight-700" btn_font_weight="default" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="98" image_title="Fast Support" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, Lorem Ipsum available, but the majority." enable_button="" box_align="text-left" title_font="text-extra-large" title_font_weight="font-weight-700" btn_font_weight="default" title_color="#343434"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box8.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504528390823{background-color: #1d1d1d !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Awesome international graphic design and digital advertising agency based in India" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-600" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ee322a"][vc_empty_space height="30px"][vc_column_text]
<p class="white-color medium-text">here are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-ruler-pencil" icon_size="icon-extra-medium" icon_title="Illustration" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-paragraph" icon_size="icon-extra-medium" icon_title="Typography" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-camera" icon_size="icon-extra-medium" icon_title="Photography" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service12.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row el_class="vc_col-lg-offset-1 vc_col-lg-10"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Why We Are Best" subtitle="" align="text-center" heading_tag="h2" font_weight="font-weight-700" subtitle_font_weight="" separator_color="#ee322a"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1504513697679{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="31" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504513702075{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<div class="inv-process-box-wrapper">
<div class="inv-process-box-inner text-left">
<h1 class="inv-process-number">01</h1>
<div class="inv-process-content">
<div class="inv-process-sub-title">
<h6>ILLUSTRATION</h6>
</div>
<div class="inv-process-title">
<h3>The right team for your project.</h3>
</div>
<div class="inv-process-decs">

Maecenas tempus, tellus eget condimentum rhon cus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.

</div>
<div class="startup-button-holder"><a class="startup-button" href="#">Learn More</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1504513697679{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<div class="inv-process-box-wrapper">
<div class="inv-process-box-inner text-right">
<h1 class="inv-process-number">02</h1>
<div class="inv-process-content">
<div class="inv-process-sub-title">
<h6>ILLUSTRATION</h6>
</div>
<div class="inv-process-title">
<h3>The right team for your project.</h3>
</div>
<div class="inv-process-decs">

Maecenas tempus, tellus eget condimentum rhon cus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.

</div>
<div class="startup-button-holder"><a class="startup-button" href="#">Learn More</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504513702075{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="241" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter5.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1522408179709{padding-top: 60px !important;padding-bottom: 60px !important;background-color: #1d1d1d !important;}"][vc_column width="1/3"][insignia_section_heading title="We Have Great Achievement To Show!!" subtitle="" align="text-right" separator="disable" heading_tag="h1" font_weight="default" heading_color="#f4f4f4" subtitle_font_weight=""][vc_empty_space height="30px"][/vc_column][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/3"][milestone title="on going projects" number="150" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-bookmark-alt" align="text-center" text_transform="text-uppercase" icon_size="35" num_size="54" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ee322a" num_color="#f4f4f4" title_color="#949494"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="projects finished" number="340" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-check-box" align="text-center" text_transform="text-uppercase" icon_size="35" num_size="54" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ee322a" num_color="#f4f4f4" title_color="#949494"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="buyers worldwide" number="590" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-world" align="text-center" text_transform="text-uppercase" icon_size="35" num_size="54" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ee322a" num_color="#f4f4f4" title_color="#949494"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing3.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][insignia_section_heading title="Our pricing plans" subtitle="" align="text-center" heading_tag="h2" font_weight="font-weight-700" subtitle_font_weight="" separator_color="#ee322a"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="first" package_name="STANDARD" price_value="$" package_price="99.99" price_sub_heading="PER MONTH" button_text="Buy this Plan" button_link="#" bg_color=""]
<ul>
 	<li>Unlimited Support</li>
 	<li>10GB Space</li>
 	<li>1 Free Domain</li>
 	<li>1 GB Bandwidth</li>
 	<li>100 Email Addresses</li>
 	<li>–</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="first" package_name="BUSINESS" price_value="$" package_price="150.99" price_sub_heading="PER MONTH" button_text="Buy this Plan" button_link="#" bg_color=""]
<ul>
 	<li>Unlimited Support</li>
 	<li>10GB Space</li>
 	<li>1 Free Domain</li>
 	<li>1 GB Bandwidth</li>
 	<li>100 Email Addresses</li>
 	<li>–</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="first" package_name="PREMIUM" price_value="$" package_price="199.99" price_sub_heading="PER MONTH" button_text="Buy this Plan" button_link="#" bg_color=""]
<ul>
 	<li>Unlimited Support</li>
 	<li>10GB Space</li>
 	<li>1 Free Domain</li>
 	<li>1 GB Bandwidth</li>
 	<li>100 Email Addresses</li>
 	<li>–</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// SEO

$templates[] = $data;

	//Icon Boxes 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box9.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="13" icon_align="text-left" icon_title="Website Analytics" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.<br />
" btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#103754" separator_color="#4dbd99"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="9" icon_align="text-left" icon_title="High Performance" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.<br />
" btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#103754" separator_color="#4dbd99"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="11" icon_align="text-left" icon_title="Search Optimization" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.<br />
" btn_check="" hover_box_shadow="ins-icon-hover-box-shadow" separator="enable" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#103754" separator_color="#4dbd99"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 9 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about9.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504267430860{background-color: #f1f7fd !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1504265493141{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][insignia_section_heading title="Our Clients Come First. Unmatched SEO Results Nationwide." subtitle="Welcome" align="text-left" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#103754" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-300" subtitle_color="#4dbd99" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.[/vc_column_text][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="29" icon_title="Cros-devices ability" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br />
" btn_check="" title_font="20" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#103754"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="23" icon_title="Be on the top of Google" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br />
" btn_check="" title_font="20" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#103754"][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="70px"][vc_single_image image="148" img_size="full" alignment="center" css=".vc_custom_1504354182887{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="70px"][vc_single_image image="94" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Ready to increase your traffic with a top rated SEO Company?" subtitle="Welcome" align="text-left" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#103754" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-300" subtitle_color="#4dbd99" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.[/vc_column_text][insignia_simple_icon_list list_items="More than 10 years of experience,More In-Bound Leads,Increased Call Volume,Risk-Free Site Audit,Available 24 hours a day 7 days a week" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#4dbd99" text_color="#5f727f" icon_fontawesome="fa fa-check"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact11.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1504353032497{background-image: url(http://invictus.insigniats.in/seo/wp-content/uploads/2017/09/seo-pattern-bg.png?id=67) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Contact Us For Free Site Analysis" subtitle="Check for free" align="text-center" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#ffffff" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-300" subtitle_color="#4dbd99" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]</p>
<p class="centered-box medium-text white-color">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][contact-form-7 id="6"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service13.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Our Services" subtitle="Welcome" align="text-center" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#103754" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-300" subtitle_color="#4dbd99" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]</p>
<p class="centered-box medium-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="639" image_title="Website Analytics" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-400" title_color="#103754" btn_color="#103754"][/vc_column_inner][vc_column_inner width="1/4"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="641" image_title="Keyword Targeting" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-400" title_color="#103754" btn_color="#103754"][/vc_column_inner][vc_column_inner width="1/4"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="638" image_title="Ranking Protection" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-400" title_color="#103754" btn_color="#103754"][/vc_column_inner][vc_column_inner width="1/4"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="640" image_title="Social Media" image_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-400" title_color="#103754" btn_color="#103754"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-02', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio2.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504332570646{background-color: #f1f7fd !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Case Studies of Our Projects" subtitle="Portfolio" align="text-center" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#103754" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-300" subtitle_color="#4dbd99" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]</p>
<p class="centered-box medium-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][portfolio port_layout="port_grid4" port_on_hover="layout_3" port_cat="" port_filter="" port_no_posts="8" port_gap="30" port_overlay_color="#4dbd99" title_size="21" title_color="#103754" category_color="#103754"][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial8.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504352992257{background-image: url(http://invictus.insigniats.in/seo/wp-content/uploads/2017/09/seo-bg2-1.png?id=142) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner css=".vc_custom_1504345853856{margin-bottom: 0px !important;}"][testimonial testimonial_layout="Third Option" autoplay="false" slidetoshow="2" testimonial_navigation_dots="true" testimonial_navigation_arrows="false" infinite="true" font_color="#ffffff" title_font_color="#ffffff" position_font_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/4"][vc_single_image image="110" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="109" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="108" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="106" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Contact 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact12.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1504352688754{background-color: #103754 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/3" css=".vc_custom_1504347612251{padding-right: 25px !important;padding-left: 25px !important;}"][insignia_section_heading title="Contact details" subtitle="" align="text-left" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#ffffff" subtitle_font_weight="" separator_color="#4dbd99"][vc_empty_space height="35px"][vc_column_text]</p>
<p class="white-color medium-text">It is a long established fact that a reader will be distracted by the readable.</p>
<p>[/vc_column_text][vc_column_text]</p>
<div class="seo-single-contact-wrapper">
<div class="seo-single-contact-inner">
<div class="seo-single-contact-icon"><span class="ti-headphone-alt contact-icon pc"><!--icon--></span></div>
<div class="seo-single-contact-text white-color">(+01) 254 652 9874</div>
</div>
<div class="seo-single-contact-inner">
<div class="seo-single-contact-icon"><span class="ti-email contact-icon pc"><!--icon--></span></div>
<div class="seo-single-contact-text white-color">admin@invictus.com</div>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1504350751565{border-left-width: 1px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;border-left-color: #687484 !important;border-left-style: solid !important;}"][vc_column_text css=".vc_custom_1508825710708{margin-bottom: 0px !important;}"]</p>
<div class="seo-multi-add-wrapper clearfix">
<div class="seo-multi-add-inner clearfix">
<div class="seo-multi-add-map"><img src="./wp-content/uploads/2017/09/New-York.png" alt="map" /></div>
<div class="seo-multi-add-content">
<h6 class="white-color">Address</h6>
<p class="white-color">654 Gulberg St. Upper East Side, Ashram Road,<br />
London 54700.</p>
<div class="seo-multi-add-phone white-color"><span class="ti-headphone-alt contact-icon pc"><!--icon--></span>(+01) 254 652 9874</div>
<div class="seo-multi-add-phone white-color"><span class="ti-email contact-icon pc"><!--icon--></span>admin@invictus.com</div>
</div>
<div class="seo-multi-add-button">
<div class="seo-button-holder"><a class="seo-button" href="#">view map</a></div>
</div>
</div>
</div>
<p>[/vc_column_text][vc_column_text css=".vc_custom_1508825741283{margin-bottom: 0px !important;border-top-width: 1px !important;border-top-color: #687484 !important;border-top-style: solid !important;}"]</p>
<div class="seo-multi-add-wrapper clearfix">
<div class="seo-multi-add-inner clearfix">
<div class="seo-multi-add-map"><img src="./wp-content/uploads/2017/09/Gujarat.png" alt="map" /></div>
<div class="seo-multi-add-content">
<h6 class="white-color">Address</h6>
<p class="white-color">124 Gulberg St. Upper East Side, Ashram Road,<br />
Ahmedabad, India.</p>
<div class="seo-multi-add-phone white-color"><span class="ti-headphone-alt contact-icon pc"><!--icon--></span>(+01) 254 652 9874</div>
<div class="seo-multi-add-phone white-color"><span class="ti-email contact-icon pc"><!--icon--></span>admin@invictus.com</div>
</div>
<div class="seo-multi-add-button">
<div class="seo-button-holder"><a class="seo-button" href="#">view map</a></div>
</div>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="95px"][/vc_column][/vc_row]</p>

	
CONTENT;


// Mobile App


$templates[] = $data;

	//Icon Boxes 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box10.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="About Invictus" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#2a3b71" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper centered-box">
<p class="app-title-sub-text">Lorem ipsum dolor sit amet eu debet utinam vim. Idque accusam ea sit has justo adversarium repudiandae id.</p>

</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15"][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="557" icon_align="text-center" icon_title="ACCESSIBILITY" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicin" btn_check="" box_shadow="ins-icon-box-shadow" separator="disable" title_font="20" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" title_color="#2a3b71" text_color="#2a3b71"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="558" icon_align="text-center" icon_title="UPDATABLE" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicin" btn_check="" box_shadow="ins-icon-box-shadow" separator="disable" title_font="20" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#2a3b71" text_color="#2a3b71"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="554" icon_align="text-center" icon_title="FLEXIBILITY" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicin" btn_check="" box_shadow="ins-icon-box-shadow" separator="disable" title_font="20" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#2a3b71" text_color="#2a3b71"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;




$templates[] = $data;

	//Icon Boxes 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box11.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504249466039{background-image: url(http://invictus.insigniats.in/mobile-app/wp-content/uploads/2017/08/app-bg.png?id=78) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="OUR FEATURES" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper centered-box">
<p class="app-title-sub-text white-color">Lorem ipsum dolor sit amet eu debet utinam vim. Idque accusam ea sit has justo adversarium repudiandae id.</p>

</div>
[/vc_column_text][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-write" icon_size="icon-extra-large" icon_title="Creative Task" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-heart" icon_size="icon-extra-large" icon_title="Made with love" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-stats-up" icon_size="icon-extra-large" icon_title="Advanced Option" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-import" icon_size="icon-extra-large" icon_title="Quick Import" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-desktop" icon_size="icon-extra-large" icon_title="Fully Responsive" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-bookmark-alt" icon_size="icon-extra-large" icon_title="Easy to Customize" icon_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-300" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service14.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504204304368{background-color: #ecf0f4 !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="app-mini-title">
<h5>Subscribe To Our Newsletter
For Fast Updates &amp; News</h5>
<div></div>
</div>
[/vc_column_text][vc_column_text]
<div class="app-medium-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
[/vc_column_text][vc_empty_space height="15px"][insignia_icon_box layout_style="ins-icon-box-icon-near-title" icon_type="themify" icon_themify="ti-import" icon_title="USER FRIENDLY" sub_title="Lorem ipsum doler" icon_text="The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested." btn_check="" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#2a3b71" title_color="#2a3b71" sub_title_color="#2a3b71" text_color="#2a3b71"][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-icon-box-icon-near-title" icon_type="themify" icon_themify="ti-cup" icon_title="BEST APP AWARD" sub_title="Lorem ipsum doler" icon_text="The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested." btn_check="" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#2a3b71" title_color="#2a3b71" sub_title_color="#2a3b71" text_color="#2a3b71"][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="40px"][vc_single_image image="24" img_size="full" alignment="center"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Image Gallery 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery3.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="screenshots" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#2a3b71" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper centered-box">
<p class="app-title-sub-text">Lorem ipsum dolor sit amet eu debet utinam vim. Idque accusam ea sit has justo adversarium repudiandae id.</p>

</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][insignia_image_gallery design_style="carousel" attach_images="155,156,157,158,159,160" hover_text="" gallery_gap="30" imgs_slidetoshow="4" carousel_infinite="false" carousel_dots="false" carousel_arrows="false"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections4.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504251609966{background-image: url(http://invictus.insigniats.in/mobile-app/wp-content/uploads/2017/08/app-bg.png?id=78) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/2"][insignia_section_heading title="Download Invictus now" subtitle="" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper">
<p class="app-title-sub-text white-color">Lorem ipsum dolor sit amet eu debet utinam vim. Idque accusam ea sit has justo adversarium repudiandae id. Quo ex alia natum tritani Idque accusam ea sit has justo</p>

</div>
[/vc_column_text][vc_column_text]
<div class="app-dowload-buttons-holder">
<div class="app-dowload-buttons">
<div class="app-button-holder"><a class="app-button-white" href="#"><i class="fa fa-apple app-button-icon" aria-hidden="true"></i>App store</a><a class="app-button-white" href="#"><i class="fa fa-play app-button-icon" aria-hidden="true"></i>Google play</a></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="338" img_size="full"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing4.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_empty_space height="30px"][insignia_section_heading title="Choose best plan and enjoy our services." subtitle="" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#2a3b71" subtitle_font_weight=""][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="three" package_name="Pro" price_value="$" package_price="23" price_sub_heading="Month" button_text="Order Now" button_link="#" bg_color=""]
<ul>
 	<li>10 GB FREE SPACE</li>
 	<li>2 Subdomains</li>
 	<li>Webmail Support</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="three" package_name="Pro" price_value="$" package_price="20" price_sub_heading="Month" button_text="Order Now" button_link="#" bg_color=""]
<ul>
 	<li>5 GB free spack</li>
 	<li><del>8 GB RAM</del></li>
 	<li><del>Unlimited Bandwidth</del></li>
</ul>
[/insignia_pricing_table][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections5.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504251629046{background-image: url(http://invictus.insigniats.in/mobile-app/wp-content/uploads/2017/08/app-bg.png?id=78) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Intro Video" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper centered-box">
<p class="app-title-sub-text centered-box white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

</div>
[/vc_column_text][vc_empty_space height="30px"][vc_column_text]
<div class="inv-video-play-icon centered-box"><a class="insignia-video-popup" href="https://vimeo.com/221152916"><img src="./wp-content/uploads/2017/09/video-play-icon.png" alt="video-play-icon" /></a></div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial9.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504251222204{background-image: url(http://invictus.insigniats.in/mobile-app/wp-content/uploads/2017/08/app-bg.png?id=78) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="background-fixed"][vc_column][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Testimonial" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-300" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="app-title-wrapper centered-box">
<p class="app-title-sub-text white-color">Lorem ipsum dolor sit amet eu debet utinam vim. Idque accusam ea sit has justo adversarium repudiandae id.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Fourth Option" autoplay="false" slidetoshow="3" testimonial_navigation_dots="true" testimonial_navigation_arrows="false" infinite="false" title_font_color="#ffffff" test_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// Architecture

$templates[] = $data;

	//Services 15 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service15.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="5/6"][insignia_section_heading title="Invictus is an innovative Master planning, Architecture – and Interior design studio in Ahmedabad and was founded by two diverse individuals" subtitle="We are Creative" align="text-left" separator="disable" heading_tag="h3" font_weight="default" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#e31d3b" extra_class="custom-italic-title" css=".vc_custom_1522663035084{margin-bottom: 35px !important;}"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-flip-wrapper">
<div class="inv-flip-inner">
<div class="inv-flip-front">
<div class="inv-flip-content">
<div class="inv-flip-icon"><span class="ti-ruler-pencil flip-icon pc"><!--icon--></span></div>
<div class="inv-flip-title">
<h4>Creativity</h4>
</div>
<div class="inv-flip-text">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</div>
</div>
</div>
<div class="inv-flip-back" style="background-image: url('./wp-content/uploads/2017/08/architech-1.jpg');"><!--bg--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-flip-wrapper">
<div class="inv-flip-inner">
<div class="inv-flip-front">
<div class="inv-flip-content">
<div class="inv-flip-icon"><span class="ti-brush flip-icon pc"><!--icon--></span></div>
<div class="inv-flip-title">
<h4>Innovation</h4>
</div>
<div class="inv-flip-text">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</div>
</div>
</div>
<div class="inv-flip-back" style="background-image: url('./wp-content/uploads/2017/08/architech-2.jpg');"><!--bg--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="inv-flip-wrapper">
<div class="inv-flip-inner">
<div class="inv-flip-front">
<div class="inv-flip-content">
<div class="inv-flip-icon"><span class="ti-medall-alt flip-icon pc"><!--icon--></span></div>
<div class="inv-flip-title">
<h4>Point of view</h4>
</div>
<div class="inv-flip-text">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</div>
</div>
</div>
<div class="inv-flip-back" style="background-image: url('./wp-content/uploads/2017/08/architech-3.jpg');"><!--bg--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 10 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about10.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504092939420{background-color: #f3f4f5 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner el_class="inv-architect-img-inner-row" width="1/2" css=".vc_custom_1510742942488{background-image: url(http://invictus.insigniats.in/architecture/wp-content/uploads/2017/08/architech-9.jpg?id=48) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522662171118{padding-top: 60px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][vc_empty_space height="30px"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="01." num_title="STRUCTURE DESIGN" num_text="Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" num_color="#e31d3b" title_color="#343434"][insignia_button button_style="first" btn_text="Learn More" btn_link="url:%23|||" button_size="small" button_align="text-left" text_color="#f4f4f4" bg_color="#343434" hover_bg_color="#e31d3b" border_color="#343434" hover_border_color="#e31d3b" border_width="1px"][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1522662213669{padding-top: 60px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][vc_empty_space height="30px"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="02." num_title="INTERIOR DESIGN" num_text="Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" num_color="#e31d3b" title_color="#343434"][insignia_button button_style="first" btn_text="Learn More" btn_link="url:%23|||" button_size="small" button_align="text-left" text_color="#f4f4f4" bg_color="#343434" hover_bg_color="#e31d3b" border_color="#343434" hover_border_color="#e31d3b" border_width="1px"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner el_class="inv-architect-img-inner-row" width="1/2" css=".vc_custom_1510742948238{background-image: url(http://invictus.insigniats.in/architecture/wp-content/uploads/2017/08/architech-10.jpg?id=47) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner el_class="inv-architect-img-inner-row" width="1/2" css=".vc_custom_1510742956719{background-image: url(http://invictus.insigniats.in/architecture/wp-content/uploads/2017/08/architech-11.jpg?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522662221285{padding-top: 60px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][vc_empty_space height="30px"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="03." num_title="LANDSCAPING" num_text="Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-600" num_color="#e31d3b" title_color="#343434"][insignia_button button_style="first" btn_text="Learn More" btn_link="url:%23|||" button_size="small" button_align="text-left" text_color="#f4f4f4" bg_color="#343434" hover_bg_color="#e31d3b" border_color="#343434" hover_border_color="#e31d3b" border_width="1px"][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-03', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio3.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][portfolio port_layout="port_masonry3" port_on_hover="layout_4" port_cat="3d-modelling,architecture,interior-design,print-design" port_filter="filter_on" filter_layout="_simple" port_no_posts="9" port_gap="30"][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter6.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1522662510982{padding-top: 80px !important;padding-bottom: 80px !important;background-image: url(http://invictus.insigniats.in/architecture/wp-content/uploads/2017/08/architect-bg.png?id=51) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column width="1/2"][insignia_section_heading title="Why choose us?" subtitle="" align="text-left" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#e31d3b" css=".vc_custom_1522662370029{margin-bottom: 35px !important;}"][vc_column_text]
<p class="white-color">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.</p>
[/vc_column_text][/vc_column][vc_column width="1/2"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/2"][milestone title="Projects completed" number="584" add_icon="" align="text-left" text_transform="text-transform-none" num_size="33" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-500" num_color="#f5f5f5" title_color="#adadad"][/vc_column_inner][vc_column_inner width="1/2"][milestone title="Creative designs" number="854" add_icon="" align="text-left" text_transform="text-transform-none" num_size="33" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-500" num_color="#f5f5f5" title_color="#adadad"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][milestone title="Satisfied Clients" number="254" add_icon="" align="text-left" text_transform="text-transform-none" num_size="33" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-500" num_color="#f5f5f5" title_color="#adadad"][/vc_column_inner][vc_column_inner width="1/2"][milestone title="Hours of Work" number="984" add_icon="" align="text-left" text_transform="text-transform-none" num_size="33" title_size="16" number_font_weight="font-weight-600" title_font_weight="font-weight-500" num_color="#f5f5f5" title_color="#adadad"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team6.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our creative Team" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" subtitle_font_weight="" separator_color="#e31d3b" css=".vc_custom_1522662749389{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][team_member team_layout="Fifth Option" logo_team="Joshua Earle"][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fifth Option" logo_team="Lori Pratt"][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Fifth Option" logo_team="John doe"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial10.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1504094349420{background-image: url(http://invictus.insigniats.in/architecture/wp-content/uploads/2017/08/architect-bg-2.png?id=74) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="80px"][testimonial testimonial_layout="Sixth Option" autoplay="true" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" font_color="#ffffff" title_font_color="#ffffff" position_font_color="#ffffff"][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact13.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Get in touch" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" subtitle_font_weight="" separator_color="#e31d3b" css=".vc_custom_1522662773617{margin-bottom: 35px !important;}"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][contact-form-7 id="4"][vc_empty_space height="80px"][vc_column_text]
<div class="architect-contact-info centered-box">
<div class="architect-contact-icon"><span class="ti-map-alt arch-icon pc"><!--icon--></span></div>
<h6>240B Sunrise Blvd. (Regency House), New York</h6>
<div class="architect-contact-info-mail"><a class="pc" href="#">example@invictus.com</a></div>
<div class="architect-contact-info-phonr">(254) 569 235 1248</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

//Photography

$templates[] = $data;

	//Services 16 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-16', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service16.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512126094327{border-bottom-width: 1px !important;background-color: #1e2021 !important;border-bottom-color: #3e3e3e !important;border-bottom-style: solid !important;}" el_id="services"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text css=".vc_custom_1508760969419{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">Services we <span class="title-theme-color pc">offer</span></h3>
<div class="photography-title-tag-line"><span class="light-font">will catch all unforgettable moments</span></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="15px"][vc_column_text]

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy

[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="photography-service-wrapper">
<div class="photography-service-inner">
<div class="photography-service-image"><img src="./wp-content/uploads/2017/08/photography-img-4.jpg" alt="img" /></div>
<div class="photography-service-info">
<h4 class="photography-service-title">COMMERCIAL PHOTOGRAPHY</h4>
<a class="photography-service-link" href="#">View Gallery</a>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="photography-service-wrapper">
<div class="photography-service-inner">
<div class="photography-service-image"><img src="./wp-content/uploads/2017/08/photography-img-2.jpg" alt="img" /></div>
<div class="photography-service-info">
<h4 class="photography-service-title">COMMERCIAL PHOTOGRAPHY</h4>
<a class="photography-service-link" href="#">View Gallery</a>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="photography-service-wrapper">
<div class="photography-service-inner">
<div class="photography-service-image"><img src="./wp-content/uploads/2017/08/photography-img-1.jpg" alt="img" /></div>
<div class="photography-service-info">
<h4 class="photography-service-title">COMMERCIAL PHOTOGRAPHY</h4>
<a class="photography-service-link" href="#">View Gallery</a>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="photography-service-wrapper">
<div class="photography-service-inner">
<div class="photography-service-image"><img src="./wp-content/uploads/2017/08/photography-img-3.jpg" alt="img" /></div>
<div class="photography-service-info">
<h4 class="photography-service-title">COMMERCIAL PHOTOGRAPHY</h4>
<a class="photography-service-link" href="#">View Gallery</a>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial11.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512126105730{background-color: #1e2021 !important;}" el_id="testimonial"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner][vc_column_text css=".vc_custom_1508761003715{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">CUSTOMER <span class="title-theme-color pc">REVIEWS</span></h3>
<div class="photography-title-tag-line"><span class="light-font">will catch all unforgettable moments</span></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Fifth Option" extra_class="inv-photo-testmonial-inner" autoplay="false" slidetoshow="3" testimonial_navigation_dots="true" testimonial_navigation_arrows="false" infinite="false" title_font_color="#f5f5f5" position_font_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner el_class="inv-photography-counter-inner"][vc_column_inner width="1/4" css=".vc_custom_1503317627303{border-right-width: 1px !important;padding-top: 10px !important;border-right-color: #3e3e3e !important;border-right-style: solid !important;}"][milestone title="HAPPY CUSTOMERS" number="450" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#b7b8b8" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1503317632086{border-right-width: 1px !important;padding-top: 10px !important;border-right-color: #3e3e3e !important;border-right-style: solid !important;}"][milestone title="AWARDS" number="50" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#b7b8b8" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1503317636653{border-right-width: 1px !important;padding-top: 10px !important;border-right-color: #3e3e3e !important;border-right-style: solid !important;}"][milestone title="PHOTOS" number="600" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#b7b8b8" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1503317641334{border-right-width: 1px !important;padding-top: 10px !important;border-right-color: #1e2021 !important;border-right-style: solid !important;}"][milestone title="SERVICES" number="30" add_icon="" align="text-center" text_transform="text-uppercase" num_size="40" title_size="14" number_font_weight="font-weight-400" title_font_weight="font-weight-500" num_color="#b7b8b8" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

	//About 11 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about11.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1503310258817{background-color: #1e2021 !important;}"][vc_column css=".vc_custom_1503316105714{padding-top: 0px !important;}"][vc_row_inner equal_height="yes" css=".vc_custom_1503316185331{border-top-width: 1px !important;border-top-color: #3e3e3e !important;border-top-style: solid !important;}"][vc_column_inner width="2/3" css=".vc_custom_1503310714824{background-image: url(http://invictus.insigniats.in/photography/wp-content/uploads/2017/08/photography-5.jpg?id=52) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1503310817798{padding-right: 8% !important;padding-left: 8% !important;}"][vc_empty_space height="100px" el_class="inv-photography-remove-space"][vc_column_text css=".vc_custom_1508761019512{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">Event <span class="title-theme-color pc">photography</span></h3>
</div>
</div>
[/vc_column_text][vc_empty_space height="20px"][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_column_text]
<div class="photography-button-holder"><a class="photography-button pc" href="#">View More</a></div>
[/vc_column_text][vc_empty_space height="100px" el_class="inv-photography-remove-space"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes"][vc_column_inner width="1/3" css=".vc_custom_1503310823648{padding-right: 8% !important;padding-left: 8% !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="100px" el_class="inv-photography-remove-space"][vc_column_text css=".vc_custom_1508761033346{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">PROFESSIONAL <span class="title-theme-color pc">PHOTOGRAPHY</span></h3>
</div>
</div>
[/vc_column_text][vc_empty_space height="20px"][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_column_text]
<div class="photography-button-holder"><a class="photography-button pc" href="#">View More</a></div>
[/vc_column_text][vc_empty_space height="100px" el_class="inv-photography-remove-space"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1503310690960{background-image: url(http://invictus.insigniats.in/photography/wp-content/uploads/2017/08/photography-4.jpg?id=47) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" css=".vc_custom_1503318245214{border-bottom-width: 1px !important;border-bottom-color: #3e3e3e !important;border-bottom-style: solid !important;}"][vc_column_inner width="2/3" css=".vc_custom_1503310699722{background-image: url(http://invictus.insigniats.in/photography/wp-content/uploads/2017/08/photography-6.jpg?id=51) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1503310829208{padding-right: 8% !important;padding-left: 8% !important;}"][vc_empty_space height="100px" el_class="inv-photography-remove-space"][vc_column_text css=".vc_custom_1508761046050{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">COMMERCIAL <span class="title-theme-color pc">Photography</span></h3>
</div>
</div>
[/vc_column_text][vc_empty_space height="20px"][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_column_text]
<div class="photography-button-holder"><a class="photography-button pc" href="#">View More</a></div>
[/vc_column_text][vc_empty_space height="100px" el_class="inv-photography-remove-space"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Image Gallery 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery4.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512126132469{background-color: #1e2021 !important;}" el_id="gallery"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text css=".vc_custom_1509097698818{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">Recent <span class="title-theme-color pc">Work</span></h3>
<div class="photography-title-tag-line"><span class="light-font">We will catch all unforgettable moments</span></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="15px"][vc_column_text]

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy

[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][insignia_image_gallery design_style="masonry_3x" attach_images="137,144,140,138,141,142,165" hover_text="" gallery_gap="30" carousel_dots="true" carousel_arrows="true" carousel_infinite="true"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing5.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1512126168431{background-color: #1e2021 !important;}" el_id="blog"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner][blog_news blog_layout="Grid4" blog_style="layout_4" post_cat="photography" blog_no_posts="4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1512126150943{border-bottom-width: 1px !important;background-color: #1e2021 !important;border-bottom-color: #343434 !important;border-bottom-style: solid !important;}" el_id="pricing"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text css=".vc_custom_1508761085306{margin-bottom: 20px !important;}"]
<div class="photography-title-wrapper">
<div class="photography-title-inner">
<h3 class="photography-main-title">Pricing <span class="title-theme-color pc">Plans</span></h3>
<div class="photography-title-tag-line"><span class="light-font">will catch all unforgettable moments</span></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="20px"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry.

Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="five" package_name="COMMERCIAL" price_value="$" package_price="250" price_sub_heading="Per session" button_text="Book Now" button_link="#" bg_color=""]
<ul>
 	<li>Lorem ipsum dolor</li>
 	<li>Coworking viral landing</li>
 	<li>printing and typesetting</li>
 	<li>standard dummy text</li>
 	<li>Ipsum is simply dummy</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="five" package_name="professional" price_value="$" package_price="350" price_sub_heading="Per session" button_text="Book Now" button_link="#" bg_color=""]
<ul>
 	<li>Lorem ipsum dolor</li>
 	<li>Coworking viral landing</li>
 	<li>printing and typesetting</li>
 	<li>standard dummy text</li>
 	<li>Ipsum is simply dummy</li>
</ul>
[/insignia_pricing_table][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;
$templates[] = $data;

	//Contact 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact14.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1512126186924{border-bottom-width: 1px !important;background-color: #1e2021 !important;border-bottom-color: #3e3e3e !important;border-bottom-style: solid !important;}" el_id="contact"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-location-pin" icon_title="ADDRESS" icon_text="57 brand street, New York

" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-2" icon_color="#5fc5ab" title_color="#f5f5f5" text_color="#b7b8b8"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-headphone-alt" icon_title="PHONE" icon_text="+01 654 6548 897

" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-2" icon_color="#5fc5ab" title_color="#f5f5f5" text_color="#b7b8b8"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-email" icon_title="EMAIL" icon_text="example@invictus.com

" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-2" icon_color="#5fc5ab" title_color="#f5f5f5" text_color="#b7b8b8"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

// Gym


$templates[] = $data;

	//Services 17 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-17', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service17.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503319977597{background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Gym-Call-Action-Bg-1.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="ALL ABOUT FITNESS" subtitle="01. WELCOME" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#d66e4a"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="166" image_title="MUAY THAL" image_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem auci elit consequat ipsut sem niuis sed.

" enable_button="1" btn_text="Find Your Box" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-500" title_color="#343434" text_color="#767676" btn_color="#d66e4a" ins_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="167" image_title="CROSS FIT" image_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem auci elit consequat ipsut sem niuis sed.

" enable_button="1" btn_text="Find Your Box" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-500" title_color="#343434" text_color="#767676" btn_color="#d66e4a" ins_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="164" image_title="BODY BUILDING" image_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem auci elit consequat ipsut sem niuis sed.

" enable_button="1" btn_text="Find Your Box" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-600" btn_font_weight="font-weight-500" title_color="#343434" text_color="#767676" btn_color="#d66e4a" ins_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box12.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1500979962440{padding-top: 0px !important;}"][rev_slider_vc alias="gym-tab" el_class="revslider-remove-space "][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1503319957539{background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Gym-Call-Action-Bg-1.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="WIDE CHOICE OF FACILITIES" subtitle="02. SERVICES" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#d66e4a"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="475" icon_align="text-left" icon_title="BODY &amp; MIND" icon_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean lorem sollicitudin

" btn_check="" separator="disable" title_font="19" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="476" icon_align="text-left" icon_title="WEIGHT LIFTING" icon_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean lorem sollicitudin

" btn_check="" separator="disable" title_font="19" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="477" icon_align="text-left" icon_title="ABS WORKOUT" icon_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean lorem sollicitudin

" btn_check="" separator="disable" title_font="19" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="474" icon_align="text-left" icon_title="BASIC WEIGHTS" icon_text="Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean lorem sollicitudin

" btn_check="" separator="disable" title_font="19" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="85px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Pricing 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Pricing-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing6.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503319064371{padding-right: 15% !important;padding-left: 15% !important;background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Gym-Pricing-Bg-2.jpg?id=153) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="background-fixed"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="OUR PRICING PLANS" subtitle="03. PRICING" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#d66e4a"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="second" social_icon="fa fa-clock-o" package_name="Beginner" price_value="$" package_price="9" price_sub_heading="Month" button_text="Choose Plan" button_link="#" bg_color=""]
<ul>
 	<li>5 GB of space</li>
 	<li>Unlimited traffic</li>
 	<li>Forum access</li>
 	<li>Support at $5/hour</li>
</ul>
[/insignia_pricing_table][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="second" social_icon="fa fa-clock-o" package_name="Beginner" price_value="$" package_price="9" price_sub_heading="Month" button_text="Choose Plan" button_link="#" bg_color=""]
<ul>
 	<li>5 GB of space</li>
 	<li>Unlimited traffic</li>
 	<li>Forum access</li>
 	<li>Support at $5/hour</li>
</ul>
[/insignia_pricing_table][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_pricing_table design_style="second" social_icon="fa fa-clock-o" package_name="Beginner" price_value="$" package_price="9" price_sub_heading="Month" button_text="Choose Plan" button_link="#" bg_color=""]
<ul>
 	<li>5 GB of space</li>
 	<li>Unlimited traffic</li>
 	<li>Forum access</li>
 	<li>Support at $5/hour</li>
</ul>
[/insignia_pricing_table][vc_empty_space height="20px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="85px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action7.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1500980425424{background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Gym-Call-Action-Bg-1.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="2/3"][vc_column_text css=".vc_custom_1508157629405{margin-bottom: 0px !important;}"]
<div class="gym-call-action-text-box">
<h3 class="white-color"><span class="gym-themes-color">FITNESS CLASSES </span>THIS SUMMER.</h3>
<h6 class="white-color">Pay now and Get 20% Discount</h6>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_button button_style="first" btn_text="Book Now" btn_link="url:%23||target:%20_blank|" button_size="medium" button_align="text-center" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#d66e4a" hover_bg_color="rgba(255,255,255,0.01)" border_color="#d66e4a" hover_border_color="#d66e4a" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team7.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503318147775{background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Gym-Call-Action-Bg-1.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="OUR SPECIAL TRAINERS" subtitle="06. TEAM" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#d66e4a"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Alex Anderson"][/vc_column_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Daniel Robert"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Robert Reed"][/vc_column_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Tahmid Alom"][/vc_column_inner][/vc_row_inner][vc_empty_space height="85px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 15 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact15.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" el_class="background-fixed" css=".vc_custom_1503314915613{background-image: url(http://invictus.insigniats.in/Gym/wp-content/uploads/2017/07/Contact-Bg-22.jpg?id=134) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="CALCULATE YOUR BMI" subtitle="07. GET IN TOUCH" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-500" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#d66e4a"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][contact-form-7 id="5"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="85px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 16 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-16', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact16.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1503378658634{padding-top: 0px !important;}"][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwaGVpZ2h0JTNEJTIyNTEwJTIyJTIwc3R5bGUlM0QlMjJib3JkZXIlM0EwJTIyJTIwYWxsb3dmdWxsc2NyZWVuJTNFJTNDJTJGaWZyYW1lJTNF" el_class="google-map-column" css=".vc_custom_1513072921185{margin-bottom: 0px !important;}"][vc_column_text css=".vc_custom_1513326894943{margin-bottom: 0px !important;}"]
<div class="contact-info-main-box">
<div class="contact-info-box">
<h5 class="white-color">How to find us</h5>
<address>
<p class="white-color"><i class="icon-location-pin icons"><!-- icon --></i>49 Grand Street, Los Angeles</p>
<p class="white-color"><i class="icon-call-end icons"><!-- icon --></i>(222) 400-630</p>
<p class="white-color"><i class="icon-envelope-open icons"><!-- icon --></i>admin@invictus.com</p>

</address></div>
<div class="contact-opening-hours-box">
<h5 class="white-color">How to find us</h5>
<ul>
 	<li><span class="contact-op-day-text">Monday-Friday</span><span class="contact-op-time-text">10:00 - 18:00</span></li>
 	<li><span class="contact-op-day-text">Saturday</span><span class="contact-op-time-text">10:00 - 14:00</span></li>
 	<li><span class="contact-op-day-text">Sunday</span><span class="contact-op-time-text">Closed</span></li>
</ul>
</div>
</div>
[/vc_column_text][/vc_column][/vc_row]
	
CONTENT;

// Event

$templates[] = $data;

	//About 12 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about12.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_id="about"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="International Business
Conference 2017" subtitle="Introduction" align="text-center" heading_tag="h3" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#868686" separator_color="#2c65f9"][vc_empty_space height="30px"][vc_column_text]
<p style="text-align: center;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable or randomised words which don’t look even slightly believable.</p>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15"][vc_column_inner width="1/2"][vc_single_image image="154" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="15px"][vc_column_text]
<div class="event-top-section">
<div class="event-top-section-inner">
<h5>100+ Topics covered</h5>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.

</div>
<div class="event-top-section-inner">
<h5>200+ Online Tutorials</h5>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s

</div>
</div>
[/vc_column_text][insignia_button button_style="first" btn_text="View Schedule" btn_link="url:%23|||" button_size="large" button_align="text-left" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="rgba(44,101,249,0.8)" hover_bg_color="#2c65f9" border_color="rgba(44,101,249,0.8)" hover_border_color="#2c65f9" border_width="1px"][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" content_placement="middle" gap="30"][vc_column_inner width="1/3" css=".vc_custom_1522666659622{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 20px !important;padding-right: 45px !important;padding-bottom: 20px !important;padding-left: 45px !important;border-left-color: #dedede !important;border-left-style: solid !important;border-right-color: #dedede !important;border-right-style: solid !important;border-top-color: #dedede !important;border-top-style: solid !important;border-bottom-color: #dedede !important;border-bottom-style: solid !important;}"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-location-pin" icon_size="icon-large" icon_title="WHERE" icon_text="23rd Street, city Center, Via Cesare Rosaroll, New York,

" btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-400" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-0.5" icon_color="#ee0034" title_color="#343434" text_color="#676767"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522666775453{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 20px !important;padding-right: 45px !important;padding-bottom: 20px !important;padding-left: 45px !important;border-left-color: #dedede !important;border-left-style: solid !important;border-right-color: #dedede !important;border-right-style: solid !important;border-top-color: #dedede !important;border-top-style: solid !important;border-bottom-color: #dedede !important;border-bottom-style: solid !important;}"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-calendar" icon_size="icon-large" icon_title="WHEN" icon_text="Monday to Wednesday July 1 to 3, 2018

" btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-400" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-0.5" icon_color="#ee0034" title_color="#343434" text_color="#676767"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522666845185{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 20px !important;padding-right: 45px !important;padding-bottom: 20px !important;padding-left: 45px !important;border-left-color: #dedede !important;border-left-style: solid !important;border-right-color: #dedede !important;border-right-style: solid !important;border-top-color: #dedede !important;border-top-style: solid !important;border-bottom-color: #dedede !important;border-bottom-style: solid !important;}"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-cloud-down" icon_size="icon-large" icon_title="WHO" icon_text="" btn_check="" separator="disable" title_font="text-extra-large" title_font_weight="font-weight-400" text_font_weight="default" title_letter_spacing="letter-spacing-0.5" icon_color="#ee0034" title_color="#343434" text_color="#676767" css=".vc_custom_1522666940279{margin-bottom: 0px !important;}"][insignia_button button_style="first" btn_text="View Speakers" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="rgba(44,101,249,0.8)" hover_bg_color="#2c65f9" border_color="rgba(44,101,249,0.8)" hover_border_color="#2c65f9" border_width="1px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Hero Sections 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections6.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502191686771{background-image: url(http://invictus.insigniats.in/event/wp-content/uploads/2017/08/event-5.png?id=72) !important;}"][vc_column][vc_empty_space height="100px"][insignia_section_heading title="International Business Conference 2017" subtitle="Introduction" align="text-center" heading_tag="h3" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#f5f5f5" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#f5f5f5" separator_color="#2c65f9"][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="centered-box white-text" style="font-size: 17px; line-height: 29px;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable or randomised words which don’t look even slightly believable.</p>
[/vc_column_text][vc_empty_space height="30px"][insignia_button button_style="first" btn_text="Download pdf" btn_link="url:%23|||" button_size="large" button_align="text-center" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="rgba(44,101,249,0.8)" hover_bg_color="#2c65f9" border_color="rgba(44,101,249,0.8)" hover_border_color="#2c65f9" border_width="1px"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="120px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra12.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row el_id="schedule"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Event Schedule" subtitle="Introduction" align="text-center" heading_tag="h3" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#868686" separator_color="#2c65f9"][vc_empty_space height="30px"][vc_column_text]
<p style="text-align: center;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable or randomised words which don’t.</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="event-time-table-wrapper">
<div class="event-time-table-inner">
<div class="event-time-table-heading">
<h6 class="italic-font">Jule 15, 2018</h6>
<h5>Designers Meeting</h5>
</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">10:00 - 12:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">12:00 - 14:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">14:00 - 15:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="event-time-table-wrapper">
<div class="event-time-table-inner">
<div class="event-time-table-heading">
<h6 class="italic-font">Jule 16, 2018</h6>
<h5>Designers Meeting</h5>
</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">10:00 - 12:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">12:00 - 14:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">14:00 - 15:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="event-time-table-wrapper">
<div class="event-time-table-inner">
<div class="event-time-table-heading">
<h6 class="italic-font">Jule 17, 2018</h6>
<h5>Designers Meeting</h5>
</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">10:00 - 12:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">12:00 - 14:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>

</div>
<div class="event-time-table-list-item">

<span class="event-list-item-title sc-bg">14:00 - 15:00</span>
<p class="event-list-item-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][insignia_button button_style="first" btn_text="Buy tickets" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="rgba(44,101,249,0.8)" hover_bg_color="#2c65f9" border_color="rgba(44,101,249,0.8)" hover_border_color="#2c65f9" border_width="1px"][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra13.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502261122426{background-color: #ee004d !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][twitter_feed twitter_icon_color="#ffffff" twitter_tweet_color="#f9f9f9" tweet_date_color="#f9f9f9" twitter_consumer_key="sd5BvdZ345TX4WnAVGIP2zADU" twitter_consumer_secret="Z9eiZSIMeOctLYg6YyE7L4Fuz0l3iLxRyZ3s1aC8sBD2l84LVk" twitter_access_token="1258476738-fub9Rw5rvZnRx0fZ4QoMjsvYHQCIReVLnAVsQ1d" twitter_access_token_secret="rB7Lpj51SYf0aYDNLjNB9Add4gbY8PfxpeMasLmmuvlv1" twitter_id="realdonaldtrump" twitter_no_of_tweets="10" twitter_extra_class="event-twitter-feed"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Teams 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team8.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row el_id="speakers"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="The Speakers" subtitle="Introduction" align="text-center" heading_tag="h3" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#868686" separator_color="#2c65f9"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="Darren Doe"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="Daniel Robert"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="Lisa Doe"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="John Doe"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="Robert Reed"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Third Option" logo_team="Martin Smith"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients5.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502198216553{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="The Partners" subtitle="Introduction" align="text-center" heading_tag="h3" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#343434" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#868686" separator_color="#2c65f9"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTUtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTUtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTYtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTYtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTctMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTctMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTgtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTgtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_empty_space height="30px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTItMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTItMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTMtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTMtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTQtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTQtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/4"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpbnZpY3R1cy1jbGllbnQtaG9sZGVyJTIwaW52aWN0dXMtY2xpZW50cy1yb2xsLW92ZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1ob2xkZXItaW5uZXIlMjIlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMmludmljdHVzLWNsaWVudC1pbWFnZS1ob2xkZXIlMjIlM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUyMHRhcmdldCUzRCUyMl9zZWxmJTIyJTNFJTBBJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTEtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlMEElM0MlMkZzcGFuJTNFJTIwJTNDc3BhbiUyMGNsYXNzJTNEJTIyaW52aWN0dXMtY2xpZW50LWhvdmVyLWltYWdlJTIyJTNFJTBBJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjEyJTJGaW52LWNsaWVudHMtaW1nLTEtMS5wbmclMjIlMjBhbHQlM0QlMjIlMjIlMjAlMkYlM0UlM0MlMkZzcGFuJTNFJTBBJTNDJTJGYSUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// Web Hosting

$templates[] = $data;

	//Extra 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra14.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503388460649{background-color: #0084e0 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Search Your Desired Domain" subtitle="" align="text-center" separator="disable" heading_tag="h1" heading_font_size="40" font_weight="font-weight-600" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text]
<div class="hosting-domain-search centered-box">
<p class="white-color" style="font-size: 19px;">With FREE Email, DNS, Theft Protection and lots more</p>

</div>
[/vc_column_text][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJkb21haW4tc2VhcmNoLWhvbGRlciUyMiUzRSUwQSUzQ2Zvcm0lMjBpZCUzRCUyMmRvbWFpbi1zZWFyY2glMjIlM0UlMEElM0NpbnB1dCUyMGlkJTNEJTIyZG9tYWluLXRleHQlMjIlMjB0eXBlJTNEJTIydGV4dCUyMiUyMG5hbWUlM0QlMjJkb21haW4lMjIlMjBwbGFjZWhvbGRlciUzRCUyMlNlYXJjaCUyMGElMjBkb21haW4lMjBuYW1lJTIwaGVyZSUyMiUyMHRhYmluZGV4JTNEJTIyLTElMjIlM0UlMEElM0NpbnB1dCUyMGlkJTNEJTIyZG9tYWluLXNlYXJjaC1idG4lMjIlMjB0eXBlJTNEJTIyc3VibWl0JTIyJTIwbmFtZSUzRCUyMnN1Ym1pdCUyMiUyMHZhbHVlJTNEJTIyU2VhcmNoJTIwbm93JTIyJTIwdGFiaW5kZXglM0QlMjItMSUyMiUzRSUwQSUzQyUyRmZvcm0lM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJkb21haW4tcmFkaW8lMjBjZW50ZXJlZC1ib3glMjIlM0UlM0N1bCUzRSUwQSUyMCUyMCUzQ2xpJTNFJTBBJTIwJTIwJTIwJTIwJTNDaW5wdXQlMjB0eXBlJTNEJTIycmFkaW8lMjIlMjBpZCUzRCUyMmMtb3B0aW9uJTIyJTIwbmFtZSUzRCUyMnNlbGVjdG9yJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTNDbGFiZWwlMjBmb3IlM0QlMjJjLW9wdGlvbiUyMiUzRS5jb20lM0MlMkZsYWJlbCUzRSUwQSUyMCUyMCUyMCUyMCUwQSUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyY2hlY2slMjIlM0UlM0MlMkZkaXYlM0UlMEElMjAlMjAlM0MlMkZsaSUzRSUwQSUyMCUyMCUwQSUyMCUyMCUzQ2xpJTNFJTBBJTIwJTIwJTIwJTIwJTNDaW5wdXQlMjB0eXBlJTNEJTIycmFkaW8lMjIlMjBpZCUzRCUyMm4tb3B0aW9uJTIyJTIwbmFtZSUzRCUyMnNlbGVjdG9yJTIyJTNFJTBBJTIwJTIwJTIwJTIwJTNDbGFiZWwlMjBmb3IlM0QlMjJuLW9wdGlvbiUyMiUzRS5uZXQlM0MlMkZsYWJlbCUzRSUwQSUyMCUyMCUyMCUyMCUwQSUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyY2hlY2slMjIlM0UlM0NkaXYlMjBjbGFzcyUzRCUyMmluc2lkZSUyMiUzRSUzQyUyRmRpdiUzRSUzQyUyRmRpdiUzRSUwQSUyMCUyMCUzQyUyRmxpJTNFJTBBJTIwJTIwJTBBJTIwJTIwJTNDbGklM0UlMEElMjAlMjAlMjAlMjAlM0NpbnB1dCUyMHR5cGUlM0QlMjJyYWRpbyUyMiUyMGlkJTNEJTIyby1vcHRpb24lMjIlMjBuYW1lJTNEJTIyc2VsZWN0b3IlMjIlM0UlMEElMjAlMjAlMjAlMjAlM0NsYWJlbCUyMGZvciUzRCUyMm8tb3B0aW9uJTIyJTNFLm9yZyUzQyUyRmxhYmVsJTNFJTBBJTIwJTIwJTIwJTIwJTBBJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJjaGVjayUyMiUzRSUzQ2RpdiUyMGNsYXNzJTNEJTIyaW5zaWRlJTIyJTNFJTNDJTJGZGl2JTNFJTNDJTJGZGl2JTNFJTBBJTIwJTIwJTNDJTJGbGklM0UlMEElMjAlMjAlM0NsaSUzRSUwQSUyMCUyMCUyMCUyMCUzQ2lucHV0JTIwdHlwZSUzRCUyMnJhZGlvJTIyJTIwaWQlM0QlMjJpLW9wdGlvbiUyMiUyMG5hbWUlM0QlMjJzZWxlY3RvciUyMiUzRSUwQSUyMCUyMCUyMCUyMCUzQ2xhYmVsJTIwZm9yJTNEJTIyaS1vcHRpb24lMjIlM0UuaW4lM0MlMkZsYWJlbCUzRSUwQSUyMCUyMCUyMCUyMCUwQSUyMCUyMCUyMCUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIyY2hlY2slMjIlM0UlM0NkaXYlMjBjbGFzcyUzRCUyMmluc2lkZSUyMiUzRSUzQyUyRmRpdiUzRSUzQyUyRmRpdiUzRSUwQSUyMCUyMCUzQyUyRmxpJTNFJTBBJTNDJTJGdWwlM0UlM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 18 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-18', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service18.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="What we offer" subtitle="LOREM IPSUM DOLLAR SIT" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-small" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#767676" separator_color="#ff9404"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hosting-platforms-wrapper">
<div class="hosting-platforms-inner">
<div class="hosting-platforms-header">
<h3>SHARED HOSTING</h3>
<div class="hosting-platforms-meta">Starts at<span class="hosting-platforms-price pc"> $15.50 </span> /month</div>
</div>
<div class="hosting-platforms-content">

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
<div class="hosting-button-holder"><a class="hosting-button pc-bg" href="#">View plans</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hosting-platforms-wrapper">
<div class="hosting-platforms-inner">
<div class="hosting-platforms-header">
<h3>CMS HOSTING</h3>
<div class="hosting-platforms-meta">Starts at<span class="hosting-platforms-price pc"> $13.99 </span> /month</div>
</div>
<div class="hosting-platforms-content">

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
<div class="hosting-button-holder"><a class="hosting-button pc-bg" href="#">View plans</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hosting-platforms-wrapper">
<div class="hosting-platforms-inner">
<div class="hosting-platforms-header">
<h3>DEDICATED SERVERS</h3>
<div class="hosting-platforms-meta">Starts at<span class="hosting-platforms-price pc"> $19.99 </span> /month</div>
</div>
<div class="hosting-platforms-content">

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
<div class="hosting-button-holder"><a class="hosting-button pc-bg" href="#">View plans</a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box13.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Why choose us" subtitle="LOREM IPSUM DOLLAR SIT" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-small" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#767676" separator_color="#ff9404"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="537" icon_title="Private Cloud" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="538" icon_title="Hardware Setup" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="539" icon_title="IT Support" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="547" icon_title="Affordable Prices" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="545" icon_title="Secured Server" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="546" icon_title="Private Cloud" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur.

" btn_check="1" btn_text="Learn More" btn_link="#" title_font="21" title_font_weight="font-weight-500" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#343434" text_color="#767676" btn_color="#767676"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 19 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-19', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service19.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503401686737{background-color: #ecf3f6 !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1503402017393{padding-right: 20px !important;}"][insignia_section_heading title="Best web hosting service for your website." subtitle="" separator="disable" heading_tag="h4" font_weight="default" subtitle_font_weight=""][vc_column_text css=".vc_custom_1522917217600{margin-bottom: 15px !important;}"]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy.[/vc_column_text][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f4f4f4" bg_color="#0084e0" hover_bg_color="#ff9404" border_color="#0084e0" hover_border_color="#ff9404" border_radius="50px"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="68" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2"][vc_single_image image="68" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1503402080113{padding-left: 20px !important;}"][insignia_section_heading title="Best web hosting service for your website." subtitle="" separator="disable" heading_tag="h4" font_weight="default" subtitle_font_weight=""][vc_column_text css=".vc_custom_1522917222142{margin-bottom: 15px !important;}"]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy.[/vc_column_text][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f4f4f4" bg_color="#0084e0" hover_bg_color="#ff9404" border_color="#0084e0" hover_border_color="#ff9404" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients6.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1503405214353{background-color: #ecf3f6 !important;}"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Amazing clients and brands" subtitle="LOREM IPSUM DOLLAR SIT" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-small" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-400" subtitle_color="#767676" separator_color="#ff9404"][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/4"][vc_single_image image="325" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="331" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="330" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="329" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// Hotel

$templates[] = $data;

	//Services 20 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-20', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service20.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Welcome to invictus hotel" subtitle="introduction" align="text-center" heading_tag="h3" font_weight="font-weight-500" heading_color="#343434" italic_font="1" subtitle_font_weight="" subtitle_color="#bb9a64" separator_color="#bb9a64" css=".vc_custom_1522670644893{margin-bottom: 35px !important;}"][vc_column_text]
<p class="centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy</p>
[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][insignia_interactive_banner style="style5" img="109" title="PERFECT VIEW" description="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="1" btn_text="Book Now" btn_link="#" overlay_bg_color="#000000" opacity="0.8" title_font_size="19" title_color="#bb9a64" description_font_size="15" description_color="#f5f5f5" button_color="#bb9a64"][/vc_column_inner][vc_column_inner width="1/3"][insignia_interactive_banner style="style5" img="108" title="LUXURY ROOMS" description="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="1" btn_text="Book Now" btn_link="#" overlay_bg_color="#000000" opacity="0.8" title_font_size="19" title_color="#bb9a64" description_font_size="15" description_color="#f5f5f5" button_color="#bb9a64"][/vc_column_inner][vc_column_inner width="1/3"][insignia_interactive_banner style="style5" img="107" title="DELICIOUS FOODS" description="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="1" btn_text="Book Now" btn_link="#" overlay_bg_color="#000000" opacity="0.8" title_font_size="19" title_color="#bb9a64" description_font_size="15" description_color="#f5f5f5" button_color="#bb9a64"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 13 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about13.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502369419316{background-image: url(http://invictus.insigniats.in/hotel/wp-content/uploads/2017/08/hotel-4.jpg?id=43) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1502281592378{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #ffffff !important;}"][insignia_section_heading title="Modern chic interior make unforgettable impression" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-600" heading_color="#343434" subtitle_font_weight="" separator_color="#bb9a64" css=".vc_custom_1522670771282{margin-bottom: 35px !important;padding-right: 10% !important;}"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with[/vc_column_text][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#fcfcfc" bg_color="#bb9a64" hover_bg_color="#232323" border_radius="50px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1502281601887{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}"][insignia_section_heading title="High technologies accompanied by eco-friendly design" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-600" heading_color="#343434" subtitle_font_weight="" separator_color="#bb9a64" css=".vc_custom_1522670751171{margin-bottom: 35px !important;}"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with[/vc_column_text][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#fcfcfc" bg_color="#bb9a64" hover_bg_color="#232323" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box14.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502363988674{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Facilities and services" subtitle="introduction" align="text-left" heading_tag="h3" font_weight="font-weight-500" heading_color="#343434" italic_font="1" subtitle_font_weight="" subtitle_color="#bb9a64" separator_color="#bb9a64" css=".vc_custom_1522670935985{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-time" icon_title="RECEPTION 24/7" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-cup" icon_title="RESTAURANT &amp; BAR" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-car" icon_title="TAXI RESERVATION" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-face-smile" icon_title="SPA &amp; WELLNESS" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-medall-alt" icon_title="ROOM SERVICE" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-paint-bucket" icon_title="LAUNDRY SERVICES" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="select" icon_color="#343434" title_color="#343434"][vc_empty_space height="15px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 15 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra15.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Awesome rooms" subtitle="introduction" align="text-center" heading_tag="h3" font_weight="font-weight-500" heading_color="#343434" italic_font="1" subtitle_font_weight="" subtitle_color="#bb9a64" separator_color="#bb9a64" css=".vc_custom_1522671273442{margin-bottom: 35px !important;}"][vc_column_text]
<p class="centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of. Lorem Ipsum is simply dummy</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-4.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Superior Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-5.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Delux Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-6.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Executive Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-7.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Superior Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-8.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Delux Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-room-grid-wrapper">
<div class="hotel-room-grid-inner">
<div class="hotel-room-grid-image"><img src="http://invictus.insigniats.in/hotel/wp-content/uploads/2017/09/img-9.jpg" alt="room" /></div>
<div class="hotel-room-grid-content">
<h4 class="hotel-room-type">Executive Room</h4>
<div class="hotel-room-meta clearfix"><span class="hotel-room-starting">Starting From</span><span class="hotel-room-price">$30 / Night</span></div>
<div class="hotel-room-detail">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
<div class="hotel-button-holder"><a class="hotel-button-small" href="#">Book Now</a></div>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][insignia_button button_style="first" btn_text="View All Rooms" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#fcfcfc" hover_bg_color="#232323" border_radius="50px"][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Hero Sections 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections7.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1502364601987{background-image: url(http://invictus.insigniats.in/hotel/wp-content/uploads/2017/08/hotel-7.jpg?id=99) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="150px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="hotel-offer-wrapper">
<div class="hotel-offer-inner">
<h4 class="hotel-offer-title pc">special 15% off on all the bookings</h4>
<p class="hotel-offer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>

<div class="hotel-offer-coupon"><span class="hotel-coupon-code pc">Coupon code : INS15</span></div>
<div class="hotel-button-holder"><a class="hotel-button-medium" href="#">Explore More</a></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="150px"][/vc_column][/vc_row]
CONTENT;

// Car Service

$templates[] = $data;

	//About 14 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about14.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner gap="15"][vc_column_inner width="1/2"][vc_single_image image="23" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="One-Stop Shop For All Auto Repairs" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522738894022{margin-bottom: 35px !important;}"][vc_column_text css=".vc_custom_1522736979423{margin-bottom: 15px !important;}"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][insignia_simple_icon_list list_items="More than 20 years of experience,Friendly and professional service,Engineered to high standards,Available 24 hours a day 7 days a week" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#c42d2d" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 21 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-21', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service21.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1503927043882{background-image: url(http://invictus.insigniats.in/car-service/wp-content/uploads/2017/08/car-bg-img.png?id=44) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][insignia_section_heading title="Services we offer" subtitle="" align="text-center" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522738944184{margin-bottom: 35px !important;}"][vc_empty_space height="30px"][vc_row_inner gap="15"][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="14" image_title="CAR AUDIO SERVICE" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737517415{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="22" image_title="ENGINE DIAGNOSTICS" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737523922{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="15" image_title="CAR A/C RECHARGE" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737530383{margin-bottom: 35px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="15"][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="21" image_title="BREAK REPAIRS" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737535802{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="22" image_title="BODY PAINTING" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737541375{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="20" image_title="CAR A/C RECHARGE" image_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-center" title_font="text-large" title_font_weight="font-weight-500" btn_font_weight="font-weight-500" title_color="#343434" btn_color="#c42d2d" ins_bg_color="#f5f5f5" css=".vc_custom_1522737599175{margin-bottom: 35px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 15 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box15.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503987215970{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="80px"][insignia_section_heading title="Why We are special" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522738967790{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-settings" icon_size="icon-large" icon_title="FREE DIAGNOSTICS" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" separator="disable" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#c42d2d" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-timer" icon_size="icon-large" icon_title="FAST REPAIR" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" separator="disable" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#c42d2d" title_color="#343434"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-tag" icon_size="icon-large" icon_title="50 DAYS WARRANTY" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" separator="disable" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#c42d2d" title_color="#343434"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 22 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-22', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service22.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2"][vc_row_inner][vc_column_inner][vc_single_image image="73" img_size="full" alignment="center" css=".vc_custom_1503991111628{margin-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_empty_space height="60px"][insignia_section_heading title="Makes we service" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522738985849{margin-bottom: 35px !important;}"][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="General Motors,Land Rover,Lexus,Lincoln,Mazda" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#c42d2d" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="Mercedes – Benz,Mercury,Mitsubishi,Nissan,Renault" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#c42d2d" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/3"][insignia_simple_icon_list list_items="Plymouth,Porsche,Rover,Saab,Saleen" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#c42d2d" text_color="#343434" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][/vc_row_inner][insignia_button button_style="first" btn_text="View all services" btn_link="url:%23||target:%20_blank|" button_size="medium" button_align="text-left" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#c42d2d" hover_bg_color="#343434" border_color="#c42d2d" hover_border_color="#343434" border_radius="50px"][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 16 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-16', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra16.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row gap="20"][vc_column width="1/2"][insignia_section_heading title="Got questions?" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522739011820{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_tta_accordion style="modern" shape="square" gap="20" c_position="right" active_section="1" el_class="inv-faq-accordion"][vc_tta_section title="1. Must I get air conditioning serviced?" tab_id="1503985481057-5f42d61a-1bd2"][vc_column_text]Regular servicing is important for health and to maintain the system working effectively. Up to 15% of the refrigerant gas will be lost annually.[/vc_column_text][/vc_tta_section][vc_tta_section title="2. What are the advantages of synthetic oils?" tab_id="1503985481117-2e608624-b893"][vc_column_text]Synthetics and semi-synthetics give improved performance at high temperatures and support extended standard drain intervals.[/vc_column_text][/vc_tta_section][vc_tta_section title="3. How long should a catalytic converter last?" tab_id="1503986203574-97a9deec-c3d1"][vc_column_text]Catalysts often last 10 years, but actual life depends on mileage and engine tune. 50,000 miles is a more reasonable benchmark.[/vc_column_text][/vc_tta_section][vc_tta_section title="4. Can you detail the service schedule for my car?" tab_id="1503986980660-a30273cd-dccb"][vc_column_text]We can't provide detailed extracts from manufacturers' workshop manuals. The vehicle handbook will include basic service interval information[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/2"][insignia_section_heading title="Video tour" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522739025028{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_video_box video_image="13" video_link="https://vimeo.com/7449107"][/vc_column][/vc_row][vc_row]
	
CONTENT;

$templates[] = $data;

	//Teams 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team9.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503990384335{background-color: #f5f5f5 !important;}"][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Meet our experts" subtitle="" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#343434" subtitle_font_weight="" separator_color="#c42d2d" css=".vc_custom_1522739076674{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Tahmid Alom"][/vc_column_inner][vc_column_inner width="1/2"][team_member team_layout="Seventh Option" logo_team="Joshua Earle"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 17 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-17', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact17.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1504005173169{background-color: #343434 !important;}"][vc_column][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-map-alt" icon_title="WE ARE HERE" icon_text="57 brand street, New York" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#c42d2d" title_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-headphone-alt" icon_title="FEEL FREE TO CALL US" icon_text="+01 654 6548 897" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#c42d2d" title_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-car" icon_title="24/7 ROADSIDE ASSISTANCE" icon_text="+01 548 5478 789" btn_check="" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#c42d2d" title_color="#f5f5f5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

// Kids

$templates[] = $data;

	//Services 23 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-23', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service23.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[/vc_row][vc_row el_id="about"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Touching Lives Forever" subtitle="Invictus school" align="text-center" heading_tag="h1" font_weight="default" heading_color="#532ec7" italic_font="1" subtitle_font_weight="" subtitle_color="#ffd338" separator_color="#ffd338" css=".vc_custom_1522673578586{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="centered-box medium-text ">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="202" icon_align="text-center" icon_title="Play Time" icon_text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." btn_check="" separator="disable" title_font="25" title_font_weight="font-weight-400" text_font_weight="default" title_color="#532ec7" css=".vc_custom_1522673876205{padding-top: 15px !important;padding-right: 30px !important;padding-bottom: 15px !important;padding-left: 30px !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="205" icon_align="text-center" icon_title="Daycare" icon_text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." btn_check="" separator="disable" title_font="25" title_font_weight="font-weight-400" text_font_weight="default" title_color="#532ec7" css=".vc_custom_1522673870664{padding-top: 15px !important;padding-right: 30px !important;padding-bottom: 15px !important;padding-left: 30px !important;}"][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="20" img_size="full" alignment="center" el_class="shadow-img"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="203" icon_align="text-center" icon_title="Learning" icon_text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." btn_check="" separator="disable" title_font="25" title_font_weight="font-weight-400" text_font_weight="default" title_color="#532ec7" css=".vc_custom_1522673864101{padding-top: 15px !important;padding-right: 30px !important;padding-bottom: 15px !important;padding-left: 30px !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="204" icon_align="text-center" icon_title="Healthy Meals" icon_text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." btn_check="" separator="disable" title_font="25" title_font_weight="font-weight-400" text_font_weight="default" title_color="#532ec7" css=".vc_custom_1522673857294{padding-top: 15px !important;padding-right: 30px !important;padding-bottom: 15px !important;padding-left: 30px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Image Gallery 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery5.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1512110510823{background-image: url(http://invictus.insigniats.in/kids/wp-content/uploads/2017/08/kids-bg.png?id=12) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="gallery"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_image_gallery design_style="grid_4x" attach_images="37,169,102,171,36,104,170,107" hover_text="" gallery_gap="40" carousel_dots="true" carousel_arrows="true" carousel_infinite="true"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 15 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about15.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_id="whyus"][vc_column][vc_empty_space height="50px"][vc_row_inner equal_height="yes" gap="15"][vc_column_inner width="1/3"][vc_single_image image="37" img_size="full" el_class="shadow-rounded-img"][vc_column_text css=".vc_custom_1522673902525{margin-bottom: 15px !important;}"]
<h4>What we do?</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="36" img_size="full" el_class="shadow-rounded-img"][vc_column_text css=".vc_custom_1503831856838{margin-bottom: 15px !important;}"]
<h4>Why us?</h4>
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522674031105{padding-top: 15px !important;padding-right: 30px !important;padding-left: 30px !important;background-color: #ffd338 !important;}"][vc_column_text css=".vc_custom_1522674237088{margin-bottom: 20px !important;}"]
<h4>Learning includes</h4>
There are many variations of passages of Lorem Ipsum available[/vc_column_text][insignia_simple_icon_list list_items="Learning through play,Individual attention,Best Teachers,Learn &amp; play school,Learn to confidently talk" icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="list-icon-border-none" icon_color="#532ec7" text_color="#363636" icon_fontawesome="fa fa-check"][insignia_button button_style="first" btn_text="Read More" button_size="medium" button_align="text-left" text_color="#f5f5f5" bg_color="#532ec7" hover_bg_color="#6548c1" border_color="#532ec7" hover_border_color="#6548c1" border_radius="5px"][vc_empty_space height="20px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action8.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503915021874{background-image: url(http://invictus.insigniats.in/kids/wp-content/uploads/2017/08/kids-bg.png?id=12) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="10px"][vc_row_inner css=".vc_custom_1503832714021{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Subscribe to our newsletter" subtitle="To know more about us" align="text-center" heading_tag="h1" font_weight="default" heading_color="#f5f5f5" italic_font="1" subtitle_font_weight="" subtitle_color="#ffd338" separator_color="#ffd338" css=".vc_custom_1522674319229{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_column_text]
<div class="domain-search-holder"><form id="domain-search"><input id="domain-text" tabindex="-1" name="domain" type="text" placeholder="Enter Your Email" />
<input id="domain-search-btn" tabindex="-1" name="submit" type="submit" value="Search now" /></form></div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Image Gallery 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery6.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="50px"][insignia_section_heading title="Our video gallery" subtitle="Invictus school" align="text-center" heading_tag="h1" font_weight="default" heading_color="#532ec7" italic_font="1" subtitle_font_weight="" subtitle_color="#ffd338" separator_color="#ffd338" css=".vc_custom_1522674373302{margin-bottom: 35px !important;}"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="video-model-wrapper">
<div class="video-model-inner shadow-rounded-img">

<img src="./wp-content/uploads/2017/08/kids6.jpg" alt="kids-img" />
<div class="video-icon-positioner">
<div class="kids-video-play-icon"><a class="insignia-video-popup" style="font-size: 15px;" href="https://vimeo.com/221152916"><i class="fa fa-play-circle-o sc-bg"><!--icon--></i></a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="video-model-wrapper">
<div class="video-model-inner shadow-rounded-img">

<img src="./wp-content/uploads/2017/08/kids5.jpg" alt="kids-img" />
<div class="video-icon-positioner">
<div class="kids-video-play-icon"><a class="insignia-video-popup" style="font-size: 15px;" href="https://vimeo.com/221152916"><i class="fa fa-play-circle-o sc-bg"><!--icon--></i></a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="video-model-wrapper">
<div class="video-model-inner shadow-rounded-img">

<img src="./wp-content/uploads/2017/08/kids7.jpg" alt="kids-img" />
<div class="video-icon-positioner">
<div class="kids-video-play-icon"><a class="insignia-video-popup" style="font-size: 15px;" href="https://vimeo.com/221152916"><i class="fa fa-play-circle-o sc-bg"><!--icon--></i></a></div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial12.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503914252313{background-image: url(http://invictus.insigniats.in/kids/wp-content/uploads/2017/08/kids-bg2.jpg?id=65) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="What parents say" subtitle="Our testimonial" align="text-center" heading_tag="h1" font_weight="default" heading_color="#532ec7" italic_font="1" subtitle_font_weight="" subtitle_color="#ffd338" separator_color="#ffd338" css=".vc_custom_1522674555463{margin-bottom: 35px !important;}"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Fourth Option" extra_class="inv-kids-testimonial-inner" autoplay="false" slidetoshow="2" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="false" font_color="#767676" title_font_color="#000000" test_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Blog 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog7.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row el_id="blog"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Follow our important news" subtitle="News and Blog" align="text-center" heading_tag="h1" font_weight="default" heading_color="#532ec7" italic_font="1" subtitle_font_weight="" subtitle_color="#ffd338" separator_color="#ffd338" css=".vc_custom_1522674581163{margin-bottom: 35px !important;}"][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][blog_news blog_layout="Grid2" blog_style="layout_6" post_cat="study" blog_no_posts="4" blog_gap="30" extra_class="inv-kids-blog-inner-section"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_empty_space height="50px"][insignia_button button_style="first" btn_text="Read all Blog" button_size="medium" button_align="text-center" text_color="#f5f5f5" bg_color="#6548c1" hover_bg_color="#6548c1" border_color="#532ec7" hover_border_color="#6548c1" border_radius="5px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 18 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-18', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact18.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1512110563233{background-image: url(http://invictus.insigniats.in/kids/wp-content/uploads/2017/08/kids-bg2.jpg?id=65) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background" el_id="contact"][vc_column][vc_empty_space height="50px"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="kids-contact-detail-wrapper">
<div class="kids-contact-detail-inner">
<div class="kids-contact-icon"><i class="ti-headphone-alt kids-icon sc-bg"><!--icon--></i></div>
<div class="kids-contact-detail">
<h5>Phone</h5>
<p class="italic-font">+01 654 6548 897</p>

</div>
</div>
<div class="kids-contact-detail-inner">
<div class="kids-contact-icon"><i class="ti-location-pin kids-icon sc-bg"><!--icon--></i></div>
<div class="kids-contact-detail">
<h5>Email</h5>
<p class="italic-font">example@invictus.com</p>

</div>
</div>
<div class="kids-contact-detail-inner">
<div class="kids-contact-icon"><i class="ti-email kids-icon sc-bg"><!--icon--></i></div>
<div class="kids-contact-detail">
<h5>Adress</h5>
<p class="italic-font">34, South Road, New York, USA</p>

</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][contact-form-7 id="4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_empty_space height="50px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 19 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-19', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact19.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1503904412587{background-image: url(http://invictus.insigniats.in/kids/wp-content/uploads/2017/08/kids-bg-3.png?id=88) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Follow us on social media" subtitle="Get upto date" align="text-center" heading_tag="h1" font_weight="default" heading_color="#532ec7" italic_font="1" subtitle_font_weight="" subtitle_color="#343434" separator_color="#ffd338" css=".vc_custom_1522674658518{margin-bottom: 35px !important;}"][insignia_social_icons color="colorful" border_radius="round" icon_size="large" hover_effect="slideup" icon_align="center" twitter="#" facebook="#" linkedin="#" google-plus="#" youtube="#" behance="#" whatsapp="#"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
	
CONTENT;

// Wedding

$templates[] = $data;

	//About 16 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-16', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about16.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_id="story"][vc_column][vc_column_text]
<div class="wedding-title-wrapper">

<img src="./wp-content/uploads/2017/08/icon.png" alt="title-img" />
<h6 class="italic-font">Lorem ipsum</h6>
<h2 class="wedding-title">Our love story</h2>
</div>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" gap="30" equal_height="yes"][vc_column width="1/3" css=".vc_custom_1514553330800{background-image: url(http://insignia-themes.website/invictus-wedding/wp-content/uploads/2017/10/flower2.jpg?id=1748) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="400px"][/vc_column][vc_column width="1/3" css=".vc_custom_1508834509585{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<div class="inv-wedding-welcome-text-main">
<h4 class="inv-welcome-title italic-font">Welcome</h4>
<h2 class="inv-welcome-sub-text">The harmony of love Meets with the melody of life To create our beautiful Love song</h2>
<a class="inv-wedding-bottom-button" href="#">Location</a>

</div>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1514553263639{background-image: url(http://insignia-themes.website/invictus-wedding/wp-content/uploads/2017/10/flower5.jpg?id=1759) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="400px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter7.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="40px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1514553444737{background-image: url(http://insignia-themes.website/invictus-wedding/wp-content/uploads/2017/08/counter-bg.png?id=1730) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="130px"][vc_column_text]
<h4 class="wedding-counter-upper-text pc">Eagerly Waiting For Our Wedding Date</h4>
[/vc_column_text][vc_empty_space height="20px"][counter date="20-Decemeber-2018" date_color="#d6d5d5" label_color="#d6d5d5"][vc_empty_space height="250px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 17 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-17', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about17.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_class="vc_col-lg-offset-1 vc_col-lg-10" css=".vc_custom_1512123571617{background-color: #ffffff !important;}" el_id="couple"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1504513697679{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="1727" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504513702075{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<div class="inv-process-box-wrapper">
<div class="inv-process-box-inner text-left">
<h1 class="inv-process-number">Bride</h1>
<div class="inv-process-content">
<div class="inv-process-sub-title">
<h6 class="italic-font pc">Happy Bride</h6>
</div>
<div class="inv-process-title">
<h2 class="wedding-title">Anna White</h2>
</div>
<div class="inv-process-decs">

Maecenas tempus, tellus eget condimentum rhon cus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.

</div>
<div class="wedding-social-media-bottom">
<ul class="wedding-social-media-inner">
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-facebook icons inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-twitter inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-youtube-play inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-instagram inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
</ul>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1504513697679{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text]
<div class="inv-process-box-wrapper">
<div class="inv-process-box-inner text-right">
<h1 class="inv-process-number">Groom</h1>
<div class="inv-process-content">
<div class="inv-process-sub-title">
<h6 class="italic-font pc">Proud Groom</h6>
</div>
<div class="inv-process-title">
<h2 class="wedding-title">Jack Blonde</h2>
</div>
<div class="inv-process-decs">

Maecenas tempus, tellus eget condimentum rhon cus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.

</div>
<div class="wedding-social-media-bottom">
<ul class="wedding-social-media-inner">
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-facebook icons inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-twitter inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-youtube-play inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
 	<li><a href="#" target="_blank" rel="noopener"><i class="fa fa-instagram inv-team-member-social-icon" aria-hidden="true"><!-- icon --></i></a></li>
</ul>
</div>
</div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1504513702075{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="1779" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 17 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-17', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra17.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1509022808396{background-image: url(http://insignia-themes.website/church-test/wp-content/uploads/2017/08/invictus-wedding-bg1.png?id=180) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_empty_space height="40px"][vc_column_text]
<div class="wedding-title-wrapper">

<img src="./wp-content/uploads/2017/08/icon.png" alt="title-img" />
<h6 class="italic-font">Lorem Ipsum</h6>
<h2 class="wedding-title">Important People</h2>
</div>
[/vc_column_text][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="wedding-maid-list-wrapper">
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">John Doe</span>|<span class="wedding-maid-relation italic-font">Friend of Groom</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Meghan oliver</span>|<span class="wedding-maid-relation italic-font">Brother of Groom</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Tobby Brand</span>|<span class="wedding-maid-relation italic-font">Sister of Groom</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">chris Gifford</span>|<span class="wedding-maid-relation italic-font">Friend of Groom</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">TJ Markland</span>|<span class="wedding-maid-relation italic-font">Brother of Groom</span></p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<div class="wedding-maid-list-wrapper">
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Heidi Doe</span>|<span class="wedding-maid-relation italic-font">Friend of Bride</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Sondra Doe</span>|<span class="wedding-maid-relation italic-font">Sister of Bride</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Jason Bright</span>|<span class="wedding-maid-relation italic-font">Brother of Bride</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Ronn White</span>|<span class="wedding-maid-relation italic-font">Friend of Bride</span></p>
<p class="wedding-maid-list-inner"><span class="wedding-maid-name italic-font">Eva Barons</span>|<span class="wedding-maid-relation italic-font">cousin of Bride</span></p>

</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Image Gallery 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery7.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1512123607952{background-color: #ffffff !important;}" el_id="gallery"][vc_column][vc_empty_space height="50px"][insignia_image_gallery design_style="masonry_3x" attach_images="1716,1712,1717,1715,1711,1710,1714,1709,1722" hover_text="" gallery_gap="20" carousel_dots="true" carousel_arrows="true" carousel_infinite="true"][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 18 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-18', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra18.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512123618322{background-image: url(http://insignia-themes.website/church-test/wp-content/uploads/2017/08/invictus-wedding-bg1.png?id=180) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="events"][vc_column][vc_empty_space height="40px"][vc_column_text]
<div class="wedding-title-wrapper">

<img src="./wp-content/uploads/2017/08/icon.png" alt="title-img" />
<h6 class="italic-font">Lorem ipsum</h6>
<h2 class="wedding-title">Events Timeline</h2>
</div>
[/vc_column_text][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ3ZWRkaW5nLWV2ZW50cyUyMiUzRSUwQSUzQ2hyJTIwY2xhc3MlM0QlMjJ0b3AtYm9yZGVyJTIyJTNFJTBBJTNDaDUlM0VXZWRkaW5nJTIwUmVjZXB0aW9uJTNDJTJGaDUlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMndlZGRpbmctZXZlbnRzLWljb24lMjIlM0UlM0NwJTNFJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA4JTJGaWNvbnMtYm94MS5wbmclMjIlMjBhbHQlM0QlMjJpY29uLWltZyUyMiUzRSUzQyUyRnAlM0UlMEElM0NwJTNFRGVjZW1lYmVyJTIwMjElMkMlMjAyMDE4JTNDJTJGcCUzRSUwQSUzQ3AlM0U2JTNBMzAlMjBQTSUzQyUyRnAlM0UlMEElM0MlMkZkaXYlM0UlMEElM0NwJTNFdGhlJTIwbWFqb3JpdHklMjBoYXZlJTIwc3VmZmVyZWQlMjBhbHRlcmF0aW9uJTIwaW4lMjBzb21lJTIwZm9ybSUyQyUyMGJ5JTIwaW5qZWN0ZWQlMjBodW1vdXIlMkMlMjBvciUyMHJhbmRvbWlzZWQlMjB3b3JkcyUyMHdoaWNoJTIwZG9uJUUyJTgwJTk5dCUyMGxvb2slMjBldmVuJTIwc2xpZ2h0bHklMjBiZWxpZXZhYmxlLiUzQyUyRnAlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMndlZGRpbmctZXZlbnQtYm90dG9tLWltZyUyMiUzRSUzQ2ltZyUyMHNyYyUzRCUyMi4lMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTclMkYwOCUyRmljb24ucG5nJTIyJTIwYWx0JTNEJTIyaWNvbi1pbWclMjIlM0UlM0MlMkZkaXYlM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ3ZWRkaW5nLWV2ZW50cyUyMiUzRSUwQSUzQ2hyJTIwY2xhc3MlM0QlMjJ0b3AtYm9yZGVyJTIyJTNFJTBBJTNDaDUlM0VXZWRkaW5nJTIwQ2VyZW1vbnklM0MlMkZoNSUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyd2VkZGluZy1ldmVudHMtaWNvbiUyMiUzRSUzQ3AlM0UlM0NpbWclMjBzcmMlM0QlMjIuJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE3JTJGMDglMkZpY29ucy0yLTEucG5nJTIyJTIwYWx0JTNEJTIyaWNvbnMtYm94JTIyJTNFJTNDJTJGcCUzRSUwQSUzQ3AlM0VEZWNlbWViZXIlMjAyMCUyQyUyMDIwMTglM0MlMkZwJTNFJTBBJTNDcCUzRTYlM0EzMCUyMFBNJTNDJTJGcCUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQ3AlM0V0aGUlMjBtYWpvcml0eSUyMGhhdmUlMjBzdWZmZXJlZCUyMGFsdGVyYXRpb24lMjBpbiUyMHNvbWUlMjBmb3JtJTJDJTIwYnklMjBpbmplY3RlZCUyMGh1bW91ciUyQyUyMG9yJTIwcmFuZG9taXNlZCUyMHdvcmRzJTIwd2hpY2glMjBkb24lRTIlODAlOTl0JTIwbG9vayUyMGV2ZW4lMjBzbGlnaHRseSUyMGJlbGlldmFibGUuJTNDJTJGcCUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyd2VkZGluZy1ldmVudC1ib3R0b20taW1nJTIyJTNFJTNDaW1nJTIwc3JjJTNEJTIyLiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA4JTJGaWNvbi5wbmclMjIlMjBhbHQlM0QlMjJpY29uLWltZyUyMiUzRSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/3"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ3ZWRkaW5nLWV2ZW50cyUyMiUzRSUwQSUzQ2hyJTIwY2xhc3MlM0QlMjJ0b3AtYm9yZGVyJTIyJTNFJTBBJTNDaDUlM0VXZWRkaW5nJTIwQWZ0ZXJwYXJ0eSUzQyUyRmg1JTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJ3ZWRkaW5nLWV2ZW50cy1pY29uJTIyJTNFJTNDcCUzRSUzQ2ltZyUyMHNyYyUzRCUyMi4lMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTclMkYwOCUyRmljb25zLTMzLnBuZyUyMiUyMGFsdCUzRCUyMmljb25zLWJveCUyMiUzRSUzQyUyRnAlM0UlMEElM0NwJTNFRGVjZW1lYmVyJTIwMjIlMkMlMjAyMDE4JTNDJTJGcCUzRSUwQSUzQ3AlM0U2JTNBMzAlMjBQTSUzQyUyRnAlM0UlMEElM0MlMkZkaXYlM0UlMEElM0NwJTNFdGhlJTIwbWFqb3JpdHklMjBoYXZlJTIwc3VmZmVyZWQlMjBhbHRlcmF0aW9uJTIwaW4lMjBzb21lJTIwZm9ybSUyQyUyMGJ5JTIwaW5qZWN0ZWQlMjBodW1vdXIlMkMlMjBvciUyMHJhbmRvbWlzZWQlMjB3b3JkcyUyMHdoaWNoJTIwZG9uJUUyJTgwJTk5dCUyMGxvb2slMjBldmVuJTIwc2xpZ2h0bHklMjBiZWxpZXZhYmxlLiUzQyUyRnAlM0UlMEElM0NkaXYlMjBjbGFzcyUzRCUyMndlZGRpbmctZXZlbnQtYm90dG9tLWltZyUyMiUzRSUzQ2ltZyUyMHNyYyUzRCUyMi4lMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTclMkYwOCUyRmljb24ucG5nJTIyJTIwYWx0JTNEJTIyaWNvbi1pbWclMjIlM0UlM0MlMkZkaXYlM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 20 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-20', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact20.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" el_class="wedding-contact-section-inner" el_id="rsvp"][vc_column css=".vc_custom_1501660288924{margin-right: 20px !important;margin-left: 20px !important;}"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="60px"][vc_column_text]
<div class="wedding-title-wrapper">

<img src="./wp-content/uploads/2017/08/icon-white.png" alt="title-img" />
<h6 class="italic-font white-color" style="color: #f5f5f5;">RSVP</h6>
<h2 class="wedding-title white-color">Are You Coming?</h2>
</div>
[/vc_column_text][vc_empty_space height="30px"][contact-form-7 id="124"][vc_empty_space height="80px"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
	
CONTENT;

// Freelancer

$templates[] = $data;

	//About 18 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-18', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about18.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512124764603{background-color: #ecf3f6 !important;}" el_id="about"][vc_column][vc_empty_space height="60px"][vc_row_inner gap="20"][vc_column_inner width="1/2"][vc_single_image image="92" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="40px"][insignia_section_heading title="About me" subtitle="Introduction" align="text-left" heading_tag="h2" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#262626" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#696969" separator_color="#0000ff"][vc_empty_space height="30px"][vc_column_text]I’m Jean Doe. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_column_text]
<div class="fl-info-meta clearfix">
<ul>
 	<li><strong>Name: </strong>John doe</li>
 	<li><strong>job: </strong>Web designer</li>
 	<li><strong>age: </strong>28 Years</li>
 	<li><strong>Country: </strong>India</li>
</ul>
</div>
[/vc_column_text][insignia_button button_style="second" btn_text="Download cv" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#0000ff" border_color="#0000ff"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]

CONTENT;


$templates[] = $data;

	//Extra 19 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-19', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra19.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row el_id="skills"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-pencil-alt" icon_size="icon-extra-medium" icon_title="Education" icon_text="" btn_check="" separator="enable" extra_class="custom-title-font-size" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#0000ff" title_color="#262626" separator_color="#0000ff"][vc_empty_space height="20px"][vc_column_text]
<div class="career-item-box">
<div class="career-item-title">University of Engineering</div>
<p class="italic-font">Visual Design Basics</p>

</div>
<div class="career-item-box">
<div class="career-item-title">Designing school</div>
<p class="italic-font">Graphic Design</p>

</div>
<div class="career-item-box">
<div class="career-item-title">Graphics college</div>
<p class="italic-font">Color Theory</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-bag" icon_size="icon-extra-medium" icon_title="Experience" icon_text="" btn_check="" separator="enable" extra_class="custom-title-font-size" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#0000ff" title_color="#262626" separator_color="#0000ff"][vc_empty_space height="20px"][vc_column_text]
<div class="career-item-box">
<div class="career-item-title">Team Leader</div>
<p class="italic-font">Envato studio</p>

</div>
<div class="career-item-box">
<div class="career-item-title">Web develpoer</div>
<p class="italic-font">Insignia technolabs</p>

</div>
<div class="career-item-box">
<div class="career-item-title">UI/UX Developer</div>
<p class="italic-font">Envato studio</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-ruler-pencil" icon_size="icon-extra-medium" icon_title="Skills" icon_text="" btn_check="" separator="enable" extra_class="custom-title-font-size" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#0000ff" title_color="#262626" separator_color="#0000ff"][vc_empty_space height="20px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Graphic%20Design%22%2C%22value%22%3A%2289%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%5D" bgcolor="custom" custombgcolor="#0000ff" customtxtcolor="#262626" el_class="fl-skills-wrapper" units="%"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]	
CONTENT;

$templates[] = $data;

	//Portfolio 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-04', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio4.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<div class="fl-title-wrapper centered-box">
<div class="fl-title-main">
<h2 class="fl-main-title-inner">Recent Work</h2>
</div>
<div class="fl-title-separator-holder">
<div class="fl-title-separator-inner"><!--line--></div>
</div>
</div>
[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][portfolio port_layout="port_grid3" port_on_hover="layout_3" port_cat="" port_filter="" port_no_posts="6" port_gap="30" port_overlay_color="#0000ff" title_color="#ffffff" category_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 24 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-24', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service24.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" el_id="services"][vc_column width="1/2" css=".vc_custom_1523012942690{border-top-width: 30px !important;border-right-width: 30px !important;border-bottom-width: 30px !important;border-left-width: 30px !important;padding-top: 8% !important;padding-right: 10% !important;padding-bottom: 8% !important;padding-left: 10% !important;border-left-color: #f6f6f6 !important;border-left-style: solid !important;border-right-color: #f6f6f6 !important;border-right-style: solid !important;border-top-color: #f6f6f6 !important;border-top-style: solid !important;border-bottom-color: #f6f6f6 !important;border-bottom-style: solid !important;}"][vc_empty_space height="40px"][insignia_section_heading title="What I’m doing" subtitle="" align="text-left" heading_tag="h2" heading_font_size="30" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#262626" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#696969" separator_color="#0000ff"][vc_empty_space height="35px"][vc_column_text]
<p class="italic-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut ligula leo.</p>
[/vc_column_text][vc_empty_space height="35px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-bookmark" icon_title="BRANDING" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-brush" icon_title="DESIGN" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-flag" icon_title="DEVELOPMENT" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-camera" icon_title="PHOTOGRAPHY" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-briefcase" icon_title="MARKETING" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-headphone-alt" icon_title="SUPPORT" icon_text="Thik different

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="font-weight-400" icon_color="#696969" title_color="#262626" text_color="#696969"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][vc_column width="1/2" css=".vc_custom_1523012608266{background-image: url(http://invictus.insigniats.in/freelancer/wp-content/uploads/2017/08/freelancer-2.jpg?id=45) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

	//Services 25 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-25', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service25.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1523012769832{background-image: url(http://invictus.insigniats.in/freelancer/wp-content/uploads/2017/08/freelancer-3.jpg?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][vc_column width="1/2" css=".vc_custom_1523012955751{border-top-width: 30px !important;border-right-width: 30px !important;border-bottom-width: 30px !important;border-left-width: 30px !important;padding-top: 8% !important;padding-right: 10% !important;padding-bottom: 8% !important;padding-left: 10% !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-left-color: #f6f6f6 !important;border-left-style: solid !important;border-right-color: #f6f6f6 !important;border-right-style: solid !important;border-top-color: #f6f6f6 !important;border-top-style: solid !important;border-bottom-color: #f6f6f6 !important;border-bottom-style: solid !important;}"][vc_empty_space height="40px"][insignia_section_heading title="What I’m doing" subtitle="" align="text-left" heading_tag="h2" heading_font_size="30" font_weight="font-weight-700" text_transform="text-capitalize" heading_color="#262626" italic_font="1" subtitle_text_transform="text-capitalize" subtitle_font_weight="font-weight-400" subtitle_color="#696969" separator_color="#0000ff"][vc_empty_space height="35px"][vc_column_text]
<p class="italic-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut ligula leo.</p>
[/vc_column_text][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.[/vc_column_text][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1523013940936{padding-right: 25px !important;padding-left: 25px !important;}"][milestone title="SATISFIED CLIENTS" number="300" add_icon="" align="text-left" text_transform="text-uppercase" num_size="30" title_size="16" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#262626" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1523013927228{padding-right: 25px !important;padding-left: 25px !important;}"][milestone title="PROJECTS COMPLETED" number="787" add_icon="" align="text-left" text_transform="text-uppercase" num_size="30" title_size="16" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#262626" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1523013936511{padding-right: 25px !important;padding-left: 25px !important;}"][milestone title="CUPS OF COFFEE" number="989" add_icon="" align="text-left" text_transform="text-uppercase" num_size="30" title_size="16" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#262626" title_color="#696969" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

CONTENT;

// Banking

$templates[] = $data;

	//Services 26 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-26', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service26.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="7" image_title="RETIREMENT" number_box="01 " image_text="Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-left" title_font="text-extra-large" title_font_weight="font-weight-700" btn_font_weight="default" title_color="#002e5b" number_color="#ffbc13" ins_bg_color="#f2f5f8"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="6" image_title="MUTUAL FUND" number_box="02 " image_text="Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-left" title_font="text-extra-large" title_font_weight="font-weight-700" btn_font_weight="default" title_color="#002e5b" number_color="#ffbc13" ins_bg_color="#f2f5f8"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="5" image_title="TRADING" number_box="03 " image_text="Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque." enable_button="1" btn_text="Learn More" btn_link="url:%23|||" box_align="text-left" title_font="text-extra-large" title_font_weight="font-weight-700" btn_font_weight="default" title_color="#002e5b" number_color="#ffbc13" ins_bg_color="#f2f5f8"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter8.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503568557850{background-color: #002e5b !important;}"][vc_column][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="banking-loan-rates-wrapper centered-box">
<div class="banking-loan-rate">8.95%</div>
<div class="banking-loan-text">Home loan</div>
<div class="banking-title-separator-holder">
<div class="banking-title-separator-inner sc"><!--line--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="banking-loan-rates-wrapper centered-box">
<div class="banking-loan-rate">9.90%</div>
<div class="banking-loan-text">Car loan</div>
<div class="banking-title-separator-holder">
<div class="banking-title-separator-inner sc"><!--line--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="banking-loan-rates-wrapper centered-box">
<div class="banking-loan-rate">7.80%</div>
<div class="banking-loan-text">Education loan</div>
<div class="banking-title-separator-holder">
<div class="banking-title-separator-inner sc"><!--line--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]
<div class="banking-loan-rates-wrapper centered-box">
<div class="banking-loan-rate">9.50%</div>
<div class="banking-loan-text">Personal loan</div>
<div class="banking-title-separator-holder">
<div class="banking-title-separator-inner sc"><!--line--></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 27 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-27', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service27.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Services we offer" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#002e5b" subtitle_font_weight="" separator_color="#ffbc13" css=".vc_custom_1522497647209{margin-bottom: 35px !important;}"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Personal Loan" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Home Loan" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Education Loan" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Car Loan" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Business Loan" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="" num_title="Debt Consolidation" num_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto cum dolore dolores fuga libero magni placeat possimus sequi" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_size="25" title_font_weight="font-weight-700" title_color="#002e5b"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 20 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-20', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra20.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="fix-background" css=".vc_custom_1503570180120{background-image: url(http://invictus.insigniats.in/banking/wp-content/uploads/2017/08/banking-bg1.png?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511780951984{background-color: #ffffff !important;}"][vc_line_chart type="line" style="custom" values="%5B%7B%22title%22%3A%22One%22%2C%22y_values%22%3A%2210%3B%2015%3B%2020%3B%2025%3B%2027%3B%2025%3B%2023%3B%2025%22%2C%22color%22%3A%22blue%22%2C%22custom_color%22%3A%22%23002e5b%22%7D%2C%7B%22title%22%3A%22Two%22%2C%22y_values%22%3A%2225%3B%2018%3B%2016%3B%2017%3B%2020%3B%2025%3B%2030%3B%2035%22%2C%22color%22%3A%22pink%22%2C%22custom_color%22%3A%22%23ffbc13%22%7D%5D"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="250px"][/vc_column][/vc_row][vc_row el_class="banking-process-holder"][vc_column width="1/3" css=".vc_custom_1503570907043{background-color: #f2f5f8 !important;}"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="01." num_title="CHOOSE LOAN AMOUNT" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour." btn_check="1" btn_text="Learn More" btn_link="#" number_size="80" title_size="20" number_font_weight="font-weight-700" title_font_weight="font-weight-700" num_color="#ffbc13" title_color="#002e5b" btn_color="#002e5b" css=".vc_custom_1522497536448{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][/vc_column][vc_column width="1/3" css=".vc_custom_1503571204003{background-color: #ffffff !important;}"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="02." num_title="SUBMIT YOUR DOCUMENT" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour." btn_check="1" btn_text="Learn More" btn_link="#" number_size="80" title_size="20" number_font_weight="font-weight-700" title_font_weight="font-weight-700" num_color="#ffbc13" title_color="#002e5b" btn_color="#002e5b" css=".vc_custom_1522497533407{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][/vc_column][vc_column width="1/3" css=".vc_custom_1503570950602{background-color: #f2f5f8 !important;}"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="03." num_title="GET YOUR CASH" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour." btn_check="1" btn_text="Learn More" btn_link="#" number_size="80" title_size="20" number_font_weight="font-weight-700" title_font_weight="font-weight-700" num_color="#ffbc13" title_color="#002e5b" btn_color="#002e5b" css=".vc_custom_1522497545948{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Hero Sections 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections8.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1503574031846{background-image: url(http://invictus.insigniats.in/banking/wp-content/uploads/2017/08/banking-bg1.png?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="90px"][vc_row_inner][vc_column_inner][vc_column_text]
<div class="banking-quotes-wrapper centered-box">
<h1 class="white-color banking-quotes">Great things in business are never done by one person. They're done by a <span class="sc">team of people.</span></h1>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 21 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-21', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact21.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1503577109271{background: #353535 url(http://invictus.insigniats.in/banking/wp-content/uploads/2017/08/banking-bg1.png?id=46) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Request a call back" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ffbc13" css=".vc_custom_1522497772039{margin-bottom: 35px !important;}"][vc_column_text]
<p class="white-color centered-box">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner][contact-form-7 id="4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 22 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-22', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact22.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="banking-contact-info-wrapper">
<div class="banking-contact-info-inner centered-box">
<div class="banking-contact-icon"><span class="ti-agenda banking-icon sc"><!--icon--></span></div>
<div class="banking-contact-title">
<h5>Apply for a loan</h5>
</div>
If you would like to apply for a loan from Invictus and our lenders, please fill free to contact us.
<div class="banking-button-holder"><a class="banking-button-small" href="#">Book appointment</a></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="banking-contact-info-wrapper">
<div class="banking-contact-info-inner centered-box">
<div class="banking-contact-icon"><span class="ti-headphone-alt banking-icon sc"><!--icon--></span></div>
<div class="banking-contact-title">
<h5>Contact us</h5>
</div>
<div class="banking-contact-phone sc">01-354-987-8567</div>
<div class="banking-contact-email">example@invictus.com</div>
<div class="banking-button-holder"><a class="banking-button-small" href="#">Contact us</a></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="banking-contact-info-wrapper">
<div class="banking-contact-info-inner centered-box">
<div class="banking-contact-icon"><span class="ti-user banking-icon sc"><!--icon--></span></div>
<div class="banking-contact-title">
<h5>Talk to advisor</h5>
</div>
If you would like to apply for a loan from Invictus and our lenders, please fill free to contact us.
<div class="banking-button-holder"><a class="banking-button-small" href="#">live chat</a></div>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

// Roofing

$templates[] = $data;

	//About 19 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-19', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about19.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row gap="20" full_height="yes" columns_placement="top" content_placement="bottom"][vc_column width="2/3"][vc_empty_space height="20px"][insignia_section_heading title="About Our Company" subtitle="" align="text-left" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#232331" subtitle_font_weight="" separator_color="#ca1f26"][vc_empty_space height="50px"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt porta velit, sed suscipit massa consequat sed. Integer est ante, dictum quis metus non, rhoncus accumsan.[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-timer" icon_title="24/7 AVAILABILITY" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#ca1f26" title_color="#232331"][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-panel" icon_title="QUICK &amp; EFFICIENT" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#ca1f26" title_color="#232331"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-agenda" icon_title="CERTIFICATION" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#ca1f26" title_color="#232331"][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-eye" icon_title="FREE ESTIMATION" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit, Mauris mollis.

" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#ca1f26" title_color="#232331"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1513325349757{padding-top: 20px !important;background: #edf1f2 url(http://insignia-themes.website/roofing/wp-content/uploads/2017/12/roofing-form-bg-.jpg?id=126) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text css=".vc_custom_1513325418655{margin-bottom: 20px !important;}"]
<h5 class="text-uppercase white-color" style="padding: 0 15px;">Get your Free Roof Inspection</h5>
[/vc_column_text][contact-form-7 id="4"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action9.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513326641550{background-color: #ca1f26 !important;}"][vc_column css=".vc_custom_1522072329677{padding-top: 0px !important;}"][ins_cta heading="From Complete Turn Key To Project Manager. Leave The Building To The Professionals." subheading="" button1_title="BOOK SERVICE" btn_radius="btn-circle" heading_font_size="30" heading_font_weight="font-weight-600" sub_heading_font_weight="default" heading_color="#f5f5f5" button1_color="#f5f5f5" button1_bg_color="#232331" button1_border_color="#232331" button1_hover_border_color="#232331" button1_url="url:%23|||" btn1_class="padding-30px-lr padding-12px-tb font-weight-600"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 28 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-28', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service28.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Our Services" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#232331" subtitle_font_weight="" separator_color="#ca1f26"][vc_empty_space height="50px"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="10"][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="312" image_title=" RESIDENTIAL ROOFING" number_box="01." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="313" image_title=" COMMERCIAL ROOFING" number_box="02." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="311" image_title=" GENERAL CONTRACTOR" number_box="03." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner gap="10"][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="310" image_title=" WINDOW REPLACEMENT" number_box="04." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="309" image_title=" GUTTER INSTALLATION" number_box="05." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box layout_style="ins-image-box-layout-3" custom_image="314" image_title="FENCE &amp; STAIN" number_box="06." image_text="Lorem Ipsum is simply dummy text of the printing dummy text ever since the 1500s and typesetting industry." enable_button="1" btn_text="LEARN MORE" btn_link="url:%23|||" box_align="text-left" title_font="text-large" title_font_weight="font-weight-700" btn_font_weight="font-weight-600" title_color="#232331" number_color="#ca1f26" btn_color="#ca1f26"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 29 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-29', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service29.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1513249172076{background-image: url(http://insignia-themes.website/roofing/wp-content/uploads/2017/12/roofing-3.jpg?id=30) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="80px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513249650800{padding-top: 40px !important;padding-right: 40px !important;padding-bottom: 40px !important;padding-left: 40px !important;background-color: #f2f2f2 !important;}"][insignia_section_heading title="We Work to Provide Impeccable Home Services" subtitle="" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#232331" subtitle_font_weight=""][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam[/vc_column_text][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-home" icon_title="Fast and Efficient Work" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-400" text_font_weight="default" icon_color="#ca1f26" title_color="#232331"][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-wallet" icon_title="Best Price Guarantee" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
" btn_check="" title_font="text-extra-large" title_font_weight="font-weight-400" text_font_weight="default" icon_color="#ca1f26" title_color="#232331"][vc_empty_space height="20px"][insignia_button button_style="three" btn_text="BOOK SERVICE" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#ca1f26" border_color="#ca1f26" border_radius="100px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 21 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-21', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra21.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes" content_placement="bottom" gap="20"][vc_column_inner width="1/2"][insignia_section_heading title="WE PROUDLY SERVE" subtitle="" align="text-left" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#232331" subtitle_font_weight="" separator_color="#ca1f26"][vc_empty_space height="40px"][vc_column_text css=".vc_custom_1513252311579{margin-bottom: 0px !important;}"]
<div class="roofing-servings-wrapper"><span class="roofing-servings">Alliance</span> | <span class="roofing-servings">Arlington</span> | <span class="roofing-servings">Azle</span> | <span class="roofing-servings">Bedford</span> | <span class="roofing-servings">Benbrook</span> | <span class="roofing-servings">Burleson</span> | <span class="roofing-servings">Carrollton</span> | <span class="roofing-servings">Colleyville</span> | <span class="roofing-servings">Crowley</span> | <span class="roofing-servings">Dallas</span> | <span class="roofing-servings">Denton</span> | <span class="roofing-servings">Euless</span> | <span class="roofing-servings">Fort Worth</span> | <span class="roofing-servings">Frisco</span> | <span class="roofing-servings">Garland</span> | <span class="roofing-servings">Grapevine</span> | <span class="roofing-servings">Haltom City</span> | <span class="roofing-servings">Haslet</span> | <span class="roofing-servings">Hurst</span> | <span class="roofing-servings">Irving</span> | <span class="roofing-servings">Keller</span> | <span class="roofing-servings">Kennedale</span></div>
[/vc_column_text][vc_empty_space][insignia_button button_style="three" btn_text="SCHEDULE A VISIT" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#ca1f26" border_color="#ca1f26" border_radius="100px"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1513324162299{margin-bottom: 0px !important;}"]<iframe src="https://www.youtube.com/embed/6jiNS_4CEug?rel=0&amp;controls=0&amp;showinfo=0" width="560" height="315" allowfullscreen="allowfullscreen"></iframe>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Hero Sections 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections9.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513252665215{background-image: url(http://insignia-themes.website/roofing/wp-content/uploads/2017/12/roofing-bg.jpg?id=42) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="100px"][insignia_section_heading title="Equipment you can count on. People you can trust." subtitle="" align="text-center" separator="disable" heading_tag="h1" heading_font_size="52" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="white-color centered-box medium-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy.</p>

[/vc_column_text][vc_empty_space height="30px"][insignia_button button_style="three" btn_text="Book Service" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#ffffff" bg_color="#ca1f26" border_color="#ca1f26" border_radius="100px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-05', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio5.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Our Latest Projects" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#232331" subtitle_font_weight="" separator_color="#ca1f26"][vc_empty_space height="20px"][vc_empty_space height="30px"][portfolio port_layout="port_grid4" port_on_hover="layout_3" port_cat="roofing" port_filter="" port_no_posts="8" port_gap="40" port_overlay_color="#232331" title_color="#ffffff" category_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial13.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513255153327{background-image: url(http://insignia-themes.website/roofing/wp-content/uploads/2017/12/roofing-bg.jpg?id=42) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="30px"][insignia_section_heading title="Testimonial" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-600" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ca1f26"][vc_empty_space height="20px"][vc_empty_space height="30px"][testimonial testimonial_layout="Fifth Option" extra_class="roofing-testimonial" autoplay="false" slidetoshow="3" slidetoscroll="2" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true"][vc_empty_space height="85px"][/vc_column][/vc_row]
CONTENT;

// logistic

$templates[] = $data;

	//About 20 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-20', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about20.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1512978941072{background-color: #f6fafd !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes" content_placement="middle" gap="30"][vc_column_inner width="1/2"][vc_single_image image="42" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="From Departure to Destination!" subtitle="Invictus Logistics" align="text-left" separator="disable" heading_font_size="40" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#1e1e1e" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#01a3c1"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.[/vc_column_text][vc_column_text]
<div class="restaurant-button-holder"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">Our Services</span></a></div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Icon Boxes 16 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-16', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box16.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our Services" subtitle="What we offer" align="text-center" separator="disable" heading_font_size="40" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#1e1e1e" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#01a3c1"][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="314" icon_align="text-left" icon_title="Air Freight" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="318" icon_align="text-left" icon_title="Sea Freight" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="319" icon_align="text-left" icon_title="Road Transport" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="316" icon_align="text-left" icon_title="Postal Service" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="321" icon_align="text-left" icon_title="Logistics" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="322" icon_align="text-left" icon_title="Warehousing" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="323" icon_align="text-left" icon_title="Cargo Insurance" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][vc_column_inner width="1/4"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="320" icon_align="text-left" icon_title="Supply Chain" icon_text="Lorem ipsum dolor sit amet, consecteturetur adipis cingelit. Mauris mollis tempus dui.

" btn_check="1" btn_text="Learn More" btn_link="#" hover_box_shadow="ins-icon-hover-box-shadow" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#1e1e1e" btn_color="#01a3c1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 30 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-30', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service30.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/3" css=".vc_custom_1512994492104{padding-top: 10% !important;padding-right: 8% !important;padding-bottom: 10% !important;padding-left: 8% !important;background-image: url(http://insignia-themes.website/logistic/wp-content/uploads/2017/12/download-3.png?id=131) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="25px"][insignia_section_heading title="Get a Free Quote!" subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#ffffff" subtitle_font_weight=""][vc_empty_space height="25px"][vc_column_text]
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

<div class="restaurant-button-holder"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">Our Services</span></a></div>
[/vc_column_text][vc_empty_space height="25px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1512994479337{padding-top: 10% !important;padding-right: 8% !important;padding-bottom: 10% !important;padding-left: 8% !important;background-image: url(http://insignia-themes.website/logistic/wp-content/uploads/2017/12/download-compressed.jpg?id=95) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="25px"][insignia_section_heading title="Shipment Tracking" subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#ffffff" subtitle_font_weight=""][vc_empty_space height="25px"][vc_column_text]
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

<div class="restaurant-button-holder"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">Find Your Cargo</span></a></div>
[/vc_column_text][vc_empty_space height="25px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1512994438557{padding-top: 10% !important;padding-right: 8% !important;padding-bottom: 10% !important;padding-left: 8% !important;background-image: url(http://insignia-themes.website/logistic/wp-content/uploads/2017/12/download-4.png?id=132) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="25px"][insignia_section_heading title="Shipping Calculator" subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#ffffff" subtitle_font_weight=""][vc_empty_space height="25px"][vc_column_text]
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

<div class="restaurant-button-holder"><a class="restaurant-button-large pc-bg" href="#"><span class="restaurant-button-text">Get Estimate</span></a></div>
[/vc_column_text][vc_empty_space height="25px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Counters 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter9.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1512996100440{background-color: #1e1e1e !important;}"][vc_column css=".vc_custom_1512977623313{padding-top: 0px !important;}"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1512977617945{border-right-width: 1px !important;border-right-color: #2b2e41 !important;border-right-style: solid !important;}"][vc_empty_space height="45px"][milestone title="Happy Customers" number="1225" add_icon="" align="text-center" num_size="50" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#01a3c1" title_color="#f5f5f5"][vc_empty_space height="65px"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1512977658851{border-right-width: 1px !important;border-right-color: #2b2e41 !important;border-right-style: solid !important;}"][vc_empty_space height="45px"][milestone title="Services" number="30" add_icon="" align="text-center" num_size="50" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#01a3c1" title_color="#f5f5f5"][vc_empty_space height="65px"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1512977718803{border-right-width: 1px !important;border-right-color: #2b2e41 !important;border-right-style: solid !important;}"][vc_empty_space height="45px"][milestone title="Projects" number="475" add_icon="" align="text-center" num_size="50" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#01a3c1" title_color="#f5f5f5"][vc_empty_space height="65px"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1512996141842{border-right-width: 1px !important;border-right-color: rgba(255,255,255,0.01) !important;border-right-style: solid !important;}"][vc_empty_space height="45px"][milestone title="Awards" number="52" add_icon="" align="text-center" num_size="50" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-600" num_color="#01a3c1" title_color="#f5f5f5"][vc_empty_space height="65px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 23 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-23', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact23.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row equal_height="yes"][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1522320423330{padding-right: 10% !important;padding-left: 10% !important;background-color: #01a3c1 !important;}"][vc_empty_space height="15px"][insignia_section_heading title="Our Contacts" subtitle="" align="text-left" separator="disable" heading_tag="h1" heading_font_size="42" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#f5f5f5" subtitle_font_weight=""][vc_empty_space height="20px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-mobile" icon_title="Phone" icon_text="+385 1 482 0044

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][vc_empty_space height="15px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-printer" icon_title="Fax" icon_text="+385 1 482 0044

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][vc_empty_space height="15px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-email" icon_title="Email" icon_text="admin@invictus.com

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][vc_empty_space height="15px"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-location-pin" icon_title="Address" icon_text="135 W 46nd Street New York

" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1512978050195{background-color: #f4f6f9 !important;}"][vc_empty_space height="15px"][insignia_section_heading title="REQUEST QUOTE" subtitle="" align="text-center" separator="disable" heading_tag="h1" heading_font_size="42" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#1e1e1e" subtitle_font_weight=""][vc_empty_space height="35px"][contact-form-7 id="59"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

// Charity

$templates[] = $data;

	//About 21 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-21', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about21.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="25px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Forget what you can get and see what you can give." subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#de6262" subtitle_font_weight=""][vc_column_text css=".vc_custom_1515132261454{margin-bottom: 20px !important;}"]
<h5 class="text-center">Rebuilding communities for families, one home at a time.</h5>
[/vc_column_text][vc_column_text]
<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][insignia_button button_style="three" btn_text="Watch The Video" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#ffffff" bg_color="#de6262" border_color="#de6262" border_width="1px" border_radius="50px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 31 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-31', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service31.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="30" css=".vc_custom_1513773538305{background-color: #212121 !important;}"][vc_column width="5/12"][vc_empty_space height="40px"][vc_single_image image="23" img_size="full"][vc_row_inner][vc_column_inner width="3/4"][vc_column_text css=".vc_custom_1513774802256{margin-bottom: 15px !important;}"]</p>
<h2 class="text-uppercase white-color">No one has ever become poor by giving.</h2>
<p>[/vc_column_text][vc_column_text]</p>
<div class="shop-one-button-holder"><a class="shop-one-button-link pc" href="#" target="_self">Donate Now<i class="fa fa-play" aria-hidden="true"></i></a></div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][vc_column width="7/12"][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-heart" icon_size="icon-large" icon_title="HELP & SUPPORT" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
<p>" btn_check="" title_font="text-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#de6262" title_color="#ffffff" text_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-ruler-pencil" icon_size="icon-large" icon_title="EDUCATION" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
<p>" btn_check="" title_font="text-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#de6262" title_color="#ffffff" text_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-support" icon_size="icon-large" icon_title="MEDICAL" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
<p>" btn_check="" title_font="text-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#de6262" title_color="#ffffff" text_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-face-smile" icon_size="icon-large" icon_title="ADOPTION" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
<p>" btn_check="" title_font="text-large" title_font_weight="font-weight-700" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#de6262" title_color="#ffffff" text_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 22 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-22', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about22.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner equal_height="yes" content_placement="middle" gap="30"][vc_column_inner width="1/2"][insignia_section_heading title="become a volunteer" subtitle="" align="text-left" separator="disable" heading_tag="h1" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#de6262" subtitle_font_weight=""][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting.[/vc_column_text][insignia_button button_style="three" btn_text="Join Now" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" bg_color="#de6262" border_color="#de6262" border_width="1px" border_radius="50px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513775854061{padding-top: 10px !important;background-color: #de6262 !important;}"][vc_column_text css=".vc_custom_1513775538224{padding-right: 8% !important;padding-left: 8% !important;}"]</p>
<h2 class="white-color text-uppercase">dedicated to helping underprivileged children, so they can achieve their full potential</h2>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 22 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-22', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra22.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner equal_height="yes" content_placement="middle" gap="25"][vc_column_inner width="1/2"][vc_single_image image="52" img_size="full" css=".vc_custom_1513777227463{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="1,00,000+" num_title="" num_text="Volunteers helping to improve their communities who dedicate countless hours of their free time helping care for the animals and work in our charity shops.<br />
" btn_check="" number_size="50" text_font="text-large" number_font_weight="font-weight-700" title_font_weight="default" num_color="#5a5a5a"][vc_empty_space height="20px"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="2,50,000+" num_title="" num_text="People were reached through our ‘Hands On’ outreach and educational schemes.<br />
" btn_check="" number_size="50" text_font="text-large" number_font_weight="font-weight-700" title_font_weight="default" num_color="#5a5a5a"][vc_empty_space height="20px"][insignia_number_box layout_style="ins-top-icon-basic" num_align="text-left" number="13,000+" num_title="" num_text="Local Open hearts in 27 countries and territories worldwide<br />
" btn_check="" number_size="50" text_font="text-large" number_font_weight="font-weight-700" title_font_weight="default" num_color="#5a5a5a"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Hero Sections 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections10.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513837121217{background-image: url(http://insignia-themes.website/charity/wp-content/uploads/2017/12/charity-banner.jpg?id=61) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner][vc_column_text]</p>
<div class="charity-banner-wrapper text-center">
<div class="charity-banner-tagline">
<h4 class="white-color">Save The Life To Make The Better World</h4>
</div>
<div class="charity-banner-title">
<h1 class="white-color text-uppercase" style="margin-top: 10px;">We rise by lifting others</h1>
</div>
</div>
<p>[/vc_column_text][vc_single_image image="65" img_size="90 x 90" alignment="center" onclick="custom_link" link="#"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team10.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][insignia_section_heading title="Our Volunteer" subtitle="Meet the team" align="text-center" separator="disable" heading_tag="h1" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#de6262" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-600" subtitle_color="#5a5a5a"][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Jhon Florance"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Alex Anderson"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Robert Reed"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Lisa Grey"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Wilson Doe"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Second Option" logo_team="Martin Luther"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Call to Action 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action10.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513850060833{background-color: #de6262 !important;}"][vc_column][vc_empty_space height="20px"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="7/12"][vc_column_text]</p>
<div class="charity-cta-text">
<h4 class="white-color text-capitalize" style="margin-bottom: 5px;">Keep Up To Date With Everything.</h4>
<p class="white-color charity-small-text">Get our exclusive offers, tips and news delivered right to your inbox</p>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="5/12"][vc_raw_html]JTNDZm9ybSUyMGNsYXNzJTNEJTIyaW52LXN1YnNjcmliZS1mb3JtLTIlMjIlMjBtZXRob2QlM0QlMjJwb3N0JTIyJTNFJTBBJTNDZGl2JTIwY2xhc3MlM0QlMjJpbnYtc3Vic2NyaWJlLWZvcm0tMi1maWVsZHMlMjIlM0UlM0NpbnB1dCUyMHR5cGUlM0QlMjJlbWFpbCUyMiUyMG5hbWUlM0QlMjJFTUFJTCUyMiUyMHBsYWNlaG9sZGVyJTNEJTIyRW50ZXIlMjBZb3VyJTIwRW1haWwlMjIlMjByZXF1aXJlZCUzRCUyMiUyMiUzRSUzQ2lucHV0JTIwdHlwZSUzRCUyMnN1Ym1pdCUyMiUyMHZhbHVlJTNEJTIyc3VibWl0JTIyJTIwY2xhc3MlM0QlMjJpbnYtc3Vic2NyaWJlLWZvcm0tMi1idXR0b24lMjIlM0UlM0MlMkZkaXYlM0UlM0MlMkZmb3JtJTNF[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 24 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-24', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact24.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1513851268178{padding-top: 0px !important;}"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1513855117357{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;}"][insignia_section_heading title="Feel Free to Ask" subtitle="Have a question?" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-700" text_transform="text-uppercase" heading_color="#de6262" subtitle_fs="text-extra-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-600" subtitle_color="#5a5a5a"][vc_empty_space height="15px"][contact-form-7 id="11615"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513851184725{background-image: url(http://insignia-themes.website/charity/wp-content/uploads/2017/12/charity-contact.jpg?id=11611) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="600px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>

	
CONTENT;

// River Rafting

$templates[] = $data;

	//About 23 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-23', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about23.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_single_image image="486" img_size="full"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Say Yes to Invictus Rafting!" subtitle="" align="text-left" separator="disable" heading_tag="h1" font_weight="default" heading_color="#162c5a" subtitle_font_weight=""][vc_empty_space height="10px"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.[/vc_column_text][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#162c5a" hover_bg_color="#43cec6" border_color="#162c5a" hover_border_color="#43cec6" border_radius="30px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 23 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-23', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra23.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1513594851600{padding-top: 0px !important;}"][vc_row_inner equal_height="yes"][vc_column_inner width="2/3" css=".vc_custom_1513663702566{background-image: url(http://insignia-themes.website/river-rafting/wp-content/uploads/2017/12/rafting-img-5.jpg?id=443) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513596181723{border-top-width: 20px !important;border-right-width: 20px !important;border-bottom-width: 20px !important;border-left-width: 20px !important;padding-right: 10% !important;padding-left: 10% !important;border-left-color: #43cec6 !important;border-left-style: solid !important;border-right-color: #43cec6 !important;border-right-style: solid !important;border-top-color: #43cec6 !important;border-top-style: solid !important;border-bottom-color: #43cec6 !important;border-bottom-style: solid !important;}"][vc_empty_space height="50px"][insignia_section_heading title="Great World Adventures" subtitle="Been there recently?" align="text-left" separator="disable" heading_tag="h3" font_weight="default" heading_color="#162c5a" italic_font="1" subtitle_font_weight="" subtitle_color="#43cec6"][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.[/vc_column_text][insignia_button button_style="first" btn_text="Book Now" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#162c5a" hover_bg_color="#43cec6" border_color="#162c5a" hover_border_color="#43cec6" border_radius="30px"][vc_empty_space height="50px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 32 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-32', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service32.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513593516661{background-color: #e7f8f9 !important;}"][vc_column css=".vc_custom_1513593252840{padding-top: 0px !important;}"][vc_empty_space height="60px"][insignia_section_heading title="Our services" subtitle="" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#162c5a" subtitle_font_weight=""][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-home" icon_title="Accommodation" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" border_radius="100px" extra_class="inv-icon-box-extra-class" title_font="text-extra-large" title_font_weight="font-weight-900" text_font_weight="font-weight-600" icon_color="#ffffff" title_color="#162c5a" text_color="#767676" icon_bg_color="#43cec6"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-check-box" icon_title="Equipment Rental" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" border_radius="100px" extra_class="inv-icon-box-extra-class" title_font="text-extra-large" title_font_weight="font-weight-900" text_font_weight="font-weight-600" icon_color="#ffffff" title_color="#162c5a" text_color="#767676" icon_bg_color="#43cec6"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-paint-bucket" icon_title="Water Activities" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" border_radius="100px" extra_class="inv-icon-box-extra-class" title_font="text-extra-large" title_font_weight="font-weight-900" text_font_weight="font-weight-600" icon_color="#ffffff" title_color="#162c5a" text_color="#767676" icon_bg_color="#43cec6"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-thumb-up" icon_title="Windsurfing" icon_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry." btn_check="" border_radius="100px" extra_class="inv-icon-box-extra-class" title_font="text-extra-large" title_font_weight="font-weight-900" text_font_weight="font-weight-600" icon_color="#ffffff" title_color="#162c5a" text_color="#767676" icon_bg_color="#43cec6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 24 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-24', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra24.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513664645186{background-image: url(http://insignia-themes.website/river-rafting/wp-content/uploads/2017/12/rafting-bg1.png?id=442) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="fix-background"][vc_column][vc_empty_space height="90px"][vc_row_inner][vc_column_inner width="7/12"][insignia_section_heading title="Choose The Destination Just Right For Your Vacation" subtitle="" align="text-left" separator="disable" heading_tag="h1" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight=""][vc_empty_space height="20px"][vc_column_text]
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
[/vc_column_text][insignia_button button_style="first" btn_text="Learn More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#162c5a" hover_bg_color="#43cec6" border_color="#162c5a" hover_border_color="#43cec6" border_radius="30px"][/vc_column_inner][vc_column_inner width="5/12"][vc_column_text][booked-calendar calendar=2][/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Contact 25 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-25', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact25.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" css=".vc_custom_1511509267740{padding-top: 0px !important;background-color: #f7f7f7 !important;}"][vc_column css=".vc_custom_1511508928043{padding-top: 0px !important;}"][vc_row_inner equal_height="yes" css=".vc_custom_1511508877915{padding-top: 0px !important;}"][vc_column_inner el_class="contact-three-left-section-inner" width="1/2"][vc_empty_space height="30px"][insignia_section_heading title="CONTACT US" subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="default" heading_color="#162c5a" subtitle_font_weight=""][vc_empty_space height="20px"][contact-form-7 id="469"][vc_empty_space height="50px"][insignia_section_heading title="CONTACT INFORMATION" subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="default" heading_color="#162c5a" subtitle_font_weight=""][vc_empty_space height="20px"][vc_column_text]
<div class="inv-contact-three-contact-info-wrapper">
<div class="inv-contact-three-contact-info col-md-12">
<p class="col-md-3 col-sm-3 inv-contact-three-contact-sub-info-first">ADDRESS:</p>
<p class="col-md-9 col-sm-9 inv-contact-three-contact-sub-info">A-10 Business Hub, Ahmedabad, India</p>

</div>
<div class="inv-contact-three-contact-info col-md-12">
<p class="col-md-3 col-sm-3 inv-contact-three-contact-sub-info-first">PHONE:</p>
<p class="col-md-9 col-sm-9 inv-contact-three-contact-sub-info">+1 999 9999 9999</p>

</div>
<div class="inv-contact-three-contact-info col-md-12">
<p class="col-md-3 col-sm-3 inv-contact-three-contact-sub-info-first">E-MAIL:</p>
<p class="col-md-9 col-sm-9 inv-contact-three-contact-sub-info">admin@invictus.com</p>

</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwc3R5bGUlM0QlMjJib3JkZXIlM0EwJTIyJTIwYWxsb3dmdWxsc2NyZWVuJTNFJTNDJTJGaWZyYW1lJTNF" el_class="map-gray-scale inv-map-inner contact-three-map"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

	
CONTENT;

// Security

$templates[] = $data;

	//Icon Boxes 17 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-17', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box17.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" el_class="Security-Service-row-visible" css=".vc_custom_1502342692527{background-color: #f6f6f6 !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="Security-Service-top-box">
<div class="Security-Service-top-icon-box pc-bg">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Simple-Services-icon-1.png" alt="img" /></figure>
</div>
<div class="Security-Service-top-details-box">
<h5>Best CCTV’s</h5>
<p>Proin gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="Security-Service-top-box">
<div class="Security-Service-top-icon-box pc-bg">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Simple-Services-icon-2.png" alt="img" /></figure>
</div>
<div class="Security-Service-top-details-box">
<h5>Web Security</h5>
<p>Proin gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="Security-Service-top-box">
<div class="Security-Service-top-icon-box pc-bg">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Simple-Services-icon-3.png" alt="img" /></figure>
</div>
<div class="Security-Service-top-details-box">
<h5>Monitoring</h5>
<p>Proin gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="Security-Service-top-box">
<div class="Security-Service-top-icon-box pc-bg">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Simple-Services-icon-4.png" alt="img" /></figure>
</div>
<div class="Security-Service-top-details-box">
<h5>Guard House</h5>
<p>Proin gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 24 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-24', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about24.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" equal_height="yes" css=".vc_custom_1513809415753{background-color: #f6f6f6 !important;}"][vc_column][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]</p>
<div class="security-about-author-box">
<div class="security-about-author-img-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/About-Us-Img.jpg" alt="img" /></figure>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="About our agency" subtitle="WHO WE ARE?" align="text-left" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][vc_column_text]</p>
<div class="security-about-box">
<p>Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae.</p>
<ul>
<li><span class="security-story-number-text">1</span> Our History Scince 1993</li>
<li><span class="security-story-number-text">2</span> Close Protection 25 Bodyguards</li>
<li><span class="security-story-number-text">3</span> Best CCTV Systems Network</li>
</ul>
</div>
<p>[/vc_column_text][vc_empty_space height="20px"][insignia_button button_style="first" btn_text="Read More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f5f5f5" hover_text_color="#f5f5f5" bg_color="#ffc600" hover_bg_color="#292734" border_color="#ffc600" hover_border_color="#292734"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 33 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-33', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service33.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1513814458854{background-image: url(http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Bg.jpg?id=74) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="40px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Security Services" subtitle="WHAT WE OFFER" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][vc_empty_space height="45px"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_column_text]</p>
<div class="Security-services-carousel Security-dots">
<div class="Security-services-main-box">
<div class="Security-services-box">
<div class="Security-services-img-box security-skew-right-top-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-1-1.jpg" alt="img" /></figure>
</div>
<div class="Security-services-details-box Security-services-details-box-right">
<h6>CCTV Cam Security</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
</div>
<div class="Security-services-box">
<div class="Security-services-details-box Security-services-details-box-left">
<h6>Physical Protection</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
<div class="Security-services-img-box security-skew-left-bottom-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-2-1.jpg" alt="img" /></figure>
</div>
</div>
</div>
<div class="Security-services-main-box">
<div class="Security-services-box">
<div class="Security-services-img-box security-skew-right-top-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-3-1.jpg" alt="img" /></figure>
</div>
<div class="Security-services-details-box Security-services-details-box-right">
<h6>Fire Alarms</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
</div>
<div class="Security-services-box">
<div class="Security-services-details-box Security-services-details-box-left">
<h6>Rapid Response</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
<div class="Security-services-img-box security-skew-left-bottom-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-4-1.jpg" alt="img" /></figure>
</div>
</div>
</div>
<div class="Security-services-main-box">
<div class="Security-services-box">
<div class="Security-services-img-box security-skew-right-top-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-1-1.jpg" alt="img" /></figure>
</div>
<div class="Security-services-details-box Security-services-details-box-right">
<h6>CCTV Cam Security</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
</div>
<div class="Security-services-box">
<div class="Security-services-details-box Security-services-details-box-left">
<h6>Physical Protection</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
<div class="Security-services-img-box security-skew-left-bottom-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-2-1.jpg" alt="img" /></figure>
</div>
</div>
</div>
<div class="Security-services-main-box">
<div class="Security-services-box">
<div class="Security-services-img-box security-skew-right-top-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-3-1.jpg" alt="img" /></figure>
</div>
<div class="Security-services-details-box Security-services-details-box-right">
<h6>Fire Alarms</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
</div>
<div class="Security-services-box">
<div class="Security-services-details-box Security-services-details-box-left">
<h6>Rapid Response</h6>
<hr class="title-border title-border-light" />
<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accums.</div>
<div class="Security-services-img-box security-skew-left-bottom-bg-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Service-Img-4-1.jpg" alt="img" /></figure>
</div>
</div>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

	//Extra 25 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-25', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra25.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2" css=".vc_custom_1513813531907{padding-right: 50px !important;}"][vc_empty_space height="40px"][insignia_section_heading title="Awesome Skills" subtitle="" align="text-left" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][vc_empty_space height="30px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Best%20CCTV%E2%80%99s%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22Web%20Security%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Monitoring%22%2C%22value%22%3A%2260%22%7D%2C%7B%22label%22%3A%22Guard%20House%22%2C%22value%22%3A%2280%22%7D%5D" bgcolor="custom" options="animated" units="%" custombgcolor="#ffc600" customtxtcolor="#444444" el_class="fl-skills-wrapper"][vc_empty_space height="40px"][/vc_column][vc_column width="1/2"][vc_empty_space height="40px"][insignia_section_heading title="Why Choose Us" subtitle="" align="text-left" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][vc_empty_space height="30px"][vc_tta_accordion style="modern" shape="square" c_position="right" active_section="1" el_class="inv-faq-accordion"][vc_tta_section title="Best CCTV Systems Network" tab_id="1511505148833-831c7a80-005b"][vc_column_text]</p>
<div class="Security-Choose-acoordion-box">
<div class="Security-Choose-acoordion-img-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Why-Choose-Us-Img.jpg" alt="img" /></figure>
</div>
<div class="Security-Choose-acoordion-details-box">
<p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_tta_section][vc_tta_section title="Mobile Patrol Management Team" tab_id="1511505148873-ea5f7135-ffd4"][vc_column_text]</p>
<div class="Security-Choose-acoordion-box">
<div class="Security-Choose-acoordion-img-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Why-Choose-Us-Img.jpg" alt="img" /></figure>
</div>
<div class="Security-Choose-acoordion-details-box">
<p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_tta_section][vc_tta_section title="All Types of Security Barriers Included" tab_id="1511505229194-a5938ec1-73b7"][vc_column_text]</p>
<div class="Security-Choose-acoordion-box">
<div class="Security-Choose-acoordion-img-box">
<figure><img src="http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Why-Choose-Us-Img.jpg" alt="img" /></figure>
</div>
<div class="Security-Choose-acoordion-details-box">
<p>Morbi accumsan ipsum velit. Nam nec aks tel lus a odio tincidunt auctor. Proi gravida nibh vel velit auctor.</div>
</div>
<p>[/vc_column_text][/vc_tta_section][/vc_tta_accordion][vc_empty_space height="40px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Image Gallery 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Gallery-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-gallery8.jpg' );
	$data['sort_name'] = 'Image Gallery';
	$data['custom_class'] = 'image-gallery';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1502349217983{background-color: #f6f6f6 !important;}"][vc_column][vc_empty_space height="50px"][insignia_section_heading title="The Photo Gallery" subtitle="MEMORIES" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1502349208857{background-color: #f6f6f6 !important;}"][vc_column css=".vc_custom_1502430917842{padding-top: 0px !important;}"][vc_empty_space height="50px"][insignia_image_gallery design_style="grid_4x" attach_images="136,137,138,139,140,141,142,143" hover_text="" gallery_gap="30" carousel_infinite="true"][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Testimonials 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial14.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513818076076{background-image: url(http://insignia-themes.website/security/wp-content/uploads/2017/08/Security-Testimonial-Bg.jpg?id=178) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Our Trusted Clients" subtitle="TESTIMONIAL" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][testimonial testimonial_layout="Third Option" autoplay="true" slidetoshow="2" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" font_color="#ffffff" title_font_color="#ffffff" position_font_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 26 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-26', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact26.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" el_class="Security-Contact-Us-Bg-Box"][vc_column][vc_empty_space height="20px"][vc_row_inner css=".vc_custom_1502363317155{background-color: #ffffff !important;}" el_class="inquiry-form-row-box"][vc_column_inner][insignia_section_heading title="Inquiry Form" subtitle="" align="text-center" heading_tag="h2" heading_font_size="35" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#343434" subtitle_fs="text-large" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#ffc600" separator_color="#e2e2e2"][vc_empty_space height="40px"][contact-form-7 id="14"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_title="ADDRESS" icon_text="Jhon Doe Street, 5, Lala laj Path Rai Marg Dewas, 455001" btn_check="" border_radius="100px" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" icon_color="#ffc600" title_color="#f5f5f5" text_color="#ffffff" icon_bg_color="#ffffff" separator_color="#e2e2e2" icon_fontawesome="fa fa-map-marker"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_title="PHONE" icon_text="+1 800 123 4569<br />
+1 800 321 6545</p>
<p>" btn_check="" border_radius="100px" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" icon_color="#ffc600" title_color="#f5f5f5" text_color="#ffffff" icon_bg_color="#ffffff" separator_color="#e2e2e2" icon_fontawesome="fa fa-phone"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_title="EMAIL" icon_text="services@example.com<br />
info@example.com</p>
<p>" btn_check="" border_radius="100px" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" icon_color="#ffc600" title_color="#f5f5f5" text_color="#ffffff" icon_bg_color="#ffffff" separator_color="#e2e2e2" icon_fontawesome="fa fa-envelope-o"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]

	
CONTENT;

// Weapon

$templates[] = $data;

	//Hero Sections 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections11.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513945462162{background-image: url(http://insignia-themes.website/weapon/wp-content/uploads/2017/07/Weapon-Laest-Product-Bg.jpg?id=27) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="Weapon-Laest-Product-call-action-row"][vc_column][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1513945394651{margin-bottom: -30px !important;}"][vc_raw_html css=".vc_custom_1513945469088{margin-bottom: 0px !important;}"]JTNDZGl2JTIwY2xhc3MlM0QlMjJXZWFwb24tdG9nZ2xlLWJveCUyMiUzRSUwQSUzQ2RpdiUyMGNsYXNzJTNEJTIyd3JhcC1zZWxlY3RvciUyMiUzRSUwQSUyMCUzQ2ltZyUyMHNyYyUzRCUyMmh0dHAlM0ElMkYlMkZpbnNpZ25pYS10aGVtZXMud2Vic2l0ZSUyRndlYXBvbiUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxNyUyRjA4JTJGV2VhcG9uLUxhZXN0LVByb2R1Y3QtR3VuLUltYWdlLnBuZyUyMiUyMGFsdCUzRCUyMiUyMiUyMGNsYXNzJTNEJTIydGFyZ2V0JTIyJTNFJTIwJTBBJTNDJTJGZGl2JTNFJTBBJTNDJTJGZGl2JTNFJTBB[/vc_raw_html][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]</p>
<div class="Weapon-Laest-Product-call-action-box">
<h2 class="white-color">New MC7 Carbine Gun</h2>
<h5 class="Weapon-theme-color pc"><span class="Weapon-lp-call-action-line-through-text">$2,895.00</span> $1,999.00</h5>
<p><a class="Weapon-button pc-bg Weapon-Laest-Product-btn" href="#"><span class="Weapon-silder-button">Buy Now</span></a></div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 26 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-26', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra26.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1513945553595{background-image: url(http://insignia-themes.website/weapon/wp-content/uploads/2017/08/Weapon-Home-Two-About-Bg-1.jpg?id=299) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][vc_column width="1/2" css=".vc_custom_1513788668331{background-color: #000000 !important;}"][vc_column_text]</p>
<div class="weapon-shop-right-secation-wrapper">
<p class="weapon-shop-right-body-content">Sign up for course</p>
<h1 class="weapon-shop-right-title-content">How To Order</h1>
<h6 class="weapon-shop-right-sub-title-content">Well if you are interested in purchasing our goods and you got some questions you can address our 24/7 online support system. Don’t forget that you can save money in our store because we have many interesting promos.</h6>
<p><a class="Weapon-button pc-bg centered-box" href="#"><span class="Weapon-silder-button">Shop Now</span></a></div>
<p>[/vc_column_text][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Call to Action 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action11.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513789292717{background-image: url(http://insignia-themes.website/weapon/wp-content/uploads/2017/08/bg-5.png?id=651) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_column_text]</p>
<div class="weapon-call-to-action-wrapper">
<h1>SAVE UP TO 60%</h1>
<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. NUNC ERAT MASSA, SODALES AT ODIO EGET</p>
<p><a class="Weapon-button pc-bg centered-box" href="#"><span class="Weapon-silder-button">Shop Now</span></a></div>
<p>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients7.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT

[vc_row][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]</p>
<div class="weapon-title-box">
<h2 class="Weapon-title-text">Our Trusted Partners</h2>
<p>All modern weaponts can appreciate our broad services akshay handge pharetra, eratd fermentum feugiat, gun are best velit mauris aks egestasut aliquam.</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_image_gallery design_style="carousel" attach_images="1132,1133,1134,1135,1136,1139" hover_text="" gallery_gap="30" imgs_slidetoshow="5" carousel_infinite="true"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]</p>

CONTENT;

// Agency Dark

$templates[] = $data;

	//Services 34 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-34', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service34.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509950674244{margin-bottom: 50px !important;border-bottom-width: 1px !important;padding-bottom: 50px !important;border-bottom-color: rgba(255,255,255,0.11) !important;border-bottom-style: solid !important;}"][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="3/4"][insignia_section_heading title="Invictus is an innovative Master planning, Architecture and Interior design studio in Ahmedabad and was founded by two diverse individuals" subtitle="WE ARE CREATIVE" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#e9e9e9" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#f72f3e" extra_class="custom-italic-title custom-letter-spacing"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="01/" num_title="DIGITAL INNOVATION" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
" btn_check="" title_font="text-medium" title_font_weight="font-weight-700" num_color="#f72f3e" title_color="#cecece" text_color="#cecece" title_letter_spacing="letter-spacing-2"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="02/" num_title="DIGITAL BRANDING" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
" btn_check="" title_font="text-medium" title_font_weight="font-weight-700" num_color="#f72f3e" title_color="#cecece" text_color="#cecece" title_letter_spacing="letter-spacing-2"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="03/" num_title="BRANDING STRATEGY" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
" btn_check="" title_font="text-medium" title_font_weight="font-weight-700" num_color="#f72f3e" title_color="#cecece" text_color="#cecece" title_letter_spacing="letter-spacing-2"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-06', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio6.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner][vc_column_inner width="2/3"][insignia_section_heading title="Invictus is an innovative Master planning, Architecture and Interior design studio." subtitle="OUR WORKS" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#e9e9e9" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#f72f3e" extra_class="custom-italic-title custom-letter-spacing"][vc_empty_space height="50px"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][portfolio port_layout="port_grid3" port_on_hover="layout_3" port_cat="creative-agency" port_filter="" port_no_posts="6" port_gap="40" port_overlay_color="#f72f3e" title_color="#f4f4f4" category_color="#e2e2e2" css=".vc_custom_1509716892428{margin-right: -20px !important;margin-left: -20px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Teams 11 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-11', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team11.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner][vc_column_inner width="2/3"][insignia_section_heading title="our team of professionals is always here to help you with every request" subtitle="WHO WE ARE" align="text-left" separator="disable" heading_tag="h3" font_weight="font-weight-600" text_transform="text-capitalize" heading_color="#e9e9e9" subtitle_fs="text-medium" subtitle_text_transform="text-uppercase" subtitle_font_weight="font-weight-700" subtitle_color="#f72f3e" extra_class="custom-italic-title custom-letter-spacing"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="35px"][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Sarah Hunter"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Charles Larson"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Marilyn Dean"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Johnny Nelson"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients8.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT

[vc_row][vc_column][vc_empty_space height="100px"][/vc_column][/vc_row][vc_row css=".vc_custom_1509950314247{background-color: #121214 !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_section_heading title="Interested to work and cooperate with us?" subtitle="" align="text-center" separator="disable" heading_tag="h3" font_weight="font-weight-600" heading_color="#e9e9e9" subtitle_font_weight=""][vc_empty_space height="20px"][insignia_button button_style="first" btn_text="Contact Us" btn_link="url:%23||target:%20_blank|" button_size="medium" button_align="text-center" text_color="#f7f7f7" hover_text_color="#1c1d21" hover_bg_color="#ffffff" border_color="#f4f4f4" hover_border_color="#ffffff" border_width="2" border_radius="0"][vc_empty_space height="80px"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1509950730231{border-top-width: 1px !important;border-top-color: rgba(255,255,255,0.11) !important;border-top-style: solid !important;border-radius: 1px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1509950813667{border-right-width: 1px !important;border-right-color: rgba(255,255,255,0.11) !important;border-right-style: solid !important;}"][vc_single_image image="82" img_size="full" alignment="center" onclick="custom_link" link="#"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1509950857621{border-right-width: 1px !important;border-right-color: rgba(255,255,255,0.11) !important;border-right-style: solid !important;}"][vc_single_image image="84" img_size="full" alignment="center" onclick="custom_link" link="#"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1509950865931{border-right-width: 1px !important;border-right-color: rgba(255,255,255,0.11) !important;border-right-style: solid !important;}"][vc_single_image image="83" img_size="full" alignment="center" onclick="custom_link" link="#"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="86" img_size="full" alignment="center" onclick="custom_link" link="#"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="100px"][/vc_column][/vc_row]

CONTENT;

// Modern Business

$templates[] = $data;

	//Extra 27 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-27', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra27.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="150px"][/vc_column][/vc_row][vc_row gap="30" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1509631947760{margin-top: -15px !important;margin-bottom: 15px !important;padding-right: 0px !important;padding-left: 0px !important;background-color: #f5f5f5 !important;}"][vc_column_text css=".vc_custom_1510770694385{margin-bottom: 0px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}" el_class="inv-modern-about-section-row"]
<div class="inv-modern-about-2h-2w">
<div class="banking-process-number sc">01.</div>
<h1>We create websites, technology and innovative marketing strategies to help brands excel in digital culture.</h1>
</div>
[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1509631684136{margin-top: -15px !important;margin-bottom: -15px !important;padding-right: 0px !important;padding-left: 0px !important;}"][portfolio port_layout="port_masonry2" port_on_hover="layout_4" port_cat="" port_filter="" port_no_posts="3" port_gap="30"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 28 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-28', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra28.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row gap="30" equal_height="yes" css=".vc_custom_1509688872421{margin-top: -15px !important;}"][vc_column width="1/4" css=".vc_custom_1509631782102{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1510768965435{margin-bottom: 0px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #181d81 !important;}" el_class="modern-business-project-section"]
<div class="startup-title-wrapper">
<div class="startup-title-main">
<h2 class="white-color no-margin-top">New Projects</h2>
</div>
<div class="startup-title-separator" style="background: #46dfb4;"><!--separator--></div>
<p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1509690266421{padding-right: 0px !important;padding-left: 0px !important;background-image: url(http://invictus.insigniats.in/digital-agency/wp-content/uploads/2017/09/startup9.jpg?id=97) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="50px" el_class="inv-responsive-empty-space"][/vc_column][vc_column width="1/2" css=".vc_custom_1509689052177{padding-right: 0px !important;padding-left: 0px !important;background-color: #46dfb4 !important;}"][vc_column_text css=".vc_custom_1509690384496{margin-bottom: 0px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"]
<div class="startup-title-wrapper">
<div class="startup-title-main">
<h2 class="white-color">Latest awards</h2>
</div>
<div class="startup-title-separator" style="background: #fff;"><!--separator--></div>
<p class="white-color">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>

</div>
[/vc_column_text][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Teams 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team12.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row gap="30" equal_height="yes"][vc_column width="1/2" css=".vc_custom_1509690646404{padding-right: 0px !important;padding-left: 0px !important;}"][team_member team_layout="Sixth Option" logo_team="Milton Glaser"][/vc_column][vc_column width="1/2" css=".vc_custom_1509690651571{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner][vc_column_inner width="1/2"][team_member team_layout="Sixth Option" logo_team="ELSA MINOR"][/vc_column_inner][vc_column_inner width="1/2"][team_member team_layout="Sixth Option" logo_team="Daniel Robert"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1509691278491{margin-top: 30px !important;}"][vc_column_inner width="1/2"][team_member team_layout="Sixth Option" logo_team="JOHN DOE"][/vc_column_inner][vc_column_inner width="1/2"][team_member team_layout="Sixth Option" logo_team="Milton Glaser"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 27 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-27', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact27.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row gap="30" equal_height="yes"][vc_column width="1/4" css=".vc_custom_1509631782102{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1510769405198{margin-bottom: 0px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}"]
<div class="startup-title-wrapper modern-business-contact-wrapper">
<div class="startup-title-main">
<h6>Studio</h6>
<h3 class="no-margin-top">New York</h3>
</div>
<div class="startup-title-separator" style="background: #46dfb4;"><!--separator--></div>
<p class="modern-business-address">170 business Avenue,
New York, NY</p>
<p class="modern-business-phone">(+01) 123-4567</p>

</div>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1509694177911{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_text css=".vc_custom_1510769387673{margin-bottom: 0px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}"]
<div class="startup-title-wrapper modern-business-contact-wrapper">
<div class="startup-title-main">
<h6>Location</h6>
<h3 class="no-margin-top">London</h3>
</div>
<div class="startup-title-separator" style="background: #46dfb4;"><!--separator--></div>
<p class="modern-business-address">540 Oxford St, Soho, London
WC2H 9PU, United Kingdom</p>
<p class="modern-business-phone">admin@invictus.com</p>

</div>
[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1509694409895{padding-right: 0px !important;padding-left: 0px !important;background-image: url(http://invictus.insigniats.in/digital-agency/wp-content/uploads/2017/11/google-map.jpg?id=310) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="100px"][/vc_column][/vc_row]

	
CONTENT;

//foodtruck

$templates[] = $data;

	//About 25 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-25', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about25.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_id="about"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_empty_space height="60px"][vc_column_text css=".vc_custom_1513863980480{margin-bottom: 10px !important;}"]
<div class="centered-box">
<h1 class="inv-thunder-font">Welcome to invictus</h1>
</div>
[/vc_column_text][vc_column_text]
<div class="centered-box">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.

</div>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="foodtruck-number-box text-center">
<div class="foodtruck-number">
<h1 class="inv-thunder-font pc">1997</h1>
</div>
<div class="foodtruck-number-box-text">Since</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="foodtruck-number-box text-center">
<div class="foodtruck-number">
<h1 class="inv-thunder-font pc">865</h1>
</div>
<div class="foodtruck-number-box-text">Recipes</div>
</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<div class="foodtruck-number-box text-center">
<div class="foodtruck-number">
<h1 class="inv-thunder-font pc">345</h1>
</div>
<div class="foodtruck-number-box-text">Locations</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Services 35 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-35', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service35.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][vc_single_image image="452" img_size="full"][vc_column_text]
<h5 class="text-center inv-thunder-font">ORIGINAL DRINKS</h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="450" img_size="full"][vc_column_text]
<h5 class="text-center inv-thunder-font">DELICIOUS FOOD</h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="451" img_size="full"][vc_column_text]
<h5 class="text-center inv-thunder-font">GREAT ATMOSPHERE</h5>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Extra 29 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-29', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra29.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row el_id="menu"][vc_column][vc_column_text css=".vc_custom_1513927131424{margin-bottom: 10px !important;}"]
<div class="centered-box">
<h1 class="inv-thunder-font">Mouth-Watering Menu</h1>
</div>
[/vc_column_text][vc_empty_space height="30px"][vc_row_inner gap="30"][vc_column_inner width="1/3"][vc_single_image image="101" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">blazin’ shrimp - $5</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="103" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">signature steak - $3</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="105" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">stir-fry soi - $6</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="10px"][vc_row_inner gap="30"][vc_column_inner width="1/3"][vc_single_image image="102" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">loco moco - $8</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="104" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">banh mi chicken - $10</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="100" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h5 class="inv-thunder-font text-uppercase">spicy quesadilla - $12</h5>
<p class="foodtruck-small-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_empty_space height="30px"][vc_column_text]
<div class="startup-button-holder text-center"><a class="startup-button" href="#">Explore Menu</a></div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Hero Sections 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Hero Sections-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/hero-sections12.jpg' );
	$data['sort_name'] = 'Hero Sections';
	$data['custom_class'] = 'hero-sections';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1513946240652{background-image: url(http://insignia-themes.website/foodtruck/wp-content/uploads/2017/12/foodtruck-banner.jpg?id=41) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="locations"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner][vc_column_text]
<div class="foodtruck-hero-wrapper text-center">
<div class="foodtruck-hero-inner">
<h1 class="text-uppercase foodtruck-hero-line1 white-color inv-thunder-font no-margin-bottom">Visit Today</h1>
<h1 class="text-uppercase foodtruck-hero-line2 inv-thunder-font no-margin-top">Our Locations</h1>
</div>
</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="text-center white-color">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
[/vc_column_text][vc_column_text]
<h2 class="text-center white-color inv-thunder-font">+44 20 330 77 00</h2>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner gap="20"][vc_column_inner width="1/3"][vc_single_image image="75" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h4 class="inv-thunder-font text-uppercase white-color">Occidental Park</h4>
<p class="white-color">Lambeth, Upper East Side,
London SE1 7PB, UK</p>
<p class=" white-color">Everyday 8am - 11pm</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="76" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h4 class="inv-thunder-font text-uppercase white-color">The PI Building</h4>
<p class="white-color">Lambeth, Upper East Side,
London SE1 7PB, UK</p>
<p class="white-color">Everyday 8am - 11pm</p>

</div>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image image="77" img_size="full" alignment="center"][vc_column_text]
<div class="text-center">
<h4 class="inv-thunder-font text-uppercase white-color">Capitol Hill</h4>
<p class="white-color">Lambeth, Upper East Side,
London SE1 7PB, UK</p>
<p class="white-color">Everyday 8am - 11pm</p>

</div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//About 26 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-26', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about26.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row el_id="catering"][vc_column][vc_empty_space height="60px"][vc_row_inner gap="25"][vc_column_inner width="1/2"][vc_single_image image="31" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1513922595851{margin-bottom: 10px !important;}"]
<div>
<h1 class="inv-thunder-font no-margin-top">Private dining &amp; events</h1>
</div>
[/vc_column_text][vc_column_text css=".vc_custom_1513937140433{margin-bottom: 20px !important;}"]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.[/vc_column_text][vc_column_text css=".vc_custom_1513924576166{margin-bottom: 10px !important;}"]
<div>
<h5 class="inv-thunder-font pc">Private dining &amp; events</h5>
</div>
[/vc_column_text][vc_column_text css=".vc_custom_1513937177745{margin-bottom: 20px !important;}"]Lorem Ipsum is simply dummy text of the printing and typesetting industry.[/vc_column_text][vc_column_text]
<div class="startup-button-holder"><a class="startup-button" href="#">Book Now</a></div>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]
CONTENT;

// Creative Startup

$templates[] = $data;

	//Extra 30 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-30', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra30.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="50px"][vc_row_inner equal_height="yes"][vc_column_inner width="1/2" css=".vc_custom_1509705636336{background-image: url(http://insignia-themes.website/creative-startup/wp-content/uploads/2017/11/cs-img-4.jpg?id=204) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][vc_column_text]
<div class="ins-popup-video"><a class="insignia-video-popup creative-startup-video-button" href="https://www.youtube.com/watch?v=jqw7oj-hONo"><img src="./wp-content/uploads/2017/11/play-new-icon.png" alt="play-new-icon" /></a></div>
[/vc_column_text][vc_empty_space height="200px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1492233969445{padding-left: 10% !important;}"][vc_empty_space height="50px"][vc_column_text]
<div class="inv-creative-startup-about-box">
<h2>We create experiences that transform brands and grow businesses.</h2>
Lorem ipsum dolor sit amet, pri quodsi deserunt ea, vide omnes eum ad. Ex denique dissentiunt ullamcorper has. His nemore luptatum facilisi ne, at vis docendi aliquando, sea te eius laoreet eleifend. Usu modo quando propriae ea. Quaestio molestiae eos id, prompta luptatum scripserit ad eam, in nec vide imperdiet.

<a class="inv-black-square-button black-bg black-border" href="#">Read More</a>

</div>
[/vc_column_text][vc_empty_space height="60px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Extra 31 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-31', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra31.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_row_inner equal_height="yes"][vc_column_inner width="1/2"][vc_empty_space height="60px"][vc_column_text]
<div class="inv-creative-startup-about-text-box">

<img class="inv-creative-startup-about-left-quote" src="http://insignia-themes.website/creative-startup/wp-content/uploads/2017/11/quote-left-1.png" alt="quote-left" />
<h3 class="inv-creative-startup-about-quote-text-box">If there’s something you want to build, but the tech isn’t there yet, just find the closest possible way to make it happen.</h3>
<img class="inv-creative-startup-about-right-quote" src="http://insignia-themes.website/creative-startup/wp-content/uploads/2017/11/quote-rightt.png" alt="quote-right" />
<div class="inv-creative-startup-about-detals-text-box">
<h6>Dennis Crowley</h6>
Foursquare co-founder

</div>
</div>
[/vc_column_text][vc_empty_space height="50px"][vc_single_image image="196" img_size="full" alignment="center" css=".vc_custom_1511209918103{margin-bottom: 0px !important;}" el_class="common-images-hover inv-cs-img-inner-row"][vc_empty_space height="0px" el_class="ensign-empty-space"][/vc_column_inner][vc_column_inner el_class="common-images-hover inv-cs-right-img-row" width="1/2" css=".vc_custom_1511210207790{background-image: url(http://insignia-themes.website/creative-startup/wp-content/uploads/2017/11/cs-portfolio-1.jpg?id=194) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="250px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Services 36 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-36', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service36.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1509703412073{background-color: #1d1d1d !important;}"][vc_column][vc_empty_space height="80px"][vc_column_text]
<div class="inv-creative-startup-main-box">
<div class="inv-creative-startup-icon-box inv-icon-box inv-center-box">

<i class="icon-docs icons inv-icon-hover-up-down"><!-- icon --></i>
<h5>01 PLANNING</h5>
</div>
<div class="inv-creative-startup-icon-box inv-icon-box inv-center-box">

<i class="icon-bulb icons inv-icon-hover-up-down"><!-- icon --></i>
<h5>02 IDEA</h5>
</div>
<div class="inv-creative-startup-icon-box inv-icon-box inv-center-box">

<i class="icon-screen-desktop icons inv-icon-hover-up-down"><!-- icon --></i>
<h5>03 DESIGN</h5>
</div>
<div class="inv-creative-startup-icon-box inv-icon-box inv-center-box">

<i class="icon-event icons inv-icon-hover-up-down"><!-- icon --></i>
<h5>04 RESULT</h5>
</div>
<div class="inv-creative-startup-icon-box inv-icon-box inv-center-box inv-after-remove">

<i class="icon-settings icons inv-icon-hover-up-down"><!-- icon --></i>
<h5>05 DEVELOPMENT</h5>
</div>
<div class="clearfix"></div>
</div>
[/vc_column_text][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1491656226833{padding-left: 0px !important;}"][vc_column_text]
<h5 class="white-color">We build the best brands. Get your business on the next level. Custom crafted business solutions.</h5>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]
<p class="white-color">Lorem ipsum dolor sit amet, eum id tritani eleifend, usu ut tota facete. Mel ne nisl sumo, eu eum nemore sententiae elaboraret. An mei civibus platonem, brute repudiandae ne sed. Vidisse explicari in duo, probatus scriptorem cum ea. Eam id nominavi deleniti periculis. Mea at semper appetere voluptaria, at latine luptatum consulatu est, te deserunt referrentur per.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Portfolio 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-07', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio7.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row el_id="works"][vc_column][vc_empty_space height="80px"][portfolio port_layout="port_grid2" port_on_hover="layout_4" port_cat="creative-startup" port_filter="" port_gap="0"][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;



// Cryptocurrency

$templates[] = $data;

//Services 37 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-37', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service37.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_height="yes" content_placement="middle"][vc_column width="1/3"][vc_column_text css=".vc_custom_1515487139445{margin-bottom: 15px !important;}"]</p>
<h6 class="no-margin-top text-uppercase">With only 3 Easy Steps</h6>
<p>[/vc_column_text][vc_column_text]Bitcoin is the world’s first digital decentralized currency and payment network.[/vc_column_text][vc_column_text css=".vc_custom_1515487144551{margin-bottom: 10px !important;}"]</p>
<h6>INSURANCE PROTECTION</h6>
<p>[/vc_column_text][vc_column_text]Digital currency stored on our servers is covered by our insurance policy.[/vc_column_text][insignia_button button_style="first" btn_text="Create Account" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f5f5f5" hover_text_color="#ff5552" bg_color="#ff5552" hover_bg_color="rgba(0,0,0,0.01)" border_color="rgba(0,0,0,0.01)" hover_border_color="#ff5552" border_width="2px"][/vc_column][vc_column width="2/3"][vc_row_inner gap="15"][vc_column_inner width="1/3" css=".vc_custom_1515485884607{padding-right: 20px !important;padding-left: 20px !important;background-color: #e0f2ff !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="180" image_title="VERIFY YOUR ACCOUNT" image_text="Download Our app and verify your mobile number.</p>
<p>" enable_button="" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-600" btn_font_weight="default" title_color="#151c6d" text_color="#63686d"][vc_empty_space height="10px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515485902470{padding-right: 20px !important;padding-left: 20px !important;background-color: #e0f2ff !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="182" image_title="MAKE PAYMENT" image_text="Download Our app and verify your mobile number.</p>
<p>" enable_button="" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-600" btn_font_weight="default" title_color="#151c6d" text_color="#63686d"][vc_empty_space height="10px"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515485906681{padding-right: 20px !important;padding-left: 20px !important;background-color: #e0f2ff !important;}"][insignia_image_box layout_style="ins-image-box-layout-1" custom_image="183" image_title="BUY BITCOINS INSTANTLY" image_text="Download Our app and verify your mobile number.</p>
<p>" enable_button="" box_align="text-center" title_font="text-extra-large" title_font_weight="font-weight-600" btn_font_weight="default" title_color="#151c6d" text_color="#63686d"][vc_empty_space height="10px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;



$templates[] = $data;

	//Icon Boxes 18 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-18', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box18.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515503230655{background-color: #f7f7f7 !important;}"][vc_column][vc_empty_space height="70px"][insignia_section_heading title="Why Choose Our Services?" subtitle="" align="text-center" heading_tag="h3" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#3d414d" subtitle_font_weight="" separator_color="#ff5552"][vc_empty_space height="55px"][vc_row_inner][vc_column_inner el_class="vc_col-md-offset-1 vc_col-md-5" width="1/2"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="636" icon_title="MULTI-CURRENCY ACCOUNT" icon_text="Manage different cryptocurrencies in one personal account. Securely store, easily receive and quickly send Bitcoin, Litecoin and other digital currencies.</p>
<p>" btn_check="" title_font="19" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#3d414d" text_color="#63686d"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="640" icon_title="ANONYMOUS AND SECURE" icon_text="Bank-grade security and next generation account protection. Encrypted SSL connection over HTTPS, 2-factor authentication and trusted IPs.</p>
<p>" btn_check="" title_font="19" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#3d414d" text_color="#63686d"][/vc_column_inner][vc_column_inner el_class="vc_col-md-5" width="1/2"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="639" icon_title="INSTANT CURRENCY EXCHANGE" icon_text="Instant and automatic exchange between Bitcoin and other supported cryptocurrencies at very attractive rates and without fees.</p>
<p>" btn_check="" title_font="19" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#3d414d" text_color="#63686d"][vc_empty_space height="30px"][insignia_custom_icon_box layout_style="ins-icon-box-align-left-basic" custom_icon="638" icon_title="24 HOUR CUSTOMER SUPPORT" icon_text="Our customer support team is ready to assist you with any questions or concerns you may have, 24 hours a day, 7 days a week!</p>
<p>" btn_check="" title_font="19" title_font_weight="font-weight-600" text_font_weight="font-weight-400" title_letter_spacing="letter-spacing-1" title_color="#3d414d" text_color="#63686d"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//About 27 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-27', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about27.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner gap="30"][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1515564500904{margin-bottom: 20px !important;}"]
<div class="crypto-title-wrapper">
<h4 class="no-margin-top">We provide best rates &amp; security for the <span class="italic-font pc">digital currency</span></h4>
</div>
[/vc_column_text][vc_column_text]Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.[/vc_column_text][vc_empty_space height="20px"][vc_single_image image="260" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="261" img_size="full"][vc_empty_space height="20px"][vc_column_text css=".vc_custom_1515564500904{margin-bottom: 20px !important;}"]
<div class="crypto-title-wrapper">
<h4 class="no-margin-top">We provide best rates &amp; security for the <span class="italic-font pc">digital currency</span></h4>
</div>
[/vc_column_text][vc_column_text]Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Contact 28 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-28', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact28.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1515480221254{background-color: #151c6d !important;}"][vc_column][vc_empty_space height="20px"][vc_row_inner equal_height="yes" content_placement="top"][vc_column_inner width="1/3"][insignia_section_heading title="Subscribe to our Newsletter" subtitle="" align="text-left" separator="disable" heading_tag="h2" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_font_weight=""][/vc_column_inner][vc_column_inner width="2/3"][contact-form-7 id="205"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

	//Extra 32 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-32', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra32.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515417352913{background-image: url(http://insignia-themes.website/cryptocurrency/wp-content/uploads/2017/12/currency-bg-compressed.jpg?id=47) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="100px"][insignia_section_heading title="Multi-Platform Accessible" subtitle="" align="text-center" separator="disable" heading_tag="h2" font_weight="font-weight-500" text_transform="text-capitalize" heading_color="#f5f5f5" subtitle_font_weight=""][vc_column_text css=".vc_custom_1515496195686{margin-bottom: 20px !important;}"]</p>
<div class="text-center">
<p class="white-color">Accessible by iOS, Android and Windows platforms</p>
</div>
<p>[/vc_column_text][vc_empty_space height="20px"][vc_column_text]</p>
<div class="inv-app-button-wrapper text-center">
<div class="inv-app-button-inner"><a class="inv-app-button inv-app-button-outline inv-app-button-icon text-uppercase" href="#" target="_self"><i class="fa fa-apple" aria-hidden="true"><!--icon--></i>iOs</a></div>
<div class="inv-app-button-inner"><a class="inv-app-button inv-app-button-outline inv-app-button-icon text-uppercase" href="#" target="_self"><i class="fa fa-android" aria-hidden="true"><!--icon--></i>Android</a></div>
<div class="inv-app-button-inner"><a class="inv-app-button inv-app-button-outline inv-app-button-icon text-uppercase" href="#" target="_self"><i class="fa fa-windows" aria-hidden="true"><!--icon--></i>Windows</a></div>
</div>
<p>[/vc_column_text][vc_empty_space height="100px"][/vc_column][/vc_row]</p>

	
CONTENT;

$templates[] = $data;


// Interactive Agency


//Icon Boxes 19 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-19', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box19.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="7/12"][insignia_section_heading title="We are a Creative Digital Agency, Based in Manhattan, NY" subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#1c3467" subtitle_font_weight="" separator_color="#ff7396"][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="5/12"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="30"][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-agenda" icon_size="icon-extra-medium" icon_title="Branding" icon_text="It is a long fact that a reader will be distracted by the readable content of a page." btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-link" icon_size="icon-extra-medium" icon_title="Strategy" icon_text="It is a long fact that a reader will be distracted by the readable content of a page." btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-bookmark-alt" icon_size="icon-extra-medium" icon_title="Marketing" icon_text="It is a long fact that a reader will be distracted by the readable content of a page." btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;


//About 28 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-28', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about28.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517048500488{background-image: url(http://insignia-themes.website/interactive-agency/wp-content/uploads/2018/01/worl-map-bg.jpg?id=14) !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1517048835830{padding-right: 40px !important;}"][insignia_section_heading title="Enjoy your web-site, filled with the things you care about." subtitle="" align="text-left" separator="disable" heading_tag="h3" font_weight="default" heading_color="#1c3467" subtitle_font_weight="" separator_color="#ff7396"][vc_empty_space height="20px"][vc_column_text]It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here.[/vc_column_text][vc_column_text css=".vc_custom_1517051275551{margin-bottom: 15px !important;}"]</p>
<h5>Highly Customizable WordPress Theme.</h5>
<p>[/vc_column_text][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.[/vc_column_text][insignia_button button_style="first" btn_text="Learn More" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f7f7f7" bg_color="#ff7396" hover_bg_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="11769" img_size="full"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="11774" img_size="full"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;


	//Portfolio 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-08', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio8.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][portfolio port_layout="port_grid3" port_on_hover="layout_6" port_cat="advertising,branding,marketing" port_filter="filter_on" filter_layout="_simple" port_gap="40" appear_effects="fade-up"][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Counters 10 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-10', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter10.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517049502372{background-color: #1c3467 !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Why Choose Invictus?" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ff7396"][vc_column_text]</p>
<div class="centered-box">
<p class="white-color medium-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="35px"][vc_row_inner gap="30"][vc_column_inner width="1/3"][milestone title="ON GOING PROJECTS" number="150" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-bookmark-alt" align="text-center" text_transform="text-uppercase" icon_size="60" num_size="75" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ff7396" num_color="#f5f5f5" title_color="#d6d5d5"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="Team Members" number="147" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-user" align="text-center" text_transform="text-uppercase" icon_size="60" num_size="75" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ff7396" num_color="#f5f5f5" title_color="#d6d5d5"][/vc_column_inner][vc_column_inner width="1/3"][milestone title="Awards won" number="74" add_icon="1" icon_layout="ins-count-icon" count_layout="default" icon_type="themify" icon_themify="ti-medall-alt" align="text-center" text_transform="text-uppercase" icon_size="60" num_size="75" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" icon_color="#ff7396" num_color="#f5f5f5" title_color="#d6d5d5"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;


//Services 38 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-38', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service38.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="01/" num_title="Digital Innovation" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" num_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="02/" num_title="Digital Branding" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" num_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="03/" num_title="Digital Strategy" num_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" title_font="text-extra-large" num_color="#ff7396" title_color="#1c3467"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Extra 33 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-33', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra33.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="100px"][vc_single_image image="70" img_size="full" alignment="center"][vc_empty_space height="35px"][vc_row_inner css=".vc_custom_1517054040955{padding-right: 5% !important;padding-left: 5% !important;}"][vc_column_inner][vc_column_text]
<div class="centered-box">
<p style="font-size: 22px; line-height: 32px;">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>

</div>
[/vc_column_text][vc_empty_space height="30px"][vc_single_image image="77" img_size="218x80" add_caption="yes" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

	//Teams 13 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-13', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team13.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][insignia_section_heading title="Meet Our Creative Team" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#1c3467" subtitle_font_weight="" separator_color="#ff7396"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Ashley Bryant"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Walter Russell"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Anna Carrolfol"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Robert Reed"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Elsa Minor"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Milton Glaser"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="Mark Anthony"][/vc_column_inner][vc_column_inner width="1/4"][team_member team_layout="Sixth Option" logo_team="John Doe"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Testimonials 15 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-15', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial15.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517222179949{background-image: url(http://insignia-themes.website/interactive-agency/wp-content/uploads/2018/01/temp-bg-1.jpg?id=11798) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="10px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][testimonial testimonial_layout="First Option" autoplay="true" testimonial_navigation_dots="false" testimonial_navigation_arrows="false" infinite="true" font_color="#f9f9f9" title_font_color="#f2f2f2" position_font_color="#ff7396"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 29 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-29', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact29.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1517207064510{background-color: #f4f4f6 !important;}"][vc_column][vc_empty_space height="70px"][insignia_section_heading title="Get In Touch" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#1c3467" subtitle_font_weight="" separator_color="#ff7396"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-location-pin" icon_size="icon-extra-medium" icon_title="Our Address" icon_text="New York, NY 256364, United States" btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-email" icon_size="icon-extra-medium" icon_title="Our Email" icon_text="contact@invictus.com" btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-headphone-alt" icon_size="icon-extra-medium" icon_title="Our Phone" icon_text="1-900-123-4567 Or 1-900-564-9875" btn_check="" box_shadow="ins-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-500" text_font_weight="default" icon_color="#ff7396" title_color="#1c3467"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

//Contact 30 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-30', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact30.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Get Social" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#1c3467" subtitle_font_weight="" separator_color="#ff7396"][vc_empty_space height="30px"][vc_column_text]</p>
<div class="centered-box">
<p class="medium-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
</div>[/vc_column_text][vc_empty_space height="20px"][insignia_social_icons color="colorful" border_radius="square" icon_size="regular" hover_effect="slideup" icon_align="center" twitter="#" facebook="#" linkedin="#" google-plus="#" instagram="#" pinterest="#"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;

// Marketing Agency

//Icon Boxes 20 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-20', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box20.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Enjoy our first Quality Services" subtitle="Why choose invictus" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#161b2e" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#f5ad3e"][vc_column_text css=".vc_custom_1517467553047{padding-right: 10% !important;padding-left: 10% !important;}"]</p>
<div class="text-center medium-text" data-aos-once="true" data-aos="fade-up" data-aos-delay="50">No coding skills required to create unique sites. Customize your site in real-time and see the results instantly.</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="30"][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-layers-alt" icon_size="icon-small" icon_title="Unlimited Layouts" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" border_radius="5px" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#ffffff" title_color="#161b2e" icon_bg_color="#fe688b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-settings" icon_size="icon-small" icon_title="High Performance" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" border_radius="5px" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#ffffff" title_color="#161b2e" icon_bg_color="#fe688b"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-icon-circle-background" icon_align="text-center" icon_type="themify" icon_themify="ti-headphone" icon_size="icon-small" icon_title="Free Support" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form." btn_check="" border_radius="5px" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#ffffff" title_color="#161b2e" icon_bg_color="#fe688b"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

	//Call to Action 12 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-12', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action12.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517381966837{background-color: #3d59e8 !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner][insignia_section_heading title="“Passion Leads To Design, Design Leads To Performance, Performance Leads To Success!”" subtitle="" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#ffffff" subtitle_font_weight=""][vc_empty_space height="30px"][insignia_button button_style="three" btn_text="Explore more" btn_link="url:%23|||" button_size="medium" button_align="text-center" text_color="#f9f9f9" bg_color="#fe688b" border_color="#fe688b" border_radius="50px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Portfolio 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio9.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Showcase and Impress" subtitle="Our recent work" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#161b2e" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#f5ad3e" css=".vc_custom_1522322770091{margin-bottom: 15px !important;}"][vc_column_text css=".vc_custom_1517467537633{padding-right: 10% !important;padding-left: 10% !important;}"]</p>
<div class="text-center medium-text" data-aos-once="true" data-aos="fade" data-aos-delay="50">We believe our work speaks for itself. Browse our most recent projects below and enjoy our handmade work with love for every detail.</div>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][portfolio port_layout="port_masonry3" port_on_hover="layout_1" port_cat="" port_filter="" port_gap="50" appear_effects="fade-up" extra_class="portfolio-border-radius"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//About 29 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-29', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about29.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_empty_space height="70px"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1517314447780{padding-right: 12% !important;padding-left: 12% !important;}"][vc_empty_space height="50px"][insignia_section_heading title="Innovation needs to be part of your website." subtitle="Why choose invictus" align="text-left" separator="disable" heading_tag="h1" font_weight="default" heading_color="#161b2e" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#f5ad3e"][vc_column_text]</p>
<div class="medium-text" data-aos-once="true" data-aos="fade-right" data-aos-delay="100">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
<p>[/vc_column_text][insignia_button button_style="three" btn_text="See How we work" btn_link="url:%23|||" button_size="medium" button_align="text-left" text_color="#f9f9f9" bg_color="#fe688b" border_color="#fe688b" border_radius="50px" css=".vc_custom_1522322938249{background-color: #fe688b !important;}"][vc_empty_space height="50px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1517314530261{background-image: url(http://insignia-themes.website/marketing-agency/wp-content/uploads/2018/01/marketing-agency.jpg?id=54) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="500px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Icon Boxes 21 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-21', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box21.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-ruler-pencil" icon_title="Fast and Efficient Work" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" extra_class="side-icon-box-inner side-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#fe688b" title_color="#161b2e" css=".vc_custom_1522324865479{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-palette" icon_title="Design and Developing" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" extra_class="side-icon-box-inner side-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#fe688b" title_color="#161b2e" css=".vc_custom_1522324870374{margin-bottom: 35px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-user" icon_title="Creative team" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" extra_class="side-icon-box-inner side-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#fe688b" title_color="#161b2e" css=".vc_custom_1522324876816{margin-bottom: 35px !important;}"][/vc_column_inner][vc_column_inner width="1/2"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-flag-alt" icon_title="Small Business Discounts" icon_text="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." btn_check="" extra_class="side-icon-box-inner side-icon-box-shadow" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#fe688b" title_color="#161b2e" css=".vc_custom_1522324882147{margin-bottom: 35px !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Services 39 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-39', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service39.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517395747154{background-color: #f9f9fb !important;}"][vc_column][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="inv-process-box-wrapper" data-aos-once="true" data-aos="fade-right" data-aos-delay="0">
<div class="inv-process-box-number-wrapper"><span class="inv-process-box-number-wrapper-lozenge sc-bg"><span class="inv-title-h4 inv-process-box-number-lozenge white-color">01</span></span></div>
<div class="inv-process-box-title">
<h5>Brain Storming</h5>
</div>
<div class="inv-process-box-content">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="inv-process-box-wrapper" data-aos-once="true" data-aos="fade-right" data-aos-delay="100">
<div class="inv-process-box-number-wrapper"><span class="inv-process-box-number-wrapper-lozenge sc-bg"><span class="inv-title-h4 inv-process-box-number-lozenge white-color">02</span></span></div>
<div class="inv-process-box-title">
<h5 class="inv-process-box-title-text">Design Phase</h5>
</div>
<div class="inv-process-box-content">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="inv-process-box-wrapper" data-aos-once="true" data-aos="fade-right" data-aos-delay="200">
<div class="inv-process-box-number-wrapper"><span class="inv-process-box-number-wrapper-lozenge sc-bg"><span class="inv-title-h4 inv-process-box-number-lozenge white-color">03</span></span></div>
<div class="inv-process-box-title">
<h5 class="inv-process-box-title-text">Development Phase</h5>
</div>
<div class="inv-process-box-content">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="inv-process-box-wrapper" data-aos-once="true" data-aos="fade-right" data-aos-delay="400">
<div class="inv-process-box-number-wrapper"><span class="inv-process-box-number-wrapper-lozenge sc-bg"><span class="inv-title-h4 inv-process-box-number-lozenge white-color">04</span></span></div>
<div class="inv-process-box-title">
<h5 class="inv-process-box-title-text">Going Live</h5>
</div>
<div class="inv-process-box-content">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Teams 14 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-14', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team14.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][insignia_section_heading title="The Team of invictus" subtitle="we are invictus" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#161b2e" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#f5ad3e" css=".vc_custom_1522323781588{margin-bottom: 15px !important;}"][vc_empty_space height="50px"][vc_row_inner gap="10"][vc_column_inner width="1/3"][team_member team_layout="Sixth Option" logo_team="John Doe"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Sixth Option" logo_team="Alice Doen"][/vc_column_inner][vc_column_inner width="1/3"][team_member team_layout="Sixth Option" logo_team="Katie Holmes"][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Extra 34 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-34', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra34.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2" css=".vc_custom_1517380266810{background-image: url(http://insignia-themes.website/marketing-agency/wp-content/uploads/2018/01/marketing-agency-1.jpg?id=87) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="500px"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1517379696783{padding-right: 12% !important;padding-left: 12% !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="50px"][insignia_section_heading title="Creative solutions and results that grow brands." subtitle="Why choose invictus" align="text-left" separator="disable" heading_tag="h1" font_weight="default" heading_color="#161b2e" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#f5ad3e"][vc_progress_bar values="%5B%7B%22label%22%3A%22Wordpress%22%2C%22value%22%3A%2290%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%233d59e8%22%2C%22customtxtcolor%22%3A%22%230d0d0d%22%7D%2C%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2280%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23fe688b%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ad3e%22%7D%5D" bgcolor="custom" css_animation="fadeIn" el_class="fl-skills-wrapper resume-skill-inner" custombgcolor="#3d59e8" units="%"][vc_empty_space height="80px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
	
CONTENT;

$templates[] = $data;

// Design Studio

//Icon Boxes 22 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-22', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box22.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_column_text][/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="70px"][insignia_section_heading title="We Are Creative" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#2d4059" subtitle_font_weight="" separator_color="#ea5455"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-brush-alt" icon_title="Creativity" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-ruler-pencil" icon_title="Illustration" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-paragraph" icon_title="Typography" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-camera" icon_title="Photography" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-printer" icon_title="Print Media" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_type="themify" icon_themify="ti-volume" icon_title="Promotions" icon_text="Lorem ipsum dolor sit amet, sed do consectetur adipisicing elit, sed do consectetur." btn_check="" title_font="text-extra-large" title_font_weight="font-weight-700" text_font_weight="default" icon_color="#ea5455" title_color="#2d4059"][vc_empty_space height="15px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Services 40 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-40', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service40.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_row_inner][vc_column_inner width="1/4"][insignia_interactive_banner style="style4" img="11841" title="Search Engine Optimization" description="Lorem ipsum dolor sit amet, lucilius electram quo et, et vim imperdiet repudiandae. At partem meliore mediocritatem sed." btn_check="1" btn_text="Read More" btn_link="#" opacity="0.3" icon_size="icon-extra-medium" title_font_size="20" subtitle_font_size="14" description_font_size="14" button_font_size="12"][/vc_column_inner][vc_column_inner width="1/4"][insignia_interactive_banner style="style4" img="11830" title="Social Media Marketing" description="Lorem ipsum dolor sit amet, lucilius electram quo et, et vim imperdiet repudiandae. At partem meliore mediocritatem sed." btn_check="1" btn_text="Read More" btn_link="#" opacity="0.3" icon_size="icon-extra-medium" title_font_size="20" subtitle_font_size="14" description_font_size="14" button_font_size="12"][/vc_column_inner][vc_column_inner width="1/4"][insignia_interactive_banner style="style4" img="11828" title="Online Reputation Management" description="Lorem ipsum dolor sit amet, lucilius electram quo et, et vim imperdiet repudiandae. At partem meliore mediocritatem sed." btn_check="1" btn_text="Read More" btn_link="#" opacity="0.3" icon_size="icon-extra-medium" title_font_size="20" subtitle_font_size="14" description_font_size="14" button_font_size="12"][/vc_column_inner][vc_column_inner width="1/4"][insignia_interactive_banner style="style4" img="11844" title="App Store Optimization" description="Lorem ipsum dolor sit amet, lucilius electram quo et, et vim imperdiet repudiandae. At partem meliore mediocritatem sed." btn_check="1" btn_text="Read More" btn_link="#" opacity="0.3" icon_size="icon-extra-medium" title_font_size="20" subtitle_font_size="14" description_font_size="14" button_font_size="12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;



//About 30 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-30', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about30.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517553932120{background-color: #f7f7f7 !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner equal_height="yes" content_placement="middle" gap="30"][vc_column_inner width="1/2"][vc_single_image image="29" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Innovation needs to be part of your website." subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#2d4059" subtitle_font_weight="" separator_color="#ea5455" css=".vc_custom_1522326176433{margin-bottom: 35px !important;}"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.[/vc_column_text][vc_column_text css=".vc_custom_1522326153364{margin-bottom: 20px !important;}"]</p>
<h5>Highly Customizable WordPress Theme.</h5>
<p>[/vc_column_text][vc_column_text]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;


//Services 41 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-41', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service41.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517483905902{background-image: url(http://insignia-themes.website/design-studio/wp-content/uploads/2018/02/design-studio-bg.jpg?id=50) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2"][vc_empty_space height="70px"][insignia_section_heading title="We will make you more proud of your business." subtitle="" align="text-left" separator="disable" heading_tag="h1" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ea5455" css=".vc_custom_1522326246779{margin-bottom: 35px !important;}"][vc_column_text]</p>
<p class="white-color">Our quality standards apply also in terms of service, technical expertise and advice. Our dedicated employees are happy to assist you with know-how and experience in your daily business.</p>
<p>[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][insignia_simple_icon_list list_items="Lorem ipsum dolor sit amet,Consectetur adipisicing,Elit sed do eiusmod,Tempor incididunt ut labore,Et dolore magna aliqua" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#f5f5f5" text_color="#f5f5f5" icon_fontawesome="fa fa-caret-right"][/vc_column_inner][vc_column_inner width="1/2"][insignia_simple_icon_list list_items="Lorem ipsum dolor sit amet,Consectetur adipisicing,Elit sed do eiusmod,Tempor incididunt ut labore,Et dolore magna aliqua" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#f5f5f5" text_color="#f5f5f5" icon_fontawesome="fa fa-caret-right"][/vc_column_inner][/vc_row_inner][vc_empty_space height="105px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//About 31 vc-template

	$data = array();
	$data['name'] = esc_html__( 'About-31', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/about31.jpg' );
	$data['sort_name'] = 'About'; 
	$data['custom_class'] = 'about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="30" full_height="yes" css=".vc_custom_1517553975835{padding-top: 40px !important;padding-bottom: 40px !important;background-image: url(http://insignia-themes.website/design-studio/wp-content/uploads/2018/02/inv-dotted-bg.png?id=11787) !important;}"][vc_column width="5/12"][vc_video_box video_image="33" video_link="https://www.youtube.com/watch?v=7e90gBu4pas" video_extra_class="design-studio-video-element"][/vc_column][vc_column width="7/12"][insignia_section_heading title="Creative solutions and results that grow brands." subtitle="" align="text-left" heading_tag="h2" font_weight="default" heading_color="#2d4059" subtitle_font_weight="" separator_color="#ea5455" css=".vc_custom_1522326496427{margin-bottom: 35px !important;}"][vc_column_text]</p>
<p class="light-font">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
<p>[/vc_column_text][vc_row_inner gap="10"][vc_column_inner width="1/2"][milestone title="Web Design Awards" number="15" add_icon="" align="text-left" num_size="80" title_size="18" number_font_weight="font-weight-400" title_font_weight="font-weight-700" num_color="#2d4059" title_color="#2d4059"][vc_column_text]t is a long established fact that a reader will be distracted by the readable content of a page.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][milestone title="Satisfied Clients" number="300" add_icon="" align="text-left" num_size="80" title_size="18" number_font_weight="font-weight-400" title_font_weight="font-weight-700" num_color="#2d4059" title_color="#2d4059"][vc_column_text]t is a long established fact that a reader will be distracted by the readable content of a page.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

	//Clients 9 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-09', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients9.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row" css=".vc_custom_1517492392570{padding-top: 35px !important;background-color: #2d4059 !important;}" el_class="home_box_wrap"][vc_column width="1/6"][vc_single_image image="11753" img_size="full" alignment="center"][/vc_column][vc_column width="1/6"][vc_single_image image="11752" img_size="full" alignment="center"][/vc_column][vc_column width="1/6"][vc_single_image image="11751" img_size="full" alignment="center"][/vc_column][vc_column width="1/6"][vc_single_image image="11750" img_size="full" alignment="center"][/vc_column][vc_column width="1/6" el_class="home_box_last"][vc_single_image image="11749" img_size="full" alignment="center"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]

CONTENT;
$templates[] = $data;


//Extra 35 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Extra-35', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/extra35.jpg' );
	$data['sort_name'] = 'Extra';
	$data['custom_class'] = 'extra';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="10" css=".vc_custom_1517490072032{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://insignia-themes.website/design-studio/wp-content/uploads/2018/02/design-studio-bg-2.jpg?id=93) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="background-fixed"][vc_column width="1/2"][insignia_section_heading title="An exceptionally unique experience tailored to you." subtitle="" align="text-left" separator="disable" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ea5455" css=".vc_custom_1522329052919{margin-bottom: 10px !important;}"][vc_column_text]</p>
<p class="light-font" style="color: white;">Our quality standards apply also in terms of service, technical expertise and advice. Our dedicated employees are happy to assist you with know-how and experience in your daily business.</p>
<p>[/vc_column_text][insignia_button button_style="first" btn_text="Explore More" button_size="medium" button_align="text-left" text_color="#ffffff" hover_text_color="#ffffff" bg_color="#ea5455" hover_bg_color="#2d4059" border_width="0"][/vc_column][vc_column width="1/2"][vc_tta_accordion style="outline" shape="square" color="white" c_position="right" active_section="1" el_class="dark-bg-accordion"][vc_tta_section title="01. API, SEO &amp; Marketing" tab_id="1511505885108-6633a6f7-3ece"][vc_column_text]</p>
<p class="white-color">Regular servicing is important for health and to maintain the system working effectively. Up to 15% of the refrigerant gas will be lost annually.</p>
<p>[/vc_column_text][/vc_tta_section][vc_tta_section title="02. Web Developement" tab_id="1511505885190-5d1ae3a2-172d"][vc_column_text]</p>
<p class="white-color">Regular servicing is important for health and to maintain the system working effectively. Up to 15% of the refrigerant gas will be lost annually.</p>
<p>[/vc_column_text][/vc_tta_section][vc_tta_section title="03. Dolor amet lorem ipsum sit." tab_id="1511505885273-0bca0a12-8919"][vc_column_text]</p>
<p class="white-color">Regular servicing is important for health and to maintain the system working effectively. Up to 15% of the refrigerant gas will be lost annually.</p>
<p>[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
	
CONTENT;


$templates[] = $data;

//Contact 31 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-31', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact31.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT

[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1517495258493{background-image: url(http://insignia-themes.website/design-studio/wp-content/uploads/2018/02/design-studio-bg-2.jpg?id=93) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="90px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Get in Touch with Invictus" subtitle="" align="text-center" heading_tag="h2" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" separator_color="#ea5455" css=".vc_custom_1522328805140{margin-bottom: 60px !important;}"][vc_column_text]</p>
<p class="medium-text white-color text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][vc_row_inner css=".vc_custom_1517495268526{padding-right: 5% !important;padding-left: 5% !important;}"][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="ds-contact-meta-wrapper clearfix ">
<div class="ds-contact-icon-wraper ds-contact-icon-round"><i class="ti-headphone-alt ds-contact-icon sc-bg white-color"><!--icon--></i></div>
<div class="ds-contact-detail">
<h6 class="white-color no-margin-top no-margin-bottom">Any Question at</h6>
<p class="white-color">+01 654 6548 897</p>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="ds-contact-meta-wrapper clearfix ">
<div class="ds-contact-icon-wraper ds-contact-icon-round"><i class="ti-location-pin ds-contact-icon sc-bg white-color"><!--icon--></i></div>
<div class="ds-contact-detail">
<h6 class="white-color no-margin-top no-margin-bottom">We are Here</h6>
<p class="white-color">57 brand street, New York</p>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="ds-contact-meta-wrapper clearfix ">
<div class="ds-contact-icon-wraper ds-contact-icon-round"><i class="ti-timer ds-contact-icon sc-bg white-color"><!--icon--></i></div>
<div class="ds-contact-detail">
<h6 class="white-color no-margin-top no-margin-bottom">Monday - Saturday</h6>
<p class="white-color">8 am - 8 pm</p>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<div class="ds-contact-meta-wrapper clearfix ">
<div class="ds-contact-icon-wraper ds-contact-icon-round"><i class="ti-email ds-contact-icon sc-bg white-color"><!--icon--></i></div>
<div class="ds-contact-detail">
<h6 class="white-color no-margin-top no-margin-bottom">Send your mail at</h6>
<p class="white-color">contact@invictus.com</p>
</div>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="90px"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text css=".vc_custom_1517561092665{padding-top: 15px !important;}"]</p>
<div class="inv-socials-list inv-socials-colored text-center aos-init inv-socials-full-width"><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon fa fa-facebook facebook"><!--icon--></i></a><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon fa fa-twitter twitter"><!--icon--></i></a><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon linkedin fa fa-linkedin"><!--icon--></i></a><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon instagram fa fa-instagram"><!--icon--></i></a><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon fa fa-google-plus googleplus"><!--icon--></i></a><a class="socials-item socials-item-right-border" href="#" target="_blank" rel="noopener"><i class="socials-item-icon pinterest fa fa-pinterest-p"><!--icon--></i></a></div>[/vc_column_text][/vc_column][/vc_row]


CONTENT;

$templates[] = $data;

// Classic Agency

//Icon Boxes 23 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-23', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-box23.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-box';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="We are Invictus. A leading global full service digital marketing, technology and commerce consultancy. we are a full service global consultancy for digital marketing, technology and commerce" subtitle="who we are" align="text-center" separator="disable" heading_tag="h3" font_weight="default" subtitle_text_transform="text-uppercase" subtitle_font_weight="" subtitle_color="#1151d3"][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="20"][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-world" icon_size="icon-large" icon_title="WEB DESIGN" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-flag-alt" icon_size="icon-large" icon_title="BRAND &amp; IDENTITY" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-pencil-alt" icon_size="icon-large" icon_title="GRAPHIC DESIGN" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="20"][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-desktop" icon_size="icon-large" icon_title="WEB DEVELOPMENT" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-timer" icon_size="icon-large" icon_title="DIGITAL MARKETING" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_type="themify" icon_themify="ti-light-bulb" icon_size="icon-large" icon_title="PRODUCT DESIGN" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Services 42 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Services-42', 'invictus' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  INVICTUS_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/service42.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'service';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1517917263416{background-image: url(http://insignia-themes.website/classic-agency/wp-content/uploads/2018/02/classic-agency-bg.jpg?id=73) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="90px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="We Make It Simple To Share Your Ideas With Target Audiences." subtitle="" align="text-center" separator="disable" heading_tag="h1" font_weight="default" heading_color="#f5f5f5" subtitle_font_weight="" css=".vc_custom_1522312663169{margin-bottom: 35px !important;}"][vc_column_text]</p>
<div class="text-center"><a class="inv-button-video-light-box" href="https://www.youtube.com/watch?v=7e90gBu4pas"><i class="classic-agency-video-icon icon-control-play icons"><!--icon--></i></a></div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="280px"][/vc_column][/vc_row][vc_row css=".vc_custom_1517910606591{margin-top: -200px !important;}"][vc_column width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-world" icon_size="icon-large" icon_title="OUR MISSION" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#1151d3" title_color="#282828" css=".vc_custom_1522311945905{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #ffffff !important;}"][/vc_column][vc_column width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-pencil-alt" icon_size="icon-large" icon_title="OUR VISION" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522311780331{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #1151d3 !important;}"][/vc_column][vc_column width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_type="themify" icon_themify="ti-flag-alt" icon_size="icon-large" icon_title="OUR PHILOSOPHY" icon_text="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form" btn_check="" title_font="text-medium" title_font_weight="font-weight-600" text_font_weight="default" icon_color="#f5f5f5" title_color="#f5f5f5" text_color="#f5f5f5" css=".vc_custom_1522311875802{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 45px !important;padding-left: 35px !important;background-color: #191919 !important;}"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

return $templates;

}