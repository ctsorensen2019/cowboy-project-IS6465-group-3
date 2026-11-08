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
    'status' => 'In Progress',
    'description' => 'The kitchen faucet is leaking and needs to be repaired.',
    'submitdate' => '2026-10-22',
    'assigned_to' => 'John Doe'
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
            <input type="hidden" name="request_id"
               value="<?php echo htmlspecialchars($request['request_id']); ?>">
          </div>
          <div class="field">
            <label for="unit">Unit *</label>
            <input
                type="integer"
                id="unit"
                name="unit"
                class="form-control"
                value="<?php echo htmlspecialchars($request['unit']); ?>"
                required
            >
          </div>
          <div class="field">
            <label for="issue">Issue / Category*</label>
            <textarea
                id="issue"
                name="issue"
                class="form-control"
                rows="4"
                maxlength="30"
                required
            ><?php echo htmlspecialchars($request['issue']); ?></textarea>
          </div>
          <fieldset class="mb-4">
            <legend class="fs-6 fw-bold">Status</legend>

            <?php
            $statusOptions = ['Pending', 'In Progress', 'Completed'];

            foreach ($statusOptions as $statusOption) {
                $checked = $request['status'] === $statusOption ? 'checked' : '';
                $id = strtolower($statusOption);
            ?>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        id="status-<?php echo $id; ?>"
                        name="status"
                        value="<?php echo $statusOption; ?>"
                        <?php echo $checked; ?>
                        required
                    >
                    <label class="form-check-label" for="status-<?php echo $id; ?>">
                        <?php echo $statusOption; ?>
                    </label>
                </div>
            <?php } ?>
        </fieldset>
          <div class="field full">
            <label for="description">Description *</label>
            <textarea
                id="description"
                name="description"
                class="form-control"
                rows="4"
                maxlength="120"
                required
            ><?php echo htmlspecialchars($request['description']); ?></textarea>
          </div>
          <div class="field">
            <label for="date_submitted">Date Submitted</label>
            <input
                type="date"
                id="date_submitted"
                name="date_submitted"
                class="form-control"
                value="<?php echo htmlspecialchars($request['date_submitted']); ?>"
                required
            >
          </div>
          <div class="field">
            <label for="assigned_to">Assigned to (optional)</label>
            <input type="text" id="assigned_to" name="assigned_to" value="<?php echo htmlspecialchars($request['assigned_to']); ?>">
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
