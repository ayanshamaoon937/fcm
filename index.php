<?php include_once 'assets/includes/header-links.php'; ?>
<main>
<!-- Top Bar (Outside hero but at very top) -->
<div class="top-bar py-2 text-white ff-gill-sans">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="mb-2 mb-md-0">
            <i class="bi bi-geo-alt me-2"></i>6th Floor, International House, 223 Regent Street, London W1B 2QD
        </div>
        <div class="d-flex gap-4">
            <div><i class="bi bi-telephone me-2"></i>0207 323 5758</div>
            <div><i class="bi bi-envelope me-2"></i>info@fcmltd.co.uk</div>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <!-- Header Inside Hero -->
    <?php include_once 'assets/includes/header.php'; ?>
    <!-- Hero Content -->
    <div class="container hero-content px-4 px-md-0">
        <h1 class="hero-title ff-baskervville text-uppercase">Clerks of Works Services<br>and Site Inspections</h1>
        <h2 class="hero-subtitle ff-gill-sans-light">Most construction professionals are concerned about quality<br>and safety in their building projects.</h2>
        <p class="hero-text ff-gill-sans-light">
            We will act as your eyes and ears on site and<br>
            help your contractors to get it right first time,<br>
            giving you peace of mind that you are protected<br>
            from defects and deficiencies.
        </p>
        <button class="btn btn-hero ff-gill-sans text-uppercase">Get in touch</button>
    </div>
</section>

<!-- Who We Are Section -->
<section class="who-we-are py-5 text-center my-4">
    <div class="container">
        <h6 class="text-uppercase fw-bold ff-gill-sans" style="color: var(--custom-color-1); letter-spacing: 2px;">Who We Are</h6>
        <h2 class="text-uppercase ff-baskervville mt-3 mb-4" style="color: var(--custom-color-2); font-size: 2.5rem; line-height: 1.2;">Established for<br>over 30 years</h2>
        
        <div class="mx-auto mb-4" style="width: 50px; height: 2px; background-color: var(--custom-color-1);"></div>
        
        <p class="mx-auto ff-gill-sans-light" style="max-width: 800px; line-height: 1.6; font-size: 1.05rem; color: #555;">
            FCM provides leading Clerks of Works and construction inspection services throughout London and the home counties. The business was founded in 1986 by Francis Murray to offer clients the best professional service and value. As a collective, FCM offers a breadth and depth of experience and expertise across many sectors, without passing on the overheads of extremely large consulting and recruitment companies
        </p>
        
        <button class="btn btn-hero ff-gill-sans text-uppercase mt-4 px-4 py-2" style="background-color: var(--custom-color-2); color: white; letter-spacing: 1px; font-size: 0.9rem;">Enquire Today</button>
    </div>
</section>

<!-- Video Section -->
<section class="video-section position-relative" style="height: 600px; overflow: hidden; background-color: #000;">
    <video id="fcmVideo" class="w-100 h-100 object-fit-cover opacity-75" src="assets/images/video/placeholder-video.mp4" playsinline poster="assets/images/Video Placeholder.png" style="transition: opacity 0.3s;"></video>
    
    <div id="videoOverlay" class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.4); transition: background-color 0.3s; cursor: pointer;">
        <button id="playPauseBtn" class="btn rounded-circle d-flex justify-content-center align-items-center shadow-none" style="width: 100px; height: 100px; background-color: rgba(0,0,0,0.6); border: none; transition: opacity 0.3s, transform 0.2s;">
            <i class="bi bi-play-fill text-white" style="font-size: 4rem; margin-left: 10px;"></i>
        </button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById('fcmVideo');
            const overlay = document.getElementById('videoOverlay');
            const playPauseBtn = document.getElementById('playPauseBtn');
            const icon = playPauseBtn.querySelector('i');

            overlay.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    icon.classList.remove('bi-play-fill');
                    icon.classList.add('bi-pause-fill');
                    icon.style.marginLeft = '0'; // reset margin for pause icon
                    playPauseBtn.style.opacity = '0'; // hide while playing
                    overlay.style.backgroundColor = 'transparent';
                    video.classList.remove('opacity-75'); // make video fully visible
                } else {
                    video.pause();
                    icon.classList.remove('bi-pause-fill');
                    icon.classList.add('bi-play-fill');
                    icon.style.marginLeft = '10px';
                    playPauseBtn.style.opacity = '1';
                    overlay.style.backgroundColor = 'rgba(0,0,0,0.4)';
                    video.classList.add('opacity-75');
                }
            });

            overlay.addEventListener('mouseenter', function() {
                if (!video.paused) {
                    playPauseBtn.style.opacity = '1';
                }
            });

            overlay.addEventListener('mouseleave', function() {
                if (!video.paused) {
                    playPauseBtn.style.opacity = '0';
                }
            });
        });
    </script>
