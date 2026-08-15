<?php
$page_title = "Terms & Conditions | User Agreement & Booking Terms";
$page_description = "Read the official Terms and Conditions for booking train tickets, bus passes, and travel packages through Uo Travel Solutions (uotravelsolution.com).";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%);">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-scale-balanced"></i> Legal Agreement</span>
        <h1 class="text-white">Terms & Conditions</h1>
        <p style="color: #CBD5E1; max-width: 700px; margin: 0 auto;">
            Last Updated: January 15, 2026 | Domain: <?php echo SITE_DOMAIN; ?>
        </p>
    </div>
</section>

<!-- Policy Body -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="policy-container" style="margin-top: 0;">
            
            <div class="policy-alert">
                <i class="fa-solid fa-circle-info"></i>
                <strong>Important Notice:</strong> By accessing <strong><?php echo SITE_DOMAIN; ?></strong> or using booking services provided by <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong>, you agree to be bound by these Terms and Conditions. Please read them carefully prior to requesting reservations.
            </div>

            <h2>1. Independent Travel Agency & Intermediary Role</h2>
            <p>
                <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong> ("Uo Travel Solutions", "we", "us", or "our") operates as an independent travel agency and ticket booking intermediary. We assist passengers ("Customer", "you") in searching, reserving, and acquiring ticket reservations for passenger rail services, express bus lines, and curated travel itineraries.
            </p>
            <p>
                <strong>Carrier Disclaimer:</strong> Uo Travel Solutions does not own, manage, or operate trains, buses, tracks, or transit stations. All transportation is fulfilled by third-party passenger transit carriers (such as national railway operators and intercity motorcoach companies). Each carrier enforces its own Conditions of Carriage, safety protocols, and luggage regulations.
            </p>

            <h2>2. Booking Requests, Fares & Service Fees</h2>
            <ul>
                <li><strong>Fare Estimates & Availability:</strong> Fares displayed on our website or provided during initial quote requests represent baseline estimates. Final ticket prices are confirmed at the time of official booking issuance.</li>
                <li><strong>Service Fees:</strong> Uo Travel Solutions charges a transparent booking service fee for reservation processing, seat selection assistance, and 24/7 travel support. Service fees are itemized on your booking invoice.</li>
                <li><strong>Passenger Information Accuracy:</strong> You are responsible for ensuring that all passenger names, travel dates, contact emails, and phone numbers match government-issued IDs exactly. Uo Travel Solutions is not liable for boarding rejections resulting from incorrect user input.</li>
            </ul>

            <h2>3. Payment & Order Confirmation</h2>
            <p>
                Full payment is required prior to ticket dispatch. We accept major credit cards (Visa, Mastercard, AMEX) and PayPal. Orders are confirmed once payment authorization is verified and electronic ticket vouchers (PDF barcodes) have been dispatched via email.
            </p>

            <h2>4. Cancellations, Changes & Refunds</h2>
            <p>
                All ticket modifications, cancellations, and refund claims are governed by our official <a href="refund-policy.php">Refund & Cancellation Policy</a> and the underlying carrier's tariff rules. 
            </p>

            <h2>5. Limitation of Liability</h2>
            <p>
                To the maximum extent permitted by applicable law, Uo Travel Solutions shall not be held liable for transit delays, missed connections, weather disruptions, strike actions, lost luggage, or carrier schedule alterations. Our total cumulative liability for any booking error directly attributable to Uo Travel Solutions shall be limited to the total service fees paid to us for that specific transaction.
            </p>

            <h2>6. Intellectual Property</h2>
            <p>
                All content, text, branding, logos, design elements, and software code on <strong><?php echo SITE_DOMAIN; ?></strong> are the property of <?php echo BUSINESS_LEGAL_NAME; ?>. Carrier logos and brand names mentioned on this site belong to their respective registered trademark owners.
            </p>

            <h2>7. Governing Law & Contact Details</h2>
            <p>
                These Terms shall be governed by and construed in accordance with the laws of the State of New York, United States. For legal inquiries regarding these terms, please contact:
            </p>
            <div style="background: var(--bg-light); padding: 1.25rem; border-radius: var(--border-radius-sm); font-size: 0.9rem;">
                <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong><br>
                Legal Compliance Office<br>
                <?php echo FULL_ADDRESS; ?><br>
                Email: <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a> | Phone: <?php echo PHONE_PRIMARY; ?>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
