<?php
/**
 * Displays footer widgets if assigned
 */

?>
<?php //Set widget areas classes based on user choice
    $foster_charity_widget_areas = get_theme_mod('foster_charity_footer_widget', '4');
    if ($foster_charity_widget_areas == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($foster_charity_widget_areas == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($foster_charity_widget_areas == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
?>
<aside class="widget-area py-4">
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	      <div class="sidebar-column <?php echo ( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-1'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	      <div class="sidebar-column <?php echo ( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-2'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	      <div class="sidebar-column <?php echo ( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-3'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	      <div class="sidebar-column <?php echo ( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-4'); ?>
	      </div>
	    <?php endif; ?>
	</div>
</aside>