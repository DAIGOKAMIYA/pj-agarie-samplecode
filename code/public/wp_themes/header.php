<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/lib/slick/slick-theme.css" />

    <?php if (is_home()) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/index.css">
    <?php } elseif (is_page('service')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/service.css">
    <?php } elseif (is_page('about')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/about.css">
    <?php } elseif (is_page('staff')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/staff.css">
    <?php } elseif (is_page('career') || is_page('career_form') || is_page('career_form-thanks')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/career.css">
    <?php } elseif (is_page('contact')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/contact.css">
    <?php } elseif (is_page('contact-thanks')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/contact.css">
    <?php } elseif (is_page('privacy')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/privacy.css">
    <?php } elseif (is_page('news')) { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/news.css">
    <?php } ?>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="l-layout">