<?php
/**
	 * @package Ascend
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
<?php ascend_posted_on(); ?>
</div><!-- .entry-meta -->
<?php endif; ?>


</header><!-- .entry-header -->

<div class="entry-content">


<?php
/* translators: %s: Name of current post */
the_excerpt( sprintf(
__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ascend' ),
the_title( '<span class="screen-reader-text">"', '"</span>', false )
) );
?>
<?php
wp_link_pages( array(
'before' => '<div class="page-links">' . __( 'Pages:', 'ascend' ),
'after'  => '</div>',
) );
?>

<p><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
<hr>

</div><!-- .entry-content -->

<footer class="entry-footer">




</footer><!-- .entry-footer -->



</article><!-- #post-## -->