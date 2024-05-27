<?php 
/*
* 
* Template Name: Front Page
* 
*/
?>
<?php get_header(); ?>


<!-- Start MV -->
<section class="page__top__mv">
    <div class="container">
        <div class="page__top__mv__circles">
            <div class="line sm">
                <div class="circle"></div>
            </div>
            <div class="line md">
                <div class="circle"></div>
            </div>
            <div class="line lg">
                <div class="circle"></div>
            </div>
        </div>
        <div class="page__top__mv__main flex">
            <div class="page__top__mv__scroll">
                <span>scroll down</span>
                <div class="page__top__mv__scroll__bar"></div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-main-ver.svg" alt="ロゴ">
            <div class="page__top__mv__main__title grid">
                <h1>Our Innovative <br>Chemical Solutions <br>For the Future of Industry</h1>
                <p>メカノケミカル有機合成で産業に変革を</p>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</section>

<!-- フェーズ3までの暫定措置 -->
<!-- <div class="top-newsbanner">
    <a href="<?php echo esc_url( home_url('/') ); ?>business-model/#anchro__join-project">
        <div class="top-newsbanner__inner">
            <div class="top-newsbanner__date">2024/02/15</div>
            <div class="top-newsbanner__category">News</div>
            <br class="show_sp">
            <p class="top-newsbanner__text">「メカノケミカル有機合成実装研究会」<br class="show_sp">募集開始</p>
        </div>
    </a>
</div> -->

<!-- Start ABOUT -->
<section class="page__top__about">
    <div class="container">
        <div class="page__top__about__cont flex">
            <div class="page__top__about__cont__left">
                <div class="section__title left grid js-anime anime-fadeInUp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                    <h2 class="">私たちについて</h2>
                    <p class="font-en t-main">About Us</p>
                </div>
                <div class="page__top__about__cont__left__text js-anime anime-fadeInUp">
                    <h3>メカノクロスはメカノケミカル<br class="show_sp">有機合成技術で<br class="hide_sp">挑戦する企業です。</h3>
                    <p>クリーンな社会実現・新たな価値創造が可能な北海道大学発 「メカノケミカル有機合成技術」を社会実装し、ステークホルダーにとって、 より「快適」を実現します。世界の環境課題解決を最重要項目と捉え、我々のイノベーションでそのソリューションを提供し、産業界の構造変革を実現します。</p>
                    <p>また、メカノケミカル有機合成技術だからこそできる新しい機能性化合物を提供します。企業様と共に快適な社会を創ることがメカノクロスの夢です。</p>
                </div>
                <div class="button flex left js-anime anime-fadeInUp">
                    <a href="<?php echo esc_url( home_url('/') ); ?>about-us/" class="main">
                        <span class="font-en">Learn More</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-main.svg" alt="右矢印ボタン">
                    </a>
                </div>
            </div>
            <div class="page__top__about__cont__right js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/top-about-image.png" alt="私たちについてのイメージ画像">
            </div>
        </div>
    </div>
</section>

<!-- Start BUSINESS -->
<section class="page__top__business">
    <div class="container">
        <div class="page__top__business__top flex">
            <div class="section__title left grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <h2 class="">事業紹介</h2>
                <p class="font-en t-main">Our Business</p>
            </div>
            <div class="page__top__business__top__nav">
                <!-- 前後の矢印 -->
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/left-arrow-main.svg" alt="左矢印">
                </div>
                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印">
                </div>
            </div>
        </div>
        <div id="swiper" class="page__top__business__cont grid swiper js-anime anime-fadeInUp">
            <div class="page__top__business__cont__inner swiper-wrapper">
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>what-we-do/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-01.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <h3 class="t-white">製品・できること</h3>
                            <p class="font-en t-white">What We Do</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>business-model/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-02.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <h3 class="t-white">ビジネスモデル</h3>
                            <p class="font-en t-white">Business Model</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>sustainability/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-03.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <h3 class="t-white">サステイナビリティ</h3>
                            <p class="font-en t-white">Sustainability</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-top-pc.png" alt="wave">
</section>

<!-- Start JOINT PTOJECT -->
<section class="page__top__joint">
    <div class="container">
        <div class="section__title left grid js-anime anime-fadeInUp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity-white.svg" alt="ロゴ">
            <h2 class="t-white">共同研究の誘い</h2>
            <p class="font-en t-white">Joint Project</p>
        </div>
        <div class="page__top__joint__cont grid">
            <p class="t-white js-anime anime-fadeInUp">メカノケミカル有機合成について興味を持っていただいた企業様のため、メカノケミカル有機合成実装研究会を設立いたしました。<br>研究会では基礎知識や過去の成功例、最新研究等メカノケミカル有機合成を検討するために必要な情報ご提供いたします</p>
            <img class="hide_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/joint-project-pc.png" alt="共同研究の誘い">
            <img class="show_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/joint-project-sp.png" alt="共同研究の誘い">
        </div>
        <div class="button flex center js-anime anime-fadeInUp">
            <a href="<?php echo esc_url( home_url('/') ); ?>business-model/" class="main">
                <span class="font-en t-white">Business Model</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
            </a>
        </div>
    </div>
</section>

