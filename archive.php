<?php
/*
Template Name: archive
Template Post Type: post,page
*/
?>

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
                <li><a class="font-en active" href="<?php echo esc_url( home_url('/') ); ?>news/">All</a></li>
                <li><a class="font-en" href="<?php echo esc_url( home_url('/') ); ?>news/category/notice/">News</a></li>
                <li><a class="font-en" href="<?php echo esc_url( home_url('/') ); ?>news/category/press_release/">Press Release</a></li>
            </ul>
        </section>

        <section class="archive__list">
            <ul class="flex">
                <?php
                // 現在のページ番号を取得
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // WP_Query で投稿を取得
                $args = array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => 6, // 表示する投稿数
                    'paged' => $paged, // 現在のページ番号
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
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
        echo '<div class="archive__list__pagination js-anime anime-fadeInUp">';
                    // ページネーションの表示
                    $args = array(
                        'total' => $the_query->max_num_pages,
                        'prev_text' => '',
                        'next_text' => '',
                    );
                    echo paginate_links($args);
                    echo '</div>';

                    wp_reset_postdata(); // ループ後のクエリをリセット
                ?>
    </div>
</main>

<?php get_footer(); ?>