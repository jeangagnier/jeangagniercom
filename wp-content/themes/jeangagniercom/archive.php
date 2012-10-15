<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

<?php if ( is_day() ) : ?>
<h2 class="blogtitle">Day Archives: <?php echo  get_the_date(); ?></h2>							
<?php elseif ( is_month() ) : ?>
<h2 class="blogtitle">Archives</h2>	
<?php elseif ( is_year() ) : ?>
<h2 class="blogtitle">Year Archives: <?php echo  get_the_date(); ?></h2>								
<?php else : ?>
<h2 class="blogtitle">Archives</h2>	
<?php endif; ?>
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
<h2>No posts to display.</h2>
<?php endif; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
