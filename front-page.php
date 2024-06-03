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
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <p>Mechanochemical Organic Synthesis for Revolutionizing Industry</p>
                <?php else: ?>
                    <p>メカノケミカル有機合成で産業に変革を</p>
                <?php endif; ?>
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
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2 class="font-en t-main english">About Us</h2>
                    <?php else: ?>
                        <h2 class="">私たちについて</h2>
                        <p class="font-en t-main">About Us</p>
                    <?php endif; ?>
                </div>
                <div class="page__top__about__cont__left__text js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h3>MECHANOCROSS is a company that takes on the challenge of mechanochemical technology for organic synthesis.</h3>
                    <p>We implement "mechanochemical technology for organic synthesis" that has been developed at Hokkaido University, Japan, which can realize a clean and more comfortable society for our stakeholders. Our mission is to address worldwide environmental issues and provide solutions through innovations to catalyze transformative shifts within industries, paving the way for a greener future.</p>
                    <p>We also provide new functional molecules that are available only through mechanochemical organic synthesis. Our dream at MECHANOCROSS is to create a comfortable society together with companies.</p>
                    <?php else: ?>
                    <h3>メカノクロスはメカノケミカル<br class="show_sp">有機合成技術で<br class="hide_sp">挑戦する企業です。</h3>
                    <p>クリーンな社会実現・新たな価値創造が可能な北海道大学発 「メカノケミカル有機合成技術」を社会実装し、ステークホルダーにとって、 より「快適」を実現します。世界の環境課題解決を最重要項目と捉え、我々のイノベーションでそのソリューションを提供し、産業界の構造変革を実現します。</p>
                    <p>また、メカノケミカル有機合成技術だからこそできる新しい機能性化合物を提供します。企業様と共に快適な社会を創ることがメカノクロスの夢です。</p>
                    <?php endif; ?>
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
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="font-en t-main english">Our Business</h2>
                <?php else: ?>
                    <h2 class="">事業紹介</h2>
                    <p class="font-en t-main">Our Business</p>
                <?php endif; ?>
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
                    <a href="<?php echo esc_url( home_url('/') ); ?>research/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-01.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="font-en t-white english">Research</h3>
                            <?php else: ?>
                                <h3 class="t-white">メカノケミカル実装研究会</h3>
                                <p class="font-en t-white">Research</p>
                            <?php endif; ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>what-we-do/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-02.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="font-en t-white english">What We Do</h3>
                            <?php else: ?>
                                <h3 class="t-white">製品・できること</h3>
                                <p class="font-en t-white">What We Do</p>
                            <?php endif; ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>business-model/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-03.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="font-en t-white english">Business Model</h3>
                            <?php else: ?>
                                <h3 class="t-white">ビジネスモデル</h3>
                                <p class="font-en t-white">Business Model</p>
                            <?php endif; ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-white.svg" alt="右矢印ボタン">
                    </a>
                </div>
                <div class="page__top__business__cont__inner__item swiper-slide">
                    <a href="<?php echo esc_url( home_url('/') ); ?>sustainability/" class="flex" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/top-business-04.jpg);">
                        <div class="page__top__business__cont__inner__item__title grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="font-en t-white english">Sustainability</h3>
                            <?php else: ?>
                                <h3 class="t-white">サステイナビリティ</h3>
                                <p class="font-en t-white">Sustainability</p>
                            <?php endif; ?>
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
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h2 class="font-en t-white english">Joint Project</h2>
            <?php else: ?>
                <h2 class="t-white">共同研究の誘い</h2>
                <p class="font-en t-white">Joint Project</p>
            <?php endif; ?>
        </div>
        <div class="page__top__joint__cont grid">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <p class="t-white js-anime anime-fadeInUp">The Mechano Chemistry Research Group was established for companies interested in mechanochemical technology for organic synthesis.<br>The research group provides members with the information such as basic knowledge, research achievements and the latest research etc. you need to consider mechanochemical organic synthesis. Additionally, meetings are available several times a year to consider collaboration.
            <?php else: ?>
                <p class="t-white js-anime anime-fadeInUp">メカノケミカル有機合成について興味を持っていただいた企業様のため、メカノケミカル有機合成実装研究会を設立いたしました。<br>研究会では基礎知識や過去の成功例、最新研究等メカノケミカル有機合成を検討するために必要な情報をご提供いたします。また、協業のために、年数回を目処にミーティングをご活用ください。</p>
            <?php endif; ?>
            <div>
                <img class="hide_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/joint-project-pc.png" alt="共同研究の誘い">
                <img class="show_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/joint-project-sp.png" alt="共同研究の誘い">
                <a href="https://itogrouphp.eng.hokudai.ac.jp/" target="_blank"></a>
            </div>
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
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="font-en t-main english">News</h3>
                    <?php else: ?>
                        <h3>ニュース</h3>
                        <p class="font-en t-main">News</p>
                    <?php endif; ?>
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
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="font-en t-main english">Press Release</h3>
                    <?php else: ?>
                        <h3>プレスリリース</h3>
                        <p class="font-en t-main">Press Release</p>
                    <?php endif; ?>
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
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h2 class="font-en t-main english">Members</h2>
            <?php else: ?>
                <h2>メンバー紹介</h2>
                <p class="font-en t-main">Members</p>
            <?php endif; ?>
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
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p>In 2009, Tomohisa Saito completed a Master's program at the Faculty of Science, Hokkaido University (Advisor: Prof. Hajime Ito). At a major chemical manufacturer, he was in charge of the entire development process, from R&D related to optical materials to product design and production, and was in charge of customers in the Asian region. Later, in the same job, he managed an overseas subsidiary and European customers. In 2017, he was engaged in electronics-related planning and promotion. Beginning in 2020, he was engaged in new business creation in a management position at a company engaged in semiconductor material- and pharmaceutical-related businesses. In November 2023, he founded MECHANOCROSS Co., Ltd. as a Representative Director and CEO.</p>
                        <?php else: ?>
                            <p>2008年 北海道大学理学院(有機金属化学研究室 指導教官が伊藤肇先生)修士課程を修了。大手化学メーカーで、光学材料関連R＆Dから製品設計、生産化までの一気通貫業務を担当し、アジア圏のお客様を担当。その後、同業務で、海外子会社のマネージメント業務として、欧州のお客様を担当した。2017年にエレクトロニクス関連の企画推進業務に従事。その後、新規事業開拓のためのマーケティング業務で、サーキュラーエコノミー事業の立案を経験。2020年から半導体材料と医薬関連事業を行う企業で、マネージメント職として新規事業創出業務に従事。半導体材料プロジェクト立ち上げ、アフリカにおける環境事業の立案、水上太陽光発電事業拡大のための環境アセスメントなどを経験。2023年11月に株式会社メカノクロスを設立し、CEOを務める。</p>
                        <?php endif; ?>
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
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p>Hajime Ito earned his Ph.D. degree in 1996 from the Graduate School of Engineering, Kyoto University, and was then promoted to Assistant Professor in the Department of Chemistry, University of Tsukuba in the same year. In 1999, he became a Research Assistant at the Institute for Molecular Science and Visiting Scholar at the Scripps Research Institute, USA. In 2002, he was appointed as an Associate Professor at the Graduate School of Science, Hokkaido University. In 2010, he was appointed as a Professor in the Laboratory of Organoelement Chemistry, which was previously led by Prof. Akira Suzuki (2010 Nobel Prize winner) and Prof. Norio Miyaura, at the Graduate School of Engineering, Hokkaido University. Beginning in 2018, he has served as the Deputy Director of the WPI-ICReDD, Hokkaido University. He has also served as a Principal Investigator of JST CREST "Innovative Synthesis" since 2019. In 2022, he was appointed as a Distinguished Professor at Hokkaido University, Chief Investigator of the Organic Chemistry Division in The Chemical Society of Japan, and Associate Editor, RSC Mechanochemistry, Royal Society of Chemistry, UK. He received the 2014 Academic Award from the Chemical Society of Japan, and the Hokkaido Governor's Award at the 2023 Hokkaido Venture Support Pitch. He is a world leader in mechanochemical organic synthesis research.</p>
                        <?php else: ?>
                            <p>1996年京都大学大学院工学研究科博士課程修了、同年筑波大学化学系助手、1999年分子科学研究所助手、米国スクリプス研究所客員研究員、2002年北海道大学理学研究科助教授を経て、2010年に北海道大学大学院工学研究院にて、鈴木章(2010年ノーベル賞受賞)・宮浦憲夫教授が主宰された有機元素化学研究室の教授に就任。2018年より北海道大学化学反応創成研究拠点(WPI-ICReD)副拠点長、2019年よりJST CREST 「革新的合成」研究代表者、2022年より北海道大学卓越教授、日本化学会有機化学ディビジョン主査、英国王立化学会RSC Mechanochemistry誌Associate Editor、2014年日本化学会学術賞、2023年北海道ベンチャー支援ピッチにて最優秀賞・北海道知事賞受賞。メカノケミカル有機合成の研究において世界トップを走っている。</p>
                        <?php endif; ?>
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
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p>Koji Kubota earned his Ph.D. in 2016 under the supervision of Professor Hajime Ito at Hokkaido University. He then joined the laboratory of Professor F. Dean Toste at the University of California, Berkeley, as a postdoctoral fellow. In 2017, he transferred to the Massachusetts Institute of Technology and joined the laboratory of Professor Stephen L. Buchwald as a JSPS overseas research fellow. In 2018, he began his academic research on mechanochemical synthesis as part of the Ito group at Hokkaido University and was promoted to Associate Professor in 2021. In November 2023, he founded MECHNOCROSS Co., Ltd., where he serves as a Director and Technical Advisor. He has received numerous awards, including the 72nd Annual Award for Progress from the Chemical Society of Japan, 2022 Hokkaido University President's Award for Education and Research, MechSustInd International Award, and 2019 ACP Lectureship Award.</p>
                        <?php else: ?>  
                            <p>2016年、北海道大学大学院工学研究院で博士課程を修了(工学博士)。その後、米国・カリフォルニア大学バークレー校で博士研究員として不斉相間移動触媒の研究に従事。2017年、米国・マサチューセッツ工科大学に異動し、博士研究員としてバイオコンジュゲーションに関する研究に従事。2018年から北海道大学伊藤肇研究室に特任助教として着任し、メカノケミカル合成に関する研究プロジェクトを伊藤教授とともに立ち上げる。2021年より同大学大学院准教授に昇任。2023年11月にメカノクロスを設立し、取締役・技術顧問を務める。第72回 日本化学会進歩賞、令和4年度 北海道大学教育研究総長表彰、MechSustInd International Award、2019 ACP Lectureship Awardなど受賞多数。</p>
                        <?php endif; ?>
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
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p>In 2012, Ikuo Sasaki completed his doctoral studies at the Graduate School of Pharmaceutical Sciences, Faculty of Pharmaceutical Sciences, Tokushima Bunri University. He then worked as a postdoctoral researcher in the laboratory of Professor Hajime Ito at the Graduate School of Engineering, Hokkaido University, where he pioneered novel synthetic methods for organoboron compounds. In September 2015, he moved to the Laboratory of Biofunctional Molecular Synthesis in the Faculty of Science and Engineering, Aoyama Gakuin University, where he worked as an Assistant Professor and conducted research on the total synthesis of bioactive natural products and the development of synthetic methods for nitrogen-containing heterocycles. In July 2023, he joined the Ito group as a Specially Appointed Lecturer and participated in research projects related to mechanochemical synthesis. Since April 2024, he has served as the Technical Chief at MECHANOCROSS Co., Ltd. He has published more than 30 scientific papers to date.</p>
                        <?php else: ?>
                            <p>2012年、徳島文理大学薬学部薬学研究科で博士課程を修了(薬学博士)。その後、北海道大学大学院工学研究院の伊藤肇研究室で博士研究員として、ホウ素化合物の新規合成法の開拓に従事。イリジウム触媒を用いたC–Hホウ素化反応や、オゾン酸化を活用したアシルボラン合成反応の開発に成功。2015年9月から、青山学院大学理工学部の生体機能分子合成研究室に異動し、助教として生理活性天然物の全合成や含窒素複素環合成法の開発に従事。2023年7月から伊藤肇研究室の特任講師として着任し、メカノケミカル合成に関する研究プロジェクトに参画。主に研究室と企業様との共同研究を担当。2024年4月よりメカノクロスの技術チーフとして着任予定。これまでに報告した学術論文は30報以上。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Satoru Okada</span>
                            <span>岡田 理</span>
                        </h3>
                        <p class="font-en t-main">Corporate Adviser</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>国内化学メーカーにて各種製品の営業・事業運営、新規事業開発に携わる。主に欧州・中東地域での建材事業展開の経験が長く、現在国内製造会社を中心とした事業コンサルタント業務を行う。2024年6月からメカノクロス に参画。</p>
                    </div>
                </div>
            </div>
            <div class="page__top__members__cont__item flex js-anime anime-fadeInUp">
                <div class="page__top__members__cont__item__left">
                </div>
                <div class="page__top__members__cont__item__right grid">
                    <div class="page__top__members__cont__item__right__title grid">
                        <h3>
                            <span class="font-en">Masanori Takahashi</span>
                            <span>高橋 正憲</span>
                        </h3>
                        <p class="font-en t-main">Legal Counsel</p>
                    </div>
                    <div class="page__top__members__cont__item__right__text">
                        <p>2004年北海道大学大学院工学研究科量子物理工学専攻修了後、(株)日立製作所入社、知的財産権本部配属。2007年弁理士試験合格。2012年北海道大学法科大学院修了。2013年司法試験合格。2013年1月より弁護士法人内田・鮫島法律事務所。2023年11月からメカノクロスが利用した支援制度にて知り合い、2024年4月からメカノクロスに参画。</p>
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