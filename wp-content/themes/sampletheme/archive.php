<?php get_header(); ?>

<div class="wrap">
	<header class="page-header">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header><!-- .page-header -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content' );
				endwhile;

				the_posts_pagination( array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
				) );
			else :
				echo '記事はありません。';
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();