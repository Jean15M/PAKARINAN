<?php
/**
 * Template for displaying search forms in Foster Charity
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'label', 'foster-charity' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'foster-charity' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><span><?php echo esc_html_x( 'Search', 'submit button', 'foster-charity' ); ?></span></button>
</form>