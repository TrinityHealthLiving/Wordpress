<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package anissa
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) : ?>
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>
    <?php endwhile; ?>
    <?php the_posts_navigation(); ?>
    <?php else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </main>
  <!-- #main --> 
	<script type="text/javascript" src="http://trinityhealthandliving.com.au/wp-content/themes/anissa/js/owl.carousel.js?ver=20120206"></script>
</div>
<?php
/**
 * Template part for displaying posts.
 *
 * @package anissa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-cat">
			&mdash; <?php the_category( ', ' ) ?> &mdash;
		</div><!-- .entry-cat -->
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	<div class="entry-datetop">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
		</div><!-- .entry-datetop -->
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'anissa-home' ); ?></a>         
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-excerpt -->

</article><!-- #post-## -->
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
