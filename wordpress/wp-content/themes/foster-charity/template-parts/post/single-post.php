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
	<div class="blogger singlebox">
		<?php if( get_theme_mod( 'foster_charity_single_post_image',true) != '') { ?>
			<div class="post-image">
			    <?php 
			      if(has_post_thumbnail()) { 
			        the_post_thumbnail(); 
			      }
			    ?>
		 	</div>
	 	<?php } ?>
	 	<?php if( get_theme_mod('foster_charity_show_hide_single_post_categories',true) != ''){ ?>
		<div class="category">
	  		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?></a>
		</div>
		<?php } ?>
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="post-info">
				    <?php if( get_theme_mod( 'foster_charity_single_post_author',true) != '') { ?>
		              <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_post_author_icon_changer','fa fa-user')); ?>" aria-hidden="true"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
		            <?php } ?>
		            <?php if( get_theme_mod( 'foster_charity_single_post_comment',true) != '') { ?>
		              <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_post_comment_icon_changer','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comments','foster-charity'), __('0 Comments','foster-charity'), __('% Comments','foster-charity') ); ?></span>
		            <?php } ?>
		            <?php if( get_theme_mod( 'foster_charity_post_time_show',false) != '') { ?>
                  <span class="entry-time"><i class="fas fa-clock"></i> <?php echo esc_html( get_the_time() ); ?></span>
                <?php }?> 
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<?php if( get_theme_mod( 'foster_charity_single_post_date',true) != '') { ?>
		            <div class="blog-date">Posted on <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></div>
		        <?php }?>
			</div>
		</div>
		<h1><?php the_title(); ?></h1>
		<div class="text">
	    	<?php the_content();?>
	  	</div>	
	  	<?php if( get_theme_mod( 'foster_charity_tags_hide',true) != '') { ?>
		  	<div class="tags"><p><?php
		      if( $tags = get_the_tags() ) {
		        echo '<span class="meta-sep"></span>';
		        foreach( $tags as $content_tag ) {
		          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
		          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
		        }
		      } ?></p>
	  		</div>
	    <?php } ?>	
	</div>
	<?php
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'foster-charity' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		if( get_theme_mod( 'foster_charity_nav_links',true) != '') {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('foster_charity_next_text',__( 'Next Post', 'foster-charity' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
					'<span class="screen-reader-text">' . __( 'Next Post', 'foster-charity' ) . '</span> ' .
					'',
				'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('foster_charity_prev_text',__( 'Previous Post', 'foster-charity' ))) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous Post', 'foster-charity' ) . '</span> ' .
					'',
			) );
		}
	}?>
</article>

<?php if (get_theme_mod('foster_charity_related_posts',true) != '') {
  get_template_part( 'template-parts/post/related-posts' );
}