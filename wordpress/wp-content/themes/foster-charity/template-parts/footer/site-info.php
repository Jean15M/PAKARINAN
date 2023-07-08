<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'foster_charity_hide_show_scroll',false) != '' || get_theme_mod( 'foster_charity_enable_disable_scrolltop',false) != '') { ?>
    <?php $foster_charity_theme_lay = get_theme_mod( 'foster_charity_footer_options','Right');
        if($foster_charity_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'foster-charity' ); ?></span></a>
        <?php }else if($foster_charity_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'foster-charity' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('foster_charity_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'foster-charity' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php foster_charity_credit(); ?> <?php echo esc_html(get_theme_mod('foster_charity_footer_text',__('By ThemesEye','foster-charity'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','foster-charity') ?></span>
</div>