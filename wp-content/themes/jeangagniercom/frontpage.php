<?php
/**
 * Template Name: Front Page
 *
 */
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="container">
<div class='leftbar'>
<?php get_template_parts( array( 'parts/shared/bio' ) ); ?>
</div>
<div class='rightbar'>
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
<?php query_posts('posts_per_page=5'); ?>
<?php if (have_posts()) : $count = 0; ?>
<?php while (have_posts()) : the_post(); $count <= 4; $count++; ?> 
	<li>
		<article>
			<h2 class="posttitle"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="datecomments"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time></div>
			<div class="excerpt"><?php the_excerpt(); ?> </div><div class="readmore"><a href="<?php echo get_permalink(); ?>">
			<?php
if( qtrans_getLanguage() == 'en' ){ ?>
Read More...
<?php }else { ?>
Poursuivez votre lecture...
<?php } ?>
</a></div>
			<hr class="thinhr">
		</article>
	</li>
<?php endwhile; ?>
<?php endif; ?>
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


