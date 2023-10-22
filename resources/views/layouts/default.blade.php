<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<!-- Mirrored from bilury.bithemer.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:11:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home 1 - Bilury - Luxury Hotel Bootstrap HTM Template</title>
    <meta name="description" content="Bilury - Luxury Hotel Bootstrap HTM Template. The Bilury is a luxury, modern and clean hotel template. It is suitable for building Hotels, Resorts, Hostel, Homestay, websites.">
    <meta name="keywords" content="bootstrap 5, hotel, homstay, resort, gulp, Luxury, website template, html5 template, site template, Bootstrap Template">
    <meta name="author" content="Bithemer">
    <link href="assets/img/logos/favicon.png" rel="shortcut icon">
    <link href="assets/css/bundle.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- /Head -->
<!-- Set Body to full screen when Preloader is showing. -->

<body class="vh-100 vw-100 overflow-hidden">
<!-- Header -->
<!-- Preloader -->
<div class="position-fixed top-0 bottom-0 bg-white vw-100 z-1100 d-flex align-items-center justify-content-center" id="preloader">
    <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- /Preloader -->
<!-- Header -->
<header id="header" class="header transition-base fixed-top z-1030  " data-bs-theme="dark">
    <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
        <div class="container justify-content-end">
            <!-- Brand -->
            <a class="navbar-brand flex-grow-1" id="brandHeader" href="index.html">
                <img src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" class="logo" alt="">
                <h1 class="d-none">Bilury</h1>
            </a>
            <!-- /Brand -->
            <!-- offcanvas Navbar -->
            <div class="offcanvas offcanvas-navbar offcanvas-end border-start-0" tabindex="-1" id="offcanvasNavbar">
                <!-- Offcanvas header -->
                <div class="offcanvas-header">
                    <a href="index.html">
                        <img class="logo-light" src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Bilury Hotel" title="Bilury Hotel">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- /Offcanvas header -->
                <div class="offcanvas-body justify-content-end">
                    <!-- Navbar nav-->
                    <ul class="navbar-nav align-items-xl-center me-xl-3 mb-3 mb-xl-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-hover text-uppercase active" href="index.html" data-bs-display="static">
                                <span>Home</span>
                                <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                <li><a class="dropdown-item active" href="index.html">Home 1</a></li>
                                <li><a class="dropdown-item active2" href="home-2.html">Home 2</a></li>
                                <li><a class="dropdown-item active3" href="home-3.html">Home 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-hover text-uppercase @@rooms" href="rooms-1.html" data-bs-display="static">
                                <span>Rooms & Suites</span>
                                <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                <li><a class="dropdown-item @@rooms1" href="rooms-1.html">Rome 1</a></li>
                                <li><a class="dropdown-item @@rooms2" href="rooms-2.html">Rome 2</a></li>
                                <li><a class="dropdown-item @@rooms3" href="rooms-3.html">Rome 3</a></li>
                                <li><a class="dropdown-item @@singleRooms1" href="single-room-1.html">Single Room 1</a></li>
                                <li><a class="dropdown-item @@singleRooms2" href="single-room-2.html">Single Room 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-hover text-uppercase @@tours" href="tour-list.html" data-bs-display="static">
                                <span>Tours</span>
                                <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                <li><a class="dropdown-item @@tourCategories" href="tour-categories.html">Tour categories</a></li>
                                <li><a class="dropdown-item @@tourList" href="tour-list.html">Tour list</a>
                                </li>
                                <li><a class="dropdown-item @@singleTour" href="single-tour.html">Single tour</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link text-uppercase @@gallery" href="gallery.html">Gallery</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-hover text-uppercase @@pages" href="javascript:void(0);" data-bs-display="static">
                                <span>Pages</span>
                                <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                            </a>
                            <div class="dropdown-menu mega-menu dropdown-menu-end mt-xl-6" data-bs-popper="static">
                                <div class="d-xl-flex flex-nowrap p-0 p-xl-3">
                                    <ul class="list-unstyled row">
                                        <li class="col-12 col-xl-4">
                                            <span class="mega-menu-title fw-semibold">Extra Services</span>
                                            <ul class="list-unstyled ms-4 ms-xl-0">
                                                <li><a class="mega-menu-item @@tourBooking" href="tour-list.html">Tour booking</a></li>
                                                <li><a class="mega-menu-item @@meetingsEvents" href="meetings-events.html">Meetings & events</a></li>
                                                <li><a class="mega-menu-item @@restaurant" href="restaurant.html">Restaurant & bar</a></li>
                                                <li><a class="mega-menu-item @@spaWellness" href="spa-wellness.html">Spa & wellness</a></li>
                                                <li><a class="mega-menu-item @@airportPickup" href="airport-pickup.html">Airport pickup</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-12 col-xl-4">
                                            <span class="mega-menu-title fw-semibold">My Account</span>
                                            <ul class="list-unstyled ms-4 ms-xl-0">
                                                <li><a class="mega-menu-item @@dashboard" href="dashboard.html">Dashboard</a></li>
                                                <li><a class="mega-menu-item @@booking" href="booking.html">Booking</a></li>
                                                <li><a class="mega-menu-item @@profile" href="profile.html">Profile</a></li>
                                                <li><a class="mega-menu-item @@register" href="register.html">Register</a></li>
                                                <li><a class="mega-menu-item @@login" href="login.html">Login</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-12 col-xl-4">
                                            <span class="mega-menu-title fw-semibold">Other pages</span>
                                            <ul class="list-unstyled ms-4 ms-xl-0">
                                                <li><a class="mega-menu-item @@about" href="about.html">About</a></li>
                                                <li><a class="mega-menu-item @@news" href="news.html">News</a>
                                                </li>
                                                <li><a class="mega-menu-item @@contact" href="contact.html">Contact</a></li>
                                                <li><a class="mega-menu-item @@comingSoon" href="coming-soon.html">Coming soon</a></li>
                                                <li><a class="mega-menu-item @@404" href="404.html">404</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#ocRightInfo">
                                <i class="hicon hicon-bold hicon-instant"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /Navbar nav -->
                    <!-- Sub Links -->
                    <div class="d-flex flex-column flex-xl-row align-items-xl-center small">
                        <!-- Language & Currency -->
                        <div class="mt-5 mt-xl-0 order-1 order-xl-0">
                            <ul class="nav flex-row me-xl-7 mb-3 mb-xl-0">
                                <li class="nav-item me-4">
                                    <a class="navbar-text d-flex align-items-center" data-bs-toggle="modal" href="#mdlLanguage">
                                        <img src="assets/img/flags/en.svg" height="14" alt="" class="me-1">
                                        <span>EN</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-text d-flex" data-bs-toggle="modal" href="#mdlCurrency">
                                        <span>USD</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Language & Currency -->
                        <!-- Reservation -->
                        <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                            <a href="reservation.html" class="btn btn-primary">
                                <i class="hicon hicon-24hour-room-service"></i>
                                <span>Reservation</span>
                            </a>
                        </div>
                        <!-- /Reservation -->
                    </div>
                    <!-- /Sub Links -->
                </div>
            </div>
            <!-- /offcanvas Navbar -->
            <!-- Account link -->
            <div class="ms-0 ms-xl-4">
                <a href="{{ asset(route('login')) }}">
                    <img src="assets/img/avatars/na.png" srcset="./assets/img/avatars/na@2x.png 2x" class="rounded-circle bg-primary-50" width="36" height="36" alt="">
                </a>
            </div>
            <!-- /Account link -->
            <!-- Nav toggler -->
            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /Nav toggler -->
        </div>
    </nav>
