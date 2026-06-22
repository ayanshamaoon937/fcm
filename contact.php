<?php include_once 'assets/includes/header-links.php'; ?>
<?php include_once 'assets/includes/header.php'; ?>

<main style="background-color: #F8F7F3;">

<!-- Map Section -->
<section class="map-section border-top">
    <!-- Leaflet CSS -->
    
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

</main>

<?php include_once 'assets/includes/footer.php'; ?>
<?php include_once 'assets/includes/footer-links.php'; ?>
