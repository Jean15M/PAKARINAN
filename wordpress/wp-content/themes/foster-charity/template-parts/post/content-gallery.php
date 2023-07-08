<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>" class="text-capitalize"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if(get_theme_mod('foster_charity_blog_description') != 'Post Content'){ ?>
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the gallery.
          if ( get_post_gallery() ) {
            echo '<div class="entry-gallery">';
              echo ( get_post_gallery() );
            echo '</div>';
          };
        };
      ?>
    <?php }?>
    <?php if(get_theme_mod('foster_charity_blog_description') == 'Post Content'){ ?>
      <div class="text"><?php the_content(); ?></div>
    <?php }
    if(get_theme_mod('foster_charity_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="text"><?php $foster_charity_excerpt = get_the_excerpt(); echo esc_html( foster_charity_string_limit_words( $foster_charity_excerpt, esc_attr(get_theme_mod('foster_charity_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('foster_charity_post_excerpt_suffix','{...}') ); ?></div>
      <?php } ?>
    <?php }?>
    <?php if( get_theme_mod('foster_charity_button_text','Continue Reading....') != ''){ ?>
      <div class="post-link">
        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('foster_charity_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('foster_charity_button_text','Continue Reading....'));?></span></a>
      </div>
    <?php } ?>
    <?php if( get_theme_mod( 'foster_charity_date_hide',true) != '' || get_theme_mod( 'foster_charity_comment_hide',true) != '' || get_theme_mod( 'foster_charity_author_hide',true) != '') { ?>
      <div class="post-heading">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="post-info">
              <?php if( get_theme_mod( 'foster_charity_author_hide',true) != '') { ?>
                <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_post_author_icon_changer','fa fa-user')); ?>" aria-hidden="true"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
              <?php } ?>
              <?php if( get_theme_mod( 'foster_charity_comment_hide',true) != '') { ?>
                <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_post_comment_icon_changer','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comments','foster-charity'), __('0 Comments','foster-charity'), __('% Comments','foster-charity') ); ?></span>
              <?php } ?>
              <?php if( get_theme_mod( 'foster_charity_post_time_show',false) != '') { ?>
                <span class="entry-time"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
              <?php }?> 
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php if( get_theme_mod( 'foster_charity_date_hide',true) != '') { ?>
              <div class="blog-date">Posted on <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></div>
            <?php }?>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</article>