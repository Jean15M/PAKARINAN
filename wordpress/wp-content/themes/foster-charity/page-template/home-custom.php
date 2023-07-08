<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'foster_charity_before_slider' ); ?>

  <?php if( get_theme_mod('foster_charity_slider_arrows', false) != '' || get_theme_mod('foster_charity_enable_disable_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('foster_charity_slider_speed', 3000)); ?>"> 
        <?php $foster_charity_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'foster_charity_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $foster_charity_slider_pages[] = $mod;
            }
          }
          if( !empty($foster_charity_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $foster_charity_slider_pages,
            'orderby' => 'post__in'
          );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){
               the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.jpg" alt="" />
              <?php } ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('foster_charity_slider_title',true) != ''){ ?>
                  <h1><?php the_title(); ?></h1>  
                <?php } ?>
                <?php if( get_theme_mod('foster_charity_slider_content',true) != ''){ ?>
                  <p><?php $foster_charity_excerpt = get_the_excerpt(); echo esc_html( foster_charity_string_limit_words( $foster_charity_excerpt, esc_attr(get_theme_mod('foster_charity_slider_excerpt_number','20')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'foster_charity_slider_button',true) != '' || get_theme_mod( 'foster_charity_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('foster_charity_slider_button_text','READ MORE') != ''){ ?>
                    <div class ="readbutton">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('foster_charity_slider_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('foster_charity_slider_button_text','READ MORE'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left py-4 px-3"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','foster-charity' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right py-4 px-3"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','foster-charity' );?></span>
        </a>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'foster_charity_after_slider' ); ?>

  <?php if( get_theme_mod('foster_charity_section_title') != '' || get_theme_mod('foster_charity_single_post') != '' || get_theme_mod('foster_charity_single_post1') != '' || get_theme_mod('foster_charity_single_post2') != ''){ ?>
    <section id="services" class="py-5">
      <div class="container">
        <?php if( get_theme_mod( 'foster_charity_section_title','' ) != '') { ?>
          <h2 class="text-center"><?php echo esc_html(get_theme_mod('foster_charity_section_title','')); ?></h2>
          <hr class="horizontal-line mt-0">
        <?php }?>
        <div class="row">
          <div class="col-md-4">            
            <?php
              $foster_charity_postData = get_theme_mod('foster_charity_single_post');
              if($foster_charity_postData){
                $args = array( 'name' => esc_html( $foster_charity_postData ,'foster-charity'));
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    </div>
                    <div class="post-head">
                      <h3 class="text-center p-2 text-capitalize"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                    </div> 
                  <?php endwhile; 
                  wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php
              endif; }
            ?>
          </div>
          <div class="col-md-4">
            <?php
              $foster_charity_postData = get_theme_mod('foster_charity_single_post1');
                if($foster_charity_postData){
                $args = array( 'name' => esc_html( $foster_charity_postData ,'foster-charity'));
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    </div>
                    <div class="post-head">
                      <h3 class="text-center p-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                    </div>
                  <?php endwhile; 
                  wp_reset_postdata();?>
                  <?php else : ?>
                    <div class="no-postfound"></div>
                  <?php
              endif; }?>
          </div>
          <?php if( get_theme_mod('foster_charity_single_post2') != ''){ ?>
            <div class="col-md-4">
              <div class="text-post p-3">
                <?php
                  $foster_charity_postData = get_theme_mod('foster_charity_single_post2');
                    if($foster_charity_postData){
                    $args = array( 'name' => esc_html( $foster_charity_postData ,'foster-charity'));
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                      while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="text">
                          <h3 class="text-center"><?php the_title(); ?></h3>
                          <hr class="line mt-0">
                          <p class="text-center"><?php $foster_charity_excerpt = get_the_excerpt(); echo esc_html( foster_charity_string_limit_words( $foster_charity_excerpt,120) ); ?></p> 
                        </div>
                      <?php endwhile; 
                      wp_reset_postdata();?>
                    <?php else : ?>
                      <div class="no-postfound"></div>
                    <?php
                  endif; }?> 
              </div> 
              <div class="clearfix"></div>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'foster_charity_after_how_can_you_help' ); ?>
</main>

<?php get_footer(); ?>