<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buson
 */
?>

<article class="blog_item">
  <div class="blog_item_img">
    <?php the_post_thumbnail('full', ['class' => 'card-img rounded-0', 'title' => 'Post featured image']); ?>
    <a href="#" class="blog_item_date">
      <h3>
        <?php echo get_the_date('d'); ?>
      </h3>
      <p>
        <?php echo get_the_date('M'); ?>
      </p>
    </a>
  </div>
  <div class="blog_details">
    <a class="d-inline-block" href="single-blog.html">
      <h2>
        <?php the_title(); ?>
      </h2>
    </a>
    <p>
      <?php the_excerpt() ?>
    </p>
    <ul class="blog-info-link">
      <li><i class="fa fa-user"></i> <?php the_category(',') ?>
      </li>
      <li>
        <a href="<?php echo get_comments_link(); ?>">
          <i class="fa fa-comments"></i>
          <?php comments_number(); ?>
        </a>
      </li>
    </ul>
  </div>
</article>