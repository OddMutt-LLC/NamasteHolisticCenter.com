<?php
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
$current_path = trim($_SERVER['REQUEST_URI'], '/');
?>

<!-- Top Bar
============================================= -->
<div id="top-bar" class="transparent-topbar dark d-none d-md-flex">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto dark">

                <!-- Top Social
                ============================================= -->
                <ul id="top-social">
                    <li><a href="https://facebook.com/semicolonweb" class="h-bg-facebook" target="_blank"><span class="ts-icon"><i class="fa-brands fa-facebook-f"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="https://youtube.com/semicolonweb" class="h-bg-whatsapp" target="_blank"><span class="ts-icon"><i class="fa-brands fa-whatsapp"></i></span><span class="ts-text">Whatsapp</span></a></li>
                    <li><a href="https://instagram.com/semicolonweb" class="h-bg-instagram" target="_blank"><span class="ts-icon"><i class="fa-brands fa-instagram"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+19542004587" class="h-bg-call"><span class="ts-icon"><i class="fa-solid fa-phone"></i></span><span class="ts-text">(954) 200-4587</span></a></li>
                    <li><a href="mailto:info@pembrokepinesacupuncture.com" class="h-bg-email3"><span class="ts-icon"><i class="bi-envelope-fill"></i></span><span class="ts-text">info@pembroepinesacupuncture.com</span></a></li>
                </ul><!-- #top-social end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->
<!-- Header
============================================= -->
<header id="header" class="transparent-header floating-header header-size-md transparent-header-responsive">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/">
                        <img class="logo-default p-2" srcset="/build/img/logo.webp, /build/img/logo.webp 2x" src="/build/img/logo.webp" alt="Namaste Logo">
                        <img class="logo-dark p-2" srcset="/build/img/logo-dark.webp, /build/img/logo-dark.webp 2x" src="/build/img/logo-dark.webp" alt="Namaste Logo">
                    </a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <a href="tel:+19542004587"class="button button-rounded ms-3 d-none d-sm-block">Call Now</a>

                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu with-arrows">

                    <ul class="menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                        <li class="menu-item <?php echo $current_page == '' ? 'current' : ''; ?>"><a class="menu-link" href="/"><div>Home</div></a></li>
                        <li class="menu-item <?php echo $current_page == 'about' ? 'current' : ''; ?>"><a class="menu-link" href="/about"><div>About Us</div></a></li>
                        <li class="menu-item">
                            <a class="menu-link" <?php echo $current_page == '' ? "data-scrollto='#section-services'" : "href='/#section-services'"; ?> >
                                <div>Services</div>
                            </a>
                        </li>
                        <li class="menu-item mega-menu <?php echo strpos($current_path, 'specialties') === 0 ? 'current' : ''; ?>"><a class="menu-link" href="#"><div>Specialties</div></a>
                            <div class="mega-menu-content mega-menu-style-2 px-0">
                                <div class="container">
                                    <div class="row">
                                        <a href="/specialties/pain-management" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-4">
                                            <div class="feature-box">
                                                <div class="fbox-icon mb-2">
                                                    <img src="/build/img/icons/pain.webp" alt="Feature Icon" class="bg-transparent rounded-0">
                                                </div>
                                                <div class="fbox-content">
                                                    <h3 class="text-transform-none ls-0">Pain Management & Functional Wellness</h3>
                                                    <p>Acupuncture is widely recognized as a safe, effective non-pharmacologic option to manage chronic pain, headaches, joint issues, sciatica, and more.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/specialties/fertility" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-4">
                                            <div class="feature-box">
                                                <div class="fbox-icon mb-2">
                                                    <img src="/build/img/icons/fertility.webp" alt="Feature Icon" class="bg-transparent rounded-0">
                                                </div>
                                                <div class="fbox-content">
                                                    <h3 class="text-transform-none ls-0">Fertility Support for Women & Men</h3>
                                                    <p>We provide targeted acupuncture treatments to support hormonal balance, cycle regulation, stress reduction, and fertility journeys for women and men.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item <?php echo $current_page == 'faq' ? 'current' : ''; ?>"><a class="menu-link" href="/faq"><div>FAQs</div></a></li>
                        <li class="menu-item <?php echo $current_page == 'contact' ? 'current' : ''; ?>"><a class="menu-link" href="/contact"><div>Contact</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->