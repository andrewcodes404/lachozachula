<!-- https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comments/#another-comments-php-example -->

<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">

					<h3 class="mb1">comments...</h3>


        </h2>

<!-- http://codex.wordpress.org/Function_Reference/wp_list_comments -->
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h5 class="screen-reader-text section-heading">Comment Navigation</h5>
            <div class="nav-previous"><p>&larr; previous</p></div>
            <div class="nav-next"><p>&rarr; next </p></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">comments are closed</p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

<!-- https://codex.wordpress.org/Function_Reference/comment_form -->

    <?php comment_form(

				array(

					'title_reply' =>  __( 'leave a comment' ),
					'comment_notes_before' => '<p class="comment-notes">' .
    																__( '' ) . ( $req ? $required_text : '' ) .
    																'</p>',

					'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) .
															'</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
															'</textarea></p>',


				)
		); ?>

</div><!-- #comments -->
