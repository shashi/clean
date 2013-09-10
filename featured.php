<div class="pure-u-1 featured-excerpt" style="background: url(/wp-content/podcast.jpg)">

  <h1 class="inimage-subhead">Editors' Pick</h1>

<?php
    the_post();
?>

  <div class="surface pure-g-r">
    <div class="pure-u-4-5" class="post-description">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>"><h2 class="post-title pure-u-1"><?php the_title(); ?></h2></a>
    </div>
    <div class="pure-u-1-5 meta-wrap">
            <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                   <div class="post-meta pure-u-1">
                       by <?php the_author_posts_link(); ?> <br> in <?php _categories(', '); ?>
              </div>
          </div>

  </div>

<?php
    /* Restore original Post Data */
    wp_reset_postdata();
?>

</div> <!-- featured-excerpt-->
