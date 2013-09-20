<?php get_header(); ?>

<div class="pure-g-r" id="layout">
    <div class="content pure-u-1">

        <div class="posts pure-g-r">
      <?php if (have_posts()) { ?>

            <h1 class="content-subhead recent pure-u-1"><span>
      <?php
          $post = $posts[0]; // Hack. Set $post so that the_date() works.
          if (is_category()) {
              echo "Category: ";
              single_cat_title();
                  
          } elseif (is_tag() ) {
              echo "Posts Tagged &#8216;";
              single_tag_title();
              echo "&#8217;";
          } elseif (is_day()) {
              echo "Archive for ";
              the_time('F jS, Y');
          } elseif (is_month()) {
              echo "Archive for ";
              the_time('F, Y');
          } elseif (is_year()) {
              echo "Archive for ";
              the_time('Y');
          } elseif (is_author()) {
              echo "Author Archive";
          } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
              echo "Archives";
          } ?>
            </span></h1>
        <?php
      }
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
            <section class="pure-u-1">
                <h2>Nothing here yet.</h2>
                <p><?php _e('Nothing to show here.'); ?></p>
            </section>
        <?php endif; ?>
    </div>

<?php
    get_sidebar(); 
?>

<?php get_footer(); ?>
</div>
