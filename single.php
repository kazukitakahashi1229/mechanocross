<?php get_header(); ?>

<div class="single__header">
    <div class="container md flex">
        <div class="single__header__meta flex">
            <div class="single__header__meta__top flex">
                <time class="font-en"><?php the_time('Y.m.d'); ?></time>
                <?php $cats = get_the_category(); ?>
                <ul class="flex">
                <?php foreach($cats as $cat): ?>
                    <li><a class="font-en t-main" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
        <?php if(has_post_thumbnail()): ?>
        <div class="single__header__thumb" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
        <?php else: ?>
        <div class="single__header__thumb" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/jpg/no-image.jpg);"></div>
        <?php endif; ?>
    </div>
</div>

<main>
    <div class="container md">
        <div class="entry js-anime anime-fadeInUp">
			<div class="entry__cont js-anime anime-fadeInUp">
				<?php the_content(); ?> 
			</div>
        </div>
        <div class="button center flex js-anime anime-fadeInUp">
            <a href="<?php echo esc_url( home_url('/') ); ?>news/" class="outline" rel="noopener noreferrer">
                <span class="font-en">Back to list</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/right-arrow-main.svg" alt="右矢印">
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>