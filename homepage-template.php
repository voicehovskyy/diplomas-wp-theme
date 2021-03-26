<?php
/*
Template Name: Home Page Template
Template Post Type: post, page, product
*/

?>
<?php get_header(); ?>

<!-- <main> находится в header.php  -->
<!-- Start  section Welcome -->
<section class="welcome">
    <div class="nav-shadow"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hello-text">
                    <div class="mt-250"></div>
                    <h3><img src="<?php the_field('shoping-sub-title-img'); ?>" alt=""></h3>
                    <h1><?php the_field('shoping-title'); ?></h1>
                    <p><b><?php the_field('shoping-text'); ?></b></p>
                    <?php if (have_rows('shoping-link')) : ?>
                        <?php while (have_rows('shoping-link')) : the_row(); ?>
                            <a href="<?php the_sub_field('link-url'); ?>" target="_blank"><button type="button" class="<?php the_sub_field('link-class'); ?>"><?php the_sub_field('link-text'); ?></button></a>

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
                <?php if (have_rows('product-card')) : ?>
                    <?php while (have_rows('product-card')) : the_row(); ?>
                        <div class="slider-item">
                            <div class="card" style="width: max-content;">
                                <div class="news"><?php the_sub_field('card-news'); ?></div>
                                <img src="<?php the_sub_field('card-img'); ?>" class="card-img-top" alt="img-slider">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_sub_field('card-name'); ?></h5>
                                    <?php $stars = get_sub_field('card-stars'); ?>
                                    <i class="fas fa-star <?php echo ($stars >= 1) ?  'yellow' :  'dark'; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 2) ?  'yellow' :  'dark'; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 3) ?  'yellow' :  'dark'; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 4) ?  'yellow' :  'dark'; ?>"></i>
                                    <i class="fas fa-star <?php echo ($stars >= 5) ?  'yellow' :  'dark'; ?>"></i>
                                    <p class="card-text"><?php the_sub_field('card-price'); ?></p>
                                    <a href="<?php the_sub_field('card-link'); ?>" target="_blank"><button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i><span><?php the_sub_field('card-link-text'); ?></span></button></a>
                                </div>
                            </div>
							 <div class="nav-shadow"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="space-50"></div>
            <a href="<?php the_field('product-link'); ?>" target="_blank"><button type="button" class="btn btn-dark my-4"><?php the_field('product-link-text'); ?></button></a>
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
                <h4><?php the_field('about-sub-title'); ?></h4>
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
                <?php if (have_rows('services-box')) : ?>
                    <?php while (have_rows('services-box')) : the_row(); ?>
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
							 <div class="nav-shadow"></div>
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

            <?php if (have_rows('count')) : ?>
                <?php while (have_rows('count')) : the_row(); ?>
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
            <?php
             global $post;
             $query = new WP_Query([
                'posts_per_page' => 2,
                'orderby'        => 'comment_count',
             ]);
             if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
             ?> 
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <div class="col-md-6 single">
                        <?php echo get_the_post_thumbnail(); ?>
                        <div class="text-blog">
                            <div class="sub-title">
                                <span><?php the_time('F jS, Y') ?></span><span><?php the_author_link() ?></span><span><?php get_comments_number($post_id) ?></span>
                                <h3><?php the_title() ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="space-50"></div>
                                <a class="btn btn-dark" href="<?php the_permalink(); ?>" role="button">View All</a>
                            </div>
                        </div>
						<div class="nav-shadow"></div>
                    </div>
            <?php }
            } else {
                // Постов не найдено
            }
            wp_reset_postdata(); // Сбрасываем $post
            ?>
		</div>
		 
	</div>
</section>
<!-- End section Blog -->
<!-- Start section Subscribe -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="broccoli">
                    <img src="<?php the_field('subscribe-img'); ?>" alt="img">
                </div>
            </div>
            <div class="col-md-7" id="form">
                <h4><?php the_field('subscribe-title'); ?></h4>
                <?php the_field('subscribe-text'); ?>
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
                    <h2><?php the_field('contact-title'); ?></h2>
                    <img src="<?php the_field('contact-title-img'); ?>" alt="Contact Us" class="center">
                </div>
                <div id="contact">
                    <div class="connection">
                        <div class="rhombus2">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <ul>
                            <li><b>Call US:</b></li>
                            <li><a href="tel:<?php the_field('contact-call'); ?>"><?php the_field('contact-call'); ?></a></li>
                        </ul>
                    </div>
                    <div class="connection">
                        <div class="rhombus2">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <ul>
                            <li><b>E-mail:</b></li>
                            <li><a href="mailto:<?php the_field('contact-email'); ?>"><?php the_field('contact-email'); ?></a></li>
                        </ul>
                    </div>
                    <div class="connection">
                        <div class="rhombus2">
                            <i class="far fa-clock"></i>
                        </div>
                        <ul>
                            <li><b>Working Hours:</b></li>
                            <li><?php the_field('contact-working'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $location = get_field('contact-map');
                if ($location) {

                    // Loop over segments and construct HTML.
                    $address = '';
                    foreach (array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k) {
                        if (isset($location[$k])) {
                            $address .= sprintf('<span class="segment-%s">%s</span>, ', $k, $location[$k]);
                        }
                    }
                    // Trim trailing comma.
                    $address = trim($address, ', ');

                    // Display HTML.
                    echo '<p>' . $address . '.</p>';
                } ?>
                <?php
                $location = get_field('contact-map');
                if ($location) : ?>
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End section  Map -->

<!-- </main> находится в footer.php  -->
<?php get_footer(); ?>