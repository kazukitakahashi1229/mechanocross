<?php 
/*
* 
* Template Name: WHAT WE DO
* 
*/
?>
<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <h1>私たちができること</h1>
            <p class="font-en">What We Do</p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</div>

<main class="page__do">

    <!-- Start MAIN -->
    <section class="page__do__main">
        <div class="container">
            <div class="section__title center grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <h2>メカノケミカルでできること</h2>
                <p class="font-en t-main">Mechano Chemistry</p>
            </div>
            <div class="page__do__main__cont flex">
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">01</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-01.jpg" alt="メカノケミカル有機合成とは？">
                        <div class="page__do__main__cont__item__main__text grid">
                            <h3 class="t-main">メカノケミカル有機合成とは？</h3>
                            <p>ボールミルなどの攪拌装置を用いて、有機合成反応を実施する新しい技術です。この技術を使うことにより、有機合成で扱いにくい溶解性の悪い化合物(未利用材料)を反応させることができるなど、有機合成を大幅に進化させるポテンシャルを持っています。</p>
                        </div>
                    </div>
                </div> 
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">02</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-02.jpg" alt="">
                        <div class="page__do__main__cont__item__main__text grid">
                            <h3 class="t-main">メカノケミカル有機合成による環境対応</h3>
                            <p>CO₂発生の原因となる有機溶媒が極限まで減らせることから、環境にやさしいサステナブルな有機合成が可能になります。実際に、様々な反応において、有機溶媒の使用量を従来の約15分の１以下に削減できます 。</p>
                        </div>
                    </div>
                </div> 
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">03</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-03.jpg" alt="">
                        <div class="page__do__main__cont__item__main__text grid">
                            <h3 class="t-main">メカノケミカル有機合成による反応高速化</h3>
                            <p>無溶媒または高濃度で有機合成が可能になることにより、一般的な合成反応よりも格段に反応時間が短縮できます。例えば、従来24時間必要であったSuzuki-Miyauraクロスカップリング反応が5分で進行します(従来法の約300分の１)。</p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>