</header>
<!-- /Header -->
<!-- Right slider info -->
<div class="offcanvas offcanvas-end border-start-0 text-body-tertiary" tabindex="-1" id="ocRightInfo" aria-labelledby="ocRightInfo" data-bs-theme="dark">
    <div class="offcanvas-header">
        <!-- Brand -->
        <a href="index.html">
            <img class="logo-light" src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Bilury Hotel" title="Bilury Hotel">
        </a>
        <!-- /Brand -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Contact Info -->
        <div class="mb-10">
            <h6 class="text-uppercase ls-1 ff-sub">Contact Info</h6>
            <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-flights-pin"></i>
                    </span>
                <span class="flex-grow-1">610 Placer Loquen, Paris, France.</span>
            </div>
            <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-telephone"></i>
                    </span>
                <span>+33 (0) 1 89 78 67 56</span>
            </div>
            <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-email-envelope"></i>
                    </span>
                <span>Booking@example.com</span>
            </div>
        </div>
        <!-- /Contact Info -->
        <!-- Learn more -->
        <div class="mb-10">
            <h6 class="text-uppercase ls-1 ff-sub">Learn more</h6>
            <ul class="list-unstyled">
                <li><a class="text-body link-hover-primary d-inline-block mb-2" href="about.html">Bilury's Story</a></li>
                <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Terms of Use</a></li>
                <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <!-- /Learn more -->
        <!-- Follow Us -->
        <div>
            <h6 class="text-uppercase ls-1 ff-sub">Follow Us</h6>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-body link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-body link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-body link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                            <path d="M10 9l5 3l-5 3z"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-body link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 20l4 -9"></path>
                            <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-body link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                            <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                            <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                            <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                            <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                            <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Follow Us -->
    </div>
