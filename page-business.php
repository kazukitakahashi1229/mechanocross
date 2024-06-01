<?php 
/*
* 
* Template Name: BUSINESS MODEL
* 
*/
?>
<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <h1>ビジネスモデル</h1>
            <p class="font-en">Business Model</p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-main-pc.png" alt="wave">
</div>

<main class="page__business">

    <!-- Start BASES -->
    <section class="page__business__bases">
        <div class="container grid">
            <div class="section__title__sub grid white">
                <div class="section__title__sub__inner">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2 class="t-white js-anime anime-fadeInUp">Three Core Pillars</h2>
                    <?php else: ?>
                        <h2 class="t-white js-anime anime-fadeInUp">３本の柱</h2>
                    <?php endif; ?>
                </div>
                <div class="section__title__sub__lead js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="t-white">Our Business model is based on three core pillars below<br>Consultancy and new reactions using Know-How and research findings of Hokkaido university, Development of new catalysts for mechanochemistry, Construction and sales of compound libraries and databases、Scale up of mechanochemical synthesis, Development of devices shift towards on-demand chemical reactions    </p>
                    <?php else: ?>
                        <p class="t-white">我々のビジネスモデルは次の3つの柱からなります。 大学での研究成果、ノウハウを活用したコンサルや新反応、新触媒開発、コンピュータの活用を軸にした、化合物ライブラリやデータベースの構築と販売、そしてメカノケミカル合成プロセスの大型化、および化学反応のオンデマンド化を進めるためのデバイス開発です。</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page__business__bases__cont">
                <img class="hide_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/business-bases-pc.png" alt="３本の柱">
                <img class="show_sp js-anime anime-fadeInUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/business-bases-sp.png" alt="３本の柱">
            </div>
        </div>
    </section>

    <!-- Start DIRECTION -->
    <section class="page__business__dir">
        <div class="container grid">
            <div class="section__title__sub grid main">
                <div class="section__title__sub__inner js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2 class="">Policy for test and evaluation process</h2>
                    <?php else: ?>
                        <h2 class="">テスト評価プロセスの方針について</h2>
                    <?php endif; ?>
                </div>
                <div class="section__title__sub__lead flex js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="">The Ito Laboratory, Graduate School of Engineering, Hokkaido University, carries out basic research aiming at the “all organic synthesis reactions are replaced by mechanochemical reactions with high efficiency”.<br>MECHANOCROSS conducts research on the test and evaluation process requested by various companies. We can meet the needs of various companies with a high level of mechanochemical organic synthesis technology through the participation of Distinguished Professor Ito and Associate Professor Kubota on our Board of Directors.<br>We support you to implement mechanochemical organic synthesis.</p>
                    <?php else: ?>
                        <p class="">北海道大学大学院工学研究院 伊藤研究室では 「すべての有機合成反応の高効率メカノケミカル化」を目指した基礎研究を行います。<br>
    企業様からのテスト評価プロセスについてはメカノクロスにて研究を行いますが、伊藤卓越教授、久保田准教授には取締役で参加頂くため、技術水準を保ったまま企業様のニーズにお応えできます。
    皆様のメカノケミカル有機合成の実装へのお手伝いをさせて頂きます。</p>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/business-process.png" alt="テスト評価プロセス">
                </div>
            </div>
            <div class="page__business__dir__cont">
            </div>
        </div>
    </section>

     <!-- Start BUSINESS MODEL -->
     <section class="page__business__model">
        <div class="container grid">
            <div class="section__title__sub grid main js-anime anime-fadeInUp">
                <div class="section__title__sub__inner">
                    <h2 class="">ビジネスモデル</h2>
                </div>
            </div>
            <div class="page__business__model__cont flex js-anime anime-fadeInUp">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/business-model.png" alt="ビジネスモデル">
                </div>
                <h3>テスト評価プロセス(商標予定：MechanoX™︎)</h3>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/business-process-2.png" alt="テスト評価プロセス">
                </div>
            </div>
        </div>
    </section>

    <!-- Start JOIN PROJECT -->
    <!-- <section id="anchro__join-project" class="page__business__join">
        <div class="container">
            <div class="page__business__join__cont">
                <div class="page__business__join__cont__title grid js-anime anime-fadeInUp">
                    <h2>メカノケミカル有機合成<br class="show_sp">実装研究会 <span class="t-main">会員募集</span></h2>
                </div>
                <div class="page__business__join__cont__text grid js-anime anime-fadeInUp">
                    <p>2024 年 1 月よりメカノケミカル有機合成を検討するための情報を提供する<br class="hide_sp">メカノケミカル有機合成実装研究会を設立いたしました。</p>
                    <p>メカノケミカル有機合成について「聞いたことがあるがメリットがわからない」<br class="hide_sp"> 「自分たちのプロセスに使えるかどうか知りたい」「成功事例を知りたい」といった方々のため、<br class="hide_sp">研究会では基礎知識、装置、これまでの研究、過去の成功例、海外の動向、最新研究、特許情報を<br>会員様にご提供いたします。</p>
                </div>
                <div class="button center flex js-anime anime-fadeInUp">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/data/download_document_business01.pdf" class="fill" target="_blank" rel="noopener noreferrer">
                        <span>詳しくはこちら</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white.svg" alt="右矢印">
                    </a>
                </div>
                <div class="page__business__join__cont__text--download grid js-anime anime-fadeInUp">
                    <p>
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/data/download_document_business02.docx" class="fill" target="_blank" rel="noopener noreferrer">
                            <span class="t-main">
                                メカノケミカル有機合成実装研究会会則および申込書<br class="show_tab">（ワード：20KB）
                            </span>
                        </a>
                    </p>
                </div>
                <div class="button center flex js-anime anime-fadeInUp">
                    <a href="https://itogrouplib.cambria.ac/wp/login_55151" class="fill" target="_blank" rel="noopener noreferrer">
                        <span>メカノケミカル有機合成実装研究会<br>会員様専用サイトはこちら</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white.svg" alt="右矢印">
                    </a>
                </div>
                <div class="page__business__join__cont__text--download grid js-anime anime-fadeInUp">
                    <p class="t-main">
                        ※閲覧にはログインが必要です。
                    </p>
                </div>
            </div>
        </div>
    </section> -->

</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>