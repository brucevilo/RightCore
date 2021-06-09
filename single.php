<?php get_header(); ?>
<section id="header-banner" class="p-banner p-banner__bg">
    <div class="title_banner">
        <div class="p-title u-pbt-120">
            <div class="p-announce--title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/mouth-star.png" alt="Announce Left">
            </div>
            <h2 class="p-title--engW">
                NEWS
            </h2>
            <h3 class="p-title--jaB">
                お知らせ
            </h3>
        </div>
    </div>
</section>
<main class="p-base n-details">
    <div class="n-details__wrapper">
        <h4><?php the_time('Y.m.d'); ?></h4>
        <h2><?php the_title(); ?></h2>

        <div class="img-holder">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            echo '<div class="img" style="background-image: url(' . $url . ')"></div>'; ?>
        </div>
        <?php the_content(); ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button c-button--back">
            一覧に戻る
        </a>
    </div>
</main>
<?php get_footer(); ?>