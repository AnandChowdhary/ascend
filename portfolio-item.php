<?php
/**
 * Template name: Portfolio Item
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<header class="entry-header">
		<h1 class="entry-title">Portfolio</h1>
</header>

<p>I solve problems using HTML5, CSS3 (Sass) JavaScript, PHP and Python by designing identities and media, developing websites and apps, and writing about &ldquo;experience design.&rdquo; Here, you&rsquo;ll find my freelance work and personal projects. You can find my FOSS on <a href="https://github.com/AnandChowdhary/" target="_blank">Github</a>.</p>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_sidebar(); ?>




</div><!-- #content -->




<div class="container" style="max-width: 960px !important; margin-top: 3em">



		<?php
$args = array( 'posts_per_page' => 9000, 'category_name'  => 'Portfolio' );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) :
  setup_postdata( $post ); ?>
<div class="row" style="margin-bottom: 0">
<figure class="one-half column" style="margin-right: 0; margin-top: 0; margin-bottom: 0">

<?php
 echo '<p><a href="'; the_permalink(); echo '">';
 echo '<img style="width: 100%" src="';
 echo catch_that_image();
 echo '" alt="" />';
 echo '</a></p>';
?>

</figure>

<div class="one-half column" style="float: right">

<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<?php the_excerpt(); ?>

<p><a href="<?php the_permalink(); ?>">Learn More &rarr;</a>

</div>
</div>

<?php endforeach; 
wp_reset_postdata(); ?>


</div>


	<footer id="colophon" class="site-footer" role="contentinfo">


		<div class="container">

		<p><a href="http://madewithlove.org.in" target="_blank">Made with <span class="hearts">&hearts;</span> in India</a></p>

		</div>


	</footer><!-- #colophon -->


</div><!-- #page -->



<?php wp_footer(); ?>



<script>


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga("create", "UA-39298323-1", "auto");
ga("send", "pageview");


</script>


</body>



</html>