<?php
require_once __DIR__ . '/config.php';
?>
    <!-- Global Footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                
                <!-- Col 1: Brand Info & Intermediary Disclosure -->
                <div class="footer-col brand-col">
                    <a href="index.php" class="brand-logo footer-logo">
                        <div class="logo-icon"><i class="fa-solid fa-route"></i></div>
                        <div class="logo-text">
                            <span class="brand-name text-white">UO TRAVEL <span class="accent-text">SOLUTIONS</span></span>
                            <span class="brand-sub light-sub"><?php echo SITE_DOMAIN; ?></span>
                        </div>
                    </a>
                    <p class="footer-desc">
                        Uo Travel Solutions is a premier travel agency specializing in nationwide and international train reservations, express bus tickets, and curated holiday package itineraries.
                    </p>
                    <div class="intermediary-box">
                        <i class="fa-solid fa-circle-info"></i>
                        <span><?php echo AGENCY_DISCLAIMER; ?></span>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Services & Tickets</h4>
                    <ul class="footer-links">
                        <li><a href="train-tickets.php"><i class="fa-solid fa-chevron-right"></i> Train Reservations</a></li>
                        <li><a href="bus-tickets.php"><i class="fa-solid fa-chevron-right"></i> Express Bus Tickets</a></li>
                        <li><a href="packages.php"><i class="fa-solid fa-chevron-right"></i> Holiday Packages</a></li>
                        <li><a href="index.php#search-widget"><i class="fa-solid fa-chevron-right"></i> Instant Fare Quote</a></li>
                        <li><a href="blog.php"><i class="fa-solid fa-chevron-right"></i> Travel Guides & Blog</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company & Policies -->
                <div class="footer-col">
                    <h4 class="footer-heading">Company & Policies</h4>
                    <ul class="footer-links">
                        <li><a href="about.php"><i class="fa-solid fa-chevron-right"></i> About Uo Travel Solutions</a></li>
                        <li><a href="contact.php"><i class="fa-solid fa-chevron-right"></i> Contact Customer Support</a></li>
                        <li><a href="faq.php"><i class="fa-solid fa-chevron-right"></i> FAQ & Help Center</a></li>
                        <?php foreach ($legal_nav as $file => $label): ?>
                            <li><a href="<?php echo $file; ?>"><i class="fa-solid fa-chevron-right"></i> <?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Col 4: Contact & Hours -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contact & Location</h4>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?php echo FULL_ADDRESS; ?></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:18887907847"><?php echo PHONE_PRIMARY; ?></a>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a>
                        </li>
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <span><?php echo HOURS_WEEKDAY; ?><br><?php echo HOURS_WEEKEND; ?></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Trust Seals & Payment Icons -->
        <div class="footer-middle">
            <div class="container footer-middle-container">
                <div class="trust-seals">
                    <span class="trust-item"><i class="fa-solid fa-lock text-success"></i> 256-Bit SSL Encryption</span>
                    <span class="trust-item"><i class="fa-solid fa-shield-halved text-accent"></i> Independent Travel Agency</span>
                    <span class="trust-item"><i class="fa-solid fa-headset text-warning"></i> 24/7 Booking Assistance</span>
                </div>
                <div class="payment-methods">
                    <span class="payment-title">Accepted Secure Payment Providers:</span>
                    <div class="payment-badges">
                        <span class="pay-badge"><i class="fa-brands fa-cc-visa"></i> Visa</span>
                        <span class="pay-badge"><i class="fa-brands fa-cc-mastercard"></i> Mastercard</span>
                        <span class="pay-badge"><i class="fa-brands fa-cc-amex"></i> AMEX</span>
                        <span class="pay-badge"><i class="fa-brands fa-cc-paypal"></i> PayPal</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; <?php echo date('Y'); ?> <?php echo BUSINESS_LEGAL_NAME; ?> (<?php echo SITE_DOMAIN; ?>). All rights reserved.</p>
                <ul class="legal-footer-nav">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="refund-policy.php">Refund Policy</a></li>
                    <li><a href="sitemap.xml">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Global Ticket Quote / Booking Inquiry Modal -->
    <div class="modal-overlay" id="inquiryModal">
        <div class="modal-card">
            <button class="modal-close" id="closeModalBtn" aria-label="Close modal">&times;</button>
            <div class="modal-header">
                <div class="modal-icon"><i class="fa-solid fa-ticket"></i></div>
                <h3>Request Ticket or Package Quote</h3>
                <p>Fill out your transit details below and our travel specialists will respond with exact fares and availability within 15 minutes.</p>
            </div>
            <form action="process-contact.php" method="POST" class="modal-form" id="quickInquiryForm">
                <input type="hidden" name="inquiry_type" id="modalInquiryType" value="General Ticket Quote">
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_name">Full Name *</label>
                        <input type="text" id="modal_name" name="name" required placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="modal_email">Email Address *</label>
                        <input type="email" id="modal_email" name="email" required placeholder="john@example.com">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_phone">Phone Number *</label>
                        <input type="tel" id="modal_phone" name="phone" required placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="modal_service">Transit / Service Type</label>
                        <select id="modal_service" name="service_category">
                            <option value="Train Reservation">Train Ticket Reservation</option>
                            <option value="Bus Reservation">Express Bus Ticket</option>
                            <option value="Travel Package">Holiday Travel Package</option>
                            <option value="Custom Itinerary">Custom Multi-City Itinerary</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_origin">Departure City / Station</label>
                        <input type="text" id="modal_origin" name="origin" placeholder="e.g. New York / Zurich / London">
                    </div>
                    <div class="form-group">
                        <label for="modal_destination">Destination City / Station</label>
                        <input type="text" id="modal_destination" name="destination" placeholder="e.g. Washington DC / Lucerne / Paris">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_travel_date">Preferred Departure Date</label>
                        <input type="date" id="modal_travel_date" name="travel_date">
                    </div>
                    <div class="form-group">
                        <label for="modal_passengers">Passengers</label>
                        <select id="modal_passengers" name="passengers">
                            <option value="1 Adult">1 Adult</option>
                            <option value="2 Adults">2 Adults</option>
                            <option value="3+ Passengers">3+ Passengers</option>
                            <option value="Family Pass">Family Group</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="modal_notes">Additional Details / Seat Preferences</label>
                    <textarea id="modal_notes" name="notes" rows="2" placeholder="e.g. Window seats, 1st class preferred, luggage requirements..."></textarea>
                </div>

                <div class="form-disclaimer">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Your personal information is strictly protected per our <a href="privacy-policy.php" target="_blank">Privacy Policy</a>. Uo Travel Solutions is an independent booking agency.</span>
                </div>

    <!-- Automatic Disclaimer Modal (Triggered 2s after website launch) -->
    <div class="modal-overlay" id="autoDisclaimerModal">
        <div class="modal-card" style="max-width: 550px; text-align: center; padding: 2.25rem;">
            <button class="modal-close" id="closeDisclaimerBtn" aria-label="Close disclaimer">&times;</button>
            <div class="modal-icon" style="background: #FEF3EA; color: #F4A261;"><i class="fa-solid fa-circle-info"></i></div>
            <h3 style="font-size: 1.4rem; margin-bottom: 0.75rem; color: var(--primary);">Agency Intermediary Disclaimer</h3>
            <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-body); margin-bottom: 1.5rem;">
                <strong>Uo Travel Solutions</strong> is an independent travel agency and ticket booking intermediary. We are not a direct train or bus transit operator. Ticket fulfillment, rail schedules, and bus routes are provided by third-party passenger transit carriers.
            </p>
            <button type="button" class="btn btn-accent btn-full" id="acceptDisclaimerBtn">
                <i class="fa-solid fa-circle-check"></i> I Understand & Continue
            </button>
        </div>
    </div>

    <!-- Sticky Mobile Bottom Quick Action Bar -->
    <div class="mobile-bottom-bar">
        <a href="tel:18887907847" class="mobile-bottom-btn call-btn">
            <i class="fa-solid fa-phone-volume"></i>
            <span>Call Support</span>
        </a>
        <a href="train-tickets.php" class="mobile-bottom-btn <?php echo (basename($_SERVER['PHP_SELF']) == 'train-tickets.php') ? 'active' : ''; ?>">
            <i class="fa-solid fa-train"></i>
            <span>Train Tickets</span>
        </a>
        <a href="bus-tickets.php" class="mobile-bottom-btn <?php echo (basename($_SERVER['PHP_SELF']) == 'bus-tickets.php') ? 'active' : ''; ?>">
            <i class="fa-solid fa-bus"></i>
            <span>Bus Tickets</span>
        </a>
        <a href="packages.php" class="mobile-bottom-btn <?php echo (basename($_SERVER['PHP_SELF']) == 'packages.php') ? 'active' : ''; ?>">
            <i class="fa-solid fa-compass"></i>
            <span>Packages</span>
        </a>
        <button type="button" class="mobile-bottom-btn open-quote-modal" data-service="Mobile Bottom Bar Inquiry">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Get Quote</span>
        </button>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
