<?php
/**
 * Template part for posts page if no post found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Buson
 */
?>

<article class="blog_item">

  <div class="blog_details">
    <h2>
      <?php esc_html_e('Nothing Found', 'buson'); ?>
    </h2>
    <?php
    if (is_home() && current_user_can('publis_posts')):
      printf(
          '<p>'.
        wp_kses(
            __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'noonpost'),
            array(
            'a' => array(
              'href' => array(),
            )
          )
        ).
        '</p>',
          esc_url(admin_url('post-new.php'))
      );
      elseif (is_search()):
      ?>
    <p>
      <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'buson'); ?>
    </p>
    <?php
        get_search_form();
      else: ?>
    <p>
      <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'buson'); ?>
    </p>
    <?php
        get_search_form();
      endif;
      ?>
  </div>
</article>