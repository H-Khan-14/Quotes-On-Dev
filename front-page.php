<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php
   $args = array( 
     'post_type' => 'post', 
     'posts_per_page' => '1',
     'orderby' => 'rand' );
   $quotes = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $quotes->have_posts() ) : ?>
   <?php while ( $quotes->have_posts() ) : $quotes->the_post(); ?>
      <?php /* Content of the queried post results goes here */ ?>
    
      <div class="entry-content">
  <p> <?php the_content(); ?></p>
</div>
<!-- .entry-content -->
<div class=entry-meta>
  <h2 class="entry-title">- <?php the_title(); ?></h2>
  <span class="source">, <a href="<?php echo get_post_meta(get_the_ID(),'_qod_quote_source_url', TRUE) ?>" target="_blank"><?php echo get_post_meta(get_the_ID(),'_qod_quote_source', TRUE) ?></a></span>
</div>
<!-- .entry-meta -->
<button class="show-another">Show Me Another!</button>
      <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
<p class="quote-area">This is where the quote of destiny goes</p>
		<h2 class="author-area">-Haseeb Khan</h2>
		<button class="show-another">Show Me Another!</button>
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
