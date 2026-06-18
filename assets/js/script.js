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
            freeMode: true,
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
        gsap.from(".hero-title", { duration: 1, y: 40, opacity: 0, ease: "power3.out", delay: 0.2 });
        gsap.from(".hero-slide p", { duration: 1, y: 30, opacity: 0, ease: "power3.out", delay: 0.4 });
        gsap.from(".hero-slide .primary-btn", { duration: 1, y: 20, opacity: 0, ease: "power3.out", delay: 0.6 });
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
                    else {
                        // Generic fallback for promo and partnership sections
                        gsap.from(target.querySelectorAll('h2, p, .primary-btn'), { opacity: 0, y: 30, duration: 0.8, stagger: 0.15, ease: "power2.out" });
                        gsap.from(target.querySelectorAll('img:not(.primary-btn-icon img)'), { opacity: 0, scale: 0.9, x: 30, duration: 1, ease: "power2.out", delay: 0.3 });
                    }
                    
                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        document.querySelectorAll('section:not(.hero-section)').forEach(section => {
            section.style.opacity = 0;
            scrollObserver.observe(section);
        });
    }
});
