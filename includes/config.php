<?php
/**
 * Global Configuration for Uo Travel Solutions
 * Website: uotravelsolution.com
 */

// Business Identity
define('SITE_NAME', 'Uo Travel Solutions');
define('SITE_DOMAIN', 'uotravelsolution.com');
define('SITE_URL', 'https://uotravelsolution.com');
define('BUSINESS_LEGAL_NAME', 'Uo Travel Solutions LLC');
define('BUSINESS_TAGLINE', 'Your Trusted Train & Bus Ticket Reservation & Travel Package Specialist');

// Contact Information (Google Ads Compliance Verified)
define('PHONE_PRIMARY', '+1 (888) 790-7847');
define('PHONE_ALT', '+1 (888) 790-7847');
define('EMAIL_SUPPORT', 'support@uotravelsolution.com');
define('EMAIL_BOOKINGS', 'bookings@uotravelsolution.com');
define('ADDRESS_STREET', '2611 E 219th St');
define('ADDRESS_CITY', 'Long Beach');
define('ADDRESS_STATE', 'CA');
define('ADDRESS_ZIP', '90810');
define('ADDRESS_COUNTRY', 'United States');
define('FULL_ADDRESS', ADDRESS_STREET . ', ' . ADDRESS_CITY . ', ' . ADDRESS_STATE . ' ' . ADDRESS_ZIP . ', ' . ADDRESS_COUNTRY);
define('HOURS_WEEKDAY', 'Monday – Friday: 8:00 AM – 8:00 PM EST');
define('HOURS_WEEKEND', 'Saturday – Sunday: 9:00 AM – 5:00 PM EST');

// Agency Disclaimer (Crucial for Google Ads Travel Policy)
define('AGENCY_DISCLAIMER', 'Uo Travel Solutions is an independent travel agency and ticket booking intermediary. Ticket fulfillment, rail schedules, and bus routes are provided by third-party passenger transit carriers. All trademarks, brand names, and logos belong to their respective owners.');

// Main Navigation Items
$nav_items = [
    'index.php'         => 'Home',
    'train-tickets.php' => 'Train Tickets',
    'bus-tickets.php'   => 'Bus Tickets',
    'packages.php'      => 'Travel Packages',
    'about.php'         => 'About Us',
    'contact.php'       => 'Contact Us',
    'faq.php'           => 'FAQ'
];

// Legal Navigation Links
$legal_nav = [
    'privacy-policy.php' => 'Privacy Policy',
    'terms.php'          => 'Terms & Conditions',
    'refund-policy.php'  => 'Refund & Cancellation Policy'
];
?>
