<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="OddMutt LLC">
    <meta name="description" content="Namaste Pembroke Pines Acupuncture">
    <meta name="keywords" content="Acupuncture, Acupuncture Pembroke Pines, Holistic Health, Wellness, Traditional Chinese Medicine, Pain Relief, Stress Management, Herbal Medicine, Acupuncture Clinic, South Florida Acupuncture">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php if (isset($titulo)) echo $titulo; ?> | Namaste Pembroke Pines Acupuncture">
    <meta property="og:description" content="Namaste Pembroke Pines Acupuncture">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pembrokepinesacupuncture.com/">
    <meta property="og:image" content="https://pembrokepinesacupuncture.com/images/og-image.jpg">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php if (isset($titulo)) echo $titulo; ?> | Namaste Pembroke Pines Acupuncture">
    <meta name="twitter:description" content="Namaste Pembroke Pines Acupuncture">
    <meta name="twitter:image" content="https://pembrokepinesacupuncture.com/images/twitter-image.jpg">

    <!-- Font Imports -->
    <link rel="stylesheet" href="https://use.typekit.net/mym7qil.css">

    <!-- Core Style -->
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/css/acupucture.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="/build/css/font-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/build/css/custom.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Document Title -->
    <title><?php if (isset($titulo)) echo $titulo; ?> | Namaste Pembroke Pines Acupuncture</title>
</head>
<body class="stretched page-transition" data-loader-html="<img class='infinite animated pulse' src='/build/img/logo.webp' width='300' loading='eager' style='padding: 1rem; z-index:1000; !important'>">


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">


    <?php 
        include_once __DIR__ .'/templates/header.php';
        echo $contenido;
        include_once __DIR__ .'/templates/footer.php'; 
    ?>


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/build/js/bundle.min.js" defer></script>
	<script src="/build/js/plugins.min.js"></script>
	<script src="/build/js/functions.bundle.js"></script>

    <!-- Parallax Script
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

</body>
</html>