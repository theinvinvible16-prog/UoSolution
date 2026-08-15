<?php
require_once __DIR__ . '/config.php';

/**
 * Format page title with brand name
 */
function get_page_title($custom_title = '') {
    if (!empty($custom_title)) {
        return htmlspecialchars($custom_title) . ' | ' . SITE_NAME;
    }
    return SITE_NAME . ' | Train & Bus Tickets, Travel Packages (' . SITE_DOMAIN . ')';
}

/**
 * Check if link is current active page
 */
function is_active_nav($page_file) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page === $page_file) ? 'active' : '';
}

/**
 * Sanitize user input for security
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Generate Schema.org JSON-LD structured data for TravelAgency
 */
function get_schema_travel_agency() {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "TravelAgency",
        "name" => SITE_NAME,
        "legalName" => BUSINESS_LEGAL_NAME,
        "url" => SITE_URL,
        "logo" => SITE_URL . "/assets/images/logo.png",
        "description" => BUSINESS_TAGLINE,
        "telephone" => PHONE_PRIMARY,
        "email" => EMAIL_SUPPORT,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => ADDRESS_STREET,
            "addressLocality" => ADDRESS_CITY,
            "addressRegion" => ADDRESS_STATE,
            "postalCode" => ADDRESS_ZIP,
            "addressCountry" => ADDRESS_COUNTRY
        ],
        "openingHours" => ["Mo-Fr 08:00-20:00", "Sa-Su 09:00-17:00"],
        "priceRange" => "$$"
    ];
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}
?>
