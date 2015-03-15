<?php
/**
 * Template name: Blog Item
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<header class="entry-header">
		<h1 class="entry-title">Blog</h1>
</header>

<p>I solve problems using HTML5, CSS3 (Sass) JavaScript, PHP and Python by designing identities and media, developing websites and apps, and writing about &ldquo;experience design.&rdquo; Here, you&rsquo;ll find my freelance work and personal projects.</p>


<hr>


<?php
$args = array('posts_per_page' => 9000,  'category_name'  => 'Blog' );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) :
  setup_postdata( $post ); ?>

<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<p class="posted-on"><?php the_date(); ?></p>

<?php the_excerpt(); ?>

<p><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>

<hr>

<?php endforeach; 
wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_sidebar(); ?>




<?php get_footer(); ?>