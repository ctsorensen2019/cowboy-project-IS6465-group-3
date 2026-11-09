<?php
$pageTitle = 'Delete Unit';
$activePage = 'units';

// Sample data (no database yet). Same records as units.php / unit-details.php.
$units = [
    ['unit' => '101', 'property' => 'Oak St.',  'status' => 'Occupied', 'resident' => 'J. Preston'],
    ['unit' => '102', 'property' => 'Oak St.',  'status' => 'Vacant',   'resident' => ''],
    ['unit' => '204', 'property' => 'Pine Ave.', 'status' => 'Occupied', 'resident' => 'C. Bradshaw']
];

$unitId = isset($_GET['unit_id']) && is_string($_GET['unit_id']) ? trim($_GET['unit_id']) : '';
$unit = null;
foreach ($units as $unitRecord) {
    if ($unitRecord['unit'] === $unitId) {
        $unit = $unitRecord;
        break;
    }
}

if ($unit === null) {
    http_response_code(404);
    exit('Unit not found.');
}

require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/unit/unit-details.php?unit_id=<?php echo rawurlencode($unit['unit']); ?>" class="back" aria-label="Back to unit details"><i class="fa-solid fa-arrow-left"></i></a> Delete Unit</h1>
      </div>

      <div class="form-card">
        <p>Are you sure you want to delete the unit below? This cannot be undone.</p>

        <dl class="detail-list">
          <dt>Unit</dt>
          <dd><?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Property</dt>
          <dd><?php echo htmlspecialchars($unit['property'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Status</dt>
          <dd><?php echo htmlspecialchars($unit['status'], ENT_QUOTES, 'UTF-8'); ?></dd>

          <dt>Resident</dt>
          <dd><?php echo $unit['resident'] !== '' ? htmlspecialchars($unit['resident'], ENT_QUOTES, 'UTF-8') : 'None'; ?></dd>
        </dl>

        <form action="<?= BASE_URL ?>/unit/units.php" method="post">
          <input type="hidden" name="unit_number" value="<?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?>">
          <div class="form-buttons">
            <a href="<?= BASE_URL ?>/unit/unit-details.php?unit_id=<?php echo rawurlencode($unit['unit']); ?>" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-danger">Yes, delete unit</button>
          </div>
        </form>
      </div>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
