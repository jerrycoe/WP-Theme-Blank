<?php
/**
 * The template for displaying search form.
 *
 *
 * @package WP-Theme-Blank
 */
?>

<section>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<input type="search" class="search-field" placeholder="Search" value="" name="searchform-input" title="">
		</label>
		<input type="submit" class="search-submit" value="Submit">
	</form>
</section>

