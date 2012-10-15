<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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
<div class='metabar'>
<?php get_template_parts( array( 'parts/shared/meta') ); ?>
</div>
<div class='singlerightbar'>
	<?php if ( have_posts() ): ?>
<h2 class="blogtitle">
<a href="blog">	<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Citizen Gagnier's Writings
<?php }else { ?>
Écrits du citoyen Gagnier
<?php } ?></h2></a>
<hr class="thickhr">
<ol>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2 class="posttitle"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="datecomments"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time></div>
			<div class="postcopy"><?php the_content(); ?> </div><div class="readmore"><a href="<?php echo get_permalink(); ?>">
			
</a></div>
			<hr class="thinhr">
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
<!-- <div class="olderarticles"><em>
	<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Older Articles...
<?php }else { ?>
Articles précédents...
<?php } ?></em>
</div> -->
	</div>
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>

