<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
if (!isset($page_title)) $page_title = '';
if (!isset($page_description)) $page_description = 'Book train tickets, bus ticket reservations, and curated travel packages with Uo Travel Solutions. Fast quotes, verified transit partners, and 24/7 passenger support.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_page_title($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo SITE_URL . htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    <?php echo get_schema_travel_agency(); ?>
    </script>
</head>
<body>

    <!-- Top Utility & Compliance Announcement Bar -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-left">
                <span class="compliance-badge"><i class="fa-solid fa-shield"></i> Ticket Booking Specialist</span>
                <span class="top-contact"><i class="fa-solid fa-phone"></i> <a href="tel:18887907847"><?php echo PHONE_PRIMARY; ?></a></span>
                <span class="top-contact hide-mobile"><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a></span>
            </div>
            <div class="top-bar-right hide-mobile">
                <span class="top-hours"><i class="fa-regular fa-clock"></i> <?php echo HOURS_WEEKDAY; ?></span>
                <a href="contact.php" class="top-link"><i class="fa-solid fa-headset"></i> Support</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="main-header">
        <div class="container header-container">
            <a href="index.php" class="brand-logo">
                <div class="logo-icon"><i class="fa-solid fa-route"></i></div>
                <div class="logo-text">
                    <span class="brand-name">UO TRAVEL <span class="accent-text">SOLUTIONS</span></span>
                    <span class="brand-sub"><?php echo SITE_DOMAIN; ?></span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="main-nav" id="mainNav">
                <ul class="nav-list">
                    <?php foreach ($nav_items as $file => $label): ?>
                        <li class="nav-item">
                            <a href="<?php echo $file; ?>" class="nav-link <?php echo is_active_nav($file); ?>">
                                <?php echo $label; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Header CTA & Mobile Toggle -->
            <div class="header-actions">
                <a href="contact.php" class="btn btn-primary btn-sm hide-mobile">
                    <i class="fa-solid fa-paper-plane"></i> Get a Quote
                </a>
                <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle navigation menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
