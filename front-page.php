<?php get_header();?>
<main id="main">
            <section id="sec-1-MV">
                <img src="<?php echo get_template_directory_uri();?>../assets/img/top/MV.jpg" class="top_MV__banner d-n-pc" alt="MV Banner">
                <img src="<?php echo get_template_directory_uri();?>../assets/img/top/MV-sp.jpg" class="top_MV__banner d-tabpc-bl" alt="MV Banner">
            </section>
            <section id="sec-2-about" class="top_about">
                <div class="top_about__bg"></div>
                <div class="top_container--about">
                    <div class="p-title u-mb-61">
                        <div class="p-announce--default">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/mouth.png" alt="Announce Left">
                        </div>
                        <h2 class="p-title--engW">
                            ABOUT US
                        </h2>
                        <h3 class="p-title--jaB">
                            57タイヤワークスを知る
                        </h3>
                    </div>
                    <div class="top_about__cont">
                        <div class="l-text">
                            <h2 class="slog-ttl">
                                タイヤのことなら57タイヤワークス
                            </h2>
                            <p class="slog-desc">
                                7月1日より店名変更いたしました。<br>
                                更なるサービス向上を図り、皆様に安心してお任せいただける、愛される店舗として一層努力してまいります。
                            </p>
                            <a href="<?php echo get_permalink( get_page_by_path( 'About' ) ) ?>" class="c-button c-button--black">
                                more
                            </a>
                        </div>
                        <div class="r-img">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top//front.jpg" alt="Front Building">
                        </div>
                    </div>
                </div>
            </section>  
            <section id="sec-3-service" class="top_service">
                <div class="top_service__bg"></div>
                <div class="top_container--service">
                    <div class="p-title u-mb-61">
                        <div class="p-announce--default">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/mouth.png" alt="Announce Left">
                        </div>
                        <div class="p-title--engW">
                            SERVICE
                        </div>
                        <div class="p-title--jaB">
                            事業案内
                        </div>
                    </div>
                    <div class="top_service__cont">
                        <div class="inner-cont">
                            <div class="img-wheel">
                                <img src="<?php echo get_template_directory_uri();?>../assets/img/top/rim-frame.jpg" alt="Rim Parts">
                            </div>
                            <a href="<?php echo get_permalink( get_page_by_path( 'Service' ) ) ?>#sale" class="c-button c-button--white">
                                販売
                            </a>
                            
                        </div>
                        <div class="inner-cont">
                            <div class="img-wheel">
                                <img src="<?php echo get_template_directory_uri();?>../assets/img/top/tyre-frame.jpg" alt="Tyre Parts">
                            </div>
                            <a href="<?php echo get_permalink( get_page_by_path( 'Service' ) ) ?>#purchase" class="c-button c-button--white">
                                買取
                            </a>
                        </div>
                    </div>
                </div>
            </section>  
            <section id="sec-4-banner" class="top_banner">
                <div class="top_banner__bg"></div>
                <div class="top_container--banner">
                    <div class="top_banner__cont">
                        <div class="banner">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/banner-01.jpg" alt="Banner 1">
                        </div>
                        <div class="banner">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/banner-02.jpg" alt="Banner 2">
                        </div>
                        <div class="banner">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/banner-03.jpg" alt="Banner 3">
                        </div>
                    </div>
                </div>
            </section>

            <section id="sec-5-news" class="top_news">
                <div class="top_news__bg"></div>
                <div class="top_container--news">
                    <div class="top_news__cont">
                        <div class="p-announce--news">
                            <img src="<?php echo get_template_directory_uri();?>../assets/img/top/mouth-white.png" alt="Announce Left">
                        </div>
                        <div class="p-title u-mb-61">
                            
                            <div class="p-title--engB">
                                NEWS
                            </div>
                            <div class="p-title--jaW">
                                お知らせ
                            </div>
                        </div>
                        <div class="news-links">
                        <?php

                            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                            
                            $args = array(
                                'post_type' => 'post',
                                'post_status'=>'publish',
                                'posts_per_page' => 3,
                                'paged' => $paged,
                            );
                            
                            $the_query = new WP_Query($args);
                        ?>
                            
                        <?php if ( $the_query->have_posts() ) : ?>
                                
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <a href="<?php echo get_permalink();?>" class="link">
                                    <div class="date">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                    </div>
                                    <div class="announcement-ttl">
                                        <h2 class="news-cont">
                                            <?php the_title();?>
                                        </h2>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </a>
                        
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </div>

                        <a href="<?php echo get_permalink( get_page_by_path( 'News' ) ) ?>" class="c-button c-button--black">
                            more
                        </a>
                    </div>
                </div>
            </section>
        </main>

<?php get_footer();?>