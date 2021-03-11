<?php
/*
Template Name: Home Page Template




*/


?>
<?php get_header(); ?>

<!-- <main> находится в header.php  -->
        <!-- Start  section Welcome -->
        <section class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hello-text">
                            <div class="mt-250"></div>
                            <h3><img src="<?php echo get_template_directory_uri(); ?>/img/Welcome To FreshMeal.png" alt=""></h3>
                            <h1>The World Best <marc>Shoping</marc> Website</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Excepturi perferendis, magni. Animi eos voluptas perferendis.</p>
                            <a href="http://wordpress.local/shoping" target="_blank"><button type="button" class="btn btn-warning">Read More</button></a>
                            <button type="button" class="btn btn-dark">Shop Now</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-200 hidden-sm hidden-xs"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/basket.png" class="fruit" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- End  section Welcome -->
  
        <!-- Start section Slider -->
        <section class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Top Product</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="Top Product" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="multiple-items">
                        <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news">NEWS</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/43-1.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Mushroom Salad</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$125</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                         <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news">NEWS</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/meat2.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Chiken Biryani</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$175</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                         <div class="slider-item">
                            <div class="card" style="width:max-content;">
                                <div class="news">NEWS</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/43-3.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Beaf Bun Burger</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$155</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                         <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news">NEWS</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/chiken.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Chiken Biryani</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$175</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                         <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news">NEWS</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/soup.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Mushroom Salad</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$125</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                         <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/meat.png" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title">Beaf Bun Burger</h5>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star yellow"></i>
                                    <i class="fas fa-star dark"></i>
                                    <p class="card-text">$155</p>
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span>Add to Card</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="space-50"></div>
                    <a href="http://wordpress.local/product" target="_blank"><button type="button" class="btn btn-dark my-4">View More</button></a>
                </div>
            </div>
        </section>
        <!-- End section Slider -->
        <!-- Start section About -->
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>About Fresh Meal</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="About Fresh Meal<" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>Freshmeal is a long established fact that a reader <br>will be distracted.</h3>
                        <p>Contrary to popular betief. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestias labore blanditiis magnam repellendus placeat corrupti commodi quia consequatur nesciunt ipsa impedit dolorum.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Excepturi perferendis, magni.</p>
                        <a href="http://wordpress.local/about" target="_blank"><button type="button" class="btn btn-dark my-4">Read More</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section About -->
        <!-- Start section Our -->
        <section class="our">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Our Services</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="Our Services" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class="box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="rhombus">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Free Home Delivery</h5>
                                    <p class="card-text">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Ipsam quibusdam numquam vel.</p>
                                    <a href="http://wordpress.local/delivery" target="_blank"><button type="button" class="btn btn-dark">Read More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card yellow">
                                <div class="rhombus">
                                    <i class="fas fa-suitcase"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <marc>30 Days Return Services</marc>
                                    </h5>
                                    <p class="card-text">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Ipsam quibusdam numquam vel.</p>
                                    <a href="http://wordpress.local/services" target="_blank"><button type="button" class="btn btn-warning">Read More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="rhombus">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Money Back Guaranted</h5>
                                    <p class="card-text">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Ipsam quibusdam numquam vel.</p>
                                      <a href="http://wordpress.local/money" target="_blank"><button type="button" class="btn btn-dark">Read More</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section Our -->
        <!-- Start section Big -->
        <section class="big">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Big Deals of the Week</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="Big Deals of the Week" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class="big-img1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cream.png" alt="img">
                </div>
                <div class="row deals">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <p><b>02</b><br>DAYS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <p><b>24</b><br>HOURS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <p><b>55</b><br>MINS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <p><b>58</b><br>SECS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="big-img2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/berry1.png" alt="img">
                </div>
            </div>
        </section>
        <!-- End section Big -->
        <!-- Start section Blog -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Lastest News from Blog</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="Lastest News from Blog" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clock.png" alt="">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur non quo deleniti totam maxime ipsam corrupti architecto quaerat, voluptas, quos temporibus quidem dolore blanditiis velit hic! Perspiciatis molestias exercitationem, quisquam.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/chocolate-moose1.png" alt="">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur non quo deleniti totam maxime ipsam corrupti architecto quaerat, voluptas, quos temporibus quidem dolore blanditiis velit hic! Perspiciatis molestias exercitationem, quisquam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="space-50"></div>
                <a class="btn btn-dark" href="<?php echo site_url('/blog'); ?>" role="button">View All</a>
            </div>
        </section>
        <!-- End section Blog -->
        <!-- Start section Subscribe -->
        <section class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="broccoli">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/broccoli1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-md-7" id="form">
                        <h4>Subscribe to your newsletter</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Doloribus rerum, atque modi explicabo doloremque cupiditate.</p>                      
                        <div class="input-group mb-3">
                        <?php echo do_shortcode('[contact-form-7 id="447" title="Contact"]'); ?>          
                        </div> 
                    </div>
        </section>
        <!-- End section Subscribe -->
        <!-- Start section Map -->
        <section class="map">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Contact US</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hr.png" alt="Contact Us" class="center">
                        </div>
                        <div id="contact">
                            <div class="connection">
                                <div class="rhombus2">
                                   <i class="fas fa-phone-alt"></i>
                                </div>
                                <ul>
                                    <li><b>Call US:</b></li>
                                    <li><a href="tel:+380686073687">+38(068)6073687</a></li>
                                </ul>
                            </div>
                            <div class="connection">
                                <div class="rhombus2">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <ul>
                                    <li><b>E-mail:</b></li>
                                    <li><a href="mailto:voicehovskyy@gmail.com">voicehovskyy@gmail.com</a></li>
                                </ul>
                            </div>
                            <div class="connection">
                                <div class="rhombus2">
                                    <i class="far fa-clock"></i>
                                </div>
                                <ul>
                                    <li><b>Working Hours:</b></li>
                                    <li>Mon-Sat(8:00am-12:00am)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167.57065209781598!2d35.22085249913962!3d47.77891878027354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5f0f1f68ee71%3A0xfb42f9d0e9087528!2sPolygon!5e0!3m2!1sru!2sua!4v1614707223621!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section  Map -->

<!-- </main> находится в footer.php  -->
<?php get_footer(); ?>

