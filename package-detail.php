<?php
require_once __DIR__ . '/includes/packages_data.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$pkg = get_package_by_slug($slug);

if (!$pkg && isset($_GET['id'])) {
    $pkg = get_package_by_id($_GET['id']);
}

// Fallback to first package if slug not found
if (!$pkg) {
    $pkg = reset($travel_packages);
}

$page_title = $pkg['title'];
$page_description = $pkg['subtitle'] . ' Book with Uo Travel Solutions. Upfront pricing, included rail/bus passes, and 4-star accommodations.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Package Header Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.92) 0%, rgba(6, 23, 41, 0.96) 100%), url('<?php echo $pkg['hero_image']; ?>') center/cover no-repeat;">
    <div class="container">
        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
            <span class="compliance-badge"><i class="fa-solid fa-tag"></i> <?php echo $pkg['category']; ?></span>
            <span class="compliance-badge" style="background: rgba(244, 162, 97, 0.2); color: var(--gold);"><i class="fa-solid fa-star"></i> <?php echo $pkg['rating']; ?> (<?php echo $pkg['reviews_count']; ?> reviews)</span>
        </div>
        <h1 class="text-white" style="font-size: 2.5rem; margin-bottom: 0.75rem;"><?php echo htmlspecialchars($pkg['title']); ?></h1>
        <p style="color: #CBD5E1; font-size: 1.1rem; max-width: 800px; margin-bottom: 1.5rem;"><?php echo htmlspecialchars($pkg['subtitle']); ?></p>
        
        <div style="display: flex; gap: 1.5rem; color: #E2E8F0; font-size: 0.95rem; flex-wrap: wrap;">
            <span><i class="fa-regular fa-clock text-accent"></i> <strong>Duration:</strong> <?php echo $pkg['duration']; ?></span>
            <span><i class="fa-solid fa-location-dot text-accent"></i> <strong>Destinations:</strong> <?php echo htmlspecialchars($pkg['destination']); ?></span>
            <span><i class="fa-solid fa-money-bill-wave text-gold"></i> <strong>Pricing:</strong> From $<?php echo number_format($pkg['price_from']); ?> / person</span>
        </div>
    </div>
</section>

