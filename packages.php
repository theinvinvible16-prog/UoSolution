<?php
$page_title = "Travel Packages & Vacation Itineraries";
$page_description = "Explore curated train and bus holiday packages with Uo Travel Solutions. All-inclusive scenic rail journeys, luxury coach adventures, and multi-city travel passes.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/packages_data.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-compass"></i> Curated Itineraries</span>
        <h1 class="text-white">Holiday Travel Packages & Scenic Expeditions</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Handpicked vacation packages featuring scenic train rides, luxury coach transfers, central hotel accommodations, and guided sightseeing.
        </p>
    </div>
</section>

<!-- Category Filter & Packages Grid -->
<section class="section-padding bg-light">
    <div class="container">
        
        <!-- Filter Tabs -->
        <div class="search-tabs" style="max-width: 650px; margin: 0 auto 2.5rem auto;">
            <button type="button" class="search-tab-btn filter-btn active" data-filter="all">All Packages</button>
            <button type="button" class="search-tab-btn filter-btn" data-filter="Rail Tour">Rail Tours</button>
            <button type="button" class="search-tab-btn filter-btn" data-filter="Bus Adventure">Bus Adventures</button>
            <button type="button" class="search-tab-btn filter-btn" data-filter="Mixed Scenic Transit">Mixed Transit</button>
        </div>

        <div class="packages-grid">
            <?php foreach ($travel_packages as $pkg): ?>
                <div class="package-card package-card-item" data-category="<?php echo $pkg['category']; ?>">
                    <div class="package-thumb">
                        <img src="<?php echo $pkg['hero_image']; ?>" alt="<?php echo htmlspecialchars($pkg['title']); ?>" loading="lazy">
                        <span class="package-badge"><?php echo $pkg['badge']; ?></span>
                        <div class="package-price-tag">
                            Starting from <span class="price-amount">$<?php echo number_format($pkg['price_from']); ?></span>
                        </div>
                    </div>
                    <div class="package-body">
                        <div class="package-meta">
                            <span><i class="fa-regular fa-clock text-accent"></i> <?php echo $pkg['duration']; ?></span>
                            <span><i class="fa-solid fa-location-dot text-accent"></i> <?php echo htmlspecialchars($pkg['destination']); ?></span>
                        </div>
                        <h3 class="package-title">
                            <a href="package-detail.php?slug=<?php echo $pkg['slug']; ?>"><?php echo htmlspecialchars($pkg['title']); ?></a>
                        </h3>
                        <p class="package-desc"><?php echo htmlspecialchars($pkg['subtitle']); ?></p>

                        <ul class="package-features-list">
                            <?php foreach (array_slice($pkg['highlights'], 0, 3) as $h): ?>
                                <li><i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($h); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="package-actions mt-auto" style="display: flex; gap: 0.5rem; margin-top: auto;">
                            <a href="package-detail.php?slug=<?php echo $pkg['slug']; ?>" class="btn btn-outline btn-sm" style="flex: 1;">
                                <i class="fa-solid fa-eye"></i> View Itinerary
                            </a>
                            <button type="button" class="btn btn-accent btn-sm open-quote-modal" data-service="Travel Package: <?php echo htmlspecialchars($pkg['title']); ?>" data-type="Package Quote" style="flex: 1;">
                                <i class="fa-solid fa-paper-plane"></i> Inquire
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="policy-alert mt-4">
            <i class="fa-solid fa-circle-info"></i>
            <strong>Custom Itineraries Available:</strong> Don't see your exact destination? We can design a custom multi-city train & bus package tailored to your exact dates, group size, and budget. <a href="contact.php">Contact our itinerary team</a>.
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
