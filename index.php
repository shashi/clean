<?php get_header(); ?>

<div class="pure-g-r" id="layout">
    <div class="content pure-u-1">
        <?php if (is_home()) {
            require(dirname(__FILE__) . '/featured.php');
        } ?>

        <div class="posts pure-g-r">
        <?php if (is_home()) { ?>
            <h1 class="content-subhead recent pure-u-1">
                <span>Recent Posts</span>
            </h1>
        <?php } ?>
        <?php 
            if (have_posts()):
            while (have_posts()):
                the_post();
        ?>

            <section class="post pure-u-1-2">
              <header class="post-header">
                <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                <a href="<?php the_permalink(); ?>">
                   <h2 class="post-title pure-u-1"><?php the_title(); ?></h2>
                </a>
                <?php _posted_on(); ?>
              </header>

              <div class="post-description pure-u-1">
                <?php the_excerpt(); ?>
              </div>
            </section>
        <?php endwhile;
            clean_content_nav('pagination');
        else: ?>
            <section class="pure-u-1 four-naught-four">
                <h2>Hang in there!</h2>
                <p><?php _e('404: Looks like what you are looking for doesn\'t yet exist.'); ?></p>
            </section>
        <?php endif; ?>
    </div>

<?php
    get_sidebar(); 
?>

<?php get_footer(); ?>
