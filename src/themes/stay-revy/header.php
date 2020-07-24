<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://use.typekit.net/nuv1mhu.css">
    <script src="https://kit.fontawesome.com/385662c85c.js" crossorigin="anonymous" SameSite="none Secure"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="push">

    <?php get_template_part('partials/header/hero-nav-overlay'); ?>