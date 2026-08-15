<?php
$page_title = "Privacy Policy | User Data Protection & Cookie Policy";
$page_description = "Read the Privacy Policy for Uo Travel Solutions (uotravelsolutions.com). Full data protection transparency compliant with privacy laws.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%);">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-lock"></i> Privacy & Security</span>
        <h1 class="text-white">Privacy Policy</h1>
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
                <i class="fa-solid fa-shield-halved"></i>
                <strong>Our Commitment to Data Privacy:</strong> <strong><?php echo BUSINESS_LEGAL_NAME; ?></strong> respects your privacy and is committed to protecting your personal information. This Privacy Policy details how we collect, use, store, and safeguard your data when you visit <strong><?php echo SITE_DOMAIN; ?></strong>.
            </div>

            <h2>1. Information We Collect</h2>
            <p>To fulfill train ticket reservations, express bus bookings, and travel packages, we collect the following categories of information:</p>
            <ul>
                <li><strong>Personal Identification Data:</strong> Full name, date of birth, gender, passport or government ID number (when required by rail operators for international transit).</li>
                <li><strong>Contact Information:</strong> Email address, mobile phone number, delivery address.</li>
                <li><strong>Travel & Booking Details:</strong> Departure city, destination, travel dates, seating preferences, class tier, passenger counts.</li>
                <li><strong>Financial & Payment Data:</strong> Credit card billing details and transaction tokens processed securely through encrypted 256-bit payment gateways.</li>
                <li><strong>Technical & Analytics Data:</strong> IP address, browser type, operating system, referral URLs, and pages visited via cookies and Google Analytics tags.</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We use your personal data strictly for legitimate business and travel reservation purposes, including:</p>
            <ul>
                <li>Processing and issuing official train e-tickets, bus vouchers, and itinerary confirmations.</li>
                <li>Transmitting passenger manifests to authorized railway and bus transport carriers.</li>
                <li>Providing 24/7 customer support, schedule change notifications, and disruption alerts.</li>
                <li>Processing authorized cancellations, fare modifications, and refund credits.</li>
                <li>Maintaining compliance with data protection laws, fraud prevention standards, and accounting regulations.</li>
            </ul>

            <h2>3. Information Sharing & Third-Party Disclosures</h2>
            <p>
                <strong>We NEVER sell, rent, or trade your personal data to third-party marketing brokers.</strong>
            </p>
            <p>We share personal data exclusively with essential service partners under strict confidentiality agreements:</p>
            <ul>
                <li><strong>Passenger Transit Carriers:</strong> Third-party rail operators (e.g. SBB, Eurostar, Amtrak) and bus companies required to issue valid passenger transit tickets.</li>
                <li><strong>Payment Processors:</strong> PCI-DSS compliant payment gateways (Visa, Mastercard, PayPal) for payment authorization.</li>
                <li><strong>Regulatory & Legal Authorities:</strong> When required by court order, law enforcement, or government customs & border control authorities.</li>
            </ul>

            <h2>4. Cookies & Web Analytics</h2>
            <p>
                <strong><?php echo SITE_DOMAIN; ?></strong> uses cookies and web beacons (including Google Analytics and Google Tag Manager) to improve website functionality, analyze user traffic, and measure ad campaign conversion performance. You can disable cookies in your web browser settings at any time; however, some site reservation features may require cookies to function properly.
            </p>

            <h2>5. Data Security & Retention</h2>
            <p>
                We employ industry-standard 256-Bit SSL encryption, secure firewalls, and strict internal access controls to protect your data against unauthorized access or disclosure. We retain passenger records only as long as necessary to complete travel services and satisfy statutory tax and legal retention requirements.
            </p>

            <h2>6. Your Data Rights & Contact</h2>
            <p>Depending on your jurisdiction (including GDPR and CCPA regulations), you have the right to request access to, correction of, or deletion of your personal data held by Uo Travel Solutions.</p>
            
            <div style="background: var(--bg-light); padding: 1.25rem; border-radius: var(--border-radius-sm); font-size: 0.9rem; margin-top: 1rem;">
                <strong>Privacy Officer Contact:</strong><br>
                <?php echo BUSINESS_LEGAL_NAME; ?><br>
                Attn: Data Privacy Department<br>
                <?php echo FULL_ADDRESS; ?><br>
                Email: <a href="mailto:<?php echo EMAIL_SUPPORT; ?>"><?php echo EMAIL_SUPPORT; ?></a> | Phone: <?php echo PHONE_PRIMARY; ?>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
