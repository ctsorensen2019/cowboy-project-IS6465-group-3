<?php
$pageTitle = 'Maintenance Request Details';
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

require_once __DIR__ . '/../includes/header.php';
?>
<div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

  <main class="content">
    <div class="page-head">
      <h1 class="page-title">Request <?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?></h1>
    </div>

    <dl class="detail-list">
      <dt>Request ID</dt>
      <dd><?php echo htmlspecialchars($request['request_id'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Unit</dt>
      <dd><?php echo htmlspecialchars($request['unit'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Issue / Category</dt>
      <dd><?php echo htmlspecialchars($request['issue'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Request details</dt>
      <dd><?php echo htmlspecialchars($request['description'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Date submitted</dt>
      <dd><?php echo htmlspecialchars($request['submitdate'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Assigned to</dt>
      <dd><?php echo $request['assigned_to'] !== '' ? htmlspecialchars($request['assigned_to'], ENT_QUOTES, 'UTF-8') : 'Unassigned'; ?></dd>

      <dt>Status</dt>
      <dd><?php echo htmlspecialchars($request['status'], ENT_QUOTES, 'UTF-8'); ?></dd>
    </dl>

    <div class="detail-actions">
      <a class="btn btn-primary" href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=<?php echo rawurlencode($request['request_id']); ?>">Edit</a>
      <a class="btn btn-secondary" href="<?= BASE_URL ?>/maintenance/maintenance.php">Back to maintenance requests</a>
    </div>
  </main>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
