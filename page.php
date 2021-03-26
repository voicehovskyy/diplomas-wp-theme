<?php get_header(); ?>

<div class="container">


    <div class="page-content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">
                <div class="py-5">
                    <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
                    
                </div>
                    <div class="entrytext">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                      
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
 

    </div>
</div>


<?php get_footer(); ?>