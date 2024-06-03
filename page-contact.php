<?php 
/*
* 
* Template Name: CONTACT
* 
*/
?>
<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h1 class="font-en english">Contact</h1>
            <?php else: ?>
                <h1>お問い合わせ</h1>
                <p class="font-en">Contact</p>
            <?php endif; ?>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</div>

<main class="page__contact">

    <!-- Start MAIN -->
    <section class="page__contact__main">
        <div class="container flex">
            <div class="page__contact__main__top flex">
                <div class="page__contact__main__top__title">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2 class="font-en t-main english">Contact Form</h2>
                    <?php else: ?>
                        <h2>お問い合わせフォーム</h2>
                        <p class="font-en t-main">Contact Form</p>
                    <?php endif; ?>
                </div>
                <div class="page__contact__main__top__lead">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>To contact us regarding your request or questions, please use the form below. <br>You will need to confirm and agree with our privacy policy <br>before clicking 'confirmation'.</p>
                        <p><span>*</span>Required fields.</p>
                    <?php else: ?>
                        <p>弊社へのご依頼やご質問に関するご連絡は<br>下記フォームよりお気軽にお問い合わせください。</p>
                        <p><span>*</span>は必須入力項目です</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page__contact__main__form">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Start CTA -->
    <section class="page__contact__cta">
        <div class="container flex">
            <div class="cta__recruit">
                <a href="<?php echo esc_url( home_url('/') ); ?>research/" class="research flex">
                    <div class="cta__recruit__title">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h2 class="font-en t-white english">Joint Project</h2>
                        <?php else: ?>
                            <h2 class="t-white">メカノケミカル実装研究会</h2>
                            <p class="font-en t-white">Joint Project</p>
                        <?php endif; ?>
                    </div>
                    <div class="cta__recruit__text">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p class="t-white">The Mechano Chemistry Research Group was established for companies interested in mechanochemical technology for organic synthesis.<br>The research group provides members with the information such as basic knowledge, research achievements and the latest research etc. you need to consider mechanochemical organic synthesis. </p>
                        <?php else: ?>
                            <p class="t-white">メカノケミカル有機合成について興味を持っていただいた企業様のため、 メカノケミカル有機合成実装研究会を設立いたしました。<br> 研究会では基礎知識や過去の成功例、最新研究等メカノケミカル有機合成を検討するために必要な情報ご提供いたします。</p>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white-outline.svg" alt="右矢印のアイコン">
                </a>
            </div>
            <?php get_template_part('template-parts/recruit'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>