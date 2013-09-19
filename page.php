<?php get_header(); ?>

<div class="pure-g-r static-page" id="layout">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_sidebar('page'); ?>
    <div class="content pure-u-1">
        <!-- A wrapper for all the blog posts -->
        <div class="posts pure-g-r">
            <!-- A single blog post -->
            <section class="post pure-u-1">
                <header class="post-header">
                <br>

                <?php 
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } 
                ?>
                <h2 class="post-title pure-u-1"><?php the_title(); ?></h2>
                </header>

                <div class="post-description pure-u-1">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
    </div>
  <?php endwhile; endif; ?>
</div>

