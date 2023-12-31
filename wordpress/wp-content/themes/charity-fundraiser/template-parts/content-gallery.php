<?php
/**
 * The template part for displaying post
 * @package Charity Fundraiser
 * @subpackage charity_fundraiser
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec animated fadeInDown p-2 mb-4">
  <div class="mainimage">
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
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
  <?php if( get_theme_mod( 'charity_fundraiser_metafields_date',true) != '' || get_theme_mod( 'charity_fundraiser_metafields_author',true) != '' || get_theme_mod( 'charity_fundraiser_metafields_comment',true) != '') { ?>
    <div class="post-info py-1">
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_date',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('charity_fundraiser_postdate_icon',"fa fa-calendar pe-2" )); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date ms-1 me-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_author',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('charity_fundraiser_postauthor_icon',"fa fa-user pe-2" )); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author ms-1 me-2"> <?php esc_html(the_author()); ?></span><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_comment',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('charity_fundraiser_postcomment_icon',"fa fa-comments pe-2" )); ?>"></i><span class="entry-comments ms-1 me-2"> <?php comments_number( __('0 Comments','charity-fundraiser'), __('0 Comments','charity-fundraiser'), __('% Comments','charity-fundraiser') ); ?></span>
      <?php }?>
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_time',true) != '') { ?>
        <span class="entry-comments ms-1 me-2"><i class="<?php echo esc_attr(get_theme_mod('charity_fundraiser_posttime_icon',"fa fa-clock pe-2" )); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if(get_theme_mod('charity_fundraiser_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('charity_fundraiser_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $charity_fundraiser_excerpt = get_the_excerpt(); echo esc_html( charity_fundraiser_string_limit_words( $charity_fundraiser_excerpt, esc_attr(get_theme_mod('charity_fundraiser_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('charity_fundraiser_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('charity_fundraiser_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn my-2">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" ><?php echo esc_html( get_theme_mod('charity_fundraiser_blog_button_text',__('Read Full', 'charity-fundraiser')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('charity_fundraiser_blog_button_text',__('Read Full', 'charity-fundraiser')) ); ?></span></a>
    </div>
  <?php }?>
</article>