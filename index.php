<?php
$pageTitle = 'Dashboard';
$activePage = 'dashboard';
$userUnderlined = true;
require_once __DIR__ . '/includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/includes/nav.php'; ?>

    <main class="content">
      <section class="stats">
        <div class="stat-card"><i class="fa-solid fa-building"></i><span class="label">Total Units</span><span class="value">24</span></div>
        <div class="stat-card"><i class="fa-solid fa-people-group"></i><span class="label">Occupied</span><span class="value">18</span></div>
        <div class="stat-card"><i class="fa-solid fa-house"></i><span class="label">Vacant</span><span class="value">6</span></div>
        <div class="stat-card"><i class="fa-solid fa-wrench"></i><span class="label">Open Requests</span><span class="value">5</span></div>
      </section>

      <section class="panel">
        <h2>Recent Maintenance Requests</h2>
        <table class="simple-table dash-table">
          <thead><tr><th>Unit</th><th>Issue</th><th>Status</th></tr></thead>
          <tbody>
            <tr><td>101</td><td>Plumbing</td><td><span class="badge badge-pending">Pending</span></td></tr>
            <tr><td>204</td><td>AC Repair</td><td><span class="badge badge-in-progress">In Progress</span></td></tr>
            <tr><td>305</td><td>Electrical</td><td><span class="badge badge-completed">Completed</span></td></tr>
          </tbody>
        </table>
      </section>

      <div class="dash-actions">
        <a href="<?= BASE_URL ?>/unit/add-unit.php" class="btn btn-primary">+ Add Unit</a>
        <a href="<?= BASE_URL ?>/maintenance/maintenance.php" class="btn btn-primary">View Request</a>
      </div>
    </main>
  </div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