<!-- Package Content & Sidebar Layout -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="contact-grid" style="grid-template-columns: 2fr 1fr;">
            
            <!-- Left Column: Detailed Package Info & Itinerary -->
            <div>
                <!-- Overview Card -->
                <div class="policy-container" style="margin-top: 0; padding: 2rem;">
                    <h2 style="margin-top: 0;">Package Overview</h2>
                    <p style="font-size: 1.05rem; line-height: 1.6;"><?php echo htmlspecialchars($pkg['overview']); ?></p>
                    
                    <h3 style="margin-top: 1.5rem; font-size: 1.25rem;"><i class="fa-solid fa-star text-gold"></i> Tour Highlights</h3>
                    <ul style="padding-left: 1.25rem; list-style: disc; margin-top: 0.5rem;">
                        <?php foreach ($pkg['highlights'] as $highlight): ?>
                            <li style="margin-bottom: 0.5rem; color: var(--text-body);"><?php echo htmlspecialchars($highlight); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Day-by-Day Itinerary -->
                <div class="policy-container" style="padding: 2rem;">
                    <h2 style="margin-top: 0;">Day-by-Day Detailed Itinerary</h2>
                    <p>Click on any day below to view scheduled activities, transit details, and overnight stay info.</p>

                    <div class="itinerary-accordion">
                        <?php foreach ($pkg['itinerary'] as $index => $item): ?>
                            <div class="accordion-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                <button type="button" class="accordion-header">
                                    <span>
                                        <span class="fare-badge fare-badge-express" style="margin-right: 0.5rem;">Day <?php echo $item['day']; ?></span>
                                        <?php echo htmlspecialchars($item['title']); ?>
                                    </span>
                                    <i class="fa-solid fa-chevron-down chevron"></i>
                                </button>
                                <div class="accordion-content">
                                    <p style="margin-top: 0.75rem; line-height: 1.6; color: var(--text-body);"><?php echo htmlspecialchars($item['description']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Inclusions & Exclusions Grid -->
                <div class="policy-container" style="padding: 2rem;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div>
                            <h3 style="color: var(--success); font-size: 1.15rem; margin-top: 0;"><i class="fa-solid fa-circle-check"></i> What's Included</h3>
                            <ul style="padding-left: 1rem; list-style: none; margin-top: 0.75rem;">
                                <?php foreach ($pkg['inclusions'] as $inc): ?>
                                    <li style="font-size: 0.875rem; margin-bottom: 0.5rem; display: flex; gap: 0.4rem;">
                                        <i class="fa-solid fa-check text-success" style="margin-top: 0.2rem;"></i>
                                        <span><?php echo htmlspecialchars($inc); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color: var(--danger); font-size: 1.15rem; margin-top: 0;"><i class="fa-solid fa-circle-xmark"></i> What's Excluded</h3>
                            <ul style="padding-left: 1rem; list-style: none; margin-top: 0.75rem;">
                                <?php foreach ($pkg['exclusions'] as $exc): ?>
                                    <li style="font-size: 0.875rem; margin-bottom: 0.5rem; display: flex; gap: 0.4rem;">
                                        <i class="fa-solid fa-xmark text-danger" style="margin-top: 0.2rem;"></i>
                                        <span><?php echo htmlspecialchars($exc); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Cancellation Terms Specific to this Package -->
                <div class="policy-alert" style="margin-top: 2rem;">
                    <h4><i class="fa-solid fa-shield-halved text-accent"></i> Package Cancellation & Refund Policy</h4>
                    <p style="margin-bottom: 0.5rem; font-size: 0.9rem;"><?php echo htmlspecialchars($pkg['cancellation_policy']); ?></p>
                    <a href="refund-policy.php" style="font-size: 0.85rem; font-weight: 600;">Read Full Uo Travel Solutions Refund & Cancellation Policy &rarr;</a>
                </div>
            </div>

            <!-- Right Column: Sticky Booking / Inquiry Sidebar -->
            <div>
                <div class="contact-info-card" style="position: sticky; top: 100px;">
                    <div>
                        <span class="compliance-badge mb-2"><i class="fa-solid fa-bolt"></i> Best Rate Guarantee</span>
                        <h3 style="margin-top: 0.5rem;">Book / Inquire Package</h3>
                        
                        <div style="background: rgba(255,255,255,0.08); padding: 1.25rem; border-radius: var(--border-radius-sm); margin-bottom: 1.5rem;">
                            <span style="font-size: 0.85rem; color: #94A3B8; display: block;">Starting Price per Adult</span>
                            <span style="font-family: var(--font-heading); font-size: 2.25rem; font-weight: 800; color: var(--gold);">$<?php echo number_format($pkg['price_from']); ?></span>
                            <?php if ($pkg['price_was']): ?>
                                <span style="text-decoration: line-through; color: #94A3B8; font-size: 0.9rem; margin-left: 0.5rem;">Was $<?php echo number_format($pkg['price_was']); ?></span>
                            <?php endif; ?>
                            <span style="display: block; font-size: 0.75rem; color: #CBD5E1; margin-top: 0.35rem;">Includes all taxes, seat reservations & hotel fees</span>
                        </div>

                        <ul class="footer-contact-list" style="margin-bottom: 1.5rem;">
                            <li><i class="fa-regular fa-clock"></i> <span><?php echo $pkg['duration']; ?></span></li>
                            <li><i class="fa-solid fa-users"></i> <span>Solo, Couple & Group Options</span></li>
                            <li><i class="fa-solid fa-headset"></i> <span>24/7 Passenger Support</span></li>
                        </ul>
                    </div>

                    <button class="btn btn-accent btn-full open-quote-modal" data-service="Travel Package: <?php echo htmlspecialchars($pkg['title']); ?>" data-type="Package Reservation Request">
                        <i class="fa-solid fa-paper-plane"></i> Request Availability & Quote
                    </button>
                    
                    <div style="text-align: center; margin-top: 1rem; font-size: 0.8rem; color: #CBD5E1;">
                        <i class="fa-solid fa-phone"></i> Or Call: <a href="tel:18887907847" style="color: #fff; font-weight: 700;"><?php echo PHONE_PRIMARY; ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
