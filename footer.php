

</main>

<!-- Start Footer Section -->
<footer>
    <!-- Start section Footer Nav -->
    <section class="footernav" <?php get_background_image() ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h3><?php the_field('footer-about-title', 'option'); ?></h3>
                    <div class="line">
                            <?php the_field('footer-about-text1', 'option'); ?>
                        <?php the_field('footer-about-text2', 'option'); ?>
                        <a href="<?php the_field('footer-about-link', 'option'); ?>" target="_blank"><button type="button" class="btn btn-dark">Read More</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3><?php the_field('footer-navbar-title', 'option'); ?></h3>
                    <div class="line" id="quick-links">
                        <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu',
                            'menu'            => 'Footer Menu',
                            'container'       => 'div',
                            'container_id'    => 'container-footer-menu',
                            'menu_class'      => 'center',
                        ]);
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3><?php the_field('follow-title', 'option'); ?></h3>
                    <div class="line" id="follow">
                        <a href="<?php the_field('follow-facebook', 'option'); ?>"><i class="fab fa-facebook-f"></i>Facebook</a>
                        <a href="<?php the_field('follow-twitter', 'option'); ?>"><i class="fab fa-twitter"></i>Twitter</a>
                        <a href="<?php the_field('follow-google', 'option'); ?>"><i class="fab fa-google-plus-g"></i>Google</a>
                        <a href="<?php the_field('follow-instagram', 'option'); ?>"><i class="fab fa-instagram"></i>Instagram</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3><?php the_field('instagram-title', 'option'); ?></h3>
                    <div class="line">
                        <div class="row row-flex  insta-images">
                            <?php if( have_rows('instagram-img', 'option') ): ?>
                                <?php while( have_rows('instagram-img', 'option') ): the_row(); ?>
                                    <div class="col-4">
                                        <div class="card">                
                                        <a href="<?php the_sub_field('link-img', 'option'); ?>" target="_blank"><img src="<?php the_sub_field('img', 'option'); ?>" alt=""></a>       
                                         </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section Footer Nav -->
    <!-- Start section Footer -->
    <section class="footer">
        <div class="container">
        <?php the_field('copyright', 'option'); ?>
        </div>
    </section>
    <!-- End section Footer  -->
</footer>
<!-- End Footer Section -->
<?php wp_footer(); ?>

</body>

</html>