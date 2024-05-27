<?php 
/*
* 
* Template Name: SUSTAINABILITY
* 
*/
?>
<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <h1>サステイナビリティ</h1>
            <p class="font-en">Sustainability</p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-main-pc.png" alt="wave">
</div>

<main class="page__sustainability">

    <!-- Start MAIN -->
    <section class="page__sustainability__main">
        <div class="container grid">
            <div class="section__title__sub grid white js-anime anime-fadeInUp">
                <div class="section__title__sub__inner">
                    <h2 class="t-white">メカノケミカルでできること</h2>
                </div>
                <div class="section__title__sub__lead">
                    <p class="t-white">化学産業は、様々な化学反応を活用して医薬品や衣類、精密電子部品の材料を提供する、現代社会で最も重要な産業です。<br>メカノクロスは独自の合成技術を活用し、「CO₂削減」「未利用資源の活用」「省エネルギー」をミッションに掲げ、化学産業にイノベーションを起こすことで、サスティナブルな社会を目指します。</p>
                </div>
            </div>
            <div class="page__sustainability__main__cont flex">
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <h3 class="t-white">CO₂削減</h3>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-01.svg" alt="CO2削減">
                    </div>
                    <p class="t-white">化学反応は、原材料を大量の有機溶媒（石油由来成分）で溶解させて実施することが一般的ですが、CO₂に変換される有機溶媒の使用は、極力減らす必要があります。メカノクロスの合成技術は、既存の化学合成反応に使用する有機溶媒を極限まで減らせることから、大幅なCO₂削減が可能になります。</p>
                </div> 
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <h3 class="t-white">省エネルギー</h3>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-02.svg" alt="省エネルギー">
                    </div>
                    <p class="t-white">メカノクロスの合成技術は、化学反応の高速化が可能です。 実際に、通常の溶媒条件では24時間で60%しか進行しないのに対し、新手法では5分で100%を実現しました（Suzuki-Miyaura クロスカップリングによる比較）。反応時間の大幅な短縮は、使用するエネルギーの削減につながります。</p>
                </div> 
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <h3 class="t-white">未利用資源の活用</h3>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-03.svg" alt="未利用資源の活用">
                    </div>
                    <p class="t-white">難溶性化合物や高分子化合物は有機溶媒への溶解性が低いため、既存の有機溶媒を用いた合成技術では化学反応材料として利用することが困難です。メカノクロスの合成技術は、未利用の難溶性化合物や高分子化合物を効率よく反応させることが可能になります。</p>
                </div> 
                
            </div>
        </div>
    </section>

</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>