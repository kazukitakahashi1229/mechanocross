<?php 
/*
* 
* Template Name: ABOUT
* 
*/
?>
<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h1 class="font-en english">About Us</h1>
            <?php else: ?>
                <h1>私たちについて</h1>
                <p class="font-en">About Us</p>
            <?php endif; ?>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</div>

<main>

    <!-- Start PHILOSOPHY -->
    <section id="philosophy" class="page__about__philo">
        <div class="container">
            <div class="section__title center grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="font-en t-main english">Our Philosophy</h2>
                <?php else: ?>
                    <h2>企業理念</h2>
                    <p class="font-en t-main">Our Philosophy</p>
                <?php endif; ?>
            </div>
            <div class="page__about__philo__cont">
                <div class="page__about__philo__cont__top js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3>MECHANOCROSS is a company<br> that develops mechanochemical organic synthesis technology.</h3>
                    <?php else: ?>
                        <h3>メカノクロスは<br>メカノケミカル有機合成技術で<br>挑戦する企業です。</h3>
                    <?php endif; ?>
                </div>
                <div class="page__about__philo__cont__main flex">
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">01</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We offer an enhanced, sustainable process that utilizes minimal solvent volumes.</h4>
                        <?php else: ?>
                            <h4>溶媒を極少量にしたサステイナブルなプロセスを提供します</h4>
                        <?php endif; ?>
                    </div>
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">02</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We work with our partners to reduce greenhouse gas emissions in the industry.</h4>
                        <?php else: ?>
                            <h4>パートナー様とともに、産業界の温室効果ガス削減を達成します</h4>
                        <?php endif; ?>
                    </div>
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">03</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We offer high-performance chemical compounds and materials that cannot be synthesized using conventional methods.</h4>
                        <?php else: ?>
                            <h4>従来合成法ではできなかった⾼機能化合物を提供します</h4>
                        <?php endif; ?>
                    </div>
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">04</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We are committed to the development of industry and human resources through the implementation of our dream technologies.</h4>
                        <?php else: ?>
                            <h4>夢ある技術を社会実装する取り組みで、産業界の発展、および、⼈材育成に取り組みます</h4>
                        <?php endif; ?>
                    </div>
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">05</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We built an unprecedented R&D facility and have created the best working environment.</h4>
                        <?php else: ?>
                            <h4>今までにない研究開発施設を作り、最⾼の職場環境を作ります</h4>
                        <?php endif; ?>
                    </div>
                    <div class="page__about__philo__cont__main__item flex js-anime anime-fadeInUp">
                        <p class="font-en t-main">06</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4>We offer rewarding challenges.</h4>
                        <?php else: ?>
                            <h4>やりがいのある挑戦を提供します</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="page__about__philo__cont__bottom grid js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3>We aspire to foster the growth and development of all stakeholders involved.</h3>
                    <?php else: ?>
                        <h3>関係する全ての⼈を<br class="show_tab">成⻑させる会社を⽬指します。</h3>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-main-ver.svg" alt="ロゴ">
                </div>
            </div>
        </div>
    </section>

    <!-- Start VIDEO -->
    <section class="page__about__video">
        <div class="container sm flex">
            <div class="page__about__video__cont js-anime anime-fadeInUp">
                <iframe width="" height="" src="https://www.youtube.com/embed/KW96OeD6Dls?si=wUrVx_pNdvgZ4DEy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="button flex center js-anime anime-fadeInUp">
                <a href="https://www.youtube.com/watch?v=KW96OeD6Dls" target="_blank" class="main">
                    <span class="font-en">YouTube Channel</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/button-arrow-main.svg" alt="右矢印ボタン">
                </a>
            </div>
        </div>
    </section>

    <!-- Start COMPANY -->
    <section id="company" class="page__about__company">
        <div class="container">
            <div class="page__about__company__cont flex">
                <div class="page__about__company__cont__left grid js-anime anime-fadeInUp">
                    <div class="section__title left grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h2 class="font-en t-main english">Company</h2>
                        <?php else: ?>
                            <h2>会社概要</h2>
                            <p class="font-en t-main">Company</p>
                        <?php endif; ?>
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Company name</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>MECHANOCROSS Co., Ltd.</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Date of Establishment</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>November 1, 2023</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Number of employees</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>6</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Capital, etc.</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>3 million yen</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Funding</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>融資　北洋銀行、日本政策金融公庫</li>
                                    <li>出資　数社のインキュベーションファンドと協議中</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Business details</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>Providing technologies to replace solution-based reactions with mechanochemical processes.</li>
                                    <li>Development and provision of highly functional materials obtained from insoluble compounds.</li>
                                    <li>Dissemination of information related to mechanochemical organic synthesis.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Location</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>
                                        <p>Head Office</p>
                                        <p>THE TERRACE Miyanomori B, 2-33, Kita 5-Jo Nishi 29-Chome, Chuo-Ku, Sapporo, Hokkaido, Japan</p>
                                    </li>
                                    <li>
                                        <p>R&D center</p>
                                        <p>Institute for Chemical Reaction Design and Development (WPI-ICReDD)<br>
