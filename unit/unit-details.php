<?php
$pageTitle = 'Unit Details';
$activePage = 'units';

$units = [
    [
        'unit' => '101',
        'property' => 'Oak St.',
        'status' => 'Occupied',
        'resident' => 'J. Preston',
        'bed' => '1',
        'bath' => '1',
        'price' => '1150'
    ],
    [
        'unit' => '102',
        'property' => 'Oak St.',
        'status' => 'Vacant',
        'resident' => '',
        'bed' => '2',
        'bath' => '1.5',
        'price' => '1800'
    ],
    [
        'unit' => '204',
        'property' => 'Pine Ave.',
        'status' => 'Occupied',
        'resident' => 'C. Bradshaw',
        'bed' => '2',
        'bath' => '3',
        'price' => '3000'
    ]
];

$unitId = isset($_GET['unit']) && is_string($_GET['unit']) ? trim($_GET['unit']) : '';
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
      <h1 class="page-title">Unit <?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?></h1>
    </div>

    <dl class="detail-list">
      <dt>Unit</dt>
      <dd><?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Property</dt>
      <dd><?php echo htmlspecialchars($unit['property'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Status</dt>
      <dd><?php echo htmlspecialchars($unit['status'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Resident</dt>
      <dd><?php echo $unit['resident'] !== '' ? htmlspecialchars($unit['resident'], ENT_QUOTES, 'UTF-8') : 'None'; ?></dd>

      <dt>Bed</dt>
      <dd><?php echo htmlspecialchars($unit['bed'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Bath</dt>
      <dd><?php echo htmlspecialchars($unit['bath'], ENT_QUOTES, 'UTF-8'); ?></dd>

      <dt>Price</dt>
      <dd><?php echo htmlspecialchars($unit['price'], ENT_QUOTES, 'UTF-8'); ?></dd>
    </dl>

    <div class="detail-actions">
      <a class="btn btn-primary" href="<?= BASE_URL ?>/unit/edit-unit.php?id=<?php echo rawurlencode($unit['unit']); ?>">Edit</a>
      <a class="btn btn-secondary" href="<?= BASE_URL ?>/unit/units.php">Back to units</a>
    </div>
  </main>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
