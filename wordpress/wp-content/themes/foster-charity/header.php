<?php
/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open(); 
	} else { 
		do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('foster_charity_loader_setting',false) != '' || get_theme_mod('foster_charity_enable_disable_preloader',false) != ''){ ?>
	    <div id="pre-loader">
	      	<div class='demo'>
		        <?php $foster_charity_theme_lay = get_theme_mod( 'foster_charity_preloader_types','Default');
		        if($foster_charity_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($foster_charity_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($foster_charity_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php } ?>
	      	</div>
	    </div>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'foster-charity' ); ?></a>
		<div id="page" class="site">
			<header id="masthead" class="site-header" role="banner">
				<div class="main-header">
					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</header>
		</div>
		<div class="site-content-contain">
			<div id="content">
			</div>
		</div>
	</header>