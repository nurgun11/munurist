<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package munurist
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

<div id="comments" class="comments-area s-comments">

<div class="comments-row">


	<?php
	
	if ( have_comments() ) :
		?>
		

		<?php the_comments_navigation(); ?>



		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'munurist' ); ?></p>
			<?php
		endif;

	endif; 

	comment_form(array(
		'title_reply' => 'Оставить комментарий',
		'fields'               => [
		'author' => '<p class="comment-form-author">
			<input id="author" placeholder="Ваше имя" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
		</p>',
		'email'  => '<p class="comment-form-email">
			<input id="email" placeholder="Ваш Email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
		</p>',
		'cookies' => ''
		],
		'comment_field'        => '<p class="comment-form-comment">		
		<textarea id="comment" name="comment" placeholder="Комментарий" cols="45" rows="8"  aria-required="true" required="required"></textarea>
	</p>',
		'submit_button'         => '<p class="form-submit"><button id="submit" class="submit">Отправить</button></p>',
	));
	?>

<div class="comments-count">
			<?php
			$munurist_comment_count = get_comments_number();
			if ( '1' === $munurist_comment_count ) {
				echo '<strong>1</strong> комментарий';
			} else {
				echo '<strong>' . $munurist_comment_count  .'</strong> комментариев';
			}
			?>
		</h2>
		
</div>

<ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ul',
					'short_ping' => true,
				)
			);
			?>
		</ul><!-- .comment-list -->

</div>
