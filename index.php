<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/components/page', 'title-bar'); ?>

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                
                                get_template_part('template-parts/post/post');
                            }
                        } else {
                            // If no content, include the "No posts found" template.
                            get_template_part('template-parts/post/post', 'none');
                        }
                        get_template_part('template-parts/components/pagination');
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>

<?php get_footer();
