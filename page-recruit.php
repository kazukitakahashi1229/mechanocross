<?php 
/*
* 
* Template Name: RECRUIT
* 
*/
?>
<?php get_header(); ?>
<div class="page__rec">
    <!--  FV  -->
    <section class="page__rec__fv">
        <div class="container js-anime anime-fadeInUp">
            <h1 class="page__rec__fv__title font-en t-main">Recruit</h1>
            <p class="page__rec__fv__text">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <span>Creating an industrial revolution <br class="show_sp">through organic chemistry.</span>
                    <span>Mechanocross is a Hokkaido University startup</span>
                    <span>that solves global environmental issues.</span>
                <?php else: ?>
                    <span>有機化学から産業革命を起こす。</span>
                    <span>メカノクロスは世界の環境課題を解決する</span>
                    <span>北海道大学発のスタートアップです</span>
                <?php endif; ?>
            </p>
            <div class="page__rec__fv__button">
                <div class="rec__button">
                    <a href="https://open.talentio.com/r/1/c/mechanocross/homes/4385" target="_blank"><?php if (qtranxf_getLanguage() == 'en') { echo 'List of job openings'; } else { echo '募集一覧'; } ?></a>
                </div>
            </div>
        </div>
        <div class="page__rec__fv__slide">
            <div id="swiper-recruit" class="swiper-recruit">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-fv01.jpg" alt="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-fv02.jpg" alt="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-fv03.jpg" alt="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-fv04.jpg" alt="">
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-fv05.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  About  -->
    <div class="page__rec__about">
        <div class="container">
            <div class="page__rec__about__cont js-anime anime-fadeInUp">
                <div class="page__rec__about__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-main-ver.svg" alt="Mechanocross">
                </div>
                <div class="page__rec__about__text">
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p>The current organic chemical industry is by no means sustainable. <br class="hide_sp">For example, many organic synthesis reactions are used in the manufacturing process of medical products and semiconductors, but they rely on petroleum-based solvents that have a high environmental impact and the enormous amount of energy required to promote the reaction.</p>
                        <p>Mechanochemical organic synthesis is a technology that promotes the reaction of organic compounds using physical stirring. <br class="hide_sp">While conducting cutting-edge research in Hokkaido University, we were convinced that this technology would solve the global environmental issue of desolvation and decarbonization in organic synthesis, and so we established Mechanocross.</p>
                        <p>Through collaboration with companies around the world, Mechanocross will transform the manufacturing process of organic compounds that are essential to society into a sustainable one.</p>
                        <p>Until now, Western countries have led the great inventions that have been engraved in human history, such as steam engines, electric motors, and computers, and the resulting industrial transformations. <br class="hide_sp">However, we are now feeling the signs of a new industrial revolution and a solid response.</p>
                        <p>Would you like to join us in creating a once-in-a-century industrial revolution?</p>
                    <?php else: ?>
                        <p>現在の有機化学産業は、決して持続可能なものではありません。<br class="hide_sp">例えば医学品や半導体は多くの有機合成反応が製造工程で用いられていますが、<br class="hide_sp">環境負荷の高い石油由来の溶媒と、反応促進に必要な莫大なエネルギーに依存しています。</p>
                        <p>メカノケミカル有機合成は、物理的な力によって有機化合物のを反応を促す技術です。<br class="hide_sp">私たちは北海道大学にてその最先端の研究を行う中で、この技術こそ<br class="hide_sp">【有機合成の脱溶媒/脱炭素】という世界共通の環境課題を<br class="hide_sp">解決するものだと確信し、メカノクロスを立ち上げました。</p>
                        <p>メカノクロスは、世界中の会社との協業を通じて社会に不可欠な有機化合物の<br class="hide_sp">製造プロセスを持続可能なものへと変革します。</p>
                        <p>蒸気機関や電動モーター、コンピュータなど、これまで人類史に刻まれる偉大な<br class="hide_sp">発明とそれによる産業の変革は欧米諸国がリードしてきました。<br class="hide_sp">しかし今、私たちは新たな産業革命の前触れと確かな手応えを感じています。</p>
                        <p>私たちと100年に1度の産業革命を起こしませんか。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--  Mission Vision Value  -->
    <section class="page__rec__mvv">
        <div class="container">
            <ul class="page__rec__mvv__list">
                <li class="page__rec__mvv__item js-anime anime-fadeInUp">
                    <div class="page__rec__mvv__item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-mission.jpg" alt="">
                    </div>
                    <div class="page__rec__mvv__item__texts">
                        <h2 class="title font-en t-main">Mission</h2>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h3 class="copy"><span>Connecting the evolution of chemistry to the future</span></h3>
                            <div class="desc">
                                <p>In today's industrial society, organic compounds and their synthetic reactions are indispensable. Many of the things needed by human society, such as medicines and machinery products, are manufactured through multiple organic synthetic reactions, and at the same time, they are produced by consuming large amounts of refined petroleum and enormous amounts of electricity.<br>Many of the industrial products that we take for granted today are also the history of human research and trial and error in organic chemistry. In order to pass on this history to the future, we will use the approach of organic synthesis to realize a petroleum-free and carbon-free industry and contribute to the development of human society.</p>
                            </div>
                        <?php else: ?>
                            <h3 class="copy"><span>化学の進化を未来まで繋ぐ</span></h3>
                            <div class="desc">
                                <p>今の工業社会において、有機化合物とその合成反応というのは欠かせないものになっています。医薬品や機械製品といった人間社会に必要なものの多くは複数の有機合成反応を経て製造され、それと同時に大量の石油精製物と莫大な電力を消費して作られています。<br>　いま当たり前に享受されている多くの工業製品は、有機化学におけるこれまでの人類の研究、試行錯誤の歴史でもあります。その歴史を絶やさず未来へ引き継いでいくために、私たちは有機合成というアプローチから工業の脱石油・脱炭素を実現し、人類社会の発展に貢献します。</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
                <li class="page__rec__mvv__item js-anime anime-fadeInUp">
                    <div class="page__rec__mvv__item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-vision.jpg" alt="">
                    </div>
                    <div class="page__rec__mvv__item__texts">
                        <h2 class="title font-en t-main">Vision</h2>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h3 class="copy"><span>Establishing mechanochemical organic synthesis as an industrial foundation and starting an industrial revolution in the world of chemistry from Japan</span></h3>
                            <div class="desc">
                                <p>By implementing "mechanochemical organic synthesis technology" in society, we will realize a green transformation of industrial society through an organic chemistry approach.<br>We consider solving the world's environmental issues to be the most important issue in our management, and we will fulfill our responsibility as human beings living in the present together with all stakeholders. At the same time, we will work on developing new functional compounds that can only be achieved with mechanochemical organic synthesis technology. It is also Mechanocross' mission to create a comfortable society together with manufacturers around the world.</p>
                            </div>
                        <?php else: ?>
                            <h3 class="copy"><span>メカノケミカル有機合成を</span><span>産業基盤として確立し、</span><span>化学の世界で日本から産業革命を起こす</span></h3>
                            <div class="desc">
                                <p>「メカノケミカル有機合成技術」を社会実装することで、有機化学というアプローチから工業社会のグリーントランスフォーメーションを実現します。<br>　私たちは世界の環境課題解決を経営における最重要項目と捉え、あらゆるステークホルダと共に今を生きる人類としての責任を果たします。また、それと同時にメカノケミカル有機合成技術だからこそできる新しい機能性化合物の開発に取り組みます。世界中のメーカーと共に快適な社会を創ることも、メカノクロスの使命です。</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
                <li class="page__rec__mvv__item js-anime anime-fadeInUp">
                    <div class="page__rec__mvv__item__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/recruit-value.jpg" alt="">
                    </div>
                    <div class="page__rec__mvv__item__texts">
                        <h2 class="title font-en t-main">Credo</h2>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h3 class="copy"><span>Creating a sustainable environment for people to grow</span></h3>
                            <div class="desc">
                                <p>Starting out in a laboratory, we know better than anyone that research is the accumulation of people's continuous thinking and trials. The great inventions that come from that research and the social implementation of those inventions are also made possible by people's tireless efforts. Everything is done by people, and people are our greatest asset. Furthermore, if we, who aim to realize a sustainable society, were to be an unsustainable existence, it would be putting the cart before the horse. We believe that the continued growth of our coworkers is what is necessary for Mechanocross to become a sustainable company.<br>People and organizations are both organic entities. Let's continue to evolve and grow together, being positive and not afraid of change.</p>
                            </div>
                        <?php else: ?>
                            <h3 class="copy"><span>持続可能な”人”の成長環境を作る</span></h3>
                            <div class="desc">
                                <p>研究室から出発した私たちは、研究とは人の持続的な思考と試行の積み重ねであることを誰よりも知っています。その研究から生まれる偉大な発明と、その発明の社会実装もまた、人のたゆまぬ尽力によって為されるのでしょう。全ては人が為すことであり、人こそが私たちにとって一番の資産です。また、持続可能な社会の実現を目指す私たちが持続不可能な存在であったならばそれは本末転倒です。共に働く仲間が成長し続けることこそが、メカノクロスが持続可能な会社となるには必要だと考えています。<br>　人も組織も有機的な存在です。ともに前向きに、ときに変化を恐れず、進化し成長を続けていきましょう。</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--  Positions  -->
    <section class="page__rec__positions">
        <div class="container">
            <div class="rec__title js-anime anime-fadeInUp">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="english">Open Positions</h2>
                <?php else: ?>
                    <h2 class="jp">募集職種</h2>
                    <p class="en">Open Positions</p>
                <?php endif; ?>
            </div>
            <dl class="page__rec__positions__list js-anime anime-fadeInUp">
                <div class="page__rec__positions__item">
                    <dt>
                        <a href="https://open.talentio.com/r/1/c/mechanocross/pages/93183" target="_blank">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <span class="position t-main">R&D Project Manager</span>
                            <?php else: ?>
                                <span class="position t-main">R&D プロジェクトマネージャ</span>
                            <?php endif; ?>
                        </a>
                    </dt>
                    <dd>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            Conducting mechanochemical organic synthesis reaction studies and mass production studies according to customer needs
                        <?php else: ?>
                            顧客のニーズに合わせたメカノケミカル有機合成反応の検討、量産化検討を実施
                        <?php endif; ?>
                    </dd>
                </div>
                <div class="page__rec__positions__item">
                    <dt>
                        <a href="https://open.talentio.com/r/1/c/mechanocross/pages/93184" target="_blank">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <span class="position t-main">Device Design</span>
                            <?php else: ?>
                                <span class="position t-main">デバイス設計</span>
                            <?php endif; ?>
                        </a>
                    </dt>
                    <dd>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            Designing and safety studies of devices for mechanochemical organic synthesis
                        <?php else: ?>
                            メカノケミカル有機合成用デバイスの設計・安全性検討など
                        <?php endif; ?>
                    </dd>
                </div>
                <div class="page__rec__positions__item">
                    <dt>
                        <a href="https://open.talentio.com/r/1/c/mechanocross/pages/93186" target="_blank">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <span class="position t-main">Administrative Manager</span>
                            <?php else: ?>
                                <span class="position t-main">管理部長</span>
                            <?php endif; ?>
                        </a>
                    </dt>
                    <dd>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            Establishing administrative department including human resources, general affairs, accounting and finance
                        <?php else: ?>
                            人事・総務、経理財務など管理部の立上げ
                        <?php endif; ?>
                    </dd>
                </div>
                <div class="page__rec__positions__item">
                    <dt>
                        <a href="https://open.talentio.com/r/1/c/mechanocross/pages/93188" target="_blank">
                            <?php if (qtranxf_getLanguage() == 'en') : ?>
                                <span class="position t-main">Overseas business development</span>
                            <?php else: ?>
                                <span class="position t-main">海外事業開発</span>
                            <?php endif; ?>
                        </a>
                    </dt>
                    <dd>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            Developing customers mainly from overseas pharmaceutical/chemical manufacturers
                        <?php else: ?>
                            海外の製薬/化学メーカーを中心とした顧客開拓
                        <?php endif; ?>
                    </dd>
                </div>
            </dl>
            <div class="page__rec__positions__button">
                <div class="rec__button">
                    <a href="https://open.talentio.com/r/1/c/mechanocross/homes/4385" target="_blank"><?php if (qtranxf_getLanguage() == 'en') { echo 'List of job openings'; } else { echo '募集一覧'; } ?></a>
                </div>
            </div>
        </div>
    </section>
    <!--  Benefits  -->
    <section class="page__rec__benefits">
        <div class="container">
            <div class="rec__title js-anime anime-fadeInUp">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="english">Benefits</h2>
                <?php else: ?>
                    <h2 class="jp">福利厚生</h2>
                    <p class="en">Benefits</p>
                <?php endif; ?>
            </div>
            <ul class="page__rec__benefits__list js-anime anime-fadeInUp">
                <li class="page__rec__benefits__item">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/recruit-icon-benefit01.svg" alt="">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="desc">Two full days off (Saturdays and Sundays), public holidays and company holidays.</p>
                    <?php else: ?>
                        <p class="desc">完全週休二日（土日）祝日、企業が定める休日あり</p>
                    <?php endif; ?>
                </li>
                <li class="page__rec__benefits__item">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/recruit-icon-benefit02.svg" alt="">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="desc">Parallel careers such as doctoral studies are also available</p>
                    <?php else: ?>
                        <p class="desc">博士課程取得等のパラレルキャリアも相談可能</p>
                    <?php endif; ?>
                </li>
                <li class="page__rec__benefits__item">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/recruit-icon-benefit03.svg" alt="">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="desc">Telework negotiable (depending on position)</p>
                    <?php else: ?>
                        <p class="desc">テレワーク相談可能（ポジションによる）</p>
                    <?php endif; ?>
                </li>
                <li class="page__rec__benefits__item">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/recruit-icon-benefit04.svg" alt="">
                    </div>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <p class="desc">In-house recreation expenses paid (JPY 20000 per year )</p>
                    <?php else: ?>
                        <p class="desc">社内レクリエーション費用支給（２万円／年）</p>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </section>
    <!--  Process  -->
    <section class="page__rec__process">
        <div class="container">
            <div class="rec__title js-anime anime-fadeInUp">
                <?php if (qtranxf_getLanguage() == 'en') : ?>
                    <h2 class="english">Recruiting Process</h2>
                <?php else: ?>
                    <h2 class="jp">採用までの流れ</h2>
                    <p class="en">Recruiting Process</p>
                <?php endif; ?>
            </div>
            <ol class="page__rec__process__list js-anime anime-fadeInUp">
                <li class="page__rec__process__item">
                    <span class="index font-en t-main">Step 01</span>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="heading">Document screening</h3>
                        <p class="desc">Screening of CVs</p>
                    <?php else: ?>
                        <h3 class="heading">書類選考</h3>
                        <p class="desc">履歴書の審査</p>
                    <?php endif; ?>
                </li>
                <li class="page__rec__process__item">
                    <span class="index font-en t-main">Step 02</span>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="heading">Professional Interviews <span>(Technical staff)</span></h3>
                        <p class="desc">Screening of technical background, experience, etc. (Online interviews are possible.)</p>
                    <?php else: ?>
                        <h3 class="heading">専門職面接<span>（技術職の場合）</span></h3>
                        <p class="desc">技術のバックグラウンド、経験等を審査（Web可能）</p>
                    <?php endif; ?>
                </li>
                <li class="page__rec__process__item">
                    <span class="index font-en t-main">Step 03</span>
                    <?php if (qtranxf_getLanguage() == 'en') : ?>
                        <h3 class="heading">Officer Interviews</h3>
                        <p class="desc">Share the company's aims and expectations of the job and confirm suitability and Culture Fit.</p>
                    <?php else: ?>
                        <h3 class="heading">最終面接</h3>
                        <p class="desc">会社の目指すところを共有、適正とCulture Fitを確認</p>
                    <?php endif; ?>
                </li>
            </ol>
        </div>
    </section>
    <!-- Start CTA -->
    <section class="page__rec__cta">
        <div class="container flex">
            <div class="cta__recruit">
                <a href="<?php echo esc_url( home_url('/') ); ?>contact/" class="recruit flex">
                    <div class="cta__recruit__title">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <h2 class="font-en t-white english">Contact</h2>
                        <?php else: ?>
                            <h2 class="t-white">お問い合わせ</h2>
                            <p class="font-en t-white">Contact</p>
                        <?php endif; ?>
                    </div>
                    <div class="cta__recruit__text">
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p class="t-white">If you have any questions or concerns about recruitment, <br>please contact us.</p>
                        <?php else: ?>
                            <p class="t-white">採用に関するご相談やご質問等ございましたら<br>お気軽にご連絡ください。</p>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white-outline.svg" alt="右矢印のアイコン">
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>