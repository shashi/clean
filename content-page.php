<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sesky
 */
?>

<section id="post-<?php the_ID(); ?>" class="post pure-u-1-2">
    <header class="post-header">
        <img class="post-avatar"
             alt="Tilo Mitra's avatar" src="http://purecss.io/img/common/tilo-avatar.png"
             height="48" width="48">

             <h2 class="post-title pure-u-1"><?php the_title(); ?></h2>

        <p class="post-meta pure-u-1">
            By <a href="#" class="post-author">Tilo Mitra</a> under <a class="post-category post-category-design" href="#">CSS</a> <a class="post-category post-category-pure" href="#">Pure</a>
        </p>
    </header>

    <div class="post-description pure-u-1">
        <?php the_content(); ?>
    </div>
</section>
<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sesky' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'sesky' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
 */
