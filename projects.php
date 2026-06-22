<?php include_once 'assets/includes/header-links.php'; ?>
<?php include_once 'assets/includes/header.php'; ?>

<main>
    <!-- Top 2-Image Banner -->
    <section class="d-flex w-100 flex-wrap flex-md-nowrap projects-hero-section">
        <div class="position-relative overflow-hidden hero-banner-wrapper projects-hero-col">
            <img src="assets/images/residential-hero.webp" class="hero-banner-img"  alt="Residential Hero">
            <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
            <div class="position-absolute bottom-0 start-0 p-4 text-white">
                <h3 class="ff-baskervville mb-0 hero-banner-title">Residential</h3>
                <p class="ff-gill-sans-light mb-0 hero-banner-subtitle">View Projects</p>
            </div>
            <a href="#" class="stretched-link" onclick="document.querySelector('.filter-btn[data-filter=\'residential\']').click(); document.getElementById('filters-section').scrollIntoView({behavior: 'smooth'}); return false;"></a>
        </div>
        <div class="position-relative overflow-hidden hero-banner-wrapper projects-hero-col">
            <img src="assets/images/commercial-hero.webp" class="hero-banner-img"  alt="Commercial Hero">
            <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
            <div class="position-absolute bottom-0 start-0 p-4 text-white">
                <h3 class="ff-baskervville mb-0 hero-banner-title">Commercial</h3>
                <p class="ff-gill-sans-light mb-0 hero-banner-subtitle">View Projects</p>
            </div>
            <a href="#" class="stretched-link" onclick="document.querySelector('.filter-btn[data-filter=\'commercial\']').click(); document.getElementById('filters-section').scrollIntoView({behavior: 'smooth'}); return false;"></a>
        </div>
    </section>



    <!-- Filters -->
    <section id="filters-section" class="py-4 text-center">
        <div class="container">
            <div class=" fw-semibold d-flex ff-gill-sans-medium justify-content-center align-items-center gap-4">
                <a href="#" class="filter-btn text-decoration-none ff-gill-sans-medium fw-semibold h5 pt-1 mb-0" data-filter="residential" >RESIDENTIAL</a>
                <div class="vr" style="background-color: var(--custom-color-1); width: 2px; height: 1.5rem;"></div>
                <a href="#" class="filter-btn text-decoration-none ff-gill-sans-medium fw-semibold h5 pt-1 mb-0" data-filter="commercial" >COMMERCIAL</a>
            </div>
        </div>
    </section>

    <!-- Title and Description Section -->
    <section class="py-5 projects-title-section">
        <div class="container px-md-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="ff-baskervville mb-3 projects-main-title text-custom-color-2" id="section-title">RESIDENTIAL</h1>
                    <p class="ff-gill-sans-medium fw-semibold text-custom-color-1 projects-main-subtitle" id="section-subtitle">
                        INTERIOR ARCHITECTURE AND DESIGN<br>AROUND LONDON AND BEYOND.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="ff-gill-sans-light text-start text-md-end mb-4 projects-description text-custom-color-1" id="section-desc">
                        We pride ourselves on our meticulous approach to every project, ensuring that each space we design is both functional and aesthetically pleasing. Our residential portfolio showcases our commitment to creating bespoke homes that reflect the unique lifestyles of our clients.
                    </p>
                    <div class="btn-wrapper d-inline-block"><a href="#" class="btn-primary btn text-white text-decoration-none ff-gill-sans" >ALL PROJECTS</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid of Projects -->
    <section class="pb-5 projects-grid-section">
        <div class="container-fluid px-0 overflow-hidden">
            <div class="row g-3">
                <!-- Project 1 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-1.webp" class="w-100 h-100"  alt="400 Longwater Avenue">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">400 Longwater Avenue - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-2.webp" class="w-100 h-100"  alt="400 Longwater Avenue">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">400 Longwater Avenue - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-3.webp" class="w-100 h-100"  alt="Delaney 2">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Delaney 2 - Cladding Works</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-4.webp" class="w-100 h-100"  alt="Greenwich Millennium Village">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Greenwich Millennium Village - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-5.webp" class="w-100 h-100"  alt="St Paul's School">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">St Paul's School - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-6.webp" class="w-100 h-100"  alt="Newcastle Court">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Newcastle Court - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 7 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-7.webp" class="w-100 h-100"  alt="QMUL Mathematical Sciences Building">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">QMUL Mathematical Sciences Building - Construction & Refurbishment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 8 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-8.webp" class="w-100 h-100"  alt="Mount Pleasant Halls, Cambridge">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Mount Pleasant Halls, Cambridge - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 9 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-9.webp" class="w-100 h-100"  alt="Buckingham Green">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Buckingham Green - Construction & Refurbishment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 10 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-10.webp" class="w-100 h-100"  alt="Parker Tower">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Parker Tower - Redevelopment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 11 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-11.webp" class="w-100 h-100"  alt="Royal Borough of Kensington & Chelsea Repairs">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Royal Borough of Kensington & Chelsea Repairs - External Redecoration</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 12 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-12.webp" class="w-100 h-100"  alt="Cheltenham Estate">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Cheltenham Estate - External Redecoration</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 13 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-13.webp" class="w-100 h-100"  alt="Kensal House">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Kensal House - External Redecoration</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 14 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-14.webp" class="w-100 h-100"  alt="21 Young Street">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">21 Young Street - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 15 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-15.webp" class="w-100 h-100"  alt="Clayton Hotel">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Clayton Hotel - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 16 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-16.webp" class="w-100 h-100"  alt="Marlborough College Memorial Hall">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Marlborough College Memorial Hall - Refurbishment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 17 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-17.webp" class="w-100 h-100"  alt="1 Hyde Park Street">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">1 Hyde Park Street - Refurbishment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 18 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-18.webp" class="w-100 h-100"  alt="Munro Mews">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Munro Mews - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 19 -->
                <div class="col-md-6 project-item" data-category="commercial">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-19.webp" class="w-100 h-100"  alt="Zedwell Hotel Piccadilly">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Zedwell Hotel Piccadilly - Redevelopment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 20 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-20.webp" class="w-100 h-100"  alt="Brenchley House">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Brenchley House - Redevelopment</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 21 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-21.webp" class="w-100 h-100"  alt="Hillview House & Melbury House">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Hillview House & Melbury House - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
                <!-- Project 22 -->
                <div class="col-md-6 project-item" data-category="residential">
                    <div class="project-card position-relative overflow-hidden project-card-inner">
                        <img src="assets/images/projects/project-22.webp" class="w-100 h-100"  alt="Beaulieu Square">
                        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 project-overlay-gradient"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h3 class="ff-baskervville mb-1 project-card-title">Beaulieu Square - Construction</h3>
                            <p class="ff-gill-sans-light mb-0 project-card-subtitle">View Project</p>
                        </div>
                        <a href="project-detail.php" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>






<?php include_once 'assets/includes/footer.php'; ?>
<?php include_once 'assets/includes/footer-links.php'; ?>
