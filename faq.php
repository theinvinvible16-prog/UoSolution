<?php
$page_title = "Frequently Asked Questions (FAQ) & Booking Support";
$page_description = "Find answers to popular questions regarding train and bus ticket reservations, accepted payment methods, e-ticket delivery, cancellations, and refund timelines with Uo Travel Solutions.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-circle-question"></i> Help Center</span>
        <h1 class="text-white">Frequently Asked Questions</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Get immediate answers about booking train & bus tickets, ticket changes, refund windows, and passenger policies.
        </p>
    </div>
</section>

<!-- FAQ Accordions Section -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 900px;">
        
        <div class="text-center" style="text-align: center; margin-bottom: 2.5rem;">
            <span class="section-subtitle">Passenger Knowledgebase</span>
            <h2>Common Booking & Fare Questions</h2>
        </div>

        <div class="itinerary-accordion">
            
            <div class="accordion-item active">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-ticket text-accent" style="margin-right: 0.5rem;"></i> How do I request and book a train or bus ticket?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        You can request a ticket quote by using our homepage search widget, filling out our <a href="contact.php">Contact Form</a>, or calling our toll-free desk at <strong><?php echo PHONE_PRIMARY; ?></strong>. We will check live carrier inventory across national rail and motorcoach lines, send you itemized fare options, and issue your official e-tickets upon confirmation.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-building-shield text-accent" style="margin-right: 0.5rem;"></i> What is Uo Travel Solutions's role as a travel agency?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        Uo Travel Solutions operates as an independent travel agency and ticket booking intermediary. We are not a direct train or bus transport operator. We purchase and issue valid passenger tickets on your behalf through official rail and coach carriers, providing personalized reservation assistance, seat selection, and 24/7 travel support.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-credit-card text-accent" style="margin-right: 0.5rem;"></i> What payment methods do you accept?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        We accept major credit/debit cards (Visa, Mastercard, American Express, Discover) as well as secure PayPal transfers. All transactions are protected by 256-bit SSL encryption. We never store credit card numbers after your ticket has been issued.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-rotate-left text-accent" style="margin-right: 0.5rem;"></i> How do cancellations and refunds work?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        Refund eligibility depends on the specific fare class purchased and the cancellation window prior to departure. Requests submitted within 24 hours of booking generally qualify for full refund minus any non-refundable carrier pass fees. Approved refunds are credited back to your original payment method within 5 to 7 business days. Please review our full <a href="refund-policy.php">Refund & Cancellation Policy</a> for detailed terms.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-mobile-screen text-accent" style="margin-right: 0.5rem;"></i> How will I receive my e-tickets?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        Official barcode electronic tickets (PDF format) and seat assignments are sent directly to your registered email address and via SMS/WhatsApp text link immediately after payment processing. You can display the PDF on your smartphone screen to the conductor or driver when boarding.
                    </p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span><i class="fa-solid fa-triangle-exclamation text-accent" style="margin-right: 0.5rem;"></i> What happens if a train or bus is delayed or cancelled by the carrier?</span>
                    <i class="fa-solid fa-chevron-down chevron"></i>
                </button>
                <div class="accordion-content">
                    <p style="margin-top: 0.75rem; color: var(--text-body); line-height: 1.6;">
                        If the underlying rail or bus operator cancels or significantly disrupts a departure due to weather or technical reasons, passengers are entitled to rebooking on the next available transit leg or a full fare refund pursuant to carrier rules. Uo Travel Solutions’s emergency support team assists you directly with re-ticketing or filing carrier refund claims.
                    </p>
                </div>
            </div>

        </div>

        <div class="policy-container text-center" style="margin-top: 3rem; text-align: center;">
            <h3>Still Have Questions?</h3>
            <p style="color: var(--text-muted); margin-bottom: 1.5rem;">Our customer service team is standing by to help you with any custom transit requests.</p>
            <div style="display: flex; justify-content: center; gap: 1rem;">
                <a href="tel:18005558728" class="btn btn-primary"><i class="fa-solid fa-phone"></i> Call <?php echo PHONE_PRIMARY; ?></a>
                <a href="contact.php" class="btn btn-outline"><i class="fa-solid fa-envelope"></i> Contact Support</a>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
