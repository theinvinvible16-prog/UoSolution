<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email    = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone    = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $subject  = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : (isset($_POST['inquiry_type']) ? sanitize_input($_POST['inquiry_type']) : 'General Inquiry');
    $origin   = isset($_POST['origin']) ? sanitize_input($_POST['origin']) : '';
    $dest     = isset($_POST['destination']) ? sanitize_input($_POST['destination']) : '';
    $date     = isset($_POST['travel_date']) ? sanitize_input($_POST['travel_date']) : '';
    $pass     = isset($_POST['passengers']) ? sanitize_input($_POST['passengers']) : '';
    $message  = isset($_POST['message']) ? sanitize_input($_POST['message']) : (isset($_POST['notes']) ? sanitize_input($_POST['notes']) : '');

    // Validation
    if (empty($name) || empty($email) || empty($phone)) {
        header("Location: contact.php?status=error");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=error");
        exit;
    }

    // Record inquiry log in local logs folder
    $log_dir = __DIR__ . '/logs';
    if (!file_exists($log_dir)) {
        mkdir($log_dir, 0755, true);
    }

    $log_entry = sprintf(
        "[%s] %s | Email: %s | Phone: %s | Subject: %s | From: %s -> To: %s | Date: %s | Passengers: %s | Msg: %s\n",
        date('Y-m-d H:i:s'),
        $name,
        $email,
        $phone,
        $subject,
        $origin,
        $dest,
        $date,
        $pass,
        str_replace("\n", " ", $message)
    );

    file_put_contents($log_dir . '/inquiries.log', $log_entry, FILE_APPEND);

    // Redirect with success status
    header("Location: contact.php?status=success");
    exit;
} else {
    header("Location: contact.php");
    exit;
}
?>
