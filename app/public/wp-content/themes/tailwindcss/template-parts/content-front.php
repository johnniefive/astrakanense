<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tailwindcss
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php tailwindcss_post_thumbnail(); ?>

	<div class="grid grid-cols-6 gap-4">
	  <div class="col-start-2 col-span-4 ...">1</div>
	  <div class="col-start-1 col-end-3 ...">2</div>
	  <div class="col-end-7 col-span-2 ...">3</div>
	  <div class="col-start-1 col-end-7 ...">4</div>
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
