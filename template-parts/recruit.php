<div class="cta__recruit">
    <a href="<?php echo esc_url( home_url('/') ); ?>recruit/" class="recruit flex">
        <div class="cta__recruit__title">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <h2 class="font-en t-white english">Recruit</h2>
            <?php else: ?>
                <h2 class="t-white">採用情報</h2>
                <p class="font-en t-white">Recruit</p>
            <?php endif; ?>
        </div>
        <div class="cta__recruit__text">
            <?php if (qtranxf_getLanguage() == 'en') : ?>
                <p class="t-white">Let's work together to bring about a once-in-a-century industrial revolution at MECHANOCROSS.<br>Let's innovate the industry with mechanochemical organic synthesis.</p>
            <?php else: ?>
                <p class="t-white">１００年に１度の産業の変革をメカノクロスで一緒に実現しましょう！<br>メカノケミカル有機合成で産業に変革を！</p>
            <?php endif; ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-white-outline.svg" alt="右矢印のアイコン">
    </a>
</div>