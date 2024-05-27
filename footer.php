    <!-- Start footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top flex">
                <div class="footer__top__left grid">
                    <div class="footer__top__left__top grid">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/footer-logo.svg" alt="ロゴ">
                        </a>
                        <p class="t-white">株式会社メカノクロス<br>MECHANOCROSS Co., Ltd.</p>
                    </div>
                    <div class="footer__top__left__bottom grid">
                        <ul>
                            <li class="grid">
                                <p class="t-white">開発拠点</p>
                                <p>北海道札幌市北区北 21 条西 10 丁目<br>北海道大学化学反応創成研究拠点（WPI-ICReDD）</p>
                            </li>
                        </ul>
                        <ul>
                            <li class="grid">
                                <p class="t-white">本店</p>
                                <p>北海道札幌市中央区北5条西29丁目2-33 <br class="show_sp">THE TERRACE宮の森B号</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__top__right flex">
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>">トップ</a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>#members">メンバー紹介</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>about-us/">私たちについて</a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#philosophy">企業理念</a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#company">会社概要</a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>about-us/#history">会社沿革</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><span class="t-white">事業紹介</span></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>what-we-do/">製品・できること</a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>business-model/">ビジネスモデル</a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>research/">メカノケミカル<br>有機合成実装研究会</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>sustainability/">サスティナビリティ</a></li>
                    </ul>
                    <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>news/">お知らせ</a></li>
                        <li>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>news/category/notice/">ニュース</a></li>
                                <li><a href="<?php echo esc_url( home_url('/') ); ?>news/category/press_release/">プレスリリース</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a class="t-white" href="<?php echo esc_url( home_url('/') ); ?>recruit/">採用情報</a></li>
                        <li><a class="t-white" href="">プライバシーポリシー</a></li>
                    </ul> -->
                </div>
            </div>
            <div class="footer__bottom">
                <a href="mailto: tomohisa.saito@mechanocross.com">
                    <div class="footer__bottom__left flex">
                        <p class="font-en">Contact</p>
                        <p>ご相談やご質問等ございましたら<br>お気軽にご連絡ください。</p>
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