<?php get_header(); ?>

<div class="pure-g-r page" id="layout">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_sidebar('single'); ?>
    <div class="content pure-u-1">
        <!-- A wrapper for all the blog posts -->
        <div class="posts pure-g-r">
            <!-- A single blog post -->
            <section class="post pure-u-2-3">
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

        <div class="fb-container">
            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="100" data-layout="button_count" data-show-faces="false" data-send="false"></div>
<br>
<br>
            <div class="fb-comments" data-href="<?php the_permalink(); ?>"></div>
</div>
            </section>
    <?php /* <div class="pure-u-1-5 distractions">
            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="100" data-layout="button_count" data-show-faces="false" data-send="false"></div>
            </div> */?>
        </div>
        <?php get_footer(); ?>
    </div>
  <?php endwhile; endif; ?>
</div>
