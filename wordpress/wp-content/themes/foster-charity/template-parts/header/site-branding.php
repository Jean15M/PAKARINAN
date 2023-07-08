<?php
/**
 * Displays header site branding
 */

?>
<div class="site-branding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 align-self-center">
				<div class="site-branding-text p-2 text-md-start text-center align-self-center logo">
					<?php if ( has_custom_logo() ) : ?>
		            	<div class="site-logo align-self-center"><?php the_custom_logo(); ?></div>
			        <?php endif; ?>
		            <?php $blog_info = get_bloginfo( 'name' ); ?>
		            <?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('foster_charity_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                  <h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
					<?php endif; ?>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) :
					?>
		                <?php if( get_theme_mod('foster_charity_show_tagline',true) != ''){ ?>
							<p class="site-description m-0">
								<?php echo esc_html($description); ?>
							</p>
		              	<?php }?>
		            <?php endif; ?>
				</div>
			</div>
			<div class=" col-md-3 col-sm-3 col-xs-12 p-0 align-self-center">
				<div class="mail py-md-4 py-2 text-md-end text-center align-self-center">
					<?php if( get_theme_mod( 'foster_charity_email','' ) != '') { ?>
                  		<a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('foster_charity_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_email_icon_changer','fas fa-envelope')); ?> pe-1"></i><?php echo esc_html( get_theme_mod('foster_charity_email','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('foster_charity_email','') ); ?></span></a>
	                <?php } ?>
             	</div>
		    </div>
		    <div class=" col-md-3 col-xs-12 col-sm-3 p-0 align-self-center">
		    	<?php if( get_theme_mod( 'foster_charity_donate_link','' ) != '') { ?>
			      	<div class="donate py-md-3 py-2 text-md-end text-center align-self-center">
	                   <a href="<?php echo esc_url(get_theme_mod('foster_charity_donate_link','')); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_donatebtn_icon_changer','fas fa-heart')); ?>"></i> <?php echo esc_html(get_theme_mod('foster_charity_donate','')); ?><span class="screen-reader-text"><?php esc_html_e( 'Donate Now','foster-charity' );?></span> </a>
		            </div>
	        	<?php } ?>
		    </div>
		    <div class=" col-md-3 col-xs-12 col-sm-3 p-0 align-self-center">
	      		<div class="social-media py-3 text-md-end text-center align-self-center">
		          	<?php if( get_theme_mod( 'foster_charity_facebook_url') != '') { ?>
		            	<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_facebook_icon_changer','fab fa-facebook-f')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','foster-charity' );?></span></a>
		          	<?php } ?>	          	           
		         	<?php if( get_theme_mod( 'foster_charity_twitter_url') != '') { ?>
		            	<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_twitter_icon_changer','fab fa-twitter')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','foster-charity' );?></span></a>
		         	<?php } ?>	
		         	<?php if( get_theme_mod( 'foster_charity_instagram_url') != '') { ?>
		            	<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_instagram_icon_changer','fab fa-instagram')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','foster-charity' );?></span></a>
		         	<?php } ?>
		          	<?php if( get_theme_mod( 'foster_charity_youtube_url') != '') { ?>
		            	<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_youtube_icon_changer','fab fa-youtube')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','foster-charity' );?></span></a>
		          	<?php } ?>	          
		          	<?php if( get_theme_mod( 'foster_charity_linkdin_url') != '') { ?>
		            	<a href="<?php echo esc_url( get_theme_mod( 'foster_charity_linkdin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_linkdin_icon_changer','fab fa-linkedin-in')); ?> py-3 px-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','foster-charity' );?></span></a>
		         	<?php } ?>	
    	        </div>
		    </div>
		</div>		
	</div>
</div>