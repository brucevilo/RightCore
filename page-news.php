<?php get_header(); ?>
<main class="p-base">
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
    <main class="n-main">
        <div class="n-main__wrapper">
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php echo get_permalink(); ?>" class="n-main__link">
                        <!-- Display New -->
                        <div class="n-main__date">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </div>
                        <div class="n-main__desc">
                            <h2 class="news-cont">
                                <?php echo the_title(); ?>
                            </h2>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php echo easy_wp_pagenavigation($the_query); ?>
            <?php endif; ?>
        </div>
        
    </main>
    <?php get_footer(); ?>