</section>

<!-- Services Section -->
<section class="services-section pt-5" style="background-color: #f4f6fc;">
    <div class="container text-center pb-4">
        <h6 class="text-uppercase fw-bold ff-gill-sans" style="color: var(--custom-color-1); letter-spacing: 2px;">What We Do</h6>
        <h2 class="text-uppercase ff-baskervville mt-3 mb-4" style="color: var(--custom-color-2); font-size: 2.5rem; line-height: 1.2;">Our Services</h2>
        
        <div class="mx-auto mb-4" style="width: 50px; height: 2px; background-color: var(--custom-color-1);"></div>
        
        <p class="mx-auto ff-gill-sans-light mb-5" style="max-width: 700px; line-height: 1.6; font-size: 1.05rem; color: #555;">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
        </p>
    </div>
    
    <div class="container-fluid p-0">
        <div class="swiper services-swiper">
            <div class="swiper-wrapper">
                <!-- Service Item 1 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-1.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-2.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">M&E Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-3.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">Dispute<br>Resolutions</h5>
                    </div>
                </div>
                <!-- Service Item 4 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-4.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">NEC Supervisor<br>Services</h5>
                    </div>
                </div>
                <!-- Service Item 5 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-5.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">CQC<br>Inspections</h5>
                    </div>
                </div>
                
                <!-- DUPLICATED SLIDES FOR SEAMLESS LOOP -->
                <!-- Service Item 1 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-1.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-2.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">M&E Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-3.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">Dispute<br>Resolutions</h5>
                    </div>
                </div>
                <!-- Service Item 4 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-4.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">NEC Supervisor<br>Services</h5>
                    </div>
                </div>
                <!-- Service Item 5 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="height: 400px; cursor: pointer; background-image: url('assets/images/services/service-5.png'); background-size: cover; background-position: center; margin: 0 !important;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                        <h5 class="text-white ff-baskervville m-0 text-uppercase" style="font-size: 1.15rem; line-height: 1.3; letter-spacing: 0.5px;">CQC<br>Inspections</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Sectors Section -->
