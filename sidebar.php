<?php
  /**
   * The sidebar containing the main widget area
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package NoonPost
   */
  if (!is_active_sidebar('blog-sidebar')) {
      return;
  }
?>
<div class="blog_right_sidebar">
  <?php dynamic_sidebar('blog-sidebar');?>
</div>