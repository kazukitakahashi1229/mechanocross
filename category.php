<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <h1>お知らせ</h1>
            <p class="font-en">News</p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</div>

<main class="">
    <div class="container flex">

        <section class="archive__tab">
            <ul class="flex">
                <li><a class="font-en" href="<?php echo esc_url( home_url('/') ); ?>news/">All</a></li>
                <li><a class="font-en <?php if(is_category('notice')): ?>active<?php endif; ?>" href="<?php echo esc_url( home_url('/') ); ?>news/category/notice/">News</a></li>
                <li><a class="font-en <?php if(is_category('press_release')): ?>active<?php endif; ?>" href="<?php echo esc_url( home_url('/') ); ?>news/category/press_release/">Press Release</a></li>
            </ul>
        </section>

        <section class="archive__list">
            <ul class="flex">

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                <li class="archive__list__item js-anime anime-fadeInUp">
                    <a href="<?php the_permalink(); ?>" class="flex">
                        <div class="archive__list__item__info flex">
                            <time class="font-en"><?php the_time('Y.m.d'); ?></time>
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                // 最初のカテゴリを取得してリンクなしで表示
                                $first_category = $categories[0];
                                echo '<span class="font-en t-main">' . esc_html( $first_category->name ) . '</span>';
                            }
                            ?>
                        </div>
                        <h3 class=""><?php the_title(); ?></h3>
                    </a>
                </li>

                <?php
                    endwhile;
                    echo '</ul>';
                endif; ?>
                    

        </section>
        <?php 
            echo '<div class="archive__list__pagination">';
            // ページネーションの表示
            the_posts_pagination(array(
                'prev_text' => '',
                'next_text' => '',
            ));
            echo '</div>';
        ?>
    </div>
</main>

<?php get_footer(); ?>