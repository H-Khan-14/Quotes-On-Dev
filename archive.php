<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="archive-authors">
  <h2>Authors</h2>
  <ul>
    <?php 
      $posts = get_posts (array (
				'posts_per_page' => -1,
			));
      foreach ($posts as $post) {
            ?>
              <li>
								<p>
							<a href = "<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</p>
          </li>
        <?php } ?>
  </ul>
	</div>

<!-- Still need to put the fucking authors/titles list here then style then media query -->
<div class="archive-categories">
  <h2>Categories</h2>
  <ul>
    <?php 
      $args = array (
				'post_type' => 'category',
				'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 0
      );
      $categories = get_categories($args);
      foreach ($categories as $category) {
				$categorylink = home_url('/category/') . $category->slug;
            ?>
              <li>
								<p>
							<a href = "<?php echo $categorylink ?>"><?php echo $category->name ?></a>
							</p>
          </li>
        <?php } ?>
  </ul>
	</div>
	<div class="archive-tags">
  <h2>Tags</h2>
  <ul>
    <?php 
      $args = array (
				'post_type' => 'tag',
				'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 0
      );
      $tags = get_tags($args);
      foreach ($tags as $tag) {
				$taglink = home_url('/tag/') . $tag->slug;
            ?>
              <li>
								<p>
							<a href = "<?php echo $taglink ?>"><?php echo $tag->name ?></a>
							</p>
          </li>
        <?php } ?>
	</ul>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>