<section class="our-sectors-section container-fluid p-0">
    <div class="row g-0">
        <!-- Left Image Half -->
        <div class="col-lg-6">
            <img src="assets/images/Our Sectors.png" alt="Our Sectors" class="w-100 h-100 object-fit-cover" style="min-height: 600px;">
        </div>
        <!-- Right Content Half -->
        <div class="col-lg-6 text-white py-5 px-4 px-md-5 d-flex align-items-center" style="background-color: var(--custom-color-1);">
            <div style="max-width: 650px;" class="ms-md-4 py-4">
                <h2 class="ff-baskervville mb-3">OUR SECTORS</h2>
                <p class="ff-gill-sans-light mb-5" style="font-size: 1.05rem; line-height: 1.6;">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                </p>

                <!-- Sectors List -->
                <div class="position-relative ps-2">
                    <!-- Vertical Line -->
                    <div class="position-absolute" style="left: 31px; top: 15px; bottom: 25px; width: 1px; background-color: #fff; z-index: 0;"></div>
                    
                    <!-- Item 1 -->
                    <div class="d-flex position-relative mb-5" style="z-index: 1;">
                        <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" style="width: 48px; height: 48px; background-color: var(--custom-color-2); border: 4px solid var(--custom-color-1);">
                            <i class="bi bi-mortarboard fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="ff-baskervville mb-1 fw-bold text-uppercase" style="font-size: 1.1rem;">Health & Education</h5>
                            <p class="ff-gill-sans-light mb-0" style="font-size: 0.9rem; line-height: 1.5; color: rgba(255,255,255,0.85);">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="d-flex position-relative mb-5" style="z-index: 1;">
                        <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" style="width: 48px; height: 48px; background-color: var(--custom-color-2); border: 4px solid var(--custom-color-1);">
                            <i class="bi bi-bank fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="ff-baskervville mb-1 fw-bold text-uppercase" style="font-size: 1.1rem;">Government</h5>
                            <p class="ff-gill-sans-light mb-0" style="font-size: 0.9rem; line-height: 1.5; color: rgba(255,255,255,0.85);">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="d-flex position-relative" style="z-index: 1;">
                        <div class="flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle" style="width: 48px; height: 48px; background-color: var(--custom-color-2); border: 4px solid var(--custom-color-1);">
                            <i class="bi bi-building fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="ff-baskervville mb-1 fw-bold text-uppercase" style="font-size: 1.1rem;">Commercial</h5>
                            <p class="ff-gill-sans-light mb-0" style="font-size: 0.9rem; line-height: 1.5; color: rgba(255,255,255,0.85);">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="latest-news-section py-5 my-5">
    <div class="container text-center mb-5">
        <h6 class="text-uppercase fw-bold ff-gill-sans" style="color: var(--custom-color-1); letter-spacing: 2px;">Keep Up To Date</h6>
        <h2 class="text-uppercase ff-baskervville mt-3 mb-4" style="color: var(--custom-color-2); font-size: 2.5rem; line-height: 1.2;">Latest News</h2>
        <div class="mx-auto" style="width: 50px; height: 2px; background-color: var(--custom-color-1);"></div>
    </div>
    
    <div class="container">
        <div class="row g-4">
            <!-- News Item 1 -->
            <div class="col-md-4">
                <div class="card border-0 rounded-0 h-100">
                    <div class="position-relative">
                        <img src="assets/images/news/news-1.png" class="card-img-top rounded-0 object-fit-cover" alt="News 1" style="height: 250px;">
                        <div class="position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold" style="background-color: rgba(0, 0, 0, 0.35); width: 50px; line-height: 1.1;">
                            <span class="d-block" style="font-size: 1.05rem;">10</span>
                            <span class="d-block" style="font-size: 0.75rem; letter-spacing: 1px;">MAY</span>
                        </div>
                    </div>
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center" style="background-color: #f4f6fc;">
                        <h5 class="card-title text-uppercase ff-gill-sans fw-bold mb-3" style="color: var(--custom-color-2); font-size: 1rem; letter-spacing: 0.5px; line-height: 1.4;">FCM'S ROBERT STEWART RECIEVES<br>ANOTHER PRESTIGIOUS AWARD</h5>
                        <p class="card-text ff-gill-sans-light mb-0 mx-auto" style="color: #444; font-size: 0.95rem; line-height: 1.5; max-width: 90%;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- News Item 2 -->
            <div class="col-md-4">
                <div class="card border-0 rounded-0 h-100">
                    <div class="position-relative">
                        <img src="assets/images/news/news-2.png" class="card-img-top rounded-0 object-fit-cover" alt="News 2" style="height: 250px;">
                        <div class="position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold" style="background-color: rgba(0, 0, 0, 0.35); width: 50px; line-height: 1.1;">
                            <span class="d-block" style="font-size: 1.05rem;">21</span>
                            <span class="d-block" style="font-size: 0.75rem; letter-spacing: 1px;">MAY</span>
                        </div>
                    </div>
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center" style="background-color: #f4f6fc;">
                        <h5 class="card-title text-uppercase ff-gill-sans fw-bold mb-3" style="color: var(--custom-color-2); font-size: 1rem; letter-spacing: 0.5px; line-height: 1.4;">CORRECT INSTALLATION<br>OF FIRE DOORS</h5>
                        <p class="card-text ff-gill-sans-light mb-0 mx-auto" style="color: #444; font-size: 0.95rem; line-height: 1.5; max-width: 90%;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- News Item 3 -->
            <div class="col-md-4">
                <div class="card border-0 rounded-0 h-100">
                    <div class="position-relative">
                        <img src="assets/images/news/news-3.png" class="card-img-top rounded-0 object-fit-cover" alt="News 3" style="height: 250px;">
                        <div class="position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold" style="background-color: rgba(0, 0, 0, 0.35); width: 50px; line-height: 1.1;">
                            <span class="d-block" style="font-size: 1.05rem;">30</span>
                            <span class="d-block" style="font-size: 0.75rem; letter-spacing: 1px;">MAY</span>
                        </div>
                    </div>
                    <div class="card-body text-center p-4 d-flex flex-column justify-content-center" style="background-color: #f4f6fc;">
                        <h5 class="card-title text-uppercase ff-gill-sans fw-bold mb-3" style="color: var(--custom-color-2); font-size: 1rem; letter-spacing: 0.5px; line-height: 1.4;">CORRECT INSTALLATION OF<br>EXTRACT DUCTS</h5>
                        <p class="card-text ff-gill-sans-light mb-0 mx-auto" style="color: #444; font-size: 0.95rem; line-height: 1.5; max-width: 90%;">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Projects Section -->
