    <!-- Footer Disclaimer Banner -->
    <div class="footer-bottom">
        <div class="container footer-bottom-container">
            <p class="copyright-text">
                &copy; <?php echo date('Y'); ?> <?php echo BUSINESS_LEGAL_NAME; ?>. All Rights Reserved.
            </p>
            <p class="disclaimer-text">
                <?php echo AGENCY_DISCLAIMER; ?>
            </p>
        </div>
    </div>

    <!-- Universal Quote / Booking Inquiry Modal -->
    <div class="modal-overlay" id="inquiryModal">
        <div class="modal-card">
            <button class="modal-close" id="closeModalBtn" aria-label="Close modal">&times;</button>
            
            <div class="modal-header text-center" style="text-align: center; margin-bottom: 1.5rem;">
                <span class="compliance-badge mb-2"><i class="fa-solid fa-headset"></i> Quick Reservation Inquiry</span>
                <h3 style="margin: 0; color: var(--primary);">Request Ticket Fares & Quote</h3>
                <p style="font-size: 0.875rem; color: var(--text-muted); margin-top: 0.25rem;">
                    Submit your journey details below. A travel specialist will reply to your email typically within 15 minutes.
                </p>
            </div>

            <form action="process-contact.php" method="POST" id="modalQuoteForm">
                <input type="hidden" name="inquiry_type" id="modalInquiryType" value="Modal Quote Request">
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_full_name">Full Passenger Name <span class="text-danger">*</span></label>
                        <input type="text" id="modal_full_name" name="full_name" required placeholder="e.g. John Smith">
                    </div>
                    <div class="form-group">
                        <label for="modal_email">Email Address <span class="text-danger">*</span></label>
                        <input type="email" id="modal_email" name="email" required placeholder="name@example.com">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="modal_phone">Phone / WhatsApp <span class="text-danger">*</span></label>
                        <input type="tel" id="modal_phone" name="phone" required placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="modal_service">Transit Service Type</label>
                        <select id="modal_service" name="service_type">
                            <option value="Train Ticket Reservation">Train Ticket Reservation</option>
                            <option value="Express Bus Ticket">Express Bus Ticket</option>
                            <option value="Vacation Package Inquiry">Holiday Travel Package</option>
                            <option value="Custom Group Pass">Custom Group Transit Pass</option>
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

                <button type="submit" class="btn btn-accent btn-full">
                    <i class="fa-solid fa-paper-plane"></i> Submit Quote Request
                </button>
            </form>
        </div>
    </div>

    <!-- Automatic 2-Second Disclaimer Popup (Non-blocking Toast Popup) -->
    <div id="autoDisclaimerModal" class="disclaimer-toast-overlay">
        <div class="disclaimer-toast-card">
            <button type="button" class="disclaimer-toast-close" id="closeDisclaimerBtn" aria-label="Close disclaimer">&times;</button>
            <div class="disclaimer-toast-content">
                <div class="disclaimer-toast-icon">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div>
                    <h4>Agency Disclaimer & Intermediary Notice</h4>
                    <p>
                        <strong>Uo Travel Solutions</strong> is an independent travel agency and ticket booking intermediary. We are not a direct train or bus transit operator. Ticket fulfillment, rail schedules, and bus routes are provided by third-party passenger transit carriers.
                    </p>
                </div>
            </div>
            <div class="disclaimer-toast-actions">
                <button type="button" class="btn btn-accent btn-sm" id="acceptDisclaimerBtn">
                    <i class="fa-solid fa-check"></i> I Understand & Agree
                </button>
            </div>
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
