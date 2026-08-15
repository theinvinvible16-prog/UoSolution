<?php
$page_title = "Refund & Cancellation Policy | Uo Travel Solutions";
$page_description = "Read the complete Refund & Cancellation Policy for train, bus, and package reservations at Uo Travel Solutions (uotravelsolutions.com). Clear refund windows, timelines, and procedures.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%);">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-rotate-left"></i> Passenger Refund Policy</span>
        <h1 class="text-white">Refund & Cancellation Policy</h1>
        <p style="color: #CBD5E1; max-width: 700px; margin: 0 auto;">
            Effective Date: January 15, 2026 | Domain: <?php echo SITE_DOMAIN; ?>
        </p>
    </div>
</section>

<!-- Policy Body -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="policy-container" style="margin-top: 0;">
            
            <div class="policy-alert">
                <i class="fa-solid fa-circle-check"></i>
                <strong>Transparent Refund Terms:</strong> <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong> maintains transparent, fair, and clearly defined refund rules for all train ticket reservations, express bus passes, and holiday package bookings.
            </div>

            <h2>1. General Cancellation Principles</h2>
            <p>
                Uo Travel Solutions acts as an authorized booking intermediary between passengers and passenger transit operators. Refund eligibility and cancellation fees depend on the category of service purchased (Train Ticket, Express Bus, or Holiday Travel Package), the fare class tier, and the time remaining before scheduled departure.
            </p>

            <h2>2. 24-Hour Risk-Free Cancellation Window</h2>
            <p>
                If you request a booking cancellation within <strong>24 hours of ticket purchase</strong> (and at least 48 hours prior to scheduled departure), you are eligible for a <strong>100% full refund</strong> of carrier base fares back to your original payment method.
            </p>

            <h2>3. Cancellation Windows & Fee Schedule</h2>

            <h3>A. Train Ticket Reservations</h3>
            <ul>
                <li><strong>Cancellations 14+ Days Prior to Departure:</strong> Eligible for a 90% refund of base ticket fare (subject to a 10% carrier administrative processing fee).</li>
                <li><strong>Cancellations 3 to 13 Days Prior to Departure:</strong> Eligible for a 70% refund of base ticket fare.</li>
                <li><strong>Cancellations Less Than 72 Hours Prior to Departure:</strong> Subject to specific rail operator non-refundable pass rules. Flexible fare tickets remain eligible for partial credit vouchers.</li>
                <li><strong>No-Shows / Non-Boarding:</strong> Tickets are non-refundable once the train has departed the station.</li>
            </ul>

            <h3>B. Express Bus Tickets</h3>
            <ul>
                <li><strong>Cancellations 7+ Days Prior to Departure:</strong> Eligible for a 90% refund or full fare credit voucher valid for 12 months.</li>
                <li><strong>Cancellations 48 Hours to 6 Days Prior to Departure:</strong> Eligible for a 50% refund or 75% trip credit voucher.</li>
                <li><strong>Cancellations Under 48 Hours / Missed Bus:</strong> Non-refundable per standard intercity bus coach regulations.</li>
            </ul>

            <h3>C. Holiday Travel Packages</h3>
            <ul>
                <li><strong>Cancellations 30+ Days Prior to Trip Start:</strong> Full refund minus any non-refundable third-party rail/hotel deposit fees.</li>
                <li><strong>Cancellations 15 to 29 Days Prior:</strong> 70% refund of total package price.</li>
                <li><strong>Cancellations 7 to 14 Days Prior:</strong> 50% refund of total package price.</li>
                <li><strong>Cancellations Under 7 Days:</strong> Non-refundable; passengers are urged to claim under comprehensive travel insurance.</li>
            </ul>

            <h2>4. Refund Processing Timelines & Payment Method</h2>
            <div class="policy-alert" style="background: var(--accent-light); border-color: var(--accent);">
                <i class="fa-solid fa-clock"></i>
                <strong>Refund Timeline:</strong> Once a refund request is approved by our desk, credits are processed within <strong>2 to 3 business days</strong> and will appear on your credit card or PayPal statement within <strong>5 to 7 business days</strong> (depending on your financial institution's posting cycles).
            </div>
            <p>
                All refunds are issued strictly to the <strong>original form of payment</strong> used during purchase. We do not issue cash or third-party check refunds.
            </p>

            <h2>5. Carrier Delays, Cancellations & Schedule Disruptions</h2>
            <p>
                If a train or bus departure is cancelled, significantly delayed (more than 120 minutes), or rerouted directly by the passenger transit operator (due to severe weather, mechanical breakdown, or infrastructure work):
            </p>
            <ul>
                <li>Passengers are entitled to a <strong>100% full refund</strong> of all unused transit segments, OR</li>
                <li>Free re-ticket booking on the next available train or bus departure at no additional charge.</li>
            </ul>

            <h2>6. How to Submit a Cancellation or Refund Request</h2>
            <p>To request a booking modification or cancellation, please follow these steps:</p>
            <ol style="padding-left: 1.5rem; margin-bottom: 1.5rem;">
                <li style="margin-bottom: 0.5rem;">Locate your <strong>Uo Travel Solutions Booking Reference Number</strong> (found on your PDF e-ticket receipt).</li>
                <li style="margin-bottom: 0.5rem;">Email our refund desk at <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a> with the subject line <em>"Refund Request - [Booking Number]"</em>, OR</li>
                <li style="margin-bottom: 0.5rem;">Call our toll-free customer support line directly at <strong><?php echo PHONE_PRIMARY; ?></strong> (available <?php echo HOURS_WEEKDAY; ?>).</li>
            </ol>

            <div style="background: var(--bg-light); padding: 1.25rem; border-radius: var(--border-radius-sm); font-size: 0.9rem;">
                <strong>Refund Customer Desk:</strong><br>
                <?php echo BUSINESS_LEGAL_NAME; ?><br>
                <?php echo FULL_ADDRESS; ?><br>
                Toll-Free Phone: <?php echo PHONE_PRIMARY; ?> | Email: <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
