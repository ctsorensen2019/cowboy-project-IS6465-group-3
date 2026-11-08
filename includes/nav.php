<?php
// Sidebar. Pages set $activePage to: 'dashboard', 'units', 'maintenance' or 'residents'.
$activePage = $activePage ?? '';
$navClass = static fn(string $key): string => $activePage === $key ? ' class="active"' : '';
?>
    <nav class="sidebar">
      <ul>
        <li><a href="<?= BASE_URL ?>/index.php"<?= $navClass('dashboard') ?>><i class="fa-solid fa-house-chimney"></i> Dashboard</a></li>
        <li><a href="<?= BASE_URL ?>/unit/units.php"<?= $navClass('units') ?>><i class="fa-solid fa-building"></i> Units</a></li>
        <li><a href="<?= BASE_URL ?>/maintenance/maintenance.php"<?= $navClass('maintenance') ?>><i class="fa-solid fa-wrench"></i> Maintenance</a></li>
        <li><a href="<?= BASE_URL ?>/residents/resident.php"<?= $navClass('residents') ?>><i class="fa-solid fa-people-group"></i> Residents</a></li>
      </ul>
      <hr>
      <ul>
        <li><a href="<?= BASE_URL ?>/login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
      </ul>
    </nav>
