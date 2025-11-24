<?php
// Detect if we're in a subdirectory for footer links
$isSubDir = (basename(dirname($_SERVER['PHP_SELF'])) === 'services');
$baseUrl = $isSubDir ? '../' : '';
?>
<footer class="main-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="footer-section">
                    <h3><span class="gradient-text">EWARDD</span></h3>
                    <p style="color: var(--medium-gray); margin-bottom: 24px;">
                        India's leading e-waste recycling and IT scrap disposal company. 
                        Certified, secure, and environmentally responsible recycling services.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo $baseUrl; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $baseUrl; ?>about.php">About Us</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services.php">Services</a></li>
                        <li><a href="<?php echo $baseUrl; ?>case-studies.php">Case Studies</a></li>
                        <li><a href="<?php echo $baseUrl; ?>faq.php">FAQ</a></li>
                        <li><a href="<?php echo $baseUrl; ?>contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo $baseUrl; ?>services/e-waste-recycling.php">E-Waste Recycling</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services/it-scrap-buyback.php">IT Scrap Buyback</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services/corporate-ewaste.php">Corporate ITAD</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services/data-destruction.php">Data Destruction</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services.php#battery">Battery Recycling</a></li>
                        <li><a href="<?php echo $baseUrl; ?>services.php#epr">EPR Support</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <div class="footer-contact-info">
                        <p><i class="fas fa-phone"></i> +91 XXXXX XXXXX</p>
                        <p><i class="fas fa-envelope"></i> support@ewardd.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Bangalore, Karnataka, India</p>
                        <p><i class="fas fa-clock"></i> Mon - Sat: 9 AM - 7 PM</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 EWARDD. All Rights Reserved. | 
                <a href="<?php echo $baseUrl; ?>privacy-policy.php" style="color: var(--primary-blue);">Privacy Policy</a> | 
                <a href="<?php echo $baseUrl; ?>terms.php" style="color: var(--primary-blue);">Terms & Conditions</a>
            </p>
        </div>
    </div>
</footer>

    <script src="<?php echo $baseUrl; ?>js/chatbot.js"></script>