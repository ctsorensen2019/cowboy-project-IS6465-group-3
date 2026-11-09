<?php
$pageTitle = 'Delete Maintenance Request';
$activePage = 'maintenance';

// Sample data (no database yet). Same records as maintenance.php / request-details.php.
$requests = [
    ['request_id' => 'REQ-001', 'unit' => '101', 'issue' => 'Leaking Faucet',                'status' => 'Pending',     'submitdate' => '10/18/2026'],
    ['request_id' => 'REQ-002', 'unit' => '204', 'issue' => 'AC not cooling',                'status' => 'In progress', 'submitdate' => '10/24/2026'],
    ['request_id' => 'REQ-003', 'unit' => '305', 'issue' => 'Broken Window',                 'status' => 'Completed',   'submitdate' => '10/27/2026'],
    ['request_id' => 'REQ-004', 'unit' => '406', 'issue' => 'Dishwasher not draining',       'status' => 'In progress', 'submitdate' => '10/27/2026'],
    ['request_id' => 'REQ-005', 'unit' => '507', 'issue' => 'Electrical Outlet not working', 'status' => 'Completed',   'submitdate' => '10/27/2026']
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

require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/maintenance/request-details.php?request_id=<?php echo rawurlencode($request['request_id']); ?>" class="back" aria-label="Back to request details"><i class="fa-solid fa-arrow-left"></i></a> Delete Maintenance Request</h1>
      </div>

      <div class="form-card">
        <p>Are you sure you want to delete the request below? This cannot be undone.</p>

        <dl class="detail-list">
          <dt>Request ID</dt>
          <dd><?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Unit</dt>
          <dd><?php echo htmlspecialchars($request['unit'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Issue / Category</dt>
          <dd><?php echo htmlspecialchars($request['issue'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Status</dt>
          <dd><?php echo htmlspecialchars($request['status'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Date submitted</dt>
          <dd><?php echo htmlspecialchars($request['submitdate'], ENT_QUOTES, 'UTF-8'); ?></dd>
        </dl>

        <form action="<?= BASE_URL ?>/maintenance/maintenance.php" method="post">
          <input type="hidden" name="request_id" value="<?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?>">
          <div class="form-buttons">
            <a href="<?= BASE_URL ?>/maintenance/request-details.php?request_id=<?php echo rawurlencode($request['request_id']); ?>" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-danger">Yes, delete request</button>
          </div>
        </form>
      </div>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
