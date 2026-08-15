<?php
$page_title = "Contact Us | Customer Support & Office Details";
$page_description = "Contact Uo Travel Solutions (uotravelsolutions.com). Phone: +1 (888) 790-7847, Email: support@uotravelsolutions.com, Address: 2611 E 219th St, Long Beach, CA 90810.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-headset"></i> Customer Service Desk</span>
        <h1 class="text-white">Contact Uo Travel Solutions</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Have a question about train schedules, bus fares, or travel package reservations? Reach out via phone, email, or our quick contact form.
        </p>
    </div>
</section>

<!-- Contact Form & Info Grid -->
<section class="section-padding bg-white">
    <div class="container">
        
        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
            <div class="policy-alert" style="background: #E6F4EA; border-color: #34A853; color: #137333; margin-bottom: 2rem;">
                <i class="fa-solid fa-circle-check" style="font-size: 1.25rem;"></i>
                <div>
                    <strong>Thank You! Your Inquiry Has Been Submitted Successfully.</strong>
                    <p style="margin: 0.25rem 0 0 0; font-size: 0.9rem;">A Uo Travel Solutions booking specialist will review your request and send a detailed response to your email within 15 minutes.</p>
                </div>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
            <div class="policy-alert" style="background: #FCE8E6; border-color: #EA4335; color: #C5221F; margin-bottom: 2rem;">
                <i class="fa-solid fa-triangle-exclamation" style="font-size: 1.25rem;"></i>
                <div>
                    <strong>Submission Error</strong>
                    <p style="margin: 0.25rem 0 0 0; font-size: 0.9rem;">Please ensure all required fields (Name, Email, Phone, Message) are completed properly and try again.</p>
                </div>
            </div>
        <?php endif; ?>

        <div class="contact-grid">
            
            <!-- Left Column: Contact Form -->
            <div class="policy-container" style="margin-top: 0; padding: 2.25rem;">
                <h2 style="margin-top: 0; font-size: 1.6rem;"><i class="fa-solid fa-envelope-open-text text-accent"></i> Send Us a Message</h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">Complete the form below to request a ticket quote or ask a general booking question.</p>

                <form action="process-contact.php" method="POST" id="mainContactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_name">Full Name *</label>
                            <input type="text" id="contact_name" name="name" class="form-control" style="padding-left: 1rem;" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="contact_email">Email Address *</label>
                            <input type="email" id="contact_email" name="email" class="form-control" style="padding-left: 1rem;" required placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_phone">Phone Number *</label>
                            <input type="tel" id="contact_phone" name="phone" class="form-control" style="padding-left: 1rem;" required placeholder="+1 (555) 000-0000">
                        </div>
                        <div class="form-group">
                            <label for="contact_subject">Inquiry Subject *</label>
                            <select id="contact_subject" name="subject" class="form-control" style="padding-left: 1rem;">
                                <option value="Train Ticket Inquiry" <?php echo (isset($_GET['service_type']) && $_GET['service_type'] === 'Train') ? 'selected' : ''; ?>>Train Ticket Reservation</option>
                                <option value="Bus Ticket Inquiry" <?php echo (isset($_GET['service_type']) && $_GET['service_type'] === 'Bus') ? 'selected' : ''; ?>>Express Bus Reservation</option>
                                <option value="Holiday Package Inquiry" <?php echo (isset($_GET['service_type']) && $_GET['service_type'] === 'Package') ? 'selected' : ''; ?>>Holiday Travel Package</option>
                                <option value="Existing Booking Inquiry">Existing Reservation Inquiry</option>
                                <option value="Refund Request">Cancellation & Refund Request</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_origin">Departure / Origin City</label>
                            <input type="text" id="contact_origin" name="origin" class="form-control" style="padding-left: 1rem;" value="<?php echo isset($_GET['origin']) ? htmlspecialchars($_GET['origin']) : ''; ?>" placeholder="e.g. New York / Zurich">
                        </div>
                        <div class="form-group">
                            <label for="contact_destination">Destination City</label>
                            <input type="text" id="contact_destination" name="destination" class="form-control" style="padding-left: 1rem;" value="<?php echo isset($_GET['destination']) ? htmlspecialchars($_GET['destination']) : ''; ?>" placeholder="e.g. Washington DC / Zermatt">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact_message">Message Details / Preferences *</label>
                        <textarea id="contact_message" name="message" class="form-control" style="padding-left: 1rem;" rows="5" required placeholder="Please describe your trip dates, preferred travel times, seating requirements, or passenger questions..."></textarea>
                    </div>

                    <div class="form-disclaimer">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>By submitting this form, you agree to our <a href="privacy-policy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms & Conditions</a>.</span>
                    </div>

                    <button type="submit" class="btn btn-accent btn-full">
                        <i class="fa-solid fa-paper-plane"></i> Submit Inquiry
                    </button>
                </form>
            </div>

            <!-- Right Column: Official Contact Card -->
            <div class="contact-info-card">
                <div>
                    <h3 style="color: #fff; font-size: 1.5rem; margin-top: 0; margin-bottom: 1.5rem;">Corporate Support Office</h3>
                    
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-building"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.85rem; color: #94A3B8;">Legal Business Name</strong>
                            <span style="font-size: 1rem; color: #fff; font-weight: 600;"><?php echo BUSINESS_LEGAL_NAME; ?></span>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.85rem; color: #94A3B8;">Physical Business Address</strong>
                            <span style="font-size: 0.95rem; color: #fff; line-height: 1.4; display: block;"><?php echo FULL_ADDRESS; ?></span>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.85rem; color: #94A3B8;">Phone Number</strong>
                            <a href="tel:18887907847" style="color: #fff; font-weight: 700; font-size: 1.1rem; display: block;"><?php echo PHONE_PRIMARY; ?> (Toll-Free)</a>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.85rem; color: #94A3B8;">Email Support Desks</strong>
                            <a href="mailto:<?php echo EMAIL_SUPPORT; ?>" style="color: #fff; font-size: 0.95rem; display: block;"><?php echo EMAIL_SUPPORT; ?></a>
                            <a href="mailto:<?php echo EMAIL_BOOKINGS; ?>" style="color: #CBD5E1; font-size: 0.9rem; display: block;"><?php echo EMAIL_BOOKINGS; ?></a>
                        </div>
                    </div>

                    <div class="contact-detail-item" style="margin-bottom: 0;">
                        <div class="contact-detail-icon"><i class="fa-regular fa-clock"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.85rem; color: #94A3B8;">Hours of Operation</strong>
                            <span style="font-size: 0.85rem; color: #CBD5E1; display: block;"><?php echo HOURS_WEEKDAY; ?></span>
                            <span style="font-size: 0.85rem; color: #CBD5E1; display: block;"><?php echo HOURS_WEEKEND; ?></span>
                        </div>
                    </div>
                </div>

                <div style="background: rgba(255,255,255,0.08); padding: 1rem; border-radius: var(--border-radius-sm); margin-top: 2rem; font-size: 0.8rem; color: #CBD5E1;">
                    <i class="fa-solid fa-building-shield text-accent"></i> Independent Travel Agency & Intermediary
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
