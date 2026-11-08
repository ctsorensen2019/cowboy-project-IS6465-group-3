<?php
$pageTitle = 'Edit Maintenance Request';
$activePage = 'maintenance';
require_once __DIR__ . '/../includes/header.php';
/* Example request data.
   Replace these values with the request record retrieved from your database. */
$request = [
    'request_id' => 'REQ-001',
    'unit' => '101',
    'issue' => 'Leaking Faucet',
    'submitdate' => '2026-10-22',
    'status' => 'In Progress'
];
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/maintenance/maintenance.php" class="back" aria-label="Back to maintenance requests"><i class="fa-solid fa-arrow-left"></i></a> Add / Edit Maintenance Request</h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/maintenance/maintenance.php" method="post">
        <div class="form-grid">
          <div class="field">
            <label for="request_id">Request ID</label>
            <input type="text" id="request_id" name="request_id" value="REQ-001" readonly>
          </div>
          <div class="field">
            <label for="unit">Unit *</label>
            <input type="text" id="unit" name="unit" value="101" required>
          </div>
          <div class="field">
            <label for="issue">Issue / Category*</label>
            <textarea
                id="topic"
                name="topic"
                class="form-control"
                rows="4"
                maxlength="120"
                required
            ><?php echo htmlspecialchars($request['topic']); ?></textarea>
          </div>
          <div class="field">
            <label for="status">Status *</label>
            <input type="text" id="status" name="status" value="Pending" required>
          </div>
          <div class="field full">
            <label for="description">Description *</label>
            <textarea id="description" name="description" required></textarea>
          </div>
          <div class="field">
            <label for="date_submitted">Date Submitted</label>
            <input type="text" id="date_submitted" name="date_submitted" value="10/18/2026">
          </div>
          <div class="field">
            <label for="assigned_to">Assigned to (optional)</label>
            <input type="text" id="assigned_to" name="assigned_to">
          </div>
        </div>
        <div class="form-buttons">
          <a href="<?= BASE_URL ?>/maintenance/maintenance.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Request</button>
        </div>
      </form>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
