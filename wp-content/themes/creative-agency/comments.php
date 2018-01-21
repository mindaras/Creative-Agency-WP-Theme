<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Creative_Agency
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- blog comments -->
<div class="blog-comments">
	<h3 class="title">(<?php echo get_comments_number(0, 1, '%'); ?>) Comments</h3>

<?php
	$comments = get_comments(array(
		'post_id' => $post->ID
	));

	if ($comments):
		foreach ($comments as $comment):
?>

<?php
	$comment_id = get_comment_ID();
	$author = get_comment_author($commend_id);
	$author_id = get_the_author_meta('ID');
	$avatar_url = get_avatar_url($author_id);
	$comment_text = get_comment_text($comment_id);
	$comment_reply_link = get_comment_reply_link();
?>
	<!-- comment -->
	<div class="media">
		<div class="media-left">
			<img class="media-object" src="<?php echo $avatar_url; ?>" alt="Avatar">
		</div>
		<div class="media-body">
			<h4 class="media-heading"
			><?php echo $author; ?><span class="time"><?php printf( _x( '%s ago', '%s = human-readable time difference'), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span></h4>
			<p><?php echo $comment_text; ?></p>
		</div>
	</div>
	<!-- /comment -->

	<?php
			endforeach;
		endif;
	?>

</div>
<!-- /blog comments -->

<!-- reply form -->
<div class="reply-form">
	<h3 class="title">Leave a reply</h3>
	<?php
		comment_form(array(
			'class_submit' => 'main-btn',
			'comment_notes_before' => '',
			'title_reply' => '',
			'label_submit' => 'Submit',
		));
	?>
</div>
<!-- /reply form -->
