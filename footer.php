</main>

<!-- Start Footer Section -->
<footer>
    <!-- Start section Footer Nav -->
    <section class="footernav">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h3>About US</h3>
                    <div class="line">
                        <p>It was popularised in 1960 with the relese of Latest shoots contaning</p>
                        <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <a href="http://wordpress.local/about" target="_blank"><button type="button" class="btn btn-dark">Read More</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3>Quick Links</h3>
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
                    <h3>Follow US</h3>
                    <div class="line" id="follow">
                        <a href="https://www.facebook.com/profile.php?id=100024404018785"><i class="fab fa-facebook-f"></i>Facebook</a>
                        <a href="https://twitter.com/home?lang=ru"><i class="fab fa-twitter"></i>Twitter</a>
                        <a href="https://ru.wikipedia.org/wiki/Google"><i class="fab fa-google-plus-g"></i>Google</a>
                        <a href="https://www.instagram.com/voitsekhovskayamarina/?hl=ru"><i class="fab fa-instagram"></i>Instagram</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3>Instagram</h3>
                    <div class="line">
                        <div class="row row-flex  insta-images">
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/photo2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/soup1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/photo6.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/photo7.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                <a href="http://wordpress.local/gallery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.3.png" alt=""></a>
                                </div>
                            </div>
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
            <p>Copyright © 2021 All rights reserved by <marc>FreshMeal</marc> Designed by <marc>ThemeDesk</marc>
            </p>
        </div>
    </section>
    <!-- End section Footer  -->



</footer>



<!-- End Footer Section -->
<?php wp_footer(); ?>

</body>

</html>