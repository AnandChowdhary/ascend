<?php
/**
 * @package Ascend
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		


		<div class="entry-meta">


			<?php ascend_posted_on(); ?>


		</div><!-- .entry-meta -->


	</header><!-- .entry-header -->



	<div class="entry-content">


		<?php the_content(); ?>
		<hr>
		<p class="tweet-me">Have something to add? <a target="_blank" href="http://twitter.com/anandchowdhary">Tweet</a> me!</p>

	</div><!-- .entry-content -->



	<footer class="entry-footer">


		


	</footer><!-- .entry-footer -->



</article><!-- #post-## -->
