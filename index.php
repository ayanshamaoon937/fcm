<?php include_once 'assets/includes/header-links.php'; ?>
<main>
<!-- Top Bar (Outside hero but at very top) -->
<div class="top-bar bg-custom-color-1 text-white fw-medium ff-gill-sans">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="mb-2 mb-md-0 text-lg-start text-center">
            <i class="bi bi-geo-alt me-2"></i>6th Floor, International House, 223 Regent Street, London W1B 2QD
        </div>
        <div class="d-flex gap-4">
            <a class="text-white text-decoration-none" href="tel:02073235758"><i class="bi bi-telephone me-2"></i>0207 323 5758</a>
            <a class="text-white text-decoration-none" href="mailto:info@fcmltd.co.uk"><i class="bi bi-envelope me-2"></i>info@fcmltd.co.uk</a>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section position-relative" style="overflow: hidden; background: none;">
    <!-- Background Video -->
    <video autoplay loop muted playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="z-index: 0;">
        <source src="assets/images/videos/top.mp4" type="video/mp4">
    </video>
    <!-- Dark overlay for text readability -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.4); z-index: 0;"></div>

    <div class="position-relative d-flex flex-column flex-grow-1 w-100" style="z-index: 1;">
        <!-- Header Inside Hero -->
        <?php include_once 'assets/includes/header.php'; ?>
        <!-- Hero Content -->
        <div class="container flex-grow-1 d-flex flex-column">
            <div class="row mx-0 flex-grow-1">
                <div class="col-lg-6 px-0 d-flex flex-column">
                    <div class="hero-content px-md-0">
                        <h1 class="hero-title display-5 mb-3 fw-normal text-white ff-baskervville text-uppercase">Clerks of Works Services and Site Inspections</h1>
                        <h6 class="hero-subtitle ff-gill-sans-light fw-light text-white mb-3">Most construction professionals are concerned about quality and safety in their building projects.</h6>
                        <p class="hero-text ff-gill-sans-light fw-light text-white mb-3">
                            We will act as your eyes and ears on site and help your contractors to get it right first time, giving you peace of mind that you are protected from defects and deficiencies.
                        </p>
                        <div class="btn-wrapper">
                            <a href="" class="btn btn-primary text-decoration-none text-white ff-gill-sans text-uppercase"><span> Get in touch</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="who-we-are py-5 text-center my-4">
    <div class="container">
        <div class="row mx-0"> 
            <div class="col-lg-4 px-0 mx-auto"> 
                <h6 class="sub-title text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium">Who We Are</h6>
                <h2 class="section-title text-custom-color-2 text-uppercase ff-baskervville mt-3 mb-4">Established for over 30 years</h2>
                <div class="title-divider bg-custom-color-1 mx-auto mb-4"></div>
            </div>
        </div>
        <p class="description text-custom-color-1 mx-auto ff-gill-sans-light mb-4">
            FCM provides leading Clerks of Works and construction inspection services throughout London and the home counties. The business was founded in 1986 by Francis Murray to offer clients the best professional service and value. As a collective, FCM offers a breadth and depth of experience and expertise across many sectors, without passing on the overheads of extremely large consulting and recruitment companies
        </p>
        <div class="btn-wrapper">
        <a href="" class="btn btn-primary text-white text-decoration-none ff-gill-sans text-uppercase"><span>Enquire Today</span></a>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section position-relative">
    <video id="fcmVideo" class="fcm-video w-100 h-100 object-fit-cover opacity-75" src="assets/images/videos/bottom.mp4#t=0.001" preload="metadata" playsinline></video>
    
    <div id="videoOverlay" class="video-overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
        <button id="playPauseBtn" class="play-pause-btn btn rounded-circle d-flex justify-content-center align-items-center shadow-none">
            <i class="bi bi-play-fill text-white"></i>
        </button>
    </div>


</section>

