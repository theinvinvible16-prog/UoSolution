<?php
$page_title = "Book Train & Bus Tickets & Travel Packages";
$page_description = "Book train tickets, bus ticket reservations, and curated travel packages with Uo Travel Solutions (uotravelsolutions.com). Fast fare quotes, 24/7 customer support, and verified transit partners.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/packages_data.php';
?>

<!-- Hero Section with Tabbed Search Widget -->
<section class="hero-section">
    <div class="container hero-grid">
        
        <!-- Hero Text & Value Proposition -->
        <div class="hero-content">
            <span class="compliance-badge mb-3"><i class="fa-solid fa-shield-check"></i> Independent Booking Intermediary</span>
            <h1>Book Train & Bus Tickets and Travel Packages with <span class="accent-text">Uo Travel Solutions</span></h1>
            <p>Your online reservation specialist for regional and international train routes, express intercity buses, and all-inclusive scenic travel packages.</p>
            
            <div class="hero-badges">
                <span class="hero-badge-item"><i class="fa-solid fa-train text-accent"></i> 1,500+ Rail Routes</span>
                <span class="hero-badge-item"><i class="fa-solid fa-bus text-accent"></i> Express Motorcoach Fares</span>
                <span class="hero-badge-item"><i class="fa-solid fa-suitcase-rolling text-accent"></i> Curated Vacation Packages</span>
                <span class="hero-badge-item"><i class="fa-solid fa-headset text-accent"></i> Dedicated Passenger Support</span>
            </div>
        </div>

        <!-- Search / Quote Estimator Card -->
        <div class="search-widget-card" id="search-widget">
            <div class="search-tabs">
                <button type="button" class="search-tab-btn active" data-tab="Train">
                    <i class="fa-solid fa-train-subway"></i> Train Tickets
                </button>
                <button type="button" class="search-tab-btn" data-tab="Bus">
                    <i class="fa-solid fa-bus-simple"></i> Bus Tickets
                </button>
                <button type="button" class="search-tab-btn" data-tab="Package">
                    <i class="fa-solid fa-compass"></i> Packages
                </button>
            </div>

            <form action="contact.php" method="GET" id="heroSearchForm">
                <input type="hidden" name="service_type" id="search_service_type" value="Train">
                
                <div class="search-form-grid">
                    <div class="form-group">
                        <label for="search_origin"><i class="fa-solid fa-location-dot text-accent"></i> From (Departure)</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-plane-departure"></i>
                            <input type="text" id="search_origin" name="origin" class="form-control" required placeholder="e.g. Zurich HB / NYC Penn Station">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="search_destination"><i class="fa-solid fa-location-dot text-accent"></i> To (Destination)</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-plane-arrival"></i>
                            <input type="text" id="search_destination" name="destination" class="form-control" required placeholder="e.g. Zermatt / Washington Union">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="search_date"><i class="fa-regular fa-calendar-days text-accent"></i> Departure Date</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-calendar"></i>
                            <input type="date" id="search_date" name="travel_date" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="search_passengers"><i class="fa-solid fa-users text-accent"></i> Passengers</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-user-group"></i>
                            <select id="search_passengers" name="passengers" class="form-control">
                                <option value="1">1 Passenger</option>
                                <option value="2">2 Passengers</option>
                                <option value="3">3 Passengers</option>
                                <option value="4+">4+ Group Pass</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width mt-2">
                    <button type="submit" class="btn btn-accent btn-full">
                        <i class="fa-solid fa-magnifying-glass"></i> Check Fares & Request Booking Quote
                    </button>
                </div>

                <div class="form-disclaimer">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Quotes are typically issued within 15 minutes. No hidden booking fees. Upfront fare estimates.</span>
                </div>
            </form>
        </div>

    </div>
</section>

