<?php
/**
 * EWARDD Website Configuration
 * Update these values with your actual information
 */

// Company Information
define('COMPANY_NAME', 'EWARDD');
define('COMPANY_TAGLINE', 'India\'s Trusted E-Waste Recycling Company');
define('COMPANY_EMAIL', 'support@ewardd.com');
define('COMPANY_PHONE', '+91 XXXXX XXXXX');
define('COMPANY_WHATSAPP', '91XXXXXXXXXX');
define('COMPANY_ADDRESS', 'Bangalore, Karnataka, India');

// Website URLs
define('SITE_URL', 'http://localhost/ewardd');
define('BASE_PATH', '/ewardd');

// Social Media Links
define('FACEBOOK_URL', 'https://facebook.com/ewardd');
define('TWITTER_URL', 'https://twitter.com/ewardd');
define('INSTAGRAM_URL', 'https://instagram.com/ewardd');
define('LINKEDIN_URL', 'https://linkedin.com/company/ewardd');
define('YOUTUBE_URL', 'https://youtube.com/@ewardd');

// Google Maps (Update with your actual location)
define('GOOGLE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.84916296526!2d77.6309395!3d12.9539974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1234567890');

// Email Configuration (for contact forms)
define('ADMIN_EMAIL', 'admin@ewardd.com');
define('FROM_EMAIL', 'noreply@ewardd.com');
define('FROM_NAME', 'EWARDD Website');

// Business Hours
define('BUSINESS_HOURS', 'Mon - Sat: 9 AM - 7 PM');
define('BUSINESS_DAYS', 'Monday to Saturday');

// Statistics (Update these numbers)
define('TONS_RECYCLED', '50000');
define('HAPPY_CLIENTS', '5000');
define('CITIES_COVERED', '100');
define('PROJECTS_COMPLETED', '500');

// Certifications
$certifications = [
    'CPCB Certified',
    'ISO 14001',
    'ISO 27001',
    'MOEFCC Approved'
];

// Service Areas (Cities)
$service_cities = [
    'Bangalore',
    'Mumbai',
    'Delhi NCR',
    'Hyderabad',
    'Chennai',
    'Pune',
    'Kolkata',
    'Ahmedabad'
];

// WhatsApp Messages
define('WHATSAPP_GENERAL', 'Hi EWARDD, I need e-waste pickup');
define('WHATSAPP_CORPORATE', 'Hi EWARDD, I need corporate e-waste solution');
define('WHATSAPP_PRICE', 'Hi EWARDD, I want to sell IT scrap');
define('WHATSAPP_DATA', 'Hi EWARDD, I need data destruction service');

// Meta Tags (Default)
define('META_DESCRIPTION', 'EWARDD provides certified e-waste recycling, IT scrap disposal, corporate ITAD, and data destruction services. Free doorstep pickup. Best scrap price in India.');
define('META_KEYWORDS', 'e-waste recycling, IT scrap buyers, electronic waste disposal, data destruction, ITAD, corporate recycling, e-waste pickup India');
define('META_AUTHOR', 'EWARDD');

// Google Analytics (Add your tracking ID)
define('GA_TRACKING_ID', 'G-XXXXXXXXXX');

// reCAPTCHA (Add your keys)
define('RECAPTCHA_SITE_KEY', 'your-site-key');
define('RECAPTCHA_SECRET_KEY', 'your-secret-key');

// Database Configuration (if needed in future)
define('DB_HOST', 'localhost');
define('DB_NAME', 'ewardd_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// File Upload Settings
define('MAX_FILE_SIZE', 5242880); // 5MB in bytes
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf']);

// Pagination
define('ITEMS_PER_PAGE', 12);

// Timezone
date_default_timezone_set('Asia/Kolkata');

// Error Reporting (Set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Helper Functions
 */

// Get WhatsApp link with message
function getWhatsAppLink($message = '') {
    $phone = COMPANY_WHATSAPP;
    $msg = $message ? $message : WHATSAPP_GENERAL;
    return "https://wa.me/{$phone}?text=" . urlencode($msg);
}

// Format phone number
function formatPhone($phone) {
    return preg_replace('/[^0-9+]/', '', $phone);
}

// Sanitize input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get current page name
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

// Check if page is active
function isActivePage($page) {
    return getCurrentPage() === $page ? 'active' : '';
}

?>
