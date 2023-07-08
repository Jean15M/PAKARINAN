<?php
/**
 * Displays top navigation
 */
?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 p-0">
			<nav class="header-menu <?php if( get_theme_mod( 'foster_charity_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" role="navigation">
				<div class="row">
					<div class="col-lg-11 col-md-10">
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'foster-charity' ); ?>">
							<button role="tab" class="menu-toggle p-3 my-2 mx-auto" aria-controls="top-menu" aria-expanded="false">
								<?php
									esc_html_e( 'Menu', 'foster-charity' );
								?>
							</button>
							<?php wp_nav_menu( array(
								'theme_location' => 'top',
								'menu_id'        => 'top-menu',
							) ); ?>				
						</nav>
					</div>
					<?php if( get_theme_mod('foster_charity_show_hide_search',true) != ''){ ?>
						<div class="col-lg-1 col-md-2 align-self-center">
							<div class="search-body text-center align-self-center">
								<button type="button" class="search-show p-2"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_search_icon_changer','fas fa-search')); ?>"></i></button>
							</div>
						</div>
					<?php } ?>
				</div>
			</nav>
		</div>	
		<div class="col-lg-2 col-md-2 p-0 align-self-center">
			<?php if( get_theme_mod( 'foster_charity_call1','' ) != '') { ?>
				<div class="call p-2 text-md-start text-center align-self-center">     
				    <a href="tel:<?php echo esc_attr( get_theme_mod('foster_charity_call1','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_phone_icon_changer','fas fa-phone-volume')); ?> pe-2"></i><?php echo esc_html( get_theme_mod('foster_charity_call1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('foster_charity_call1','') ); ?></span></a>
			    </div>
		    <?php } ?>
		</div>
		<div class="searchform-inner">
			<?php get_search_form(); ?>
			<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
		</div>
	</div>
</div>