</div>
<!-- /Right slider info -->
<!-- Language modal -->
@yield('content')
<!-- Footer -->
<footer id="footer" class="bg-body text-body-tertiary pt-14 pb-12" data-bs-theme="dark">
    <div class="container">
        <!-- Brands system -->
        <div class="border-bottom mb-9 pb-5">
            <div class="row" data-cues="fadeIn">
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l1.png" srcset="./assets/img/logos/l1@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l2.png" srcset="./assets/img/logos/l2@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l3.png" srcset="./assets/img/logos/l3@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l4.png" srcset="./assets/img/logos/l4@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l5.png" srcset="./assets/img/logos/l5@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/img/logos/l6.png" srcset="./assets/img/logos/l6@2x.png 2x" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Brands system -->
        <!-- Footer top -->
        <div class="border-bottom">
            <div class="row" data-cues="fadeIn">
                <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                    <!-- Brand -->
                    <div class="mb-8">
                        <a href="index.html" class="d-inline-block">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/footer-light.png" srcset="./assets/img/logos/footer-light@2x.png 2x" alt="">
                            </figure>
                        </a>
                        <p>
                            <em>Sed diam constituam ei, qui erat probo dissentiet ex. Id vim libris volutpat, pri cu errem timeam cotidieque, purto summo has te. An quis eligendi atomorum duo, latine veritus vituperata vim no. Duo errem latine scribentur an.</em>
                            <a href="about.html" class="text-body link-hover-primary">[+]</a>
                        </p>
                    </div>
                    <!-- /Brand -->
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                    <!-- Contact Info -->
                    <div class="mb-8">
                        <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Contact Info</h5>
                        <div class="pt-2">
                            <p>
                                <span>610 Placer Loquen, Paris, France.</span>
                            </p>
                            <p>
                                <span>+33 321-654-9876 (Ext: 123).</span>
                            </p>
                            <p>
                                <a href="#" class="text-body link-hover-primary">Booking@example.com</a>
                            </p>
                            <p>
                                <a href="#" class="text-body link-hover-primary">www.example.com</a>
                            </p>
                        </div>
                    </div>
                    <!-- /Contact Info -->
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                    <!-- Quick Links -->
                    <div class="mb-8">
                        <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Quick Links</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="about.html">Bilury's Story</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="team.html">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="news.html">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="contact.html">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="dashboard.html">My Account</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="rooms-1.html">Rooms & Suites</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="spa-wellness.html">Spa & Wellness</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="restaurant.html">Restaurant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="tours-list.html">Booking tours</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="airpost-pickup.html">Airpost pickup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Quick Links -->
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                    <div class="mb-8">
                        <!-- Mobile App -->
                        <div class="mb-6">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Get the app</h5>
                            <div class="pt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <figure>
                                                <img src="assets/img/icons/i1.svg" class="img-fluid" alt="">
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <figure>
                                                <img src="assets/img/icons/i2.svg" class="img-fluid" alt="">
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Mobile App -->
                        <!-- Social -->
                        <div class="mb-6">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Connect social</h5>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-body link-hover-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body link-hover-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body link-hover-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                            <path d="M10 9l5 3l-5 3z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body link-hover-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 20l4 -9"></path>
                                            <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7"></path>
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body link-hover-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                            <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                            <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                            <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                            <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                            <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Social -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer top -->
        <!-- Footer Bottom -->
        <div class="mt-9">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>© 2023 Bilury Hotel. All rights reserved.</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text-start text-md-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-body link-hover-primary" href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body link-hover-primary" href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom -->
    </div>
</footer>
<!-- Scroll top -->
<a href="#" class="scroll-top active"><i class="hicon hicon-thin-arrow-up"></i></a>
<!-- /Scroll top -->
<!-- /Footer -->
<!-- Scripts -->
<script src="assets/js/bundle.min.js"></script>
@stack('script')
<!-- /Scripts -->
</body>


<!-- Mirrored from bilury.bithemer.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:12:14 GMT -->
</html>