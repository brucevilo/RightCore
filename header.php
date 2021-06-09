<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/page/page.css">
    <?php wp_head();?>	
</head>
<body <?php body_class(); ?>>

<?php
    $iconMenu = '<svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="75px" height="75px">
                    <path fill-rule="evenodd"  stroke-width="4px" stroke="rgb(25, 25, 25)" fill="rgb(253, 226, 50)"
                        d="M8.000,8.000 L68.000,8.000 L68.000,68.000 L8.000,68.000 L8.000,8.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(25, 25, 25)"
                        d="M23.000,47.000 L53.000,47.000 L53.000,53.000 L23.000,53.000 L23.000,47.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(25, 25, 25)"
                        d="M23.000,35.000 L53.000,35.000 L53.000,41.000 L23.000,41.000 L23.000,35.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(25, 25, 25)"
                        d="M23.000,23.000 L53.000,23.000 L53.000,29.000 L23.000,29.000 L23.000,23.000 Z"/>
                </svg>';
    $iconClose = '<svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="75px" height="75px">
                    <path fill-rule="evenodd"  stroke-width="4px" stroke="rgb(25, 25, 25)" fill="rgb(253, 226, 50)"
                        d="M8.000,8.000 L68.000,8.000 L68.000,68.000 L8.000,68.000 L8.000,8.000 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(25, 25, 25)"
                        d="M25.272,46.485 L46.485,25.272 L50.728,29.515 L29.515,50.728 L25.272,46.485 Z"/>
                    <path fill-rule="evenodd"  fill="rgb(25, 25, 25)"
                        d="M29.515,25.272 L50.728,46.485 L46.485,50.728 L25.272,29.515 L29.515,25.272 Z"/>
                </svg>';
?>

<header id="header" class="l-header">
    <div class="l-header__left">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/header/logo.png" alt="Main logo">
                </h1>
            </a>
        </div>
    </div>
    <div class="l-header__right">
        <div class="nav">
            <ul class="nav__links">
                <li class="nav__item">
                    <a href="<?php echo get_permalink( get_page_by_path( 'About' ) ) ?>">
                        57タイヤワークス
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo get_permalink( get_page_by_path( 'Service' ) ) ?>">
                        事業案内
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo get_permalink( get_page_by_path( 'Storage' ) ) ?>">
                        タイヤ預かりサービス
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo get_permalink( get_page_by_path( 'News' ) ) ?>">
                        お知らせ
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo get_permalink( get_page_by_path( 'Company' ) ) ?>">
                        会社情報
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-menu">
            <input type="checkbox" id="toggle" />
            <div class="menu">
                <a href="<?php echo get_permalink( get_page_by_path( 'About' ) ) ?>">57タイヤワークス</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'Service' ) ) ?>">事業案内</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'Storage' ) ) ?>">タイヤ預かりサービス</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'News' ) ) ?>">お知らせ</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'Company' ) ) ?>">会社情報</a>
            </div>
            <label class="menu-burg" for="toggle"><?=$iconMenu?></label>
            <label class="close-burg" for="toggle"><?=$iconClose?></label>
        </div>
    </div>
</header>