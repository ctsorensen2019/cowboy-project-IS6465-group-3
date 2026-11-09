<?php
$pageTitle = 'New Maintenance Request';
$activePage = 'maintenance';
require_once __DIR__ . '/../includes/header.php';

// Next request ID and today's date are prefilled (UC-05 step 2). Values come from the DB in the final project.
$nextRequestId = 'REQ-006';
$today = (new DateTimeImmutable('today'))->format('Y-m-d');
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/maintenance/maintenance.php" class="back" aria-label="Back to maintenance requests"><i class="fa-solid fa-arrow-left"></i></a> New Maintenance Request</h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/maintenance/maintenance.php" method="post">
        <div class="form-grid">
          <div class="field">
            <label for="request_id">Request ID</label>
            <input type="text" id="request_id" name="request_id" value="<?php echo $nextRequestId; ?>" readonly>
          </div>
          <div class="field">
            <label for="unit">Unit *</label>
            <input type="text" id="unit" name="unit" required>
          </div>
          <div class="field">
            <label for="issue">Issue / Category *</label>
            <input type="text" id="issue" name="issue" maxlength="30" required>
          </div>
          <div class="field">
            <label for="status">Status *</label>
            <select id="status" name="status" required>
              <option value="Pending" selected>Pending</option>
              <option value="In progress">In progress</option>
              <option value="Completed">Completed</option>
            </select>
          </div>
          <div class="field full">
            <label for="description">Description *</label>
            <textarea id="description" name="description" rows="4" minlength="10" maxlength="500" required></textarea>
          </div>
          <div class="field">
            <label for="date_submitted">Date Submitted</label>
            <input type="date" id="date_submitted" name="date_submitted" value="<?php echo $today; ?>" max="<?php echo $today; ?>" required>
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
