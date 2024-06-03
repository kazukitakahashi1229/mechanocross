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
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h1 class="font-en english">Sustainability</h1>
            <?php else: ?>
                <h1>サステイナビリティ</h1>
                <p class="font-en">Sustainability</p>
            <?php endif; ?>
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
                    <h2 class="t-white">サステイナブルへの取り組み</h2>
                </div>
                <div class="section__title__sub__lead">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="t-white">The chemical industry is the most important industry in modern society and utilizes various chemical reactions to produce materials for pharmaceuticals, clothing, and precision electronic components.<br>By utilizing our unique synthesis technology, MECHANOCROSS aims to create a sustainable society through innovation in the chemical industry with pursuing our mission of "CO₂ reduction," "utilization of unused resources," and "energy conservation.</p>
                    <?php else: ?>
                        <p class="t-white">化学産業は、様々な化学反応を活用して医薬品や衣類、精密電子部品の材料を提供する、現代社会で最も重要な産業です。<br>メカノクロスは独自の合成技術を活用し、「CO₂削減」「未利用資源の活用」「省エネルギー」をミッションに掲げ、化学産業にイノベーションを起こすことで、サステイナブルな社会を目指します。</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page__sustainability__main__cont flex">
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="t-white">eduction of CO₂</h3>
                    <?php else: ?>
                        <h3 class="t-white">CO₂削減</h3>
                    <?php endif; ?>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-01.svg" alt="CO2削減">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="t-white">Chemical reactions are generally conducted by dissolving the starting materials in large amounts of organic solvents (petroleum-derived components); however, the use of organic solvents that can be converted to CO₂ after their use must be reduced as much as possible. Our synthesis technology can significantly reduce the organic solvents used in existing chemical synthesis reactions to the utmost limit, thereby enabling a significant reduction in CO₂ emissions.</p>
                    <?php else: ?>
                        <p class="t-white">化学反応は、原材料を大量の有機溶媒（石油由来成分）で溶解させて実施することが一般的ですが、CO₂に変換される有機溶媒の使用は、極力減らす必要があります。メカノクロスの合成技術は、既存の化学合成反応に使用する有機溶媒を極限まで減らせることから、大幅なCO₂削減が可能になります。</p>
                    <?php endif; ?>
                </div> 
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="t-white">Energy Conservation</h3>
                    <?php else: ?>
                        <h3 class="t-white">省エネルギー</h3>
                    <?php endif; ?>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-02.svg" alt="省エネルギー">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="t-white">Our synthesis technology is capable of accelerating chemical reactions. In fact, the mechanochemical method achieved 100% efficiency in 5 min, compared to only 60% efficiency in 24 h under conventional solution-based conditions (comparison using Suzuki-Miyaura cross-coupling). A significant reduction in the reaction time translates into a reduction in energy use.</p>
                    <?php else: ?>
                        <p class="t-white">メカノクロスの合成技術は、化学反応の高速化が可能です。 実際に、通常の溶媒条件では24時間で60%しか進行しないのに対し、新手法では5分で100%を実現しました（Suzuki-Miyaura クロスカップリングによる比較）。反応時間の大幅な短縮は、使用するエネルギーの削減につながります。</p>
                    <?php endif; ?>
                </div> 
                <div class="page__sustainability__main__cont__item js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="t-white">Utilization of Unused Resources</h3>
                    <?php else: ?>
                        <h3 class="t-white">未利用資源の活用</h3>
                    <?php endif; ?>
                    <div class="page__sustainability__main__cont__item__icon flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/sustainability-03.svg" alt="未利用資源の活用">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="t-white">The use of poorly soluble compounds and polymers that have low solubility in organic solvents in chemical reactions with existing synthesis technologies is difficult. Our mechanochemical technology enables efficient reactions with unutilized, poorly soluble compounds.</p>
                    <?php else: ?>
                        <p class="t-white">難溶性化合物や高分子化合物は有機溶媒への溶解性が低いため、既存の有機溶媒を用いた合成技術では化学反応材料として利用することが困難です。メカノクロスの合成技術は、未利用の難溶性化合物や高分子化合物を効率よく反応させることが可能になります。</p>
                    <?php endif; ?>
                </div> 
                
            </div>
        </div>
    </section>

</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>