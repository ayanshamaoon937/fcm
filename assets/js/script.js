document.addEventListener("DOMContentLoaded", function() {
    // Initialize Swiper for the Hero Section
    if (document.querySelector('.hero-swiper')) {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                waitForTransition: true,
            },
            speed: 1400,
            grabCursor: true,
            resistanceRatio: 0.65,
        });
    }

    // Initialize Services Swiper (Continuous Marquee)
    if (document.querySelector('.services-swiper')) {
        const servicesSwiper = new Swiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            speed: 5000,
            allowTouchMove: false,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                576: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                992: { slidesPerView: 4 },
                1200: { slidesPerView: 5 }
            }
        });
    }

    if (document.querySelector('.partners-swiper')) {
        const partnersSwiper = new Swiper('.partners-swiper', {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            speed: 3000,
            freeMode: true,
            allowTouchMove: false,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            }
        });
    }
    // Counter Animation on Scroll
    const counters = document.querySelectorAll('.counter-val');
    const speed = 50; 

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetEl = entry.target;
                const target = +targetEl.getAttribute('data-target');
                
                const updateCount = () => {
                    const count = +targetEl.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        targetEl.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else {
                        targetEl.innerText = target;
                    }
                };
                
                updateCount();
                observer.unobserve(targetEl);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    // Sticky Main Nav
    const topBar = document.querySelector('.top-bar');
    const mainNav = document.querySelector('.main-nav');
    const header = document.querySelector('.site-header');
    
    if (topBar && mainNav && header) {
        const spacer = document.createElement('div');
        spacer.className = 'nav-spacer d-none';
        header.insertBefore(spacer, mainNav);

        window.addEventListener('scroll', () => {
            if (window.scrollY > topBar.offsetHeight) {
                mainNav.classList.add('fixed-top', 'bg-white', 'shadow-sm');
                mainNav.style.transition = 'background-color 0.3s ease, box-shadow 0.3s ease';
                spacer.style.height = mainNav.offsetHeight + 'px';
                spacer.classList.remove('d-none');
            } else {
                mainNav.classList.remove('fixed-top', 'bg-white', 'shadow-sm');
                spacer.classList.add('d-none');
                spacer.style.height = '0';
            }
        });
    }

    // GSAP Animations
    // Hero Section (immediate)
    if(typeof gsap !== 'undefined') {
        gsap.config({ nullTargetWarn: false }); // Prevent warnings on pages where targets don't exist

        gsap.from(".hero-title", { duration: 1, y: 40, opacity: 0, ease: "power3.out", delay: 0.2 });
        gsap.from(".hero-subtitle", { duration: 1, y: 30, opacity: 0, ease: "power3.out", delay: 0.4 });
        gsap.from(".hero-text", { duration: 1, y: 30, opacity: 0, ease: "power3.out", delay: 0.6 });
        gsap.from(".btn-wrapper", { duration: 1, y: 20, opacity: 0, ease: "power3.out", delay: 0.8 });
        gsap.from(".hero-slide .person-img", { duration: 1.5, opacity: 0, scale: 0.95, ease: "power3.out", delay: 0.3 });

        // Scroll Animations for all other sections
        const scrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    gsap.set(target, { opacity: 1 }); // Ensure section is visible

                    if (target.classList.contains('service-options-section')) {
                        gsap.from(target.querySelector('h2'), { opacity: 0, y: -30, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.service-option-card'), { opacity: 0, y: 50, duration: 0.8, stagger: 0.15, ease: "back.out(1.7)", delay: 0.2 });
                    }
                    else if (target.classList.contains('impact-section')) {
                        gsap.from(target.querySelectorAll('.impact-title, .impact-desc'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.2, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.impact-card'), { opacity: 0, scale: 0.8, duration: 0.8, stagger: 0.15, ease: "back.out(1.5)", delay: 0.4 });
                    }
                    else if (target.classList.contains('our-partners-section')) {
                        gsap.from(target.querySelector('h2'), { opacity: 0, y: -20, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelector('.swiper'), { opacity: 0, y: 30, duration: 1, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('faq-section')) {
                        gsap.from(target.querySelector('.faq-header'), { opacity: 0, y: -30, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.accordion-item'), { opacity: 0, x: -30, duration: 0.6, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                        gsap.from(target.querySelectorAll('.primary-btn'), { opacity: 0, y: 20, duration: 0.8, ease: "power2.out", delay: 0.8 });
                    }
                    else if (target.classList.contains('who-we-are')) {
                        gsap.from(target.querySelectorAll('h6, h2, .title-divider, p, .btn-wrapper'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                    }
                    else if (target.classList.contains('services-section')) {
                        gsap.from(target.querySelectorAll('h6, h2, .title-divider, p'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                    }
                    else if (target.classList.contains('our-sectors-section')) {
                        gsap.from(target.querySelectorAll('h2, .sectors-description'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.timeline-line'), { opacity: 0, scaleY: 0, transformOrigin: "top", duration: 1, ease: "power2.out", delay: 0.3 });
                        gsap.from(target.querySelectorAll('.sector-item'), { opacity: 0, x: 30, duration: 0.8, stagger: 0.15, ease: "power2.out", delay: 0.5 });
                    }
                    else if (target.classList.contains('latest-news-section')) {
                        gsap.from(target.querySelectorAll('h6, h2, .title-divider'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.card'), { opacity: 0, y: 50, duration: 0.8, stagger: 0.15, ease: "back.out(1.5)", delay: 0.3 });
                        gsap.from(target.querySelectorAll('.news-title, .news-description'), { opacity: 0, y: 20, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.6 });
                    }
                    else if (target.classList.contains('latest-projects-section')) {
                        gsap.from(target.querySelectorAll('h6, h2, .title-divider'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.project-item'), { opacity: 0, scale: 0.95, duration: 0.8, stagger: 0.15, ease: "power2.out", delay: 0.3 });
                        gsap.from(target.querySelectorAll('.project-title, .project-category'), { opacity: 0, y: 20, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.6 });
                    }
                    else if (target.classList.contains('get-in-touch-section')) {
                        gsap.from(target.querySelectorAll('h6, h2, .contact-intro'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.col-6, .social-link'), { opacity: 0, y: 20, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                        gsap.from(target.querySelectorAll('form .mb-4, form .btn-wrapper'), { opacity: 0, x: 30, duration: 0.8, stagger: 0.15, ease: "power2.out", delay: 0.4 });
                    }
                    else if (target.classList.contains('certifications-section')) {
                        gsap.from(target.querySelectorAll('.col-md-4'), { opacity: 0, scale: 0.9, y: 30, duration: 0.8, stagger: 0.2, ease: "power2.out" });
                    }
                    else if (target.classList.contains('instagram-section')) {
                        gsap.from(target.querySelectorAll('h6, h2'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.insta-item'), { opacity: 0, y: 30, scale: 0.95, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('about-who-we-are-section') || target.classList.contains('about-what-we-do-section') || target.classList.contains('about-help-section')) {
                        gsap.from(target.querySelectorAll('.about-section-subtitle, .about-section-title'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.about-text, ul li'), { opacity: 0, y: 20, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('about-full-img-container')) {
                        gsap.from(target.querySelector('img'), { opacity: 0, scale: 0.95, duration: 1.2, ease: "power2.out" });
                    }
                    else if (target.classList.contains('join-section') || target.classList.contains('current-opportunities')) {
                        gsap.from(target.querySelectorAll('h6, h2'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        // Target the column wrappers instead of feature-card/job-card directly to avoid CSS transition conflicts
                        gsap.from(target.querySelectorAll('.col-lg-3, .col-lg-4'), { opacity: 0, y: 40, duration: 0.8, stagger: 0.15, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('life-at-fcm')) {
                        gsap.from(target.querySelectorAll('h6, h2'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        // Target the wrapper instead of the image to avoid CSS transform transition conflicts
                        gsap.from(target.querySelectorAll('.life-gallery-wrapper'), { opacity: 0, scale: 0.8, duration: 0.8, stagger: 0.1, ease: "back.out(1.5)", delay: 0.3 });
                        gsap.from(target.querySelector('.btn'), { opacity: 0, y: 20, duration: 0.8, ease: "power2.out", delay: 0.8 });
                    }
                    else if (target.classList.contains('benefits-section')) {
                        gsap.from(target.querySelector('h6'), { opacity: 0, y: 30, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.benefit-item, .benefit-divider'), { opacity: 0, x: -20, duration: 0.6, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('apply-today')) {
                        gsap.from(target.querySelectorAll('h6, h2'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelector('form'), { opacity: 0, x: -40, duration: 0.8, ease: "power2.out", delay: 0.3 });
                        gsap.from(target.querySelector('.info-panel'), { opacity: 0, x: 40, duration: 0.8, ease: "power2.out", delay: 0.5 });
                    }
                    else if (target.classList.contains('recruitment-process-section')) {
                        gsap.from(target.querySelector('h6'), { opacity: 0, y: 30, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelector('.timeline-line'), { opacity: 0, scaleX: 0, transformOrigin: "left", duration: 1, ease: "power2.out", delay: 0.2 });
                        gsap.from(target.querySelectorAll('.timeline-step'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out", delay: 0.4 });
                    }
                    else if (target.classList.contains('careers-footer-cta')) {
                        gsap.from(target.querySelectorAll('h2, p, .btn'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                    }
                    else if (target.classList.contains('news-detail-content-section')) {
                        gsap.from(target.querySelectorAll('.news-detail-heading, .news-detail-subheading'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('.news-detail-paragraph'), { opacity: 0, y: 20, duration: 0.8, stagger: 0.1, ease: "power2.out", delay: 0.3 });
                    }
                    else if (target.classList.contains('projects-title-section')) {
                        gsap.from(target.querySelector('#section-title'), { opacity: 0, x: -30, duration: 0.8, ease: "power2.out" });
                        gsap.from(target.querySelector('#section-subtitle'), { opacity: 0, x: -30, duration: 0.8, ease: "power2.out", delay: 0.2 });
                        gsap.from(target.querySelector('#section-desc'), { opacity: 0, x: 30, duration: 0.8, ease: "power2.out", delay: 0.2 });
                        gsap.from(target.querySelector('.btn-wrapper'), { opacity: 0, y: 20, duration: 0.8, ease: "power2.out", delay: 0.4 });
                    }
                    else {
                        // Generic fallback for promo and partnership sections
                        gsap.from(target.querySelectorAll('h2, p, .primary-btn'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('img:not(.primary-btn-icon img):not(.news-card-img)'), { opacity: 0, scale: 1.2, x: 30, duration: 1, ease: "power2.out", delay: 0.3 });
                    }
                    
                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        document.querySelectorAll('section:not(.hero-section):not(.about-hero):not(.careers-hero-section):not(.news-detail-hero):not(.news-hero-section):not(.projects-hero-section):not(.services-hero-section):not(.news-grid-section):not(.projects-grid-section):not(.services-container-section):not(.news-detail-content-section):not(.news-detail-related-news-section):not(.project-detail-selected-projects-section):not(.project-detail-hero):not(.service-detail-content-section):not(.project-detail-content-section):not(.map-section), .about-full-img-container').forEach(section => {
            section.style.opacity = 0;
            scrollObserver.observe(section);
        });

        // Individual Card Observer for staggered loading as user scrolls down
        const cardObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const card = entry.target;
                    gsap.set(card, { opacity: 1 });
                    
                    if (card.classList.contains('service-block-row')) {
                        // animate service row
                        const isReverse = card.classList.contains('flex-md-row-reverse');
                        gsap.from(card.querySelector('.col-md-6:first-child'), { opacity: 0, x: isReverse ? 40 : -40, duration: 0.8, ease: "power2.out" });
                        gsap.from(card.querySelector('.col-md-6:last-child').children, { opacity: 0, x: isReverse ? -40 : 40, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                    } else {
                        // default card slide up
                        gsap.from(card, { opacity: 0, y: 40, duration: 0.8, ease: "power2.out" });
                    }
                    observer.unobserve(card);
                }
            });
        }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

        document.querySelectorAll('.news-grid-section .col-lg-6, .projects-grid-section .project-item, .service-block-row, .article-content h2, .article-content h3, .article-content p, .service-detail-content div, .news-detail-related-news-section .col-md-4, .project-detail-selected-projects-section .col-md-4, .service-detail-content-section .border-top').forEach(card => {
            card.style.opacity = 0;
            cardObserver.observe(card);
        });

        gsap.from('.hero-image-wrapper', {
            opacity: 0,
            scale: 0.9,
            duration: 1.5,
            ease: "power2.out",
            delay: 0.3
        });
        
        // About Us hero immediate animation
        if (document.querySelector('.about-hero-title')) {
            gsap.from('.about-hero-title', { opacity: 0, y: 30, duration: 1, ease: "power2.out" });
        }
        
        // Projects Hero columns
        if (document.querySelector('.projects-hero-col')) {
            gsap.from('.projects-hero-col', { opacity: 0, y: 30, duration: 1, stagger: 0.2, ease: "power2.out" });
        }
        
        // Header Sticky Logic
        const mainHeader = document.querySelector('.header');
        if (mainHeader) {
            const isSolid = mainHeader.classList.contains('header-solid');
            let placeholder;
            if (isSolid) {
                placeholder = document.createElement('div');
                placeholder.className = 'header-placeholder';
                setTimeout(() => {
                    placeholder.style.height = mainHeader.offsetHeight + 'px';
                }, 0);
                placeholder.style.display = 'none';
                mainHeader.parentNode.insertBefore(placeholder, mainHeader.nextSibling);
            }

            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    mainHeader.classList.add('scrolled');
                    if (isSolid && placeholder) {
                        placeholder.style.display = 'block';
                    }
                } else {
                    mainHeader.classList.remove('scrolled');
                    if (isSolid && placeholder) {
                        placeholder.style.display = 'none';
                    }
                }
            });
        }

        // Video Logic
        const video = document.getElementById('fcmVideo');
        if (video) {
            const overlay = document.getElementById('videoOverlay');
            const playPauseBtn = document.getElementById('playPauseBtn');
            const icon = playPauseBtn.querySelector('i');

            if (overlay && playPauseBtn && icon) {
                overlay.addEventListener('click', function() {
                    if (video.paused) {
                        video.play();
                        icon.classList.remove('bi-play-fill');
                        icon.classList.add('bi-pause-fill');
                        icon.classList.add('is-playing');
                        playPauseBtn.classList.add('hidden');
                        overlay.classList.add('is-playing');
                        video.classList.remove('opacity-75');
                    } else {
                        video.pause();
                        icon.classList.remove('bi-pause-fill');
                        icon.classList.add('bi-play-fill');
                        icon.classList.remove('is-playing');
                        playPauseBtn.classList.remove('hidden');
                        overlay.classList.remove('is-playing');
                        video.classList.add('opacity-75');
                    }
                });

                overlay.addEventListener('mouseenter', function() {
                    if (!video.paused) {
                        playPauseBtn.classList.remove('hidden');
                    }
                });

                overlay.addEventListener('mouseleave', function() {
                    if (!video.paused) {
                        playPauseBtn.classList.add('hidden');
                    }
                });
            }
        }

        // Map Logic
        const mapContainer = document.getElementById('londonMap');
        if (mapContainer && typeof window.L !== 'undefined') {
            var map = L.map('londonMap', {
                scrollWheelZoom: false
            }).setView([51.52, -0.08], 11);

            L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                subdomains: 'abcd',
                maxZoom: 20
            }).addTo(map);

            var customIcon = L.divIcon({
                className: 'custom-pin',
                iconAnchor: [15, 30],
                html: '<div class="pin bg-custom-color-2"></div>'
            });

            var locations = [
                [51.54, -0.23], [51.535, -0.10], [51.52, -0.01], [51.525, 0.02], [51.48, -0.08], [51.61, 0.04]
            ];

            locations.forEach(function(coords) {
                L.marker(coords, {icon: customIcon}).addTo(map);
            });

            // Ensure map sizes correctly
            setTimeout(() => {
                map.invalidateSize();
            }, 200);
        }

        // Project Filter Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        if (filterBtns.length > 0) {
            const projectItems = document.querySelectorAll('.project-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    projectItems.forEach(item => {
                        if(item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    const titleEl = document.getElementById('section-title');
                    const subTitleEl = document.getElementById('section-subtitle');
                    const descEl = document.getElementById('section-desc');

                    if (titleEl && subTitleEl && descEl) {
                        if (filterValue === 'residential') {
                            titleEl.textContent = 'RESIDENTIAL';
                            subTitleEl.innerHTML = 'INTERIOR ARCHITECTURE AND DESIGN<br>AROUND LONDON AND BEYOND.';
                            descEl.textContent = 'We pride ourselves on our meticulous approach to every project, ensuring that each space we design is both functional and aesthetically pleasing. Our residential portfolio showcases our commitment to creating bespoke homes that reflect the unique lifestyles of our clients.';
                        } else if (filterValue === 'commercial') {
                            titleEl.textContent = 'COMMERCIAL';
                            subTitleEl.innerHTML = 'FORWARD THINKING COMMERCIAL SPACES<br>ACROSS THE UK.';
                            descEl.textContent = "We understand that commercial spaces need to inspire creativity, foster collaboration, and reflect a company's ethos. Our commercial portfolio features innovative designs that transform workplaces into dynamic environments, tailored to meet the specific needs of modern businesses.";
                        }
                    }

                    if(typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                });
            });

            const defaultFilterBtn = document.querySelector('.filter-btn[data-filter="residential"]');
            if (defaultFilterBtn) {
                defaultFilterBtn.click();
            }
        }
    }
    // Marquee Mobile Touch Support
    const marqueeWrappers = document.querySelectorAll('.marquee-wrapper');
    marqueeWrappers.forEach(wrapper => {
        wrapper.addEventListener('touchstart', () => {
            wrapper.style.animationPlayState = 'paused';
        }, { passive: true });
        
        wrapper.addEventListener('touchend', () => {
            wrapper.style.animationPlayState = 'running';
        }, { passive: true });
    });
});
