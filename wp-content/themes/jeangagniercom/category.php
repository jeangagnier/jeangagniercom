<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
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

<article>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') ); ?>
<div id="container">
<div class='metabar'>
<?php get_template_parts( array( 'parts/shared/meta') ); ?>
</div>
<div class='singlerightbar'>
<?php if ( have_posts() ): ?>
<h2 class="blogtitle">
	<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Interest: <?php echo single_cat_title( '', false ); ?>
<?php }else { ?>
Intérêt: <?php echo single_cat_title( '', false ); ?>
<?php } ?></h2>
<hr class="thickhr">
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2 class="posttitle"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="datecomments"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time><!--  <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>< --></div>
			<div class="excerpt"><?php the_excerpt(); ?> </div><div class="readmore"><a href="<?php echo get_permalink(); ?>">
		<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Read More...
<?php }else { ?>
Poursuivez votre lecture...
<?php } ?>
</a></div>
			<hr class="thinhr"></article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>