<!-- Start NEWS -->
<section class="page__top__news">
    <div class="container flex">
        <div class="page__top__news__cont flex">
            <div class="page__top__news__cont__item js-anime anime-fadeInUp">
                <div class="page__top__news__cont__item__title">
                    <h3>ニュース</h3>
                    <p class="font-en t-main">News</p>
                </div>
                <div class="archive__list flex">
                    <ul class="flex">
                        <?php
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            'category_name' => 'notice'
                            );
                        ?>
                        <?php 
                            $new_post = new WP_Query($args);
                            if( $new_post->have_posts() ):
                            while( $new_post->have_posts() ): $new_post->the_post();
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
                            else:
                        ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="page__top__news__cont__item js-anime anime-fadeInUp">
                <div class="page__top__news__cont__item__title">
                    <h3>プレスリリース</h3>
                    <p class="font-en t-main">Press Release</p>
                </div>
                <div class="archive__list flex">
                    <ul class="flex">
                        <?php
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            'category_name' => 'press_release'
                            );
                        ?>
                        <?php 
                            $new_post = new WP_Query($args);
                            if( $new_post->have_posts() ):
                            while( $new_post->have_posts() ): $new_post->the_post();
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
                            else:
                        ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="button flex center js-anime anime-fadeInUp">
            <a href="<?php echo esc_url( home_url('/') ); ?>news/" class="main">
                <span class="font-en">Read More</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-main.svg" alt="右矢印ボタン">
            </a>
        </div>
    </div>
</section>

<!-- Start MEMBERS -->
<section id="members" class="page__top__members">
    <div class="container">
        <div class="section__title center grid js-anime anime-fadeInUp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
            <h2>メンバー紹介</h2>
            <p class="font-en t-main">Members</p>
        </div>
        <div class="page__top__members__cont grid">
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/member-01.png" alt="齋藤 智久">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Tomohisa Saito</span>
                            <span>齋藤 智久</span>
                        </h3>
                        <p class="font-en t-main">Representative Director / President & Chief Executive Officer</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>2008年 北海道大学理学院(有機金属化学研究室 指導教官が伊藤肇先生)修士課程を修了。大手化学メーカーで、光学材料関連R＆Dから製品設計、生産化までの一気通貫業務を担当し、アジア圏のお客様を担当。その後、同業務で、海外子会社のマネージメント業務として、欧州のお客様を担当した。2017年にエレクトロニクス関連の企画推進業務に従事。その後、新規事業開拓のためのマーケティング業務で、サーキュラーエコノミー事業の立案を経験。2020年から半導体材料と医薬関連事業を行う企業で、マネージメント職として新規事業創出業務に従事。半導体材料プロジェクト立ち上げ、アフリカにおける環境事業の立案、水上太陽光発電事業拡大のための環境アセスメントなどを経験。2023年11月に株式会社メカノクロスを設立し、CEOを務める。</p>
                    </div>
                </div>
            </div>
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/member-02.png" alt="伊藤 肇">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Hajime Ito</span>
                            <span>伊藤 肇</span>
                        </h3>
                        <p class="font-en t-main">Director / Member of the Board & Technical Advisor</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>1996年京都大学大学院工学研究科博士課程修了、同年筑波大学化学系助手、1999年分子科学研究所助手、米国スクリプス研究所客員研究員、2002年北海道大学理学研究科助教授を経て、2010年に北海道大学大学院工学研究院にて、鈴木章(2010年ノーベル賞受賞)・宮浦憲夫教授が主宰された有機元素化学研究室の教授に就任。2018年より北海道大学化学反応創成研究拠点(WPI-ICReD)副拠点長、2019年よりJST CREST 「革新的合成」研究代表者、2022年より北海道大学卓越教授、日本化学会有機化学ディビジョン主査、英国王立化学会RSC Mechanochemistry誌Associate Editor、2014年日本化学会学術賞、2023年北海道ベンチャー支援ピッチにて最優秀賞・北海道知事賞受賞。メカノケミカル有機合成の研究において世界トップを走っている。</p>
                    </div>
                </div>
            </div>
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/member-03.png" alt="久保田 浩司">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Koji Kubota</span>
                            <span>久保田 浩司</span>
                        </h3>
                        <p class="font-en t-main">Director / Member of the Board & Technical Advisor</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>2016年、北海道大学大学院工学研究院で博士課程を修了(工学博士)。その後、米国・カリフォルニア大学バークレー校で博士研究員として不斉相間移動触媒の研究に従事。2017年、米国・マサチューセッツ工科大学に異動し、博士研究員としてバイオコンジュゲーションに関する研究に従事。2018年から北海道大学伊藤肇研究室に特任助教として着任し、メカノケミカル合成に関する研究プロジェクトを伊藤教授とともに立ち上げる。2021年より同大学大学院准教授に昇任。2023年11月にメカノクロスを設立し、取締役・技術顧問を務める。第72回 日本化学会進歩賞、令和4年度 北海道大学教育研究総長表彰、MechSustInd International Award、2019 ACP Lectureship Awardなど受賞多数。</p>
                    </div>
                </div>
            </div>
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/member-04.png" alt="佐々木 郁雄">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Ikuo Sasaki</span>
                            <span>佐々木 郁雄</span>
                        </h3>
                        <p class="font-en t-main">Technical Chief</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>2012年、徳島文理大学薬学部薬学研究科で博士課程を修了(薬学博士)。その後、北海道大学大学院工学研究院の伊藤肇研究室で博士研究員として、ホウ素化合物の新規合成法の開拓に従事。イリジウム触媒を用いたC–Hホウ素化反応や、オゾン酸化を活用したアシルボラン合成反応の開発に成功。2015年9月から、青山学院大学理工学部の生体機能分子合成研究室に異動し、助教として生理活性天然物の全合成や含窒素複素環合成法の開発に従事。2023年7月から伊藤肇研究室の特任講師として着任し、メカノケミカル合成に関する研究プロジェクトに参画。主に研究室と企業様との共同研究を担当。2024年4月よりメカノクロスの技術チーフとして着任予定。これまでに報告した学術論文は30報以上。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page__top__recruit">
    <div class="container">
        <?php get_template_part('template-parts/recruit'); ?>
    </div>
</section>

<?php get_footer(); ?>