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


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4700177-78"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-4700177-78');
    </script>

    <!-- Hotjar Tracking Code for https://stayrevy.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1931617,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>


</head>

<body <?php body_class(); ?>>
<!--<div class="notice-bar bg-danger py-1">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-12 text-center text-white">-->
<!--                <p class="mb-0"><span class="d-block d-md-inline mb-50 mb-md-0"><b>COVID-19 Notice:</b> What is Stay Revy doing to keep you safe?</span><a href="--><?php //echo esc_url(home_url('/covid-19')); ?><!--" class="btn btn-light mb-0 ml-md-50">Read More</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="push">



    <?php get_template_part('partials/header/hero-nav-overlay'); ?>