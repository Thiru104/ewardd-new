<?php
// Detect if we're in a subdirectory
$isSubDir = (basename(dirname($_SERVER['PHP_SELF'])) === 'services');
$baseUrl = $isSubDir ? '../' : '';
?>
<header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $baseUrl; ?>index.php">
                <span class="gradient-text">EWARDD</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseUrl; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseUrl; ?>about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>services/e-waste-recycling.php">E-Waste Recycling</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>services/it-scrap-buyback.php">IT Scrap Buyback</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>services/corporate-ewaste.php">Corporate E-Waste</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>services/data-destruction.php">Data Destruction</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>services.php">View All Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseUrl; ?>case-studies.php">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseUrl; ?>faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $baseUrl; ?>contact.php">Contact</a>
                    </li>
                </ul>
                
                <div class="header-cta-group">
                    <a href="<?php echo $baseUrl; ?>contact.php" class="btn btn-outline-primary">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="<?php echo $baseUrl; ?>contact.php" class="btn btn-primary-gradient">
                        <i class="fas fa-calendar-check me-2"></i>Book Pickup
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
