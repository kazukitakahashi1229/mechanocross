<?php 
/*
* 
* Template Name: RESEARCH
* 
*/
?>
<?php get_header(); ?>

<div class="page__header no-wave">
    <div class="container">
        <div class="page__header__cont grid">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h1 class="font-en english">Mechano Chemistry <br class="show_tab">Research Group</h1>
            <?php else: ?>
                <h1>メカノケミカル有機合成実装研究会</h1>
                <p class="font-en">Mechano Chemistry <br class="show_tab">Research Group</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<main class="page__research">

    <!-- Start MAIN -->
    <section class="page__research__main js-anime anime-fadeInUp">
        <div class="container">
            <div class="page__research__main__lead flex">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <p>The Mechano Chemistry Research Group was established <br class="hide_sp">for companies interested in mechanochemical technology for organic synthesis. </p>
                    <p>The research group provides members with the information <br class="hide_sp">such as basic knowledge, research achievements and the latest research etc. <br class="hide_sp">you need to consider mechanochemical organic synthesis.</p>
                    <p>Consultations regarding collaborative verification testing are available to members only <br class="hide_sp">up to six times a year, so please feel free to contact us.</p>
                <?php else: ?>
                    <p>2024 年 4 月よりメカノケミカル有機合成を検討するための情報を提供する<br>メカノケミカル有機合成実装研究会を設立いたしました。 </p>
                    <p>メカノケミカル有機合成について「聞いたことがあるがメリットがわからない」 <br>「自分たちのプロセスに使えるかどうか知りたい」「成功事例を知りたい」<br>といった方々のため、 研究会では基礎知識や過去の成功例、海外の動向や特許情報など、<br>様々な研究情報を 会員様にご提供しております。</p>
                    <p>協業による検証テストのための相談について<br>会員様限定で、年間 6 回程度可能ですので、ぜひご相談ください</p>
                <?php endif; ?>
            </div>
            <div class="page__research__main__slide flex">
                <div class="page__research__main__slide__cont flex">
                    <h2 class="font-en t-main">Member Companies</h2>
                    <div id="swiper" class="swiper">
                        <div class="swiper-wrapper">
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-01.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-02.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-03.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-04.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-05.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-06.png" alt=""></li>
                            <li class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/client-07.png" alt=""></li>
                        </div>
                    </div>
                </div>
                <div class="button center flex">
                    <a href="https://itogrouplib.cambria.ac/wp/login_55151" class="fill" target="_blank" rel="noopener noreferrer">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <span>for members-only site, click here.</span>
                        <?php else: ?>
                            <span>会員様専用サイトはこちら</span>
                        <?php endif; ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white.svg" alt="右矢印">
                    </a>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>※Login required</p>
                    <?php else: ?>
                        <p>※閲覧にはログインが必要です。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Start JOIN PROJECT -->
    <section id="" class="page__research__join">
        <div class="container">
            <div class="page__research__join__cont">
                <div class="page__research__join__cont__title grid js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2 class="font-en t-main english">Membership Application</h2>
                    <?php else: ?>
                        <p class="font-en t-main">Join Project</p>
                        <h2>会員募集</h2>
                    <?php endif; ?>
                </div>
                <div class="page__research__join__cont__text grid js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>For companies interested in mechanochemical organic synthesis.<br>Our study group provides members with a variety of information, including past successes and the latest research.<br>We are always looking for member companies, so please feel free to contact us.</p>
                    <?php else: ?>
                        <p>メカノケミカル有機合成に興味をお持ちの企業の皆様へ。<br>当研究会では、過去の成功例や最新の研究など、様々な情報を会員様にご提供しております。<br>随時、会員企業様を募集しておりますので、ぜひお気軽にお問合せください。</p>
                    <?php endif; ?>
                </div>
                <div class="button center flex js-anime anime-fadeInUp">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScxiaJlOhb8rH0e7vrJ2Zx7KUnQTydaKjS_mgJWt7u2g3Ye5Q/viewform" class="fill" target="_blank" rel="noopener noreferrer">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <span>For more information, click here.</span>
                        <?php else: ?>
                            <span>詳しくはこちら</span>
                        <?php endif; ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white.svg" alt="右矢印">
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>