<section class="latest-projects-section pt-5" style="background-color: var(--custom-color-1);">
    <div class="container text-center text-white mb-5 pt-3">
        <h6 class="text-uppercase fw-bold ff-gill-sans" style="letter-spacing: 2px;">What We Do</h6>
        <h2 class="text-uppercase ff-baskervville mt-3 mb-4" style="font-size: 2.5rem; line-height: 1.2;">Latest Projects</h2>
        <div class="mx-auto" style="width: 50px; height: 2px; background-color: var(--custom-color-2);"></div>
    </div>
    
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Project 1 -->
            <div class="col-md-6 position-relative project-item" style="height: 380px; overflow: hidden; cursor: pointer;">
                <img src="assets/images/projects/projects-1.png" class="w-100 h-100 object-fit-cover" alt="400 LONGWATER AVENUE">
                <div class="position-absolute bottom-0 start-0 w-100 p-4 ps-md-5" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                    <h5 class="text-white ff-baskervville m-0 text-uppercase mb-1" style="font-size: 1.15rem; letter-spacing: 0.5px;">400 Longwater Avenue</h5>
                    <p class="text-white ff-gill-sans fw-bold m-0 text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">Construction</p>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="col-md-6 position-relative project-item" style="height: 380px; overflow: hidden; cursor: pointer;">
                <img src="assets/images/projects/projects-2.png" class="w-100 h-100 object-fit-cover" alt="DELANEY TWO">
                <div class="position-absolute bottom-0 start-0 w-100 p-4 ps-md-5" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                    <h5 class="text-white ff-baskervville m-0 text-uppercase mb-1" style="font-size: 1.15rem; letter-spacing: 0.5px;">Delaney Two</h5>
                    <p class="text-white ff-gill-sans fw-bold m-0 text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">Cladding Works</p>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="col-md-6 position-relative project-item" style="height: 380px; overflow: hidden; cursor: pointer;">
                <img src="assets/images/projects/projects-3.png" class="w-100 h-100 object-fit-cover" alt="APEX HOUSE">
                <div class="position-absolute bottom-0 start-0 w-100 p-4 ps-md-5" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                    <h5 class="text-white ff-baskervville m-0 text-uppercase mb-1" style="font-size: 1.15rem; letter-spacing: 0.5px;">Apex House</h5>
                    <p class="text-white ff-gill-sans fw-bold m-0 text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">Construction</p>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="col-md-6 position-relative project-item" style="height: 380px; overflow: hidden; cursor: pointer;">
                <img src="assets/images/projects/projects-4.png" class="w-100 h-100 object-fit-cover" alt="GREENWICH MILLENNIUM VILLAGE">
                <div class="position-absolute bottom-0 start-0 w-100 p-4 ps-md-5" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);">
                    <h5 class="text-white ff-baskervville m-0 text-uppercase mb-1" style="font-size: 1.15rem; letter-spacing: 0.5px;">Greenwich Millennium Village</h5>
                    <p class="text-white ff-gill-sans fw-bold m-0 text-uppercase" style="font-size: 0.8rem; letter-spacing: 1.5px;">Construction</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center py-5">
        <button class="btn btn-hero ff-gill-sans text-uppercase px-5 py-2 fw-bold" style="background-color: var(--custom-color-2); color: white; letter-spacing: 1px; font-size: 0.85rem; border-radius: 2px;">View More</button>
    </div>
