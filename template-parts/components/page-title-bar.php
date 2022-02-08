<!-- slider Area Start-->
<?php if (wp_title('', false) != ''):?>
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center"
        style="background-image: url(<?php get_template_directory_uri() . '/assets/img/breadcumb.jpg'?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>
                            <?php
                                wp_title('');
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!-- slider Area End-->