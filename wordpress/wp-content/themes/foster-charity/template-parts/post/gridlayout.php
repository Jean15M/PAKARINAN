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
<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blogger">
			<div class="category">
		  		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?></a>
			</div>
			<h2><a href="<?php echo esc_url( get_permalink() );  ?>" title="<?php echo the_title_attribute(); ?>" class="text-capitalize"><?php the_title();?></a></h2>
			<div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
			<div class="post-image">
			    <?php 
			      if(has_post_thumbnail() && get_theme_mod( 'foster_charity_blog_post_featured_image',true) != '') { 
			        the_post_thumbnail(); 
			      }
			    ?>
		 	</div>
          	<div class="text"><?php $foster_charity_excerpt = get_the_excerpt(); echo esc_html( foster_charity_string_limit_words( $foster_charity_excerpt, esc_attr(get_theme_mod('foster_charity_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('foster_charity_post_excerpt_suffix','{...}') ); ?></div>
		 	<?php if( get_theme_mod('foster_charity_button_text','Continue Reading....') != ''){ ?>
		  		<a class="post-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('foster_charity_button_text','Continue Reading....'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('foster_charity_button_text','Continue Reading....'));?></span></a>
		  	<?php } ?>
		</div>
	</article>
</div>