<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/custom.css" />
</head>
<body class='home blog wp-custom-logo NoBrdRa' style='background-image: url(<?= get_template_directory_uri() ?>/assets/images/background.png);'>
<div class="Tp-Wp" id="Tp-Wp">
    <?php include_once THEME_URL.'/templates/header.php' ?>
    <?php if(get_option('ophim_is_ads') == 'on') { ?>
        <div class="ad-container">
            <div id=top_addd style="text-align: center"></div>
        </div>
    <?php } ?>
    <div class="Body Container">
        <div class="Content">
            <div class="content">

