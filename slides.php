<?php
// Public JSON feed of the live homepage slides (used by index.html).
require __DIR__ . '/admin/config.php';
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
$out = [];
foreach (get_slides() as $s) {
    $out[] = ['title' => $s['title'], 'body' => $s['body'] ?? '', 'image' => $s['image'], 'link_text' => $s['link_text'] ?? '', 'link_url' => $s['link_url'] ?? ''];
}
echo json_encode($out, JSON_UNESCAPED_UNICODE);
