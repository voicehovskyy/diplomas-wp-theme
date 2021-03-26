<?php get_header();


?>
<div class="container my-4">

    <!-- Проверка наличия записей в цикле -->
    <?php if (have_posts()) : ?>

        <!-- Начало цикла -->
        <?php while (have_posts()) : the_post(); ?>
            <!-- Цикл WordPress -->
            <!-- Здесь уже определилась переменная $post, -->
            <!-- на основе которой будет строится дальнейший код. -->
            <!-- $post будет меняться для каждого поста while( have_posts() ). -->
            <!-- $post нужна, чтобы работали теги шаблона: in_category('3'), the_permalink() и т.д. -->

            <div class="post">
                <!-- Выводим заголовок поста, как ссылку на сам пост. -->
                <h2>
                    <a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>">
                        <?php the_title(); ?>     
                    </a>
                </h2>
                <?php if ( has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php } ?>
                <!-- Выводим дату поста и ссылку на другие записи автора. -->
                <small><?php the_time('F jS, Y') ?> Автор: <?php the_author_posts_link() ?></small>
                
                <!-- Выводим количество комментариев поста -->
               <?php $num_comments = get_comments_number(); // возвратит число

                   if ( comments_open() ) {
	                    if ( $num_comments == 0 ) {
		                   $comments = __('No Comments');
	                    } elseif ( $num_comments > 1 ) {
		                   $comments = $num_comments . __(' Comments');
	                    } else {
		                  $comments = __('1 Comment');
	                    }
                    } ?>
              
                <!-- Выводим текст поста в теге div. -->
                <div class="entry">
                    <?php the_content(); ?>
                </div>

                <!-- Выводим категории поста, через запятую. -->
                <p class="postmetadata">Расположено в <?php the_category(', '); ?></p>

                <?php comments_template(); ?> 



            </div> <!-- закрываем основной тег div -->

            <!-- Отсюда цикл начинает повторятся, если есть еще посты -->
            <!-- Останавливаем цикл (endwhile), -->
        <?php endwhile; ?>
        <!-- Полное окончание цикла. -->

        <!-- Если записей в цикле нет — цикл не сработал (else) -->
    <?php else : ?>

        <p>Нет постов в цикле.</p>

    <?php endif; ?>


</div>


<?php get_footer(); ?>