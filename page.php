<?php get_header(); ?>

<div class="page__header">
    <div class="container">
        <div class="page__header__cont grid">
            <h1><?php the_title(); ?></h1>
            <p class="font-en"><?php the_field('title-en'); ?></p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/wave-white-pc.png" alt="wave">
</div>

<main>
    <div class="container md">
        <div class="entry js-anime anime-fadeInUp">
			<div class="entry__cont js-anime anime-fadeInUp">
				<?php the_content(); ?> 
			</div>
        </div>
        <div class="button center flex js-anime anime-fadeInUp">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="outline" rel="noopener noreferrer">
                <span class="font-en">Back to top</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印">
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>