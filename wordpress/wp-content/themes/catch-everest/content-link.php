<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package Catch Themes
 * @subpackage Catch Everest
 * @since Catch Everest 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-container post-format">
    
        <header class="entry-format">
        	<a href="<?php echo esc_url( get_post_format_link( 'link' ) ); ?>" title="<?php esc_attr_e( 'All Link Posts', 'catch-everest' ); ?>"><?php esc_html_e( 'Link', 'catch-everest' ); ?></a>
        </header>
        
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'catch-everest' ) ); ?>
        </div><!-- .entry-content -->
    
        <footer class="entry-meta">
            <?php catcheverest_post_format_meta(); ?>   
            <?php if ( comments_open() ) : ?>
            	<span class="sep"> | </span>
            	<span class="comments-link"><?php comments_popup_link(__('Leave a reply', 'catch-everest'), __('1 Reply', 'catch-everest'), __('% Replies;', 'catch-everest')); ?></span>
            <?php endif; ?>
            <?php edit_post_link( __( 'Edit', 'catch-everest' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
         
  	</div><!-- .entry-container -->
    
</article><!-- #post-<?php the_ID(); ?> -->
