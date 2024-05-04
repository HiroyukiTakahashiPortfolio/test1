<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php titles(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>
    <header>
        <div class="wrapper">
            <h1><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">PandaLion</a></h1>
            <div class="main_menu">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo home_url('/service'); ?>">Service</a></li>
                    <li><a href="<?php echo home_url('/menu'); ?>">Menu</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                </ul>
            </div>

            <div class="conversion_menu">
                <ul>
                    <li><a href="">CONTACT</a></li>
                </ul>

            </div>
        </div>
    </header>