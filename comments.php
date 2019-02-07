<?php if ( have_comments() || comments_open() )  { ?>
<section id="comments" class="clearfix comments-area">
<?php } ?>

<?php 
if ( have_comments() ) : 
global $comments_by_type;
$comments_by_type = separate_comments( $comments );
if ( ! empty( $comments_by_type['comment'] ) ) : 
?>
<?php  if ( !post_password_required() ) { ?>
<section id="comments-list" class="comments">
<h3 class="comments-title"><?php comments_number(); ?></h3>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-above" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
<ul class="insignia_comment_list">
<?php  wp_list_comments( array(
				'short_ping' => true,
				'avatar_size'=> 70,
				'callback' => 'insignia_better_comments'
			) );
 ?>
</ul>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-below" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
</section>
<?php 
}
endif; 

endif;


if ( comments_open() ) {	

	$comments_form_args = array(
		'fields' => array(
			'author' => '<div class="col-md-4 col-xs-12 comment-author-input comment-form-field"><input type="text" name="author" id="comment-author" value="'.esc_attr($comment_author).'" size="22" tabindex="1"'.($req ? ' aria-required="true"' : '').' placeholder="'.esc_attr__('Name', 'invictus').($req ? ' *' : '').'" /></div>',
			'email' => '<div class="col-md-4 col-xs-12 comment-email-input comment-form-field"><input type="text" name="email" id="comment-email" value="'.esc_attr($comment_author_email).'" size="22" tabindex="2"'.($req ? ' aria-required="true"' : '').' placeholder="'.esc_attr__('Mail', 'invictus').($req ? ' *' : '').'" /></div>',
			'url' => '<div class="col-md-4 col-xs-12 comment-url-input comment-form-field"><input type="text" name="url" id="comment-url" value="'.esc_attr($comment_author_url).'" size="22" tabindex="3" placeholder="'.esc_attr__('Website', 'invictus').'" /></div>'
		),
		'comment_notes_after' => '',
		'comment_notes_before' => '',
		'comment_field' => '<div class="col-xs-12 comment-msg-textarea comment-form-field"><textarea name="comment" id="comment" cols="58" rows="6" tabindex="4" placeholder="'.esc_attr__('Comment *', 'invictus').'"></textarea></div>',
		'must_log_in' => '<div class="comment-form-message">'.sprintf(wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'invictus'), array('a' => array('href' => array()))), esc_url(wp_login_url( get_permalink() ))).'</div>',
		'logged_in_as' => '<div class="comment-form-message">'.sprintf(wp_kses(__('Logged in as <a href="%1$s">%2$s</a>.', 'invictus'), array('a' => array('href' => array()))), esc_url(get_edit_user_link()), $user_identity).' <a href="'.esc_url(wp_logout_url(get_permalink())).'" title="'.esc_attr__('Log out of this account', 'invictus').'">'.esc_html__('Log out &raquo;', 'invictus').'</a></div>',
		'submit_field' => '<div class="form-submit">%1$s</div><p>%2$s</p>',
		'label_submit' => esc_html__('Send Comment', 'invictus'),
		'class_submit' => 'insignia-button comment-form-submit',
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button>',
		'title_reply' => wp_kses(__('Leave <span class="light">a comment</span>', 'invictus'), array('a' => array('href' => array()))),
		'title_reply_to' => esc_html__('Comment to %s', 'invictus'),
		'must_log_in' => sprintf(wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'invictus'), array('a' => array('href' => array()))), esc_url(wp_login_url( get_permalink() ))),
	);
	comment_form($comments_form_args);

} else{ 

if ( have_comments() ){ ?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'invictus' ); ?></p>
	<?php } } ?>
	
	<?php if ( have_comments() || comments_open() )  { ?>
</section>
<?php } ?>