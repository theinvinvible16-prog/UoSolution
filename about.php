<?php
$page_title = "About Us | Authorized Travel Agency & Intermediary";
$page_description = "Learn about Uo Travel Solutions (uotravelsolutions.com). Authorized travel agency and reservation specialist for train tickets, express bus passes, and curated travel packages.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-building-shield"></i> Registered Travel Agency</span>
        <h1 class="text-white">About Uo Travel Solutions</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Empowering travelers with seamless rail & bus ticket reservations, transparent pricing, and 24/7 dedicated customer care since 2011.
        </p>
    </div>
</section>

<!-- Company Overview & Legal Identity -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="contact-grid" style="align-items: center;">
            <div>
                <span class="section-subtitle">Who We Are</span>
                <h2>Your Trusted Ticket Reservation Intermediary</h2>
                <p class="lead-text" style="margin-bottom: 1.25rem;">
                    <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong> (operating online at <strong><?php echo SITE_DOMAIN; ?></strong>) is an established independent travel agency headquartered in Long Beach, California, USA.
                </p>
                <p style="margin-bottom: 1.25rem;">
                    Navigating complex rail timetables, seat class restrictions, and multi-carrier bus connections can be overwhelming. Uo Travel Solutions acts as your dedicated booking intermediary—verifying live inventory across major passenger transit operators, handling mandatory seat reservations, and delivering guaranteed electronic tickets straight to your smartphone.
                </p>
                <div class="policy-alert" style="margin-top: 1.5rem;">
                    <i class="fa-solid fa-circle-info"></i>
                    <strong>Travel Intermediary Disclosure:</strong> Uo Travel Solutions operates strictly as an independent travel agency and ticket booking intermediary. We are not a direct rail operator or bus carrier. Ticket fulfillment is executed through authorized third-party transit providers.
                </div>
            </div>

            <div>
                <div class="policy-container" style="margin-top: 0; background: var(--bg-light); border: 1px solid var(--border-color);">
                    <h3 style="margin-top: 0; font-size: 1.2rem; color: var(--primary);"><i class="fa-solid fa-id-card"></i> Corporate Credentials</h3>
                    
                    <ul class="footer-contact-list" style="color: var(--text-body); margin-top: 1rem;">
                        <li style="color: var(--text-body);"><i class="fa-solid fa-building text-accent"></i> <span><strong>Legal Entity Name:</strong> <?php echo BUSINESS_LEGAL_NAME; ?></span></li>
                        <li style="color: var(--text-body);"><i class="fa-solid fa-globe text-accent"></i> <span><strong>Primary Domain:</strong> <?php echo SITE_DOMAIN; ?></span></li>
                        <li style="color: var(--text-body);"><i class="fa-solid fa-location-dot text-accent"></i> <span><strong>Physical Address:</strong> <?php echo FULL_ADDRESS; ?></span></li>
                        <li style="color: var(--text-body);"><i class="fa-solid fa-phone text-accent"></i> <span><strong>Toll-Free Phone:</strong> <?php echo PHONE_PRIMARY; ?></span></li>
                        <li style="color: var(--text-body);"><i class="fa-solid fa-envelope text-accent"></i> <span><strong>Support Email:</strong> <?php echo EMAIL_SUPPORT; ?></span></li>
                        <li style="color: var(--text-body);"><i class="fa-solid fa-clock text-accent"></i> <span><strong>Operating Hours:</strong> <?php echo HOURS_WEEKDAY; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Core Principles -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 3rem;">
            <span class="section-subtitle">Our Commitments</span>
            <h2>Why Book With Uo Travel Solutions?</h2>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                <h3>Fare Transparency</h3>
                <p>No hidden surprise fees at checkout. We provide clear, itemized quotes detailing carrier base fares and booking service fees.</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-headset"></i></div>
                <h3>Human Support 24/7</h3>
                <p>Speak to real travel specialists before, during, and after your trip. Need a route change or disrupted schedule refund? We handle carrier claims on your behalf.</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Verified Transit Partners</h3>
                <p>We work exclusively with licensed national rail networks and credentialed intercity bus companies to ensure passenger safety and comfort.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
