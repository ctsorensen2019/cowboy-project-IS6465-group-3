<?php
$pageTitle = 'Edit Maintenance Request';
$activePage = 'maintenance';
$requests = [
    [
        'request_id' => 'REQ-001',
        'unit' => '101',
        'issue' => 'Leaking Faucet',
        'status' => 'Pending',
        'description' => 'The kitchen faucet is leaking and needs to be repaired.',
        'submitdate' => '10/18/2026',
        'assigned_to' => ''
    ],
    [
        'request_id' => 'REQ-002',
        'unit' => '204',
        'issue' => 'AC not cooling',
        'status' => 'In progress',
        'description' => 'The air conditioning unit is not cooling effectively.',
        'submitdate' => '10/24/2026',
        'assigned_to' => ''
    ],
    [
        'request_id' => 'REQ-003',
        'unit' => '305',
        'issue' => 'Broken Window',
        'status' => 'Completed',
        'description' => 'The window in the living room is broken and needs to be replaced.',
        'submitdate' => '10/27/2026',
        'assigned_to' => ''
    ],
    [
        'request_id' => 'REQ-004',
        'unit' => '406',
        'issue' => 'Dishwasher not draining',
        'status' => 'In progress',
        'description' => 'The dishwasher is not draining properly and needs to be serviced.',
        'submitdate' => '10/27/2026',
        'assigned_to' => ''
    ],
    [
        'request_id' => 'REQ-005',
        'unit' => '507',
        'issue' => 'Electrical Outlet not working',
        'status' => 'Completed',
        'description' => 'The electrical outlet in the living room is not working and needs to be repaired.',
        'submitdate' => '10/27/2026',
        'assigned_to' => ''
    ]
];

$requestId = isset($_GET['request_id']) && is_string($_GET['request_id']) ? trim($_GET['request_id']) : '';
$request = null;
foreach ($requests as $requestRecord) {
    if ($requestRecord['request_id'] === $requestId) {
        $request = $requestRecord;
        break;
    }
}

if ($request === null) {
    http_response_code(404);
    exit('Maintenance request not found.');
}

$submittedDate = DateTimeImmutable::createFromFormat('!m/d/Y', $request['submitdate']);
$dateSubmittedValue = $submittedDate ? $submittedDate->format('Y-m-d') : '';

require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/maintenance/maintenance.php" class="back" aria-label="Back to maintenance requests"><i class="fa-solid fa-arrow-left"></i></a> Edit Request <?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?></h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/maintenance/maintenance.php" method="post">
        <div class="form-grid">
          <input type="hidden" name="request_id" value="<?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?>">
          <div class="field">
            <label for="unit">Unit *</label>
            <input type="text" id="unit" name="unit" value="<?php echo htmlspecialchars($request['unit'], ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="field">
            <label for="issue">Issue / Category *</label>
            <input type="text" id="issue" name="issue" maxlength="30" value="<?php echo htmlspecialchars($request['issue'], ENT_QUOTES, 'UTF-8'); ?>" required>
          </div>
          <div class="field">
            <label for="status">Status *</label>
            <select id="status" name="status" required>
              <?php foreach (['Pending', 'In progress', 'Completed'] as $statusOption) { ?>
                <option value="<?php echo $statusOption; ?>"<?php echo strcasecmp($request['status'], $statusOption) === 0 ? ' selected' : ''; ?>><?php echo $statusOption; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="field full">
            <label for="description">Description *</label>
            <textarea
                id="description"
                name="description"
                rows="4"
                maxlength="120"
                required
            ><?php echo htmlspecialchars($request['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
          </div>
          <div class="field">
            <label for="date_submitted">Date Submitted</label>
            <input
                type="date"
                id="date_submitted"
                name="date_submitted"
                value="<?php echo htmlspecialchars($dateSubmittedValue, ENT_QUOTES, 'UTF-8'); ?>"
                required
            >
          </div>
          <div class="field">
            <label for="assigned_to">Assigned to (optional)</label>
            <input type="text" id="assigned_to" name="assigned_to" value="<?php echo htmlspecialchars($request['assigned_to'], ENT_QUOTES, 'UTF-8'); ?>">
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
