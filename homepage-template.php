<?php
/*
Template Name: Home Page Template
Template Post Type: page
*/

?>
<?php get_header(); ?>

<!-- <main> находится в header.php  -->
        <!-- Start  section Welcome -->
        <section class="welcome">
        <div class="shadow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hello-text">
                            <div class="mt-250"></div>
                            <h3><img src="<?php the_field('shoping-sub-title-img'); ?>" alt=""></h3>
                            <h1><?php the_field('shoping-title'); ?></h1>
                            <p><b><?php the_field('shoping-text'); ?></b></p>
                            <?php if( have_rows('shoping-link') ): ?>
                                  <?php while( have_rows('shoping-link') ): the_row(); ?>
                                     <a href="<?php the_sub_field('link-text'); ?>" target="_blank"><button type="button" class="<?php the_sub_field('link-class'); ?>"><?php the_sub_field('link-text'); ?></button></a>
                                     
                                 <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-200 hidden-sm hidden-xs"></div>
                        <img src="<?php the_field('shoping-img'); ?>" id="fruit" alt="img">
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
                            <h2><?php the_field('product-title'); ?></h2>
                            <img src="<?php the_field('product-title-img'); ?>" alt="Top Product" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="multiple-items">
                    <?php if( have_rows('product-card') ): ?>
                        <?php while( have_rows('product-card') ): the_row(); ?>
                        <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news"><?php the_sub_field('card-news'); ?></div>
                                <img src="<?php the_sub_field('card-img'); ?>" class="card-img-top" alt="img-slider">
                                <div class="card-body">

                                    <h5 class="card-title"><?php the_sub_field('card-name'); ?></h5>
                                   <?php $stars = get_sub_field('card-stars'); ?>
                                    <i class="fas fa-star <?php echo ($stars >= 1) ?  'yellow' :  'dark' ; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 2) ?  'yellow' :  'dark' ; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 3) ?  'yellow' :  'dark' ; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 4) ?  'yellow' :  'dark' ; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 5) ?  'yellow' :  'dark' ; ?>"></i>

                                    <p class="card-text"><?php the_sub_field('card-price'); ?></p>
                                    <a href="<?php the_sub_field('card-link'); ?>" target="_blank"><button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span><?php the_sub_field('card-link-text'); ?></span></button></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
          
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="space-50"></div>
                    <a href="<?php the_field('product-link'); ?>"  target="_blank"><button type="button" class="btn btn-dark my-4"><?php the_field('product-link-text'); ?></button></a>
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
                            <h2><?php the_field('about-title'); ?></h2>
                            <img src="<?php the_field('about-title-img'); ?>" alt="About Fresh Meal" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="about-img">
                        <img src="<?php the_field('about-img'); ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3><?php the_field('about-sub-title'); ?></h3>
                        <?php the_field('about-text1'); ?>
                        <?php the_field('about-text2'); ?>
                        <a href="<?php the_field('about-link'); ?>" target="_blank"><button type="button" class="btn btn-dark my-4"><?php the_field('about-link-text'); ?></button></a>
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
                            <h2><?php the_field('services-title'); ?></h2>
                            <img src="<?php the_field('services-title-img'); ?>" alt="Our Services" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class="box">
                    <div class="row">
                        <?php if( have_rows('services-box') ): ?>
                            <?php while( have_rows('services-box') ): the_row(); ?>
                                <div class="col-md-4">
                                    <div class="<?php the_sub_field('card-color'); ?>">
                                        <div class="<?php the_sub_field('box-rhomb-color'); ?>">
                                           <i class="<?php the_sub_field('box-rhomb-img'); ?>"></i>
                                        </div>                                     
                                        <div class="card-body">
                                            <h5 class="card-title"><?php the_sub_field('services-box-title'); ?></h5>
                                            <?php the_sub_field('services-box-text'); ?>
                                            <a href="<?php the_sub_field('services-box-link'); ?>" target="_blank"><button type="button" class="<?php the_sub_field('link-color'); ?>"><?php the_sub_field('services-box-link-text'); ?></button></a>
                                        </div>
                                    </div>
                                </div>
                           <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section Our -->
        <!-- Start section Big -->
        <section class="big" <?php get_background_image() ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><?php the_field('big-title'); ?></h2>
                            <img src="<?php the_field('big-title-img'); ?>" alt="Big Deals of the Week" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class="big-img1">
                    <img src="<?php the_field('big-img1'); ?>" alt="img">
                </div>
                <div class="row deals" id="time-count">
                    <div class="col-md-2"></div>
                    
                    <?php if( have_rows('count') ): ?>
                        <?php while( have_rows('count') ): the_row(); ?>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body time-count-days">
                            <div class="time-count-val"><?php the_sub_field('count-number'); ?></div>
                            <span class="time-count-text"><?php the_sub_field('count-text'); ?></span>                               
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="col-md-2">
                        <div class="card">
                            <div class="card-body time-count-hours">
                            <div class="time-count-val">00</div>
                            <span class="time-count-text">HOURS</span>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body time-count-mins">
                            <div class="time-count-val">00</div>
                            <span class="time-count-text">MINS</span>                             
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body time-count-secs">
                            <div class="time-count-val">00</div>
                            <span class="time-count-text">SECS</span>                            
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="big-img2">
                    <img src="<?php the_field('big-img2'); ?>" alt="img">
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
                            <h2><?php the_field('blog-title'); ?></h2>
                            <img src="<?php the_field('blog-title-img'); ?>" alt="Lastest News from Blog" class="center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" id="blog-img">
                    <?php if( have_rows('blog-box') ): ?>
                        <?php while( have_rows('blog-box') ): the_row(); ?>

                            <div class="col-md-6 single">
                                <img src="<?php the_sub_field('blog-img'); ?>" alt="clock">
                            <div class="text-blog">
                                <div class="sub-title">
                                    <span><?php the_sub_field('blog-date'); ?></span><span><?php the_sub_field('blog-post'); ?></span><span><?php the_sub_field('blog-comments'); ?></span>
                                </div>
                                <h3><?php the_sub_field('blog-sub-title'); ?></h3>
                                <?php the_sub_field('blog-text'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>   
                    <!-- <div class="col-md-6 single">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/chocolate-moose1.png" alt="moose1">
                        <div class="text-blog">
                        <div class="sub-title">
                        <span>March 13.2021&nbsp;&nbsp;&nbsp;</span> 
                        <span>Posted by <b>Fresh Meal</b> 12 Comments</span>
                        </div>
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur non quo deleniti totam maxime ipsam corrupti architecto quaerat, voluptas, quos temporibus quidem dolore blanditiis velit hic! Perspiciatis molestias exercitationem, quisquam.</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="space-50"></div>
                <a class="btn btn-dark" href="<?php the_field('blog-link'); ?>" role="button">View All</a>
            </div>
        </section>
        <!-- End section Blog -->
        <!-- Start section Subscribe -->
        <section class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="broccoli">
                            <img src="<?php the_field('имя_поля'); ?>" alt="img">
                        </div>
                    </div>
                    <div class="col-md-7" id="form">
                        <h4><?php the_field('имя_поля'); ?></h4>
                        <p><?php the_field('имя_поля'); ?></p>                      
                        <div class="input-group mb-3">
                        <?php echo do_shortcode('[contact-form-7 id="447" title="Contact"]'); ?>          
                        </div> 
                    </div>
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

