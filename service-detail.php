<?php 
include_once 'assets/includes/header-links.php'; 
include_once 'assets/includes/header.php'; 
include_once 'assets/data/services_data.php'; 

// Retrieve and validate the service ID from the URL
$service_id = isset($_GET['id']) ? $_GET['id'] : null;

// If the ID is invalid or doesn't exist in our data, redirect back to services page
if (!$service_id || !isset($services_data[$service_id])) {
    header('Location: services.php');
    exit;
}

$service = $services_data[$service_id];
?>

<main style="background-color: #F8F7F3;">
    <!-- Hero Section -->
    <section class="position-relative d-flex align-items-end" style="height: 60vh; min-height: 400px;">
        <img src="<?php echo htmlspecialchars($service['image']); ?>" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="<?php echo htmlspecialchars($service['title']); ?>">
        <div class="project-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%); pointer-events: none;"></div>
        <div class="container position-relative z-1 mb-5">
            <h1 class="text-white ff-baskervville mb-2 hero-title" style="font-size: 3.5rem;"><?php echo htmlspecialchars($service['title']); ?></h1>
            <p class="text-white ff-gill-sans-light mb-0 hero-subtitle" style="font-size: 1.1rem; max-width: 600px; opacity: 0.9;">
                <?php echo htmlspecialchars($service['subtitle']); ?>
            </p>
        </div>
    </section>

    <!-- Content Container -->
    <section class="py-5 service-detail-content-section">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Back Button -->
                    <a href="services.php" class="text-decoration-none d-inline-block mb-4 ff-gill-sans text-custom-color-2" style="letter-spacing: 1px; font-size: 0.9rem;">
                        &larr; BACK TO SERVICES
                    </a>

                    <div class="service-detail-content">
                        <?php 
                        // Loop through all paragraphs in the content array and render them
                        foreach($service['content'] as $paragraph) {
                            // We allow HTML here in case of lists (like in the Clerks of Works content)
                            echo '<div class="ff-gill-sans-light mb-4" style="font-size: 1.05rem; line-height: 1.9; color: #444;">' . $paragraph . '</div>';
                        }
                        ?>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="mt-5 pt-4 border-top text-center">
                        <h3 class="ff-baskervville mb-3 text-custom-color-1">Interested in this service?</h3>
                        <div class="btn-wrapper d-inline-block mt-2"><a href="contact-us.php" class="btn btn-primary text-white text-decoration-none ff-gill-sans" style="background-color: var(--custom-color-2); padding: 0.8rem 2.5rem; letter-spacing: 2px; font-size: 0.85rem; border-radius: 0;">CONTACT US</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Selected Projects Section -->
    <section class="py-5 project-detail-selected-projects-section">
        <div class="container-fluid px-md-4">
            <h2 class="ff-baskervville mb-5 text-center text-md-start project-detail-section-title">Selected Projects</h2>
        </div>
        
        <div class="container-fluid px-0">
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <a href="project-detail.php" class="text-decoration-none text-dark d-block project-thumb">
                        <div class="overflow-hidden mb-3 project-detail-thumb-wrapper">
                            <img src="assets/images/projects/project-1.webp" class="w-100 h-100 project-detail-thumb-img" alt="400 Longwater Avenue - Construction">
                        </div>
                        <h4 class="ff-baskervville project-detail-thumb-title">400 Longwater Avenue - Construction</h4>
                    </a>
                </div>
                
                <!-- Project 2 -->
                <div class="col-md-4">
                    <a href="project-detail.php" class="text-decoration-none text-dark d-block project-thumb">
                        <div class="overflow-hidden mb-3 project-detail-thumb-wrapper">
                            <img src="assets/images/projects/project-2.webp" class="w-100 h-100 project-detail-thumb-img" alt="400 Longwater Avenue - Construction">
                        </div>
                        <h4 class="ff-baskervville project-detail-thumb-title">400 Longwater Avenue - Construction</h4>
                    </a>
                </div>
                
                <!-- Project 3 -->
                <div class="col-md-4">
                    <a href="project-detail.php" class="text-decoration-none text-dark d-block project-thumb">
                        <div class="overflow-hidden mb-3 project-detail-thumb-wrapper">
                            <img src="assets/images/projects/project-3.webp" class="w-100 h-100 project-detail-thumb-img" alt="Delaney 2 - Cladding Works">
                        </div>
                        <h4 class="ff-baskervville project-detail-thumb-title">Delaney 2 - Cladding Works</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include_once 'assets/includes/footer.php'; ?>
<?php include_once 'assets/includes/footer-links.php'; ?>
