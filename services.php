<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste Recycling Services | IT Scrap Buyback | Data Destruction</title>
    <meta name="description" content="Explore EWARDD's complete e-waste recycling services including ITAD, corporate e-waste, battery recycling, home pickup, and secure data destruction.">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <div class="preloader-text">Loading EWARDD...</div>
        </div>
    </div>

    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header bg-gradient-primary">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-3">Our Services</h1>
                    <p class="lead">Complete E-Waste Management & Recycling Solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Comprehensive <span class="gradient-text">E-Waste Solutions</span></h2>
                <p class="section-subtitle">From collection to certified recycling, we handle it all</p>
            </div>
            
            <div class="row g-4">
                <!-- Service 1: E-Waste Recycling -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h3 class="service-title">E-Waste Recycling</h3>
                        <p class="service-description">Safe disposal of all electronic waste including computers, laptops, mobile phones, TVs, and home appliances with zero landfill processes.</p>
                        <a href="services/e-waste-recycling.php" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 2: IT Scrap Buyback -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3 class="service-title">IT Scrap Buyback</h3>
                        <p class="service-description">Best market price for old IT equipment. We buy used laptops, desktops, servers, and networking devices at competitive rates.</p>
                        <a href="services/it-scrap-buyback.php" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 3: Corporate E-Waste -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="service-title">Corporate ITAD</h3>
                        <p class="service-description">Enterprise IT asset disposal with complete documentation, serial tracking, and compliance reporting for large organizations.</p>
                        <a href="services/corporate-ewaste.php" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 4: Data Destruction -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-hard-drive"></i>
                        </div>
                        <h3 class="service-title">Data Destruction</h3>
                        <p class="service-description">Secure on-site and off-site data destruction using DoD-standard wiping and physical shredding with certificates.</p>
                        <a href="services/data-destruction.php" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 5: Battery Recycling -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400" id="battery">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-battery-full"></i>
                        </div>
                        <h3 class="service-title">Battery Recycling</h3>
                        <p class="service-description">Safe disposal of laptop batteries, UPS batteries, EV batteries, mobile batteries, and industrial battery scrap.</p>
                        <a href="#battery-details" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 6: Home Pickup -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500" id="home">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="service-title">Home E-Waste Pickup</h3>
                        <p class="service-description">Doorstep pickup for households disposing of old appliances, gadgets, and electronics with fast scheduling.</p>
                        <a href="#home-details" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 7: Industrial E-Waste -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600" id="industrial">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="service-title">Industrial E-Waste</h3>
                        <p class="service-description">Bulk industrial scrap management including machinery boards, control panels, sensors, and electronic components.</p>
                        <a href="#industrial-details" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 8: EPR Compliance -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="700" id="epr">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="service-title">EPR Support</h3>
                        <p class="service-description">Extended Producer Responsibility documentation, collection support, and recycling fulfillment for manufacturers.</p>
                        <a href="#epr-details" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 9: Refurbishing -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="800" id="refurb">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="service-title">Device Refurbishing</h3>
                        <p class="service-description">Professional refurbishment and resale of working devices, extending product life and reducing waste.</p>
                        <a href="#refurb-details" class="service-link">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-5 bg-light-blue">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Process</span></h2>
                <p class="section-subtitle">How we handle your e-waste from start to finish</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="process-step-card">
                        <div class="step-number">1</div>
                        <i class="fas fa-phone-volume"></i>
                        <h4>Contact Us</h4>
                        <p>Call, WhatsApp, or fill the form with your e-waste details</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step-card">
                        <div class="step-number">2</div>
                        <i class="fas fa-calendar-alt"></i>
                        <h4>Schedule Pickup</h4>
                        <p>We arrange a convenient time for doorstep collection</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step-card">
                        <div class="step-number">3</div>
                        <i class="fas fa-truck"></i>
                        <h4>Collection & Weighing</h4>
                        <p>Our team picks up and weighs items transparently</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step-card">
                        <div class="step-number">4</div>
                        <i class="fas fa-certificate"></i>
                        <h4>Payment & Certificate</h4>
                        <p>Instant payment for scrap + recycling certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4">Why Choose <span class="gradient-text">EWARDD Services</span></h2>
                    <p class="mb-4">We provide end-to-end e-waste management solutions that are secure, compliant, and environmentally responsible.</p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h5>CPCB Certified Facility</h5>
                                <p>Government-approved recycling processes</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h5>Zero Landfill Guarantee</h5>
                                <p>100% eco-friendly recycling methods</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h5>Data Security Assured</h5>
                                <p>DoD-standard wiping and destruction</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h5>Complete Documentation</h5>
                                <p>Certificates, reports, and compliance papers</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h5>Best Market Rates</h5>
                                <p>Competitive pricing for IT scrap buyback</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&h=700&fit=crop" 
                         alt="EWARDD Services" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-gradient-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-3">Ready to Recycle Your E-Waste?</h2>
                    <p class="lead mb-0">Book a free pickup today and get the best scrap price</p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <a href="contact.php" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-check me-2"></i>Book Free Pickup
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <a href="https://wa.me/91XXXXXXXXXX?text=Hi%20EWARDD,%20I%20need%20information%20about%20your%20services" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <button id="scrollTop" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
