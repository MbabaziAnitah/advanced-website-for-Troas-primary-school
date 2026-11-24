<?php
require __DIR__ . '/admin/config.php';
require_db();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: contact.html'); exit; }
if (!empty($_POST['website'])) exit('Submission rejected.'); // honeypot field

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($message) < 10) {
    exit('Please provide a valid name, email and message. <a href="contact.html">Go back</a>');
}
$pdo->prepare('INSERT INTO messages(name,email,subject,message,status,created_at) VALUES(?,?,?,?,?,?)')
    ->execute([$name, $email, trim($_POST['subject'] ?? ''), $message, 'New', now()]);
?><!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Message received</title>
<h1>Thank you for contacting Troas Primary School.</h1><p>Your message has been received. We will respond as soon as possible.</p><a href="index.html">Return to website</a>