</section>

<!-- Map Section -->
<section class="map-section border-top">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    
    <style>
        .custom-pin .pin {
            width: 30px;
            height: 30px;
            background-color: var(--custom-color-1);
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            border: 2px solid white;
            position: absolute;
            box-shadow: -2px 2px 4px rgba(0,0,0,0.4);
        }
        .custom-pin .pin::after {
            content: '';
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <div id="londonMap" style="width: 100%; height: 500px; z-index: 1;"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize map centered on London
            var map = L.map('londonMap', {
                scrollWheelZoom: false // Prevent scrolling from getting stuck on the map
            }).setView([51.52, -0.08], 11);

            // Add tile layer (using CartoDB Voyager for a similar aesthetic to the screenshot)
            L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                subdomains: 'abcd',
                maxZoom: 20
            }).addTo(map);

            // Create custom icon matching the design
            var customIcon = L.divIcon({
                className: 'custom-pin',
                iconAnchor: [15, 30],
                html: '<div class="pin"></div>'
            });

            // Add markers based on the approximate locations in the screenshot
            var locations = [
                [51.54, -0.23], // Willesden area
                [51.535, -0.10], // Islington area
                [51.52, -0.01],  // Bow / Poplar
                [51.525, 0.02],  // East of Poplar
                [51.48, -0.08],  // Southwark
                [51.61, 0.04]    // Woodford area
            ];

            locations.forEach(function(coords) {
                L.marker(coords, {icon: customIcon}).addTo(map);
            });
        });
    </script>
</section>

