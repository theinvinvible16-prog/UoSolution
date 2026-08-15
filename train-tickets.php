<?php
$page_title = "Train Ticket Reservations & Rail Passes";
$page_description = "Reserve regional, express, and panoramic train tickets worldwide with Uo Travel Solutions. Upfront fare estimates, seat reservations, and expert rail booking assistance.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-train"></i> Train Ticket Specialist</span>
        <h1 class="text-white">Train Ticket Reservations & Rail Fares</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Hassle-free train ticketing across North America, Europe, Asia, and international rail networks. We assist passengers with schedule lookup, seat selection, and e-ticket delivery.
        </p>
        <button type="button" class="btn btn-accent open-quote-modal" data-service="Train Reservation" data-type="Train Ticket Inquiry">
            <i class="fa-solid fa-ticket"></i> Inquire Train Fares Now
        </button>
    </div>
</section>

<!-- How Train Booking Works -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 3rem;">
            <span class="section-subtitle">Rail Reservation Guide</span>
            <h2>How to Reserve Train Tickets with Uo Travel Solutions</h2>
            <p class="lead-text" style="margin: 0 auto;">Everything you need to know about rail routes, booking windows, and fare classes.</p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-route"></i></div>
                <h3>1. Select Routes & Dates</h3>
                <p>Submit your origin station, destination, preferred departure date, and class tier (First Class, Economy Chair Car, or Sleeper Cabin).</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                <h3>2. Fare Quote & Seat Assignment</h3>
                <p>We check official carrier schedules and present transparent fare options, including mandatory seat reservation fees and luggage allowances.</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                <h3>3. E-Ticket Delivery</h3>
                <p>Once confirmed, your official barcode e-tickets and seat passes are emailed directly to you for seamless station boarding.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sample Popular Train Routes & Fare Transparency Table -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 2rem;">
            <span class="section-subtitle">Pricing Transparency</span>
            <h2>Sample Popular Train Fares & Routes</h2>
            <p class="lead-text" style="margin: 0 auto;">Fares vary based on travel date, season, advance purchase window, and seat tier. Below are sample starting fare ranges quoted for major train routes.</p>
        </div>

        <div class="fare-table-card">
            <div class="table-responsive">
                <table class="fare-table">
                    <thead>
                        <tr>
                            <th>Train Route / Region</th>
                            <th>Operator / Train Type</th>
                            <th>Travel Time</th>
                            <th>Sample Fare Class</th>
                            <th>Estimated Fare Range</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Zurich to Zermatt</strong> (Switzerland)</td>
                            <td>SBB / Glacier Express</td>
                            <td>3h 15m</td>
                            <td><span class="fare-badge fare-badge-first">1st Class Panoramic</span></td>
                            <td>$120 – $185 per adult</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="Zurich to Zermatt Train">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>London to Paris</strong> (UK & France)</td>
                            <td>Cross-Channel Express Rail</td>
                            <td>2h 16m</td>
                            <td><span class="fare-badge fare-badge-express">Standard Premier</span></td>
                            <td>$89 – $165 per adult</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="London to Paris Express Rail">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New York to Washington DC</strong> (USA)</td>
                            <td>US Northeast Express Rail</td>
                            <td>2h 55m</td>
                            <td><span class="fare-badge fare-badge-economy">Business / Regional</span></td>
                            <td>$64 – $140 per adult</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="NYC to DC Express Rail">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Delhi to Agra</strong> (India)</td>
                            <td>Gatimaan / Vande Bharat</td>
                            <td>1h 40m</td>
                            <td><span class="fare-badge fare-badge-first">Executive AC Chair</span></td>
                            <td>$25 – $45 per adult</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="Delhi to Agra Train">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Tokyo to Kyoto</strong> (Japan)</td>
                            <td>Shinkansen Bullet Train</td>
                            <td>2h 15m</td>
                            <td><span class="fare-badge fare-badge-express">Shinkansen Reserved</span></td>
                            <td>$110 – $160 per adult</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="Tokyo to Kyoto Shinkansen">Inquire</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="policy-alert mt-4">
            <i class="fa-solid fa-circle-info"></i>
            <strong>Pricing Transparency & Intermediary Disclosure:</strong> All fares displayed are realistic estimates based on carrier baseline pricing. Final ticket costs are confirmed at the time of official booking inquiry. Uo Travel Solutions charges a transparent booking service fee clearly itemized on your final receipt.
        </div>
    </div>
</section>

<!-- Required Information Checklist -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="contact-grid">
            <div>
                <span class="section-subtitle">Passenger Checklist</span>
                <h2>What Information is Needed to Reserve Your Train Ticket?</h2>
                <p>To ensure quick issuing of train tickets by official railway operators, please have the following details ready when submitting your inquiry:</p>

                <ul class="policy-container" style="padding: 1.5rem; margin-top: 1rem; border: none; box-shadow: none; background: var(--bg-light);">
                    <li style="margin-bottom: 0.85rem;"><i class="fa-solid fa-check text-accent" style="margin-right: 0.5rem;"></i> <strong>Full Legal Passenger Names</strong> exactly as shown on official government ID or passport.</li>
                    <li style="margin-bottom: 0.85rem;"><i class="fa-solid fa-check text-accent" style="margin-right: 0.5rem;"></i> <strong>Date of Birth & Age Group</strong> (Adult, Senior 60+, Youth/Child for applicable fare discounts).</li>
                    <li style="margin-bottom: 0.85rem;"><i class="fa-solid fa-check text-accent" style="margin-right: 0.5rem;"></i> <strong>Preferred Travel Time Window</strong> (Morning departure, Afternoon express, Night sleeper).</li>
                    <li style="margin-bottom: 0.85rem;"><i class="fa-solid fa-check text-accent" style="margin-right: 0.5rem;"></i> <strong>Seating Preferences</strong> (Window, Aisle, Quiet Cabin, Table Seats, Family Group block).</li>
                </ul>
            </div>

            <div class="contact-info-card">
                <div>
                    <h3>Need Immediate Train Booking Help?</h3>
                    <p style="color: #CBD5E1; margin-bottom: 2rem;">Our dedicated train reservation agents are available to assist with complex multi-stop rail itineraries, group reservations, and urgent travel changes.</p>
                    
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.9rem; color: #94A3B8;">Toll-Free Reservation Desk</strong>
                            <a href="tel:18887907847" style="color: #fff; font-size: 1.2rem; font-weight: 700;"><?php echo PHONE_PRIMARY; ?></a>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.9rem; color: #94A3B8;">Train Desk Email</strong>
                            <a href="mailto:<?php echo EMAIL_BOOKINGS; ?>" style="color: #fff; font-size: 1rem;"><?php echo EMAIL_BOOKINGS; ?></a>
                        </div>
                    </div>
                </div>

                <button class="btn btn-accent btn-full open-quote-modal" data-service="General Train Ticket Inquiry">
                    <i class="fa-solid fa-paper-plane"></i> Submit Train Ticket Quote
                </button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
