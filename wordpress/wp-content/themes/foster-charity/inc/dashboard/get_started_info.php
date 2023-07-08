<?php

add_action( 'admin_menu', 'foster_charity_gettingstarted' );
function foster_charity_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'foster-charity'), esc_html__('About Theme', 'foster-charity'), 'edit_theme_options', 'foster-charity-guide-page', 'foster_charity_guide');   
}

function foster_charity_admin_theme_style() {
   wp_enqueue_style('foster-charity-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'foster_charity_admin_theme_style');

function foster_charity_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Foster Charity Theme', 'foster-charity' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'foster-charity' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=foster-charity-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'foster-charity' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'foster_charity_notice');

/**
 * Theme Info Page
 */
function foster_charity_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'foster-charity' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="intro">
				<div class="pad-box">
					<h2 align="center"><?php esc_html_e( 'Welcome to Foster Charity Theme', 'foster-charity' ); ?>
					<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
					</span>
					<div class="powered-by">
						<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'foster-charity' ); ?></strong></p>
						<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
						</p>
					</div>
				</div>
			</div>
			<div class="tab">
			  <button role="tab" class="tablinks" onclick="foster_charity_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="foster_charity_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Foster Charity Lite Theme', 'foster-charity' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'foster-charity'); ?></th>
											<th><?php esc_html_e('Click Here', 'foster-charity'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=foster_charity_topbar') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=foster_charity_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=foster_charity_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'foster-charity'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=foster_charity_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'foster-charity'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','foster-charity'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','foster-charity'); ?></a> <?php esc_html_e( 'your website.','foster-charity'); ?> </li>
								<li><?php esc_html_e( 'Foster Charity','foster-charity'); ?> <a target="_blank" href="<?php echo esc_url( FOSTER_CHARITY_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','foster-charity'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','foster-charity'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( FOSTER_CHARITY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'foster-charity'); ?></a>
							<a href="<?php echo esc_url( FOSTER_CHARITY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'foster-charity'); ?></a>
							<a href="<?php echo esc_url( FOSTER_CHARITY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'foster-charity'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','foster-charity'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'This charity WordPress theme is versatile, robust, clean and beautiful. It is designed to give a skin to websites built for charities, non-profit organizations, NGOs, welfare committees, amnesty organizations, disaster relief force and for arranging donation camps, fundraising events, political campaigns, rallies and other socially and environmentally beneficial work for masses and nature. It is an interacting theme with user-friendly interface of both front end and back end to facilitate its usage to both its admin and customers. Make it stand alone among hundreds of other sites in terms of design by taking away cliched layouts and formulating new combinations of header and footer. This charity WordPress theme is built on Bootstrap framework giving a strong foundation and making it responsive to have fluidity in its layout to adjust on any screen size. It is coded from scratch with clean and secure codes leading to a bug-free website.', 'foster-charity' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','foster-charity'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','foster-charity'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Documention','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','foster-charity'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','foster-charity'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','foster-charity'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','foster-charity'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( FOSTER_CHARITY_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','foster-charity'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( FOSTER_CHARITY_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','foster-charity'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','foster-charity'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','foster-charity'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','foster-charity'); ?></a> <?php esc_html_e( 'your website.','foster-charity'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','foster-charity'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( FOSTER_CHARITY_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','foster-charity'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( FOSTER_CHARITY_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','foster-charity'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','foster-charity'); ?></h3>
						<ol>
							<li><a href="<?php echo esc_url( FOSTER_CHARITY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'foster-charity'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}?>