<?php
$pageTitle = 'Maintenance Requests';
$activePage = 'maintenance';
require_once __DIR__ . '/../includes/header.php';

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
        <h1>Maintenance requests</h1>
        <thead>
            <tr>
                <th>Request</th>
                <th>Unit</th>
                <th>Issue</th>
                <th>Status</th>
                <th>Date Submitted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $request) { ?>
                <tr>
                    <td><?php echo $request['request_id']; ?></td>
                    <td><?php echo htmlspecialchars($request['unit'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($request['issue'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($request['status'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($request['submitdate'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="actions">
                        <a href="<?= BASE_URL ?>/maintenance/edit-maintenance.php?id=<?php echo $request['request_id']; ?>" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="<?= BASE_URL ?>/maintenance/delete-maintenance.php?id=<?php echo $request['request_id']; ?>" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                        <a class="btn btn-outline-primary btn-sm"
                           href="request-details.php?request_id=<?php echo $request['request_id']; ?>">
                            View
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