<!-- Services Section -->
<section class="services-section pt-5 bg-custom-color-4">
    <div class="container text-center pb-4">
        <h6 class="sub-title text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium">What We Do</h6>
        <h2 class="section-title text-custom-color-2 text-uppercase ff-baskervville mt-3 mb-4">Our Services</h2>
        
        <div class="title-divider bg-custom-color-1 mx-auto mb-4"></div>
        
        <p class="description text-custom-color-1 mx-auto ff-gill-sans-light mb-5">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
        </p>
    </div>
    
    <div class="container-fluid p-0">
        <div class="swiper services-swiper">
            <div class="swiper-wrapper">
                <!-- Service Item 1 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-1.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-2.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">M&E Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-3.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">Dispute<br>Resolutions</h5>
                    </div>
                </div>
                <!-- Service Item 4 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-4.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">NEC Supervisor<br>Services</h5>
                    </div>
                </div>
                <!-- Service Item 5 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-5.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">CQC<br>Inspections</h5>
                    </div>
                </div>
                
                <!-- DUPLICATED SLIDES FOR SEAMLESS LOOP -->
                <!-- Service Item 1 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-1.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-2.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">M&E Clerks of<br>Works Service</h5>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-3.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">Dispute<br>Resolutions</h5>
                    </div>
                </div>
                <!-- Service Item 4 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-4.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">NEC Supervisor<br>Services</h5>
                    </div>
                </div>
                <!-- Service Item 5 -->
                <div class="swiper-slide service-item position-relative overflow-hidden" style="background-image: url('assets/images/services/service-5.webp');">
                    <div class="service-overlay position-absolute bottom-0 start-0 w-100 p-4">
                        <h5 class="service-title text-white ff-baskervville m-0 text-uppercase">CQC<br>Inspections</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Sectors Section -->
