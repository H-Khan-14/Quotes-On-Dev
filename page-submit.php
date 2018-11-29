<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <h2>Submit a Quote</h2>
        
        <?php if (is_user_logged_in()) { ?>

			<div class="submit-quote-form">
                    <form>
                        <p class = "author">
                            <label for = "author">Author of Quote<span class="required"></span></label><br>
                            <input type = "text" name = "author" value-size="40" required><br>
						</p>
						<p class = "quote">
                            <label for = "quote">Quote<span class="required"></span></label><br>
                            <textarea name="quote" id="quote-box" cols="40" rows="10" required></textarea><br>
                        </p>
                        <p class = "quote-location">
                            <label for = "quote-location">Where did you find this quote? (e.g. book name)<span class="required"></span></label><br>
                            <input  type = "text" name = "quote-location" value-size="40" required><br>
                        </p>
                        <p class = "quote-url">
                            <label for = "quote-url">Provide the URL of the quote source, if available.<span class="required"></span></label><br>
                            <input type = "text" name = "quote-url" value-size="40" required><br>
                        </p>
                            <input type = "submit" value="Submit Quote" id = "submit">
                    </form>
                </div>
                <?php } else { // not logged in ?>
                <p>Sorry, you must be logged in to submit a quote!</p>
                <p><a href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">Click here to login.</a></p>
                <?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>