<!-- Get In Touch Section -->
<section class="get-in-touch-section py-5" style="background-color: #f4f6fc;">
    <div class="container py-5">
        <div class="row">
            <!-- Left Column: Contact Info -->
            <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                <h6 class="text-uppercase fw-bold ff-gill-sans mb-2" style="color: var(--custom-color-1); letter-spacing: 2px;">Contact</h6>
                <h2 class="text-uppercase ff-baskervville mb-4" style="color: var(--custom-color-2); font-size: 2.5rem;">Get In Touch</h2>
                
                <p class="ff-gill-sans fw-bold mb-5" style="color: var(--custom-color-1); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">
                    We are waiting for you at out London office or in other way, you can contact us via the contact form below to discuss your project, your idea
                </p>
                
                <div class="row mb-5">
                    <div class="col-6">
                        <h6 class="text-uppercase fw-bold ff-gill-sans mb-2" style="color: var(--custom-color-2); font-size: 0.85rem; letter-spacing: 1px;">Email:</h6>
                        <a href="mailto:info@fcmltd.co.uk" class="text-decoration-none ff-gill-sans fw-bold" style="color: var(--custom-color-1); font-size: 1.1rem;">info@fcmltd.co.uk</a>
                    </div>
                    <div class="col-6">
                        <h6 class="text-uppercase fw-bold ff-gill-sans mb-2" style="color: var(--custom-color-2); font-size: 0.85rem; letter-spacing: 1px;">Phone:</h6>
                        <a href="tel:+0203235758" class="text-decoration-none ff-gill-sans fw-bold" style="color: var(--custom-color-1); font-size: 1.1rem;">+020 323 5758</a>
                    </div>
                </div>
                
                <div class="social-icons d-flex gap-4">
                    <a href="#" class="text-decoration-none" style="color: var(--custom-color-2);"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-decoration-none" style="color: var(--custom-color-2);"><i class="bi bi-twitter-x fs-4"></i></a>
                    <a href="#" class="text-decoration-none" style="color: var(--custom-color-2);"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-decoration-none" style="color: var(--custom-color-2);"><i class="bi bi-linkedin fs-4"></i></a>
                </div>
            </div>
            
            <!-- Right Column: Form -->
            <div class="col-md-6 ps-md-5 d-flex flex-column justify-content-center">
                <form>
                    <div class="mb-4">
                        <label for="contactEmail" class="form-label ff-gill-sans fw-bold" style="color: var(--custom-color-1); font-size: 1.05rem;">Email</label>
                        <input type="email" class="form-control shadow-none rounded-0 px-0" id="contactEmail" style="background-color: transparent; border: none; border-bottom: 1px solid var(--custom-color-1);">
                    </div>
                    
                    <div class="mb-4">
                        <label for="contactMessage" class="form-label ff-gill-sans fw-bold" style="color: var(--custom-color-1); font-size: 1.05rem;">Message</label>
                        <textarea class="form-control shadow-none rounded-0" id="contactMessage" rows="5" style="background-color: transparent; border: 1px solid var(--custom-color-1);"></textarea>
                    </div>
                    
                    <button type="submit" class="btn border-0 rounded-0 ff-gill-sans text-uppercase fw-bold px-4 py-2 mt-2" style="background-color: var(--custom-color-2); color: white; font-size: 0.85rem; letter-spacing: 1px;">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="certifications-section py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center text-center">
            <!-- Cert 1 -->
            <div class="col-md-4 mb-5 mb-md-0 d-flex flex-column align-items-center">
                <img src="assets/images/institute-logo.png" alt="Institute of Clerks of Works" style="height: 120px; object-fit: contain; margin-bottom: 1.5rem;">
                <p class="text-uppercase fw-bold ff-gill-sans mx-auto" style="color: var(--custom-color-1); font-size: 0.95rem; letter-spacing: 0.5px; max-width: 320px; line-height: 1.4;">
                    Proud members of the institute of clerks of works and construction inspectorate of great britain
                </p>
            </div>
            <!-- Cert 2 -->
            <div class="col-md-4 mb-5 mb-md-0 d-flex flex-column align-items-center">
                <img src="assets/images/QAS International.jpg" alt="QAS International" style="height: 120px; object-fit: contain; margin-bottom: 1.5rem;">
                <p class="text-uppercase fw-bold ff-gill-sans mx-auto" style="color: var(--custom-color-1); font-size: 0.95rem; letter-spacing: 0.5px; max-width: 320px; line-height: 1.4;">
                    ISO 9001:2015 Registered Firm
                </p>
            </div>
            <!-- Cert 3 -->
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="assets/images/London Chamber of Commerce.jpg" alt="London Chamber of Commerce" style="height: 120px; object-fit: contain; margin-bottom: 1.5rem;">
                <p class="text-uppercase fw-bold ff-gill-sans mx-auto" style="color: var(--custom-color-1); font-size: 0.95rem; letter-spacing: 0.5px; max-width: 320px; line-height: 1.4;">
                    Proud member of the London Chamber of Commerce and Industry
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Section -->
<section class="instagram-section pt-5 pb-0 bg-white text-center">
    <div class="container mb-5">
        <h6 class="text-uppercase fw-bold ff-gill-sans mb-2" style="color: var(--custom-color-1); letter-spacing: 2px;">Follow Us</h6>
        <h2 class="text-uppercase ff-baskervville" style="color: var(--custom-color-2); font-size: 2.5rem;">Instagram</h2>
    </div>
    
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap flex-lg-nowrap">
            <div class="flex-grow-1" style="flex-basis: 0; min-height: 280px;">
                <img src="assets/images/projects/projects-1.png" class="w-100 h-100 object-fit-cover" alt="Instagram 1">
            </div>
            <div class="flex-grow-1" style="flex-basis: 0; min-height: 280px;">
                <img src="assets/images/news/news-1.png" class="w-100 h-100 object-fit-cover" alt="Instagram 2">
            </div>
            <div class="flex-grow-1" style="flex-basis: 0; min-height: 280px;">
                <img src="assets/images/projects/projects-3.png" class="w-100 h-100 object-fit-cover" alt="Instagram 3">
            </div>
            <div class="flex-grow-1" style="flex-basis: 0; min-height: 280px;">
                <img src="assets/images/news/news-2.png" class="w-100 h-100 object-fit-cover" alt="Instagram 4">
            </div>
            <div class="flex-grow-1" style="flex-basis: 0; min-height: 280px;">
                <img src="assets/images/projects/projects-4.png" class="w-100 h-100 object-fit-cover" alt="Instagram 5">
            </div>
        </div>
    </div>
</section>

</main>

<?php include_once 'assets/includes/footer.php'; ?>
<?php include_once 'assets/includes/footer-links.php'; ?>