<section class="our-sectors-section container-fluid p-0">
    <div class="row g-0 mx-0">
        <!-- Left Image Half -->
        <div class="col-lg-6">
            <img src="assets/images/our-sectors.webp" alt="Our Sectors" class="w-100 h-100 object-fit-cover sectors-image">
        </div>
        <!-- Right Content Half -->
        <div class="col-lg-6 text-white py-5 px-4 px-md-5 d-flex align-items-center bg-custom-color-1">
            <div class="ms-md-4 py-4 sectors-content-wrapper">
                <h2 class="ff-baskervville mb-3">OUR SECTORS</h2>
                <p class="sectors-description ff-gill-sans-light mb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                </p>

                <!-- Sectors List -->
                <div class="sectors-timeline ps-2">
                    <!-- Vertical Line -->
                    <div class="timeline-line bg-white"></div>
                    
                    <!-- Item 1 -->
                    <div class="sector-item d-flex mb-5">
                        <div class="sector-icon bg-custom-color-2 text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle">
                            <i class="bi bi-mortarboard fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="sector-title ff-baskervville mb-1 fw-bold text-uppercase">Health & Education</h5>
                            <p class="sector-text ff-gill-sans-light mb-0">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="sector-item d-flex mb-5">
                        <div class="sector-icon bg-custom-color-2 text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle">
                            <i class="bi bi-bank fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="sector-title ff-baskervville mb-1 fw-bold text-uppercase">Government</h5>
                            <p class="sector-text ff-gill-sans-light mb-0">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="sector-item d-flex">
                        <div class="sector-icon bg-custom-color-2 text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle">
                            <i class="bi bi-building fs-4"></i>
                        </div>
                        <div class="ms-4 pt-1">
                            <h5 class="sector-title ff-baskervville mb-1 fw-bold text-uppercase">Commercial</h5>
                            <p class="sector-text ff-gill-sans-light mb-0">
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
        <h6 class="sub-title text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium">Keep Up To Date</h6>
        <h2 class="section-title text-custom-color-2 text-uppercase ff-baskervville mt-3 mb-4">Latest News</h2>
        <div class="title-divider bg-custom-color-1 mx-auto"></div>
    </div>
    
    <div class="container-fluid px-0">
        <div class="row g-3 mx-0">
            <!-- News Item 1 -->
            <div class="col-md-4 ps-lg-0">
                <div class="card border-0 rounded-0 h-100 bg-custom-color-5">
                    <div class="position-relative">
                        <img src="assets/images/news/news-1.webp" class="news-image card-img-top rounded-0 object-fit-cover" alt="News 1">
                        <div class="news-date-tag position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold">
                            <span class="news-date-day d-block">10</span>
                            <span class="news-date-month d-block">MAY</span>
                        </div>
                    </div>
                    <div class="news-card-body card-body text-center p-4 d-flex flex-column justify-content-center">
                        <h5 class="news-title card-title text-uppercase text-custom-color-2 ff-baskervville fw-bold mb-3">FCM'S ROBERT STEWART RECIEVES<br>ANOTHER PRESTIGIOUS AWARD</h5>
                        <p class="news-description card-text text-custom-color-1 ff-gill-sans-light mb-0 mx-auto">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- News Item 2 -->
            <div class="col-md-4 ">
                <div class="card border-0 rounded-0 h-100 bg-custom-color-5">
                    <div class="position-relative">
                        <img src="assets/images/news/news-2.webp" class="news-image card-img-top rounded-0 object-fit-cover" alt="News 2">
                        <div class="news-date-tag position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold">
                            <span class="news-date-day d-block">21</span>
                            <span class="news-date-month d-block">MAY</span>
                        </div>
                    </div>
                    <div class="news-card-body card-body text-center p-4 d-flex flex-column justify-content-center">
                        <h5 class="news-title card-title text-custom-color-2 text-uppercase ff-baskervville fw-bold mb-3">CORRECT INSTALLATION<br>OF FIRE DOORS</h5>
                        <p class="news-description card-text text-custom-color-1 ff-gill-sans-light mb-0 mx-auto">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- News Item 3 -->
            <div class="col-md-4 pe-lg-0">
                <div class="card border-0 rounded-0 h-100 bg-custom-color-5">
                    <div class="position-relative">
                        <img src="assets/images/news/news-3.webp" class="news-image card-img-top rounded-0 object-fit-cover" alt="News 3">
                        <div class="news-date-tag position-absolute top-0 start-0 text-white text-center pt-2 pb-2 ff-gill-sans fw-bold">
                            <span class="news-date-day d-block">30</span>
                            <span class="news-date-month d-block">MAY</span>
                        </div>
                    </div>
                    <div class="news-card-body card-body text-center p-4 d-flex flex-column justify-content-center">
                        <h5 class="news-title card-title text-uppercase ff-baskervville text-custom-color-2 fw-bold mb-3">CORRECT INSTALLATION OF<br>EXTRACT DUCTS</h5>
                        <p class="news-description card-text text-custom-color-1 ff-gill-sans-light mb-0 mx-auto">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam esnonummy nibh euismod tincidunt lao
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Projects Section -->
<section class="latest-projects-section pt-5 bg-custom-color-1">
    <div class="container text-center text-white mb-5 pt-3">
        <h6 class="sub-title text-uppercase fw-semibold ff-gill-sans-medium text-white">What We Do</h6>
        <h2 class="section-title text-uppercase ff-baskervville mt-3 mb-4 text-white">Latest Projects</h2>
        <div class="title-divider bg-custom-color-2 mx-auto"></div>
    </div>
    
    <div class="container-fluid p-0">
        <div class="row g-0 mx-0">
            <!-- Project 1 -->
            <div class="col-md-6 position-relative project-item">
                <img src="assets/images/projects/project-1.webp" class="w-100 h-100 object-fit-cover" alt="400 LONGWATER AVENUE">
                <div class="project-overlay position-absolute bottom-0 start-0 w-100 p-4 ps-md-5">
                    <h5 class="project-title text-white ff-baskervville m-0 text-uppercase mb-1">400 Longwater Avenue</h5>
                    <p class="project-category text-white ff-gill-sans fw-bold m-0 text-uppercase">Construction</p>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="col-md-6 position-relative project-item">
                <img src="assets/images/projects/project-2.webp" class="w-100 h-100 object-fit-cover" alt="DELANEY TWO">
                <div class="project-overlay position-absolute bottom-0 start-0 w-100 p-4 ps-md-5">
                    <h5 class="project-title text-white ff-baskervville m-0 text-uppercase mb-1">Delaney Two</h5>
                    <p class="project-category text-white ff-gill-sans fw-bold m-0 text-uppercase">Cladding Works</p>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="col-md-6 position-relative project-item">
                <img src="assets/images/projects/project-3.webp" class="w-100 h-100 object-fit-cover" alt="APEX HOUSE">
                <div class="project-overlay position-absolute bottom-0 start-0 w-100 p-4 ps-md-5">
                    <h5 class="project-title text-white ff-baskervville m-0 text-uppercase mb-1">Apex House</h5>
                    <p class="project-category text-white ff-gill-sans fw-bold m-0 text-uppercase">Construction</p>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="col-md-6 position-relative project-item">
                <img src="assets/images/projects/project-4.webp" class="w-100 h-100 object-fit-cover" alt="GREENWICH MILLENNIUM VILLAGE">
                <div class="project-overlay position-absolute bottom-0 start-0 w-100 p-4 ps-md-5">
                    <h5 class="project-title text-white ff-baskervville m-0 text-uppercase mb-1">Greenwich Millennium Village</h5>
                    <p class="project-category text-white ff-gill-sans fw-bold m-0 text-uppercase">Construction</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center py-5">
        <a class="btn btn-primary text-decoration-none ff-gill-sans text-white text-uppercase px-5 py-2 fw-bold">View More</a>
    </div>
