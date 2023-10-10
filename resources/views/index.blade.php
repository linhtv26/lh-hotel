@extends('layouts.default')

@section('content')
    <main>
        <!-- Hero carousel -->
        <section class="hero-carousel">
            <div id="heroCarousel" class="carousel slide carousel-fade">
                <!-- Carousel indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- /Carousel indicators -->
                <!-- Slide list -->
                <div class="carousel-inner">
                    <!-- Slide -->
                    <div class="carousel-item active">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-700" data-image-src="assets/img/hero/h2.jpg">
                            <div class="bg-content">
                                <div class="carousel-caption top-50 start-50 translate-middle w-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-xl-7 col-lg-9">
                                                <h4 class="display-4 fw-semibold ff-heading text-uppercase">Paris Bilury Hotel</h4>
                                                <p class="fs-4 mb-0">Lorem ipsum dolor sit amet, ei mel debet probatus, vim ad malis docendi corpora, no numquam corrumpit prodesset pri.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <!-- /Slide -->
                    <div class="carousel-item">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-700" data-image-src="assets/img/hero/h5.jpg">
                            <div class="bg-content">
                                <div class="carousel-caption top-50 start-50 translate-middle w-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-xl-7 col-lg-9">
                                                <h4 class="display-4 fw-semibold ff-heading text-uppercase">Luxurious Design</h4>
                                                <p class="fs-4 mb-0">Ei nec choro doctus, an esse postea mel, tamquam intellegam mei no. Vis ne incorrupte conclu sionemque ne his.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide -->
                    <!-- /Slide -->
                    <div class="carousel-item">
                        <div class="image-wrapper bg-image bg-overlay bg-overlay-700" data-image-src="assets/img/hero/h3.jpg">
                            <div class="bg-content">
                                <div class="carousel-caption z-1 top-50 start-50 translate-middle w-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-11 col-xl-7 col-lg-9">
                                                <h4 class="display-4 fw-semibold ff-heading text-uppercase">Exquisite Space</h4>
                                                <p class="fs-4 mb-0">Vel ut mutat inani contentiones. Ea dico purto sit, sale consulatu et sea. Sale pertinax temporibus an sea, ius an.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                </div>
                <!-- /Slide list -->
                <!-- Carousel navs -->
                <button class="carousel-control-prev d-none d-lg-inline-block" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-lg-inline-block" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <!-- /Carousel navs -->
            </div>
            <!-- Check rooms -->
            <section id="checkRooms" class="check-room">
                <div class="container">
                    <h2 class="d-none">Check rooms</h2>
                    <div class="row justify-content-center">
                        <div class="col-12 col-xxl-9 col-xl-10">
                            <div class="card card-check-room border-0">
                                <div class="card-body ps-3 pe-3 ps-sm-6 pe-sm-6 pb-3">
                                    <div class="row g-2">
                                        <div class="col-12 col-lg-5">
                                            <!-- Input date -->
                                            <div class="mb-3">
                                                <div class="control-icon">
                                                    <label class="hicon hicon-menu-calendar text-light cursor-pointer" for="txtCheckDate"></label>
                                                    <input id="txtCheckDate" type="text" class="check-date form-control bg-white text-light bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                                </div>
                                            </div>
                                            <!-- /Input date -->
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="row g-2">
                                                <div class="col-12 col-lg-7">
                                                    <!-- Input number of guests -->
                                                    <div class="mb-3">
                                                        <div class="control-icon">
                                                            <label class="hicon hicon-travelers text-light cursor-pointer" for="btnCheckGuest"></label>
                                                            <div class="dropdown" data-total-guest="">
                                                                <button class="form-select form-select-indicator-light w-100 text-start bg-white text-light bg-opacity-15 border-white border-opacity-10 shadow-sm" id="btnCheckGuest" data-bs-auto-close="outside" type="button" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="text-nowrap">
                                                                        <span data-total-adults=""></span>, <span data-total-children=""></span>
                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu animate slideIn p-4">
                                                                    <li>
                                                                        <div class="mb-3">
                                                                            <label for="txtCheckAdults" class="form-label">Adults</label>
                                                                            <div class="input-group shadow-sm">
                                                                                <button class="btn btn-outline-light" type="button" data-minus-adults="">
                                                                                    <i class="hicon hicon-minus-thin small"></i>
                                                                                </button>
                                                                                <input type="text" class="form-control text-center" placeholder="Adults" value="1" aria-label="Adults" id="txtCheckAdults" data-adults-max="10" data-input-adults="">
                                                                                <button class="btn btn-outline-light" type="button" data-plus-adults="">
                                                                                    <i class="hicon hicon-plus-thin small"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="mb-3">
                                                                            <label for="txtCheckChildren" class="form-label">Children</label>
                                                                            <div class="input-group shadow-sm">
                                                                                <button class="btn btn-outline-light" type="button" data-minus-children="">
                                                                                    <i class="hicon hicon-minus-thin small"></i>
                                                                                </button>
                                                                                <input type="text" class="form-control text-center" placeholder="Children" value="0" aria-label="Children" id="txtCheckChildren" data-children-max="20" data-input-children="">
                                                                                <button class="btn btn-outline-light" type="button" data-plus-children="">
                                                                                    <i class="hicon hicon-plus-thin small"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Input number of guests -->
                                                </div>
                                                <div class="col-12 col-lg-5">
                                                    <!-- Button -->
                                                    <div class="mb-3">
                                                        <a href="reservation.html" class="btn btn-primary w-100">
                                                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                            <span>Check Rooms</span>
                                                        </a>
                                                    </div>
                                                    <!-- /Button -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Check rooms -->
        </section>
        <!-- /Hero carousel -->
        <!-- About -->
        <section id="about" class="pt-14 pb-14">
            <div class="container">
                <div class="row align-items-start align-items-md-stretch" data-cues="fadeIn">
                    <div class="col-12 col-lg-6 order-1 order-lg-0">
                        <!-- Image -->
                        <div class="row g-0">
                            <div class="col-6">
                                <figure class="mb-0 pe-3 pe-md-4 pe-lg-5">
                                    <img src="assets/img/about/a2.jpg" srcset="./assets/img/about/a2@2x.jpg 2x" class="img-fluid w-100 rounded shadow-sm" alt="">
                                </figure>
                            </div>
                            <div class="col-6">
                                <figure class="mb-0 pt-9">
                                    <img src="assets/img/about/a1.jpg" srcset="./assets/img/about/a1@2x.jpg 2x" class="img-fluid w-100 rounded shadow-sm" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-lg-6 order-0 order-lg-1">
                        <!-- Description -->
                        <div class="bg-white h-100 d-flex align-items-center">
                            <div class="p-lg-5 mb-8">
                                <span class="mb-2 fw-medium text-secondary ff-sub text-uppercase ls-1 d-block">Welcome to</span>
                                <h2 class="text-uppercase ff-heading">Paris Bilury Hotel</h2>
                                <p class="mb-6">Id vel nostrud maiorum, quo ad quidam perfecto. Mea justo dicta accusata no, te has aeque dolores repudiare, his etiam pericula id. Utinam quaestio philosophia eos in, eu eam offendit laboramus intellegebat, cu est quis officiis. Est dictas legendos scribentur an. Vis ei tation iisque suscipit, vim id tota dolores hendrerit.</p>
                                <a href="about.html" class="scroll-to btn btn-primary">
                                    <span>Read More</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /Description -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->
        <!-- Location-->
        <section id="location" class="bg-primary-50 pt-14 pb-14">
            <div class="container">
                <div class="row g-0 align-items-start align-items-md-stretch" data-cues="fadeIn">
                    <div class="col-12 col-xl-4 col-lg-6">
                        <!-- Description -->
                        <div class="bg-white h-100 d-flex align-items-center">
                            <div class="p-6 p-lg-8">
                                <h2 class="text-uppercase ff-heading">Location & map</h2>
                                <p class="fs-6 fw-medium text-secondary text-secondary ff-sub text-uppercase ls-1">
                                    <i class="hicon hicon-flights-pin"></i>
                                    <span>610 Placer Loquen, Paris.</span>
                                </p>
                                <p>
                                    <span><i class="las la-map-marker-alt"></i></span>
                                </p>
                                <p class="mb-6">Virtute appellantur mea eu, eos an dicant posidonium efficiendi. Vix placerat eloquentiam no, eam cu bonorum sententiae</p>
                                <a href="#" class="scroll-to btn btn-primary">
                                    <span>View location</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /Description -->
                    </div>
                    <div class="col-12 col-xl-8 col-lg-6">
                        <!-- Maps -->
                        <iframe src="https://snazzymaps.com/embed/385606" class="border-0 w-100 d-block rounded shadow-sm overflow-hidden" style="height:400px"></iframe>
                        <!-- /Maps -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Location -->
        <!-- Rooms -->
        <section id="rooms" class="pt-14 pb-14 bg-body" data-bs-theme="dark">
            <div class="container">
                <!-- Description -->
                <div class="mb-10 text-center" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading mb-2">Rooms & Suites</h2>
                    <h4 class="h6 fw-normal text-body-secondary ff-sub text-uppercase ls-2">Sed diam constituam erat probo.</h4>
                </div>
                <!-- /Description -->
                <!-- Rooms List -->
                <div class="room-luxury-slider" data-cue="fadeIn">
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card card-overlay-slide text-bg-dark border-0">
                            <img src="assets/img/rooms/r2.jpg" srcset="./assets/img/rooms/r1@2x.jpg 2x" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <span class="d-block mb-2">
                                    <strong><sup>$</sup>85.00</strong> <span class="small">/ Night</span>
                                </span>
                                <h3 class="card-title mb-4 h4 ff-sub text-uppercase fw-semibold ls-2">Superior Room</h3>
                                <div class="card-text d-flex algin-item-center mb-6 small">
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-sqm me-2"></i>
                                        <span>57 M²</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-bed me-2"></i>
                                        <span>1 Bed</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-travelers me-2"></i>
                                        <span>Max 2</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-non-smoking-room me-2"></i>
                                        <span>No</span>
                                    </div>
                                </div>
                                <div class="card-link d-flex align-items-center">
                                    <a href="reservation.html" class="btn btn-primary me-4">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                    <a href="single-room-2.html" class="fw-medium btn btn-outline-primary">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card card-overlay-slide text-bg-dark border-0">
                            <img src="assets/img/rooms/r1.jpg" srcset="./assets/img/rooms/r2@2x.jpg 2x" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <span class="d-block mb-2">
                                    <strong><sup>$</sup>95.00</strong> <span class="small">/ Night</span>
                                </span>
                                <h3 class="card-title mb-4 h4 ff-sub text-uppercase fw-semibold ls-2">Standard Room</h3>
                                <div class="card-text d-flex algin-item-center mb-6 small">
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-sqm me-2"></i>
                                        <span>57 M²</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-bed me-2"></i>
                                        <span>1 Bed</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-travelers me-2"></i>
                                        <span>Max 2</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-non-smoking-room me-2"></i>
                                        <span>No</span>
                                    </div>
                                </div>
                                <div class="card-link d-flex align-items-center">
                                    <a href="reservation.html" class="btn btn-primary me-4">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                    <a href="single-room-2.html" class="fw-medium btn btn-outline-primary">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card card-overlay-slide text-bg-dark border-0">
                            <img src="assets/img/rooms/r4.jpg" srcset="./assets/img/rooms/r4@2x.jpg 2x" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <span class="d-block mb-2">
                                    <strong><sup>$</sup>98.50</strong> <span class="small">/ Night</span>
                                </span>
                                <h3 class="card-title mb-4 h4 ff-sub text-uppercase fw-semibold ls-2">Family Suite</h3>
                                <div class="card-text d-flex algin-item-center mb-6 small">
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-sqm me-2"></i>
                                        <span>57 M²</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-bed me-2"></i>
                                        <span>1 Bed</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-travelers me-2"></i>
                                        <span>Max 2</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-non-smoking-room me-2"></i>
                                        <span>No</span>
                                    </div>
                                </div>
                                <div class="card-link d-flex align-items-center">
                                    <a href="reservation.html" class="btn btn-primary me-4">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                    <a href="single-room-2.html" class="fw-medium btn btn-outline-primary">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card card-overlay-slide text-bg-dark border-0">
                            <img src="assets/img/rooms/r3.jpg" srcset="./assets/img/rooms/r3@2x.jpg 2x" class="card-img" alt="">
                            <div class="card-img-overlay">
                                <span class="d-block mb-2">
                                    <strong><sup>$</sup>115.00</strong> <span class="small">/ Night</span>
                                </span>
                                <h3 class="card-title mb-4 h4 ff-sub text-uppercase fw-semibold ls-2">Deluxe Room</h3>
                                <div class="card-text d-flex algin-item-center mb-6 small">
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-sqm me-2"></i>
                                        <span>57 M²</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-bed me-2"></i>
                                        <span>1 Bed</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-travelers me-2"></i>
                                        <span>Max 2</span>
                                    </div>
                                    <div class="d-flex align-items-center me-6">
                                        <i class="hicon hicon-non-smoking-room me-2"></i>
                                        <span>No</span>
                                    </div>
                                </div>
                                <div class="card-link d-flex align-items-center">
                                    <a href="reservation.html" class="btn btn-primary me-4">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                    <a href="single-room-2.html" class="fw-medium btn btn-outline-primary">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                </div>
                <!-- /Rooms List -->
            </div>
        </section>
        <!-- /Rooms -->
        <!-- Facilities -->
        <section id="facilitiesAmenities" class="pt-14 pb-10">
            <div class="container">
                <!-- Heading -->
                <div class="mb-10 text-center" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading mb-2">Hotel Facilities</h2>
                    <p class="h6 fw-medium text-body-secondary ff-sub text-uppercase ls-2">An quis eligendi atomorum latine</p>
                </div>
                <!-- /Heading -->
                <!-- List -->
                <div class="row" data-cues="fadeIn">
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-wifi"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1">High Speed Wifi</h3>
                                    <p>Vix placerat no, eam cu bonorum sententiae, adipisci atomorum duo noster ad vel</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-reception"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1">Front desk 24H</h3>
                                    <p>Scripta apeirian in his. Quo accusa complect eu, errem adipisci ocurreret an per</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-car-park-onsite"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1">Parking Space</h3>
                                    <p>An quis eligendi duo, placerat latine veritus vim placerat. Duo errem latine scribentur</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-pool"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1"> Swimming Pool</h3>
                                    <p>Has et magna dolore dicit. No placerat essent inermis nec prima homero similique pri at.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-spas"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1">Spa center</h3>
                                    <p>Mel graece consequ cu, ex dicunt appareat duo, vim errem adipisci augue placerat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <!-- Item -->
                        <div class="mb-5">
                            <div class="d-flex align-items-start">
                                <div class="fs-1 text-primary pe-5 lh-sm">
                                    <i class="hicon hicon-fitness-center"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-uppercase ff-sub ls-1">Fitness Center</h3>
                                    <p>Ne ius assentior, te soluta facilisis mel placerat appareat duo dicunt splendide quo no.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Item -->
                    </div>
                </div>
                <!-- /List -->
            </div>
        </section>
        <!-- /Facilities -->
        <!-- Services -->
        <section id="extra-services" class="pt-14 pb-14 bg-primary-50">
            <div class="container">
                <!-- Heading -->
                <div class="mb-8 text-center" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading">Extra Services</h2>
                    <p class="h6 fw-medium text-body-secondary ff-sub text-uppercase ls-2">Eos clita partem utroque veri.</p>
                </div>
                <!-- /Heading -->
                <!-- Service list -->
                <div class="row g-5" data-cues="fadeIn">
                    <div class="col-12 col-xl-6">
                        <!-- Service item -->
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                                    <a href="restaurant.html">
                                        <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="assets/img/services/s4.jpg" srcset="./assets/img/services/s4@2x.jpg 2x" class="img-fluid w-100" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                                    <div class="card-body">
                                        <h3 class="card-title h6 text-uppercase ff-sub ls-1">Restaurant & bar</h3>
                                        <p class="card-text">Vis ei tation iisque suscipit, vim id tota dolores hendrerit.</p>
                                        <a href="restaurant.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service item -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Service item -->
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                                    <a href="meetings-events.html">
                                        <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="assets/img/services/s3.jpg" srcset="./assets/img/services/s3@2x.jpg 2x" class="img-fluid w-100" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                                    <div class="card-body">
                                        <h3 class="card-title h6 text-uppercase ff-sub ls-1">Meetings & events</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, tota vis constituto neglegentur.</p>
                                        <a href="meetings-events.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service item -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Service item -->
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                                    <div class="card-body">
                                        <h3 class="card-title h6 text-uppercase ff-sub ls-1">Booking Tours</h3>
                                        <p class="card-text">Pri ad deserunt percipi ullam corper, mel dicam constitu.</p>
                                        <a href="tour-categories.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                                    <a href="tour-categories.html">
                                        <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="assets/img/services/s2.jpg" srcset="./assets/img/services/s2@2x.jpg 2x" class="img-fluid w-100" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Service item -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Service item -->
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                                    <div class="card-body">
                                        <h3 class="card-title h6 text-uppercase ff-sub ls-1">Airport Transfers</h3>
                                        <p class="card-text">Ne labitur persecu ius, in tale laoreet mentit pri, laoreet.</p>
                                        <a href="airport-transfers.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                                    <a href="airport-transfers.html">
                                        <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="assets/img/services/s1.jpg" srcset="./assets/img/services/s1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Service item -->
                    </div>
                </div>
                <!-- /Service list -->
            </div>
        </section>
        <!-- /Services -->
        <!-- Video -->
        <section id="video" class="image-wrapper bg-image bg-overlay bg-overlay-700 text-body pt-20 pb-18 text-center " data-image-src="./assets/img/background/bg2.jpg" data-bs-theme="dark">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-7 col-lg-9" data-cues="fadeIn">
                            <div class="mb-6">
                                <a class="btn-video-play media-glightbox" href="assets/media/v1.mp4"><span></span></a>
                            </div>
                            <h2 class="text-uppercase ff-heading">Bilury Hotel Video</h2>
                            <p class="fs-5 fw-normal"> Eos clita partem utroque ut, veri integre qui ut, id duo dolore tacimates. Modo detracto scribentur id vis. Virtute appellantur mea eu, eos an dicant posidonium efficiendi. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Video -->
        <!-- Testimonials -->
        <section id="testimonials" class="pt-14 pb-14">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Heading -->
                        <div class="mb-10 text-center" data-cue="fadeIn">
                            <h2 class="text-uppercase ff-heading">What our clients say</h2>
                            <p class="h6 fw-medium text-body-secondary ff-sub text-uppercase ls-2">Pro sonet consul maiorum ad cum.</p>
                        </div>
                        <!-- /Heading -->
                    </div>
                    <div class="col-12">
                        <!-- Testimonials list -->
                        <div class="testimonial-slider tns-nav-dark text-center" data-cue="fadeIn">
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a1.jpg" srcset="./assets/img/avatars/a1@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>An harum accommodare ullamcorper, laoreet repudiare consetetur percipitur mel disputationi cum ex. Aliquid delicatissimi.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> John Doe <cite title="Source Title">(Italy)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a2.jpg" srcset="./assets/img/avatars/a2@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Saperet voluptatibus signiferumque no eam, laoreet eos pertinax dissentiet in. Fabulas voluptua mea te. Te per integre splendide.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emily Smith <cite title="Source Title">(France)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a3.jpg" srcset="./assets/img/avatars/a3@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ne quem tale tincidunt has, in veritus dissentiunt eum. No minim libris reformidans cum, aliquid id eum sale admodum.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Alex Mark <cite title="Source Title">(USA)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a4.jpg" srcset="./assets/img/avatars/a4@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Et tale erat pri, ea usu possim ancillae electram, dissentiunt ex dolorum admodum persecuti est. Convenire efficiendi consulatu. </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Ariol Deep <cite title="Source Title">(China)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a5.jpg" srcset="./assets/img/avatars/a5@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ei nec choro doctus, an esse postea mel, tamquam intellegam mei no. Vis pertinax ne incorrupte, ne his repudiare suscipiantur.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emma Ross <cite title="Source Title">(Australia)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                        </div>
                        <!-- /Testimonials list -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonials -->
        <!-- News & events -->
        <section id="newsEvents" class="pt-14 pb-14 bg-primary-50">
            <div class="container">
                <!-- Heading -->
                <div class="mb-8 text-center" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading">News & Events</h2>
                    <p class="h6 fw-medium text-body-secondary ff-sub text-uppercase ls-2">Pro sonet consul maiorum gloriatur.</p>
                </div>
                <!-- /Heading -->
                <!-- Article list -->
                <div class="row g-0 g-lg-7" data-cues="fadeIn">
                    <div class="col-12 col-xl-4 col-lg-12">
                        <!-- Article -->
                        <article class="card post border-0 mb-6 shadow-sm">
                            <a href="single-post.html" title="">
                                <figure class="image-hover-scale image-hover-overlay rounded-top mb-0">
                                    <img src="assets/img/news/n1.jpg" srcset="./assets/img/news/n1@2x.jpg 2x" class="card-img-top" alt="">
                                    <span class="position-absolute bg-dark bg-opacity-85 z-1 start-0 top-0 text-white d-flex flex-column p-3 small text-uppercase text-center">
                                        <small>10</small>
                                        <small>Jul</small>
                                        <small>22</small>
                                    </span>
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <a href="#" class="mb-2 text-uppercase small d-inline-block">Promotion</a>
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Bilury's Summer Promotion</h3>
                                <p>Eos clita partem utroque ut, veri integre qui ut, id posidonium duo dolore tacimates. Modo detracto scribentur id vis.</p>
                                <a href="single-post.html" class="card-link fw-medium">
                                    <span>Details</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </article>
                        <!-- /Article -->
                    </div>
                    <div class="col-12 col-xl-4 col-lg-12">
                        <!-- Article -->
                        <article class="card post border-0 mb-6 shadow-sm">
                            <a href="single-post.html" title="">
                                <figure class="image-hover-scale image-hover-overlay rounded-top mb-0">
                                    <img src="assets/img/news/n2.jpg" srcset="./assets/img/news/n2@2x.jpg 2x" class="card-img-top" alt="">
                                    <span class="position-absolute bg-dark bg-opacity-85 z-1 start-0 top-0 text-white d-flex flex-column p-3 small text-uppercase text-center">
                                        <small>11</small>
                                        <small>Jul</small>
                                        <small>22</small>
                                    </span>
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <a href="#" class="mb-2 text-uppercase small d-inline-block">Promotion</a>
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">25% off Bilury Spa & Massage </h3>
                                <p>Virtute appellantur mea integre, eos an dicant posidonium efficiendi. Vix utroque integre placerat eloquen no.</p>
                                <a href="single-post.html" class="card-link fw-medium">
                                    <span>Details</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </article>
                        <!-- /Article -->
                    </div>
                    <div class="col-12 col-xl-4 col-lg-12">
                        <!-- Article -->
                        <article class="card post border-0 mb-6 shadow-sm">
                            <a href="single-post.html" title="">
                                <figure class="image-hover-scale image-hover-overlay rounded-top mb-0">
                                    <img src="assets/img/news/n3.jpg" srcset="./assets/img/news/n3@2x.jpg 2x" class="card-img-top" alt="">
                                    <span class="position-absolute bg-dark bg-opacity-85 z-1 start-0 top-0 text-white d-flex flex-column p-3 small text-uppercase text-center">
                                        <small>11</small>
                                        <small>Jul</small>
                                        <small>22</small>
                                    </span>
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <a href="#" class="mb-2 text-uppercase small d-inline-block">Promotion</a>
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">15% off Bilury city tours </h3>
                                <p>Sed diam constituam ei, qui erat probo dissentiet ex volutpat, tacimates pri cu errem timeam cotidieque purto.</p>
                                <a href="single-post.html" class="card-link fw-medium">
                                    <span>Details</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </article>
                        <!-- /Article -->
                    </div>
                </div>
                <!-- /Article list -->
                <!-- Button -->
                <div class="text-center pt-6" data-cue="fadeIn">
                    <a href="news.html" class="btn btn-primary">
                        <span>View all</span>
                        <i class="hicon hicon-flights-one-ways"></i>
                    </a>
                </div>
                <!-- /Button-->
            </div>
        </section>
        <!-- /News & events -->
        <!-- Quick booking -->
        <section id="booking" class="image-wrapper bg-image bg-overlay bg-image bg-overlay-800 pt-14 pb-14" data-image-src="assets/img/background/bg1.jpg">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-between" data-cues="fadeIn">
                        <div class="col-12 col-xl-5 col-lg-6">
                            <div class="pb-2 text-body position-relative" data-bs-theme="dark">
                                <!-- Heading -->
                                <div class="mb-8">
                                    <h2 class="text-uppercase ff-heading">Book room</h2>
                                    <p class="fs-5 fw-normal"> Meis iriure id eos, an his wisi labitur. Decore expetenda sed at. Alienum inimicus torquatos mea ad principes. </p>
                                </div>
                                <!-- /Heading -->
                                <!-- Contact Info -->
                                <div class="mb-8">
                                    <div class="d-flex align-items-start mb-4">
                                        <div class="fs-3 pe-5 lh-sm">
                                            <i class="hicon hicon-bold hicon-email-envelope"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-medium">Booking@example.com</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div class="fs-3 pe-5 lh-sm">
                                            <i class="hicon hicon-bold hicon-telephone"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-medium">+33 (0) 1 89 78 67 56</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Contact Info -->
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-5">
                            <div class="card border-0 bg-primary-50 shadow-sm" data-bs-theme="light">
                                <div class="card-body">
                                    <form class="needs-validation" method="post" novalidate="" action="https://bilury.bithemer.com/reservation.html">
                                        <!-- Heading -->
                                        <h3 class="text-dark text-uppercase h4 ff-sub ls-1">Reservation</h3>
                                        <!-- /Heading -->
                                        <!-- Input date -->
                                        <div class="mb-5">
                                            <div class="control-icon">
                                                <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate1"></label>
                                                <input id="txtCheckDate1" type="text" class="check-date datepicker-right form-control shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <!-- /Input date -->
                                        <!-- Input number of guests -->
                                        <div class="mb-5">
                                            <div class="control-icon">
                                                <label class="hicon hicon-travelers cursor-pointer" for="btnCheckGuest1"></label>
                                                <div class="dropdown" data-total-guest="">
                                                    <button class="form-select w-100 text-start shadow-sm" id="btnCheckGuest1" data-bs-auto-close="outside" type="button" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="text-nowrap">
                                                            <span data-total-adults=""></span>, <span data-total-children=""></span>
                                                        </span>
                                                    </button>
                                                    <ul class="dropdown-menu animate slideIn p-4">
                                                        <li>
                                                            <div class="mb-3">
                                                                <label for="txtCheckAdults1" class="form-label">Adults</label>
                                                                <div class="input-group shadow-sm">
                                                                    <button class="btn btn-outline-light" type="button" data-minus-adults="">
                                                                        <i class="hicon hicon-minus-thin small"></i>
                                                                    </button>
                                                                    <input type="text" class="form-control text-center" placeholder="Adults" value="1" aria-label="Adults" id="txtCheckAdults1" data-adults-max="5" data-input-adults="">
                                                                    <button class="btn btn-outline-light" type="button" data-plus-adults="">
                                                                        <i class="hicon hicon-plus-thin small"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="mb-3">
                                                                <label for="txtCheckChildren1" class="form-label">Children</label>
                                                                <div class="input-group shadow-sm">
                                                                    <button class="btn btn-outline-light" type="button" data-minus-children="">
                                                                        <i class="hicon hicon-minus-thin small"></i>
                                                                    </button>
                                                                    <input type="text" class="form-control text-center" placeholder="Children" value="0" aria-label="Children" id="txtCheckChildren1" data-children-max="10" data-input-children="">
                                                                    <button class="btn btn-outline-light" type="button" data-plus-children="">
                                                                        <i class="hicon hicon-plus-thin small"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Input number of guests -->
                                        <!-- Button -->
                                        <div class="mb-5">
                                            <button type="submit" class="btn btn-primary w-100">
                                                <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                <span>Check Rooms</span>
                                            </button>
                                        </div>
                                        <!-- /Button -->
                                        <!-- Extra links -->
                                        <ul class="nav flex-column small mb-0">
                                            <li class="nav-item"><a class="nav-link text-body link-hover-primary pt-1 pb-1 ps-0 pe-0" href="#">▪ Best Rate Guarantee</a></li>
                                            <li class="nav-item"><a class="nav-link text-body link-hover-primary pt-1 pb-1 ps-0 pe-0" href="#">▪ Submit a question</a></li>
                                        </ul>
                                        <!-- /Extra links -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Quick booking -->
    </main>
@endsection