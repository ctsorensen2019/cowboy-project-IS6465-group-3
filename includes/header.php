<?php
// Shared page header. Opens <html>/<body> and (optionally) the purple site header.
// Pages set these BEFORE requiring this file:
//   $pageTitle      - text for <title>
//   $showSiteHeader - set to false on login.php (it has its own banner)

// BASE_URL = web path of the project root ('' under `php -S`, '/folder' under XAMPP).
// Lets links and CSS work from any folder depth.
if (!defined('BASE_URL')) {
    $docRoot  = str_replace('\\', '/', (string) realpath($_SERVER['DOCUMENT_ROOT'] ?? ''));
    $projRoot = str_replace('\\', '/', (string) realpath(__DIR__ . '/..'));
    define('BASE_URL', ($docRoot !== '' && strpos($projRoot, $docRoot) === 0)
        ? substr($projRoot, strlen($docRoot))
        : '');
}
$pageTitle      = $pageTitle ?? 'Cowboy Property Management';
$showSiteHeader = $showSiteHeader ?? true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?> | Cowboy Property Management</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">
</head>
<body>
<?php if ($showSiteHeader): ?>
  <header class="site-header">
    <div class="brand" href="<?= BASE_URL ?>/"><i class="fa-solid fa-house-chimney"></i> Cowboy Property Management</div>
    <a href="#" class="user<?= !empty($userUnderlined) ? ' underlined' : '' ?>">Admin</a>
  </header>
<?php endif; ?>
