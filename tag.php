<?php
/**
 * The template for displaying archive pages.
 * 
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
 <ul>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
              <li>
              <div class="dotted-line">
                <div class="entry-content">
                  <p> <?php the_content(); ?></p>
                </div>
                <!-- .entry-content -->
                <div class=entry-meta>
                  <h2 class="entry-title">- <?php the_title(); ?></h2>
                  <span class="source">, <a href="<?php echo get_post_meta(get_the_ID(),'_qod_quote_source_url', TRUE) ?>" target="_blank"><?php echo get_post_meta(get_the_ID(),'_qod_quote_source', TRUE) ?></a></span>
                </div>
                <!-- .entry-meta -->
              </div>
          </li>
            <?php endwhile; ?>
        </ul>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>