Kita 21 Nishi 10, Kita-Ku, Sapporo, Hokkaido, Japan</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>Director</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>Representative Director Tomohisa Saito</li>
                                    <li>Director Hajime Ito (Ph.D. (Engineering), Distinguished Professor, Hokkaido University)</li>
                                    <li>Director Koji Kubota (Ph.D. (Engineering), Associate Professor, Hokkaido University)</li>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>会社名</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>株式会社メカノクロス</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>設立年月日</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>2023年11月1日</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>社員数</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>6名</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>資本金等</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <p>300万円</p>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>資金調達</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>融資　北洋銀行、日本政策金融公庫</li>
                                    <li>出資　数社のインキュベーションファンドと協議中</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>事業内容</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>溶液反応のメカノ化技術の提供</li>
                                    <li>不溶性高機能材料の開発、提供</li>
                                    <li>メカノケミカル有機合成関連情報発信</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>所在地</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>
                                        <p>本店</p>
                                        <p>〒064-0825<br>北海道札幌市中央区北5条西29丁目2-33 THE TERRACE宮の森B号</p>
                                    </li>
                                    <li>
                                        <p>開発拠点</p>
                                        <p>〒060-0813 北海道札幌市北区北21条西10丁目<br>北海道大学化学反応創成研究拠点（WPI-ICReDD）</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="page__about__company__cont__left__item flex">
                            <div class="page__about__company__cont__left__item__left">
                                <p>取締役</p>
                            </div>
                            <div class="page__about__company__cont__left__item__right">
                                <ul class="grid">
                                    <li>代表取締役　齋藤　智久</li>
                                    <li>取締役　伊藤　肇（北海道大学卓越教授，博士（工学））</li>
                                    <li>取締役　久保田　浩司（北海道大学　准教授，博士（工学））</li>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="page__about__company__cont__right js-anime anime-fadeInUp">
                    <img class="hide_tab" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/about-image-pc.png" alt="会社のイメージ">
                    <img class="show_tab" src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/about-image-sp.jpg" alt="会社のイメージ">
                </div>
            </div>
        </div>
    </section>

    <!-- Start HISORY -->
    <section id="history" class="page__about__history">
        <div class="container">
            <div class="section__title left grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="font-en t-main english">Our History</h2>
                <?php else: ?>
                    <h2>メカノクロス社の歴史</h2>
                    <p class="font-en t-main">Our History</p>
                <?php endif; ?>
            </div>
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <div class="page__about__history__cont js-anime anime-fadeInUp">
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2018</p>
                        <h3>The founders, Professor Hajime Ito and Associate Professor Koji Kubota (a specially appointed Assistant Professor at that time), began research on mechanochemical organic synthesis at Hokkaido University.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2019</p>
                        <h3>We developed solid-state cross-coupling reactions using mechanochemistry, which was the first research achievement of the Ito group. This study was published in Nature’s sister journal, one of the world's premier scientific journals.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2019</p>
                        <h3>We developed redox reactions of organic compounds with piezoelectric materials using mechanochemistry. This study was published in Science, one of the world's premier scientific journals.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2021</p>
                        <h3>We developed a method for the chemical modification of commodity plastics using mechanochemistry. This study was published in Angewandte Chemie, one of the world's premier chemistry journals.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2021</p>
                        <h3>A paste was successfully synthesized from Grignard reagents using mechanochemistry. This study was published in Nature’s sister journal, one of the world's premier scientific journals.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2022</p>
                        <h3>We were selected for the START program, which aims to create new industries based on the research results of universities. We conducted preliminary studies on industrial applications of mechanochemical synthesis.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2022</p>
                        <h3>Prof. Ito won the Hokkaido Governor's Award at the HSFC DemoDay <span class="t-main">Pitch Contest</span>.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023</p>
                        <h3>We developed an ultra-fast Birch reduction protocol that can be performed at room temperature in air using a mechanochemical method. This study was published in Angewandte Chemie, one of the world's premier scientific journals.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023</p>
                        <h3>Prof. Ito won the Hokkaido Governor's Award at HSFC DemoDay <span class="t-main">for the second year in a row</span>.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023.11</p>
                        <h3>Prof. Ito and Associate Prof. Kubota launched MECHANOCROSS Co., Ltd. and Mr. Saito, <span class="t-main">who was a student of Prof. Ito</span>, became CEO.</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023.12</p>
                        <h3><span class="t-main">MECHANOCROSS Co., Ltd. was selected as a start-up company from Hokkaido University.<br>When Soichiro Imaeda, Vice Minister of Education, Culture, Sports, Science, and Technology, visited Hokkaido University, we explained MECHANOCROSS's initiatives to him.</span></h3>
                    </div>
                </div>
            <?php else: ?>
                <div class="page__about__history__cont js-anime anime-fadeInUp">
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2018</p>
                        <h3>北海道大学にて、創業者である伊藤肇教授と久保田准教授 (当時特任助教) がメカノケミカル有機合成に関する研究を開始。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2019</p>
                        <h3>最初の研究成果であるメカノケミカル法を用いた固体クロスカップリング反応の開発に成功。世界最高峰の科学系ジャーナルであるNature姉妹誌に論文掲載。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2019</p>
                        <h3>メカノケミカル法を用いた圧電材料による有機化合物の酸化還元反応の開発に成功。世界最高峰の科学系ジャーナルであるScience誌に論文掲載。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2021</p>
                        <h3>メカノケミカル法を用いた汎用プラスチックの化学修飾法の開発に成功。世界最高峰の化学系ジャーナルであるAngewandte誌に論文掲載。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2021</p>
                        <h3>メカノケミカル法を用いたペースト状グリニャール試薬の合成に成功。世界最高峰の科学系ジャーナルであるNature姉妹誌に論文掲載。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2022</p>
                        <h3>研究成果展開事業 大学発新産業創出プログラム STARTに採択。メカノケミカル合成の事業化に向けた予備的な検討を開始。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2022</p>
                        <h3>HSFC（エイチフォース）DemoDay<span class="t-main">ピッチコンテスト</span>にて、伊藤教授が最優秀賞・北海道知事賞を受賞。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023</p>
                        <h3>メカノケミカル法を用いた空気下、室温で実施可能な超高速バーチ還元反応の開発に成功。世界最高峰の化学系ジャーナルであるAngewandte誌に論文掲載。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023</p>
                        <h3>HSFC（エイチフォース）DemoDay にて伊藤教授が<span class="t-main">2年連続となる</span>最優秀賞・北海道知事賞を受賞。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023.11</p>
                        <h3>伊藤教授・久保田准教授が株式会社メカノクロスを起業し、<span class="t-main">伊藤教授の教え子</span>である齋藤氏がCEOに就任。<span class="t-main">メカノクロス設立</span>。</h3>
                    </div>
                    <div class="page__about__history__cont__item flex">
                        <p class="font-en t-main">2023.12</p>
                        <h3><span class="t-main">北大発スタートアップ企業に選ばれる。<br>
    今枝宗一郎文部科学副大臣の北大視察時に、副大臣にメカノクロスの取組説明を実施。</span></h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>