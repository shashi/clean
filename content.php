<?php
/**
 * @package sesky
 */
?>
<section id="post-<?php the_ID(); ?>" class="post pure-u-1-3">
<?php //the_post_thumbnail( array(300,170) , array('class' => 'post-cover')); ?>
    <header class="caption">
		
        <?php sesky_avatar(); ?>
         
             <div class="caption-title"><a class="caption-title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
<!--
        <p class="post-meta pure-u-1">
            By <a href="#" class="post-author">Anon</a>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				$categories_list = get_the_category_list( __( ', ', 'sesky' ) );
				if ( $categories_list && sesky_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( ' in %1$s', 'sesky' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

		<?php endif; // End if 'post' == get_post_type() ?>

        </p>
-->
<?php sesky_posted_on(); ?>

    <div class="caption-text">
        <?php //the_content(); ?>
    </div>
    </header>

</section>
<?php /*

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sesky_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sesky' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sesky' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				$categories_list = get_the_category_list( __( ', ', 'sesky' ) );
				if ( $categories_list && sesky_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'sesky' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				$tags_list = get_the_tag_list( '', __( ', ', 'sesky' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'sesky' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"> | </span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sesky' ), __( '1 Comment', 'sesky' ), __( '% Comments', 'sesky' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'sesky' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
