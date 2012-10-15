<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="container">
	<h2 class="posttitle">
	<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Four Uh-Oh Four. This doesn't exist, sorry bro.
<?php }else { ?>
Bravo, vous avez rejoint une page qui n'existe pas. D'une absolute tristesse, convenons-en!
<?php } ?><?php the_author(); ?> </h2></div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>