<!-- Service Features Row Section -->
<section class="trust-row-section">
    <div class="container">
        <div class="trust-counters-grid">
            
            <div class="counter-card">
                <div class="counter-icon"><i class="fa-solid fa-building-shield"></i></div>
                <div class="counter-text">
                    <div class="counter-number" style="font-size: 1.15rem; font-weight: 700;">Independent Agency</div>
                    <div class="counter-label">Ticket Booking Intermediary</div>
                </div>
            </div>

            <div class="counter-card">
                <div class="counter-icon"><i class="fa-solid fa-route"></i></div>
                <div class="counter-text">
                    <div class="counter-number" style="font-size: 1.15rem; font-weight: 700;">Transit Network</div>
                    <div class="counter-label">Regional & International</div>
                </div>
            </div>

            <div class="counter-card">
                <div class="counter-icon"><i class="fa-solid fa-headset"></i></div>
                <div class="counter-text">
                    <div class="counter-number" style="font-size: 1.15rem; font-weight: 700;">Dedicated Support</div>
                    <div class="counter-label">Personalized Travel Assistance</div>
                </div>
            </div>

            <div class="counter-card">
                <div class="counter-icon"><i class="fa-solid fa-lock"></i></div>
                <div class="counter-text">
                    <div class="counter-number" style="font-size: 1.15rem; font-weight: 700;">Secure Booking</div>
                    <div class="counter-label">Encrypted Data Protection</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Featured Travel Packages Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 2rem;">
            <span class="section-subtitle">Curated Itineraries</span>
            <h2>Featured Holiday Travel Packages</h2>
            <p class="lead-text" style="margin: 0 auto;">Discover scenic train expeditions and motorcoach adventures with clear upfront pricing, full itineraries, and flexible booking terms.</p>
        </div>

        <div class="packages-grid">
            <?php 
            $featured = array_slice($travel_packages, 0, 3);
            foreach ($featured as $pkg): 
            ?>
                <div class="package-card">
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
                            <span><i class="fa-solid fa-star text-warning"></i> <?php echo $pkg['rating']; ?> (<?php echo $pkg['reviews_count']; ?>)</span>
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
                            <button type="button" class="btn btn-accent btn-sm open-quote-modal" data-service="Travel Package: <?php echo htmlspecialchars($pkg['title']); ?>" data-type="Package Reservation" style="flex: 1;">
                                <i class="fa-solid fa-paper-plane"></i> Inquire Now
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4" style="text-align: center; margin-top: 2.5rem;">
            <a href="packages.php" class="btn btn-primary">
                <i class="fa-solid fa-grid-2"></i> Browse All Travel Packages
            </a>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 2rem;">
            <span class="section-subtitle">Seamless Reservation Process</span>
            <h2>How Booking Works with Uo Travel Solutions</h2>
            <p class="lead-text" style="margin: 0 auto;">Reserve your train or bus tickets in 3 easy, transparent steps with complete peace of mind.</p>
        </div>

        <div class="steps-grid">
            
            <div class="step-card">
                <span class="step-num">01</span>
                <div class="step-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                <h3>1. Search & Inquire</h3>
                <p>Enter your departure city, destination, travel dates, and passenger details in our simple quote widget or contact form.</p>
            </div>

            <div class="step-card">
                <span class="step-num">02</span>
                <div class="step-icon"><i class="fa-solid fa-receipt"></i></div>
                <h3>2. Receive Upfront Fare Quotes</h3>
                <p>Our travel team checks official carrier inventories to send you transparent fare options, seat maps, and exact costs.</p>
            </div>

            <div class="step-card">
                <span class="step-num">03</span>
                <div class="step-icon"><i class="fa-solid fa-ticket"></i></div>
                <h3>3. Confirm & Receive E-Tickets</h3>
                <p>Confirm your itinerary with secure payment. Official E-Tickets and seat passes are delivered straight to your email & phone.</p>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section-padding bg-navy" style="text-align: center; position: relative;">
    <div class="container">
        <h2 class="text-white" style="font-size: 2.25rem; margin-bottom: 1rem;">Ready to Plan Your Next Train or Bus Journey?</h2>
        <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto 2rem auto; font-size: 1.1rem;">
            Call our reservation desk now or submit a quote request to check current carrier rates and seat availability.
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="tel:18887907847" class="btn btn-accent btn-lg">
                <i class="fa-solid fa-phone"></i> Call Toll-Free: <?php echo PHONE_PRIMARY; ?>
            </a>
            <a href="contact.php" class="btn btn-outline btn-lg" style="color: #fff; border-color: rgba(255,255,255,0.3);">
                <i class="fa-solid fa-envelope"></i> Request Custom Quote
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
