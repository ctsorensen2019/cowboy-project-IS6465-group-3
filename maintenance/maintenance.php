<?php
$pageTitle = 'Maintenance Requests';
$activePage = 'maintenance';
require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><i class="fa-solid fa-wrench"></i> Maintenance Requests</h1>
        <a href="<?= BASE_URL ?>/maintenance/add-maintenance.php" class="btn btn-primary">+ New Request</a>
      </div>

      <div class="filter-row">
        <div class="search-wrap">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search by unit, issue, or request ID" aria-label="Search requests">
        </div>
        <label for="status_filter">Status</label>
        <input type="text" id="status_filter" class="status-filter">
      </div>

      <table class="grid-table">
        <thead><tr><th>Request ID</th><th>Unit</th><th>Issue</th><th>Date Submitted</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
          <tr>
            <td>REQ-001</td><td>101</td><td>Leaking Faucet</td><td>10/18/2026</td>
            <td class="status-pending">Pending</td>
            <td class="actions">
              <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=REQ-001" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=REQ-001" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-002</td><td>204</td><td>AC not cooling</td><td>10/27/2026</td>
            <td class="status-in-progress">In progress</td>
            <td class="actions">
              <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=REQ-002" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=REQ-002" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-003</td><td>305</td><td>Broken Window</td><td>10/25/2026</td>
            <td class="status-completed">Completed</td>
            <td class="actions">
              <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=REQ-003" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=REQ-003" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-004</td><td>207</td><td>Dishwasher not draining</td><td>10/24/2026</td>
            <td class="status-in-progress">In progress</td>
            <td class="actions">
              <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=REQ-004" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=REQ-004" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-005</td><td>102</td><td>Electrical Outlet not working</td><td>10/22/2026</td>
            <td class="status-completed">Completed</td>
            <td class="actions">
              <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=REQ-005" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=REQ-005" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
