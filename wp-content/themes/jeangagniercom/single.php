<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>
<div id="container">
<div class='metabar'>
<?php get_template_parts( array( 'parts/shared/meta') ); ?>
</div>
<div class='singlerightbar'>
	<h2 class="blogtitle"><?php the_title(); ?></h2>
	<div class="datesinglepost"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
<?php
if( qtrans_getLanguage() == 'en' ){ ?>
from the desk of
<?php }else { ?>
de la plume de
<?php } ?><?php the_author(); ?> </div>
	<hr class="thickhr">
	<div class="postcopy"><?php the_content(); ?></div>		

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	

</div>

</article>
<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>