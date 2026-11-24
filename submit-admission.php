<?php
require __DIR__ . '/admin/config.php';
require_db();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: admissions.html'); exit; }
if (!empty($_POST['website'])) exit('Submission rejected.'); // honeypot field

$required = ['pupil_name', 'dob', 'gender', 'class_id', 'boarding', 'parent_name', 'phone'];
foreach ($required as $f) {
    if (trim($_POST[$f] ?? '') === '') exit('Please complete all required fields. <a href="admissions.html">Go back</a>');
}
$classes = [1 => 'Baby Class', 2 => 'Middle Class', 3 => 'Top Class', 4 => 'Primary One', 5 => 'Primary Two', 6 => 'Primary Three', 7 => 'Primary Four', 8 => 'Primary Five', 9 => 'Primary Six', 10 => 'Primary Seven'];
$cid = (int)$_POST['class_id'];
if (!isset($classes[$cid]) || ($cid < 4 && ($_POST['boarding'] ?? '') === 'Boarding')) exit('Invalid class or boarding selection.');

$pdo->prepare('INSERT INTO admissions(pupil_name,dob,gender,class_id,class_name,boarding,previous_school,parent_name,phone,email,address,status,created_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)')
    ->execute([trim($_POST['pupil_name']), $_POST['dob'], $_POST['gender'], $cid, $classes[$cid], $_POST['boarding'], trim($_POST['previous_school'] ?? ''), trim($_POST['parent_name']), trim($_POST['phone']), trim($_POST['email'] ?? ''), trim($_POST['address'] ?? ''), 'New', now()]);
?><!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Application received</title>
<h1>Thank you. Your application has been received.</h1><p>The school office will contact you using the details provided.</p><a href="index.html">Return to website</a>
