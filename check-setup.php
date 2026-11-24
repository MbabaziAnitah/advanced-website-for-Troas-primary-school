<?php
/**
 * Troas Primary School: setup checker.
 *
 * Confirms the server is ready to run the website.
 * Usage:  php check-setup.php          (from the project folder)
 *    or:  http://localhost/check-setup.php  (local machine only)
 *
 * It refuses to run for anyone browsing from another computer, so it is safe
 * to leave in the project. It changes nothing and prints no passwords.
 */

$isCli = (PHP_SAPI === 'cli');
$remote = $_SERVER['REMOTE_ADDR'] ?? '';
if (!$isCli && !in_array($remote, ['127.0.0.1', '::1'], true)) {
    http_response_code(403);
    exit('This checker only runs from the command line or on localhost.');
}
if (!$isCli) {
    header('Content-Type: text/plain; charset=utf-8');
}

$root = __DIR__;
$results = [];

function check(array &$results, string $label, bool $ok, string $hint = ''): void
{
    $results[] = [$label, $ok, $hint];
}

check($results, 'PHP 7.4 or newer (found ' . PHP_VERSION . ')', version_compare(PHP_VERSION, '7.4.0', '>='), 'Ask your host to switch to PHP 7.4 or newer.');
check($results, 'PDO extension loaded', extension_loaded('pdo'), 'Enable the pdo extension.');
check($results, 'pdo_sqlite loaded (default database)', extension_loaded('pdo_sqlite'), 'Enable pdo_sqlite, or configure MySQL in admin/config.local.php.');
check($results, 'pdo_mysql loaded (only needed for MySQL)', extension_loaded('pdo_mysql'), 'Optional. Ignore unless you use MySQL.');
check($results, 'admin/config.php exists', is_file($root . '/admin/config.php'), 'Upload the admin/ folder.');
check($results, '.htaccess exists', is_file($root . '/.htaccess'), 'Upload .htaccess so private files stay protected.');
check($results, 'data/ folder exists', is_dir($root . '/data'), 'Create a data/ folder.');
check($results, 'data/ is writable', is_dir($root . '/data') && is_writable($root . '/data'), 'Set data/ permissions to 755 or 775.');
check($results, 'data/.htaccess exists (protects the database)', is_file($root . '/data/.htaccess'), 'Never delete data/.htaccess.');
check($results, 'assets/uploads/ is writable', is_dir($root . '/assets/uploads') && is_writable($root . '/assets/uploads'), 'Set assets/uploads/ permissions to 755 or 775.');

$failed = 0;
echo "Troas Primary School setup check\n";
echo str_repeat('=', 34) . "\n";
foreach ($results as [$label, $ok, $hint]) {
    echo ($ok ? '[ OK ] ' : '[FAIL] ') . $label . "\n";
    if (!$ok) {
        $failed++;
        if ($hint !== '') {
            echo '       -> ' . $hint . "\n";
        }
    }
}
echo "\n" . ($failed === 0 ? "All checks passed.\n" : "$failed check(s) need attention (pdo_mysql is optional).\n");
