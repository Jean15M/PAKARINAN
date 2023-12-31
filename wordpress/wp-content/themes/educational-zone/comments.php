<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Educational Zone
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

<div id="comments" class="comments-area card-body">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $educational_zone_comments_number = get_comments_number();
            if ( '1' === $educational_zone_comments_number ) {
                /* translators: %s: post title */
                printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'educational-zone' ), esc_html( get_the_title() ) );
            } else {
                printf(
                    esc_html(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s thought on &ldquo;%2$s&rdquo;',
                            '%1$s thoughts on &ldquo;%2$s&rdquo;',
                            $educational_zone_comments_number,
                            'comments title',
                            'educational-zone'
                        )
                    ),
                    esc_html ( number_format_i18n( $educational_zone_comments_number ) ),
                    esc_html ( get_the_title() )
                );
            }
            ?>
        </h2>


        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'educational-zone' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'educational-zone' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'educational-zone' ) ); ?></div>

                </div>
            </nav>
        <?php endif; // Check for comment navigation. ?>

        <ul class="comment-list">
            <?php
            wp_list_comments( array( 'callback' => 'educational_zone_comment', 'avatar_size' => 50 ));
            ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'educational-zone' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'educational-zone' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'educational-zone' ) ); ?></div>

                </div>
            </nav>
        <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'educational-zone' ); ?></p>
    <?php
    endif; ?>

    <?php comment_form( $args = array(
        'id_form' => 'commentform',  // that's the WordPress default value! delete it or edit it ;)
        'id_submit'         => 'commentsubmit',
        'title_reply' => __('Leave a Reply', 'educational-zone'),  // that's the WordPress default value! delete it or edit it ;)
        /* translators: %s: post title */
        'title_reply_to' => __('Leave a Reply to %s', 'educational-zone'),  // that's the WordPress default value! delete it or edit it ;)
        'cancel_reply_link' => __('Cancel Reply', 'educational-zone'),  // that's the WordPress default value! delete it or edit it ;)
        'label_submit' => __('Post Comment', 'educational-zone'),  // that's the WordPress default value! delete it or edit it ;)

        'comment_field' =>  '<p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',

        'comment_notes_after' => '<p class="form-allowed-tags">' .
            __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'educational-zone' ) .
            '</p><div class="alert alert-info">' . allowed_tags() . '</div>'
    )); ?>
</div>
