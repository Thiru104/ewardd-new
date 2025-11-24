// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    offset: 100
});

// Header Scroll Effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Scroll to Top Button
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        scrollTopBtn.classList.add('show');
    } else {
        scrollTopBtn.classList.remove('show');
    }
});

scrollTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(function() {
        current += step;
        if (current >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current).toLocaleString();
        }
    }, 16);
}

// Trigger counter animation when visible
const counterObserverOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                if (counter.textContent === '0') {
                    animateCounter(counter);
                }
            });
            observer.unobserve(entry.target);
        }
    });
}, counterObserverOptions);

const statsSection = document.querySelector('.hero-stats');
if (statsSection) {
    observer.observe(statsSection);
}

// Form Validation and Submission
const priceCalculatorForm = document.getElementById('priceCalculatorForm');
if (priceCalculatorForm) {
    priceCalculatorForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        
        // Show success message
        alert('Thank you! Our team will contact you shortly with the best scrap price.');
        
        // Reset form
        this.reset();
        
        // In production, send data to server
        // fetch('process-form.php', {
        //     method: 'POST',
        //     body: formData
        // });
    });
}

const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show success message
        alert('Thank you for contacting us! We will get back to you soon.');
        
        // Reset form
        this.reset();
    });
}

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#!') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const headerHeight = document.querySelector('.main-header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Mobile Menu Close on Link Click
const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
const navbarCollapse = document.querySelector('.navbar-collapse');

navLinks.forEach(link => {
    link.addEventListener('click', function() {
        if (window.innerWidth < 992) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                toggle: false
            });
            bsCollapse.hide();
        }
    });
});

// Lazy Loading Images
if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        img.src = img.dataset.src;
    });
} else {
    // Fallback for browsers that don't support lazy loading
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
    document.body.appendChild(script);
}

// Active Navigation Link
const currentLocation = window.location.pathname;
const navItems = document.querySelectorAll('.navbar-nav .nav-link');

navItems.forEach(item => {
    if (item.getAttribute('href') === currentLocation.split('/').pop()) {
        item.classList.add('active');
    } else {
        item.classList.remove('active');
    }
});

// Dropdown Hover Effect (Desktop Only)
if (window.innerWidth > 991) {
    const dropdowns = document.querySelectorAll('.navbar .dropdown');
    
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            dropdownMenu.classList.add('show');
        });
        
        dropdown.addEventListener('mouseleave', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            dropdownMenu.classList.remove('show');
        });
    });
}

// Mobile Dropdown Toggle (Mobile & Tablet)
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggles = document.querySelectorAll('.navbar .dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                e.stopPropagation();
                
                const parent = this.closest('.dropdown');
                const menu = parent.querySelector('.dropdown-menu');
                const isOpen = menu.classList.contains('show');
                
                // Close all other dropdowns
                document.querySelectorAll('.navbar .dropdown-menu').forEach(m => {
                    if (m !== menu) {
                        m.classList.remove('show');
                    }
                });
                
                // Toggle current dropdown
                if (isOpen) {
                    menu.classList.remove('show');
                    this.setAttribute('aria-expanded', 'false');
                } else {
                    menu.classList.add('show');
                    this.setAttribute('aria-expanded', 'true');
                }
            }
        });
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 991) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.navbar .dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.navbar .dropdown-toggle').forEach(toggle => {
                    toggle.setAttribute('aria-expanded', 'false');
                });
            }
        }
    });
});

// Preloader with smooth fade out
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        setTimeout(function() {
            preloader.classList.add('hidden');
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }, 800); // Show for at least 800ms
    }
});

// Parallax effect for hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const heroImage = document.querySelector('.hero-image-container');
    const heroText = document.querySelector('.hero-text');
    
    if (heroImage) {
        heroImage.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
    if (heroText) {
        heroText.style.transform = `translateY(${scrolled * 0.1}px)`;
    }
});

// Add ripple effect to buttons
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple-effect');
        
        this.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
    });
});

// Add CSS for ripple effect dynamically
const style = document.createElement('style');
style.textContent = `
    .ripple-effect {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
    }
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const fadeInObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Apply fade-in to elements
document.querySelectorAll('.service-card, .feature-card, .testimonial-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    fadeInObserver.observe(el);
});

// WhatsApp Click Tracking
const whatsappBtn = document.querySelector('.whatsapp-float');
if (whatsappBtn) {
    whatsappBtn.addEventListener('click', function() {
        // Track WhatsApp click (Google Analytics, etc.)
        console.log('WhatsApp button clicked');
    });
}

// Video Background Optimization
const heroVideo = document.querySelector('.hero-video-bg video');
if (heroVideo) {
    // Pause video on mobile to save bandwidth
    if (window.innerWidth < 768) {
        heroVideo.pause();
        heroVideo.style.display = 'none';
    }
    
    // Pause video when not in viewport
    const videoObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                heroVideo.play();
            } else {
                heroVideo.pause();
            }
        });
    }, { threshold: 0.25 });
    
    videoObserver.observe(heroVideo);
}

// Print Current Year in Footer
const yearElements = document.querySelectorAll('.current-year');
yearElements.forEach(element => {
    element.textContent = new Date().getFullYear();
});