</section>

<!-- Map Section -->
<section class="map-section border-top">
    <div id="londonMap"></div>
</section>

<!-- Get In Touch Section -->
<section class="get-in-touch-section py-5 bg-custom-color-4">
    <div class="container py-5">
        <div class="row mx-0">
            <!-- Left Column: Contact Info -->
            <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                <h6 class="sub-title text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium mb-2">Contact</h6>
                <h2 class="section-title text-custom-color-2 text-uppercase ff-baskervville mb-4">Get In Touch</h2>
                
                <p class="contact-intro text-custom-color-1 fw-semibold ff-gill-sans-medium mb-5">
                    We are waiting for you at out London office or in other way, you can contact us via the contact form below to discuss your project, your idea
                </p>
                
                <div class="row mb-5 mx-0">
                    <div class="col-6">
                        <h6 class="contact-label text-custom-color-2 text-uppercase fw-semibold ff-gill-sans-medium mb-2">Email:</h6>
                        <a href="mailto:info@fcmltd.co.uk" class="contact-link text-custom-color-1 text-decoration-none fw-semibold ff-gill-sans-medium">info@fcmltd.co.uk</a>
                    </div>
                    <div class="col-6">
                        <h6 class="contact-label text-custom-color-2 text-uppercase fw-semibold ff-gill-sans-medium mb-2">Phone:</h6>
                        <a href="tel:+0203235758" class="contact-link text-custom-color-1 text-decoration-none fw-semibold ff-gill-sans-medium">+020 323 5758</a>
                    </div>
                </div>
                
                <div class="social-icons d-flex gap-4">
                    <a href="#" class="social-link text-custom-color-2 text-decoration-none"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="social-link text-custom-color-2 text-decoration-none"><i class="bi bi-twitter-x fs-4"></i></a>
                    <a href="#" class="social-link text-custom-color-2 text-decoration-none"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="social-link text-custom-color-2 text-decoration-none"><i class="bi bi-linkedin fs-4"></i></a>
                </div>
            </div>
            
            <!-- Right Column: Form -->
            <div class="col-md-6 ps-md-5 d-flex flex-column justify-content-center">
                <form>
                    <div class="mb-4">
                        <label for="contactEmail" class="form-label-custom text-custom-color-1 form-label ff-gill-sans fw-bold">Email</label>
                        <input type="email" class="form-input-custom form-control shadow-none rounded-0 px-0" id="contactEmail">
                    </div>
                    
                    <div class="mb-4">
                        <label for="contactMessage" class="form-label-custom text-custom-color-1 form-label ff-gill-sans fw-bold">Message</label>
                        <textarea class="form-textarea-custom form-control shadow-none rounded-0" id="contactMessage" rows="5"></textarea>
                    </div>
                    <div class="btn-wrapper">
                    <a href="" class="btn btn-primary text-white text-decoration-none ff-gill-sans text-uppercase"><span>Send</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="certifications-section py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center text-center mx-0">
            <!-- Cert 1 -->
            <div class="col-md-4 mb-5 mb-md-0 d-flex flex-column align-items-center">
                <img src="assets/images/emblem.webp" alt="Institute of Clerks of Works" class="cert-image">
                <p class="cert-description text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium mx-auto">
                    Proud members of the institute of clerks of works and construction inspectorate of great britain
                </p>
            </div>
            <!-- Cert 2 -->
            <div class="col-md-4 mb-5 mb-md-0 d-flex flex-column align-items-center">
                <img src="assets/images/qas-international.webp" alt="QAS International" class="cert-image">
                <p class="cert-description text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium mx-auto">
                    ISO 9001:2015 Registered Firm
                </p>
            </div>
            <!-- Cert 3 -->
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="assets/images/london-chamber.webp" alt="London Chamber of Commerce" class="cert-image">
                <p class="cert-description text-custom-color-1 text-uppercase fw-semibold ff-gill-sans-medium mx-auto">
                    Proud member of the London Chamber of Commerce and Industry
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Section -->
<section class="instagram-section pt-5 pb-0 bg-white text-center">
    <div class="container mb-5">
        <h6 class="sub-title text-uppercase text-custom-color-1 fw-semibold ff-gill-sans-medium mb-2">Follow Us</h6>
        <h2 class="section-title text-uppercase text-custom-color-2 ff-baskervville">Instagram</h2>
    </div>
    
    <div class="container-fluid p-0 overflow-hidden">
        <div class="marquee-wrapper">
            <div class="marquee-content">
                <div class="insta-item">
                    <img src="assets/images/projects/project-1.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 1">
                </div>
                <div class="insta-item">
                    <img src="assets/images/news/news-1.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 2">
                </div>
                <div class="insta-item">
                    <img src="assets/images/projects/project-3.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 3">
                </div>
                <div class="insta-item">
                    <img src="assets/images/news/news-2.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 4">
                </div>
                <div class="insta-item">
                    <img src="assets/images/projects/project-4.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 5">
                </div>
            </div>
            <!-- Duplicate content for seamless loop -->
            <div class="marquee-content" aria-hidden="true">
                <div class="insta-item">
                    <img src="assets/images/projects/project-1.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 1">
                </div>
                <div class="insta-item">
                    <img src="assets/images/news/news-1.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 2">
                </div>
                <div class="insta-item">
                    <img src="assets/images/projects/project-3.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 3">
                </div>
                <div class="insta-item">
                    <img src="assets/images/news/news-2.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 4">
                </div>
                <div class="insta-item">
                    <img src="assets/images/projects/project-4.webp" class="w-100 h-100 object-fit-cover" alt="Instagram 5">
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php include_once 'assets/includes/footer.php'; ?>
<?php include_once 'assets/includes/footer-links.php'; ?>


