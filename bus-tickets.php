<?php
$page_title = "Express Bus Ticket Reservations & Coach Fares";
$page_description = "Book express intercity bus tickets and motorcoach fares with Uo Travel Solutions. Upfront pricing, luggage rules, and verified bus transport partners.";
require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-bus"></i> Express Bus Specialist</span>
        <h1 class="text-white">Express Bus Ticket Reservations</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Affordable, modern intercity bus routes and luxury motorcoach connections. We help travelers compare express coach lines, reserve preferred seating, and secure instant mobile tickets.
        </p>
        <button type="button" class="btn btn-accent open-quote-modal" data-service="Bus Reservation" data-type="Bus Ticket Inquiry">
            <i class="fa-solid fa-bus"></i> Request Bus Ticket Quote
        </button>
    </div>
</section>

<!-- Bus Booking Process & Features -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 3rem;">
            <span class="section-subtitle">Comfort & Convenience</span>
            <h2>Why Reserve Intercity Bus Tickets with Us?</h2>
            <p class="lead-text" style="margin: 0 auto;">Modern long-distance motorcoaches offer plush reclining seats, onboard power outlets, Wi-Fi, and generous luggage capacity.</p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-plug"></i></div>
                <h3>Modern Onboard Amenities</h3>
                <p>Enjoy free high-speed Wi-Fi, USB charging ports at every seat, climate control, and clean onboard restrooms on express routes.</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-suitcase"></i></div>
                <h3>Transparent Luggage Policies</h3>
                <p>Includes 1 checked bag under the bus plus 1 carry-on item per passenger. Additional oversized luggage options available upon request.</p>
            </div>

            <div class="step-card">
                <div class="step-icon"><i class="fa-solid fa-shield-cat"></i></div>
                <h3>Flexible Rescheduling</h3>
                <p>Need to adjust your departure time? Our reservation team handles route updates and ticket re-issuance in accordance with carrier policies.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sample Bus Routes & Fare Table -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 2rem;">
            <span class="section-subtitle">Route Overview</span>
            <h2>Popular Intercity Bus Routes & Sample Fares</h2>
            <p class="lead-text" style="margin: 0 auto;">Check sample starting fare ranges for top intercity express bus routes served by verified motorcoach operators.</p>
        </div>

        <div class="fare-table-card">
            <div class="table-responsive">
                <table class="fare-table">
                    <thead>
                        <tr>
                            <th>Bus Route</th>
                            <th>Service Category</th>
                            <th>Average Duration</th>
                            <th>Amenities Included</th>
                            <th>Sample Fare Range</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Las Vegas to Grand Canyon</strong></td>
                            <td>Express Scenic Coach</td>
                            <td>4h 30m</td>
                            <td>Wi-Fi, Power, Reclining Seats</td>
                            <td>$45 – $85 per passenger</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="Las Vegas to Grand Canyon Bus">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New York City to Boston</strong></td>
                            <td>Intercity Express Bus</td>
                            <td>4h 15m</td>
                            <td>Direct Nonstop, Extra Legroom</td>
                            <td>$29 – $65 per passenger</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="NYC to Boston Bus">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Paris to Amsterdam</strong></td>
                            <td>European Express Coach</td>
                            <td>6h 30m</td>
                            <td>Panoramic Windows, Wi-Fi</td>
                            <td>$35 – $75 per passenger</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="Paris to Amsterdam Bus">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>London to Edinburgh</strong></td>
                            <td>Night Express Sleeper Coach</td>
                            <td>8h 00m</td>
                            <td>Reclining Berths, Restroom</td>
                            <td>$40 – $90 per passenger</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="London to Edinburgh Bus">Inquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Los Angeles to San Francisco</strong></td>
                            <td>West Coast Express Bus</td>
                            <td>7h 00m</td>
                            <td>Wi-Fi, Snack Bar, USB Ports</td>
                            <td>$38 – $70 per passenger</td>
                            <td>
                                <button class="btn btn-accent btn-sm open-quote-modal" data-service="LA to San Francisco Bus">Inquire</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="policy-alert mt-4">
            <i class="fa-solid fa-building-shield"></i>
            <strong>Carrier Intermediary Notice:</strong> Bus transportation is operated by licensed third-party passenger transit carriers (such as FlixBus, Greyhound, Megabus, and local charter lines). Uo Travel Solutions acts solely as an authorized booking agent.
        </div>
    </div>
</section>

<!-- Luggage Rules & Reservation Info -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="contact-grid">
            <div>
                <span class="section-subtitle">Luggage & Boarding Guidelines</span>
                <h2>What to Know Before You Board Your Bus</h2>
                
                <div class="policy-container" style="padding: 1.5rem; border: none; box-shadow: none; background: var(--bg-light);">
                    <h3 style="font-size: 1.1rem; margin-top: 0;"><i class="fa-solid fa-suitcase-rolling text-accent"></i> Luggage Allowance</h3>
                    <p style="font-size: 0.9rem;">Each ticket includes one under-bus stowed bag (up to 50 lbs / 23 kg) plus one small personal item under your seat. Extra luggage passes can be requested during booking inquiry.</p>

                    <h3 style="font-size: 1.1rem;"><i class="fa-solid fa-clock text-accent"></i> Boarding Arrival Time</h3>
                    <p style="font-size: 0.9rem;">Please arrive at the designated bus terminal or pick-up curb at least 20 to 30 minutes prior to scheduled departure. Present your mobile PDF ticket barcode to the driver.</p>

                    <h3 style="font-size: 1.1rem;"><i class="fa-solid fa-id-card text-accent"></i> Identification Requirements</h3>
                    <p style="font-size: 0.9rem; margin-bottom: 0;">Passengers must carry a valid photo ID (driver’s license, passport, or state ID) matching the name on the bus ticket reservation.</p>
                </div>
            </div>

            <div class="contact-info-card">
                <div>
                    <h3>Request Your Bus Fare Quote</h3>
                    <p style="color: #CBD5E1; margin-bottom: 2rem;">Let our bus travel specialists find the best departure times and lowest available fares for your trip.</p>
                    
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fa-solid fa-headset"></i></div>
                        <div>
                            <strong style="display: block; font-size: 0.9rem; color: #94A3B8;">Customer Support Line</strong>
                            <a href="tel:18887907847" style="color: #fff; font-size: 1.2rem; font-weight: 700;"><?php echo PHONE_PRIMARY; ?></a>
                        </div>
                    </div>
                </div>

                <button class="btn btn-accent btn-full open-quote-modal" data-service="Bus Ticket Reservation">
                    <i class="fa-solid fa-paper-plane"></i> Get Bus Ticket Quote
                </button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
