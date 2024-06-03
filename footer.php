    <!-- Start footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top flex">
                <div class="footer__top__left grid">
                    <div class="footer__top__left__top grid">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/footer-logo.svg" alt="ロゴ">
                        </a>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p class="t-white">MECHANOCROSS Co., Ltd.</p>
                        <?php else: ?>
                            <p class="t-white">株式会社メカノクロス<br>MECHANOCROSS Co., Ltd.</p>
                        <?php endif; ?>
                    </div>
                    <div class="footer__top__left__bottom grid">
                        <ul>
                            <li class="grid">
                                <?php if (qtranxf_getLanguage() == 'en') : ?>
                                    <p class="t-white">R&D center</p>
                                    <p>Institute for Chemical Reaction Design and Development (WPI-ICReDD)<br>Kita 21 Nishi 10, Kita-Ku, Sapporo, Hokkaido, Japan</p>
                                <?php else: ?>
                                    <p class="t-white">開発拠点</p>
                                    <p>北海道札幌市北区北 21 条西 10 丁目<br>北海道大学化学反応創成研究拠点（WPI-ICReDD）</p>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <ul>
                            <li class="grid">
                                <?php if (qtranxf_getLanguage() == 'en') : ?>
                                    <p class="t-white">Head Office</p>
                                    <p>THE TERRACE Miyanomori B,<br class="show_sp"> 2-33, Kita 5-Jo Nishi 29-Chome, Chuo-Ku, Sapporo, Hokkaido, Japan</p>
                                <?php else: ?>
                                    <p class="t-white">本店</p>
                                    <p>北海道札幌市中央区北5条西29丁目2-33 <br class="show_sp">THE TERRACE宮の森B号</p>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__top__right flex">
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>"><?php if (qtranxf_getLanguage() == 'en') { echo 'TOP'; } else { echo 'トップ'; } ?></a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>#members"><?php if (qtranxf_getLanguage() == 'en') { echo 'Members'; } else { echo 'メンバー紹介'; } ?></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>about-us/"><?php if (qtranxf_getLanguage() == 'en') { echo 'About Us'; } else { echo '私たちについて'; } ?></a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#philosophy"><?php if (qtranxf_getLanguage() == 'en') { echo 'Our Philosophy'; } else { echo '企業理念'; } ?></a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#company"><?php if (qtranxf_getLanguage() == 'en') { echo 'Our Profile'; } else { echo '会社概要'; } ?></a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#history"><?php if (qtranxf_getLanguage() == 'en') { echo ' Our History'; } else { echo '会社沿革'; } ?></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><span class="t-white"><?php if (qtranxf_getLanguage() == 'en') { echo 'Services'; } else { echo '事業紹介'; } ?></span></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>what-we-do/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Products & What We Do'; } else { echo '製品・できること'; } ?></a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>business-model/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Business Model'; } else { echo 'ビジネスモデル'; } ?></a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>research/"><?php if (qtranxf_getLanguage() == 'en') { echo 'The Mechano Chemistry Research Group'; } else { echo 'メカノケミカル<br>有機合成実装研究会'; } ?></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>sustainability/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Sustainability'; } else { echo 'サステイナビリティ'; } ?></a></li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>news/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Informations'; } else { echo 'お知らせ'; } ?></a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>news/category/notice/"><?php if (qtranxf_getLanguage() == 'en') { echo 'News'; } else { echo 'ニュース'; } ?></a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>news/category/press_release/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Press Release'; } else { echo 'プレスリリース'; } ?></a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>recruit/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Recruitment'; } else { echo '採用情報'; } ?></a></li>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>privacy-policy/"><?php if (qtranxf_getLanguage() == 'en') { echo 'Privacy Policy'; } else { echo 'プライバシーポリシー'; } ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <a href="<?php echo esc_url( home_url('/') ); ?>contact/">
                    <div class="footer__bottom__left flex">
                        <p class="font-en">Contact</p>
                        <?php if (qtranxf_getLanguage() == 'en') : ?>
                            <p>If you have any questions or concerns, <br>please feel free to contact us.</p>
                        <?php else: ?>
                            <p>ご相談やご質問等ございましたら<br>お気軽にご連絡ください。</p>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mail.svg" alt="メールのアイコン">
                </a>
            </div>
            <div class="footer__copy">
                <p class="font-en">©<?php echo date('Y'); ?> MECHANOCROSS Co., Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

<?php get_template_part('template-parts/footer-script'); ?>

</body>
</html>