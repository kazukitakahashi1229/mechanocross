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

    <!-- Start INTRO -->
    <section class="page__do__intro">
        <div class="container md">
            <div class="page__do__intro__image left" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-intro-1.jpg);"></div>
            <div class="section__title center grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <h2>メカノクロスの有機合成</h2>
                <p class="font-en t-main">About Mechano Chemistry</p>
            </div>
            <div class="page__do__intro__cont flex js-anime anime-fadeInUp">
                <div class="page__do__intro__cont__text flex">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>Organic synthesis is an important technology to create medicines and high functional chemical materials over the last 100 years. However this has a drawback, it needs a large amount of petroleum-derived organic solvents.</p>
                        <p>Mechanochemical organic synthesis using a stirring device such as a ball mill allows for a significant reduction in the amount of organic solvent in the reaction, faster reactions, simpler operations and lower costs compared to conventional solution-based reactions.</p>
                        <p>Furthermore, mechanochemical organic synthesis is an innovative technique with new possibilities in organic chemistry, as insoluble compounds can also be used in reactions.</p>
                    <?php else: ?>
                        <p>有機合成化学は、過去100年以上に渡って、<br>医薬品や高機能化学材料を作り出してきた重要なテクノロジーですが、<br>石油由来の有機溶媒を大量に必要とする欠点がありました。</p>
                        <p>私達が注目するボールミルなどの攪拌装置を用いるメカノケミカル有機合成では、<br>従来の溶液系反応に比べて、反応における有機溶媒の量を大幅に削減できる上、<br>反応の高速化、操作の簡素化とコストダウンが可能になります。</p>
                        <p>また、これまで活用できなかった、不溶性化合物を反応に利用できるなど、<br>メカノケミカル有機合成は、有機化学の新しい世界を開く革新的な技術です。</p>
                    <?php endif; ?>
                </div>
                <div class="page__do__intro__cont__list flex">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="t-main">Advantages of mechanochemical organic synthesis</h3>
                        <ul class="flex">
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Enabling a significant reduction in organic solvents.</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Miniaturization of synthetic equipments</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Significantly reduced the reaction times.</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Cost reduction including personnel</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Functionalization of poorly soluble compounds</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Efficient activation of bulk metals.</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>Functionalization or degradation of various polymers</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span> Simple reaction operation (no need for inert gas)</span>
                            </li>
                        </ul>
                    <?php else: ?>
                        <h3 class="t-main">メカノケミカル有機合成で<br class="show_sp">得られるメリット</h3>
                        <ul class="flex">
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>有機溶媒の⼤幅な削減（CO2削減）</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>設備の⼩型化（省スペース化）</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>反応時間の⼤幅な短縮</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>⼈件費なども含めたコストダウン</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>従来法では出来ない難溶性物質の官能基化が可能</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>バルク⾦属を効率的に活性化</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>ポリマー修飾や分解が可能</span>
                            </li>
                            <li class="flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/check-circle.svg" alt="ロゴ">
                                <span>不活性ガスを必要としないシンプルな反応操作</span>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page__do__intro__image right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-intro-2.jpg);"></div>
        </div>
    </section>

    <!-- Start MAIN -->
    <section class="page__do__main">
        <div class="container">
            <div class="section__title center grid js-anime anime-fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-opacity.svg" alt="ロゴ">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2>What Can Mechanochemistry Do For Human Society?</h2>
                <?php else: ?>
                    <h2>メカノケミカルでできること</h2>
                <?php endif; ?>
                <p class="font-en t-main">Mechano Chemistry</p>
            </div>
            <div class="page__do__main__cont flex">
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">01</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-01.jpg" alt="メカノケミカル有機合成とは？">
                        <div class="page__do__main__cont__item__main__text grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="t-main">What is Mechanochemical Organic Synthesis?</h3>
                                <p>Mechanochemical organic synthesis is a new technology that uses a mechanical stirring device such as a ball mill to perform organic synthesis reactions. This technology has the potential to significantly advance organic synthesis by allowing reactions with poorly soluble compounds (unused materials) that are difficult to handle in conventional solution-based organic synthesis.</p>
                            <?php else: ?>
                                <h3 class="t-main">メカノケミカル有機合成とは？</h3>
                                <p>ボールミルなどの攪拌装置を用いて、有機合成反応を実施する新しい技術です。この技術を使うことにより、有機合成で扱いにくい溶解性の悪い化合物(未利用材料)を反応させることができるなど、有機合成を大幅に進化させるポテンシャルを持っています。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> 
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">02</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-02.jpg" alt="">
                        <div class="page__do__main__cont__item__main__text grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="t-main">Environmental Friendliness through Mechanochemical Organic Synthesis</h3>
                                <p>Environmentally friendly and sustainable organic synthesis is possible through our technology because the amount of organic solvents that cause CO₂ emissions can be reduced by mechanochemical synthesis. The amount of organic solvents used in the various reactions can be reduced to less than 1/15.</p>
                            <?php else: ?>
                                <h3 class="t-main">メカノケミカル有機合成による環境対応</h3>
                                <p>CO₂発生の原因となる有機溶媒が極限まで減らせることから、環境にやさしいサステナブルな有機合成が可能になります。実際に、様々な反応において、有機溶媒の使用量を従来の約15分の１以下に削減できます 。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> 
                <div class="page__do__main__cont__item grid js-anime anime-fadeInUp">
                    <p class="page__do__main__cont__item__num flex font-en t-main">03</p>
                    <div class="page__do__main__cont__item__main grid">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-03.jpg" alt="">
                        <div class="page__do__main__cont__item__main__text grid">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3 class="t-main">Mechanochemical Organic Synthesis Enables Mush Faster Reactions</h3>
                                <p>Organic synthesis can be performed without solvents or at high concentrations under mechanochemical conditions, which dramatically shortens the reaction time compared with conventional synthetic reactions in solution. For example, the Suzuki-Miyaura cross-coupling reaction, which requires 24 h, can proceed in 5 min (approximately 1/300 the time of the conventional method).</p>
                            <?php else: ?>
                                <h3 class="t-main">メカノケミカル有機合成による反応高速化</h3>
                                <p>無溶媒または高濃度で有機合成が可能になることにより、一般的な合成反応よりも格段に反応時間が短縮できます。例えば、従来24時間必要であったSuzuki-Miyauraクロスカップリング反応が5分で進行します(従来法の約300分の１)。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

    <!-- Start ARCHIVE -->
    <section class="page__do__archive">
        <div class="container flex">
            <div class="page__do__archive__title">
                <h2>実績、論文、受賞歴</h2>
                <p class="t-main font-en">Achievements and Awards</p>
            </div>
            <div class="page__do__archive__cont flex">
                <div class="page__do__archive__cont__item flex">
                    <div class="page__do__archive__cont__item__top flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/do-member-01.png" alt="">
                        <div class="page__do__archive__cont__item__top__title flex">
                            <p class="t-main font-en">Representative Director / President & Chief Executive Officer</p>
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3>Tomohisa Saito CEO</h3>
                            <?php else: ?>
                                <h3>齋藤 CEO</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <ul class="flex">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <li>2023 North Pacific Bank Start-up R&D Fund awarded.</li>
                        <?php else: ?>
                            <li>2023年度北洋銀行スタートアップ研究開発基金獲得</li>
                        <?php endif; ?>
                    </ul>
                </div>  
                <div class="page__do__archive__cont__item flex">
                    <div class="page__do__archive__cont__item__top flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/do-member-02.png" alt="">
                        <div class="page__do__archive__cont__item__top__title flex">
                            <p class="t-main font-en">Director / Member of the Board & Technical Advisor</p>
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3>Professor Hajime Ito</h3>
                            <?php else: ?>
                                <h3>伊藤教授</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <ul class="flex">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <li>2022 HSFC DemoDay Hokkaido Governor's Award</li>
                            <li>2023 HSFC DemoDay Hokkaido Governor's Award</li>
                        <?php else: ?>
                            <li>2022 HSFC（エイチフォース）DemoDay 最優秀賞・北海道知事賞</li>
                            <li>2023 HSFC（エイチフォース）DemoDay 最優秀賞・北海道知事賞</li>
                        <?php endif; ?>
                    </ul>
                </div>  
                <div class="page__do__archive__cont__item flex">
                    <div class="page__do__archive__cont__item__top flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/do-member-03.png" alt="">
                        <div class="page__do__archive__cont__item__top__title flex">
                            <p class="t-main font-en">Director / Member of the Board & Technical Advisor</p>
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <h3>Associate Professor Koji Kubota</h3>
                            <?php else: ?>
                                <h3>久保田准教授</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <ul class="flex">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <li>2022  MechSustInd International Award (International Newcomer Award in the field of mechanochemistry.)</li>
                            <li>2023  The Chemical Society of Japan Award for Young Chemists (Pioneering and Developing Solid-State Mechano-Organic Synthetic Chemistry)</li>
                        <?php else: ?>
                            <li>MechSustInd International Award (メカノケミストリー分野の国際新人賞)</li>
                            <li>第72回 日本化学会進歩賞（固相メカノ有機合成化学の開拓と展開）</li>
                        <?php endif; ?>
                    </ul>
                </div>    
            </div>
        </div>
    </section>

    <!-- Start BUSINESS MODEL -->
    <section class="page__do__model tech">
        <div class="container grid">
            <div class="section__title__sub grid main">
                <div class="section__title__sub__inner js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h2>Technology</h2>
                    <?php else: ?>
                        <h2 class="">技術紹介</h2>
                    <?php endif; ?>
                </div>
                <div class="section__title__sub__lead flex js-anime anime-fadeInUp">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>MECHANOCROSS Co., Ltd. provides mechanochemical process to replace your proposed solution-based reactions with our unique patented technology. Specifically, we aim to achieve the desired conversion, yield, and selectivity for your specific requests, from reaction feasibility to optimization of reaction conditions. We will work closely with the Laboratory of Organoelement Chemistry, Hokkaido University, with whom we are collaborating, to develop novel mechanochemical organic synthetic reactions quickly. We are ready to carry out mechanochemical organic synthesis at various scales and are providing to diverse needs of partners as much as possible.</p>
                    <?php else: ?>
                        <p class="">メカノクロス社は、独自の特許技術を応用し、企業様と相談の上でご提案頂いた合成反応のメカノケミカル化を検討いたします。具体的には、反応の実現可能性から反応条件の最適化まで、お客様の特定のニーズに対して望ましい転化率、収率、選択性を目指します。新規メカノケミカル有機合成反応に関しては、共同研究先の北海道大学有機元素化学研究室と密に連携して迅速な開発を行います。実施するメカノケミカル有機合成は、様々なスケールで実施可能な体制を整えており、企業様からの多様なニーズに可能な限りお応えしたいと考えています。</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="page__do__model__cont flex js-anime anime-fadeInUp">
                <div class="page__do__model__cont__column flex">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="t-main page__do__model__heading">What's mechanochemical organic synthesis?</h3>
                        <p>Conventional organic synthesis methods are generally solution methods that use large amounts of organic solvents and agitation for the purpose of efficiently carrying out target reactions. In contrast, mechanochemical organic synthesis using a stirring device such as a ball mill is a new technology that utilizes highly efficient stirring and requires almost no organic solvents.</p>
                    <?php else: ?>
                        <h3 class="t-main page__do__model__heading">メカのケミカル有機合成とは</h3>
                        <p>従来の有機合成法は、標的反応を効率的に進行させる目的で、大量の有機溶媒を使用して撹拌する溶液法での合成が一般的です。<br>対して、ボールミルなどの攪拌装置を用いるメカノケミカル有機合成は、高効率な撹拌を活かした有機溶媒をほとんど使用しない新しい技術です。</p>
                    <?php endif; ?>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-tech.jpg" alt="メカのケミカル有機合成とは">
                </div>
            </div>
            <div class="page__do__model__card flex js-anime anime-fadeInUp">
                <div class="page__do__model__card__item flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-tech-card-1.jpg" alt="MM400ボールミル">
                    <div>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4 class="t-main">MM400ボールミル</h4>
                            <p>A general mixer-mill device with high grinding power. Reaction vessels (called jars) are 1.5~50 mL in size and used for lab-scale studies. Jar materials include hardened steel, stainless steel, tungsten carbide, agate, zirconium oxide, PTFE, PMMA, etc., and can be adjusted to suit reaction conditions.</p>
                        <?php else: ?>
                            <h4 class="t-main">MM400ボールミル</h4>
                            <p>一般的なミキサーミル装置で、高い粉砕力を持ちます。反応容器（ジャーと呼ぶ）は1.5~50 mLの大きさで、ラボスケールでの検討に使用します。ジャーの材質も硬化鋼、ステンレス、タングステンカーバイド、メノウ、酸化ジルコニウム、PTFE、PMMAがあり、反応条件に合わせて調整可能です。</p>
                        <?php endif; ?>
                    </div>
                </div> 
                <div class="page__do__model__card__item flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-tech-card-2.jpg" alt="PM100 遊星ボールミル">
                    <div class>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4 class="t-main">PM100 遊星ボールミル</h4>
                            <p>This mill device utilizes centrifugal force at high speed rotation and also has high milling power. Reaction vessels (called jars) range in size from 12 to 500 mL and are used for larger scale reactions than mixer type. Jars are made of hardened steel, stainless steel, tungsten carbide, agate, sintered aluminum oxide, silicon nitride, and zirconium oxide.</p>
                        <?php else: ?>
                            <h4 class="t-main">PM100 遊星ボールミル</h4>
                            <p>高速回転での遠心力を利用したミル装置で、こちらも高い粉砕力を持ちます。反応容器（ジャーと呼ぶ）は12~500 mLの大きさで、ミキサー型よりもより大きなスケールの反応に利用します。ジャーの材質は硬化鋼, ステンレス, タングステンカーバイド, メノウ, 焼結酸化アルミニウム, 窒化ケイ素, 酸化ジルコニウムがあります。</p>
                        <?php endif; ?>
                    </div>
                </div> 
                <div class="page__do__model__card__item flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-tech-card-3.jpg" alt="TM300ドラムミル">
                    <div>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h4 class="t-main">TM300ドラムミル</h4>
                            <p>This is a large scale mill system capable of ball and rod milling. It has the grinding power of a mixer mill or other mills, but with jar sizes from 5~43.4 L, and can also react on larger scales. Jars are generally made of stainless steel.</p>
                        <?php else: ?>
                            <h4 class="t-main">TM300ドラムミル</h4>
                            <p>ボールミルやロッドミルが可能な大型のミル装置です。ミキサーミルなどの粉砕力を備えつつ、ジャーサイズが5~43.4 Lであり、より大スケールでも反応が可能です。ジャーはステンレスのものが一般的です。</p>
                        <?php endif; ?>
                    </div>
                </div>     
            </div>
        </div>
    </section>

    <!-- Start BUSINESS MODEL -->
    <section class="page__do__model potential">
        <div class="container grid">
            <div class="section__title__sub grid main">
                <div class="section__title__sub__inner js-anime anime-fadeInUp">
                    <h2 class="">ポテンシャル</h2>
                </div>
            </div>
            <div class="page__do__model__cont flex js-anime anime-fadeInUp">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h3 class="t-main page__do__model__heading">New materials development from insoluble materials.</h3>
                    <p>In mechanochemical organic synthesis, compounds do not need to be completely dissolved, and reactions can proceed with only a small amount of organic solvent. This means that compounds with poor solubility, which have been avoided until now, can be used in mechanochemical organic synthesis. In fact, Dr. Ito and Dr. Kubota at Hokkaido University have succeeded in developing a cross-coupling reaction using pigments, which are representative of insoluble substances, as substrates. This means that mechanochemical organic synthesis has the potential to revolutionize and evolve the world of organic synthesis, which has continued for more than 100 years.</p>
                <?php else: ?>
                    <h3 class="t-main page__do__model__heading">不溶性物質から新材料開発を</h3>
                    <p>メカノケミカル有機合成では、化合物が完全に溶解させる必要がないため、少量の有機溶媒で反応が進行いたします。これは、今まで避けられてきた溶解性の悪い化合物が、メカノケミカル有機合成では利用できることを意味しています。実際に北海道大学の伊藤先生・久保田先生らは、不溶性物質の代表ともいえる顔料を基質としたクロスカップリング反応の開発に成功されました。これは、メカノケミカル有機合成が100年以上続く有機合成の世界を一変して進化させるポテンシャルを持っていることを意味しています。</p>
                <?php endif; ?>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-potential-1.jpg" alt="不溶性物質から新材料開発を">
                </div>
            </div>
            <div class="page__do__model__cont flex js-anime anime-fadeInUp">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h3 class="t-main page__do__model__heading">Technology to maximize the potential of bulk metals.</h3>
                    <p>In organic synthesis using bulk metals, metal surface activation and the water content of the reaction solvent can greatly reduce reproducibility. Therefore, existing methods have "required" the use of additives that activate the metal surface and the use of reaction solvents after dehydration. However, in this mechanochemical organic synthesis reaction, the metal surface is activated by strong stirring force, and the reaction proceeds efficiently without additives. In addition, since only a very small amount of reaction solvent is added, the desired compound can be obtained reproducibly in air without solvent dehydration. This characteristic enables ultra-fast Birch reduction without the need for paste Grignard reagents or ammonia, which can be operated in air.</p>
                <?php else: ?>
                    <h3 class="t-main page__do__model__heading">バルク金属のポテンシャルを最大限に引き出す技術</h3>
                    <p>バルク金属を用いる有機合成において、金属表面の活性化や反応溶媒の含水率が再現性を大きく低下させる原因となります。そのため、既存の方法は金属表面を活性する添加剤の使用や脱水処理後の反応溶媒を使用することが「必須」とされてきました。しかし、このメカノケミカル有機合成反応においては、強い撹拌力で金属表面を活性化するにより、添加剤なしで高効率に反応が進行します。また、反応溶媒は極少量しか加えないため、溶媒の脱水操作なし、空気中で再現性良く目的の化合物が得られます。この特性を活用した空気中で操作可能なペースト状Grignard試薬やアンモニア不要の超高速Birch還元が可能になりました。</p>
                <?php endif; ?>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/do-potential-2.jpg" alt="バルク金属のポテンシャルを最大限に引き出す技術">
                </div>
            </div>
        </div>
    </section>

    <!-- Start BUSINESS MODEL -->
    <section class="page__do__model">
        <div class="container grid">
            <div class="section__title__sub grid main">
                <div class="section__title__sub__inner js-anime anime-fadeInUp">
                    <h2 class="">可能反応まとめ</h2>
                </div>
                <div class="section__title__sub__lead js-anime anime-fadeInUp">
                    <p class="">私達が注目するメカノケミカル有機合成では、通常の溶液条件では24時間で60％の進行に対し、新手法では5分でほぼ100%を実現しました。反応における1回当たりの廃棄物量は既存方の約15分の1、CO2排出量は約25分の1と大幅なコストダウンが可能になります。（Suzuki-Miyaura クロスカップリングで比較）</p>
                </div>
            </div>
            <div class="page__do__model__cont js-anime anime-fadeInUp">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/do-reaction.png" alt="可能反応まとめ">
                </div>
            </div>
            <div class="page__do__model__list js-anime anime-fadeInUp flex">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h3 class="t-main page__do__model__heading">Examples of mechanochemical reactions</h3>
                    <ul class="flex">
                        <li>Suzuki‒Miyaura coupling (<span>Chem. Sci</span>. 2019, <span>10</span>, 8202.)</li>
                        <li>Buchwald‒Hartwig coupling (<span>Nature Commun</span>. 2019, <span>10</span>, 111.)</li>
                        <li>Sonogashira coupling (<span>Chem. Sci</span>. 2022, <span>13</span>, 430.)</li>
                        <li>Grignard reaction (<span>Nature Commun</span>. 2021, <span>12</span>, 6691.)</li>
                        <li>Birch reduction (<span>Angew. Chem. int. Ed</span>. 2023, <span>62</span>, e202217723.)</li>
                        <li>Mechanoredox reaction (<span>Science</span>. 2019, <span>366</span>, 1500.)</li>
                        <li>Reaction with poor soluble materials. (<span>J. Am. Chem. Soc</span>, 2021, <span>143</span>, 6165.)</li>
                        <li>Reformulation and functionalization of polymers. (<span>Angew. Chem. int. Ed</span>. 2021, <span>60</span>, 16003.)</li>
                    </ul>
                    <p>Mechanochemical nucleophilic aromatic fluorination. Those listed above are also available, please contact us.</p>
                <?php else: ?>
                    <h3 class="t-main page__do__model__heading">メカノケミカル化に成功した反応例</h3>
                    <ul class="flex">
                        <li>Suzuki‒Miyaura coupling (<span>Chem. Sci</span>. 2019, <span>10</span>, 8202.)</li>
                        <li>Buchwald‒Hartwig coupling (<span>Nature Commun</span>. 2019, <span>10</span>, 111.)</li>
                        <li>Sonogashira coupling (<span>Chem. Sci</span>. 2022, <span>13</span>, 430.)</li>
                        <li>Grignard反応 (<span>Nature Commun</span>. 2021, <span>12</span>, 6691.)</li>
                        <li>Birch還元 (<span>Angew. Chem. int. Ed</span>. 2023, <span>62</span>, e202217723.)</li>
                        <li>メカノレドックス反応 (<span>Science</span>. 2019, <span>366</span>, 1500.)</li>
                        <li>不溶性有機化合物の反応 (<span>J. Am. Chem. Soc</span>, 2021, <span>143</span>, 6165.)</li>
                        <li>ポリマー改質・機能化 (<span>Angew. Chem. int. Ed</span>. 2021, <span>60</span>, 16003.)</li>
                    </ul>
                    <p>安価な試薬かつ無溶媒で進⾏する芳⾹族求電⼦フッ素化反応(特許申請中) 上記以外の反応も対応可能ですので、ご相談ください。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<!-- <?php get_template_part('template-parts/cta'); ?> -->

<?php get_footer(); ?>