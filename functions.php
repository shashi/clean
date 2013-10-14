<?php

// Enable featured images.
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'clean_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function clean_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?> pure-u-1 pagination">

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'clean' ) . '</span> %title' ); ?>
		<?php next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'clean' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'clean' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'clean' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // clean_content_nav
/**
 * Returns true if a blog has more than 1 category
 */
function _categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so clean_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so clean_categorized_blog should return false
		return false;
	}
}

if (! function_exists('_categories') ) :
/**
 * Prints HTML of comma separated categories
 */
function _categories () {
     if ( 'post' == get_post_type() ) {
            $categories_list = get_the_category_list( __( ', ', 'clean' ) );

            if ( $categories_list && _categorized_blog() ) {
        ?>
        <span class="cat-links">
            <?php echo $categories_list; ?>
        </span>

        <?php } // End if categories ?>
    <?php } // End if categories
}
endif;

if ( ! function_exists( '_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */

function _posted_on() {
    echo '<p class="post-meta pure-u-1">';
    printf( __( 'By ', 'clean' ));
    the_author_posts_link();
    echo __(' in ') . '';
    _categories();
    echo '</p>';
}
endif;
function frontpage_limit($limit){
    $perPage = 11; // The number of posts per page

    $page = $GLOBALS['wp_query']->query_vars['paged'];
    $is_category = $GLOBALS['wp_query']->is_category;

    if(!$page){
        $page = 1;
    }

    if(is_home()){
        return "LIMIT ".(($page-1)*$perPage).", ".$perPage;
    }

    return $limit;
}

add_filter('post_limits', 'frontpage_limit');
