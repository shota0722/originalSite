<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="about basketball team u18">
    <title>Jollies U18 Basketball Team</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1><a href="<?php echo esc_url(home_url()); ?>"><img class="logo-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.jpg'); ?>" alt=""></a></h1>
        <div id="toggle-btn">
            <img class="logo-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/orangeone.png'); ?>" alt="">
            <p class="gothic">MENU</p>
        </div>
        <div id="toggle-cover">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.jpg'); ?>" alt=""></a>
            <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>">メインページ</a></li>
                <li><a href="">ユース情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                <li><a href="">トライアウト</a></li>
            </ul>
            <div class="logo-img" id="close-btn">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- togglebtn -->
    </header>